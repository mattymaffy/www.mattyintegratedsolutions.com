<!Doctype html>
<head>
	<title>faq us</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
.wrapper{
	width: 500px;
	height: 400px;
	margin: auto;
	padding-top: 0px;
	padding-left: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	float: center;
	border-right: solid 1px;
	border-left: solid 1px;
	border: solid 1px;
	border-color: gray;
	border-radius: 5px;
	background-color: white;
}

body{
	padding-top: 50px;
	background-color: #ccc;
}


	}
.logo{
	float: left;
	padding: 20px 20px 20px;
	margin: auto;
	padding-left: 50px;
	}
form{
	width: 700px;
	
	padding-left: 100px;
}

input{
	padding-left: 5px;
	float: left;
	width: 50px;
	height: 20px;
}
button{
	float: left;
	margin-left: 50px;
}
.btn{
	float: left;
	padding-left: 10px;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 10px 
	margin-bottom: 20px;
}
.header{
	font-family: bodoni MT;
	
	padding-left: 100px;
	
	
}


</style>
</style><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
<div class="header">
	<h1> Faq Us</h1>
</div><br>
<form action="faq1.php" method="POST" class="form-horizontal" role="form">
<div class="form-group">
<div class="col-sm-6">
<label>Name:</label><input type="text" class="form-control" id="name" name="names" placeholder="Enter Full Names">
</div>
</div>
<div class="form-group">
<div class="col-sm-6">
<label>Email:</label><input type="email" class="form-control" id="email" required="" name="email" placeholder="Enter Your Email">
</div>
</div>
<div class="form-group">
<div class="col-sm-6">
<label>Body Message:</label>
<textarea class="form-control" name="message" placeholder="please Enter Your Message"></textarea>
</div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</div>

</form>
<script type="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>