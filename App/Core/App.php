<?php 

class App {
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    //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
    public function __construct() {
        $url = $this->parseUrl();

        if ($url === NULL) {
            $url = [$this->controller];
        }
        
        if (file_exists("App/Controllers/$url[0].php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "App/Controllers/$this->controller.php";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
            $url = rtrim($url, "/");
            $url = filter_Var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}