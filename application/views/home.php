<!DOCTYPE html>
<html>
<title>Credit Transfer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">The Sparks Foundation</a>
    <div class="w3-right w3-hide-small">
      <a href="https://www.thesparksfoundationsingapore.org/" class="w3-bar-item w3-button">ABOUT US</a>
    </div>
    </a>
  </div>
</div>

<div class="w3-container w3-center " style="padding:128px 16px" id="about">
    <p class="success"><h2>
        <?php
        if($this->session->flashdata('success')):
            echo $this->session->flashdata('success');
            $this->session->sess_destroy();
            
        endif;
        ?>
    </h2></p>
  <p><h2>View your Credits, Transfer Credits and Much more..</h2></p>
  <a href="<?php echo base_url();?>Users/view_users" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Go to Users List</a>
</div>

</body>
</html>

