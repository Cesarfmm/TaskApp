const ajax = (data, url, method)=>{
   let xmlHttp = new XMLHttpRequest();
   xmlHttp.open(method,url)
   //co  esta instruccion se abre y se manda especificaciones method y la url a donde va a ir los archivos
   xmlHttp.setRequestHeader('Content-Type','application/json')
   //aca establecemos la solicitud de tipo aplicacion jason 
   xmlHttp.send(JSON.stringify(data))
   //con este enviamos los datos y le pasamos el parametro de dichos objetos y los convertimos
   xmlHttp.onreadystatechange = ()=>{
     if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
        
        let resp = JSON.parse(xmlHttp.responseText)
        
        resp.error ? renderMessage(resp.error, 'error save Task') :  renderMessage(resp.error, 'Task save successfully')
     }
   } 
  
}

const guardar = () => {
     
     let title = document.getElementById('title').value,
     description = document.getElementById('description').value;

     let data = {
        title,
        description
     };
     ajax(data, '../TaskController/store','post');
}

function renderMessage(status, message){
   let contentMessage = document.getElementById('contentMessageTask')
   let showMessage = `
   <div class="alert alert-${!status ? 'success' : 'danger'}">
       <p>${message}</p>
   </div>
   `;
   contentMessage.innerHTML=showMessage;
   setTimeout(()=>{
       contentMessage.innerHTML = null
       location.href= '../TaskController/index';
   },2000);
}
