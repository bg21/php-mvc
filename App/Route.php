<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 28/12/16
 * Time: 16:16
 */

namespace App;

use SON\init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>'indexController','action'=>'index');
        $routes['contato'] = array('route'=>'/contact','controller'=>'indexController','action'=>'contact');
        $this->setRoutes($routes);
    }

}