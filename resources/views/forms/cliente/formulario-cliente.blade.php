<form method="POST" action="">
    @csrf
    <h4>INFORMAÇÕES PESSOAIS</h4>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label>{{_('Nome')}}</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="col">
                <label>{{_('E-mail')}}</label>
                <input class="form-control" type="email" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>{{_('CPF')}}</label>
                    <input class="form-control" name="cpf">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h4>ENTREGA</h4>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label>{{_('CEP')}}</label>
                <input class="form-control" name="cep">
            </div>
            <div class="col">
                <label>{{_('Endereço')}}</label>
                <input class="form-control" type="text" name="endereco">
            </div>
            <div class="col">
                <label>{{_('Bairro')}}</label>
                <input class="form-control" type="text" name="bairro">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>{{_('Número')}}</label>
                    <input class="form-control" type="number" name="numero">
                </div>
                <div class="col">
                    <label>{{_('Cidade')}}</label>
                    <input class="form-control" type="text" name="cidade">
                </div>
                <div class="col">
                    <label>{{_('Estado')}}</label>
                    <input class="form-control" type="text" name="estado">
                </div>
            </div>
        </div>
    </div>
</form>
