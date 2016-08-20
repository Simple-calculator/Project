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
						    <li class="list-group-item"><a href="maintainance.php">Maintainance</a></li>
						  
						  </ul>
						
						
						</li>
					    <li class="list-group-item">
						   <a href="javascript:;" data-toggle="collapse" data-target="#report">Report</a>
						 <ul id="report" class="collapse">
						 <li class="list-group-item"><a href="report.php">Drivers</a></li>
						 <li class="list-group-item"><a href="report_maintainance.php">Maintainance</a></li>
						 <li class="list-group-item"><a href="schedule.php">Schedule</a></li>
						 
						 </ul>
						</li>
					   
					 </ul>				 
				</div>
			</div>
			<div class="col-md-7 col-lg-7">
			  <div class="panel panel-primary">
			    <div class="panel-heading">
				  <h2 CLASS="TEXT-CENTER">INSERT MAINTAINANCE COST INTO THE DATABASE<h2>
				</div>
				  <div class="panel-body">
				   <?php
					   require("connection.php");
					   if (isset($_POST["submit"]) && isset($_POST["truckno"]))
					   {
					   echo"kihiko";
					     $truckno=$_POST['truckno'];
					     $mcode=$_POST['mcode'];
					     $service=$_POST['service'];
					     $misc=$_POST['misc'];
						 $date2=$_POST['date2'];
						
						 $fuelcost=$_POST['fuelcost'];
						  $total=$service + $misc + $fuelcost;
						 echo "kihiko";
					    $sql="SELECT * FROM maitainance WHERE truckno='$truckno'";
						$sql2=mysql_query($sql);
						if($sql2){
						
						$row=mysql_num_rows($sql2);
						if ($row !==0)
						{echo "<div id=\"myalert\"class=\"alert alert-danger\">
								  <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times</a>
								    <strong>Sorry!</strong> &nbsp;that truck already exist.
								  </div>";} 
						
						else {
						
						$result="INSERT INTO   maitainance SET truckno='$truckno',mcode='$mcode',serving='$service',fuelcost='$fuelcost',date='$date2',total='$total'";
						       if(mysql_query($result))
							   {
							      echo"<div id=\"myalert\"class=\"alert alert-success\">
								  <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times</a>
								    <strong>Success!</strong> &nbsp;inserted successfuly.
								  </div>";
							   
							   } else{echo "not entered";}
							   
							   
						
					     }
						
						
						
						
						
						}else {echo "not yet";}
						}
					 
					 ?>
					 
				  
				     <form class="form-horizontal" role="form" action="maintainance.php" method="POST"> 
					   <div class="form-group">
					     <label class="label-control col-md-2" for="truck no">Truck No:</label>
						 
						 <div class="col-md-5"> 
						  <input class="form-control" required type="text" name="truckno"/>
						 </div> 
					   </div>
					   <div class="form-group">
					     <label class="label-control col-md-2" for="mcode">Mcode:</label>
						 
						 <div class="col-md-5"> 
						  <input class="form-control"  required type="text" name="mcode"/>
						 </div> 
					   </div>
					   <div class="form-group">
					     <label class="label-control col-md-2" for="fuelcost">Fuel Cost:</label>
						 
						 <div class="input-group col-md-5"> 
						 <span class="input-group-addon">Ksh</span>
						  <input class="form-control" required type="text" name="fuelcost"/>
						   <span class="input-group-addon">.00</span>
						 </div> 
					   </div>
					   <div class="form-group">
					     <label class="label-control col-md-2" for="date">Servicing:</label>
						 
						 <div class="input-group col-md-5"> 
						  <span class="input-group-addon">Ksh</span>
						  <input class="form-control"  required type="text" name="service"/>
						   <span class="input-group-addon">.00</span>
						 </div> 
					   </div>
					   <div class="form-group">
					     <label class="label-control col-md-2" for="color">Misc:</label>
						 
						 <div class="input-group col-md-5"> 
						   <span class="input-group-addon">Ksh</span>
						  <input class="form-control" required type="currency" name="misc"/>
						   <span class="input-group-addon">.00</span>
						 </div> 
					   </div>
					   <div class="form-group">
					     <label class="label-control col-md-2" for="color">Date:</label>
						 
						 <div class="col-md-5"> 
						  <input class="form-control" required type="date" name="date2"/>
						 </div> 
					   </div>  
					   <div class="form-group">
					     <label class="label-control col-md-2" for="total">Total:</label>
						 
						 <div class="input-group col-md-5">
                              <span class="input-group-addon">Ksh</span>
							
							  
						  <input class="form-control " required type="text" name="total"
						  value="  <?php
						  if(isset($_POST['service']) && isset($_POST['misc']) && isset($_POST['fuelcost'])){
                          
					     $service=$_POST['service'];
					     $misc=$_POST['misc'];						 
						 $fuelcost=$_POST['fuelcost'];
						  $total=$service;
						  $total2=$total + $misc + $fuelcost  ;
						  
						  echo $total2;

}

						  ?>" disabled />
						   <span class="input-group-addon">.00</span>
						 </div> 
					   </div>
					    
				 <div class="form-group">
				 <div class="col-sm-3 col-sm-offset-1 ">
				 <input type="submit" name="submit" value="Add" class="form-control btn-primary"/>
				 </div>
				 <div class="col-md-3 col-md-offset-4 ">
				 <input type="Reset" name="submit" value="Reset" class="form-control btn-danger"/>
				 </div>
				 
				 </div>

					  
					 
					 </form>
					
				  
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
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php ;}?>