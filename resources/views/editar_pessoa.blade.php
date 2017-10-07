@extends('template')

@section('content')
<form class="form-horizontal" method="POST" action="{{url('/save')}}">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Nome</label>
            <div class="col-md-4">
                <input id="textinput" name="nome" value="{{$pessoa->nome}}" type="text" placeholder="Nome" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">email</label>
            <div class="col-md-4">
                <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">CPF</label>
            <div class="col-md-4">
                <input id="textinput" name="cpf" type="text" placeholder="CPF" class="form-control input-md">
            </div>
        </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">RG</label>
                <div class="col-md-4">
                    <input id="textinput" name="rg" type="text" placeholder="RG" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">DATA DE NASCIMENTO</label>
                <div class="col-md-4">
                    <input id="textinput" name="dtanascimento" type="date" placeholder="Data de Nascimento" class="form-control input-md">
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <div class="col-md-8">
                <button id="button1id" type="submit" class="btn btn-success">Salvar</button>
                <button id="button2id" type="reset" class="btn btn-danger">Limpar</button>
            </div>
        </div>

    </fieldset>
</form>

@endsection
