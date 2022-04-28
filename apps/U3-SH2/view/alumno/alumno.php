<h1 class="page-header">Producto</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno&a=Crud">Agrega un Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:200px;">IMG</th>
            <th style="width:90px;">Codigo</th>
            <th>Descripción</th>
            <th>Correo</th>
            <th style="width:120px;">Costo</th>
            <th style="width:120px;">Stock</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                  
                <td> <img src='<?php echo $r->imagen; ?>' alt="imagen traida de sql" width="200" height="200" /> </td>
                <td><h5><?php echo $r->codigo; ?>  </h5></td>
                <td><h5><?php echo $r->descripcion; ?></h5></td>
                <td><h5><?php echo $r->costo; ?></h5></td>
                <td><h5><?php echo $r->stock; ?></h5></td>
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
