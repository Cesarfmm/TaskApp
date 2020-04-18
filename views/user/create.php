<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
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
                    <!-- <input class="form-control mb-4" placeholder="Enter you id" id="id" name="id"> -->
                    <input class="form-control mb-4" placeholder="Enter your name" id="name" name="name">
                    <input class="form-control mb-4" placeholder="Enter your surname" id="surnames" name="surnames">
                    <input class="form-control mb-4" placeholder="Enter your dni" id="dni" name="dni">
                    <input type="email" class="form-control mb-4" placeholder="Enter your email" id="email" name="email">
                    <input class="form-control mb-4" placeholder="Enter your user" id="user" name="user">
                    <input type="password" class="form-control mb-4" placeholder="Enter your password" id="password" name="password">
                    <button class="btn btn-info btn-block my-4" type="button" onclick="guardar()">create</button>
                </form>
            
            </div>

            <div id="contentMessage">
                
            </div>
        </div>
    </div>
  
<?php require_once './views/content/footer.php' ?>
<script>
    function guardar(){
        let name = document.getElementById('name').value, surnames = document.getElementById('surnames').value, dni = document.getElementById('dni').value,
            email = document.getElementById('email').value, user = document.getElementById('user').value, password = document.getElementById('password').value

        let data = {
            name, surnames, dni, email, user, password
        }

        let ajax = new XMLHttpRequest();
        ajax.open('post', '../UserController/store')
        ajax.setRequestHeader('Content-Type', 'application/json')
        ajax.send(JSON.stringify(data)) 

        ajax.onreadystatechange = ()=>{
            if(ajax.readyState == 4 && ajax.status == 200){
                let resp = JSON.parse(ajax.responseText);
                resp.error ? renderMessage(resp.error, 'Error save user') : renderMessage(resp.error, 'User save successfully')
                
            }
        }
    }

    function renderMessage(status, message){
        let contentMessage = document.getElementById('contentMessage');

        let showMessage = `
                <div class="alert alert-${!status ? 'success' : 'danger'}">
                    <p>${message}</p>
                </div>
        `;
        contentMessage.innerHTML = showMessage;
        setTimeout(()=>{
            contentMessage.innerHTML = null
            location.href= '../UserController/index';
        },2000);
    }
</script>

</body>
</html>