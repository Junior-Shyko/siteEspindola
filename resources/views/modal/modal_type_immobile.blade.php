<div class="modal fade" tabindex="-1" id="modal-tipo-imovel" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tipo de Imóveis</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <p>Selecione quantos tipos de imóveis desejar.</p>
            <div id="names_distinct">
            <ul class="list-group">
              @foreach($immobile as $immobiles)
              <li class="list-group-item"><input type="checkbox" name="tipo_immovel"> {{ $immobiles->immobiles_district }}</li>
              @endforeach
            </ul>

          </div>
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>     
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->