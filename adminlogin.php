<html>
<head>
<title>MULTIPLEX TICKET BOOKING SYSTEM </title>
    <script type="text/javascript">
        function goToNewPage()
        {
            var a=document.getElementById('username').value;
            var b=document.getElementById('password').value;
            if(a==b)
                {
                    window.location="admindash.php";
                }
            else
                alert("ENTER VALID USERNAME & PASSWORD");
        }
    </script>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="customerlogin.js"></script>
    
</head>
<body id="page6">
    <form name="form4" method="post">
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
            <li class="last"><a href="selection.html" class="active">SIGN IN</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>ADMIN  <span> LOGIN : </span></h3>
                <p>
            <table>
<tr><td bgcolor="aqua">
<b><h2><marquee behavior="scroll" direction="left"> ADMIN <span> LOGIN </marquee>
    <marquee behavior="scroll" direction="right">ADMIN <span>LOGIN </p></marquee>
</td>
<td>
USERNAME : <input type="text" name="username" id="username">
<p>
PASSWORD : <input type="text" name="password" id="password">
<p>
<input type="button" name="login" value="L O G I N" onclick="goToNewPage()" /><p>
  
</td></tr>
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