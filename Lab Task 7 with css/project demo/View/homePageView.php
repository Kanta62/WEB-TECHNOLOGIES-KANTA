<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<style>
		body{
			background-image: url('../Sources/HomeCover.jpg');
			background-repeat: no-repeat;
            background-size: 1700px 900px;
		}
.box{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 500px;
    margin: 100px auto 100px;
    padding: 15px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
    
  }
  h1{
  	text-align: center;
  }
  img{

  	width: 500px;
  	height: 400px;
  }
	</style>
</head>
<body>
  <div><?php include("../Model/header.php"); ?></div>
  <div class="box"><h1>Welcome to Teacher<span style="color:red">F</span>.com</h1>
  <img src="../Sources/tutor.webp"></div>
  <div><?php include("../Model/footer.php"); ?></div>
</body>
</html>
