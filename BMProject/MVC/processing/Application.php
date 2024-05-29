<?php
    class Application {
        protected $controller = "Home"; // Home là class nằm trong controller
        protected $action = "displayIntroduction"; // action hiển thị phần giới thiệu
        protected $paramr = []; // các tham số
    
        function __construct() {
            $arr = $this->urlProcess();
            $n = count($arr);
    
            // Xử lý controller
            if ($n > 1 && file_exists("./MVC/controllers/" . $arr[$n - 2] . ".php")) {
                $this->controller = $arr[$n - 2];
                unset($arr[$n - 2]);
            }
    
            require_once "./MVC/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;
    
            // Xử lý actions
            if ($n > 0 && isset($arr[$n - 1])) {
                if (method_exists($this->controller, $arr[$n - 1])) {
                    $this->action = $arr[$n - 1];
                }
                unset($arr[$n - 1]);
            }
    
            // Xử lý params
            $this->paramr = $arr ? array_values($arr) : [];
            call_user_func_array([$this->controller, $this->action], $this->paramr);
        }
    
        function urlProcess() { 
            if (isset($_SERVER["REQUEST_URI"])) {
                return explode("/", filter_var(trim($_SERVER['REQUEST_URI'], "/")));
            }
            return []; // Trả về mảng rỗng nếu không có REQUEST_URI
        }
    }
    
?>