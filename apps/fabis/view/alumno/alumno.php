<h1 class="page-header">Producto</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno&a=Crud">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:80px;"></th>
            <th style="width:180px;">Codigo</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th style="width:120px;">Stock</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    

    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td>
                <?php if($r->__GET('Foto') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('Foto'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td><?php echo $r->__GET('Codigo'); ?></td>
            <td><?php echo $r->__GET('Descripcion'); ?></td>
            <td><?php echo $r->__GET('Precio'); ?></td>
            <td><?php echo $r->__GET('Stock'); ?></td>
            <td>
                <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('Este registro no se borrara a menos de que el Stock sea 0');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
    
</table> 
