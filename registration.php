<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-sm-0 offset-md-2">
            <form action="registration.php" class="custom-form" method="post">
                <h1>New Customer Registration</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" id="name" require></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" id="email" require></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" id="password" require></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" id="c_password" require></div>
                    <div class="w-100"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="phone-input-field">Phone Number</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" id="phone" require></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="alternate-phone-input-field">Alternate Phone</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" id="alter_phone" require></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="address-input-field">Address</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" id="address" require></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" require><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions and am above 18 years of age</label></div>
                <button type="submit" class="btn btn-light submit-button" name="reg_user">Register</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>