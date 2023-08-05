<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">

	<title>Download Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

	<?php
	if (!empty($_POST)) {
		include('settings.php');
		$google_resp = array_pop($_POST);


		if (!empty($google_resp) && $_POST[pass_wd] == 'asioe') {
			include('settings.php');
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			//echo $_GET[paymentid];
			$query = "SELECT * FROM reg_form";

			//echo $query;
			$sqlsearch = mysqli_query($conn, $query);
			if ($sqlsearch->num_rows == 0) {
				echo "No Data Found.";
			} else {
				$headers = $sqlsearch->fetch_fields();
				foreach ($headers as $header) {
					$head[] = $header->name;
				}
				$fp = fopen('php://output', 'w');
				/*foreach ($row as $val) {
			    fputcsv($fp, $val);
			}*/
				if ($fp && $sqlsearch) {
					header('Content-Type: text/csv');
					header('Content-Disposition: attachment; filename="export.csv"');
					header('Pragma: no-cache');
					header('Expires: 0');
					fputcsv($fp, array_values($head));
					while ($row = $sqlsearch->fetch_array(MYSQLI_NUM)) {
						fputcsv($fp, array_values($row));
					}
					die;
				}
				fclose($fp);
	?>
				<div class="table-responsive" id="employee_table">
					<table class="table table-bordered">
						<tr>
							<?php foreach ($headers as $header) {
								echo "<th>" . $header->name . "</th>";
							}		 ?>
						</tr>
						<?php
						while ($row = mysqli_fetch_array($sqlsearch)) {
						?>
							<tr>
								<td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["firstname"]; ?></td>
								<td><?php echo $row["lastname"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["phone"]; ?></td>
								<td><?php echo $row["address"]; ?></td>
								<td><?php echo $row["college"]; ?></td>
								<td><?php echo $row["branch"]; ?></td>
								<td><?php echo $row["city"]; ?></td>
								<td><?php echo $row["year"]; ?></td>
								<td><?php echo $row["aadhar"]; ?></td>
								<td><?php echo $row["paymentid"]; ?></td>
								<td><?php echo $row["source"]; ?></td>
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
		} else {
			echo "Something Went wrong!";
		}
	} else {
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
						<form class="registration-box" method="post" action="admin.php">
							<div class="col-md-6 col-sm-6 ">

								<div class="form-group">
									<label>Padword*</label>
									<input id="form_password" type="password" name="pass_wd" class="form-control">
								</div>
								<div class="g-recaptcha" data-sitekey="6LdWrBgUAAAAADSarYajOQsMjXeNT0EsQBSGW56c"></div>
								<div class="form-group">
									<input type="submit" class="btn btn-success btn-send" value="Get Data">
								</div>
							</div>
						</form>
					</div>
				</div>
		</section>
	<?php
	}
	?>
</body>

</html>