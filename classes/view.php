<?php

defined('INDEX') or exit('Доступ закрыт!');


class class_view extends ACore{



protected $db;

    protected function get_art($id){

        $block="<table class='art_tab ' align='center'>
                    <tr>
                    <td><p><a href='article_%s_%s' class='art_a'> %s</a></p></td>
                    </tr>
                    <tr>
                    <td><p>Автор: %s</p></td>
                    </tr>
                    <tr>
                    <td><p>Дата создания: %s</p></td>
                    </tr>
                    <tr>
                    <td><p> %s</p></td>
                    </tr>
                    </table>";
        $db = new MyDB();
        $db ->connect();
        $db->run(" SELECT * FROM articles WHERE id2='$id'");
        while($myrow=$db->row()) {
            printf($block,$myrow[meta_name], $myrow[id],$myrow[name],$myrow[creator],$myrow[date],$myrow[descrip]);
        };
        $db->close();


    }


    public function get_body($id)
    {
        $this->get_header();
        $this->get_nav();
        $this->get_cat();
        $this->get_art($id);
    }



}




?>