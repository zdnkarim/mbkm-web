<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>MBKM | Universitas Airlangga</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="light">
    <div class="wrapper vh-100">
        <div class="row-fix align-items-center h-100">
            <form method="post" action="{{ route('register') }}" class="col-lg-4 col-md-4 col-10 mx-auto text-center">
                @csrf
                <img class="mb-2" src="/img/Logo Branding UNAIR (Biru).png" width="150" height="150">
                <h1 class="mb-3"><strong>Register</strong></h1>
                <div class="form-group">
                    <label for="inputRole" class="sr-only">Register as</label>
                    <select class="form-control form-control-lg" name="role" required>
                        <option selected value="" hidden>Register as</option>
                        <option value="Outbound">Mahasiswa Outbound</option>
                        <option value="Inbound">Mahasiswa Inbound</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="name" name="name"
                        class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Name"
                        value="{{ old('name') }}" autocomplete="name" required="" autofocus="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="email" name="email"
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" autocomplete="email"placeholder="Email address" required=""
                        autofocus="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="password" name="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            placeholder="Password" required="">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword" class="sr-only">Confirm Password</label>
                        <input name="password_confirmation" type="password" id="password-confirm"
                            autocomplete="new-password" class="form-control form-control-lg"
                            placeholder="Confirm Password" required="">
                    </div>
                </div>
                <div class="checkbox mb-2">
                    <label>Have an account? <a href="/login">Login</a></label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
</body>

</html>
