<?php

// Bootstrap
require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$app->error(function (\Exception $e, $code) {
	if ($code == 404) {
		return '404 - Not Found! // ' . $e->getMessage();
	} else {
		return 'Shenanigans! Something went horribly wrong // ' . $e->getMessage();
	}
});

$app->get('/', function(Silex\Application $app) {
	return $app->redirect($app['request']->getBaseUrl() . '/home');
});

// Mount ControllerProviders
$app->mount('/home', new Fcom\Provider\Controller\HomeController());
$app->mount('/contact', new Fcom\Provider\Controller\ContactController());
$app->mount('/satelliet', new Fcom\Provider\Controller\SatellietController());
$app->mount('/hsware', new Fcom\Provider\Controller\HswareController());
$app->mount('tweedehands', new Fcom\Provider\Controller\TweedehandsController());