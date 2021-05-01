
<?php
if(!check_role($page,'*'))
{
  echo "<script>alert('You are not permitted!!!');window.location='home';</script>";
}

$sql = "SELECT ( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 1 ) as user1
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 2 ) as user2
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 3 ) as user3
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 4 ) as user4
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 5 ) as user5
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 6 ) as user6
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 7 ) as user7
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 8 ) as user8
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 9 ) as user9
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 10 ) as user10
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 11 ) as user11
,( SELECT count(user_id) FROM `users` WHERE  YEAR(user_created_at) = YEAR(NOW()) AND user_email <> ''  and MONTH(user_created_at) = 12 ) as user12
" ;

$result = $db->rawQuery($sql);//@mysql_query($sql);

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Statistic Overview</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Statistic</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                
                
                <div class="col-md-6">
                  <div class="card card-info">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                          User Report
                          </a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse show ">
                        <div class="card-body">
                              <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                  <canvas id="user-report" height="400" style="display: block; height: 200px; width: 311px;" width="622" class="chartjs-render-monitor"></canvas>
                              </div>

                              <div class="d-flex flex-row justify-content-end">
                                  <span class="mr-2">
                                      <i class="fas fa-square text-primary"></i> User
                                  </span>
                              </div>
                        </div>
                      </div>
                    </div>
                </div>
              

                <!-- <div class="col-md-6">

                  <div class="card card-secondary">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Participant Report
                          </a>
                        </h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse show ">
                        <div class="card-body">
                          
                              <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                  <canvas id="participant-report" height="400" style="display: block; height: 200px; width: 311px;" width="622" class="chartjs-render-monitor"></canvas>
                              </div>

                              <div class="d-flex flex-row justify-content-end">
                                  <span class="mr-2">
                                      <i class="fas fa-square text-primary"></i> user    
                                  </span>
                                  <span class="mr-2">
                                      <i class="fas fa-square text-success"></i> NGO    
                                  </span>
                                  <span class="mr-2">
                                      <i class="fas fa-square text-danger"></i> Vision Zero    
                                  </span>

                              </div>

                        </div>
                      </div>
                    </div>

                </div> -->

            </div>

            <!-- /.row -->
            <div class="row col-lg-12" style="text-align:center;">
                <div class="col-lg-3 col-6">
                    <a href="home"><button type="button" class="btn btn-block btn-primary">Back</button></a>
                </div>
                <!-- ./col -->
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>


<script>
$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $userChart = $('#user-report')
  var userChart  = new Chart($userChart, {
    type   : 'bar',
    data   : {
      labels  : ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data           : [<?=$result[0]['user1']?>, <?=$result[0]['user2']?>, <?=$result[0]['user3']?>, <?=$result[0]['user4']?>, <?=$result[0]['user5']?>, <?=$result[0]['user6']?>, <?=$result[0]['user7']?>, <?=$result[0]['user8']?>, <?=$result[0]['user9']?>, <?=$result[0]['user10']?>, <?=$result[0]['user11']?>, <?=$result[0]['user12']?>]
        }
        
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          stacked:true,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .6)',
            zeroLineColor: 'transparent'
          }
          // ,ticks    : $.extend({
          //   beginAtZero: true,

          //   // Include a dollar sign in the ticks
          //   callback: function (value, index, values) {
          //     if (value >= 1000) {
          //       value /= 1000
          //       value += 'k'
          //     }
          //     // return 'MYR' + value
          //     return  value
          //   }
          // }, ticksStyle)
        }],
        xAxes: [{
          stacked:true,
          display  : true,
          gridLines: {
            display: false
          }
          // ,ticks    : ticksStyle
        }]
      }
    }
  });


});

</script>