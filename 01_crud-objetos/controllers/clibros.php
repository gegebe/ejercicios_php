<?php
    require_once('config.php');
    require_once('model/libreria.php');

    if($_POST){

    }

    if($_GET){

    }

    class Users {
        private $formlogin;
        private $userDB;
        private $table;

        public function __construct(){
            $this->userDB = new Admin();

        }
    }
?>