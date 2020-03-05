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
    <input  id="title" class="form-control mb-4" placeholder="Title">
    <textarea  id="description" class="form-control mb-4" size="4" placeholder="description"></textarea>
    
    <a class="btn btn-light" href="./">Cancelar</a>
    <button class="btn btn-info" type="button" onclick="guardar()">create</button>

    <div id="contentMessageTask"></div>
</form>
<!-- Default form subscription -->
<?php require_once './views/content/footer.php' ?>
<script src="<?= constant('LINKS')?>/js/create/task.js"></script>
</body>
</html>