<html>

<?php

   //this will NOT work, the browser received the HTML tag before the script

   echo "<a href=http://149.139.16.93/test/list.php>LIST</a><br><br>";
   echo "<a href=http://149.139.16.96:8080/sensorwebhub/>SENSORWEB HUB</a>";
   	
   //header( 'Location: http://149.139.16.93/test/list.php' ) ;

?>