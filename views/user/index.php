<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <?php require_once './views/content/header.php' ?>
</head>
<body>
   <?php require_once "./views/layout/navbar.php" ?>
    <div class="container-fluid my-3">
        <div class="card">
            <h4 class="card-header">User / Dashboard</h4>
            <div class="card-body">
                <div class="card container-fluid">
                    <div class="card-header d-flex justify-content-between">
                        <h3>User list</h3>
                        <a href="../UserController/create" class="btn btn-primary btn-sm">New user</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-sm hover">
                                <thead class="black white-text">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>DNI</th>
                                        <th>email</th>
                                        <th>user</th>
                                        <th>Accions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->user->list_user() as $user): ?>
                                        <tr>
                                            <td><?= $user->id ?></td>
                                            <td><?= $user->name ?></td>
                                            <td><?= $user->surnames ?></td>
                                            <td><?= $user->dni ?></td>
                                            <td><?= $user->email ?></td>
                                            <td><?= $user->user ?></td> 
                                            <td>
                                            <button class="btn btn-danger btn-sm" onclick="eliminar(<?= $user->id ?>)">Eliminar <i class="fas fa-trash"></i></button>
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
    <script src="/TaskApp/Assets/js/create/delete.js"></script>
    <script src="/TaskApp/Assets/js/user/index.js"></script>
   
    <?php require_once './views/content/footer.php' ?>

      
</body>
</html>
