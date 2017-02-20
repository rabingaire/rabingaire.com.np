<?php
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="I am Rabin Gaire. I am a Webdeveloper.">
	<meta name="author" content="Rabin Gaire">
	<meta property="og:title" content="Rabin Gaire" />
	<meta property="og:url" content="http://rabingaire.com.np" />
	<meta property="og:image" content="--picture or link of our logo--" />
	<title>Rabin Gaire | Well they say I am a webdeveloper</title>
    <link rel="icon" type="image/jpg" href="image/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid text-center is-connect navbar-fixed-top">
    <h5>Connect With me on rabingaire20@gmail.com and on my blog <a href="http://rabingaire.me">rabingaire.me</a></h5>
</div>
<div class="container-fluid is-wrapper">
	<div class="row">
    	<div class="col-md-4 text-center my-info">
        	<div class="my-photo">
            </div>
            <h1>Rabin Gaire</h1>
            <h3>Well they say I am a Webdeveloper.</h3>
            <h5>
                <span class="label label-danger">Ruby On Rails</span>
<span class="label label-info">ReactJs</span>
           	</h5>
        </div>
        <div class="col-md-8 my-content">
        	<div class="my-effect text-center">
                <span class="my-text"></span> 
            </div>
            <div class="thumbup text-center">
                <h1 id="display-number"><?php echo $data['thumbup'] ?></h1>
                <input type="submit" class="btn btn-success" id="thumbsup" name="thumbsup" value="Like">
                <h3>Hit like just to get me going</h3>
                <h4>Well you can do it.Go ahead do it :)</h4>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/typeit.js"></script>
<script type="text/javascript" src="js/our-script.js"></script>
</body>
</html>