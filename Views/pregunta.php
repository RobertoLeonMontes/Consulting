<h1 class="page-header">CRUD PREGUNTAS</h1>
<!-- <h2>Las preguntas entre los ID 1 - 10 son para el examen de Lenguajes de programación</h2>
<h2>Las preguntas entre los ID 11 - 20 son para el examen de Base de datos</h2>
<h2>Los examenes solo pueden tener 10 preguntas</h2> -->

<form action="../Controllers/pregunta.controller.php" method="post">
        <p>
            <input type="hidden" name="Administrador" value="Administrador">
            <button >Atras</button>
        </p>
    </form>
    <a class="btn btn-primary pull-right" href="?c=pregunta&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Tipo_Examen</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Pregunta</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Opcion Uno</th>
            <th style=" background-color: #5DACCD; color:#fff">Opcion Dos</th>
            <th style=" background-color: #5DACCD; color:#fff">Opcion Tres</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Respuesta Correcta</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->IdPreg; ?></td>
            <td><?php echo $r->Tipo_Examen; ?></td>
            <td><?php echo $r->Pregunta; ?></td>
            <td><?php echo $r->OpcionUno; ?></td>
            <td><?php echo $r->OpcionDos; ?></td>
            <td><?php echo $r->OpcionTres; ?></td>
            <td><?php echo $r->RespuestaCorrecta; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=pregunta&a=Crud&IdPreg=<?php echo $r->IdPreg; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=pregunta&a=Eliminar&IdPreg=<?php echo $r->IdPreg; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="../assets/js/datatable.js">  

</script>


</html>