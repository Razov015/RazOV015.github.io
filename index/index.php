<!doctype html>
<html>
<head>
    <meta charset="windows-1251">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>
</title>
</head>
<body>

<div id="wrapper">
<?php

define("INDEX","");
require_once("classes/config.php");
require_once("classes/ACore.php");
require_once("classes/Route.php");
require_once("classes/article.php");


$route = new Route();
$id = $route->get_id();
$class = $route->get_class();

if(file_exists("classes/".$class.".php"))
{
    require_once("classes/".$class.".php");

    if (class_exists('class_'.$class))
    {
        $class = 'class_'.$class;
        $obj = new $class;
        $obj->get_body($id);

    }
    else

        die ("ERROR 404");


}

else

    die( "ERROR 404");



?>
</div>




</body>
</html>



