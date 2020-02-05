<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIG IN</title>
    <?php require_once './views/content/header.php' ?>
</head>
<body>
<form class="text-center border border-light p-5" action="#!">
    <p class="h4 mb-4">SIG IN</p>
    <input type="ID" id="defaultLoginFormID" class="form-control mb-4" placeholder="ID">
    <input type="NAME" id="defaultLoginFormNAME" class="form-control mb-4" placeholder="NAME">
    <input type="SURNAME" id="defaultLoginFormSURNAME" class="form-control mb-4" placeholder="SURNAME">
    <input type="DNI" id="defaultLoginFormDNI" class="form-control mb-4" placeholder="DNI">
    <input type="USER" id="defaultLoginFormUSER" class="form-control mb-4" placeholder="USER">
    <input type="EMAIL" id="defaultLoginFormEMAIL" class="form-control mb-4" placeholder="EMAIL">
    <input type="USER" id="defaultLoginFormUSER" class="form-control mb-4" placeholder="USER">
    <input type="PASSWORD" id="defaultLoginFormPASSWORD" class="form-control mb-4" placeholder="PASSWORD">
    <div class="d-flex justify-content-around">
        </div>
    
    </div>
    <button class="btn btn-info btn-block my-4" type="submit" >SIG IN</button>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>
</form>
<?php require_once './views/content/footer.php' ?>

 
</body>
</html>  