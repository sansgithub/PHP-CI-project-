<html>
<head>
  <title>Add</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<style type="text/css">
  body{
  		background-color: #f8f8f8;
  	}
</style>
<div class="row"> 
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel panel-default" style="margin-top: 2%;">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-unlock-alt"></i>Add</h3>
        </div>
        <div class="panel-body">
<?php echo form_open('add/create',array('enctype'=> "multipart/form-data",'class'=>'form-horizontal'));?>
		<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="name">Name</label>  
  <div class="col-md-8">
    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="location">Address</label>
  <div class="col-md-8">
    <input id="location" name="location" type="location" placeholder="Address" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="language">Languages</label>  
  <div class="col-md-8">
    <input id="language" name="language" type="text" placeholder="Languages" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="contact">Contact</label>  
  <div class="col-md-8">
    <input id="contact" name="contact" type="text" placeholder="Contact" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="website">Website</label>  
  <div class="col-md-8">
  <input id="website" name="website" type="text" placeholder="Website" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="email">Email</label>  
  <div class="col-md-8">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    </div>
  </div>

<div class="form-group">
  <label class="col-md-3 control-label" for="image">Choose Image</label>
  <div class="col-md-4">
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="submit"></label>
  <div class="col-md-3">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
<label class="col-md-3 control-label" for="cancel"></label>
  <div class="col-md-3">
    <input type="button" name="cancel" value="Cancel"
    class="btn btn-danger" onclick="window.location='<?php  echo base_url('admin_area');?>'" />
  </div>
</div>
</fieldset>
<?php form_close();?>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
