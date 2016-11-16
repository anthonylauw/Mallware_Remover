<?php
 
$signatures=array();
if(isset($_POST['cleanup']) && $_POST['cleanup'] == "Clean All!"){
	$signatures = $_POST['signatures'];
	//$dir=dirname(__FILE__);
	$dir= dirname($_SERVER['DOCUMENT_ROOT'])."/htdocs/phpscanner/target";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mallware Remover</title>

<link href="asset/styles.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #FEFEFE;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.oneColElsCtr #container {
	width: 90%;
	background: #FFFFFF;
	margin: 20px auto; /* the auto margins (in conjunction with a width) center the page */
	border: 6px solid #EEEEEE;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColElsCtr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
}
.oneColElsCtr #mainContent #logo {
text-align:right;
margin:20px;
}
-->
</style></head>

<body class="oneColElsCtr">


	
 <div class="table">

 <div class="table-cell">
<div id="container">
  <div id="mainContent">
  	<div id="logo">
  		<a title="Malicious Script Remover" href="http://www.sapuraglobal.com"><img alt="Malicious Script Remover" src="" border="0"></a>
  </div>
  	<h1> Malicious Script Remover</h1><br><br>
  	<?php
  
	dir_contents_recursive($dir);
	?>
	    <p>&nbsp;</p>

	    

	</div>
</div>


 </div>



  



<script type="text/javascript">
	
$('#nest').bind('touchstart', function () {
    $(this).addClass('active');
}).bind('touchend', function () {
    $(this).removeClass('active');
});
var mode = 'home';
$('#nest').click(function () {
    if (mode == 'home') {
        TweenMax.to($('#home'), 0.4, { x: -360 });
        TweenMax.fromTo($('#car'), 0.4, {
            x: 360,
            autoAlpha: 1
        }, { x: 0 });
        mode = 'car';
    } else if (mode = 'car') {
        TweenMax.to($('#home'), 0.2, { x: 0 });
        TweenMax.fromTo($('#car'), 0.2, { x: 0 }, {
            x: 360,
            autoAlpha: 0
        });
        mode = 'home';
    }
});
$(function () {
    makeRadial({
        el: $('#radial'),
        radials: 120
    });
});
function makeRadial(options) {
    if (options && options.el) {
        var el = options.el;
        var radials = 60;
        if (options.radials) {
            radials = options.radials;
        }
        var degrees = 360 / radials;
        var i = 0;
        for (i = 0; i < radials / 2; i++) {
            if (window.CP.shouldStopExecution(1)) {
                break;
            }
            var newTick = $('<div class="tick"></div>').css({ '-moz-transform': 'rotate(' + i * degrees + 'deg)' }).css({ '-webkit-transform': 'rotate(' + i * degrees + 'deg)' }).css({ 'transform': 'rotate(' + i * degrees + 'deg)' });
            el.prepend(newTick);
        }
        window.CP.exitedLoop(1);
    }
}
//# sourceURL=pen.js

</script>



</body>
</html>
	<?php
	
	
	
	
}else{
	 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 





<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #FEFEFE;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.oneColElsCtr #container {
	width: 90%;
	background: #FFFFFF;
	margin: 20px auto; /* the auto margins (in conjunction with a width) center the page */
	border: 6px solid #EEEEEE;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColElsCtr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	font-size:12px;
}
.oneColElsCtr #mainContent #author {
font-size:14px;
}
.oneColElsCtr #mainContent #logo {
text-align:right;
margin:20px;
}
-->
</style>

</head>

<body class="oneColElsCtr">

<div id="container">
		  <div id="mainContent">
		  	 
		    <h1> Malicious Script Remover</h1>
		    <p>This tool is made to cleanup malicious scripts or strings from your files on webserver with ease.</p>
		    <p>&nbsp;</p>
		    <h2>Enter script/code to remove</h2>
		    <script>
		    	function Validate(frm){
		    		if( document.getElementById('sig0').value == '' ){
		    			alert("Please enter code to remove");
		    			return false;
		    		}else if( document.getElementById('sig0').value.length < 25 ){
		    			var ans = window.confirm("The string you have entered looks too small. Do you still want to proceed?");
		    			return ans;
		    		}else{
		    			return true;
		    		}
		    	}
		    </script>
		    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_blank" onsubmit="return Validate(this);">
		      <label for="signature[]"></label>
		      <p>
		      	<small>Enter the virus/malicious code which is to be removed from all files.(only support PHP 5+)</small><br>
		        <textarea id="sig0" name="signatures[0]" cols="80" rows="5"></textarea>
		        
		      </p>
		      <p>
		        <input type="submit" name="cleanup" id="cleanup" value="Clean All!" />
		      </p>
		      <p>&nbsp;</p>
		     
		    </form>
		    <p>&nbsp;</p>
			</div>
		</div>

 



 


 




</body>
</html>

	
<?php 
}
function dir_contents_recursive($dir) {
		global $signatures;
		global $i ;
		$i = 0;
		//open handler for the directory
		$iter = new DirectoryIterator($dir);
		foreach( $iter as $item ) {
			// make sure you don't try to access the current dir or the parent
			if ($item != '.' && $item != '..') {
				if( $item->isDir() ) {
					// call the function on the folder
					dir_contents_recursive("$dir/$item");
				} else {
					$file_name = $item->getFilename();
					$new_name = pathinfo($file_name); // name of file
					$ext = $new_name['extension']; // extension
					//for index.php ,index.html ,index2.php ,default.php and all js files
					if(preg_match('/.*\.(js|php|html|shtml|htm|tpl|inc|asp|cfm|aspx|pl)$/i',$item->getFilename())){
						//get file content
						if( is_readable( $dir . "/" .$item->getFilename() ) ){
							$content = file_get_contents ($dir . "/" .$item->getFilename());
							if( is_writable( $dir . "/" .$item->getFilename() ) ){
								$signature = false;
								$sigs = array();
								foreach( $signatures As $s ){
										
									if( trim($s)!= '' && strpos( $content, $s) !== false ){
										$sigs[] = $s;
									}
								}
								// match the code
								if ( count($sigs) > 0 ) {
									//create backup file
									//$infectedFileName = $file_name.".infected.bak"; //backup file
									//$fh = fopen($dir . "/" .$infectedFileName, "w+");
									//copy original infected content to .bak file
									//file_put_contents($dir . "/" .$infectedFileName,$content);
									//if($fh==false){
									//	die("unable to create file");
									//}
									//remove obfuscated code
									$content = str_replace($sigs,"", $content);
									// save file
									file_put_contents ($dir . "/" .$item->getFilename(), $content);
								
									echo "Infection found and cleaned in : " .$dir . "/" .$item->getFilename() . "<br>";
									$i++;
								
									
								}
								
							}else{
								echo "Unable to clean a infected file(file not writable):" .$dir . "/" .$item->getFilename() . "<br>";
							}
						}else{
							echo "Unable to read a possibly infected file:" .$dir . "/" .$item->getFilename() . "<br>";
						}
                  
                 
				}
			}
		}

		

				}

 if ($i == 0 ) {
 
                  	echo"No infected Found!";

	 }else
	 {
	 	?>

<div class="table-cell">
    <div id="nest">
      <div id="screen">
        <div id="home">
          <div id="radial">
            <div id="blank"></div>
          </div>
          <div id="status">Total Infected Files</div>
          <h1><?php echo $i;?></h1>
           
        </div>
        
      </div>
    </div>
  </div>
</div>
<script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-53beeb1a007ec32040abaf4c9385ebfc.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<?php

	 }




	}
?>