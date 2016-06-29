<?php namespace Mzcoding\SmsAero;

use Illuminate\Support\Facades\Facade;

class SmsAeroFacade extends Facade{
     protected static function getFacadeAccessor(){
        return 'smsaero';
     }
}