@extends('components.corpo')
@section('corpo')
    
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

    
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Seus produtos</h4>
              <p class="card-description">
                Veja abaixo o controle de seus produtos
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        Imagem
                      </th>
                      <th>
                        Nome produto
                      </th>
                      <th>
                        Categoria
                      </th>
                      <th>
                        Valor
                      </th>
                      <th>
                        Data Criação
                      </th>
                      <th>
                        Ações
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($listaProdutos as $item)
                    <tr>
                      <td class="py-1">
                        <img src="{{$item->foto}}" alt="image"/>
                      </td>
                      <td>
                        {{$item->nome}}
                      </td>
                      <td>
                        Menino

                      </td>
                      <td>
                        R$ {{$item->valor}}
                      </td>
                      <td>
                        {{$item->created_at}}
                      </td>
                      <td>
                        <a href="">Excluir</a> / <a href="">Editar</a>
                      </td>
                    </tr>
                    @endforeach
                    
                   
                  </tbody>
                </table>
              </div>
            <div class="container">
              @component('vendor.pagination.bootstrap-5', ['paginator' => $listaProdutos])@endcomponent
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