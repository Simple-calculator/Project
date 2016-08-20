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
					    <li class="list-group-item"><a href="#">Home</a></li>
					    <li class="list-group-item">
						<a href="#" data-toggle="collapse" data-target="#driver" ><i class="fa fa-sitemap fa"></i>Driver<i class="fa fa-fw fa-caret-down"></i></a>
						    <ul  id="driver" class="collapse">
							   <li><a  href="#"class="glyphicon glyphicon-plus">new driver</a></li>
							   <li><a href="#" class="glyphicon glyphicon-eye-open">view driver</a></li>
							   
							</ul>
						</li>
					    <li class="list-group-item">
						<a href="javascript:;" data-toggle="collapse" data-target="#truck">Truck</a>
						  <ul  id="truck"class="collapse" >
						    <li class="list-group-item"><a href="#">Add truck</a></li>
						    <li class="list-group-item"><a href="#">Service</a></li>
						    <li class="list-group-item"><a href="#">Schedule</a></li>
						  
						  </ul>
						
						
						</li>
					    <li class="list-group-item">Report</li>
					   
					 </ul>				 
				</div>
			</div>
			<div class="col-md-7 col-lg-7">
			  <div class="panel panel-primary">
			    <div class="panel-heading">
				  <h2 CLASS="TEXT-CENTER">INSERT NEW SCHEDULE INTO THE DATABASE<h2>
				</div>
				  <div class="panel-body">
				   <?php
				    require ("connection.php");
					$sql="SELECT truckno,color ,model ,manufacture , date2 FROM truck";
					if($result=mysql_query($sql)) 
					{ 
					while($row=mysql_fetch_assoc($result)) 
					{
					echo 
					$truckno=$row['truckno'];
					$color=$row['color'];
					$model=$row['model'];
					$manuf=$row['manufacture'];
					 $date=$row['date2'];
					 
					  }
					} else { echo "not";}
				
					 
				   ?>
				   <div class="table-responsive">
				   <table class="table"  >
				      <thead>
					   <tr>
						<th>Truck no</th>
					    <th>Model</th>
					    <th>Manufacture</th>
					    <th>color</th>
					    <th>Date assigned</th>
					  </tr>
					  
					  </thead>
					  <tbody>
					    <tr>
						  <td><?php echo $truckno;?></td>
						  <td>$model</td>
						  <td>$manuf</td>
						  <td>$color</td>
						  <td>$date</td>
						</tr>
					  </tbody>
				   
				   </table>
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/tab.js"></script>
<script src="js/collapse.js"></script>
<script src="js/alert.js"></script>
<script src="js/affix.js"></script>
 <script src="../../assets/js/docs.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files 
as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>