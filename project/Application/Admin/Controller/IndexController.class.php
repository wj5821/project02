<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Index/index');
    }
    public function login(){
        $this->display('Index/login');
    }

    public function dologin(){
        $this->display('Index/index');
    }
}