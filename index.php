<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();
use \Hcode\Page;

$app->config('debug', true);

$app->get('/', function() {
    
    /*
	echo "OK";
	*/
	$page = new Page();

	$page->setTpl("index");
	

});

$app->run();

 ?>
