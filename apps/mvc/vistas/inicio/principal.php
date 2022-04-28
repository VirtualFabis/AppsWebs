<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Inicio</h1>
            <p>Pagina pa ver y regustar productos:</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Inicio</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Cantidad Productos</h3>
                <h2><?php $p=$this->modelo->Cantidad()?>
                <?=$p->Cantidad?>   
              </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h4 class="card-title">Copyright @Fabis Jaeger</h4>
              
            </div>
          </div>
        </div>
      </div>
    </div>