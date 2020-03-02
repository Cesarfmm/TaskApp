<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <?php require_once './views/content/header.php' ?>
   
 
</head>

<body>
    <div class="card">
        <div class="card card-header mt-3 text-center">
            <p class="h4 mb-4">Create User</p>
        </div>
        <div class="card card-body container">
            <div class="text-center p-5">
                <form>
                    <input  class="form-control mb-4" placeholder="Enter you id" id="id" name="id">
                    <input  class="form-control mb-4" placeholder="Enter your name" id="name" name="name">
                    <input  class="form-control mb-4" placeholder="Enter your surname" id="surname" name="surname">
                    <input  class="form-control mb-4" placeholder="Enter your dni" id="dni" name="dni">
                    <input class="form-control mb-4" placeholder="Enter your email" id="email" name="email">
                    <input class="form-control mb-4" placeholder="Enter your user" id="user" name="user">
                    <input  class="form-control mb-4" placeholder="Enter your password" id="password" name="password">
                    <button class="btn btn-info btn-block my-4" type="button" onclick="guardar()"  href="UserController"; >create</button>
                </form>
            
            </div>
        </div>
    </div>
  
<?php require_once './views/content/footer.php' ?>
</body>
</html>