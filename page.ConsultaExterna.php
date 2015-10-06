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
                    <h3>Consulta Externa</h3>
                    <p>
                    Es el área o servicio de atención a la salud del paciente ambulatorio quien consulta por patologías no urgentes, donde se ofrece orientación, diagnósticos y tratamientos médicos a toda la comunidad por medio de personal médico debidamente certificado y en instalaciones habilitadas para prestar un servicio de alta calidad.
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
				843 50 50
				</div>
			</div>	
			<div class="panel panel-default">
				<div class="panel-heading"><strong><i class="fa fa-users"></i> Profesionales</strong></div>
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
		<h3>Producción Consulta Externa</h3>
	</div>

	<script type="text/javascript">
$(function () {
        $('#chart').highcharts({
            chart: {
            type: 'line'
            },

            title: {
                text: 'Número de Consultas de Medicina General - Hospital Betania',
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
                data: [1151, 1390, 1061, 1399, 1478, 921, 1348, 1252, 1169, 1119, 1108, 976]
            }, {
                name: 'Consultas 2014',
                data: [1286,1289,1283,981,1573,1411,1602,1575,1654,1618,,]
            }]
        });

    });


</script>

    <div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>