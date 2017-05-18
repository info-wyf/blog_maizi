using System;
using System.Threading;
using System.Net;
using System.Collections;
using System.Collections.Specialized;
using System.Collections.Generic;
using System.Security;
using System.Diagnostics;
using System.Security.Permissions;
using System.Text;
using System.IO;
using System.Reflection;
using System.Runtime.InteropServices;
using System.Text.RegularExpressions;
using MySql.Data.MySqlClient;
class a{
static void Main(string[] args){
Console.WriteLine("MySql InnoDB Restore tool by zcgonvh.\r\n");
if(args.Length!=5){Console.WriteLine("usage: InnoDBRestore <username> <password> <port> <srcdir> <destDB>");return;}
string dbname=args[4];
try{
MySqlConnection conn=new MySqlConnection(string.Format("Host=localhost;UserName={0};Password={1};Port={2};",args[0],args[1],args[2]));
conn.Open();
MySqlCommand cmd=conn.CreateCommand();
cmd.CommandTimeout=0x200000;
cmd.CommandText="SET GLOBAL innodb_file_format='Barracuda';";//innodb-compressed row_format
cmd.ExecuteNonQuery();
cmd.CommandText="set global innodb_file_per_table='on';";//single innodb
cmd.ExecuteNonQuery();
cmd.CommandText="set names utf8;";
cmd.ExecuteNonQuery();
cmd.CommandText="create database "+dbname;
cmd.ExecuteNonQuery();
cmd.CommandText="select @@datadir";
string datadir=cmd.ExecuteScalar()+"\\"+dbname+"\\";
string filedir=args[3];
conn.ChangeDatabase(dbname);
foreach(FileInfo frm in new DirectoryInfo(filedir).GetFiles("*.frm"))
{
  Console.WriteLine("restoring : "+frm);
  string tablename=frm.Name.Substring(0,frm.Name.Length-4);
  //modify frm set type=memory
  try{
  byte[] b=File.ReadAllBytes(frm.FullName);
  if(b[0]!=0xfe || b[1]!=0x01) //table magic fe 01
  {
      Console.WriteLine("not a table frm");
      continue;
  }
  if(b[3]!=0x0c) //table type innodb
  {
      if(b[3]==0x09)
      {
        Console.WriteLine("this is a MyISAM db, copy it.");
        frm.CopyTo(datadir+frm.Name,true);
        File.Copy(filedir+tablename+".MYD",datadir+tablename+".MYD");
        File.Copy(filedir+tablename+".MYI",datadir+tablename+".MYI");
      }
      else
      {
        Console.WriteLine("unknown table type");
      }
      continue;
  }
  uint offset=BitConverter.ToUInt16(b,6);//io_size
  offset+=BitConverter.ToUInt16(b,0x0e);//tmp_key_length
  offset+=BitConverter.ToUInt16(b,0x10);//rec_length
  offset+=2;//00 00
  uint len=BitConverter.ToUInt16(b,(int)offset);//type string length,in word
  offset+=2;
  if(Encoding.Default.GetString(b,(int)offset,(int)len)!="InnoDB")
  {
      Console.WriteLine("not an innodb frm");
      continue;
  }
  b[3]=6;//_DB_TYPE_HEAP
  Array.Copy(new byte[]{0x4d,0x45,0x4d,0x4f,0x52,0x59},0,b,offset,6);//MEMORY
  FileInfo ibd=new FileInfo(frm.FullName.Substring(0,frm.FullName.Length-3)+"ibd");
  if(!ibd.Exists)
  {
    Console.WriteLine("can not found ibd: "+ibd);
    continue;
  }
  File.WriteAllBytes(datadir+frm.Name,b);//write to frm file
  cmd.CommandText="flush tables;";
  cmd.ExecuteNonQuery();
  cmd.CommandText="SHOW CREATE TABLE `"+tablename+"`";
  MySqlDataReader reader=cmd.ExecuteReader();
  reader.Read();
  string createsql=reader[1].ToString().Replace(" ENGINE=MEMORY"," ENGINE=InnoDB");
  reader.Close();
  cmd.CommandText="drop table `"+tablename+"`";
  cmd.ExecuteNonQuery();
  cmd.CommandText=createsql;
  cmd.ExecuteNonQuery();
  cmd.CommandText="ALTER TABLE `"+tablename+"` DISCARD TABLESPACE;";
  cmd.ExecuteNonQuery();
  ibd.CopyTo(datadir+ibd.Name,true);
  try{
  cmd.CommandText="ALTER TABLE `"+tablename+"` IMPORT TABLESPACE;";
  cmd.ExecuteNonQuery();
  }catch(MySqlException ex)
  {
    //change row_format
    if(new Regex(@"Schema mismatch \(Table has ROW_TYPE_(\w+) row format, .ibd file has ROW_TYPE_(\w+) row format.\)").IsMatch(ex.Message))
    {
      string type=new Regex(@"Schema mismatch \(Table has ROW_TYPE_(\w+) row format, .ibd file has ROW_TYPE_(\w+) row format.\)").Matches(ex.Message)[0].Groups[2].Value.ToString();
      cmd.CommandText="drop table `"+tablename+"`";
      cmd.ExecuteNonQuery();
      File.Delete(datadir+ibd.Name);
      cmd.CommandText=createsql+" row_format="+type;
      cmd.ExecuteNonQuery();
      cmd.CommandText="ALTER TABLE `"+tablename+"` DISCARD TABLESPACE;";
      cmd.ExecuteNonQuery();
      ibd.CopyTo(datadir+ibd.Name,true);
      cmd.CommandText="ALTER TABLE `"+tablename+"` IMPORT TABLESPACE;";
      cmd.ExecuteNonQuery();
    }else{Console.WriteLine("unknown error:"+ex);}
  }
  }catch(Exception ex){Console.WriteLine("error!! :"+ex);}
}
conn.Close();
}catch(Exception ex){Console.WriteLine(ex);}
}
}