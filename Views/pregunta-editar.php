

<ol class="breadcrumb">
  <li><a href="?c=pregunta">Volver a CRUD PREGUNTAS</a></li>
</ol>

<form IdPreg="frm-alumno" action="?c=pregunta&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="IdPreg" value="<?php echo $pregunta->IdPreg; ?>" />
      <div class="form-group">
        <label>Pregunta</label>
        <input type="text" name="Pregunta" value="<?php echo $pregunta->Pregunta; ?>" class="form-control" placeholder="Ingrese la Pregunta" required>
    </div>
    
    <div class="form-group">
        <label>Opcion Uno</label>
        <input type="text" name="OpcionUno" value="<?php echo $pregunta->OpcionUno; ?>" class="form-control" placeholder="Ingrese la Opcion Uno" required>
    </div>
    
    <div class="form-group">
        <label>Opcion Dos</label>
        <input type="text" name="OpcionDos" value="<?php echo $pregunta->OpcionDos; ?>" class="form-control" placeholder="Ingrese la Opcion Dos" required>
    </div>
    
    <div class="form-group">
        <label>Opcion Tres</label>
        <input type="text" name="OpcionTres" value="<?php echo $pregunta->OpcionTres; ?>" class="form-control" placeholder="Ingrese la Opcion Tres" required>
    </div>
     <div class="form-group">
        <label>Respuesta Correcta</label>
        <input type="text" name="RespuestaCorrecta" value="<?php echo $pregunta->RespuestaCorrecta; ?>" class="form-control" placeholder="Ingrese la Respuesta Correcta" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>