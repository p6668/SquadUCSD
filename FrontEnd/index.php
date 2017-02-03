<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="common.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
	<head>
	    <title>SquadUCSD</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="UCSD study group searching site">
	 	<meta name="keywords" content="HTML,CSS,JavaScript">
		<meta name="author" content="Zifan Yang">
		<!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#common').load('common.html');
            });
        </script>
    </head>
    <body>
        <div id="common"></div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel panel-custom">
                    <div class="panel-heading"><h3>Welcome</h3></div>
                    <div class="panel-body">

                        <div class="col-xs-12" style="margin-bottom:20px;">
                            First time using SquadUCSD?
                            <a href="./register.html">
                                Register here!
                            </a>
                        </div>

                        <form class="form-horizontal" role="form" method="POST">
                            <label class="col-md-4 control-label"></label> <!--Fix for register here -->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="text" class="form-control" name="login" value="" placeholder="UCSD Email Address">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Login</button>

                                    <a class="btn btn-link" href="#">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

