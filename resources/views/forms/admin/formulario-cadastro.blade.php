<form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{_('Código')}}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="codigo" class="@error('codigo') is-invalid @enderror">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ _('Produto') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="nome_produto" class="@error('produto') is-invalid @enderror">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ _('Fornecedor') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="fornecedor" class="@error('fornecedor') is-invalid @enderror">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ _('Quantidade') }}</label>
        <div class="col-md-6">
            <input type="number" class="form-control" name="quantidade" class="@error('quantidade') is-invalid @enderror">
        </div>
    </div>


    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ _('Descrição do Produto') }}</label>
        <div class="col-md-6">
            <textarea type="text" class="form-control" name="descricao_produto"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ _('Descrição do Produto') }}</label>
        <div class="col-md-6">
            <input type="file" class="form-control-file" name="image">
        </div>
    </div>

    <div class="form-group col">
        <input type="submit" class="btn btn-success">
    </div>

</form>
