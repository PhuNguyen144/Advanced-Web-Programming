<?php

class Home extends Controller {
    //properties

    public function __construct() {
        parent::__construct();
    }

    public function index() { 
        include 'views/home.php';
    }
}
?>