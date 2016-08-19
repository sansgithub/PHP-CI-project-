<html>
<head>
  <title>Edit</title>
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
          <h3 class="panel-title"><i class="fa fa-unlock-alt"></i>Edit</h3>
        </div>
        <div class="panel-body">
<?php  echo form_open('edit/update/'.$records->id,array('enctype'=> "multipart/form-data",'class'=>'form-horizontal'));?>
		<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="name">Name</label>  
  <div class="col-md-8">
    <input value="<?php echo $records->name; ?>" id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="" >
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Address</label>
  <div class="col-md-8">
    <input value="<?php echo $records->location; ?>"id="location" name="location" type="location" placeholder="Address" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="language">Languages</label>  
  <div class="col-md-8">
    <input value="<?php echo $records->language_class; ?>" id="language" name="language" type="text" placeholder="Languages" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="contact">Contact</label>  
  <div class="col-md-8">
    <input value="<?php echo $records->contact_no; ?>" id="contact" name="contact" type="text" placeholder="Contact" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="website">Website</label>  
  <div class="col-md-8">
  <input value="<?php echo $records->website; ?>"id="website" name="website" type="text" placeholder="Website" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="email">Email</label>  
  <div class="col-md-8">
  <input value="<?php echo $records->email; ?>"id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    </div>
  </div>

<div class="form-group">
  <label class="col-md-3 control-label" for="image">Choose Image</label>
  <div class="col-md-4">
    <?php if(!empty($records->image)) echo "<img src='".base_url('assets/upload/'.$records->image)."' height='100px' class='responsive thumbnail'>"; ?>
    <input value="<?php echo $records->image; ?>"id="image" name="image" class="input-file" type="file">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="submit"></label>
  <div class="col-md-3">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
<label class="col-md-3 control-label" for="Cancel"></label>
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
