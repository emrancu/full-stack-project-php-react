<?php

namespace AwesomePHP\App\Controllers;

class HomeController {

	public function index(){
		$name = "Al EMran";
		return view('home/index.php', compact('name'));
	}

}