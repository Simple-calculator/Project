<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
    <meta name="the scorpions" content="">
    <link rel="icon" href="../../favicon.ico">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="body.css"rel="stylesheet" type="">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page  

via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
respond.min.js"></script>
<![endif]-->
  <script type="text/>javascript">
      $('#collapseEdit #collapseView').collapse({
  toggle: true
})

    </script>
	<script> $(function () { $('#myModal').modal(
				{ keyboard: true })});
			</script>	
			
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
           <div class="container-fluid">
               <div class="navbar-header">
			     <button type="button" class="navbar-toggle collapse">
				     <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				 
				 </button>
				 <a class="nav-brand" href="#">Nakuru GTMSystem</a>
			   </div>
			<div id="navbar" class="navbar-collapse collapse">
			    <ul class="nav navbar-nav navbar-right">
				   <li class="dropdown">
				           <a href="#" class="dropdown-toggle " data-toggle="dropdown" > <i class="fa-fa-user"></i>&nbsp;Admin<b class="caret"></b>
				            </a>
				       <ul class="dropdown-menu">
					      <li>
						     <a href="#">&nbsp;Accounts</a>
						  </li>
						  <li class="divider"></li>
						  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Log out</span></a></li>
						  
					   
				       </ul>
				   
				   
				   </li>
				  
				
				</ul>
			
			</div>   
			   
    
          </div>

</nav>
<div class="container-fluid">
        <div class="row">
		    
			<div class="col-md-12 col-lg-12">
			 <div class="jumbotron col-md-12">
			 <?php
 /*database connection*/

if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
{
 $username=$_POST["username"];
 $password=$_POST["password"];
 require("connection.php");
 $select=mysql_query("SELECT * FROM user WHERE username='$username' && password='$password'");

 if(!$select){echo "failed";} else{
 $numrow=mysql_num_rows($select);
 if($numrow !==0)
 {
 while ($row=mysql_fetch_assoc($select))
 {$dbusername=$row["username"];
  $dbpassword=$row["password"];
  $level=$row["level"];
  $id=$row["driverid"];
 echo"hi mwana";
 }
 if($username==$dbusername && $password==$dbpassword)
 { echo" thhis ";
 session_start();
 echo "kihiko";
 $_SESSION['SESS_USER']=$password;
 $_SESSION['id']=$id;

 
 if($level==1){
 header("location:home.php");
 echo"hi mwash";
 } else
 {
 header("location:user.php");
 }
 }else {echo "kihiko";}
 
 
 } else {echo  "<div class=\"col-md-6 col-md-offset-3 \" >
			
				<div id=\"err-alert\" class=\"alert alert-danger fade in \">
					<a href=\"login.php\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" > &times;
					</a> Login failed! Check your username or password! Or contact your Administrator. 
				</div>
			</div>";}

 }
}





?>
			  <div class="panel panel-primary col-md-offset-3 well col-md-5">
			    <div class="panel-heading">
				  <h2 CLASS="TEXT-CENTER"><center>Log in</center><h2>
				</div>
				  <div class="panel-body">
				
				    <div class="col-md-10 col-lg-10 col-md-offset-1"style="background-color: #dedef8; 
box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
 
<form role="form" method="POST" action="INDEX.php" >
<div class="form-group">
      <label for="username" class="col-md-2 control-label">username</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="username" placeholder="username" />
     </div>
</div>
  <div class="form-group">
      <label for="password" class="col-md-2 control-label">password</label>
          <div class="col-md-10">
               <input type="password" class="form-control" name="password" placeholder="password"/>
          </div>

</div>
<div class="form-group">
<div class="col-md-offset-2 col-sm-10">
<button type="submit" name="submit" class="btn btn-success btn-sm ">login</button>
</div>
</div>
</form>

</div>
	</div>

				  </div>
				
			  </div>
			  
			</div>
	 
        </div>
  <div class="row">
   <div class="col-md-12">
   
     <div class="well col-offset-4 btn-primary">
	   <div class="affix-bottom btn-"><a href="#" class="col-md-offset-4">Designed by Smart Soft Experts</a></div>
	   
	   
	 </div>
   </div>
  
  </div>


</div>










  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popover.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>