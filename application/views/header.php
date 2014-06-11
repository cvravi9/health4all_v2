<?php $thispage="h4a"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title><?php echo $title; ?> - Health4All</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media='screen,print'>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrap">
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
		<!-- Bootstrap toggle menu for mobile devices, only visible on small screens --> 
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">Health4All</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<?php if($this->session->userdata('logged_in')) {
				$userinfo=$this->session->userdata('logged_in'); // Store the session data in a variable, contains all the functions the user has access to.
				
			?>
			<?php
			//Loop through the session data to check if the user has access to each function and only display those.
			foreach($userinfo as $u){
					//Check if the user has access to Out Patient Registration forms or In Patient Registration forms 
					if($u['user_function']=="Out Patient Registration" || $u['user_function']=="In Patient Registration"){ 
					// If they do, display dropdown menu which will contain all the links to the forms. ?>
						<li class="dropdown  <?php if(preg_match("^".base_url()."register^",current_url())){ echo "active";}?>">
									<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Patients <b class="caret"></b></a>
									<ul class="dropdown-menu">
						<?php
						//Loop through the user session data to check if the user has access to Out Patient forms
						foreach($userinfo as $u){
						//If they do, display all the OP forms available
								if($u['user_function']=="Out Patient Registration"){ ?>
									<li class="dropdown-header">OutPatient</li>
									<?php foreach($op_forms as $form){ ?>
										<li><a href="<?php echo base_url()."register/custom_form/$form->form_id"; ?>"><?php echo $form->form_name;?></a></li>
									<?php }
									//When the match is found, break the loop.
									break;
								}
							}?>	
						  <li class="divider"></li>
						<?php 
						//Repeat for all list items, and menu items.
						foreach($userinfo as $u){
								if($u['user_function']=="In Patient Registration"){ ?>
								  <li class="dropdown-header">InPatient</li>
								  <?php foreach($ip_forms as $form){ ?>
									<li><a href="<?php echo base_url()."register/custom_form/$form->form_id"; ?>"><?php echo $form->form_name;?></a></li>
								  <?php }
									break;
								}
							} ?>
							
							</ul>
						  </li>	
					<?php
							break; 
						} 
					} 
				?> 

			<?php foreach($userinfo as $u){
					if($u['user_function']=="Diagnostics" || $u['user_function']=="Bloodbank"){ ?>
					<li class="dropdown  <?php if(preg_match("^".base_url()."services^",current_url())){ echo "active";}?>">
						<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Services <b class="caret"></b></a>
						<ul class="dropdown-menu">
						<?php foreach($userinfo as $u){
								if($u['user_function']=="Diagnostics"){ ?>
									<li><a href="#">Diagnostics</a></li>
						<?php
									break;
								}
							}
						?>	

						<?php foreach($userinfo as $u){
								if($u['user_function']=="Bloodbank"){ ?>
									<li><a href="#">BloodBank</a></li>
						<?php
									break;
								}
							}
						?>	
<li><a href="<?php echo base_url()."diagnostics/add/test_group";?>">Diagnostics</a></li>
						  <li><a href="#">BloodBank</a></li>
					</ul>
					  </li>
					<?php
							break; 
						} 
					} 
				?> 
			<?php foreach($userinfo as $u){
					if($u['user_function']=="Equipment" || $u['user_function']=="Consumables" || $u['user_function']=="HR"){ ?>
			<li class="dropdown  <?php if(preg_match("^".base_url()."inventory^",current_url())){ echo "active";}?>">
						<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Resources <b class="caret"></b></a>
						<ul class="dropdown-menu">
						<?php foreach($userinfo as $u){
								if($u['user_function']=="HR"){ ?>
									<li><a href="#">HR</a></li>
						<?php
									break;
								}
							}
						?>	

						<?php foreach($userinfo as $u){
								if($u['user_function']=="Equipment"){ ?>
									<li><a href="<?php echo base_url()."equipments/add/equipment";?>">Equipment</a></li>
						<?php
									break;
								}
							}
						?>
						<?php foreach($userinfo as $u){
								if($u['user_function']=="Consumables"){ ?>
						  <li><a href="<?php echo base_url()."consumables/add/dosages";?>">Consumables</a></li>
						<?php
									break;
								}
							}
						?>
						</ul>
					</li>
					<?php
							break; 
						} 
					} 
				?> 

			<?php 
			foreach($userinfo as $u){
					if($u['user_function']=="OP Summary" || $u['user_function']=="IP Summary" || $u['user_function']=="OP Detail" || $u['user_function']=="IP Detail"){ ?>
					<li class="dropdown  <?php if(preg_match("^".base_url()."reports^",current_url())){ echo "active";}?>">
						<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Reports <b class="caret"></b></a>
						<ul class="dropdown-menu">
			<?php	if($u['user_function']=="OP Summary" || $u['user_function']=="IP Summary"){ ?>
						  <li class="dropdown-header">Summary reports</li>
			<?php	if($u['user_function']=="OP Summary"){ ?>
						  <li><a href="<?php echo base_url()."reports/op_summary";?>">OP Summary</a></li>
			<?php	}
					if($u['user_function']=="IP Summary"){ ?>
						  <li><a href="<?php echo base_url()."reports/ip_summary";?>">IP Summary</a></li>
			<?php	} 	?>
						  <li class="divider"></li>
			<?php	}	?>
			<?php	if($u['user_function']=="OP Detail" || $u['user_function']=="IP Detail"){ ?>
						  <li class="dropdown-header">Detailed reports</li>

			<?php	if($u['user_function']=="OP Detail"){ ?>
						<li><a href="<?php echo base_url()."reports/op_detail";?>">OP Detail</a></li>
			<?php	}
					if($u['user_function']=="IP Detail"){ ?>
						<li><a href="<?php echo base_url()."reports/ip_detail";?>">IP Detail</a></li>
			<?php } } ?>
						</ul>
			<?php 
				} break; 
			}
			?>
			</li>
			<li class=" <?php if(preg_match("^".base_url()."help^",current_url())) echo "active";?>"><a href="<?php echo base_url()."help";?>" >Help</a></li>



			<?php } ?>
					
		</ul>
	<?php if($this->session->userdata('logged_in')) { ?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown  <?php if(preg_match("^".base_url()."user_panel^",current_url())){ echo "active";}?>"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown"><?php $logged_in=$this->session->userdata('logged_in');echo $logged_in[0]['username']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()."user_panel/settings";?>">Settings</a></li>
				  <li class="divider"></li>
				  <li><a href="<?php echo base_url();?>home/logout">Logout</a></li>
                </ul>
			</li>
          </ul>	
	<?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container">