const guardar = () => {
     let id =document.getElementById('id').value,  title = document.getElementById('title').value,
     description = document.getElementById('description').values, created_at = document.getElementById('created_at').value,
     update_at = document.getElementById('update_at').value;
      
     const data={
        id,
        title,
        description,
        created_at,
        update_at
     }
     ajax(data, '','');
}
const ajax = (data, url, method)=>{
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open(method,url)
    xmlHttp.setRequestHeader('Content-Type','application/json')
    xmlHttp.send(JSON.stringify(data))
    
}