<html>
	<head>
		<title>Easy Search</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    
<style type="text/css">
body{
  height: auto;
  width: auto;
}
h1,h2{
      
      font-weight: bolder;
      color: #000;
}
/*rounded corner in search form*/
* {
      -webkit-border-radius: 4px !important;
         -moz-border-radius: 4px !important;
              border-radius: 4px !important;
      -webkit-border-top: 4px !important;
         -moz-border-top: 4px !important;
              border-top: 4px !important;
      -webkit-border-bottom: 4px !important;
         -moz-border-bottom: 4px !important;
              border-bottom: 4px !important;
    }
#yoo{
  height:100%;
  width:100%;
  background: url("<?php echo base_url('assets/images/main.jpg');?>");
  background-repeat: no-repeat;
  background-size: 100%;
}
#searchform{
  padding: 350px 100px 0px 300px;
}
form{
  width:500px;
  height:500px;main.jpg
  margin:0 auto;
}
input[type=text]{
  color:black;
}

.aboutus{
  padding: 5px 20px ;
  color:#000;
  font-size:1.1em;
  font-family: "Lora";
  height: auto;
  text-align: justify;
  font-weight: bold;
}

#mainFooter {
  background: #31302b;
  color: #fff;
}
#mainFooter ul li {
  list-style: none;
  float: left;
  line-height: 50px;
  margin-left: 15px;
  font-size: 13px;
}
#footer {
  width: 100%;
  height: 50px;
  bottom: 0;
  left: 0;
}
#footer a:link, #footer a:hover, #footer a:visited {

  color: #fff;
  text-decoration: none;
}
</style>
  </head>
	<body id="home">
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"><a href="#home">Home</a></span>
        <span class="icon-bar"><a href="#abt">About Us</a></span>
        <span class="icon-bar"><a href="<?php echo base_url('cinstitutes');?>">Institutes</a></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Easy Search</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#abt">About Us</a></li>
        <li><a href="<?php echo base_url('cinstitutes');?>">Institutes</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	
	<div class="container"><div id="yoo">
  <div id="searchform">
    <form action="<?php echo base_url('cinstitutes');?>" method="get">
      <span class="input-group-btn">
      <div class="input-group col-xs-10 has-success">
         <label for="Search"></label>
          <input type="text" class="form-control input-lg" placeholder="Search" name="search">
          <button type="button" class="btn btn-success btn-lg glyphicon glyphicon-search" aria-label="Left Align">
          </button>
        </span>
      </div>
    </form>
  </div>
  </div></div>

<div class="container"><h2 align="center" id="abt">About Us</h2>
<div class="aboutus">
  <p class="aboutus">
    It's a hectic task to go places and look up for language institutes and know the kind of service they provide. Now everything is just a click away. We are here to help you look out for the best institues that provide all kinds of necessary services that you need. Searching is made easy so that none of you waste your time to go out and look for the institutes you want to join. Every second is utilized by staying anywhere, anytime. We assure you will 
    get the correct institute you are looking for. 
    <br><br>
     Earlier people had a tough time searching for language institutes as there were no networking and online platform that would list all the language institutes available in Kathmandu. Even if people would find one or two institutes, they had to make choice from a very limited number. That was tough. 

    People were compelled to pick any language institute without knowing the information about the available institutes in Kathmandu. 

    Hence, this website portal  helps to get the right information of language institutes in a more comfortable way. 

    Lang.com is a website that aims to include the information of all the language institutes inside Kathmandu valley. In order to ensure that the people will get accurate and enough information, all necessary information are provided right here.
  </p>
  </div></div>
       

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
  
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.0.min.js');?>"></script>
<script type="text/javascript">
  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</body>
</html>