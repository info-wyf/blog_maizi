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
Console.WriteLine("MySql frm to sql tool by zcgonvh.\r\n");
if(args.Length!=4){Console.WriteLine("usage: mysqlfrm <username> <password> <port> <srcdir> ");return;}
string dbname=Guid.NewGuid().ToString("n");
try{
MySqlConnection conn=new MySqlConnection(string.Format("Host=localhost;UserName={0};Password={1};Port={2};",args[0],args[1],args[2]));
conn.Open();
MySqlCommand cmd=conn.CreateCommand();
cmd.CommandTimeout=0x200000;
cmd.CommandText="set names utf8;";
cmd.ExecuteNonQuery();
cmd.CommandText="create database `"+dbname+"`";
cmd.ExecuteNonQuery();
cmd.CommandText="select @@datadir";
string datadir=cmd.ExecuteScalar()+"\\"+dbname+"\\";
string filedir=args[3];
conn.ChangeDatabase(dbname);
foreach(FileInfo frm in new DirectoryInfo(filedir).GetFiles("*.frm"))
{
  Console.WriteLine("convert : "+frm);
  string tablename=frm.Name.Substring(0,frm.Name.Length-4);
  string oldtype=null;
  try{
  byte[] b=File.ReadAllBytes(frm.FullName);
  if(b[0]!=0xfe || b[1]!=0x01) //table magic fe 01
  {
      Console.WriteLine("not a table frm");
      continue;
  }
  if(b[3]==10)//_DB_TYPE_MRG_MYISAM 
  {
      File.WriteAllText(datadir+tablename+".mrg","");
  }
  else if(b[3]==11){}//_DB_TYPE_BLACKHOLE_DB
  else if(b[3]==16)//_DB_TYPE_ARCHIVE_DB
  {
      File.WriteAllText(datadir+tablename+".arz","");
  }
  else if(b[3]==17)//_DB_TYPE_CSV_DB
  {
      File.WriteAllText(datadir+tablename+".csv","");
  }
  else//modify frm set type=memory
  {
    uint offset=BitConverter.ToUInt16(b,6);//io_size
    offset+=BitConverter.ToUInt16(b,0x0e);//tmp_key_length
    offset+=BitConverter.ToUInt16(b,0x10);//rec_length
    offset+=2;//00 00
    uint len=BitConverter.ToUInt16(b,(int)offset);//type string length,in word
    offset+=2;
    oldtype=Encoding.Default.GetString(b,(int)offset,(int)len);
    b[3]=6;//_DB_TYPE_HEAP
    Array.Copy(new byte[]{0x4d,0x45,0x4d,0x4f,0x52,0x59},0,b,offset,6);//MEMORY
  }
  File.WriteAllBytes(datadir+frm.Name,b);//write to frm file
  cmd.CommandText="flush tables;";
  cmd.ExecuteNonQuery();
  cmd.CommandText="SHOW CREATE TABLE `"+tablename+"`";
  MySqlDataReader reader=cmd.ExecuteReader();
  reader.Read();
  string sql=reader[1].ToString();
  if(oldtype!=null){sql=sql.Replace(" ENGINE=MEMORY"," ENGINE="+oldtype);}
  File.WriteAllText(frm.FullName+".sql",sql);
  reader.Close();
  cmd.CommandText="drop table `"+tablename+"`";
  cmd.ExecuteNonQuery();
  
  }catch(Exception ex){Console.WriteLine("error!! :"+ex);}
}
cmd.CommandText="drop database `"+dbname+"`";
cmd.ExecuteNonQuery();
conn.Close();
}catch(Exception ex){Console.WriteLine(ex);}
}
}