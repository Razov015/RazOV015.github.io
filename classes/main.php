<?php

defined('INDEX') or die('Доступ закрыт!');


class class_main extends ACore{

    public function get_body($id)
    {
        $this->get_header();
        $this->get_nav();
        $this->get_cat();
    }

}




?>