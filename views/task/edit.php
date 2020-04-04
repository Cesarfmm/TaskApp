<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8080/TaskApp/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/TaskApp/Assets/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    
    <title>Edit Task</title>
  
</head>
<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
           <a class="navbar-brand" href="">Formulario de editar Tareas</a>
    </nav>
    <?php    require_once './models/Task.php';  ?>
    <div class="container">
        <div class="row pt-5">
        <div class="col-md-3">
             <div class="card">
                <h4 class="card-header blue lighten-1 text-white">Task</h4>
                <form class="card-body">
                   <div class="form-group">
                       <input name="title" value =" <?php echo $task->title;  ?> "  id="title" class="form-control" placeholder="title" >
                   </div>
                
                   <div class="form-group">
                    <input name="description" value ="<?php echo $task->description; ?>" id="description" class="form-control" placeholder="description" >
                   </div>
                  
                    <button type="submit" class="btn btn-success btn-block" onclick="">add user new</button>
                </form>
             </div>
        </div>
    </div>
    </div>

</body>
</html>
