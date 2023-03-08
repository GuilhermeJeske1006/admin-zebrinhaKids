@extends('components.corpo')
@section('corpo')
    
<div class="main-panel ">
    <div class="content-wrapper">
      <div class="row ">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Seus Pedidos</h4>
                <p class="card-description">
                  Veja abaixo os seus pedidos
                </p>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Id
                        </th>
                        <th>
                          Produto
                        </th>
                        <th>
                          Quantidade
                        </th>
                        <th>
                          Valor
                        </th>
                        <th>
                          Data pedido
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <td>
                          gr
                        </td>
                        <td>
                        gr
                        </td>
                        <td>
                        12
                        </td>
                        <td>
                          R$ 22
                        </td>
                        <td>
                          222
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    

      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>



  @endsection