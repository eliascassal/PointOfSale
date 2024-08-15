<form action="" id="FRegCliente">
  <div class="modal-header bg-primary">
    <h4 class="modal-title">Registro nuevo Cliente</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Razon social</label>
          <input type="text" class="form-control" name="rsocial" id="rsocial">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">NIT/CI</label>
          <input type="text" class="form-control" name="nit" id="nit">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion" id="direccion">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="ncliente" id="ncliente">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Telefono </label>
          <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">E-mail</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
      </div>
    </div>


  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

<script>
  $(function() {
    $.validator.setDefaults({
      submitHandler: function() {
        regCliente()
      }
    });

    $('#FRegCliente').validate({
      rules: {
        rsocial: {
          required: true,
          minlength: 5,
        },
        nit: {
          required: true,
          minlength: 7
        },
        nombre: {
          required: true,
          minlength: 5
        },
        emailbre: {
          required: true,
          email: true
        },
      },

      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>