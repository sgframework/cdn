@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SunbulahGroup</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<!--<header class="header">
<form class="navbar-form navbar-left" role="search" action="{{ route('search.items') }}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find People">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
</header>-->
<div class="container">
    <div class="row justify-content-center">

    @if (Route::has('login'))
                    @auth
    <!--<div class="col-md-12">
    <span style="float:left"><a class="btn btn-primary" href="{{ route('items.add') }}">+ Add Product</a></span>  &nbsp; &nbsp; &nbsp; <span style="float:center"><a class="btn btn-primary" href="{{ route('items.index') }}">List Products</a></span> &nbsp; &nbsp; &nbsp; <span style="float:right"><a class="btn btn-primary" href="/submit-rtv">Submit a RTV Request &rarr;</a></span><br /><hr />

           <form method="get" action="/add-item"><span><button type="submit" class="btn btn-primary">Submit a RTV Request</button></span> </form>   <span><form method="get" action="/items"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>    <span><form method="get" action="/submit-rtv"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>
        </div>-->
        <div class="col-md-12">
            <div class="card">
                <!--<div class="top-left">
        <a href="{{ url('/') }}">SunbulahGroup</a>
        </div>-->
                <div class="top-right links">
                </div>




                @if ( Auth::user()->is_permission == '2')

                <div class="card-header"><span style="font-size:20px"><i class="fas fa-history"></i> Overall Progress & Orders Summery.</div></span>
                        <div class="card-body">
                            <h3>Firas Team</h3>
                            <table id="myTable">
                                <thead>
                                    <tr>
                                        <th style="text-align:center"></th>
                                        <th style="text-align:center" colspan="6">Today</th>
                                        <th style="text-align:center" colspan="6">Yesterday</th>
                                        <th style="text-align:center"colspan="6">All</th>

                                    </tr>
                                    <tr>
                                        <th style="text-align:center"><b>Firas Team</b></th>
                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>

                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>

                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="text-align:center">{{ $michael->name }}</th>
                                        <td style="text-align:center">{{ $countmichaelto }}</td>
                                        <td style="text-align:center">{{ $summichaeltoi }}</td>
                                        <td style="text-align:center">{{ $summichaeltoq }}</td>
                                        <td style="text-align:center">{{ $summichaeltof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaeltod }}">{{ number_format($summichaeltod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaeltop }}">{{ number_format($summichaeltop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmichaelyo }}</td>
                                        <td style="text-align:center">{{ $summichaelyoi }}</td>
                                        <td style="text-align:center">{{ $summichaelyoq }}</td>
                                        <td style="text-align:center">{{ $summichaelyof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaelyod }}">{{ number_format($summichaelyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaelyop }}">{{ number_format($summichaelyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmichaelao }}</td>
                                        <td style="text-align:center">{{ $summichaelaoi }}</td>
                                        <td style="text-align:center">{{ $summichaelaoq }}</td>
                                        <td style="text-align:center">{{ $summichaelaof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaelaod }}">{{ number_format($summichaelaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaelaop }}">{{ number_format($summichaelaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $mohammedsayed->name }}</th>
                                        <td style="text-align:center">{{ $countmohammedsayedto }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedtod }}">{{ number_format($summohammedsayedtod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedtop }}">{{ number_format($summohammedsayedtop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmohammedsayedyo }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedyod }}">{{ number_format($summohammedsayedyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedyop }}">{{ number_format($summohammedsayedyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmohammedsayedao }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedaod }}">{{ number_format($summohammedsayedaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedaop }}">{{ number_format($summohammedsayedaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $fahaddahasy->name }}</th>
                                        <td style="text-align:center">{{ $countfahaddahasyto }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasytod }}">{{ number_format($sumfahaddahasytod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasytop }}">{{ number_format($sumfahaddahasytop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countfahaddahasyyo }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyyod }}">{{ number_format($sumfahaddahasyyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyyop }}">{{ number_format($sumfahaddahasyyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countfahaddahasyao }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyaod }}">{{ number_format($sumfahaddahasyaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyaop }}">{{ number_format($sumfahaddahasyaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $abdullahnaser->name }}</th>
                                        <td style="text-align:center">{{ $countabdullahnaserto }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnasertod }}">{{ number_format($sumabdullahnasertod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnasertop }}">{{ number_format($sumabdullahnasertop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countabdullahnaseryo }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseryod }}">{{ number_format($sumabdullahnaseryod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseryop }}">{{ number_format($sumabdullahnaseryop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countabdullahnaserao }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseraod }}">{{ number_format($sumabdullahnaseraod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseraop }}">{{ number_format($sumabdullahnaseraop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $ahmedmedhat->name }}</th>
                                        <td style="text-align:center">{{ $countahmedmedhatto }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhattod }}">{{ number_format($sumahmedmedhattod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhattop }}">{{ number_format($sumahmedmedhattop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countahmedmedhatyo }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhatyod }}">{{ number_format($sumahmedmedhatyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhatyop }}">{{ number_format($sumahmedmedhatyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countahmedmedhatao }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhataod }}">{{ number_format($sumahmedmedhataod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhataop }}">{{ number_format($sumahmedmedhataop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">Totals</th>    
                                        <td style="text-align:center">{{ $countftto }}</td>
                                        <td style="text-align:center">{{ $sumfttoi }}</td>
                                        <td style="text-align:center">{{ $sumfttoq }}</td>
                                        <td style="text-align:center">{{ $sumfttof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfttod }}">{{ number_format($sumfttod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfttop }}">{{ number_format($sumfttop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countftyo }}</td>
                                        <td style="text-align:center">{{ $sumftyoi }}</td>
                                        <td style="text-align:center">{{ $sumftyoq }}</td>
                                        <td style="text-align:center">{{ $sumftyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumftyod }}">{{ number_format($sumftyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumftyop }}">{{ number_format($sumftyop) }}.00 SAR</td> 
                                        <td style="text-align:center">{{ $countftao }}</td>
                                        <td style="text-align:center">{{ $sumftaoi }}</td>
                                        <td style="text-align:center">{{ $sumftaoq }}</td>
                                        <td style="text-align:center">{{ $sumftaof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumftaod }}">{{ number_format($sumftaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumftaop }}">{{ number_format($sumftaop) }}.00 SAR</td>  
                                    </tr>
                                </tbody>
                                @php 
                                    $tpercent = 
                                   
                                    $sumfttop == 0 ? 0.1 :  ($sumfttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumftyop == 0 ? 0.1 :  (($sumftyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumftaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumfttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumftyop }}" aria-valuemin="{{ $sumfttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumftaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <br />

                            <h3>Hazim Team</h3>
                            <table id="myTable">
                                <thead>
                                        <tr>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center" colspan="6">Today</th>
                                            <th style="text-align:center" colspan="6">Yesterday</th>
                                            <th style="text-align:center"colspan="6">All</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center"><b>Hazim Team</b></th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                        </tr>
                                </thead>
                                        <tr>
                                            <th style="text-align:center">{{ $noufal->name }}</th>
                                            <td style="text-align:center">{{ $countnoufalto }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufaltod }}">{{ number_format($sumnoufaltod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufaltop }}">{{ number_format($sumnoufaltop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countnoufalyo }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalyod }}">{{ number_format($sumnoufalyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalyop }}">{{ number_format($sumnoufalyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countnoufalao }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalaod }}">{{ number_format($sumnoufalaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalaop }}">{{ number_format($sumnoufalaop) }}.00 SAR</td>   
                                        </tr>                                       
                                        <tr>
                                            <th style="text-align:center">{{ $ruben->name }}</th>
                                            <td style="text-align:center">{{ $countrubento }}</td>
                                            <td style="text-align:center">{{ $sumrubentoi }}</td>
                                            <td style="text-align:center">{{ $sumrubentoq }}</td>
                                            <td style="text-align:center">{{ $sumrubentof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubentod }}">{{ number_format($sumrubentod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubentop }}">{{ number_format($sumrubentop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countrubenyo }}</td>
                                            <td style="text-align:center">{{ $sumrubenyoi }}</td>
                                            <td style="text-align:center">{{ $sumrubenyoq }}</td>
                                            <td style="text-align:center">{{ $sumrubenyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenyod }}">{{ number_format($sumrubenyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenyop }}">{{ number_format($sumrubenyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countrubenao }}</td>
                                            <td style="text-align:center">{{ $sumrubenaoi }}</td>
                                            <td style="text-align:center">{{ $sumrubenaoq }}</td>
                                            <td style="text-align:center">{{ $sumrubenaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenaod }}">{{ number_format($sumrubenaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenaop }}">{{ number_format($sumrubenaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $samsudin->name }}</th>
                                            <td style="text-align:center">{{ $countsamsudinto }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudintod }}">{{ number_format($sumsamsudintod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudintop }}">{{ number_format($sumsamsudintop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countsamsudinyo }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinyod }}">{{ number_format($sumsamsudinyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinyop }}">{{ number_format($sumsamsudinyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countsamsudinao }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinaod }}">{{ number_format($sumsamsudinaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinaop }}">{{ number_format($sumsamsudinaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $osama->name }}</th>
                                            <td style="text-align:center">{{ $countosamato }}</td>
                                            <td style="text-align:center">{{ $sumosamatoi }}</td>
                                            <td style="text-align:center">{{ $sumosamatoq }}</td>
                                            <td style="text-align:center">{{ $sumosamatof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamatod }}">{{ number_format($sumosamatod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamatop }}">{{ number_format($sumosamatop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countosamayo }}</td>
                                            <td style="text-align:center">{{ $sumosamayoi }}</td>
                                            <td style="text-align:center">{{ $sumosamayoq }}</td>
                                            <td style="text-align:center">{{ $sumosamayof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamayod }}">{{ number_format($sumosamayod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamayop }}">{{ number_format($sumosamayop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countosamaao }}</td>
                                            <td style="text-align:center">{{ $sumosamaaoi }}</td>
                                            <td style="text-align:center">{{ $sumosamaaoq }}</td>
                                            <td style="text-align:center">{{ $sumosamaaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamaaod }}">{{ number_format($sumosamaaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamaaop }}">{{ number_format($sumosamaaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                                <th style="text-align:center">Totals</th>    
                                                <td style="text-align:center">{{ $counthtto }}</td>
                                                <td style="text-align:center">{{ $sumhttoi }}</td>
                                                <td style="text-align:center">{{ $sumhttoq }}</td>
                                                <td style="text-align:center">{{ $sumhttof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhttod }}">{{ number_format($sumhttod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhttop }}">{{ number_format($sumhttop) }}.00 SAR</td>
                                                <td style="text-align:center">{{ $counthtyo }}</td>
                                                <td style="text-align:center">{{ $sumhtyoi }}</td>
                                                <td style="text-align:center">{{ $sumhtyoq }}</td>
                                                <td style="text-align:center">{{ $sumhtyof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhtyod }}">{{ number_format($sumhtyod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhtyop }}">{{ number_format($sumhtyop) }}.00 SAR</td> 
                                                <td style="text-align:center">{{ $counthtao }}</td>
                                                <td style="text-align:center">{{ $sumhtaoi }}</td>
                                                <td style="text-align:center">{{ $sumhtaoq }}</td>
                                                <td style="text-align:center">{{ $sumhtaof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhtaod }}">{{ number_format($sumhtaod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhtaop }}">{{ number_format($sumhtaop) }}.00 SAR</td>  
                                            </tr>   
                                        </tbody>
                                        @php 
                                    $tpercent = 
                                   
                                    $sumhttop == 0 ? 0.1 :  ($sumhttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumhtyop == 0 ? 0.1 :  (($sumhtyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumhtaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumhttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumhttop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumhtyop }}" aria-valuemin="{{ $sumhttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumhtyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumhtaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <br />

                            <h3>Awaden Team</h3>
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center" colspan="6">Today</th>
                                            <th style="text-align:center" colspan="6">Yesterday</th>
                                            <th style="text-align:center"colspan="6">All</th>

                                        </tr>
                                        <tr>
                                            <th style="text-align:center"><b>Awadin Team</b></th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>

                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>

                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="text-align:center">{{ $ahmedshawqy->name }}</th>
                                            <td style="text-align:center">{{ $countahmedshawqyto }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqytod }}">{{ number_format($sumahmedshawqytod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqytop }}">{{ number_format($sumahmedshawqytop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countahmedshawqyyo }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyyod }}">{{ number_format($sumahmedshawqyyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyyop }}">{{ number_format($sumahmedshawqyyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countahmedshawqyao }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyaod }}">{{ number_format($sumahmedshawqyaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyaop }}">{{ number_format($sumahmedshawqyaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $hassanfathi->name }}</th>
                                            <td style="text-align:center">{{ $counthassanfathito }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathitod }}">{{ number_format($sumhassanfathitod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathitop }}">{{ number_format($sumhassanfathitop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthassanfathiyo }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiyod }}">{{ number_format($sumhassanfathiyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiyop }}">{{ number_format($sumhassanfathiyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthassanfathiao }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiaod }}">{{ number_format($sumhassanfathiaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiaop }}">{{ number_format($sumhassanfathiaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $hashem->name }}</th>
                                            <td style="text-align:center">{{ $counthashemto }}</td>
                                            <td style="text-align:center">{{ $sumhashemtoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemtoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemtof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemtod }}">{{ number_format($sumhashemtod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemtop }}">{{ number_format($sumhashemtop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthashemyo }}</td>
                                            <td style="text-align:center">{{ $sumhashemyoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemyoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemyof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemyod }}">{{ number_format($sumhashemyod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemyop }}">{{ number_format($sumhashemyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthashemao }}</td>
                                            <td style="text-align:center">{{ $sumhashemaoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemaoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemaof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemaod }}">{{ number_format($sumhashemaod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemaop }}">{{ number_format($sumhashemaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $medhathassan->name }}</th>
                                            <td style="text-align:center">{{ $countmedhathassanto }}</td>
                                            <td style="text-align:center">{{ $summedhathassantoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassantoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassantof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassantod }}">{{ number_format($summedhathassantod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassantop }}">{{ number_format($summedhathassantop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countmedhathassanyo }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanyod }}">{{ number_format($summedhathassanyod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanyop }}">{{ number_format($summedhathassanyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countmedhathassanao }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanaod }}">{{ number_format($summedhathassanaod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanaop }}">{{ number_format($summedhathassanaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                                <th style="text-align:center">Totals</th>    
                                                <td style="text-align:center">{{ $countatto }}</td>
                                                <td style="text-align:center">{{ $sumattoi }}</td>
                                                <td style="text-align:center">{{ $sumattoq }}</td>
                                                <td style="text-align:center">{{ $sumattof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumattod }}">{{ number_format($sumattod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumattop }}">{{ number_format($sumattop) }}.00 SAR</td>
                                                <td style="text-align:center">{{ $countatyo }}</td>
                                                <td style="text-align:center">{{ $sumatyoi }}</td>
                                                <td style="text-align:center">{{ $sumatyoq }}</td>
                                                <td style="text-align:center">{{ $sumatyof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumatyod }}">{{ number_format($sumatyod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumatyop }}">{{ number_format($sumatyop) }}.00 SAR</td> 
                                                <td style="text-align:center">{{ $countatao }}</td>
                                                <td style="text-align:center">{{ $sumataoi }}</td>
                                                <td style="text-align:center">{{ $sumataoq }}</td>
                                                <td style="text-align:center">{{ $sumataof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumataod }}">{{ number_format($sumataod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumataop }}">{{ number_format($sumataop) }}.00 SAR</td>  
                                            </tr>
                                        </tbody>
                                        @php 
                                    $tpercent = 
                                   
                                    $sumattop == 0 ? 0.1 :  ($sumattop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumatyop == 0 ? 0.1 :  (($sumatyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumataop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumattop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumattop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumatyop }}" aria-valuemin="{{ $sumattop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumatyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumataop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <br />

                            <h3>Wail Team</h3>
                            <table id="myTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center"></th>
                                    <th style="text-align:center" colspan="6">Today</th>
                                    <th style="text-align:center" colspan="6">Yesterday</th>
                                    <th style="text-align:center"colspan="6">All</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center"><b>Wail Team</b></th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="text-align:center">{{ $suneer->name }}</th>
                                    <td style="text-align:center">{{ $countsuneerto }}</td>
                                    <td style="text-align:center">{{ $sumsuneertoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneertoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneertof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneertod }}">{{ number_format($sumsuneertod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneertop }}">{{ number_format($sumsuneertop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsuneeryo }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeryod }}">{{ number_format($sumsuneeryod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeryop }}">{{ number_format($sumsuneeryop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsuneerao }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeraod }}">{{ number_format($sumsuneeraod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeraop }}">{{ number_format($sumsuneeraop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $fahadhussein->name }}</th>
                                    <td style="text-align:center">{{ $countfahadhusseinto }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseintod }}">{{ number_format($sumfahadhusseintod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseintop }}">{{ number_format($sumfahadhusseintop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countfahadhusseinyo }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinyod }}">{{ number_format($sumfahadhusseinyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinyop }}">{{ number_format($sumfahadhusseinyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countfahadhusseinao }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinaod }}">{{ number_format($sumfahadhusseinaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinaop }}">{{ number_format($sumfahadhusseinaop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $sultansalman->name }}</th>
                                    <td style="text-align:center">{{ $countsultansalmanto }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmantod }}">{{ number_format($sumsultansalmantod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmantop }}">{{ number_format($sumsultansalmantop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsultansalmanyo }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanyod }}">{{ number_format($sumsultansalmanyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanyop }}">{{ number_format($sumsultansalmanyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsultansalmanao }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanaod }}">{{ number_format($sumsultansalmanaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanaop }}">{{ number_format($sumsultansalmanaop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $medhat->name }}</th>
                                    <td style="text-align:center">{{ $countmedhatto }}</td>
                                    <td style="text-align:center">{{ $summedhattoi }}</td>
                                    <td style="text-align:center">{{ $summedhattoq }}</td>
                                    <td style="text-align:center">{{ $summedhattof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhattod }}">{{ number_format($summedhattod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhattop }}">{{ number_format($summedhattop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countmedhatyo }}</td>
                                    <td style="text-align:center">{{ $summedhatyoi }}</td>
                                    <td style="text-align:center">{{ $summedhatyoq }}</td>
                                    <td style="text-align:center">{{ $summedhatyof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhatyod }}">{{ number_format($summedhatyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhatyop }}">{{ number_format($summedhatyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countmedhatao }}</td>
                                    <td style="text-align:center">{{ $summedhataoi }}</td>
                                    <td style="text-align:center">{{ $summedhataoq }}</td>
                                    <td style="text-align:center">{{ $summedhataof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhataod }}">{{ number_format($summedhataod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhataop }}">{{ number_format($summedhataop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">Totals</th>    
                                    <td style="text-align:center">{{ $countqtto }}</td>
                                    <td style="text-align:center">{{ $sumqttoi }}</td>
                                    <td style="text-align:center">{{ $sumqttoq }}</td>
                                    <td style="text-align:center">{{ $sumqttof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqttod }}">{{ number_format($sumqttod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqttop }}">{{ number_format($sumqttop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countqtyo }}</td>
                                    <td style="text-align:center">{{ $sumqtyoi }}</td>
                                    <td style="text-align:center">{{ $sumqtyoq }}</td>
                                    <td style="text-align:center">{{ $sumqtyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqtyod }}">{{ number_format($sumqtyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqtyop }}">{{ number_format($sumqtyop) }}.00 SAR</td> 
                                    <td style="text-align:center">{{ $countqtao }}</td>
                                    <td style="text-align:center">{{ $sumqtaoi }}</td>
                                    <td style="text-align:center">{{ $sumqtaoq }}</td>
                                    <td style="text-align:center">{{ $sumqtaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqtaod }}">{{ number_format($sumqtaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqtaop }}">{{ number_format($sumqtaop) }}.00 SAR</td>  
                                </tr>   
                        </tbody>

                        @php 
                                    $tpercent = 
                                   
                                    $sumqttop == 0 ? 0.1 :  ($sumqttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumqtyop == 0 ? 0.1 :  (($sumqtyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumqtaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumqttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumqttop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumqtyop }}" aria-valuemin="{{ $sumqttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumqtyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumqtaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                                
                            </table>
                            <br />
                            <table id="myTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center"></th>
                                    <th style="text-align:center" colspan="6">Today</th>
                                    <th style="text-align:center" colspan="6">Yesterday</th>
                                    <th style="text-align:center"colspan="6">All</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center"></th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                </tr>
                            </thead>
                                                        
                        <tbody>
                            <tr>
                                <th style="text-align:center">All</th>    
                                <th style="text-align:center">{{ $countftto + $counthtto + $countatto + $countqtto }}</th>
                                <th style="text-align:center">{{ $sumfttoi + $sumhttoi + $sumattoi + $sumqttoi}}</th>
                                <th style="text-align:center">{{ $sumfttoq + $sumhttoq + $sumattoq + $sumqttoq}}</th>
                                <th style="text-align:center">{{ $sumfttof + $sumhttof + $sumattof + $sumqttof }}</th>
                                <td style="text-align:center" data-color="{{ $sumtodaydiscounts }}">{{ number_format($sumfttod + $sumhttod + $sumattod + $sumqttod) }}.00 SAR</td>
                                <td style="text-align:center" data-color="{{ $sumtodaytotalprice }}">{{ number_format($sumfttop + $sumhttop + $sumattop + $sumqttop) }}.00 SAR</td>
                                <th style="text-align:center">{{ $countftyo + $counthtyo + $countatyo + $countqtyo }}</th>
                                <th style="text-align:center">{{ $sumftyoi + $sumhtyoi + $sumatyoi + $sumqtyoi }}</th>
                                <th style="text-align:center">{{ $sumftyoq + $sumhtyoq + $sumatyoq + $sumqtyoq }}</th>
                                <th style="text-align:center">{{ $sumftyof + $sumhtyof + $sumatyof + $sumqtyof }}</th>
                                <td style="text-align:center" data-color="{{ $sumyestedaydiscounts }}">{{ number_format($sumftyod + $sumhtyod + $sumatyod + $sumqtyod) }}.00 SAR</td>
                                <td style="text-align:center" data-color="{{ $sumyestedaytotalprice }}">{{ number_format($sumftyop + $sumhtyop + $sumatyop + $sumqtyop) }}.00 SAR</td> 
                                <th style="text-align:center">{{ $countftao + $counthtao + $countatao + $countqtao}}</th>
                                <th style="text-align:center">{{ $sumftaoi + $sumhtaoi + $sumataoi + $sumqtaoi}}</th>
                                <th style="text-align:center">{{ $sumftaoq + $sumhtaoq + $sumataoq + $sumqtaoq}}</th>
                                <th style="text-align:center">{{ $sumftaof + $sumhtaof + $sumataof + $sumqtaof }}</th>
                                <td style="text-align:center" data-color="{{ $sumalldiscounts }}">{{ number_format($sumftaod + $sumhtaod + $sumataod + $sumqtaod) }}.00 SAR</td>
                                <td style="text-align:center" data-color="{{ $sumalltotalprice }}">{{ number_format($sumftaop + $sumhtaop + $sumataop + $sumqtaop) }}.00 SAR</td>  
                            </tr>   
                        </tbody>
                        
                        @php 
                                    $tpercent = 
                                   
                                    $sumtodaytotalprice == 0 ? 0.1 :  ($sumtodaytotalprice * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumyestedaytotalprice == 0 ? 0.1 :  (($sumyestedaytotalprice - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumalltotalprice * 10) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumtodaytotalprice }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumtodaytotalprice) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumyestedaytotalprice }}" aria-valuemin="{{ $sumtodaytotalprice }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumyestedaytotalprice) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumalltotalprice }}" aria-valuemin="{{ $sumyestedaytotalprice }}" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="col-md-12">
    <div class="card">
        <div class="card-header"><span style="font-size:20px"><i class="far fa-chart-bar"></i> Live Stats.</div></span>
            <div  style="padding-left:18px" class="row">
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $michael->name }}</h6>

                    <canvas id="michael"></canvas>
                        <script>
                        var ctx = document.getElementById('michael').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $michael->name; ?> Total Sales',
                            data: [<?php echo $summichaeltop; ?>, <?php echo $summichaelyop; ?>, <?php echo $summichaelaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $abdullahnaser->name }}</h6>

                    <canvas id="abdullahnaser"></canvas>
                        <script>
                        var ctx = document.getElementById('abdullahnaser').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $abdullahnaser->name; ?> Total Sales',
                            data: [<?php echo $sumabdullahnasertop; ?>, <?php echo $sumabdullahnaseryop; ?>, <?php echo $sumabdullahnaseraop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $ahmedmedhat->name }}</h6>

                    <canvas id="ahmedmedhat"></canvas>
                        <script>
                        var ctx = document.getElementById('ahmedmedhat').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $ahmedmedhat->name; ?> Total Sales',
                            data: [<?php echo $sumahmedmedhattop; ?>, <?php echo $sumahmedmedhatyop; ?>, <?php echo $sumahmedmedhataop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $fahaddahasy->name }}</h6>

                    <canvas id="fahaddahasy"></canvas>
                        <script>
                        var ctx = document.getElementById('fahaddahasy').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $fahaddahasy->name; ?> Total Sales',
                            data: [<?php echo $sumfahaddahasytop; ?>, <?php echo $sumfahaddahasyyop; ?>, <?php echo $sumfahaddahasyaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                </div>
            </div>
        </div>
    </div>
<br />


<div class="col-md-12">
    <div class="card">
            <div  style="padding-left:18px" class="row">

            <div style="padding-top:8px" class="col-md-4">
            <h5>Retail Orders</h5>
                <canvas id="retail"></canvas>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("retail");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $countftao; ?>, <?php echo $counthtao; ?>, <?php echo $countatao; ?>, <?php echo $countqtao; ?>],
                                            lineTension: 0,

                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div style="padding-top:8px" class="col-md-4">
                        <h5>Retail Total Cases</h5>

                            <canvas id="master"></canvas>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("master");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $sumftaoi; ?>, <?php echo $sumhtaoi; ?>, <?php echo $sumataoi; ?>, <?php echo $sumqtaoi; ?>],
                                            lineTension: 0,
                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div style="padding-top:8px" class="col-md-4">
                            <canvas id="root"></canvas>
                            <h5>Retail Total Sales</h5>

                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("root");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $sumftaop; ?>, <?php echo $sumhtaop; ?>, <?php echo $sumataop; ?>, <?php echo $sumqtaop; ?>],
                                            lineTension: 0.3,
                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>

                </div>
            </div>
        </div>
    </div>
<br />
<div class="col-md-12">
    <div class="card">
        <div  style="padding-left:18px" class="row">
<!--
$averageftaoi
$averageftaoq
$averageftaof
$averageftaod
$averageftaop
-->

        <div style="padding-top:8px" class="col-md-6">
        <h6>Firas Items, Cases and Free Averages</h6>

                    <canvas id="myChart"></canvas>
                        <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'horizontalBar',
                        data: {
                        labels: [
                            'Firas Average Items', 'Total Average Cases', 'Firas Average Free'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaoi; ?>, <?php echo $averageftaoq; ?>, <?php echo $averageftaof; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',

                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-md-6">
                <h5>Firas Discount and sales Averages</h5>

                    <canvas id="team"></canvas>
                        <script>
                        var ctx = document.getElementById('team').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                        labels: [
                            'Total Average Discount', 'Total Average Sales'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaod; ?>, <?php echo $averageftaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
               
                    </div>
                </div>
            </div>
            <br />


            

                </div>
            </div>
        </div>
    </div>
<br />
<div class="col-md-12">
    <div class="card">
        <div  style="padding-left:18px" class="row">
<!--
$averageftaoi
$averageftaoq
$averageftaof
$averageftaod
$averageftaop
-->

        <div style="padding-top:8px" class="col-md-12">
        <h4>Retail Sales Averages</h4>

                    <canvas id="all"></canvas>
                        <script>
                        var ctx = document.getElementById('all').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                        labels: [
                            'Total Firas Average Sales', 'Total Hazim Average Sales', 'Total Awaden Average Sales', 'Total Wail Average Sales'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaop; ?>, <?php echo $averagehtaop; ?>, <?php echo $averageataop; ?>, <?php echo $averageqtaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>

               
                    </div>
                </div>
            </div>  
                        @elseif ( \Auth::user()->is_permission == '1')

                        
                <div class="card-header"><span style="font-size:20px"><i class="fas fa-history"></i> Overall Progress & Orders Summery.</div></span>
                        <div class="card-body">
                            @if ( \Auth::user()->idnumber == '1020' )
                            <h3>Firas Team</h3>
                            <table id="myTable">
                                <thead>
                                    <tr>
                                        <th style="text-align:center"></th>
                                        <th style="text-align:center" colspan="6">Today</th>
                                        <th style="text-align:center" colspan="6">Yesterday</th>
                                        <th style="text-align:center"colspan="6">All</th>

                                    </tr>
                                    <tr>
                                        <th style="text-align:center"><b>Firas Team</b></th>
                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>

                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>

                                        <th style="text-align:center">POS</th>
                                        <th style="text-align:center">I</th>
                                        <th style="text-align:center">Q</th>
                                        <th style="text-align:center">F</th>
                                        <th style="text-align:center">D</th>
                                        <th style="text-align:center">TP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="text-align:center">{{ $michael->name }}</th>
                                        <td style="text-align:center">{{ $countmichaelto }}</td>
                                        <td style="text-align:center">{{ $summichaeltoi }}</td>
                                        <td style="text-align:center">{{ $summichaeltoq }}</td>
                                        <td style="text-align:center">{{ $summichaeltof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaeltod }}">{{ number_format($summichaeltod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaeltop }}">{{ number_format($summichaeltop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmichaelyo }}</td>
                                        <td style="text-align:center">{{ $summichaelyoi }}</td>
                                        <td style="text-align:center">{{ $summichaelyoq }}</td>
                                        <td style="text-align:center">{{ $summichaelyof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaelyod }}">{{ number_format($summichaelyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaelyop }}">{{ number_format($summichaelyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmichaelao }}</td>
                                        <td style="text-align:center">{{ $summichaelaoi }}</td>
                                        <td style="text-align:center">{{ $summichaelaoq }}</td>
                                        <td style="text-align:center">{{ $summichaelaof }}</td>
                                        <td style="text-align:center" data-color="{{ $summichaelaod }}">{{ number_format($summichaelaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summichaelaop }}">{{ number_format($summichaelaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $mohammedsayed->name }}</th>
                                        <td style="text-align:center">{{ $countmohammedsayedto }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedtof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedtod }}">{{ number_format($summohammedsayedtod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedtop }}">{{ number_format($summohammedsayedtop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmohammedsayedyo }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedyof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedyod }}">{{ number_format($summohammedsayedyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedyop }}">{{ number_format($summohammedsayedyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countmohammedsayedao }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaoi }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaoq }}</td>
                                        <td style="text-align:center">{{ $summohammedsayedaof }}</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedaod }}">{{ number_format($summohammedsayedaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $summohammedsayedaop }}">{{ number_format($summohammedsayedaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $fahaddahasy->name }}</th>
                                        <td style="text-align:center">{{ $countfahaddahasyto }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasytof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasytod }}">{{ number_format($sumfahaddahasytod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasytop }}">{{ number_format($sumfahaddahasytop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countfahaddahasyyo }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyyod }}">{{ number_format($sumfahaddahasyyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyyop }}">{{ number_format($sumfahaddahasyyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countfahaddahasyao }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaoi }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaoq }}</td>
                                        <td style="text-align:center">{{ $sumfahaddahasyaof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyaod }}">{{ number_format($sumfahaddahasyaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfahaddahasyaop }}">{{ number_format($sumfahaddahasyaop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $abdullahnaser->name }}</th>
                                        <td style="text-align:center">{{ $countabdullahnaserto }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnasertof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnasertod }}">{{ number_format($sumabdullahnasertod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnasertop }}">{{ number_format($sumabdullahnasertop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countabdullahnaseryo }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseryof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseryod }}">{{ number_format($sumabdullahnaseryod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseryop }}">{{ number_format($sumabdullahnaseryop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countabdullahnaserao }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraoi }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraoq }}</td>
                                        <td style="text-align:center">{{ $sumabdullahnaseraof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseraod }}">{{ number_format($sumabdullahnaseraod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumabdullahnaseraop }}">{{ number_format($sumabdullahnaseraop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">{{ $ahmedmedhat->name }}</th>
                                        <td style="text-align:center">{{ $countahmedmedhatto }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhattof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhattod }}">{{ number_format($sumahmedmedhattod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhattop }}">{{ number_format($sumahmedmedhattop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countahmedmedhatyo }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhatyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhatyod }}">{{ number_format($sumahmedmedhatyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhatyop }}">{{ number_format($sumahmedmedhatyop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countahmedmedhatao }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataoi }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataoq }}</td>
                                        <td style="text-align:center">{{ $sumahmedmedhataof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhataod }}">{{ number_format($sumahmedmedhataod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumahmedmedhataop }}">{{ number_format($sumahmedmedhataop) }}.00 SAR</td>   
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">Totals</th>    
                                        <td style="text-align:center">{{ $countftto }}</td>
                                        <td style="text-align:center">{{ $sumfttoi }}</td>
                                        <td style="text-align:center">{{ $sumfttoq }}</td>
                                        <td style="text-align:center">{{ $sumfttof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumfttod }}">{{ number_format($sumfttod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumfttop }}">{{ number_format($sumfttop) }}.00 SAR</td>
                                        <td style="text-align:center">{{ $countftyo }}</td>
                                        <td style="text-align:center">{{ $sumftyoi }}</td>
                                        <td style="text-align:center">{{ $sumftyoq }}</td>
                                        <td style="text-align:center">{{ $sumftyof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumftyod }}">{{ number_format($sumftyod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumftyop }}">{{ number_format($sumftyop) }}.00 SAR</td> 
                                        <td style="text-align:center">{{ $countftao }}</td>
                                        <td style="text-align:center">{{ $sumftaoi }}</td>
                                        <td style="text-align:center">{{ $sumftaoq }}</td>
                                        <td style="text-align:center">{{ $sumftaof }}</td>
                                        <td style="text-align:center" data-color="{{ $sumftaod }}">{{ number_format($sumftaod) }}.00 SAR</td>
                                        <td style="text-align:center" data-color="{{ $sumftaop }}">{{ number_format($sumftaop) }}.00 SAR</td>  
                                    </tr>
                                </tbody>
                                @php 
                                    $tpercent = 
                                   
                                    $sumfttop == 0 ? 0.1 :  ($sumfttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumftyop == 0 ? 0.1 :  (($sumftyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumftaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumfttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumfttop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumftyop }}" aria-valuemin="{{ $sumfttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumftyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumftaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="col-md-12">
    <div class="card">
        <div class="card-header"><span style="font-size:20px"><i class="far fa-chart-bar"></i> Live Stats.</div></span>
            <div  style="padding-left:18px" class="row">
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $michael->name }}</h6>

                    <canvas id="michael"></canvas>
                        <script>
                        var ctx = document.getElementById('michael').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $michael->name; ?> Total Sales',
                            data: [<?php echo $summichaeltop; ?>, <?php echo $summichaelyop; ?>, <?php echo $summichaelaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $abdullahnaser->name }}</h6>

                    <canvas id="abdullahnaser"></canvas>
                        <script>
                        var ctx = document.getElementById('abdullahnaser').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $abdullahnaser->name; ?> Total Sales',
                            data: [<?php echo $sumabdullahnasertop; ?>, <?php echo $sumabdullahnaseryop; ?>, <?php echo $sumabdullahnaseraop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $ahmedmedhat->name }}</h6>

                    <canvas id="ahmedmedhat"></canvas>
                        <script>
                        var ctx = document.getElementById('ahmedmedhat').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $ahmedmedhat->name; ?> Total Sales',
                            data: [<?php echo $sumahmedmedhattop; ?>, <?php echo $sumahmedmedhatyop; ?>, <?php echo $sumahmedmedhataop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-sm-3">
                <h6>{{ $fahaddahasy->name }}</h6>

                    <canvas id="fahaddahasy"></canvas>
                        <script>
                        var ctx = document.getElementById('fahaddahasy').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        title: {
                        display: true,
                        text: 'Custom Chart Title'
                       },
                        data: {
                        labels: [
                            'Today', 'Yesterday', 'All'
                        ],
                        datasets: [{
                            label: '<?php echo $fahaddahasy->name; ?> Total Sales',
                            data: [<?php echo $sumfahaddahasytop; ?>, <?php echo $sumfahaddahasyyop; ?>, <?php echo $sumfahaddahasyaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                </div>
            </div>
        </div>
    </div>
<br />


<div class="col-md-12">
    <div class="card">
            <div  style="padding-left:18px" class="row">

            <div style="padding-top:8px" class="col-md-4">
            <h5>Retail Orders</h5>
                <canvas id="retail"></canvas>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("retail");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $countftao; ?>, <?php echo $counthtao; ?>, <?php echo $countatao; ?>, <?php echo $countqtao; ?>],
                                            lineTension: 0,

                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div style="padding-top:8px" class="col-md-4">
                        <h5>Retail Total Cases</h5>

                            <canvas id="master"></canvas>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("master");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $sumftaoi; ?>, <?php echo $sumhtaoi; ?>, <?php echo $sumataoi; ?>, <?php echo $sumqtaoi; ?>],
                                            lineTension: 0,
                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div style="padding-top:8px" class="col-md-4">
                            <canvas id="root"></canvas>
                            <h5>Retail Total Sales</h5>

                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                            <!-- Icons -->
                            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                            <script>
                                feather.replace()
                            </script>
                            <!-- Graphs -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                            <script>
                                var ctx = document.getElementById("root");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Firas", "Hazim", "Awaden", "Wail"],
                                        datasets: [{
                                            data: [<?php echo $sumftaop; ?>, <?php echo $sumhtaop; ?>, <?php echo $sumataop; ?>, <?php echo $sumqtaop; ?>],
                                            lineTension: 0.3,
                                            borderWidth: 4,
                                            pointBackgroundColor: '#007bff',
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ]
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: false
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false,
                                        }
                                    }
                                });
                            </script>
                        </div>

                </div>
            </div>
        </div>
    </div>
<br />
<div class="col-md-12">
    <div class="card">
        <div  style="padding-left:18px" class="row">
<!--
$averageftaoi
$averageftaoq
$averageftaof
$averageftaod
$averageftaop
-->

        <div style="padding-top:8px" class="col-md-6">
        <h6>Firas Items, Cases and Free Averages</h6>

                    <canvas id="myChart"></canvas>
                        <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'horizontalBar',
                        data: {
                        labels: [
                            'Firas Average Items', 'Total Average Cases', 'Firas Average Free'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaoi; ?>, <?php echo $averageftaoq; ?>, <?php echo $averageftaof; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',

                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
                <div style="padding-top:8px" class="col-md-6">
                <h5>Firas Discount and sales Averages</h5>

                    <canvas id="team"></canvas>
                        <script>
                        var ctx = document.getElementById('team').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                        labels: [
                            'Total Average Discount', 'Total Average Sales'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaod; ?>, <?php echo $averageftaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>
               
                    </div>
                </div>
            </div>
            <br />


            

                </div>
            </div>
        </div>
    </div>
<br />
<div class="col-md-12">
    <div class="card">
        <div  style="padding-left:18px" class="row">
<!--
$averageftaoi
$averageftaoq
$averageftaof
$averageftaod
$averageftaop
-->

        <div style="padding-top:8px" class="col-md-12">
        <h4>Retail Sales Averages</h4>

                    <canvas id="all"></canvas>
                        <script>
                        var ctx = document.getElementById('all').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                        labels: [
                            'Total Firas Average Sales', 'Total Hazim Average Sales', 'Total Awaden Average Sales', 'Total Wail Average Sales'
                        ],
                        datasets: [{
                            label: 'Per PO',
                            data: [<?php echo $averageftaop; ?>, <?php echo $averagehtaop; ?>, <?php echo $averageataop; ?>, <?php echo $averageqtaop; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                        }
                        });
                        </script>
                </div>

               
                    </div>
                </div>
            </div>  




            @elseif ( \Auth::user()->idnumber == '1030' )


            <h3>Hazim Team</h3>
                            <table id="myTable">
                                <thead>
                                        <tr>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center" colspan="6">Today</th>
                                            <th style="text-align:center" colspan="6">Yesterday</th>
                                            <th style="text-align:center"colspan="6">All</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center"><b>Hazim Team</b></th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                        </tr>
                                </thead>
                                        <tr>
                                            <th style="text-align:center">{{ $noufal->name }}</th>
                                            <td style="text-align:center">{{ $countnoufalto }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufaltof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufaltod }}">{{ number_format($sumnoufaltod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufaltop }}">{{ number_format($sumnoufaltop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countnoufalyo }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufalyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalyod }}">{{ number_format($sumnoufalyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalyop }}">{{ number_format($sumnoufalyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countnoufalao }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaoi }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaoq }}</td>
                                            <td style="text-align:center">{{ $sumnoufalaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalaod }}">{{ number_format($sumnoufalaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumnoufalaop }}">{{ number_format($sumnoufalaop) }}.00 SAR</td>   
                                        </tr>                                       
                                        <tr>
                                            <th style="text-align:center">{{ $ruben->name }}</th>
                                            <td style="text-align:center">{{ $countrubento }}</td>
                                            <td style="text-align:center">{{ $sumrubentoi }}</td>
                                            <td style="text-align:center">{{ $sumrubentoq }}</td>
                                            <td style="text-align:center">{{ $sumrubentof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubentod }}">{{ number_format($sumrubentod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubentop }}">{{ number_format($sumrubentop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countrubenyo }}</td>
                                            <td style="text-align:center">{{ $sumrubenyoi }}</td>
                                            <td style="text-align:center">{{ $sumrubenyoq }}</td>
                                            <td style="text-align:center">{{ $sumrubenyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenyod }}">{{ number_format($sumrubenyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenyop }}">{{ number_format($sumrubenyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countrubenao }}</td>
                                            <td style="text-align:center">{{ $sumrubenaoi }}</td>
                                            <td style="text-align:center">{{ $sumrubenaoq }}</td>
                                            <td style="text-align:center">{{ $sumrubenaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenaod }}">{{ number_format($sumrubenaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumrubenaop }}">{{ number_format($sumrubenaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $samsudin->name }}</th>
                                            <td style="text-align:center">{{ $countsamsudinto }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudintof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudintod }}">{{ number_format($sumsamsudintod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudintop }}">{{ number_format($sumsamsudintop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countsamsudinyo }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinyod }}">{{ number_format($sumsamsudinyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinyop }}">{{ number_format($sumsamsudinyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countsamsudinao }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaoi }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaoq }}</td>
                                            <td style="text-align:center">{{ $sumsamsudinaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinaod }}">{{ number_format($sumsamsudinaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumsamsudinaop }}">{{ number_format($sumsamsudinaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $osama->name }}</th>
                                            <td style="text-align:center">{{ $countosamato }}</td>
                                            <td style="text-align:center">{{ $sumosamatoi }}</td>
                                            <td style="text-align:center">{{ $sumosamatoq }}</td>
                                            <td style="text-align:center">{{ $sumosamatof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamatod }}">{{ number_format($sumosamatod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamatop }}">{{ number_format($sumosamatop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countosamayo }}</td>
                                            <td style="text-align:center">{{ $sumosamayoi }}</td>
                                            <td style="text-align:center">{{ $sumosamayoq }}</td>
                                            <td style="text-align:center">{{ $sumosamayof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamayod }}">{{ number_format($sumosamayod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamayop }}">{{ number_format($sumosamayop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countosamaao }}</td>
                                            <td style="text-align:center">{{ $sumosamaaoi }}</td>
                                            <td style="text-align:center">{{ $sumosamaaoq }}</td>
                                            <td style="text-align:center">{{ $sumosamaaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumosamaaod }}">{{ number_format($sumosamaaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumosamaaop }}">{{ number_format($sumosamaaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                                <th style="text-align:center">Totals</th>    
                                                <td style="text-align:center">{{ $counthtto }}</td>
                                                <td style="text-align:center">{{ $sumhttoi }}</td>
                                                <td style="text-align:center">{{ $sumhttoq }}</td>
                                                <td style="text-align:center">{{ $sumhttof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhttod }}">{{ number_format($sumhttod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhttop }}">{{ number_format($sumhttop) }}.00 SAR</td>
                                                <td style="text-align:center">{{ $counthtyo }}</td>
                                                <td style="text-align:center">{{ $sumhtyoi }}</td>
                                                <td style="text-align:center">{{ $sumhtyoq }}</td>
                                                <td style="text-align:center">{{ $sumhtyof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhtyod }}">{{ number_format($sumhtyod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhtyop }}">{{ number_format($sumhtyop) }}.00 SAR</td> 
                                                <td style="text-align:center">{{ $counthtao }}</td>
                                                <td style="text-align:center">{{ $sumhtaoi }}</td>
                                                <td style="text-align:center">{{ $sumhtaoq }}</td>
                                                <td style="text-align:center">{{ $sumhtaof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumhtaod }}">{{ number_format($sumhtaod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumhtaop }}">{{ number_format($sumhtaop) }}.00 SAR</td>  
                                            </tr>   
                                        </tbody>
                                        @php 
                                    $tpercent = 
                                   
                                    $sumhttop == 0 ? 0.1 :  ($sumhttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumhtyop == 0 ? 0.1 :  (($sumhtyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumhtaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumhttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumhttop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumhtyop }}" aria-valuemin="{{ $sumhttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumhtyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumhtaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


                            @elseif ( \Auth::user()->idnumber == '1040' )


                            <h3>Awaden Team</h3>
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center" colspan="6">Today</th>
                                            <th style="text-align:center" colspan="6">Yesterday</th>
                                            <th style="text-align:center"colspan="6">All</th>

                                        </tr>
                                        <tr>
                                            <th style="text-align:center"><b>Awadin Team</b></th>
                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>

                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>

                                            <th style="text-align:center">POS</th>
                                            <th style="text-align:center">I</th>
                                            <th style="text-align:center">Q</th>
                                            <th style="text-align:center">F</th>
                                            <th style="text-align:center">D</th>
                                            <th style="text-align:center">TP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="text-align:center">{{ $ahmedshawqy->name }}</th>
                                            <td style="text-align:center">{{ $countahmedshawqyto }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqytof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqytod }}">{{ number_format($sumahmedshawqytod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqytop }}">{{ number_format($sumahmedshawqytop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countahmedshawqyyo }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyyod }}">{{ number_format($sumahmedshawqyyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyyop }}">{{ number_format($sumahmedshawqyyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countahmedshawqyao }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaoi }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaoq }}</td>
                                            <td style="text-align:center">{{ $sumahmedshawqyaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyaod }}">{{ number_format($sumahmedshawqyaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumahmedshawqyaop }}">{{ number_format($sumahmedshawqyaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $hassanfathi->name }}</th>
                                            <td style="text-align:center">{{ $counthassanfathito }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathitof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathitod }}">{{ number_format($sumhassanfathitod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathitop }}">{{ number_format($sumhassanfathitop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthassanfathiyo }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiyof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiyod }}">{{ number_format($sumhassanfathiyod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiyop }}">{{ number_format($sumhassanfathiyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthassanfathiao }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaoi }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaoq }}</td>
                                            <td style="text-align:center">{{ $sumhassanfathiaof }}</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiaod }}">{{ number_format($sumhassanfathiaod) }}.00 SAR</td>
                                            <td style="text-align:center" data-color="{{ $sumhassanfathiaop }}">{{ number_format($sumhassanfathiaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $hashem->name }}</th>
                                            <td style="text-align:center">{{ $counthashemto }}</td>
                                            <td style="text-align:center">{{ $sumhashemtoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemtoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemtof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemtod }}">{{ number_format($sumhashemtod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemtop }}">{{ number_format($sumhashemtop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthashemyo }}</td>
                                            <td style="text-align:center">{{ $sumhashemyoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemyoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemyof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemyod }}">{{ number_format($sumhashemyod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemyop }}">{{ number_format($sumhashemyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $counthashemao }}</td>
                                            <td style="text-align:center">{{ $sumhashemaoi }}</td>
                                            <td style="text-align:center">{{ $sumhashemaoq }}</td>
                                            <td style="text-align:center">{{ $sumhashemaof }}</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemaod }}">{{ number_format($sumhashemaod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $sumhashemaop }}">{{ number_format($sumhashemaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">{{ $medhathassan->name }}</th>
                                            <td style="text-align:center">{{ $countmedhathassanto }}</td>
                                            <td style="text-align:center">{{ $summedhathassantoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassantoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassantof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassantod }}">{{ number_format($summedhathassantod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassantop }}">{{ number_format($summedhathassantop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countmedhathassanyo }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassanyof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanyod }}">{{ number_format($summedhathassanyod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanyop }}">{{ number_format($summedhathassanyop) }}.00 SAR</td>
                                            <td style="text-align:center">{{ $countmedhathassanao }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaoi }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaoq }}</td>
                                            <td style="text-align:center">{{ $summedhathassanaof }}</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanaod }}">{{ number_format($summedhathassanaod) }}.00 SAR</td>
                                            <td style="text-align:center"data-color="{{ $summedhathassanaop }}">{{ number_format($summedhathassanaop) }}.00 SAR</td>   
                                        </tr>
                                        <tr>
                                                <th style="text-align:center">Totals</th>    
                                                <td style="text-align:center">{{ $countatto }}</td>
                                                <td style="text-align:center">{{ $sumattoi }}</td>
                                                <td style="text-align:center">{{ $sumattoq }}</td>
                                                <td style="text-align:center">{{ $sumattof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumattod }}">{{ number_format($sumattod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumattop }}">{{ number_format($sumattop) }}.00 SAR</td>
                                                <td style="text-align:center">{{ $countatyo }}</td>
                                                <td style="text-align:center">{{ $sumatyoi }}</td>
                                                <td style="text-align:center">{{ $sumatyoq }}</td>
                                                <td style="text-align:center">{{ $sumatyof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumatyod }}">{{ number_format($sumatyod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumatyop }}">{{ number_format($sumatyop) }}.00 SAR</td> 
                                                <td style="text-align:center">{{ $countatao }}</td>
                                                <td style="text-align:center">{{ $sumataoi }}</td>
                                                <td style="text-align:center">{{ $sumataoq }}</td>
                                                <td style="text-align:center">{{ $sumataof }}</td>
                                                <td style="text-align:center" data-color="{{ $sumataod }}">{{ number_format($sumataod) }}.00 SAR</td>
                                                <td style="text-align:center" data-color="{{ $sumataop }}">{{ number_format($sumataop) }}.00 SAR</td>  
                                            </tr>
                                        </tbody>
                                        @php 
                                    $tpercent = 
                                   
                                    $sumattop == 0 ? 0.1 :  ($sumattop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumatyop == 0 ? 0.1 :  (($sumatyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumataop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumattop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumattop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumatyop }}" aria-valuemin="{{ $sumattop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumatyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="heigat: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumataop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


                            @elseif ( \Auth::user()->idnumber == '1110' )

                            <h3>Wail Team</h3>
                            <table id="myTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center"></th>
                                    <th style="text-align:center" colspan="6">Today</th>
                                    <th style="text-align:center" colspan="6">Yesterday</th>
                                    <th style="text-align:center"colspan="6">All</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center"><b>Wail Team</b></th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                    <th style="text-align:center">POS</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">Q</th>
                                    <th style="text-align:center">F</th>
                                    <th style="text-align:center">D</th>
                                    <th style="text-align:center">TP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="text-align:center">{{ $suneer->name }}</th>
                                    <td style="text-align:center">{{ $countsuneerto }}</td>
                                    <td style="text-align:center">{{ $sumsuneertoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneertoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneertof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneertod }}">{{ number_format($sumsuneertod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneertop }}">{{ number_format($sumsuneertop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsuneeryo }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneeryof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeryod }}">{{ number_format($sumsuneeryod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeryop }}">{{ number_format($sumsuneeryop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsuneerao }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraoi }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraoq }}</td>
                                    <td style="text-align:center">{{ $sumsuneeraof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeraod }}">{{ number_format($sumsuneeraod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsuneeraop }}">{{ number_format($sumsuneeraop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $fahadhussein->name }}</th>
                                    <td style="text-align:center">{{ $countfahadhusseinto }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseintof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseintod }}">{{ number_format($sumfahadhusseintod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseintop }}">{{ number_format($sumfahadhusseintop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countfahadhusseinyo }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinyod }}">{{ number_format($sumfahadhusseinyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinyop }}">{{ number_format($sumfahadhusseinyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countfahadhusseinao }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaoi }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaoq }}</td>
                                    <td style="text-align:center">{{ $sumfahadhusseinaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinaod }}">{{ number_format($sumfahadhusseinaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumfahadhusseinaop }}">{{ number_format($sumfahadhusseinaop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $sultansalman->name }}</th>
                                    <td style="text-align:center">{{ $countsultansalmanto }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmantof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmantod }}">{{ number_format($sumsultansalmantod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmantop }}">{{ number_format($sumsultansalmantop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsultansalmanyo }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanyod }}">{{ number_format($sumsultansalmanyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanyop }}">{{ number_format($sumsultansalmanyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countsultansalmanao }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaoi }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaoq }}</td>
                                    <td style="text-align:center">{{ $sumsultansalmanaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanaod }}">{{ number_format($sumsultansalmanaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumsultansalmanaop }}">{{ number_format($sumsultansalmanaop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">{{ $medhat->name }}</th>
                                    <td style="text-align:center">{{ $countmedhatto }}</td>
                                    <td style="text-align:center">{{ $summedhattoi }}</td>
                                    <td style="text-align:center">{{ $summedhattoq }}</td>
                                    <td style="text-align:center">{{ $summedhattof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhattod }}">{{ number_format($summedhattod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhattop }}">{{ number_format($summedhattop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countmedhatyo }}</td>
                                    <td style="text-align:center">{{ $summedhatyoi }}</td>
                                    <td style="text-align:center">{{ $summedhatyoq }}</td>
                                    <td style="text-align:center">{{ $summedhatyof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhatyod }}">{{ number_format($summedhatyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhatyop }}">{{ number_format($summedhatyop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countmedhatao }}</td>
                                    <td style="text-align:center">{{ $summedhataoi }}</td>
                                    <td style="text-align:center">{{ $summedhataoq }}</td>
                                    <td style="text-align:center">{{ $summedhataof }}</td>
                                    <td style="text-align:center" data-color="{{ $summedhataod }}">{{ number_format($summedhataod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $summedhataop }}">{{ number_format($summedhataop) }}.00 SAR</td>   
                                </tr>
                                <tr>
                                    <th style="text-align:center">Totals</th>    
                                    <td style="text-align:center">{{ $countqtto }}</td>
                                    <td style="text-align:center">{{ $sumqttoi }}</td>
                                    <td style="text-align:center">{{ $sumqttoq }}</td>
                                    <td style="text-align:center">{{ $sumqttof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqttod }}">{{ number_format($sumqttod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqttop }}">{{ number_format($sumqttop) }}.00 SAR</td>
                                    <td style="text-align:center">{{ $countqtyo }}</td>
                                    <td style="text-align:center">{{ $sumqtyoi }}</td>
                                    <td style="text-align:center">{{ $sumqtyoq }}</td>
                                    <td style="text-align:center">{{ $sumqtyof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqtyod }}">{{ number_format($sumqtyod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqtyop }}">{{ number_format($sumqtyop) }}.00 SAR</td> 
                                    <td style="text-align:center">{{ $countqtao }}</td>
                                    <td style="text-align:center">{{ $sumqtaoi }}</td>
                                    <td style="text-align:center">{{ $sumqtaoq }}</td>
                                    <td style="text-align:center">{{ $sumqtaof }}</td>
                                    <td style="text-align:center" data-color="{{ $sumqtaod }}">{{ number_format($sumqtaod) }}.00 SAR</td>
                                    <td style="text-align:center" data-color="{{ $sumqtaop }}">{{ number_format($sumqtaop) }}.00 SAR</td>  
                                </tr>   
                        </tbody>

                        @php 
                                    $tpercent = 
                                   
                                    $sumqttop == 0 ? 0.1 :  ($sumqttop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));
                                    

                                    
                                    $ypercent = 
                            
                                    $sumqtyop == 0 ? 0.1 :  (($sumqtyop - $tpercent) * 100) / ( $tpercent - $sumyestedaytotalprice);

                                    $apercent = 
                                    
                                        ($sumqtaop * 100) / ($sumalltotalprice - ($sumtodaytotalprice + $sumyestedaytotalprice));

                                    @endphp
                                <tfoot>
                                    <tr>
                                        <th style="text-align:center">Targets</th>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $sumqttop }}" aria-valuemin="0" aria-valuemax="{{ $sumtodaytotalprice }}" style="width: {{ (int) $tpercent }}%;color:black">{{ number_format($sumqttop) }}.00 SAR {{ (int) $tpercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $sumqtyop }}" aria-valuemin="{{ $sumqttop }}" aria-valuemax="{{ $sumyestedaytotalprice }}" style="width: {{ (int) $ypercent }}%;color:black">{{ number_format($sumqtyop) }}.00 SAR {{ (int) $ypercent }}%</div>
                                            </div>
                                        </td>
                                        <td style="text-align:center" colspan="6">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $sumqtaop }}" aria-valuemin="2000000" aria-valuemax="45000000" style="width:  {{ (int) $apercent }}%">{{ (int) $apercent }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>


            @endif

            @else












        <div class="card-header"><span style="font-size:24px"><i class="fas fa-history"></i> Orders Summery.</div></span>
            
        <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->


            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

@markdown

#### Just Created Orders [0]

@endmarkdown
                    @if (!$jcorders->count())
                        <p>You haven't created any order recently.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($jcorders as $jcorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $jcorder->slug }}">{{ $jcorder->ponumber }}</a></td>
                                        <td>{{ $jcorder->branchname }}</td>
                                        <td class="{{ strtolower($jcorder->status) }}" id="status">{{ $jcorder->status }} {{ $jcorder->updated_at }}</td>
                                        <!--<td>{{ $jcorder->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
@endif
<br /><hr />                                     
@markdown

#### Open Orders [1]

@endmarkdown

                            @if (!$editingorders->count())
                                <p>You haven't created any order yet.</p><br /><hr />    

                            @else
                            <br /><hr />    

                            <table class="table-responsive-sm" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($editingorders as $editingorder)
                                        <tbody style="font-size:12px">

                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $editingorder->slug }}">{{ $editingorder->ponumber }}</a></td>
                                        <td>{{ $editingorder->branchname }}</td>
                                        <td class="{{ strtolower($editingorder->status) }}">{{ $editingorder->status }} {{ $editingorder->updated_at->diffForHumans()  }}</td>
                                        <!--<td>{{ $editingorder->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>

                                        @endforeach	
                                </div>
                            </div>
                        </table>
                        <br /><hr />                                      


                        @endif
@markdown

#### Reviewing Orders [2]

@endmarkdown
                    @if (!$reviewingdorders->count())
                        <p>You are not reviewing any order.</p>
                    @else
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Status</th>
                                        <!--<th>Updated</th>-->
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($reviewingdorders as $reviewingdorder)
                                        <tbody style="font-size:12px">
                                        <tr>
                                        <td><a style= "float:center" href="/orders/order/{{ $reviewingdorder->slug }}">{{ $reviewingdorder->ponumber }}</a></td>
                                        <td>{{ $reviewingdorder->branchname }}</td>
                                        <td class="{{ strtolower($reviewingdorder->status) }}">{{ $reviewingdorder->status }} {{ $reviewingdorder->updated_at->diffForHumans()  }}</td>
                                        <!--<td>{{ $reviewingdorder->updated_at->diffForHumans() }}</td>-->
                                        </tr>	
                                        </tbody>
                                        @endforeach	
                                </div>
                            </div>
                        </table>
@endif

<br /><hr />    
@markdown

#### Submitted Orders [3]

@endmarkdown

                    @if (!$processedorders->count())
                    <span id="submitted"></span>
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                        <a href="{{ route('orders.add') }}">+ Create New Order</a>
                    @endif
                        <p>You have no submited orders yet!</p>
                    @else
                    
                    <?php $totalitems = 0; ?>
                    <?php $totalqty = 0; ?>
                    <?php $totalfree = 0; ?>
                    <?php $totalprice = 0; ?>
                    <?php $totalqtyprice = 0; ?>
                    <?php $askedprice = 0; ?>
                    <?php $totaldiscount = 0; ?>
                    <?php $totaloriginal = 0; ?>
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <!--<th>Order#</th>-->
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Urgent</th>
                                        <th style="text-align:center">Tot. Items</th>
                                        <th style="text-align:center">Tot. Qtys</th>
                                        <th style="text-align:center">Free</th>
                                        <th style="text-align:center">Original Price</th>
                                        <th style="text-align:center">Total Discount</th>
                                        <th style="text-align:center">Total Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($processedorders as $processedorder)
                                    <tbody style="font-size:12px">
                                        <tr>
                                            <!--<td>{{ $processedorder->slug }}</td>-->
                                            <td>{{ $processedorder->ponumber }}</td>
                                            <td>{{ $processedorder->branchname }}</td>
                                            @if ( $processedorder->urgent == 'on' )
                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-danger">URGENT</td></strong>
                                            @else
                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-dark">Regular</td></strong>
                                            @endif
                                            <td style="text-align:center">{{ $processedorder->totalitems }}</td>
                                            <td style="text-align:center">{{ $processedorder->totalqty }}</td>
                                            <td style="text-align:center">{{ $processedorder->totalfree }}</td>
                                            <td style="text-align:center">{{ number_format($processedorder->totaloriginal) }}.00 SAR</td>
                                            <td style="text-align:center">{{ number_format($processedorder->discount) }}.00 SAR</td>
                                            <td style="text-align:center">{{ number_format($processedorder->totalprice) }}.00 SAR</td>
                                            <td class="{{ strtolower($processedorder->status) }}">{{ $processedorder->status }} {{ $processedorder->updated_at->format('d/m/y g:iA') }}</td>
                                            <?php $totalitems += $processedorder->totalitems; ?>
                                            <?php $totalqty += $processedorder->totalqty; ?>
                                            <?php $totalfree += $processedorder->totalfree; ?>
                                            <?php $totalprice += $processedorder->totalprice; ?>
                                            <?php $totalprice += $processedorder->itemprice; ?>
                                            <?php $askedprice += $processedorder->itemqty * $processedorder->askedprice; ?>
                                            @if ($processedorder->discount == 0)
                                            <?php $totalqtyprice += $processedorder->itemqty * $processedorder->itemprice; ?>
                                            @else
                                            <?php $totalqtyprice += $processedorder->itemqty * $processedorder->askedprice; ?>
                                            @endif
                                            @if ($processedorder->discount == 0)
                                            <?php $totaldiscount += "0"; ?>
                                            @else
                                            <?php $totaldiscount += $processedorder->discount ; ?>
                                            @endif
                                        </tr>	
                                    </tbody>
                                    <?php $totaloriginal += $processedorder->totaloriginal ; ?>

                                        @endforeach	
                                        <tfoot>
                                            <tr>
                                                <th style="font-size:14px;text-align:right"><strong>Tot</strong></th>
                                                <th style="font-size:14px;text-align:left;padding-left:0;"><strong>als</strong></th>
                                                <td></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalitems }}</strong></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalqty }}</strong></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalfree }}</strong></td>
                                                <th style="text-align:center">{{ number_format($totaloriginal) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totaldiscount) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totalprice) }}.00 SAR</th>
                                            </tr>
                                        </tfoot>
                                    </div>
                                </div>
                            </table>
@endif
<br /><hr />                                     
@markdown

#### Completed Orders [4]

@endmarkdown
                            @if (!$completedorders->count())
                    <span id="submitted"></span>
                    @if (Session::has('alert'))
                    <div class="alert alert-success">{{ Session::get('alert') }}</div>
                        <a href="{{ route('orders.add') }}">+ Create New Order</a>
                    @endif
                        <p>You have no submited orders yet!</p>
                    @else
                    
                    <?php $totalitems = 0; ?>
                    <?php $totalqty = 0; ?>
                    <?php $totalfree = 0; ?>
                    <?php $totalprice = 0; ?>
                    <?php $totalqtyprice = 0; ?>
                    <?php $askedprice = 0; ?>
                    <?php $totaldiscount = 0; ?>
                    <?php $totaloriginal = 0; ?>
                            <table class="table-responsive-sm processed" id="myTable">
                                <thead style="font-size:12px">
                                    <tr>
                                        <!--<th>Order#</th>-->
                                        <th>PO#</th>
                                        <th>Branch#Name</th>
                                        <th>Urgent</th>
                                        <th style="text-align:center">Tot. Items</th>
                                        <th style="text-align:center">Tot. Qtys</th>
                                        <th style="text-align:center">Free</th>
                                        <th style="text-align:center">Original Price</th>
                                        <th style="text-align:center">Total Discount</th>
                                        <th style="text-align:center">Total Price</th>
                                        <th>Status</th>
                                        <th>Processed By</th>
                                    </tr>
                                </thead>
                                <div class="media">
                                <a class="pull-left" href="">
                                </a>
                                <div class="media-body">
                                        @foreach ($completedorders as $completedorder)
                                    <tbody style="font-size:12px">
                                        <tr>
                                            <!--<td>{{ $completedorder->slug }}</td>-->
                                            <td>{{ $completedorder->ponumber }}</td>
                                            <td>{{ $completedorder->branchname }}</td>
                                            @if ( $completedorder->urgent == 'on' )
                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-danger">URGENT</td></strong>
                                            @else
                                            <strong><td style="text-align:center;padding-left:2px;padding-right:2px" class="badge badge-dark">Regular</td></strong>
                                            @endif
                                            <td style="text-align:center">{{ $completedorder->totalitems }}</td>
                                            <td style="text-align:center">{{ $completedorder->totalqty }}</td>
                                            <td style="text-align:center">{{ $completedorder->totalfree }}</td>
                                            <td style="text-align:center">{{ number_format($completedorder->totaloriginal) }}.00 SAR</td>
                                            <td style="text-align:center">{{ number_format($completedorder->discount) }}.00 SAR</td>
                                            <td style="text-align:center">{{ number_format($completedorder->totalprice) }}.00 SAR</td>
                                            <td class="{{ strtolower($completedorder->status) }}">{{ $completedorder->status }} {{ $completedorder->updated_at->format('d/m/y g:iA') }}</td>
                                            <td class="{{ strtolower($completedorder->status) }}">{{ cdn\User::where('idnumber', '=', $completedorder->processedby)->first('name') }}</td>
                                            <?php $totalitems += $completedorder->totalitems; ?>
                                            <?php $totalqty += $completedorder->totalqty; ?>
                                            <?php $totalfree += $completedorder->totalfree; ?>
                                            <?php $totalprice += $completedorder->totalprice; ?>
                                            <?php $totalprice += $completedorder->itemprice; ?>
                                            <?php $askedprice += $completedorder->itemqty * $completedorder->askedprice; ?>
                                            @if ($completedorder->discount == 0)
                                            <?php $totalqtyprice += $completedorder->itemqty * $completedorder->itemprice; ?>
                                            @else
                                            <?php $totalqtyprice += $completedorder->itemqty * $completedorder->askedprice; ?>
                                            @endif
                                            @if ($completedorder->discount == 0)
                                            <?php $totaldiscount += "0"; ?>
                                            @else
                                            <?php $totaldiscount += $completedorder->discount ; ?>
                                            @endif
                                        </tr>	
                                    </tbody>
                                    <?php $totaloriginal += $completedorder->totaloriginal ; ?>

                                        @endforeach	
                                        <tfoot>
                                            <tr>
                                                <th style="font-size:14px;text-align:right"><strong>Tot</strong></th>
                                                <th style="font-size:14px;text-align:left;padding-left:0;"><strong>als</strong></th>
                                                <td></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalitems }}</strong></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalqty }}</strong></td>
                                                <td style="font-size:14px;text-align:center"><strong>{{ $totalfree }}</strong></td>
                                                <th style="text-align:center">{{ number_format($totaloriginal) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totaldiscount) }}.00 SAR</th>
                                                <th style="text-align:center">{{ number_format($totalprice) }}.00 SAR</th>
                                            </tr>
                                        </tfoot>
                                    </div>
                                </div>
                            </table>
@endif
<br /><hr />          


@markdown

```

    Order Status Codes:
        [0] -> 'Just Created' => [editable],
        [1] -> 'Editing' => [editable],
        [2] -> 'Reviewing' => [editable],
        [3] -> 'Submitted/Processing' => [not_editable],
        [4] -> 'Completed' => [not_editable]


```
@endmarkdown





</div>
    </div>
</div>

</div>
            </div>
        </div>
    </div>
</div>


@endif
                    @else
            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" class="form-vertical" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        <!--@if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif-->
                    @endauth
                </div>
            @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection