
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <title>Document</title>
    
</head>
<body>
    <br><br><br>
<div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                   
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h5>WELCOME</h5>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                @if (Session::get('info'))
                                <div class="alert alert-info">
                                    {{ Session::get('info') }}
                                </div>
                                 @endif  
                                 @if (Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                                 @endif
                            <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-envelope"></i> Email Address</label>
                                <input type="email" class="form-control form-control-sm" name="email">
                            </div>

                             <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                                <input type="password" class="form-control form-control-sm" name="password">
                            </div>

                             <div class="login-row row forrr no-margin">
                               <p> <input type="checkbox"> Remember Me</p>
                               <p><a class="vgh" href="{{ route('forgot.password.form') }}">Forget Password?</a></p>
                            </div>

                             <div class="login-row btnroo row no-margin">
                               <button class="btn btn-primary btn" type="submit"> LOGIN</button>
                            </div>
                            </form>
                            <div class="login-row donroo row no-margin">
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-5 col-md-6 img-box">
                        <img src="https://res.cloudinary.com/dzrkaock9/image/upload/v1656592197/logo-login_ue9pzq.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
</script>





