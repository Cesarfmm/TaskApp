 function eliminar (id){
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
          let resp = xmlHttp.responseText
          console.log(resp);
          if(resp == 1){
            swalSucces(data);

            setTimeout(() => {
               location = "UserController"
           }, 3000); 
          }
         
           
    }
 }

}

const swalSucces =(data)=>{
   swal({
      type: 'success',
      title: 'Success!',
      text: `Delete User, ${data.id}`,
      timer: 3000
  })
}