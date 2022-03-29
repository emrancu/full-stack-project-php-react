<?php

namespace AwesomePHP\App\Providers;

use AwesomePHP\Bootstrap\System\Abstruction\ServiceProvider;
use AwesomePHP\Bootstrap\System\ViewHandler;

class RouteServiceProvider implements ServiceProvider{

	public function boot() {
		require_once app()->path('routes/routes.php');
	}

}