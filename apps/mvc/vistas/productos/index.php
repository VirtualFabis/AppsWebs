<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1> Datos de la Tabla</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tablas</li>
              <li class="active"><a href="#">Tabla</a></li>
            </ul>
          </div>
          <div><a class="btn btn-primary btn-flat" href="?c=producto&a=FormCrear"><i class="fa fa-lg fa-plus"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Codigo</th>
                      <th>Descripción</th>
                      <th>Precio</th>
                      <th>Stock</th>
                      <th style="width: 110px;">Botones</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach($this->modelo->Listar() as $r):?>
                    <tr>
                      <td><?=$r->pro_id?></td>
                      <td><?=$r->pro_nom?></td>
                      <td><?=$r->pro_mar?></td>
                      <td>$<?=$r->pro_pre?></td>
                      <td><?=$r->pro_can?></td>

                      <td>
                          <a class="btn btn-info btn-flat" href="?c=producto&a=FormCrear&id=<?=$r->pro_id?>"><i class="fa fa-lg fa-refresh"></i></a>

                          <a class="btn btn-warning btn-flat" href="?c=producto&a=Borrar&id=<?=$r->pro_id?>"><i class="fa fa-lg fa-trash"></i></a>

                    
                    </td>
                    </tr>
                <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>