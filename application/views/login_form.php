<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <style type="text/css">
    body{
  		background-color: #f8f8f8;
    }
</style>
<div class="row"> 
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default"   style="margin-top: 30%;">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-unlock-alt"></i>Login In</h3>
        </div>
        <div class="panel-body">

		<?php	
			echo form_open('login/validate_credentials');//validation
			echo '<br>'; 
		?>
			
<div class="form-group">
        <input class="form-control" placeholder="Username" name="username" type="username" autofocus="">
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Password" name="password" type="password" value="">
    </div>
<button class="btn btn-md btn-info btn-block" value="submit">Login</button>
<?php
  echo anchor('login/signup','Create Account',array('class'=>"btn btn-link"));
?>
 </div>
</div>
</div>
<?php include('includes/footer.php');?>