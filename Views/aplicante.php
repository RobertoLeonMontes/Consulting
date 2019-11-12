<h1 class="page-header">CRUD Aplicante</h1>

<form action="../Controllers/aplicante.controller.php" method="post">
        <p>
            <input type="hidden" name="Administrador" value="Administrador">
            <button >Atras</button>
        </p>
    </form>
    <a class="btn btn-primary pull-right" href="?cDos=aplicante&aDos=CrudDos">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Id Aplicante</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Nombre Aplicante</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Apellidos Aplicante</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Email Aplicante</th>
            <th style=" background-color: #5DACCD; color:#fff">Telefono Aplicante</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Id Usuario</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarAplicante() as $rDos): ?>
        <tr>
            <td><?php echo $rDos->IdApli; ?></td>
            <td><?php echo $rDos->NombreApli; ?></td>
            <td><?php echo $rDos->ApellidosApli; ?></td>
            <td><?php echo $rDos->EmailApli; ?></td>
            <td><?php echo $rDos->TelefonoApli; ?></td>
            <td><?php echo $rDos->Usu_Id; ?></td>
            <td>
                <a  class="btn btn-warning" href="?cDos=aplicante&aDos=CrudDos&IdApli=<?php echo $rDos->IdApli; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?cDos=aplicante&a=EliminarDos&IdApli=<?php echo $rDos->IdApli; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="../assets/js/datatable.js">  

</script>


</html>