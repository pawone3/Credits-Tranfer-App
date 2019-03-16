<!DOCTYPE html>
<html>
<head>
<title>Credit Transfer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

        body {
            background: #F1F3FA;
        }

        /* Profile container */
        .profile {
            margin: 20px 0;
        }

        /* Profile sidebar */
        .profile-sidebar {
            padding: 20px 0 10px 0;
            background: #fff;;

        }

        .profile-usertitle {
            text-align: center;
            margin-top: 20px;
        }

        .profile-usertitle-name {
            color: #5a7391;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .style1 {
            /*color: #5a7391;*/
            font-size: 16px;
            font-weight: 600;
            /*margin-bottom: 7px;*/
        }
        .style2 {
            /*color: #5a7391;*/
            font-size: 16px;
            font-weight: 600;
            /*margin-bottom: 7px;*/
        }

        .profile-usertitle-job {
            text-transform: uppercase;
            color: #5b9bd1;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .profile-userbuttons {
            text-align: center;
            margin-top: 10px;
        }

        .profile-userbuttons .btn {
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 600;
            padding: 6px 15px;
            margin-right: 5px;
            background-color: blue;
        }

        .profile-userbuttons .btn:last-child {
            margin-right: 0px;

        }

    </style>
</head>
<body>

<div class="container">
    <div class="row profile">
        <div class="">
            <div class="profile-sidebar">
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        USERNAME:&nbsp; <?php echo $data->username?>
                    </div>
                    <div class="style1">
                        NAME: &nbsp;<?php echo $data->name?>
                    </div>
                    <div class="style2">
                        EMAIL:&nbsp; <?php echo $data->email?>
                    </div>
                    <div class="style2">
                        CURRENT CREDITS:&nbsp; <?php echo $data->current_credit?>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="<?php echo base_url();?>Users/select_debtor/<?php echo $data->id?>">Transfer Credits From <?php echo $data->name?> </a>
<!--                    <button type="button" class="btn btn-danger btn-sm">Message</button>-->
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

</body>
</html>


