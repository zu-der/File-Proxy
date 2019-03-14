<html>
<head><title>Admin Page</title></head>
<body style="background-image:linear-gradient(45deg, #f2f2f2,white)">
<?php
  $file = "";
  $files = glob("uploads/*");
  foreach ($files as $file){
  	$p = pathinfo($file, PATHINFO_EXTENSION);
  	$name = str_replace("uploads/","",$file);
  	$fname = '<br/>'.str_replace('.'.$p,'',$name);
  	$fext = ' '.strtoupper($p); ?>
  	<div>
  	<div style="display:inline-flex;width:150px;height:200px;background-image:url('icon.png');background-size:100% 100%;color:white;font-family:segoe ui">
    <table style="width:100%;height:100%;font-weight:bold;font-size:25px;box-sizing:border-box;padding-top:40px;color:maroon">
    	<tr>
    		<td>
                <center><?php echo '.'.$fext; ?></center>
    		</td>
    	</tr>
    </table>
  	</div>
  	<div style="display:inline-flex;font-weight:bold;font-size:15px;font-family:segoe ui">
    <table>
    	<tr>
    	  <td><b><?php echo $fname; ?></b></td>
    	</tr>
    	<tr>
    	  <td>
           <a href="<?php echo $file; ?>">Preview</a> <a href="<?php echo $file; ?>" download>Download</a>
          </td>
        </tr>
    </table>
  	</div>
    </div>
    <hr>
  	<?php
  }
 ?>
</body>
</html>
