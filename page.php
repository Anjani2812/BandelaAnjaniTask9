  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Sign in Form</title>
<strong><h1>Task</h1></strong>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
		
    	margin: 10px auto;
		border-style : solid;
		
	}
    .login-form form {
    	margin-bottom: 1px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
		
		
    }
    .login-form h2 {
        margin: 0 0 0px;
		
    }
    .login-form .hint-text {
		color: #777;
		padding-bottom: 15px;
		text-align: center;
		
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 5px black;
		border : 1px black;
    }
    .login-btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .or-seperator {
        margin: 20px 0 10px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }
    .social-btn .btn {
        margin: 10px 0;
        font-size: 15px;
        text-align:center; 
        line-height: 24px;  
    }
	.social-btn .btn i {
		float: center;
		margin: 4px 15px  0 5px;
        min-width: 15px;
	}
	.input-group-addon .fa{
		
		font-size: 18px;
	}
	.fa-facebook {
		background-color : blue;
		background: #333BFF;
		color: white;
		
	}
	.fa-google {
		background-color:red;
		background :red;
		color : white;
	
	
	}
	.fa-graduation-cap {
		
		color : white;
	}
	.fa-close {
		color : white;
	}
	.header {
		margin (10,10,10,10);
		padding: 1px 1px;
		text-align: center;
		background: #76c9d4;
		color: white;
		font-size: 5px;
		
	}
	
	
	
</style>
</head>
<body>
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
	<span class="pull-left" "input-group-addon"><i class="fa fa-graduation-cap fa-2x"></i></span>
        
		<span   class="pull-right" "input-group-addon"><i class="fa fa-close fa-2x"></i></span>
		<div class="header">
		<b><h2  class="btn btn-info btn-block" class="text-center">Sign in</h2></b>
        </div>
		
		<br>
        <div class="form-group">
        	<div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="mail@example.com" required="required">
				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
				<span class="input-group-addon"><i class="fa fa-unlock"></i></span>
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block login-btn">Sign in</button>
        </div>
        <div class="clearfix">
		<label class="pull-left checkbox-inline">Forgot your password?</label>
		<a href="#" class="pull-right text-success">Register Now!</a>
        </div>  
    <div class="or-seperator"><i>OR</i></div>
    <div class="text-center social-btn">
            <span  class="btn btn-primary btn-block" class = "input-group-addon"> <i class="fa fa-facebook"></i></span>
		   <span  class="btn btn-danger btn-block" class = "input-group-addon"> <i class="fa fa-google"></i></span>
		   <br>
		    <a href="#" class="btn btn-warning btn-block"><b> EPAM LOGIN</b></a>
        </div>
        </form>
</div>
</body>
</html>                            