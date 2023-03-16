
<?php $__env->startSection('content'); ?>
<?php if(App::getLocale() == 'en'): ?>
<style>
 


.footer {
  margin-left: 6px;
}

.first-card {

  height: 165px;
}
.card-title{color: #9A9A9A;
font-size: 16px;
line-height: 1.4em;}
</style>  
  <?php else: ?>
<style>
    .card-title{color: #9A9A9A;
font-size: 16px;
line-height: 1.4em;}
.first-card {

height: 165px;
}
.footer {
  margin-right: 6px;
}
#container {
    height: 500px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
    font-family: 'NotoKufi';

}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}




.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}

.highcharts-title{
    color: #9A9A9A;
}
#barchart {
    height: 500px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
    color: #9A9A9A;
}

.highcharts-data-table table {
    font-family: 'NotoKufi';
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #b9a4a4;;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


</style>   
 <?php endif; ?>
<div class="content">


<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats  first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-globe "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.TotalOrders')); ?></p>
                                    <p class="card-title" style="font-size: 22px;" style="font-size: 22px;"><?php echo e($TotalOrder); ?></p>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i><?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-money-coins "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.Orders that have been delivered')); ?></p>
                                    <p class="card-title" style="font-size: 22px;"><?php echo e($Deliveried); ?>

                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i>  <?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-vector "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.Orders that have been not delivered')); ?></p>
                                    <p class="card-title" style="font-size: 22px;"><?php echo e($NoDelivery); ?>

                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> <?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>







        
<div class="row">

<div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-favourite-28 "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.Orders today')); ?> </p>
                                    <p class="card-title" style="font-size: 22px;" style="font-size: 22px;"><?php echo e($Order_Tody); ?>

                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i> <?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats  first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-globe "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.Less stock products')); ?></p>
                                    <p class="card-title" style="font-size: 22px;"><?php echo e($product_min_stock); ?>

                                        <p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i><?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats first-card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-2 col-md-3">
                                <div class="icon-big text-center" style="color:#a7d720;">
                                    <i class="nc-icon nc-money-coins "></i>
                                </div>
                            </div>
                            <div class="col-10 col-md-9">
                                <div class="numbers">
                                    <p class="card-category"><?php echo e(trans('messages.Out of stock products')); ?></p>
                                    <p class="card-title" style="font-size: 22px;"><?php echo e($product_out_of_stock); ?>

                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i>  <?php echo e(trans('messages.Total of all Orders')); ?>

                        </div>
                    </div>
                </div>
            </div>
           
        </div>


        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div id="container"></div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure" style="font-family: 'NotoKufi';">
  <div id="barchart" ></div>
  <p class="highcharts-description" style="color: #9A9A9A;">
  <?php echo trans('messages.Best selling products');?>
  </p>
</figure>

</div>
</div>









        </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
(async () => {

const topology = await fetch(
  'https://code.highcharts.com/mapdata/countries/sd/custom/sd-all-disputed.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data=<?php echo json_encode($code_state);?>

// Create the chart
Highcharts.mapChart('container', {
  chart: {
    map: topology,
    style: {
            fontFamily: 'Cairo',
            color: "#9A9A9A",
        }
  },

  title: {
    text: "<?php echo trans('messages.The amount of orders in each state');?>"
  },

  subtitle: {
    text: 'Source map: <a href="lifestylecentr.com">lifestyle</a>'
  },

  mapNavigation: {
    enabled: true,
    buttonOptions: {
      verticalAlign: 'bottom'
    }
  },

  colorAxis: {
  dataClasses: [{
    from: 0,
    to: 3,
    color: "red"
  }, {
    from: 3,
    to: 10,
    color: "yellow"
  }, {
    from: 10,
    to: 30,
    color: "green"
  }, {
    from: 30,
    to: 100,
    color: "blue"
  }, {
    from: 100,
    to: 300,
    color: "pink"
  }, {
    from: 300,
    to: 1000,
    color: "purple"
  }, {
    from: 1000,
    color: "black"
  }]
},
  series: [{
    data: data,
    name: '<?php echo trans('messages.Order');?>',
    states: {
      hover: {
        color: '#a7d720'
      },
      
    },
    dataLabels: {
      enabled: true,
      format: '{point.name}'
    }
  }]
});

})();

</script>

<script type="text/javascript">

    $(function () { 

var name=<?php echo $name_product;?> 

// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('barchart', {
  chart: {
    type: 'column'
  },
  title: {
    align: 'left',
    text: '<?php echo trans('messages.Best selling products');?>',
  },
  subtitle: {
    align: 'left',
    text: 'Source: lifestylecentr.com'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: '<?php echo trans('messages.Quantity');?>',
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y}'
      }
    }
  },

  tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },

  series: [
    {
        name: '<?php echo trans('messages.quantities');?>',
      colorByPoint: true,
      data: name
    }
  ],
  drilldown: {
    breadcrumbs: {
      position: {
        align: 'right'
      }
    },
  
  }
});});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.app.layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Lifestyle/resources/views/admin/home.blade.php ENDPATH**/ ?>