<!-- inicio del header de calendar -->

<meta charset='utf-8' />
<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.min.js'></script>
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
			events: [
				{
					title: 'Día del trabajador',
					start: '2015-05-01'
				},
				{
					title: 'En Revisión',
					//start: '2015-02-13T11:00:00', //asi se le puede colocar la hora
					start: '2015-05-13',
					constraint: 'Bloqueada', // defined below
					color: '#257e4a'
				},
				{
					title: 'Ocupada',
					//start: '2015-02-13T11:00:00', //asi se le puede colocar la hora
					start: '2015-05-14',
					constraint: 'Bloqueada', // defined below
					color: '#E63B41'
				},				
				{
					title: 'Semana santa',
					start: '2015-05-18',
					end: '2015-05-20'
				},
		

				// areas where "Meeting" must be dropped
				//{
					//id: 'availableForMeeting',
					//start: '2015-02-11T10:00:00',
					//end: '2015-02-11T16:00:00',
					//rendering: 'background'
				//},
				//{
					//id: 'availableForMeeting',
					//start: '2015-02-13T10:00:00',
					//end: '2015-02-13T16:00:00',
					//rendering: 'background'
				//},

				// red areas where no events can be dropped
				//{
					//start: '2015-05-24',
					//end: '2015-05-28',
					//overlap: false,
					//rendering: 'background',
					//color: '#ff9f89'
				//},
				//{
					//start: '2015-05-06',
					//end: '2015-05-08',
					//overlap: false,
					//rendering: 'background',
					//color: '#ff9f89'
				//}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 500px;
		margin: 0 auto;
	}

</style>

<!-- fin del header de calendar -->
<div id='calendar'></div>
