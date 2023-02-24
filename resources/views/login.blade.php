
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/all.css') }}">
    <link href="{{ url('/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/pages/login.css') }}" />
    <link href="{{ url('/vendors/iCheck/css/square/blue.css') }}" rel="stylesheet" />
    <!-- end of page level css -->

    <style>
        .help-block {
            color: #a94442;
        }

        .change_link .btn-warning {
            color: #fff;
        }

        #wrapper label {
            color: rgb(64, 92, 96);
            font-weight: 700;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12 mx-auto">
                <div id="notific">
                    <!-- <div class="alert alert-success alert-dismissable margin5">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success:</strong> You have successfully logged out!
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row vertical-offset-100">
            <!-- Notifications -->
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4 mx-auto">

                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="https://demo.joshadmin.com/admin/signin" autocomplete="on" method="post" role="form"
                                id="login_form" class="my-3">
                                <h3>Log In</h3>
                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="email" class="uname control-label"> <i
                                            class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email" name="email" type="email" placeholder="E-mail"
                                        value="" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i
                                            class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password" name="password" type="password"
                                        placeholder="Enter a password" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Log In" class="btn btn-success btn-block" />
                                </p>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-warning btn-sm" disabled>Forgot
                                            password
                                        </button>
                                    </a>
                                    <a href="#toregister">
                                        <button type="button" id="signup" class="btn btn-success btn-sm"
                                            style="float:right;">Sign Up
                                        </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="{{ route('signup') }}" autocomplete="on" method="post" role="form"
                                id="register_here">
                                {{ csrf_field() }}
                                <h3>Sign Up</h3>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="first_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        First Name
                                    </label>
                                    <input id="first_name" name="first_name" required type="text" placeholder="John"
                                        value="" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="last_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Last Name
                                    </label>
                                    <input id="last_name" name="last_name" required type="text" placeholder="Doe"
                                        value="" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="email1" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email1" name="email" value="" required type="email"
                                        placeholder="mysupermail@mail.com" maxlength="50"/>
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="email_confirm" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Confirm E-mail
                                    </label>
                                    <input id="email_confirm" name="email_confirm" required type="email"
                                        placeholder="mysupermail@mail.com" value="" maxlength="50"/>
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="phone_number" class="youphone">
                                        <i class="livicon" data-name="phone_number" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Phone Number
                                    </label>
                                    <input id="phone_number" name="phone_number" required type="text"
                                        placeholder="081233456786" value="" maxlength="13"/>
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="password1" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password1" name="password" required type="password"
                                        placeholder="Password" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="password_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Confirm Password
                                    </label>
                                    <input id="password_confirm" name="password_confirm" required type="password"
                                        placeholder="Confirm Password" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success btn-block" value="Sign Up" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-warning btn-sm">Back
                                        </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="https://demo.joshadmin.com/admin/forgot-password" autocomplete="on" method="post"
                                role="form" id="reset_pw">
                                <h3>Forgot Password</h3>
                                <p style="font-size:14px !important;">
                                    Enter your email address below and we'll send a special reset password link to your
                                    inbox.
                                </p>
                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="email2" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Your email
                                    </label>
                                    <input id="email2" name="email" required type="email" placeholder="your@mail.com"
                                        value="" />
                                    <div class="col-sm-12">
                                        
                                    </div>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Reset Password" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-warning btn-sm">Back
                                        </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ url('/js/admin.js') }}" type="text/javascript"></script>
    <script src="{{ url('/js/pages/login.js') }}" type="text/javascript"></script>
    <script src="{{ url('/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
</body>

</html>
