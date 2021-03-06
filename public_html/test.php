
<!DOCTYPE html>
<html>
<head>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <!--   <link rel="stylesheet" type="text/css" href="css/style.css">-->
    <!--header-->

<?php include 'components/login-modal.html';?>
</head>
<body>


<div class="container">
    <div class="row">

        <!-- Signin & Signup -->
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".login-register-form">
            Login - Registration Modal
        </a>

        <!-- Login / Register Modal-->
        <div class="modal fade login-register-form" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login-form" class="tab-pane fade in active">
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </div>
                            <div id="registration-form" class="tab-pane fade">
                                <form action="/">
                                    <div class="form-group">
                                        <label for="name">Your Name:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="newemail">Email:</label>
                                        <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                                    </div>
                                    <div class="form-group">
                                        <label for="newpwd">Password:</label>
                                        <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                                    </div>
                                    <button type="submit" class="btn btn-default">Register</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!--                                    <div class="modal-footer">-->
                    <!--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <!--                                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>









<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

<footer>

</footer>
</html>