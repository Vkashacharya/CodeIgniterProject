 <?php include('admin_header.php') ;?>
 
 <div class="container">
 <h1>Add article</h1>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<?php echo form_open('admin/storearticle'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>


	<form action="">  
    <label class="col-lg-4 control-label">Article Title</label>
    <div class="col-lg-6">
    <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Title','value'=>set_value('title')]); ?>
    </div>
    </div>
    </div>
    <div class="col-lg-8">
    <?php echo form_error('title',"<p class='text-danger'>","</p>"); ?>
    </div>
    <br />
    <br />
    <br />
    </div>
    <div class="row">
    <div class="col-lg-6">
	<div class="form-group">
     <label class="col-lg-4 control-label">Article Text</label>
     <div class="col-lg-8">
    <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body')]); ?>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <?php echo form_error('body'); ?>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="container">
    <div class="col-lg-10 " align="right">
    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
	<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
	</div>
	</div>
	</div>
 	</form>
</div>
</div>

<?php include('admin_footer.php') ;?> 
