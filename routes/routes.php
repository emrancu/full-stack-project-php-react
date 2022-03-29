<?php

use AwesomePHP\App\Controllers\AboutController;
use AwesomePHP\App\Controllers\HomeController;

$path =  $_SERVER['REQUEST_URI'] ;

 if($path == '/'){
	 $home = new HomeController();
	 $home->index();
 }


if($path == '/about'){
	$home = new AboutController();
	$home->index();
}


if($path == '/about'){
	 echo "Nothing Found" ;
}