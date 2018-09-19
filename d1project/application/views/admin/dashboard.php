<?php include('admin_header.php'); ?>
<div class="container">
<?php if($feedback =$this->session->flashdata('feedback')): 
$feedback_class =$this->session->flashdata('feedback_class');
?>
<div class="alert alert-dismissible <?= $feedback_class?>">
   <?= $feedback ?>
</div>
<?php endif; ?>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-6">
<?=anchor('admin/storearticle','Add Article',['class'=>'btn btn-lg btn-primary pull-right']) ?>

</div>
</div>
	<table class="table">
	<thead>
		<th>Sr. No</th>
		<th>Title</th>
		<th>Action</th>
	</thead>	
	<tbody>
	<?php 
	if(count($articles)): ?>
		<?php foreach($articles as $article): ?>
	<tr>
		<td>1</td>
		<td><?= $article->title ?></td>
		<td>
		<div class="row">
		<div class="col-lg-2">
		<?=anchor("admin/editarticle/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>	
		</div>
		<div class="col-lg-2">
		<?= form_open('admin/delete_article'),
		form_hidden('article_id',$article->id),
		form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
		form_close(); ?>
		</div>
		</div>		
		</td>
	</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
	<td colspan="3">No records found</td> 
	</tr>
	<?php endif;?>
	</tbody>
	</table>
</div>
<?php include('admin_footer.php'); ?>

