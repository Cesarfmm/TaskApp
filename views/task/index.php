<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <?php require_once './views/content/header.php' ?>

</head>
<body>
   <?php require_once "./views/layout/navbar.php" ?>
    <div class="container-fluid my-3">
        <div class="card">
            <h4 class="card-header">Task / Dashboard</h4>
            <div class="card-body">
                <div class="card container-fluid">
                    <div class="card-header d-flex justify-content-between" >
                      <h3>Task list</h3>
                      <a href="../TaskController/create" class="btn btn-primary btn-sm">New Task</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-sm hover">
                                <thead class="black white-text">
                                    <tr>
                                        <th>ID</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>CREATED AT</th>
                                        <th>UPDATED AT</th>
                                        <th>Accions</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                    <?php foreach($this->task->list_task()as $task): ?>
                                       <tr>
                                       <td><?= $task->id ?></td>
                                       <td><?= $task->title ?></td>
                                       <td><?= $task->description ?></td>
                                       <td><?= $task->created_at ?></td>
                                       <td><?= $task->update_at ?></td>
                                       <td>
                                    <a class="btn btn-warning btn-sm" onclick="">Editar <i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" onclick=")">Eliminar <i class="fas fa-trash"></i></a>
                                        </td>
                                       </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/TaskApp/Assets/js/user/index.js"></script>
    <?php require_once './views/content/footer.php' ?>
</body>
</html>