 const eliminar = ()=>{
    let id= document.getElementById('id').value;
    const data = {
          id
    };
    console.log(data);
    ajax(data, 'LoginController/login', 'post')
 }
 const ajax=(data,url,method)=>{
    let xmlHttp =new xmlHttp();
    xmlHttp.open(method,url)
    xmlHttp.setRequestHeader('Content-Type','application/json')
    xmlHttp.send(JSON.stringify(data))


    xmlHttp.onreadystatechange = function (){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            let response = xmlHttp.responseText
              if(response ==1){
                swalSuccess(data);
              }
    }
 }

}
const swalSuccess=(data)=>{
    swal({
        type: 'success',
        title: 'Success!',
        text: `Welcome, ${data.id}`,
        timer: 2000
    })
}