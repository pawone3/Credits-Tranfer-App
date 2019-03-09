<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/util.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Username</th>
								<th class="column3">Email</th>
                                <th class="column4">View Profile</th>
								<th class="column5">Available Credits</th>
                                <th class="column6">Transfer Credits</th>

							</tr>
						</thead>
						<tbody>
						
						
						<?php foreach($data as $dataa): ?>
							<tr>
								<h2><td class="column1"><?php echo $dataa->name?></td></h2>
								<h4><td class="column2"><?php echo $dataa->username?></td></h4>
								<td class="column3"><?php echo $dataa->current_credit?></td>
                                <td class="column4"><a href="<?php echo base_url();?>index.php/Users/select_user/<?php echo $dataa->id?>">View Profile</a></td>
								<td class="column5"><?php echo $dataa->email?></td>
                                <td class="column6"><a href="<?php echo base_url();?>index.php/Users/select_debtor/<?php echo $dataa->id?>">Transfer Credits</a></td>

							</tr>
						<?php endforeach; ?>
							

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>