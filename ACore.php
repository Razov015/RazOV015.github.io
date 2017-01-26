<?php


defined('INDEX') or die('Доступ закрыт!');
abstract class ACore {

	protected $db;


	protected function get_header(){

		echo"<header></header>";
	}


	protected function get_nav(){
		echo   ("	<nav>
		<ul class=\"menu\">");
		$db = new MyDB();
		$db ->connect();
		$db->run(' SELECT * FROM navigation' );
		while($myrow=$db->row())
		{
			printf("<li><a href='%s' class='nav''>%s</a></li>", $myrow[address], $myrow[name]);
		}
			echo"</nav>";

        $db->close();
	}

	protected function get_cat(){

        echo   ("	<aside>
		<ul class=\"menu\">
		<h2 ><p align=\"center\" style=\"margin-bottom:31px\"> Категории</p></h2>");
        $db = new MyDB();
        $db ->connect();
        $db->run(' SELECT * FROM categories' );
        while($myrow=$db->row()) {
            printf("<li><a href=view_%s_%s class='kat' >%s</a></li>", $myrow[meta_name],$myrow[id],$myrow[name]);
        }
        echo"</aside>";
        $db->close();


	}
	abstract function get_body($id);

}
?>