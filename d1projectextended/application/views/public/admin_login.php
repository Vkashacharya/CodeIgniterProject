<?php include('public_header.php'); ?>

<div class="container">
<h1>Admin Login</h1>
<?php if($error =$this->session->flashdata('login_failed')): ?>
<div class="alert alert-dismissible alert-danger">
   <?= $error ?>
</div>
<?php endif; ?>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<?php echo form_open('login/admin_login'); ?>
	<form action="">  
    <label class="col-lg-2 control-label">Username</label>
    <div class="col-lg-6">
    <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
	<div class="form-group">
     <label class="col-lg-2 control-label">Password</label>
     <div class="col-lg-6">
    <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <?php echo form_error('password'); ?>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="container">
    <?php echo form_reset(['name'=>'reset','value'=>'Reset']); ?>
<?php echo form_submit(['name'=>'submit','value'=>'Login']); ?>
</div>
 	</form>
</div>




<?php include('public_footer.php'); ?>