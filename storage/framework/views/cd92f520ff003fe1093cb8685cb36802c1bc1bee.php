<?php $__env->startSection('content'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              


            	<div class="panel-body">
            		 <?php echo $__env->make("Planilla de subsidio.menu", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            		<div class="col-lg-12">
            			<hr>
            			<h2 class="intro-text text-center">Planillas de subsidios</h2>
            			<hr>
            		</div>


            		<?php echo Form::open(['route' => $ruta_controlador.'.report', 'method' => 'GET']); ?>

            			<table class="table">
            				<tr>
            					<td>Gestion</td>
            					<td>
                      				<?php echo Form::select('gestion',config("options.gestiones"), null,['class' => 'form-control' , 'required' => 'required']); ?>

            					</td>
            					<td>
            						Mes
            					</td>
            					<td>
            							<?php echo Form::select('mes',array_add(config("options.meses"),"todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']); ?>

            					</td>
            					<td>
            							<button type="submit" class="btn btn-primary">Buscar</button>	
            					</td>
            				</tr>
            			</table>
					<?php echo Form::close(); ?>

						<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<div id="planilla" style="min-width: 210px; height: 300px; margin: 0 auto">
							asdf
						</div>
						<script type="text/javascript">
							Highcharts.chart('planilla', {
						    chart: {
						        type: 'column'
						    },
						    title: {
						        text: 'Planilla de subsidios'
						    },
						    subtitle: {
						        text: "Fecha:"+ hoy
						    },
						    xAxis: {
						        categories: mes,
						        crosshair: true
						    },
						    yAxis: {
						        min: 0,
						        title: {
						            text: 'Beneficiados (Cantidad)'
						        }
						    },
						    tooltip: {
						        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
						        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
						            '<td style="padding:0"><b>{point.y:.1f} Beneficiados</b></td></tr>',
						        footerFormat: '</table>',
						        shared: true,
						        useHTML: true
						    },
						    plotOptions: {
						        column: {
						            pointPadding: 0.2,
						            borderWidth: 0
						        }
						    },
						    series: [{
						        name: 'subsidios',
						        data: nombre

						    }]
						});	
						</script>
						<script type="text/javascript">
							console.log(nombre); // bar
							console.log(mes); // 29
						</script>


            		</div>



            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>