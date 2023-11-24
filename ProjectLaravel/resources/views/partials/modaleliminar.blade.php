   <!-- Modal de Confirmación de Eliminación -->
   <div class="modal fade" id="confirmarEliminar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmarEliminarLabel{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="confirmarEliminarLabel{{$item->id}}">Confirmar Eliminación</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <h5>¿Deseas eliminar el siguiente recuerdo?</h5>
             <p><strong>{{$item->titulo}}</strong></p>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
             <!-- Agregamos un formulario para la eliminación -->
             <form action="{{ route('recuerdo.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
             </form>
          </div>
       </div>
    </div>
 </div>