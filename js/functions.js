$(document).on('ready',function()
{

	// Corigo Galeria de Imagnes ColorBox http://www.jacklmoore.com/colorbox/

                //Examples of how to assign the Colorbox event to elements
                $(".group1").colorbox({rel:'group1'});
                $(".group2").colorbox({rel:'group2', transition:"fade"});
                $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
                $(".group4").colorbox({rel:'group4', slideshow:true});
                $(".ajax").colorbox();
                $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
                $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
                $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
                $(".inline").colorbox({inline:true, width:"50%"});
                $(".callbacks").colorbox({
                    onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                    onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                    onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                    onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                    onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
                });

                $('.non-retina').colorbox({rel:'group5', transition:'none'})
                $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });


	// Validacion Formulario de Contacto

	$("#formEnviarComentario").submit(function()
	{
		var validado = true;

		if ($("#txtNombre").val()=='')
		{
			validado = false;
			$("#txtNombre").parent().addClass('has-error');
			$("#txtNombre").next("span").html("Escriba su nombre por favor");
			validado = false;
		}

		//if (validado === true) return true;
		//return false;

	});


    // Codigo de GOOGLE MAPS

    var map;

    function initialize() {

        // Opciones del Mapa


        var posicionHospital = new google.maps.LatLng(5.748679, -75.979726);
            var mapOptions = {
            center: posicionHospital,
            disableDefaultUI: false,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP

        };

        map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

        var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Hospital San Antonio</h1>'+
        '<div id="bodyContent">'+
        '<p><b>El Hospital San Antonio</b> esta ubicado en la Calle 20 # 26 - 173 en el Municipio de Betania - Antioquia' +
        '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
            map: map,
            position: posicionHospital,
            pixelOffset: new google.maps.Size(0, -20),
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: posicionHospital,
            map: map,
            title: 'Hospital San Antonio de Betania'
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);


    // Date Time Picker

    $('.form-Fecha-Hora-Cita-Odont').datetimepicker({
        format: 'dd MM yyyy - hh:ii',
        language:  'es',
        daysOfWeekDisabled: [0],
        weekStart: 1,
        todayBtn:  false,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        pickerPosition: 'top-left'
    });


});