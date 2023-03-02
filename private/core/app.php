<?php

/*
 * App class
 */
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        $URL = $this->getUrl();

        // For controller
        if (file_exists('../private/controllers/'.ucfirst($URL[0]).'.php'))
        {
            $this->controller = ucfirst($URL[0]);
        }

        require '../private/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller();
    }

    public function getUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'Home';
        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
    }
}