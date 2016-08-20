<?php

     ob_start();

     SESSION_START();
	 require('connection.php');
	  $user=$_SESSION['SESS_USER'];
		
		
	 
		if(!isset($_SESSION['SESS_USER']) &&!isset($_SESSION['password']) ){
		
		
		
		 header("location:index.php");
		 
		}
		else{

		$sel="SELECT * FROM user WHERE password='$user'";
		if($query=mysql_query($sel))
		{
		
		 $numrow=mysql_num_rows($query);
        if($numrow !==0)
	     {
		  WHILE ($row=mysql_fetch_assoc($query))
		  {
		   $user=$row['username'];
		   $pass=$row['password'];
		  }
		 } else {echo "no serch a person";}
		
		}else {echo "no";}
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
<div class="container-fluid">
        <div class="row">
		
		    <div class="col-md-4  col-lg-4  sidebaruser">
			<div class="well">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  					   <span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard  
			  </div>
			  <div class="panel-body">
			     <form class="" role="form" method="POST">
					    <div class="form-group">
						  <label for="comment">Comment</label>
						  <textarea type="textarea" name="comment" class="form-control" placeholder="write a comment" rows="2"></textarea>
						 						
						</div>
               <div class="form-group">
				 <div class="col-xs-2 col-sm-offset-1 ">
				 <input type="submit" name="submit" value="add" class="form-control btn-primary"/>
				 </div>
				 <div class="col-xs-3 col-md-offset-1 ">
				 <input type="Reset" name="submit" value="clear" class="form-control btn-danger"/>
				 </div>
				 
				 </div>
					 </form>
			  </div>
			
			</div>
			<div data-spy="scroll" data-target="#navbar-example" data-offset="0"
           style="height:1000px;overflow:auto; position: relative;">
			    <div class="panel panel-warning">
                     <div class="panel-heading">
					   <span class="glyphicon glyphicon-dashboard"></span>&nbsp;Comment 
					 </div>	
					 <div>
					 
					  <?php
					 
					  if(isset($_POST['submit']) && isset($_POST['comment']))
					  {
					   $comment=$_POST['comment'];
					   
					 
					   
					   $time=time();
					   $date=date('H:i:s',$time);
					   echo $date;
					   
					 $mysql="INSERT INTO comment SET comment='$comment',password='$pass', username='$user',date='$date',date_time=$time";
					
					
					  if(mysql_query($mysql))
					   { 
					   echo "";
					    echo "inserted";
					   } else {echo "not entered";}
					  }
					 
					 ?>
					
					 <?php
					  
					   $display="SELECT * FROM comment,pictures  WHERE password=driverid  && password=password ORDER BY date DESC ";					  
					   if ($result=mysql_query($display))
					   {
					    
					   
					   
					     $num=mysql_num_rows($result);
						 if($num !==0)
						 {
						    WHILE($row2=mysql_fetch_assoc($result))
							{
							  $comment2=$row2['comment'];
							  $user2=$row2['username'];
							  $date2=$row2['date'];
							  $file=$row2['file'];
							  $date2=$row2['date'];
							 
							  $username=$row2['username'];
							  $subcomment2=$row2['sub_comment'];
							 
							 
							 
                                echo "<div class=\"media\">
								<a  class=\"pull-left\"href=\"#\">
								<img class=\"media-object\" src=\"img/$file\" width=\"50px\" height=\"50px\"
                                 alt=\"Media Object\">
								</a>
								   <div class=\"media-body\">
								   <h4 class=\"media-heading\">$username</h4>
								   $comment2 </br>
								   $date2 								   
								   </div>
								<hr/>
								</div>";
				echo "		karari";
								
							}
														
						 } else{ echo"no comment";}
						 
					   
					   } else {echo "selected not";}
					 
					 
					 ?>
					  
					
                     <form class="" role="form" method="POST">
					    <div class="form-group">
						  <label for="comment">Comment</label>
						  <textarea type="textarea" name="comment" class="form-control" placeholder="write a comment" rows="2"></textarea>
						 						
						</div>
               <div class="form-group">
				 <div class="col-xs-2 col-sm-offset-1 ">
				 <input type="submit" name="submit" value="add" class="form-control btn-primary"/>
				 </div>
				 <div class="col-xs-3 col-md-offset-1 ">
				 <input type="Reset" name="submit" value="clear" class="form-control btn-danger"/>
				 </div>
				 
				 </div>
					 </form>
					 </div>
				</div>
			</div>	
			
			</div>
		  </div>	
			<div class="col-md-8 col-lg-8">
			  <div class="panel panel-primary">
			    <div class="panel-heading">
				  <h2 CLASS="text-center">Drivers' Report<h2>
				</div
				  <div class="panel-body">
				  <?php
				      require ("connection.php");
					 $sql="SELECT * FROM driver ";
					if($result=mysql_query($sql)) 
					{ 
					$row=mysql_num_rows($result);
					if($row ==0)
					{echo "no data";} else{
					
					echo "<div class=\"table-responsive\">
					<table class=\"table table-hover table-bordered table-success\">
					     <thead>
						 <tr>

						   <th>Fname</th>
						   <th>Sname</th>
						   <th>Email Address</th>						   
						   <th>Contact</th>
						   <th>Driver id</th>
						   <th>Home</th>
						   <th>Gender</th>
						  
						  
						 </tr>
						 </thead>
						 <tbody>
					
					";
					
					
					while($row=mysql_fetch_assoc($result)) 
					{
					echo"<tr>";
					$fname=$row['fname'];
					$lname=$row['lname'];
					$email=$row['email'];
					$contact=$row['contact'];
					 $id=$row['driverid'];
					 $home=$row['residence'];
					 $gender=$row['gender'];
					
					 
					 echo "<tr>
					        
					        <td>$fname</td>
					        <td>$lname</td>
					        <td>$email</td>
					        <td>$contact</td>
					        <td>$id</td>
					        <td>$home</td>
					        <td>$gender</td>
					       
					       
					 
					     </tr>
					 
					 ";
					 
					 
					 
					  }
					  
					   echo "</tbody></table></div>"; 
					  }
					  
					} else { echo "not";}
				
				   
				   
				   ?>
				   <h2 class="text-center divider"> Your Schedule</h2>
				   <hr/>
				   <?php
				      require ("connection.php");
					 $sql="SELECT * FROM driver,servicetruck WHERE driverid=drivernoid ";
					if($result=mysql_query($sql)) 
					{ 
					$row=mysql_num_rows($result);
					if($row ==0)
					{echo "no data";} else{
					
					echo "<div class=\"table-responsive\">
					<table class=\"table table-hover table-bordered table-success\">
					     <thead>
						 <tr>

						   <th>Fname</th>
						   <th>Sname</th>
						   <th>Email Address</th>						   
						   <th>Contact</th>
						   <th>Driver id</th>
						   <th>Home</th>
						   <th>Gender</th>
						   <th>Truckno</th>
						   <th>Date Assigned</th>
						   <th>Location</th>
						   <th>Status</th>
						   <th>Comment</th>
						  
						 </tr>
						 </thead>
						 <tbody>
					
					";
					
					
					while($row=mysql_fetch_assoc($result)) 
					{
					echo"<tr>";
					$fname=$row['fname'];
					$lname=$row['lname'];
					$email=$row['email'];
					$contact=$row['contact'];
					 $id=$row['driverid'];
					 $home=$row['residence'];
					 $gender=$row['gender'];
					 $truckno=$row['trucknoid'];
					 $date=$row['dateassigned'];
					 $location=$row['location'];
					 $status=$row['status'];
					 $comment=$row['comment'];
					 
					 echo "<tr>
					        
					        <td>$fname</td>
					        <td>$lname</td>
					        <td>$email</td>
					        <td>$contact</td>
					        <td>$id</td>
					        <td>$home</td>
					        <td>$gender</td>
					        <td>$truckno</td>
					        <td>$date</td>
					        <td>$location</td>
					        <td>$status</td>
					        <td>$comment</td>
					       
					 
					     </tr>
					 
					 ";
					 
					 
					 
					  }
					  
					   echo "</tbody></table></div>"; 
					  }
					  
					} else { echo "not";}
				
				   
				   
				   ?>

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