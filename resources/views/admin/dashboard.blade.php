@extends('layouts.main')

@section('main_content')

<section class="section">

    <div class="section-header">
      <h1>Crear proyecto nuevo</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">main</div>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body card-type-3">
              <div class="row">
                <div class="col">
                  <h6 class="text-muted mb-0">Total de clientes</h6>
                  <span class="font-weight-bold mb-0">450</span>
                </div>
                <div class="col-auto">
                  <div class="card-circle l-bg-orange text-white">
                    <i class="fas fa-book-open"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">mes pasado</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body card-type-3">
              <div class="row">
                <div class="col">
                  <h6 class="text-muted mb-0">Nuevos checkin</h6>
                  <span class="font-weight-bold mb-0">1,562</span>
                </div>
                <div class="col-auto">
                  <div class="card-circle l-bg-cyan text-white">
                    <i class="fas fa-briefcase"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 7.8%</span>
                <span class="text-nowrap">mes pasado</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body card-type-3">
              <div class="row">
                <div class="col">
                  <h6 class="text-muted mb-0">Inquiry</h6>
                  <span class="font-weight-bold mb-0">7,897</span>
                </div>
                <div class="col-auto">
                  <div class="card-circle l-bg-green text-white">
                    <i class="fas fa-phone"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 15%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body card-type-3">
              <div class="row">
                <div class="col">
                  <h6 class="text-muted mb-0">Earning</h6>
                  <span class="font-weight-bold mb-0">$8,965</span>
                </div>
                <div class="col-auto">
                  <div class="card-circle l-bg-purple text-white">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 5.4%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Usuarios ingresados</h4>
            </div>
            <div class="card-body">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h4>Ingresos</h4>
            </div>
            <div class="card-body">
              <h4 class="header-title">Usuarios registrados</h4>
              <h2 class="mb-3"><i class="mdi mdi-currency-usd text-primary"></i>1.250</h2>
              <div class="row mb-1">
                <div class="col-6">
                  <p class="text-muted mb-1">Este mes</p>
                  <h3 class="mt-0 font-20">117</h3>
                </div>
                <div class="col-6">
                  <p class="text-muted mb-1">Mes anterior</p>
                  <h3 class="mt-0 font-20">350</h3>
                </div>
              </div>
              <div class="mt-1">
                <div class="recent-report__chart">
                  <div id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Últimos usuarios ingresados </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th class="text-center">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                          class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th>Fecha</th>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-1">
                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Ecommerce website</td>
                    <td class="align-middle">
                      <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                        <div class="progress-bar bg-success" data-width="100"></div>
                      </div>
                    </td>
                    <td>2018-01-20</td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-4">
                        <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Android App</td>
                    <td class="align-middle">
                      <div class="progress" data-height="4" data-toggle="tooltip" title="30%">
                        <div class="progress-bar bg-orange" data-width="30"></div>
                      </div>
                    </td>
                    <td>2018-09-11</td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-5">
                        <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Logo Design</td>
                    <td class="align-middle">
                      <div class="progress" data-height="4" data-toggle="tooltip" title="67%">
                        <div class="progress-bar bg-purple" data-width="67"></div>
                      </div>
                    </td>
                    <td>2018-04-12</td>
                  </tr>
                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-6">
                        <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>Java Project</td>
                    <td class="align-middle">
                      <div class="progress" data-height="4" data-toggle="tooltip" title="43%">
                        <div class="progress-bar bg-success" data-width="43"></div>
                      </div>
                    </td>
                    <td>2018-01-20</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

@endsection
@section('custon_js')

 <script>

"use strict";

/* chart shadow */
var draw = Chart.controllers.line.prototype.draw;
Chart.controllers.lineShadow = Chart.controllers.line.extend({
  draw: function () {
    draw.apply(this, arguments);
    var ctx = this.chart.chart.ctx;
    var _stroke = ctx.stroke;
    ctx.stroke = function () {
      ctx.save();
      ctx.shadowColor = '#00000075';
      ctx.shadowBlur = 10;
      ctx.shadowOffsetX = 8;
      ctx.shadowOffsetY = 8;
      _stroke.apply(this, arguments)
      ctx.restore();
    }
  }
});

var ctx = document.getElementById('myChart').getContext("2d");
var gradientStroke = ctx.createLinearGradient(500, 0, 0, 0);
gradientStroke.addColorStop(0, 'rgba(55, 154, 80, 1)');
gradientStroke.addColorStop(1, 'rgba(131, 210, 151, 1)');

var gradientStroke2 = ctx.createLinearGradient(0, 0, 700, 0);
gradientStroke2.addColorStop(0, 'rgba(255, 204, 128, 1)');
gradientStroke2.addColorStop(0.5, 'rgba(255, 152, 0, 1)');
gradientStroke2.addColorStop(1, 'rgba(239, 108, 0, 1)');


var myChart = new Chart(ctx, {
  type: 'lineShadow',
  data: {
    labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
    type: 'line',
    defaultFontFamily: 'Poppins',
    datasets: [{
      label: "Income",
      data: [0, 30, 10, 120, 50, 63, 10],
      borderColor: gradientStroke2,
      pointBorderColor: gradientStroke2,
      pointBackgroundColor: gradientStroke2,
      pointHoverBackgroundColor: gradientStroke2,
      pointHoverBorderColor: gradientStroke2,
      pointBorderWidth: 10,
      pointHoverRadius: 10,
      pointHoverBorderWidth: 1,
      pointRadius: 1,
      fill: false,
      borderWidth: 4,
    }, {
      label: "Expenses",
      data: [0, 50, 40, 80, 40, 79, 120],
      borderColor: gradientStroke,
      pointBorderColor: gradientStroke,
      pointBackgroundColor: gradientStroke,
      pointHoverBackgroundColor: gradientStroke,
      pointHoverBorderColor: gradientStroke,
      pointBorderWidth: 10,
      pointHoverRadius: 10,
      pointHoverBorderWidth: 1,
      pointRadius: 1,
      fill: false,
      borderWidth: 4,
    }]
  },
  options: {
    legend: {
      position: "bottom"
    },
    tooltips: {
      mode: 'index',
      titleFontSize: 12,
      titleFontColor: '#fff',
      bodyFontColor: '#fff',
      backgroundColor: '#000',
      titleFontFamily: 'Poppins',
      bodyFontFamily: 'Poppins',
      cornerRadius: 3,
      intersect: false,
    },
    scales: {
      yAxes: [{
        ticks: {
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "bold",
          beginAtZero: true,
          maxTicksLimit: 5,
          padding: 20,
          fontColor: "#9aa0ac", // Font Color
        },
        gridLines: {
          drawTicks: false,
          display: false
        }

      }],
      xAxes: [{
        gridLines: {
          zeroLineColor: "transparent"
        },
        ticks: {
          padding: 20,
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "bold",
          fontColor: "#9aa0ac", // Font Color
        }
      }]
    }
  }
});




var options = {
  chart: {
    height: 170,
    type: 'bar',
    toolbar: {
      show: false,
    }
  },
  plotOptions: {
    bar: {
      columnWidth: '40%',
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val + "%";
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["#9aa0ac"]
    }
  },
  series: [{
    name: 'Income',
    data: [2.3, 3.1, 4.0, 5.1, 4.0, 3.6, 3.2]
  }],
  xaxis: {
    categories: ["S", "M", "T", "W", "T", "F", "S"],
    position: 'bottom',
    labels: {
      offsetY: -1,

    },
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },

    tooltip: {
      enabled: false,
      offsetY: -35,

    }
  },

  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val + "%";
      }
    }

  },

}

var chart = new ApexCharts(
  document.querySelector("#chart2"),
  options
);

chart.render();


 </script>
@endsection
