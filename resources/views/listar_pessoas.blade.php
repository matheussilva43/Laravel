@extends('template')

@section('content')
<h3>Pessoas Cadastradas</h3>

<div class="container">
	<div class="row">
        <table class="table table-bordered" id="test">
        <thead>
            <tr>
				<th>#</th>
                <th>Nome</th>
                <th>CPF</th>
				<th>RG</th>
                <th>Email</th>
				<th>DATA DE NASCIMENTO</th>
                <th>
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
            <tr>
				<th>#</th>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->cpf}}</td>
				<td>{{$pessoa->rg}}</td>
                <td>{{$pessoa->email}}</td>
				<td>{{$pessoa->dtanascimento}}</td>
                <td>
                    <a href="{{url('atualizar/'.$pessoa->idpessoas)}}" class="btn btn-primary">Atualizar</a>
                    <a href="{{url('delete/'.$pessoa->idpessoas)}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
	</div>
</div>
@endsection
