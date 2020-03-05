<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New task</title>
    <?php require_once './views/content/header.php' ?>
</head>
<body>
<!-- Default form subscription -->
<form class="text-center border border-light p-5" action="">

    <p class="h4 mb-3">New Task</p>
    <input id="Id" class="form-control mb-4" placeholder="Id">
    <input  id="title" class="form-control mb-4" placeholder="Title">
    <input  id="description" class="form-control mb-4" placeholder="Description">
    <input  id="Created At" class="form-control mb-4" placeholder="Created At">
    <input  id="update At" class="form-control mb-4" placeholder="Update  At">
    <button class="btn btn-info btn" type="submit" onclick="">create</button>


    <div id="contentMessage">
           
    </div>
</form>
<!-- Default form subscription -->
<?php require_once './views/content/footer.php' ?>
</body>
</html>