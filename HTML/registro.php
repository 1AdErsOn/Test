<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Web</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container-fluid">
        <h1 class="text-center py-3">My First Bootstrap Page</h1>
    </div> 
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ingreso.html">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mt-3">          
        <div class="card">
            <form action="userAccount.php" method="post">
                <input type="text" name="first_name" placeholder="FIRST NAME" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required="">
                <input type="text" name="last_name" placeholder="LAST NAME" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required="">
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required="">
                <input type="password" name="password" placeholder="PASSWORD" required="">
                <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
                <div class="send-button">
                    <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
                </div>
            </form>
        </div>
    </div>
</body>
</html>