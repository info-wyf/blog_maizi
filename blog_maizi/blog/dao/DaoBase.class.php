<?php

/**
 * 
 * @authors Kerwin_info (you@example.org)
 * @date    2016/06/04 08:11:22
 */
class DaoBase {

    protected $table_name; //这两种属性，protected与private
    private $mysqli;


    public function __construct() {
        if (empty($this->table_name)) {
            die('table_name is null');
        }
        $this->getDbConnect();
    }

    //吸收器，当mysql操作被关闭时释放
    public function __destruct() {
        $this->mysqli->close();
    }

    //建立与数据库mysql的连接
    public function getDbConnect() {
        $this->mysqli = new mysqli('localhost', 'root', 'root', 'blog');
        $this->mysqli->set_charset("utf8");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    //下面是四种最基本的方法：增、删、改、查
    protected function select($filed, $where = false, $endWith = false) {
        //此为查的方式
        if (empty($filed)) {
            return false;
        }
        $filed = self::createFiled($filed);
        $where = self::createWhere($where);

        $sql .= "select " . $filed . " from " . $this->table_name . " " . $where . " " . $endWith;
        $result = $this->mysqli->query($sql);
        $result = self::fomatSqlResult($result);

        return $result;
    }

    protected function getCount($where) {

        $where = self::createWhere($where);

        $sql .= "select count(*) as total from " . $this->table_name . " " . $where;

        $result = $this->mysqli->query($sql);
        $result = self::fomatSqlResult($result);

        return $result[0]['total'];
    }

    //此为插入操作，增：比如向数据库中添加用户，帖子，及评论等
    public function insert($data) {
        $filed = "(";
        $values = "(";

        foreach ($data as $k => $v) {
            $filed .= "`$k`,";
            $values .= "'$v',";
        }
        $filed = trim($filed, ',') . ")";
        $values = trim($values, ',') . ")";

        $insert = "insert into " . $this->table_name . $filed . "values" . $values;

        //返回boolean
        $result = $this->mysqli->query($insert);
        return $result;
    }

    //此为改
    public function update($data, $where = false) {
        $filed = "";
        foreach ($data as $k => $v) {
            $filed .= " $k = '$v',";
        }
        $filed = trim($filed, ',');

        $where = self::createWhere($where);

        $update = "update " . $this->table_name . " set " . $filed . " " . $where;

        //返回boolean
        $result = $this->mysqli->query($update);
        return $result;
    }

    //此为删
    public function delete($where) {
        $data = array('is_deleted' => 1);
        return $this->update($data, $where);
    }

    //此为审核通过
    public function judge_pass($where) {
        $data = array('audit' => 0,
            'is_deleted' => 0);
        return $this->update($data, $where);
    }

    //此为审核不通过
    public function judge_deny($where) {
        $data = array('audit' => 1,
            'is_deleted' => 1);
        return $this->update($data, $where);
    }

    private static function fomatSqlResult($result) {
        $ret = array();

        while ($row = $result->fetch_assoc()) {
            $ret[] = $row;
        }
        return $ret;
    }

    private static function createFiled($filed) {
        $sql = "";
        foreach ($filed as $key => $value) {
            $sql .= "`$value`,";
        }

        return trim($sql, ',');
        ;
    }

    private static function createWhere($where) {
        if (empty($where)) {
            return false;
        }
        $sql = " where ";
        foreach ($where as $key => $value) {
            $sql .= $key . "'$value'" . " and ";
        }
        return trim($sql, ' and');
        ;
    }

}