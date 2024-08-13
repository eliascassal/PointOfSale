function MNuevoCliente(){
  $("#modal-default").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/Cliente/FNuevoCliente.php",
    data:obj,
    success:function(data){
      $("#content-default").html(data)
    }

  })


}

function regCliente(){

  var formData=new FormData($("#FRegUsuario")[0])

    $.ajax({
      type:"POST",
      url:"controlador/clienteControlador.php?ctrRegCliente",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data="ok"){

          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'El Cliente ha sido registrado',
            timer: 1000
          })
          setTimeout(function(){
            location.reload()
          },1200)

        }else{
          Swal.fire({
            title: "Error!",
            icon: "error",
            showConfirmButton: false,
            timer: 1000
          })
        }

      }

    })

  }

function MEditCliente(id){

  $("#modal-default").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/cliente/FEditCliente.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-default").html(data)
    }

  })
}

function editCliente(){

  var formData=new FormData($("#FEditCliente")[0])

  if(formData.get("password")==formData.get("vrPassword")){

    $.ajax({
      type:"POST",
      url:"controlador/clienteControlador.php?ctrEditcliente",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data="ok"){

          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'El Cliente ha sido actualizado',
            timer: 1000
          })
          setTimeout(function(){
            location.reload()
          },1200)

        }else{
          Swal.fire({
            title: "Error!",
            icon: "error",
            showConfirmButton: false,
            timer: 1000
          })
        }

      }

    })

  }

}

function MEliCliente(id){
  var obj={
    id:id
  }

  Swal.fire({
    title:"Estas seguro de eliminar este Cliente?",
    showDenyButton:true,
    showCancelButton:false,
    confirmButtonText:'Confirmar',
    denyButtonText:'Cancelar'
  }).then((result)=>{
    if(result.isConfirmed){
      $.ajax({
        type:"POST",
        url:"controlador/clienteControlador.php?ctrEliCliente",
        data:obj,
        success:function(data){

          if(data=="ok"){
            location.reload()
          }else{
            Swal.fire({
              icon: 'error',
              showConfirmButton: false,
              title: 'Error',
              text:'El cliente no puede ser eliminado',
              timer: 1000
            })
          }
        }
      })
    }
  })
}