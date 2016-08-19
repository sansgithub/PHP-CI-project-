<html>
<head>
  <title>Admin Home</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<style>
  body{
        background-color: #f8f8f8;
        margin-top: 30px;
  }
</style>      

  <div class="container">
    <div id="logout" style="margin-bottom:5px">
        <a href="<?php echo base_url('admin_area/do_logout'); ?>"><button type="button" class="btn btn-info btn-sm">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout </button></a>
      </div>
    <h2>Admin Section</h2>
    <div class ="buttons">
        <a href="<?php echo base_url('add');?>"><button type="button" class="btn btn-primary btn-sm">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Records</button></a>
          
  </div>
  <div class="searchbar pull-right" style=" margin-top: -30px;">
      <div class="form-group">
        <form class="form-inline" method="get">
          
              <!-- <div class="input-group col-xs-3 has-success">-->
                <input type="text" class="form-control input" placeholder="Search" name="search">
                <button type="button" class="btn btn-success btn glyphicon glyphicon-search" aria-label="Left Align">
                </button>
            
        </form>
        </div></div>
<table class="table table-responsive table-bordered" id="tbalign">

  <tr>
    <th>Institute Name</th>
    <th>Address</th>
    <th>Languages</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Website</th>
    <th>Action</th>
  </tr>
  <?php  foreach($records->result() as $row ){ ?>
  <tr>
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->location; ?></td>
    <td><?php echo $row->language_class; ?></td>
    <td><?php echo $row->contact_no; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><a href="<?php echo $row->website; ?>" target="_blank"><?php echo $row->website; ?></a></td>
    <td>  
        <a href="<?php echo base_url('edit/'.$row->id); ?>"><button type="button" class="btn btn-success btn-sm">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
        <a href="<?php echo base_url('admin_area/delete/'.$row->id); ?>"><button type="button" class="btn btn-danger btn-sm">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button></a>
    </td>
  </tr> 
  <?php } ?>
</table>

<?php  echo $this->pagination->create_links();?>

</div>
<?php include('includes/footer.php');?>