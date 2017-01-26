<?php


defined('INDEX') or die('Доступ закрыт!');



class class_article extends ACore{




    protected $db;

    protected function show_art($id){

        $block="<h2 align='center'> %s </h2>
                   <p>автор: %s</p>
                      <p>%s</p>";
        $db = new MyDB();
        $db ->connect();
        $db->run(" SELECT * FROM articles WHERE id='$id'");
        while($myrow=$db->row())
            printf($block, $myrow[name],$myrow[creator],$myrow[text]);

        $db->close();


    }


    public function get_body($id)
    {
        $this->get_header();
        $this->get_nav();
        $this->get_cat();
        $this->show_art($id);
    }



}