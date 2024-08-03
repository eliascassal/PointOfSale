function MNuevoUsuario(){
  $("#modal-default").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/usuario/FNuevoUsuario.php",
    data:obj,
    success:function(data){
      $("#content-default").html(data)
    }

  })


}

function regUsuario(){

  var formData=new FormData($("#FRegUsuario")[0])

  if(formData.get("password")==formData.get("vrPassword")){

    $.ajax({
      type:"POST",
      url:"controlador/usuarioControlador.php?ctrRegUsuario",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){
console.log(data)
        if(data="ok"){

           Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'El usuario ha sido registrado',
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