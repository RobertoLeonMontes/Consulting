

<ol class="breadcrumb">
  <li><a href="?cDos=aplicante">Volver a CRUD APLICANTE</a></li>
</ol>

<form IdPreg="frm-alumnoDos" action="?cDos=aplicante&aDos=GuardarDos" method="post" enctype="multipart/form-data">
    <input type="hidden" name="IdApli" value="<?php echo $aplicante->IdApli; ?>" />
      <div class="form-group">
        <!-- <label>IdApli</label>
        <input type="text" name="IdApli" value="</?php echo $pregunta->Pregunta; ?>" class="form-control" placeholder="Ingrese el " required>
    </div> -->
    
    <div class="form-group">
        <label>Nombre del Aplicante</label>
        <input type="text" name="NombreApli" value="<?php echo $aplicante->NombreApli; ?>" class="form-control" placeholder="Ingrese el nombre del aplicante" required>
    </div>
    
    <div class="form-group">
        <label>Apellidos del Aplicante</label>
        <input type="text" name="ApellidosApli" value="<?php echo $aplicante->ApellidosApli; ?>" class="form-control" placeholder="Ingrese los Apellidos del Aplicante" required>
    </div>
    
    <div class="form-group">
        <label>Email del Aplicante</label>
        <input type="text" name="EmailApli" value="<?php echo $aplicante->EmailApli; ?>" class="form-control" placeholder="Ingrese el Email del Aplicante" required>
    </div>
     <div class="form-group">
        <label>Telefono del Aplicante</label>
        <input type="text" name="TelefonoApli" value="<?php echo $aplicante->TelefonoApli; ?>" class="form-control" placeholder="Ingrese el Telefono del Aplicante" required>
    </div>
    <div class="form-group">
        <label>Id de Usuario</label>
        <input type="text" name="Usu_Id" value="<?php echo $aplicante->Usu_Id; ?>" class="form-control" placeholder="Ingrese el Id de usuraio" required>
    </div>        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumnoDos").submit(function(){
            return $(this).validate();
        });
    })
</script>