<?php

namespace cdn\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class orders extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    $datatable = $lava->DataTable();
    $datatable->addStringColumn('Name');
    $datatable->addNumberColumn('Donuts Eaten');
    $datatable->addRows([
        ['Michael',   5],
        ['Elisa',     7],
        ['Robert',    3],
        ['John',      2],
        ['Jessica',   6],
        ['Aaron',     1],
        ['Margareth', 8]
    ]);
    $pieChart = $lava->PieChart('Donuts', $datatable, [
        'width' => 400,
        'pieSliceText' => 'value'
    ]);
    $filter  = $lava->NumberRangeFilter(1, [
        'ui' => [
            'labelStacking' => 'vertical'
        ]
    ]);
    $control = $lava->ControlWrapper($filter, 'control');
    $chart   = $lava->ChartWrapper($pieChart, 'chart');
    $lava->Dashboard('Donuts')->bind($control, $chart);
    


}
