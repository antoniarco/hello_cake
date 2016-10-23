<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/10/16
 * Time: 20:16
 */
App::uses('FormHelper','Form');

class HelloController extends AppController {

    private $msg = "Hello World!";

    function index()
    {
        $this->set('msg',$this->msg);
    }

}