<!-- inicio del header de calendar -->

<meta charset='utf-8' />
<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.js'></script>
<script src='fullcalendar/fullCalendarDisablePrevNext.js'></script>
<script src='fullcalendar/lang/es.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev, next',
				center: 'title',
				//right: 'month,agendaWeek,agendaDay'
				right: 'today'
			},
			//defaultDate: '2015-06-15',
			lang: 'es',
			businessHours: true, // display business hours
			editable: false,
			
			events: 
				<?=get_events();?>			
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 11px;
	}

	#calendar {
		max-width: 500px;
		margin: 0 auto;
	}

</style>
<!-- fin del header de calendar -->
<div id='calendar'></div>


