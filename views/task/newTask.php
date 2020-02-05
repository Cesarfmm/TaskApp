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

    <p class="h4 mb-4">New Task</p>
    <p>  </p>
    <input type="Id" id="Id" class="form-control mb-4" placeholder="Id">
    <input type="Title" id="title" class="form-control mb-4" placeholder="Title">
    <input type="Description" id="description" class="form-control mb-4" placeholder="Description">
    <input type=" Created At" id="Created At" class="form-control mb-4" placeholder="Created At">
    <input type="Update At" id="update At" class="form-control mb-4" placeholder="Update  At">
    <button class="btn btn-info btn" type="submit">Save Task</button>
    <button class="btn btn-info btn" type="submit">No Save</button>
</form>
<!-- Default form subscription -->
<?php require_once './views/content/footer.php' ?>
</body>
</html>