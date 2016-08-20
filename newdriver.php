<?php
     ob_start();

     SESSION_START();
		if(!isset($_SESSION['SESS_USER'])){
		 header("location:index.php");
		 
		}
		else{
 
?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<script type="text/javascript">
$(function(){
$(".close").click(function(){
$("#myAlert").alert();
});
}); 
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
		    <div class="col-md-3  col-lg-3  sidebar">
			    <div class="panel panel-primary">
                     <div class="panel-heading">
					   <span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard  
					 </div>	
                     <ul class="list-group">
					    <li class="list-group-item"><a href="home.php">Home</a></li>
					    <li class="list-group-item">
						<a href="#" data-toggle="collapse" data-target="#driver" ><i class="fa fa-sitemap fa"></i>Driver<i class="fa fa-fw fa-caret-down"></i></a>
						    <ul  id="driver" class="collapse">
							   <li><a  href="newdriver.php"class="glyphicon glyphicon-plus">new driver</a></li>
							   <li><a href="viewdriver.php" class="glyphicon glyphicon-eye-open">view driver</a></li>
							   
							</ul>
						</li>
					    <li class="list-group-item">
						<a href="javascript:;" data-toggle="collapse" data-target="#truck">Truck</a>
						  <ul  id="truck"class="collapse" >
						    <li class="list-group-item"><a href="newtruck.php">Add truck</a></li>
						    <li class="list-group-item"><a href="viewtruck2.php">view truck</a></li>
						    <li class="list-group-item"><a href="truckservice.php">Service</a></li>
						    <li class="list-group-item"><a href="schedule.php">Schedule</a></li>
						    <li class="list-group-item"><a href="Maintainance.php">Maintainance</a></li>
						  
						  </ul>
						
						
						</li>
					    <li class="list-group-item">
						 <a href="javascript:;" data-toggle="collapse" data-target="#report">Report</a>
						 <ul id="report" class="collapse">
						 <li class="list-group-item"><a href="report.php">Drivers</a></li>
						 <li class="list-group-item"><a href="report_maintainance.php">Maintainance</a></li>
						 <li class="list-group-item"><a href="schedule-report.php">Schedule</a></li>
						 
						 </ul>
						</li>
					   
					 </ul>				 
				</div>
			</div>
			<div class="col-md-7 col-lg-7">
			  
			   <div class="jumbotron">
			    <?php
			    require("connection.php");
				if (isset($_POST["submit"]) && isset($_POST["sname"]) && isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["residence"]) && isset($_POST["driverid"])&& isset($_POST["sex"]))
				{
				   $sname=$_POST["sname"];
				   $fname=$_POST["fname"];
				   $email=$_POST["email"];
				   $contact=$_POST["contact"];
				   $residence=$_POST["residence"];
				   $driverid=$_POST["driverid"];
				   $sex=$_POST["sex"];
				   
				   $sel="SELECT * FROM driver WHERE driverid='$driverid' && email='$email'";
				      $row=mysql_query($sel);
					  if($row){
					  $count=mysql_num_rows($row);
					  if($count!==0)
					  {echo "<div id=\"myalert\"class=\"alert alert-danger\">
					  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</a>
					  <strong>that driver id or email  already exist.</strong>
					  
					  </div>";} else
					  {
					  
					  
					  
				   
				 $sql="INSERT INTO driver  SET fname='$fname',lname='$sname',email='$email',contact='$contact',residence='$residence',driverid='$driverid',gender='$sex'";
				 
				if(mysql_query($sql)){
				echo "<div id=\"myalert\"class=\"alert alert-success\">
					  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</a>
					  <strong>Success</strong>inserted successfuly.
					  
					  </div>";
				} else {echo "not yet";}
				}
				  }else {echo "not selected";}
				
			    }
				 
				
				
			   
			   ?>
			  <div class="panel panel-primary">
			   <div class="panel-heading">
			    <h2 class=="text-center">Insert new driver's details</h2>
				
			   </div>
			   <div class="panel-body">
			    
               <form  action="newdriver.php" class="form-horizontal"role="form" method="POST" >
			     <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>FName:</strong></label>
				 <div class="col-sm-6">
				 <input type="text" class="form-control" required  placeholder="Enter First Name" name="fname"/>
				  </div>
				 </div> 
				 <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>SName:</strong></label>
				 <div class="col-sm-6">
				 <input type="text" class="form-control" required  placeholder="Enter Second Name" name="sname"/>
				  </div>
				 </div> 
				 <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>Email Address:</strong></label>
				 <div class="col-sm-6">
				 <input type="email" required class="form-control"  placeholder="Enter email" name="email"/>
				  </div>
				 </div> 
				 <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>Contact:</strong></label>
				 <div class="col-sm-6">
				 <input type="tel" class="form-control" required placeholder="Enter contacts" name="contact"/>
				  </div>
				 </div> <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>Driver no:</strong></label>
				 <div class="col-sm-6">
				 <input type="text" class="form-control"  required placeholder="Enter driverid" name="driverid"/>
				  </div>
				 </div>
				 <div class="form-group col-md-offset-3">
				 <label for="fname" class="col-md-2"><strong>Residence:</strong></label>
				 <div class="col-sm-6">
				 <input type="text" class="form-control" required placeholder="Enter location" name="residence"/>
				  </div>
				 </div>
				
				  <div class=" form-group">
							<label for="sex" class="col-md-2 ">Gender </label>
							<div class="col-sm-offset-2 col-md-10">
								<input type="radio" name="sex" value="Female" id="sex_f" class="formstyl-switch-input" >
								<label for="sex_f" class="formstyl-switch-label">Female</label>
								<input type="radio" name="sex" value="Male" id="sex_m" class="formstyl-switch-input" checked>
								<label for="sex_m" class="formstyl-switch-label">Male</label>
							</div>
						</div>
				  
				 <div class="form-group">
				 <div class="col-sm-3 col-sm-offset-1 ">
				 <input type="submit" name="submit" value="Insert" class="form-control btn-primary"/>
				 </div>
				 <div class="col-md-3 col-md-offset-4 ">
				 <input type="Reset" name="submit" value="Delete" class="form-control btn-danger"/>
				 </div>
				 
				 </div>
				
			   </form>
			  
			   
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
<?php ;}?>