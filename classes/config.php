<?php

    defined('INDEX') or die('Доступ закрыт!');



class MyDB
{


     const HOST = "localhost";
     const USER = "Kostya";
     const PASS = "12345";
     const DB = "projectzero";

    protected $link, $query, $err, $result, $data, $fetch;

    function connect()
    {
        $this->link = mysql_connect(self::HOST, self::USER, self::PASS);
        mysql_select_db(self::DB);
        mysql_query('SET NAMES utf8');    }


    function close(){
        mysql_close($this->link);
    }

    function run($query){

        $this->query = $query;
        $this->result = mysql_query($this->query, $this->link);
        $this->err = mysql_error();
    }


    function row(){
        $this->data = mysql_fetch_array($this->result);
        return $this->data;
    }



}
?>