
<?php


class AboutUsController {

	function aboutpage(){
    ?>

		<?php require __DIR__ . '/../includes/header.php';?>

  <title>MyBand -about</title>
</head>
<body>

<div class="header">
	<div class="headContainer">



<?php require __DIR__ . '/../includes/Menu.php';?>

<h1>About us</h1>
</div>
</div>

<img src="uploads/logo.png" alt="brain" class="logoBrain">



<?php
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/AboutData.php';
?>
<div class="Thefooter">
	<div class="Fcenter">
<div class="Fleft">
	<p>@Zenzo.</p>
	<p>Made by: Zenzo X. Arian.</p>
	<p>MyBand project - Media college.</p>


	<a href="home">Home</a>,
	<a href="search">Search</a>,
	<a href="agenda">Agenda</a>,
	<a href="about">About us</a>,
	<a href="contact">Contact</a>,
	<a href="channel">Channels</a>,
	<a href="projects">Projects</a>
</div>
</div>
</div>

</body>
</html>

<?php

}

}

 ?>
