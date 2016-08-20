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
<div class="jumbotron">
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
						    <li class="list-group-item"><a href="viewtruck2.php">View truck</a>
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
						 <li class="list-group-item"><a href="schedule-report.php">Schedule</a></li>
						 
						 </ul>
						</li>
					   
					 </ul>				 
				</div>
			</div>
			<div class="col-md-7 col-lg-7">
			<div class="well">
			  <div class="panel panel-success">
			    <div class="panel-heading">
				  <h2 CLASS="TEXT-CENTER">Schedule<h2>
				</div
				  <div class="panel-body">
				  <form method="POST">
				   <div>
				  <a  data-target="#myModal" data-toggle="modal" data-target="#myModal"  class="list-group btn btn-danger divider " >&nbsp;<span class="glyphicon glyphicon-remove"></span>Delete &nbsp;&nbsp;</a>
				   <hr/>
				  </div>
				   <?php
				      require ("connection.php");
					 $sql="SELECT truckno, driverid ,location,dateassigned,status,comment FROM servicetruck ORDER BY dateassigned";
					if($result=mysql_query($sql)) 
					{ 
					$row=mysql_num_rows($result);
					if($row ==0)
					{echo "no data";} else{
					
					echo "<div class=\"table-responsive\">
					<table class=\"table table-hover table-bordered table-success\">
					     <thead>
						 <tr>

						   <th>Del opt</th>
						   <th>Truckno</th>
						   <th>Driver Id</th>
						    <th>location</th>
						   <th>Date assigned</th>						   
						   <th>Status</th>
						   <th>Comment</th>
						   <th>Edit opt</th>
						  
						  
						  
						 </tr>
						 </thead>
						 <tbody>
					
					";
					
					
					while($row=mysql_fetch_assoc($result)) 
					{
					echo"<tr>";
					$truckno=$row['truckno'];
					
					$driverid=$row['driverid'];
					$location=$row['location'];
					 $dateassigned=$row['dateassigned'];
					 $status=$row['status'];
					 $comment=$row['comment'];
					 
					 echo "<tr>
					        
					        <td><input type=\"checkbox\" value=\"$truckno\" name=\"selector\"/></td>
					        <td>$truckno</td>
					        <td>$driverid</td>
							 <td>$location</td>
					        <td>$dateassigned</td>
					        <td>$status</td>
					        <td>$comment</td>
					        <td><a type=\"button\" href=\"edit-schedule.php   ?id=$truckno\" class=\"btn btn-danger\" ><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
							
					       
					       
					       
					 
					     </tr>
					 
					 ";
					 
					 
					 
					  }
					  
					   echo "</tbody></table></div>"; 
					  }
					  
					} else { echo "not";}
				
				   
				   
				   ?>
				   
				<!--modal-->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelLedby="myModalLabel" aria-hidden="">
				     <div class="modal-dialog">
					     <div class="modal-content">
						    <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-hidden="">&times </button>
								<h2 class="modal-title" id="myModalLabel">Confirm Delete</h2>
								
							</div>
							<div class="modal-body">
							  <b>Are you sure you want to delete the selected item(s)?</b>
							   
							</div>
							<div class="modal-footer">
							   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							   <button type="submit" class="btn btn-danger" name="delete" >Delete</button>
							</div>
						 </div>
					 </div>
				  </div> 
                <script> $(function () { $('#myModal').modal(
				{ keyboard: true })});
			</script>		
          <?php  
		  if(isset($_POST['delete'])){
						if(isset($_POST['selector'])){
						$id =$_POST['selector'];
						
							$stmt="DELETE FROM servicetruck WHERE truckno='$id'";
							
							
							//if($rslt){echo 'done';}else{echo'fail';}
							if(mysql_query($stmt))
							{ 
			          echo "<div class=\"col-md-6 col-md-offset-3 \" >

				<div id=\"err-alert\" class=\"alert alert-warning fade in \">
					<a  class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" > &times;
					</a> deleted successfuly!.
				</div>
			</div>";
							 }
							else{echo "not deleted";}
							
						
						
						}else{
							 echo "<div class=\"col-md-6 col-md-offset-3 \" >

				<div id=\"err-alert\" class=\"alert alert-warning fade in \">
					<a  class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" > &times;
					</a> You have not selected a record!.
				</div>
			</div>";
						
						}
						
				}
		  
		  ?>			
				   
				   </form>
	
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