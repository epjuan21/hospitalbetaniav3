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
                    <h3>Rayos X</h3>
                    <p>
                    La institución ofrece para la atención de la comunidad el servicio de radiología básica, contando con equipos de alta tecnología y un técnico en radiología certificado para la toma de imágenes diagnósticas y de esta manera apoyar los servicios de consulta externa, hospitalizacion y urgencias para una atención integral a la población.
                    </p>
                </div>
            </div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-clock-o fa-spin"></i> Horarios de Atención al Público</strong></div>
				<div class="panel-body">
				<strong>Lunes, Martes, Jueves y Viernes: </strong> 7:00 AM - 12MD y de 1:00 PM - 5:00 PM
				</div>
				<ul class="list-group">
					<li class="list-group-item"><strong>Miércoles: </strong>7:00 AM - 2:00 PM</li>
				</ul>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-phone"></i> Teléfonos</strong></div>
				<div class="panel-body">
				843 50 50 - Ext: 108
				</div>
			</div>	
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-user"></i> Profesionales</strong></div>
				<div class="panel-body">
				<p>Jairo Alberto Galeano Quiceno</p>
				</div>
			</div>
		</div>

	</div>
<hr>
</div>

<div class="container">

	<div class="page-header">
		<h3>Producción Rayos X</h3>
	</div>

	<script type="text/javascript">
$(function () {
        $('#chart').highcharts({
            chart: {
            type: 'line'
            },

            title: {
                text: 'Número de Imágenes Diagnósticas Realizadas - Hospital Betania',
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
                name: 'Rayos X 2013',
                data: [184, 189, 216, 229, 267, 199, 162, 181, 254, 112, 165, 111]
            }, {
                name: 'Rayos X 2014',
                data: [179, 136 ,140, 153, 216, 116, 174,,,,,]
            }]
        });

    });


</script>

    <div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>