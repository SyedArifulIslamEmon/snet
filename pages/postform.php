<?php
if (isset($_SESSION["juser"]))
{
	?>
    <div id="poster">
  		<form id="subpost" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<textarea class="newpost" name="newpost" placeholder="Whats on your mind?"></textarea>
				<div style="height:0px;overflow:hidden">
				   <input type="file" id="filein" name="file" />
				</div>
				<button title="Upload Image" class="icon-upl postimg" type="button" onclick="chooseFile();"></button>
				<input id="postsub" type="submit" class="logsub" value="Post"/><img id="progress" height="32px" src="<?php echo imgPath()."loading.gif"; ?>" />
		  </form>
  	</div>
<?php
}
else{
	redirect('home');
}
?>