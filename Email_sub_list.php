<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="a School of Industry Oriented Engineering and Solutions, Academics, Education">
	<meta name="author" content="Sudheendra">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/business-casual.css" rel="stylesheet">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Download Email Subscriber List</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
<body>

<?php
if (!empty($_POST)) {
	include('settings.php');
	$google_resp = array_pop($_POST);


	if (!empty($google_resp) && $_POST[pass_wd]=='asioe') {
		//$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		//echo $_GET[paymentid];
		$query = "SELECT * FROM email_subscribe";

		//echo $query;
		$sqlsearch = mysqli_query($conn, $query);
		if ($sqlsearch->num_rows == 0) {
			echo "No Data Found.";
		} else {
			$headers = $sqlsearch->fetch_fields();
			foreach($headers as $header) {
			    $head[] = $header->name;
			}
			?>
			<a id="save" href="">
				<button class="btn btn-success btn-send">Download List</button>
			</a>
			<div class="table-responsive" id="email_table">  
                     <table class="table table-bordered">  
                          <tr>  
				<?php foreach($headers as $header) {
			    echo "<th>".$header->name."</th>";
				$count = 0;
			}		 ?>
                          </tr>  
			<?php
			while($row = mysqli_fetch_array($sqlsearch))  
                     { 
						 $count+=1; 
                     ?>  
                          <tr>  
                               <td><?php echo $count; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["reg_date"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
		<?php
		} 
		$conn->close();
	}
	else {
		echo "Something Went wrong!";
	}
}
else {
?>
<section id="section-registration" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center wow fadeInUp">
					<div class="section-heading">
						<h2 class="heading-title">Get Data</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="registration-form">
						<form class="registration-box" method="post" action="Email_sub_list.php">
							<div class="col-md-6 col-sm-6 ">
							
							<div class="form-group">
							<label>Padword*</label>
								<input id="form_password" type="password" name="pass_wd"  class="form-control" >
							</div>
								<div class="g-recaptcha" data-sitekey="6LdWrBgUAAAAADSarYajOQsMjXeNT0EsQBSGW56c"></div>
							<div class="form-group">
							<input type="submit" class="btn btn-success btn-send" value="Get Data">
						</div></div>
						</form>
				</div>
			</div>
</section>
<?php
}
?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script>
userDetails='id\t\email\treg_date\r\n';

$('table tbody tr').each(function(){
	var detail = '';
  $(this).find('td').each(function(){
  	detail+=$(this).html()+'\t';
  });
  //detail=detail.substring(0,detail.length-1);
  //detail+='\r\n';
 userDetails+=detail+"\r\n";
});
var a=document.getElementById('save');
a.onclick=function(){
    var a = document.getElementById("save");
    var file = new Blob([userDetails], {type: 'text/plain'});
    a.href = URL.createObjectURL(file);
    a.download = "Email_list.csv";
}
</script>

</body>
</html>
