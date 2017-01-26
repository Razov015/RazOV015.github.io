<?php
defined('INDEX') or die('Доступ закрыт!');


class Route {


    protected $class, $id, $metaName;
    function __construct()
    {

        $route_array = explode('/', $_SERVER['REQUEST_URI']);
        $id_array = explode('_', $route_array[2]);

        if (!empty($id_array[0]))
            $this->class = $id_array[0];
        else
           $this->class = 'main';
        if (!empty($id_array[2]))
            $this->id = $id_array[2];
        else $this->id = 0;


        if (!empty($id_array[1]))
            $this->metaName = $id_array[1];
        else $this->metaName = 0;


        $this->class = trim(strip_tags($this->class));

        $this->id = trim(strip_tags($this->id));

        $this->metaName = trim(strip_tags($this->metaName));

    }
    

    public function get_class()
    {
        return $this->class;
    }

    public function  get_id()
    {
        return $this->id;
    }


    public function  get_metaName()
    {
        return $this->metaName;
    }


}
