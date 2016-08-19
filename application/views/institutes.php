<html>
<head>
  <title>Institutes</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<style type="text/css">

h1{
	font-weight: bolder;
	font-size: 3em;
	text-align: center;
	vertical-align: middle;
	margin-top: 75px;
}
.row{
	padding-top: 35px;
	padding-left: 75px;
}
</style>
</head>
<body>
<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
				    
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
				    </div>
				     
				  </div>
		</nav>	
		<h1 id='inst'>Institutes</h1>
		<div class="row">
		<?php  foreach($records->result() as $row ){ ?>
			
				  <div class="col-md-3">
				    <div class="thumbnail">
				      <img style="height:200px; width:200px;" class="responsive-image" src="<?php echo base_url('assets/upload/'.$row->image);?>" data-toggle="tooltip" data-placement="right" >
				      <div class="caption">
				        <p><a href="<?php echo base_url('cinstitutes/detail/'.$row->id);?>"><?php echo $row->name;?></a></p>
				      </div>
				    </div>
				  </div>
		<?php } ?>
		</div>
		<div class="row">		
 			<?php  echo $this->pagination->create_links();?>
 		</div>
</div>
</body>
<div class="container">
      <div class="row">
        <div class="col-sm-9">
          <ul>
            <li>
              Copyright © 2016.
            </li>
          </ul>
        </div>
      </div><!--row -->
    </div><!--container -->
</html>