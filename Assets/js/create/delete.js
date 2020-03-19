 function eliminar (id){
    const data = {
          id
    };
    
    swalSucces(data)
 }


 const ajax=(data,url,method)=>{
    let xmlHttp = new  XMLHttpRequest();
    xmlHttp.open(method,url)
    xmlHttp.setRequestHeader('Content-Type','application/json')
    xmlHttp.send(JSON.stringify(data))
    
    xmlHttp.onreadystatechange = function (){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
          let resp = xmlHttp.responseText
          console.log(xmlHttp.responseText, "resp backend")
          if(resp){
            swal(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
          else{
            swal(
              'Cancel!',
              'Your file not has been deleted.',
              'error'
            )
          }
          
      }
    }
}

const swalSucces =(data)=>{
   swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      console.log(result)
      if (result) {
        ajax(data, 'UserController/remove', 'post')
        
      }

    })
    /*.catch(err=>{
      swal(
        'Cancel!',
        'Your file not has been deleted.',
        'error'
      )
    
    })*/
  
}