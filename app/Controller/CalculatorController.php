<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/10/16
 * Time: 20:16
 */
App::uses('FormHelper','Form');

class CalculatorController extends AppController {

    function index()
    {
        // we need to calculate
        if (!empty($this->request->data))
        {
            $param1 = $this->request->data['#1'];
            $param2 = $this->request->data['#2'];

            // Cheking that booth params are numbers and not empty
            if ( is_numeric($param1) && is_numeric($param2) )
            {
                $result = $this->Calculator->sum($param1,$param2);
                $response = array('code'=>'ok',
                    'msg' => 'El resultado de la operación es: '.$result);

            } else {
                // we have an error
                $response = array('code'=>'ko',
                    'msg' => '**Comprueba que los campos sean númericos y esten completados');
            }
            // setting response
            $this->set('response',$response);
        }
    }
}