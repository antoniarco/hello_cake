<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/10/16
 * Time: 20:16
 */
class HelloController extends AppController {

    var $msg = "Hello World";

    function index()
    {
        echo $this->msg;
        $this->set($msg);
    }
}