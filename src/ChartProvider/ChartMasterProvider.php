<?php 
namespace Keneil\LaravelChartMaster\ChartProvider;
use Illuminate\Support\ServiceProvider;
class ChartMasterProvider extends ServiceProvider{
    public function register(){
   $this->app->singleton("chartjs",function(){
    // return
   });
    }
  public function boot(){
  $this->publishes([__DIR__."..\\config\\chartjs.php"=>config_path("chartjs.php")],"config");
  }
}