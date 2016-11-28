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
    width: 50%;
}
button, input {
	padding: 10px;
}
</style>
<body>

<div align="center" class="container">
<form method="POST" action="<?php echo site_url('welcome/file_upload');?>" enctype='multipart/form-data'>
<table border="1">
<tr>
<td>Name</td>
<td><input type="text" name="name" required id="name" placeholder="Name"></td>
</tr>
<tr>
<td>Class</td>
<td><input type="text" name="class" required id="class" placeholder="Class"></td>
</tr>
<tr>
<td>Images</td>
<td><input type="file" name="userfile" required id="image_file" accept=".png,.jpg,.jpeg,.gif"></td>
</tr>
<tr>
<td colspan="2" align="center"><input style="width: 50%;" type="submit" value="Submit"></td>
</tr>
</table>
</form>
</div>


</body>
</html>