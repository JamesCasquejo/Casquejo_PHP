<?php
	$title = "James Casquejo";
	$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
	<style>
		* {
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
			text-decoration: none;
			color: white;
		}

		body {
			margin: 0px;
			padding: 0px;
			background: linear-gradient(to right, rgb(12, 140, 191) , rgb(12, 153, 209) );
		}

		#Top_Div {
			height: 80vh;
		}

		header {
			height: 100px;
		}

		#main {
			display: flex;
			justify-content: space-around;
		}

		#main, div {
			height: 100%;
		}

		#Top_Left {
			display: flex;
			flex-direction: column;
			justify-content: center;
			width: 60%;
			padding-left: 10%;
		}

		h1 {
			font-weight: 300;
			font-size: 50px;
			font-family: 'Poppins', sans-serif;
			margin: 0;
		}
		h2 {
			font-size: 70px;
			font-family: 'Poppins', sans-serif;
			margin: 0;
		}
		span {
			color: #b07f4e;
		}

		p {
			font-weight: 500;
			font-size: 20px;
			margin: 0;
		}

		a {
			text-align: center;
			color: white;
			background-image: linear-gradient(to right, #b07f4e,#cd945b);
			border-radius: 5px;
			padding: 2% 0px;
			width: 150px;
			margin-top: 10px;
		}

		#Top_Right {
			width: 40%;
		}
	</style>
</head>
<body>
    <div id="Top_Div">
        <header>
        </header>
        <div id="main">
            <div id="Top_Left">
                <h1>Hello,</h1>
                <h2>I'm <span>James Casquejo</span></h2>
                <p>A BSIT student from University of Cebu</p>
                <a href="">Contact me</a>
            </div>
            <div id="Top_Right">
                <img src="img/Profile.png" alt="Me">
            </div>
        </div>
    </div>
    
</body>
</html>
