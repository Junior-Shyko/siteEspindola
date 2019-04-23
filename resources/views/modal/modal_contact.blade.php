<div class="modal fade" id="modal_contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel"><i class="fa fa-at"></i> Entre em contato</h4>
                     <div class="row">
                        <div class="col-md-12" id="info_send_contact">
                           <div class="alert alert-info" role="alert">
                              <label>Mensagem enviada com sucesso!.</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{ Form::open(['url' => 'enviar-mensagem' , 'id' => 'form_contact']) }}
                  <div class="modal-body">

                     <div class="row">
                        <div class="col-md-12">

                           <div class="form-block">                                
                              {{ Form::label('','Nome e Sobrenome *') }}
                              {{ Form::text('name_contact' , '', ['class' => 'form-control' , 'placeholder' => 'Seu Nome' , 'required' => 'required']) }}

                           </div>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-block">
                                    {{ Form::label('','E-mail *') }}
                                    {{ Form::email('email_contact' , '' , ['class' => 'form-control', 'placeholder' => 'Seu E-mail' , 'required' => 'required']) }}                                   
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-block">                                  
                                    {{ Form::label('','Fixo ou Celular *') }}
                                    {{ Form::text('phone_contact', '' , ['class' => 'form-control' , 'id' => 'phone_contact' , 'maxlength' => '15', 'onkeyup' => 'mascara( this, mtel )' , 'placeholder' => '(__) ____-____']) }}
                                 </div>
                              </div>
                           </div>

                           <div class="form-block">                             
                              {{ Form::label('' , 'Mensagem *') }}
                              {{ Form::textarea('message_contact' , 'Olá! Gostei desse imóvel do código '.$immobile->immobiles_code.' e gostaria de mais informações. Aguardo o seu retorno.' , ['class' => 'form-control']) }}   
                              <p>
                                 <small class="text-info">( * ) Campo obrigatório</small>
                              </p>                            
                           </div>


                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">

                     <div class="form-block">
                        {{ Form::hidden('immobiles_code' , $immobile->immobiles_code) }}                  
                        {{--  <input type="submit" value="Enviar mensagem"  /> --}}
                        {{ Form::close() }}
                        <div id="id_icon_send">
                           <a href="#"> <i class="fa fa-spinner fa-spin fa-2x"></i> </a>
                        </div>
                        <a href="#" class="button"  id="btn_send_contact" > </a>

                     </div>
                  </div>

               </div>
            </div>
         </div>