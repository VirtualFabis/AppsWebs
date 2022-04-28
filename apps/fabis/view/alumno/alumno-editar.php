<h1 class="page-header">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('Codigo') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Alumnos</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('Codigo') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label>Codigo</label>
        <input type="numer" name="Codigo" value="<?php echo $alm->__GET('Codigo'); ?>" class="form-control" placeholder="Ingrese el codigo" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="Descripcion" value="<?php echo $alm->__GET('Descripcion'); ?>" class="form-control" placeholder="Ingrese laDescripcion" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="numer" name="Precio" value="<?php echo $alm->__GET('Precio'); ?>" class="form-control" placeholder="Ingrese el precio" data-validacion-tipo="requerido|min:3" />
    </div>
    
   
    <div class="form-group">
        <label>Stock</label>
        <input type="numer" name="Stock" value="<?php echo $alm->__GET('Stock'); ?>" class="form-control" placeholder="Ingrese el Stock" data-validacion-tipo="requerido|min:3" />
    </div>
    
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Foto</label>
                <input type="hidden" name="Foto" value="<?php echo $alm->__GET('Foto'); ?>" />
                <input type="file" name="Foto" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('Foto') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('Foto'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>