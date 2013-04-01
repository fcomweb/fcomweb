<?php

namespace Fcom\Provider\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;

class SatellietController implements ControllerProviderInterface {

	public function connect(Application $app) {

		//@note $app['controllers_factory'] is a factory that returns a new instance of ControllerCollection when used.
		//@see http://silex.sensiolabs.org/doc/organizing_controllers.html
		$controllers = $app['controllers_factory'];

		// Bind sub-routes
		$controllers->get('/', array($this, 'satelliet'));
        $controllers->get('/{id}', array($this, 'detail'))->assert('id', '\d+');
		return $controllers;
	}

	public function satelliet(Application $app) {
        $satellieten = $app['satelliet']->findAll();
		return $app['twig']->render('satelliet/satelliet.twig',
        array(
            'satellieten' => $satellieten
        ));
	}

    public function detail(Application $app, $id) {
        $satelliet = $app['satelliet']->findDetail($id);
        return $app['twig']->render('satelliet/detail.twig',
            array(
                'satelliet' => $satelliet
            ));
    }

}