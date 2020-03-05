const guardar = () => {
     let title = document.getElementById('title').value,
     description = document.getElementById('description').value, 
     created_at = document.getElementById('created_at').value,
     update_at = document.getElementById('update_at').value
      
     let data={
        title,
        description,
        created_at,
        update_at
     }
     ajax(data, '../TaskController/store','post');
}
console.log(data)
const ajax = (data, url, method)=>{
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open(method,url)
    //co  esta instruccion se abre y se manda especificaciones method y la url a donde va a ir los archivos
    xmlHttp.setRequestHeader('Content-Type','application/json')
    //aca establecemos la solicitud de tipo aplicacion jason 
    xmlHttp.send(JSON.stringify(data))
    //con este enviamos los datos y le pasamos el parametro de dichos objetos y los convertimos
    ajax.onreadystatechange =()=>{
      if(ajax.readyState == 4 && ajax.status == 200){
         let resp= JSON.parse(ajax.responseText)
         resp.error ? renderMessage(resp.error, 'error save Task') :  renderMessage(resp.error, 'Task save successfully')
      }
    } 
   
}
/*function renderMessage(status, message){
   let contentMessage =document.getElementById('contentMessage')
   let showMessage = `
   <div class="alert alert-${!status ? 'success' : 'danger'}">
       <p>${message}</p>
   </div>
   `;
   contentMessage.innerHTML=showMessage;
    setTimeout(()=>{
       contentMessage.innerHTML = null
       location.href= '../TaskController';
       },2000);
}*/
