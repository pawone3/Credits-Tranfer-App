<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/util.css">
    <style>
        .headd {
            text-align: center;
            color: black;
            font-size: 30px ;
            margin-bottom: 10px;
        }
    </style>
<!--    <link rel="stylesheet" href="--><?php //echo base_url()?><!--assets/css/style.css">-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                <div class="headd">
                    Selector Debtor
                </div>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Username</th>
								<th class="column3">Email</th>
                                <th class="column42">Current Credits</th>
								<th class="column41">Send Credits</th>
							</tr>
						</thead>
						<tbody>
						
						
						<?php foreach($data as $dataa):
                            if(($dataa->id)!=$creditor_id):
                            ?>
							<tr>
								<h2><td class="column1"><?php echo $dataa->name?></td></h2>
								<h4><td class="column2"><?php echo $dataa->username?></td></h4>
								<td class="column3"><?php echo $dataa->email?></td>
                                <td class="column42"><?php echo $dataa->current_credit?></td>
								<td class="column41"><button class="button" onclick="take_input(<?php echo $dataa->id; ?>);">Select </button></td>

							</tr>
                        <?php
                        endif;
						endforeach; ?>
							

						</tbody>
					</table>
				</div>
			</div>
            <div class="td5" id="td5"></div>
		</div>

	</div>
	<script type="text/javascript">
		
		function take_input(debtor_id){

			var td5=document.getElementById('td5');
			td5.innerHTML='<form method ="post" action="<?php echo base_url();?>index.php/Users/transfer">\n' +
                '      <label for="choose"><h2>Enter Credit Amount :</h2></label>\n' +
                '      <input class="amount" id="choose" size"20" name="amount" required>\n' +
                '      <input id="debt" name="debtor_id" type="hidden" value="" required>\n' +
                '      <button class="button1">Submit</button>\n' +
                '    </form>\n';
			var elm=document.getElementById("debt");
			debt.setAttribute("value",debtor_id);
		}

	</script>
</body>
</html>