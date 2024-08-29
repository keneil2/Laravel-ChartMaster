<?php
namespace Keneil\LaravelChartMaster\ChartMaster;
class Chartmaster
{
    protected $chartData=[];
    protected $chartLabels=[];
    /**
     * register chart labels
     * 
    */
    public function chartlabels(array $data)
    {
        $this->chartLabels = $data;
    }

    /**
     * registers chart Data
    */
    public function chartData(array $label)
    {
        $this->chartData = $label;
    }

    /**
     * set up simple chart
    */
    public static function simplechart()
    {
      
    }


}