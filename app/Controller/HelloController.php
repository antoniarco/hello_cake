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

    function calculadora()
    {
        $request = $this->request->data;

        if (!empty($request))
        {
            $result = array();
            $param1 = $request['#1'];
            $param2 = $request['#2'];

            // Cheking that booth params are numbers and not empty
            if ( is_numeric($param1) && is_numeric($param2) )
            {
                $result = $param1 + $param2;
                $response = array('code'=>'ok',
                                  'msg' => 'El resultado de la operación es: '.$result);

            } else {
                $response = array('code'=>'ko',
                                  'msg' => '**Comprueba que los campos sean númericos y esten completados');
            }

            $this->set('response',$response);
        }

    }
}