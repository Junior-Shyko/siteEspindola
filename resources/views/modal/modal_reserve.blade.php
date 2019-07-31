<!-- Modal RESERVA DE CAHVES-->
<div class="modal fade" id="modal_reserve_key" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title"> <i class="fa fa-calendar"></i> Agendar Visita</h5>        
      </div>
      <div class="modal-body">
         {{ Form::open(['url' => 'reservar-chave']) }}
        <div class="row">
           <div class="col-md-12">
             
                  <div class="form-block col-lg-6 col-md-6">
                     {{ Form::label('','Nome e Sobrenome *') }}
                     {{ Form::text('name_reserve' , '', ['class' => 'border' , 'placeholder' => 'Seu Nome' , 'required' => 'required']) }}
                  </div>
                  <div class="form-block col-lg-6 col-md-6">
                     {{ Form::label('','E-mail *') }}
                     {{ Form::email('email_reserve' , '' , ['class' => 'border', 'placeholder' => 'Seu E-mail' , 'required' => 'required']) }}    
                  </div>
                  <div class="form-block col-lg-4 col-md-4">
                     {{ Form::label('','Fixo ou Celular *') }}
                     {{ Form::text('phone_reserve', '' , ['class' => 'border' , 'id' => 'phone_reserve' , 'maxlength' => '15', 'onkeyup' => 'mascara( this, mtel )' , 'placeholder' => '( )    -    ' ,  'required' => 'required']) }}
                  </div>
                
                  <div class="col-md-12 well well-sm">
                     <small class="text-danger">
                        <i>Lembramos que o agendamento só pode ser feito com a devolução até as <strong>17:30</strong> do mesmo dia.</i>
                     </small>
                       <div class="col-md-6">
                          <div class="form-block col-lg-12 col-md-12">
                              {{ Form::label('','Dt Retirada') }}
                              <input size="16" type="text" name="date_prev" value="{{ Date('d/m/Y H:i') }}" readonly class="border form_datetime" placeholder="Data e Hora">
                           </div>
                          
                       </div>
                       <div class="col-md-6">
                           <div class="form-block col-lg-12 col-md-12">
                              {{ Form::label('','Data Entrega') }}
                              <input size="16" type="text"  name="date_entr" readonly class="border form_datetime" placeholder="Data e Hora">
                           </div>
                       </div>
                  </div>
           </div>
        </div>

        <div class="row">
           <div class="col-md-12">
            <div class="panel panel-info">
              <div class="panel-heading">Informações sobre a reserva</div>
              <div class="panel-body">
               <table class="table table-bordered table-hover">
                <tr>
                   <td><small id="code_key_reserve">Código da Chave: 12F</small></td>
                </tr>
                <tr>
                   <td><small id="agency_key_reserve">Agência: Agência Fátima</small></td>                  
                </tr>
                <tr>
                    <td><small id="address_key_reserve">Endereço: Rua Monsenhor Otávio de Castro</small></td>
                </tr>
                <tr>
                   <td><small class="text-danger">
                     <strong><i class="fa fa-exclamation-triangle"></i> Importante: </strong>                    
                      Necessário um documento de indentificação da pessoa que esta fazendo a reserva e um caução de <strong>R$ 20,00</strong> reais que será devolvido após a devolução da chave.</small>
                   </td>
                </tr>
               </table>
              
              </div>
            </div>
            <small class="text-info">( * ) Campo obrigatório</small>
           </div>
          
        </div>
      </div>
      <div class="modal-footer">
         {{ Form::hidden('keys_cod_immobile' , '' ,['id' => 'keys_cod_immobile_reserve']) }}
         {{ Form::hidden('keys_code' , '' ,['id' => 'keys_code_reserve']) }}
         {{ Form::hidden('agency' , '' , ['id' => 'agency_reserve']) }}
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sair</button>
        <button type="submit" class="btn btn-primary"> <i class="fa fa-key"></i> Confirmar agendamento</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>