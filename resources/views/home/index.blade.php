@extends('components.corpo')
@section('corpo')
    
@php
   $total = 0 
@endphp
@foreach ($itens as $item)
@php $total += $item->valor * $item->quantidade; @endphp
@endforeach
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Seja bem vindo!</h3>
            <h6 class="font-weight-normal mb-0">Nas últimas horas você realizou <span class="text-primary">{{count($itens)}} vendas!</span></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Total hoje</p>
                <p class="fs-30 mb-2">4006</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total semana</p>
                <p class="fs-30 mb-2">61344</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Total mês</p>
                <p class="fs-30 mb-2">34040</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Saldo</p>
                <p class="fs-30 mb-2">R$ {{$total}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Produtos mais vendidos</p>
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>  
                </thead>
                <tbody>
                  @for ($i = 0; $i < 7; $i++)
                  <tr>
                    <td>Search Engine Marketing</td>
                    <td class="font-weight-bold">R$362</td>
                    <td>21 Sep 2018</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Pago</div></td>
                  </tr> 
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Últimos Pedidos</h4>
            <p class="card-description">
              Veja abaixo os seus últimos pedidos
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
                  @foreach ($itensPedido as $item)
                  <tr>
                    <td>
                      {{$item->id}}
                    </td>
                    <td>
                      {{$item->nome}}
                    </td>
                    <td>
                      {{$item->quantidade}}
                    </td>
                    <td>
                      R$ {{$item->valor * $item->quantidade}}
                    </td>
                    <td>
                      {{$item->dt_item}}
                    </td>
                  </tr>
                  @endforeach                  
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
    </div>
  </footer> 
  <!-- partial -->
</div>



  @endsection