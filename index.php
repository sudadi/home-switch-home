<?php
include('config.php');
include('session.php');

$i = 1;
	$query = "select * from switch";
	if ($result = $db->query($query)) {
	while ($row=mysqli_fetch_row($result)) {
		$switch[$i] = $row[1];
		$start[$i] = $row[2];
		$stop[$i] = $row[3];
		if ($row[4] == 1) {
			$timer[$i] = "checked";
		} else {
			$timer[$i] = "";
		}
		$i++;
		}
	$result->close();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME Switch !Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-timepicker.min.css" />

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
.panel-body {
  
}
</style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HOME Switch !Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div >
            <div class="col-lg-12">
                <h1 Style="text-align:center">Home
                    <small>Light Switch</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<!-- Projects Row -->
        <div class="row">
			<div class="col-md-4">
			<div class="panel panel-default">
			<div class="panel-heading" style="text-align:center"><strong>SWITCH</strong></div>
			<div class="panel-body">
				<table>
				<tr >
					<td><h4>1) Front Page <h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch" >
							<input type="checkbox" name="switch1" class="onoffswitch-checkbox" id="myswitch1"
							<?php
							if($switch[1]==1)
							{
							echo "checked";
							}
							?> >
							<label class="onoffswitch-label" for="myswitch1">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>2) Guest Rom </h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch2" class="onoffswitch-checkbox" id="myswitch2"
							<?php
							if($switch[2]==1)
							{
							echo "checked";
							}
							?> >
							<label class="onoffswitch-label" for="myswitch2">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>3) Family Rom 1</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch3" class="onoffswitch-checkbox" id="myswitch3"
							<?php
							if($switch[3]==1)
							{
							echo "checked";
							}
							?> >
							<label class="onoffswitch-label" for="myswitch3">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>4) Family Rom 2</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch4" class="onoffswitch-checkbox" id="myswitch4"
							<?php
							if($switch[4]==1)
							{
							echo "checked";
							}
							?> >
							<label class="onoffswitch-label" for="myswitch4">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>5) Bed Rom 1</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch5" class="onoffswitch-checkbox" id="myswitch5"
							<?php
							if($switch[5]==1)
							{
							echo "checked";
							}
							?> >
							<label class="onoffswitch-label" for="myswitch5">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>6) Bed Rom 2</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch6" class="onoffswitch-checkbox" id="myswitch6"
							<?php
							if($switch[6]==1)
							{
							echo "checked";
							}							
							?> >
							<label class="onoffswitch-label" for="myswitch6">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>7) Bed Rom 3</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch7" class="onoffswitch-checkbox" id="myswitch7"
							<?php
							if($switch[7]==1)
							{
							echo "checked";
							}							
							?> >
							<label class="onoffswitch-label" for="myswitch7">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h4>8) Backyard</h4></td>
					<td><h4>:</h4></td>
					<td>
						<div class="onoffswitch">
							<input type="checkbox" name="switch8" class="onoffswitch-checkbox" id="myswitch8"
							<?php
							if($switch[8]==1)
							{
							echo "checked";
							}							
							?> >							
							<label class="onoffswitch-label" for="myswitch8">
							<div class="onoffswitch-inner"></div>
							<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</td>
				</tr>
			</table>
						
			</div>
			</div>
				<div id="display" class="alert alert-info" style="text-align:center">Switch State Info</div>
			</div>
            <div class="col-md-4 portfolio-item">
				<div class="panel panel-default">
				<div class="panel-heading" style="text-align:center"><strong>TIMER</strong></div>
				<div class="panel-body">
					<form action="updtimer.php" method="post">
					<table>
					<tr >
						<td><h4>1)<h4></td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="start1" name="start1" class="form-control input-sm" type="text" value=
							<?php echo $start[1]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop1" name="stop1" class="form-control input-sm " type="text" value=
							<?php echo $stop[1]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td><input type="checkbox" name="timercheck1" value="1" <?php echo $timer[1]?>></td>
                       </tr>
                       <tr >
                         <td><h4>2)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start2" name="start2" class="form-control input-sm" type="text" value=
							<?php echo $start[2]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop2" name="stop2" class="form-control input-sm " type="text" value=
							<?php echo $stop[2]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck2" value="1" <?php echo $timer[2]?>></td>
                       </tr>
                       <tr >
                         <td><h4>3)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start3" name="start3" class="form-control input-sm" type="text" value=
							<?php echo $start[3]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop3" name="stop3" class="form-control input-sm " type="text" value=
							<?php echo $stop[3]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck3" value="1" <?php echo $timer[3]?>></td>
                       </tr>
                       <tr >
                         <td><h4>4)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start4" name="start4" class="form-control input-sm" type="text" value=
							<?php echo $start[4]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop4" name="stop4" class="form-control input-sm " type="text" value=
							<?php echo $stop[4]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck4" value="1" <?php echo $timer[4]?>></td>
                       </tr>
                       <tr >
                         <td><h4>5)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start5" name="start5" class="form-control input-sm" type="text" value=
							<?php echo $start[5]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop5" name="stop5" class="form-control input-sm " type="text" value=
							<?php echo $stop[5]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck5" value="1" <?php echo $timer[5]?>></td>
                       </tr>
                       <tr >
                         <td><h4>6)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start6" name="start6" class="form-control input-sm" type="text" value=
							<?php echo $start[6]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop6" name="stop6" class="form-control input-sm " type="text" value=
							<?php echo $stop[6]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck6" value="1" <?php echo $timer[6]?>></td>
                       </tr>
                       <tr >
                         <td><h4>7)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start7" name="start7" class="form-control input-sm" type="text" value=
							<?php echo $start[7]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop7" name="stop7" class="form-control input-sm " type="text" value=
							<?php echo $stop[7]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td><input type="checkbox" name="timercheck7" value="1" <?php echo $timer[7]?>></td>
                       </tr>
                       <tr >
                         <td><h4>8)</h4></td>
                         <td>
						 <div class="input-group bootstrap-timepicker timepicker">
							<input id="start8" name="start8" class="form-control input-sm " type="text" value=
							<?php echo $start[8]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						</td>
						<td>
						<div class="input-group bootstrap-timepicker timepicker">
							<input id="stop8" name="stop8" class="form-control input-sm " type="text" value=
							<?php echo $stop[8]; ?> /><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
						 </td>
						 <td>
						 <input type="checkbox" name="timercheck8" value="1" <?php echo $timer[8]?>></td>
                       </tr>
                     </table>
                     
                   </div>
				</div>
				<div class="panel panel-info" style="padding:8px; text-align:center">
                    <input type="submit" class="btn btn-primary" value="Update Timer">
				</div>
				</form>
            </div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align:center"><strong>Help/Info</strong></div>
					<div class="panel-body">
	
					</div>
					<div class="panel-footer">---</div>
				</div>			
			</div>
			

        </div>
        <!-- /.row -->
        <hr>
       <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; doTKom 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
	
	<!-- jQuery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    <script src="js/switch.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#start1').timepicker({
			showMeridian: false,
			disableFocus: true
			});
			$('#stop1').timepicker({
			showMeridian: false,
			disableFocus: true
			});
			$('#start2').timepicker({
			showMeridian: false
			});
			$('#stop2').timepicker({
			showMeridian: false
			});
			$('#start3').timepicker({
			showMeridian: false
			});
			$('#stop3').timepicker({
			showMeridian: false
			});
			$('#start4').timepicker({
			showMeridian: false
			});
			$('#stop4').timepicker({
			showMeridian: false
			});
			$('#start5').timepicker({
			showMeridian: false
			});
			$('#stop5').timepicker({
			showMeridian: false
			});
			$('#start6').timepicker({
			showMeridian: false
			});
			$('#stop6').timepicker({
			showMeridian: false
			});
			$('#start7').timepicker({
			showMeridian: false
			});
			$('#stop7').timepicker({
			showMeridian: false
			});
			$('#start8').timepicker({
			showMeridian: false
			});
			$('#stop8').timepicker({
			showMeridian: false
			});
        });
    </script>

</body>
</html>	