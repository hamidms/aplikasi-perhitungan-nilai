@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Grafik Nilai</h5>
        <!-- Column Chart -->
        <div id="columnChart" style="min-height: 365px;">
            <div id="apexchartsi3hkuw2v" class="apexcharts-canvas apexchartsi3hkuw2v apexcharts-theme-light">
                
                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                    <div class="apexcharts-menu-icon" title="Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                        </svg>
                    </div>
                    <div class="apexcharts-menu">
                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#columnChart"), {
                series: [{
               name: 'Nilai',
               data: {!!json_encode($data)!!},
             }],
                chart: {
                  type: 'bar',
                  height: 350
                },
                plotOptions: {
                  bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                  },
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  show: true,
                  width: 5,
                  colors: ['transparent']
                },
                xaxis: {
                    categories: {!!json_encode($categories)!!}
                },
                yaxis: {
                  title: {
                    text: 'Nilai'
                  }
                },
                fill: {
                  opacity: 1
                },
                tooltip: {
                  y: {
                    formatter: function(val) {
                      return val 
                    }
                  }
                }
              }).render();
            });
        </script>
        <!-- End Column Chart -->
    </div>
</div>
@stop