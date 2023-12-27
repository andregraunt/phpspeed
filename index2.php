


<!DOCTYPE html>
<html>
<head>
    <title>Number Generator</title>
    
</head>
<body>

    <div id="timer"></div>

    <center>    <h1>hello haverim</h1></center>


   <center>    <h1>   <div id="time"></div>  </center>    </h1>

  <script>
    function showTime() {
      let date = new Date();
      let h = date.getHours();
      let m = date.getMinutes();
      let s = date.getSeconds();

      document.getElementById("time").innerHTML = 
        h + ":" + m + ":" + s;
    }

    setInterval(showTime, 1000);
  </script>



<?php
//echo time();
echo date("d/m/Y");
//echo ("$          $");


?>
</body>
</html>
