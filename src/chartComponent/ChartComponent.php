<?php 
namespace Keneil\LaravelChartMaster\ChartComponent;
abstract class ChartComponent{
    protected $chartData=[];
    protected $chartLabels=[];
    protected $chartOptions=[];
    public function __construct(array $chartLabels,array $chartData,$chartOptions=null){
       $this->chartLabels=$chartLabels;
       $this->chartData=$chartData;
       $this->chartOptions=$chartOptions;

    }
    abstract protected function render();
}