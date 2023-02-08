<?php

class App 
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        

        if(isset($url[0])){
            if(file_exists("../app/controllers/{$url[0]}.php")){
                
            }
        }

        require_once("../app/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        if(isset($url[0])){
            if(method_exists($this->method, $url)){
                
            }
        }
    }

    public function parseURL()
    {
        if(isset($_GET["url"])){
            $url = rtrim($_GET["url"]);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            unset($url);
        }
    }
}