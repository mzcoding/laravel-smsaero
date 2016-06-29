<?php namespace Mzcoding\SmsAero;

use Illuminate\Support\ServiceProvider as MServiceProvider;
use Mzcoding\SmsAero;


class SmsAeroServiceProvider extends MServiceProvider {
  public function boot(){
  	
  }
  public function register()
  {
       $this->app->singleton('smsaero', function () {
            return new SmsAero();
        });
  }
  public function provides()
  {
        return array('smsaero');
  }
}