<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;
class HomeController extends Controller {

    public function index() {
        $this -> render('home');
    }

    public function fotos() {
        $test = new Test();
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}