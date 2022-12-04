<?php

    namespace App;
    class Route {

        private $routes;

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes() {
            return $this->routes;
        }
        public function setRoutes(array $routes) {
            $this->routes = $routes;
        }

        public function initRoutes() {

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'IndexController',
                'action' => 'sobreNos'
            );

            $this->setRoutes($routes);
        }

        /*  PROBLEMAS NA INSTANCIA ABAIXO */
        public function run($url) {
            foreach($this->getRoutes() as $key => $route) {
                if($url == $route['route']) {
                    $class = 'App\\Controllers\\' .ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
                echo '<br/>';
                print_r($route);
                echo '<br/>';
            }
        }
        /*  PROBLEMAS NA INSTANCIA ACIMA */

        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>
