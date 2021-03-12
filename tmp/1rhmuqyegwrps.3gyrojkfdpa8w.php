<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= ($site) ?></title>
        <!-- Bootstrap -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="/ui/js/Chart.min.js"></script>
        <script src="/ui/js/utils.js"></script>	
	<link rel="stylesheet" href="/ui/css/global.css">
	
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["transdate","duedate","startdate","enddate"]);
			<?php if ($page_head=='clock'): ?>
                        myCalendar.setDateFormat("%Y/%m/%d %H:%i");
			<?php else: ?>myCalendar.setDateFormat("%Y/%m/%d");
			<?php endif; ?>
		}
	</script>

    </head>

<body onLoad="doOnLoad();" class="fluid-container" style="padding-top:65px; padding-left:20px;padding-right:20px">
<div>
