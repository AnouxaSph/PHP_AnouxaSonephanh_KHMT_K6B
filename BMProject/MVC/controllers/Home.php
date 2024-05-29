<?php
    class Home extends controller{
        function displayIntroduction(){
            echo "Hello";
        }
        function displayUser(){
            echo "Welcome";
        }
        function displayIndex(){
            $this->view("master", [
                "Page"=> "home"
            ]);
        }
    }
?>