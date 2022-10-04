<?php
class Application{

    private $controller="Home";
    private $action="index";
    private $params=[];

    public function __construct(){
 
        $arr = $this->UrlProcess();
        //xu li controller
        if(isset($arr[0]) && file_exists(CONTROLLER_PATH . $arr[0] . '.php')) {
            $this->controller = $arr[0];
        }
        require_once CONTROLLER_PATH . $this->controller . '.php';
        $this->controller = new $this->controller;
        //xu li action
        if(isset($arr[1]) && method_exists($this->controller, $this->action)) {
            $this->action = $arr[1];
        }
        unset($arr[0], $arr[1]);
        $this->params = $arr ?? [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>