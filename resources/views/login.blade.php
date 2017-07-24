<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    {{ Html::style('bower/bootstrap/dist/css/bootstrap.css') }}
    {{ Html::style('css/login/style_login.css') }}
</head>
<body>
    <div class="container">
        <div class="row" id="pwd-container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <section class="login-form">
                    <form method="post" action="#" role="login">
                        <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
                        <input type="email" name="email" placeholder="Email" required class="form-control input-lg" placeholder="joestudent@gmail.com" />
                        <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
                        <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                        <div>
                          <a href="#">Create account</a> or <a href="#">reset password</a>
                      </div>
                    </form>
                    <div class="form-links">
                        <a href="#">www.hairsalon.com</a>
                    </div>
                </section>  
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    {{ Html::script('bower/jquery-2.1.4.min/index.js') }}
    {{ Html::script('js/frontend/login.js')}}
    {{ Html::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
</body>
</div>
