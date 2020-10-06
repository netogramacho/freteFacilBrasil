 <!-- MODAL EMAIL -->
 <!-- <div class="row modalEmail">
          <div class="close-x">
            <i class="fas fa-times"></i>
          </div>
          <div class="col-md-12">
              <div class="container-fluid">
                  
              </div>
          </div>
        </div> -->
  <!-- Modal -->
  <div class="modal fade" id="modalEmail" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modalEmail">
        <!-- CABECALHO -->
        <div class="modal-header">
          <h4 class="modal-title">Entre em contato por email:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- CORPO -->
        <div class="modal-body">
        <div class="row tit_duvidas">
                      <div class="col-md-12">
                      <form id="formEmail" action="return false;">
                      <div class="formulario">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                <i class="far fa-2x fa-user-circle"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                    <input placeholder="Seu nome" id="email_nome" type="text" name="nome" required/>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="formulario">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                <i class="fas fa-2x fa-phone-square"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                <input class="sp_celphones" placeholder="Telefone" id="email_telefone" type="tel" name="celular" required/>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="formulario">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <i class="fas fa-2x fa-envelope-square"></i>
                              </div>
                              <div class="col-md-10 col-10">
                                <input placeholder="E-mail" id="email_email" type="text" name="email" required/>
                              </div>
                            </div>
                          </div>
                      </div>
                      </div>
                      <div class="formulario_msg">
                      <div class="row">
                          <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2 col-2">
                              <i class="fas fa-2x fa-comments"></i>
                              </div>
                              <div class="col-md-10 col-10">
                                <textarea class="txt_Msg" id="email_msg" placeholder="Mensagem" id="" type="text" name="msg" form='formEmail' required></textarea>
                              </div>
                          </div>
                          </div>
                      </div>
                      </div>
                      <div class="div_btn">
                      <button class="btn btn_Padrao" id="btn_email">
                          <b>
                          Enviar
                          </b>
                      </button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
  </div>



  <!-- <div class="modal fade" id="modalWpp" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content modalEmail">
        <div class="modal-header">
          <h4 class="modal-title">Entre em contato por WhatsApp:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row tit_duvidas">
            <div class="col-md-12">
              <form id="formWpp" action="return false">
                <div class="formulario">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <i class="far fa-2x fa-user-circle"></i>
                      </div>
                      <div class="col-md-10 col-10">
                        <input placeholder="Seu nome" id="wpp_nome" name="nome" type="text" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="formulario_msg">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-2 col-2">
                            <i class="fas fa-2x fa-comments"></i>
                        </div>
                        <div class="col-md-10 col-10">
                          <textarea class="txt_Msg" placeholder="Mensagem" id="wpp_msg" type="text" name="msg" form="formWpp"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="div_btn_wpp">
                  <button class="btn" id="btn_wpp">
                    <i class="fab fa-3x fa-whatsapp-square"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->

      <!-- BOTOES ESTATICOS -->
      <div class="staticWpp staticWppPosOne">
        <a href="https://api.whatsapp.com/send?l=pt-BR&phone=5519988700830&text=Olá, pode me ajudar%3F" target='_blank'><i class="fab fa-whatsapp-square"></i></a>
      </div>
      <div class="staticEmail">
        <a href="/" data-toggle="modal" data-target="#modalEmail"><i class="fas fa-envelope"></i></a>
      </div>



      <!-- FUNDOS -->
      <div class="fundoContato"></div>