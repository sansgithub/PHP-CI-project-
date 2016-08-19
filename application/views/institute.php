<html>
<head>
  <title>Institute Info</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<style type="text/css">

.main{
		margin-top: 30px;
		height: 80%;
		width: 80%;
	 }
#first{
		float: left;
		margin-left: 10px;
		height: 80%;
		width: 50px;
	}
#second{
		margin-right:100px;
		float: right;
		height:80%;
		width:500px;
	}
	h1{
		text-align: center;
		font-family: "Lora";
		font-weight: bolder;
		font-size: 3.25em;
	}
	dl{
		padding: 50px;
		font-size: 1.5em;
		margin-left: 100px;
	}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Easy Search</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url('#abt');?>">About Us</a></li>
        <li><a href="<?php echo base_url('cinstitutes');?>">Institutes</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
</nav>	
	
	<div class="main">

		<br>
		<br>
		<h1><?php echo $info->name;?></h1>
		<div id="first">
		<dl class="list-unstyled dl-horizontal">
			<dt>Name:</dt>
			<dd><?php echo $info->name;?></dd>
			<br>
			<dt>Location:</dt>
			<dd><?php echo $info->location;?></dd>
			<br>
			<dt>Language Class:</dt>
			<dd><?php echo $info->language_class;?></dd>
			<br>
			<dt>Contact No:</dt>
			<dd><?php echo $info->contact_no;?></dd>
			<br>
			<dt>Email Address:</dt>
			<dd><?php echo $info->email;?></dd>
			<br>
			<dt>Website:</dt>
			<dd><a href="<?php echo $info->website; ?>" target="_blank"><?php echo $info->website; ?></a></dd>
		</dl>
		</div>	
		<div id="second">
			<img src="<?php echo base_url('assets/upload/'.$info->image);?>" class="img-responsive center-block img-thumbnail" style="max-height:500px;"> 
		</div>
	</div>
	
</body>
</html>