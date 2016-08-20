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
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation"  >
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
						    <li class="list-group-item"><a href="maintainance.php">Maintenance</a></li>
						  
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
			    
			    <div class="row">
			      <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
					 <div class="panel-footer">Account</div>
				  </div> 
				 <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
			      <div class="panel-footer">Account</div>
				  </div> 
				 <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
					 <div class="panel-footer">Account</div>
				  </div>
				  
				  
				 </div>
				 <div class="row">
			     <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
					 <div class="panel-footer">Account</div>
				  </div> 
				 <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
			      <div class="panel-footer">Account</div>
				  </div> 
				 <div class="panel panel-primary col-md-4">
				    <a href="#" class="thumbnail"><image src="img/driver.png"/></a>
					 <div class="panel-footer">Account</div>
				  </div>
				 </div>
				  <div class="row">	
	    <div class="col-md-7">
		<div class="well col-md-offset-3">
		  <ul class="pager pager-primary">
		   <li><a href="#">Previous</a></li>
		   <li><a href="#">Next</a></li>
		  
		  </ul>
		  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
  <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a role="menuitem" href="#">HTML</a></li>
    <li role="presentation"><a role="menuitem" href="#">CSS</a></li>
    <li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" href="#">About Us</a></li>
  </ul>
</div>
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
<?php ;}?>