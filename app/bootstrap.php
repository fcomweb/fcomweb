<?php

// Require Composer Autoloader
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Create new Silex App
$app = new Silex\Application();

//Use Doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(),
		array(
			'db.options' => array(
                'dbname' => 'fcom',
                'user' => 'root',
                'password' => 'Azerty123',
                'host' => 'localhost',
                'driver' => 'pdo_mysql'
				)
		));

$app->register(new Knp\Provider\RepositoryServiceProvider(), array(
    'repository.repositories' => array(
        'satelliet' => 'Fcom\\Repository\\Satelliet'
    )
));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__ .  DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'views'
));

$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// App Configuration
$app['debug'] = true;