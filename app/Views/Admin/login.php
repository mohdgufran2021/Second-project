<!doctype html>
<html lang="en">
<head>
    <title>SignIn</title>
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/signin.css'); ?>" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

    <label for="email" class="col-6">Email address</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>

    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>

    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>
</body>
</html>

