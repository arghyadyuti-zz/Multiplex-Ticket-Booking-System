<html>
<head>
<title>MULTIPLEX TICKET BOOKING SYSTEM </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="customerlogin.js"></script>
</head>
<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('multiplexbooking');

$sql = "SELECT moviename FROM movie";
$result = mysql_query($sql);

echo "<select name='moviename'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['moviename'] . "'>" . $row['moviename'] . "</option>";
}
echo "</select>";

?>
    
<body id="page6">
<form name="form8" method="post">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">MULTIPLEX TICKET <span>BOOKING SYSTEM</span></a></div>
          <ul>
            <li><a href="#"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon2.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon3-act.gif" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="trailers.html">WATCH TRAILERS</a></li>
            <li><a href="tickets.html">BUY TICKETS</a></li>
            <li><a href="aboutus.html">ABOUT US</a></li>
            <li class="last"><a href="selection.html">SIGN IN</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3><span>DELETE </span> A MOVIE</h3>
                <p>
            <table>
<TR align="top"><td bgcolor="aqua">
    <b><h2><marquee behavior="scroll" direction="left">MOVIE <span>D E L E T I O N  </p></marquee></b><br>
        <marquee behavior="scroll" direction="right">REMOVE <span>OLD MOVIES </p></marquee></td>
<td>
    SELECT THE MOVIE ID : <select class="form-dropdown" style="width:150px" id="list" name="list">
<?php
$servername = "localhost";
$id = "movieid";
$dbname = "multiplexbooking";

// Create connection
$conn=mysql_connect('localhost','root','');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT movie(movieid) FROM  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "movie id :" . $row["movieid"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</select>
    <center>
    <input type="submit" name="delete" value="DELETE"/> </center>
</td></TR>         
</table>
                  </p>
        
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2018 <a href="#"> </a>- All Rights Reserved</p>
              <p class="rf">Designed by Arghya, Subhayan, Arkodip, Snehasish</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
    </form>
</body>
</html>