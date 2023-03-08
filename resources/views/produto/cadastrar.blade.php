
@extends('components.corpo')
@section('corpo')
@section('scriptjs')

<script>
function adicionarTamanho(){
  let html = `<div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tamanho</label>
                      <div class="col-sm-9">
                        <input name="tamanho" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Quantidade do tamanho</label>
                      <div class="col-sm-9">
                        <input type="number" name="qtdTamanho" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button onclick="adicionarTamanho()" class="btn btn-primary mb-2"><i class="icon-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>`

  let div = document.createElement('div');
  div.innerHTML = html;
  document.getElementById('tamanho').appendChild(div);
}
</script>

@endsection
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cadastro de produto</h4>
              <form method="POST" action="{{route('cadastrar')}}" class="form-sample">
                @csrf
                <p class="card-description">
                  Informações iniciais
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nome do produto</label>
                      <div class="col-sm-9">
                        <input type="text" name="nome" required class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Valor do produto</label>
                      <div class="col-sm-9">
                        <input type="text" name="valor" required class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Categoria</label>
                      <div class="col-sm-9">
                        <select name="categoria_id" class="form-control">
                          @foreach ($listaCategorias as $categoria)
                          <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Imagem Capa</label>
                        <div class="col-sm-9">
                          <div class="input-group col-xs-12">
                            <input type="file" name="imgCapa" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>                         
                         </div>
                      </div>
                  </div>
                </div>
                <p class="card-description">
                  Caracteristica do produto
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Peso</label>
                      <div class="col-sm-9">
                        <input name="peso" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Dimensão</label>
                      <div class="col-sm-9">
                        <input name="dimensao" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <p class="card-description">
                  Tamanho do produto
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tamanho</label>
                      <div class="col-sm-9">
                        <input name="tamanho" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Quantidade do tamanho</label>
                      <div class="col-sm-9">
                        <input type="number" name="qtdTamanho" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button onclick="adicionarTamanho()" class="btn btn-primary mb-2"><i class="icon-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tamanho">

                </div>

                <p class="card-description">
                  Imagens do produto
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Demais imagens</label>
                      <div class="col-sm-9">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>                         
                       </div>
                    </div>
                </div>
                 
                  <div class="col-md-6">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button class="btn btn-primary mb-2"><i class="icon-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <p class="card-description">
                  Descrição do produto
                </p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleTextarea1">Descrição curta</label>
                      <textarea name="descricao" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleTextarea1">Descrição longa</label>
                      <textarea name="descricao_longa" class="form-control" id="exampleTextarea1" rows="7"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
              </form>
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