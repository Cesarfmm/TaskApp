const login = ()=>{
    let email = document.getElementById('email').value, 
        password = document.getElementById('password').value;

    const data = {
        email,
        password
    };
    
    ajax(data, 'LoginController/login', 'post')
}

const ajax = (data, url, method)=>{
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open(method,url)
    xmlHttp.setRequestHeader('Content-Type','application/json')
    xmlHttp.send(JSON.stringify(data))
    
    xmlHttp.onreadystatechange = function (){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            let response = xmlHttp.responseText
            
            if(response == 1){
                swalSuccess(data)

                setTimeout(() => {
                    location = "UserController"
                }, 2000); 
            }else{
                swalError()
            }   
        }
    }
}

const swalSuccess = (data)=>{
    swal({
        type: 'success',
        title: 'Success!',
        text: `Welcome, ${data.email}`,
        timer: 2000
    })
}

const swalError = ()=>{
    swal({
        type: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
      })
}
