<html>
<title>Multiple image upload with text in Codeignter</title>
<style type="text/css">
.container{
  width: 50%;
  margin: 0 auto;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    width: 25%;
}
button, input {
  padding: 10px;
}
</style>
<body>


<div align="center" class="container">

<p align="center"><a href="<?php echo base_url(); ?>">Upload new data</a></p>

<table border="1" style="width:100%">
  <tr>
    <td>S.No</td>
    <td>Name</td> 
    <td>Class</td>
	<td>Image</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  <?php
    if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
    foreach ($view_data as $key => $data) { 
    ?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $data['name']; ?></td> 
    <td><?php echo $data['class']; ?></td>
    <td><img src="<?php echo site_url().'uploads/'.$data['image']; ?>" width="50px" /></td>
    <td><a href="<?php echo site_url(); ?>welcome/edit/<?php echo $data['u_id']; ?>">Edit</a></td>
    <td><a href="<?php echo site_url(); ?>welcome/delete/<?php echo $data['u_id']; ?>">Delete</a></td>
  </tr>
  <?php } endif; ?>
</table>

</div>


</body>
</html>