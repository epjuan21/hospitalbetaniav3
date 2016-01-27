<section class="section-title">
	<div class="container">
			<h3><strong>Nuestros Servicios</strong></h3>
	</div>
</section>

<div class="container">
	
	<div class="row">

		<div class="col-md-6">
	        <div class="row">
                <div class="col-md-12">
                    <h3>Urgencias</h3>
                    <p>
                    Servicio enfocado a aquellos usuarios cuya condición clinica implique riesgo de muerte o de secuela funcional grave. La atención de urgencia o emergencia vital será inmediatamente atendida por un profesional del área de la medicina con el apoyo del personal de enfermería debidamente entrenados y con los implementos e insumos necesarios para la atención.
                    </p>
                </div>
            </div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-clock-o fa-spin"></i> Horarios de Atención al Público</strong></div>
				<div class="panel-body">
				Todos los días las 24 horas
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-phone"></i> Teléfonos</strong></div>
				<div class="panel-body">
				843 50 50
				</div>
			</div>	
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-user"></i> Profesionales</strong></div>
				<div class="panel-body">
                <p>Julian Alfonso Mesa Giraldo</p>
                <p>Carolina Agudelo Santamaria</p>
                <p>Leidy Lorena Sanchez</p>
                <p>Carlos Alfredo Pinto</p>
                <p>Andrés Felipe Paternina Perez</p>
				</div>
			</div>
		</div>

	</div>
<hr>
</div>

<div class="container">
	<div class="page-header">
		<h3>Producción Consultas de Urgencias</h3>
	</div>

<script type="text/javascript">
$(function () {
        $('#chart').highcharts({
            chart: {
            type: 'line'
            },

            title: {
                text: 'Número de Consultas de Medicina General en Urgencias- Hospital Betania',
                x: -20 //center
            },
  			
  			credits: {
            	enabled: false
        	},

            subtitle: {
                text: '2013 - 2014',
                x: -20
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: ''
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                enabled: true,
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },

      		navigation: {
	            buttonOptions: {
	                enabled: true
	            }
        	},

            plotOptions: {
            series: {
                dataLabels: {
                    enabled: false,
                    borderRadius: 5,
                    backgroundColor: 'rgba(252, 255, 197, 0.7)',
                    borderWidth: 1,
                    borderColor: '#AAA'
                }
            }
            },

            series: [{
                name: 'Consultas 2013',
                data: [272, 246, 261, 311, 284, 358, 322, 304, 321, 249, 242, 264]
            }, {
                name: 'Consultas 2014',
                data: [296,252,245,287,251,257,304,,,,,]
            }]
        });

    });


</script>

<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>


</div>