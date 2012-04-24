<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slide Show Banner</title>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js" ></script>
</head>
<body>
<div class="container">
	<div class="banner">
    	<div class="scroll">
			<?php
			
				$dir = './images/banner1';
				$allowed_type = array('jpg','jpeg','png','gif');
				
				
				$d = dir($dir);
				$pics_len=0;
				while( $f = $d->read() ){
					$file_type = end(explode('.',$f));
					if( !in_array(strtolower($file_type),$allowed_type) ) continue;

					$file_name = substr($f,0,-strlen($file_type)-1);
					$desc_path = "$dir/$file_name.txt";

					//$desc_text = file_exists($desc_path) ? file_get_contents($desc_path) : ""; // remove for dummies
					if( file_exists($desc_path) ){
						$desc_text = file_get_contents($desc_path);
						$desc_html = "<div class='desc'>$desc_text</div>"; // div.desc have padding and visible even its free.
					}else{
						$desc_html = "";
					}

					echo "<div>$desc_html<img src='$dir/$f' /></div>";
					$pics_len ++;
				}
		
			?>
        </div>
        <ul class="btn">
        	<?php
				for($i=0;$i<$pics_len;$i++) echo '<li></li>';
			?>
        </ul>
        
    </div>


    <!-- temp -->
    <br/>
    <input type="button" value="back" onclick="prvSlide()" />
    <input type="button" value="next" onclick="nextSlide()" />
    &nbsp;&nbsp;
    <input type="button" value="play" onclick="resetAutoPlay()" /> <!-- cleat last, maybe click more ! -->
    <input type="button" value="stop" onclick="stopAutoPlay()" />
	&nbsp;&nbsp;
    <input type="text" disabled="1" size="64" value="beshe ke ye khayyer in btn haye gorz ro khoshkel kone !" />


</div>
</body>
</html>
