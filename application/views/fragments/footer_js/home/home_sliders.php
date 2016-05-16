<script type="text/javascript" src="<?php echo base_url(); ?>/libs/js/PieChart.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/libs/js/BarChart.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/libs/js/LineChart.js"></script>
			
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence-theme.basic.js"></script>
			
<script src='<?php echo base_url(); ?>/libs/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url(); ?>/libs/fullcalendar/fullcalendar.min.js'></script>
	<script>
		$(document).ready(function(){
			$('#memo-table').DataTable({
				searching: false,
				"bLengthChange": false
			});
					
			$('#memo-calendar').fullCalendar({
				defaultDate: '2016-01-12',
				editable: true,
				eventLimit: true,
				height: 400,
				events: [
							{
								title: 'All Day Event',
								start: '2016-01-01',
								end: '2016-01-02'
							},
							{
								title: 'Long Event',
								start: '2016-01-02',
								end: '2016-01-03'
							},
							{
								title: 'Long Event',
								start: '2016-01-03',
								end: '2016-01-04'
							}
						]
			});
		});
	</script>
				
	<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
	<script>
		function initialize() {
			var myLatLng = {lat: 16.413684, lng: 120.596125};
			var myLatLng1 = {lat: 16.413826, lng: 120.596645};
			var myLatLng2 = {lat: 16.413910, lng: 120.594317};
	
			var mapCanvas = document.getElementById('map');
			var mapOptions = {
				center: myLatLng,
				zoom: 18,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			}
			var map = new google.maps.Map(mapCanvas, mapOptions);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'La Brea In'
			});				
			var marker1 = new google.maps.Marker({
				position: myLatLng1,
				map: map,
				title: 'Hodori'
			});
				
			var marker2 = new google.maps.Marker({
				position: myLatLng2,
				map: map,
				title: 'Chowking'
			});		
		}			  
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>