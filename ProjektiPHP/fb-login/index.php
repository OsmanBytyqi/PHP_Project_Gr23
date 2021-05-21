<?php require 'fb-init.php';?>
<!DOCTYPE html>
<html >
<head>
    <title> Login in with fb</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0-alpha4/mdb.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="css/mdb.min.css"> -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</head>
<body>
<?php if(isset($_SESSION['access_token'])): ?>
<div class="container mt-4">
    <?php echo "Hello, " .$user->getField('name'); ?>
    <a href="logout.php">Logout</a>
</div>
<?php else: ?>
<!--<a href="--><?php //echo $login_url; ?><!--" title="">Login With Facebook</a>-->
<div class="container w-50 mt-5">
    <div id="loader" class=""><div class="loader" ></div></div>
    <form method="post" id="form-validation" name="form" class="shadow-lg bg-light p-5 rounded w-75 ml-5">
        <?php //echo $message; ?>
        <!-- Register buttons -->
        <div class="text-center mb-3">
            <a href="<?php echo $login_url; ?>" class="btn btn-primary"><i class="fab fa-facebook-f mr-2"></i>Login With Facebook</a>
            <button type="button" class="btn btn-danger"><i class="fab fa-google mr-2"></i>Login With Google</button>
            <h4 class="mt-2 text-danger">OR</h4>
            <hr class="m-0">
        </div>
        <h3 class="text-secondary mb-4">Sign Up</h3>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1" name="fname"  class="form-control form-control">
                    <label class="form-label" for="form3Example1" style="margin-left: 0px;">First name</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" name="lname" class="form-control">
                    <label class="form-label" for="form3Example2" style="margin-left: 0px;">Last name</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control">
            <label class="form-label" for="form3Example3" style="margin-left: 0px;">Email address</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>
        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form3Example4" name="password" class="form-control">
            <label class="form-label" for="form3Example4" style="margin-left: 0px;">Password</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>
        <button type="submit" class="btn btn-secondary btn-block btn-sm" name="submit" id="submit">Submit</button>
    </form>
</div>
</body>
</html>
<?php endif; ?>
