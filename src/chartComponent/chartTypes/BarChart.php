<?php 
namespace Keneil\LaravelChartMaster\ChartComponent\ChartTypes;

use Keneil\LaravelChartMaster\ChartComponent\ChartComponent;

class BarChart extends ChartComponent{
  public function render(){
    $chartData=json_encode($this->chartData);
    $chartLabels=json_encode($this->chartLabels);
    return view("components.barchart",["chartData"=>$chartData,"chartLabels"=>$chartLabels]);
  }
}