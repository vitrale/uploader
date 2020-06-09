<form action="<?= route_to('uploader') ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="fileToUpload">
	<br>
	<input type="reset" value="Reset">
	<input type="submit" value="Submit">
</form>