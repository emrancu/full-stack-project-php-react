<?php

namespace AwesomePHP\App\Controllers;

class AboutController {

	public function index(){
		$title = "We are XpeedStudio family";
		return view('home/about.php', compact('title'));
	}

}