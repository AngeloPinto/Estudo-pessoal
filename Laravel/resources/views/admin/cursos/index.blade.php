@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de Cursos</h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->titulo }}</td>
                            <td>{{ $item->descricao }}</td>
                            <td class="left"><img height="60" src="{{ asset($item->imagem) }}" alt="{{ $item->titulo }}"></td>
                            <td>{{ $item->publicado }}</td>
                            <td>
                                <a class="btn deep-purple" href="{{ route('admin.cursos.editar' , $item->id) }}">Editar</a>
                                <a class="btn red darken-1"    href="{{ route('admin.cursos.deletar', $item->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <a class="btn blue darken-2" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection