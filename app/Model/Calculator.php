<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 23/10/16
 * Time: 21:21
 */


App::uses('AppModel', 'Model');
class Calculator extends AppModel {

    // sum two numeric numbers
    public function sum($a,$b)
    {
        $result = $a + $b;
        return $result;
    }

}
