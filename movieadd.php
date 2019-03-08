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
        if(isset($_POST['add']))
        {
            $conn=mysql_connect('localhost','root','');
            if(!$conn)
            {
                die("could not connect :".mysql_error());
            }
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {    
                $id=$_POST['movieid'];
                $name=$_POST['moviename'];
                $cast=$_POST['cast'];
                
                echo $id.$name.$cast;
                
                $sqlstr="insert into movie(movieid,moviename,cast) values('$id','$name','$cast')";
                mysql_select_db("multiplexbooking");
                $ret=mysql_query($sqlstr,$conn);
                if(!$ret)
                {echo "insertion not successful";
                }
                else
                {    echo "Insertion successful";
                }
            }
        }
?>    
    
<body id="page6">
    <form name="form7" method="post">
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
                <h3><span>ADD </span>A MOVIE</h3>
                <p>
    <b><h2><marquee behavior="scroll" direction="left">NEW  MOVIE <span> A D D I T I O N </p></marquee></b><br>
        <marquee behavior="scroll" direction="right">NEW MOVIES <span>ARE COMING </p></marquee></td>
<table>
<TR align="top"><td>
<tr><td>    
    MOVIE ID :</td><td> <input type="text" name="movieid" /></td></tr>
    <p>
<tr><td> MOVIE NAME :</td><td> <input type="text" name="moviename"/></td></tr>
    <p>
<tr><td> CAST    :</td><td> <input type="text" name="cast"/> </td></tr>
    <p>
<tr><td> POSTER  :</td><td> <input type="file" name="fileToUpload" id="fileToUpload"><input type="submit" value="Upload Image" name="submit"> </td></tr>
    <p>
<tr><td> TRAILER :</td><td> <input type="text" name="trailer"/> </td></tr>   
    <p>
<tr><td><center> <input type="submit" name="add" value="ADD" /> </center> </td><td>
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