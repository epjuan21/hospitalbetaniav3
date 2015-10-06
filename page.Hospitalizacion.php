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
                    <h3>Hospitalización</h3>
                    <p>
                    Servicio de internación de primer nivel de complejidad habilitado para brindar medidas curativas y de soporte que lleven a una rápida recuperación del paciente a travez de cuidados específicos para cada patología según las guías y protocolos del Ministerio de la Protección Social contando con instalaciones y profesionales idóneos para una atención integral.
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
                <p>Ana Catalina Montoya Piedrahita</p>
                <p>Leidy Lorena Sanchez</p>
                <p>Natalia Suarez Ospina</p>
                <p>Andrés Felipe Paternina Perez</p>
				</div>
			</div>
		</div>

	</div>
<hr>
</div>

<div class="container">
	
	<div class="page-header">
		<h3>Producción en Hospitalización</h3>
	</div>
	
<script type="text/javascript">
$(function () {
        $('#chart').highcharts({
            chart: {
            type: 'line'
            },

            title: {
                text: 'Egresos Hospitalarios No Quirurgicos - Hospital Betania',
                x: -20 //center
            },
  			
  			credits: {
            	enabled: false
        	},

            subtitle: {
                text: '2013',
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
                name: 'Egresos 2013',
                data: [11, 12, 12, 18, 15, 26, 8, 9, 16, 15, 19, 10]
            },{
                name: 'Egresos 2014',
                data: [10,14,12,13,9,13,12,,,,,]
            }]
        });

    });


</script>

	<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>