<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN 'N OUT</title>
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <form class="form-login" action="" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">Order </span>
                <span class="font-weight-bold mx-2">IN</span>
                <span class="font-weight-light">Org</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="<?= isset($email) ? $email : '' ?>" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" placeholder="E-mail" autofocus>
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" placeholder="Password" autofocus>
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Login</button>
            </div>
        </div>
    </form>
</body>
</html>