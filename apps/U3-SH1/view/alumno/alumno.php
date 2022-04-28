<h1 class="page-header">Alumnos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno&a=Crud">Nuevo alumno</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th style="width:120px;">Sexo</th>
            <th style="width:120px;">Nacimiento</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><h5><?php echo $r->Nombre; ?>  </h5></td>
            <td><h5><?php echo $r->Apellido; ?></h5></td>
            <td><h5><?php echo $r->Correo; ?></h5></td>
            <td><h5><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></h5></td>
            <td><h5><?php echo $r->FechaNacimiento; ?></h5></td>
            <td>
                <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>"><h5>Editar</h5></a>
            </td>
            <td>
               <h5> <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a></h5>
            </td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
