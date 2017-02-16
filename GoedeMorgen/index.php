<?php 


date_default_timezone_set("Europe/Amsterdam");
$hour = date("H");
$minut = date("i");

if ($hour >= 0) 
{
	$class = "nacht";
	if ($hour >= 6) 
	{
		$class = "morgen";
		if ($hour >= 12) 
		{
			$class = "middag";
			if ($hour >= 18) 
			{
				$class = "avond";
			}
		}
	}
}
?>
<!DOCTYPE html>
<head>
  	<title>goedemorgen</title>
    <link rel="stylesheet" href="style.css">


</head>
<body class="<?php echo $class;?>">
<div id="responsecontainer">

	<div class="Tijd">
		<p>Goede<?php echo $class; ?>!</p>
		<p>Het is nu  <?php echo "$hour:$minut"; ?></p>
	</div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
 	 $("#responsecontainer").load("index.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('index.php');
   }, 600000);
   $.ajaxSetup({ cache: false });
});
</script>
</script>
</body>
</html>