<?php

namespace Gordanetto\WeblabLib\creditinterest;

use Gordanetto\WeblabLib\excepcions\custexcept;

class сompoundinterest implements interfacepercent
{
    public function indebtedness($summcredit, $rateperiod, $numberperiods)
    {
        if (gettype($summcredit) === 'string' || gettype($rateperiod)  === 'string' || gettype($numberperiods) === 'string'){
            throw new custexcept('Введите число');
        }elseif ($summcredit <=0 || $rateperiod <= 0 || $numberperiods <= 0){
            throw new custexcept("Недействительное число");
        }
        return $summcredit *(pow((1+($rateperiod/100)), $numberperiods));
    }

}