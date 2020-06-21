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
            <p class="h4 mb-4">Welcome</p>
        </div>
        <div class="card card-body container">
            <div class="text-center p-5">
                <form>
                    <!-- Email -->
                    <input type="email" class="form-control mb-4" placeholder="Enter you email" id="email" name="email">
                    <input type="password" class="form-control mb-4" placeholder="Enter you Password" id="password" name="password">
                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="custom-control custom-checkbox">
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                          
                        </div>
                    </div>
                    <button class="btn btn-info btn-block my-4" type="button" onclick="login()">LOG IN</button>
               
                </form>
            
            </div>
        </div>
    </div>
<?php require_once './views/content/footer.php' ?>
<script src="<?= constant('LINKS')?>/js/login/index.js"></script>
</body>
</html>