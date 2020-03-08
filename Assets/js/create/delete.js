 const eliminar = ()=>{
    let id = document.getElementById('id').value;
    const data = {
          id
    };
    console.log(data);
    ajax(data, 'UserController/remove', 'post')
 }
 const ajax=(data,url,method)=>{
    let xmlHttp = new  XMLHttpRequest();
    xmlHttp.open(method,url)
    xmlHttp.setRequestHeader('Content-Type','application/json')
    xmlHttp.send(JSON.stringify(data))


    xmlHttp.onreadystatechange = function (){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            let response = xmlHttp.responseText
              if(response == 1){
                swalSuccess(data);
              }
    }
 }

}
const swalSuccess=(data)=>{
    swal({
        type: 'delete',
        title: 'delete user!',
        text: `user delete, ${data.id}`,
        timer: 2000
    })
}
//<?php echo $user->id; ?>