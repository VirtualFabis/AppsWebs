<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->codigo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Productos</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->codigo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php echo $alm->codigo; ?>" class="form-control" placeholder="Ingresa el codigo" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingresa una descripcion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Costo</label>
        <input type="text" name="costo" value="<?php echo $alm->costo; ?>" class="form-control" placeholder="Ingrese un costo" data-validacion-tipo="requerido" />
    </div>
    
      
    <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="<?php echo $alm->stock; ?>" class="form-control" placeholder="Ingrese el stock" data-validacion-tipo="requerido" />
    </div>
    
       
    <div class="form-group">
        <label>Imagen</label>
        <input type="file" name="imagen" value="<?php echo $alm->imagen; ?>" class="form-control" placeholder="Ingrese una imagen" data-validacion-tipo="requerido" />
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