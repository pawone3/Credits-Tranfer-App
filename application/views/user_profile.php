<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<style>
		.info-wrap {
			text-align: center;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="info-wrap">
			  <h1 class="user-name">Username : <?php echo $data->username?></h1>
			  <h1 class="user-name">Name : <?php echo $data->name?></h1>
			   <p>Email : <?php echo $data->email?></p>
			   <p>Current Credits : <?php echo $data->current_credit?></p>
			   <a href="<?php echo base_url();?>Users/select_debtor/<?php echo $data->id?>">Transfer Credits</a>
			</div>
		</div>
	</body>
</html>