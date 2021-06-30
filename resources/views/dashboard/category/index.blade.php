@extends('dashboard.master')

@section('content')

<a class="btn btn-success mt-3 mb-3" href="{{ route('category.create')}}">Crear</a>
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
        @foreach ($categories as $category)
        <tr>            
            <td>
                {{$category->id}}
            </td>
            <td>
                {{$category->title}}
            </td>
            <td>
                {{$category->created_at->format('d-m-Y')}}
            </td>
            <td>
                {{$category->updated_at->format('d-m-Y')}}
            </td>
            <td>
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Actualizar</a>
                         
                <button type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal" id="{{$category->id}}" class="btn btn-danger">Eliminar</button>
    
  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $categories->links() }}


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>¿Seguro que desea borrar el reguistro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>


          <form id="formDelete"  method="post" action="{{ route('category.destroy', 0) }}" data-action="{{ route('category.destroy', 0) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Borrar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
 
<script>
     
window.onload = function(){
    
    $('#deleteModal').on('show.bs.modal', function(event){
  var exampleModal = document.getElementById('deleteModal')



  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var id = button.getAttribute('id')
  //var id = button.getAttribute('data-bs-id')

  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.

  action = $('#formDelete').attr('data-action').slice(0,-1);
  action += id;
  //alert(action);
  console.log(action);
  $('#formDelete').attr('action',action)
  var modal = $(this)
    modal.find('.modal-title').text('vas a borrar la categoría: '+ id)
  //modalTitle.textContent = 'Vas a borrar el category ' + id
//    })
});
}







</script>

@endsection


