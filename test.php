
<!doctype html>

<html>
<head>
<title>test</title>
</head>


 <body>
	 
	 <h1>test send data via web</h1>
	 <hr> Send data to the sense hat show it on the display and send back temp back to the website
	 </hr> <br/>
	 
	 <?php 
			if ($_GET){
				$temp = exec('sudo python /home/pi/sense_hay.py '.$_GET[data]);
			}
			?>
			
			<FROM NAME="sense" Method="get">
				Data: <input type="text" name="data"/>
				<button name="sens">send</button><br/><br/>
				<div id="log" style="width:180px; height:30px; text-align: center;
				bacjground-colour: #c2c2c2">Temperature: <?php echo $temp;?> &deg;C</div>
			
			</FROM>
	  
 </body>

</html>
