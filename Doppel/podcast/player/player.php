<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Styling  <Audio Tag></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/mediaelementplayer.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <article>
	<div class="cont">
		<h3><?php echo $_GET['nome']?></h3>
		<time><?php echo $_GET['data']?> </time>
	</div>
	<audio class="audio" controls="controls">
		<source type="audio/mpeg" src="../<?php echo $_GET['pod']?>">
	</audio>
</article>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/mediaelement-and-player.min.js'></script>

  

    <script src="js/index.js"></script>




</body>

</html>
