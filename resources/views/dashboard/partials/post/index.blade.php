@extends('dashboard.master')

@section('content')

<a class="btn btn-success mt-3 mb-3"href="{{ route('post.create')}}">Crear</a>
<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Titulo
            </td>
            <td>
                posteado
            </td>
            <td>
                Creación
            </td>
            <td>
                Actualización
            </td>
            <td>
                Acciones
            </td>
        </tr>

    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>            
            <td>
                {{$post->id}}
            </td>
            <td>
                {{$post->title}}
            </td>
            <td>
                {{$post->posted}}
            </td>
            <td>
                {{$post->created_at->format('d-m-Y')}}
            </td>
            <td>
                {{$post->updated_at->format('d-m-Y')}}
            </td>
            <td>
                <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Actualizar</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}
@endsection


