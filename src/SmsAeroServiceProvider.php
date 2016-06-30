<?php namespace Mzcoding\SmsAero;

use Illuminate\Support\ServiceProvider;
use Mzcoding\SmsAero\SmsAero;


class SmsAeroServiceProvider extends ServiceProvider {
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
