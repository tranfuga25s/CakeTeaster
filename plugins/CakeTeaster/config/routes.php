<?php
use Cake\Routing\Router;

Router::connect('test', ['plugin' => 'CakeTeaster', 'controller' => 'Testing', 'action' => 'index']);

Router::plugin('CakeTeaster', function ($routes) {
    $routes->fallbacks();
});
