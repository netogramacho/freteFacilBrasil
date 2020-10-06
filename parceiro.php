<!DOCTYPE html>
<html>
    <head>
      <!-- ANALYTICS -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175272289-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-175272289-1');
      </script>

        <meta charset="utf-8">
        <title>Frete para Manaus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if IE]><link rel="shortcut icon" href="assets/images/favicon.ico"><![endif]-->
        <link rel="shortcut icon" href="assets/imagens/barco.ico" sizes="16x16">
        
    </head>
    <body>
        <!-- MENU -->
        <?php
        require_once("menu.php");
        ?>
        <div class="corpo">
          <div class="container-fluid form_padrao">
            <h4>SELECIONE O TIPO DE PARCERIA</h4>
            <div class="row radiosParceiro">
                <div class="col-md-6">
                    <div data-aos="fade-up" id="divCheckAutonomo" class="mov-aos card-pers radioAbrirFormulario">
                        <div class="item-text text-center">
                            <input type="radio" name="tipoParceiro" id="autonomo" value="autonomo">
                            <label for="autonomo"> Parceiro Autônomo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-aos="fade-up" id="divCheckEmpresa" class="mov-aos card-pers radioAbrirFormulario">
                        <div class="item-text text-center">
                            <input type="radio" name="tipoParceiro" id="empresa" value="empresa">
                            <label for="empresa"> Parceiro Empresa</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FORMULARIOS DE CADASTRO -->


            <!-- FORMULARIO PARCEIRO AUTONOMO -->

            <form id="formAutonomo" style="display:none" action="return false;">
                <h4>SUAS INFORMAÇÕES</h4>
              <div class="row">
                <div class="col-md-6 item_cotacao">
                  <label>NOME</label>
                  <div class="item_campo">
                    <input type="text" id="aut-nome" name="nome" placeholder="Seu nome" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>E-MAIL</label>
                  <div class="item_campo">
                    <input type="email" id="aut-email" name="email" placeholder="Seu e-mail" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>CELULAR</label>
                  <div class="item_campo">
                    <input class="sp_celphones" type="tel" id="aut-cel" name="aut-cel" placeholder="Seu numero de celular" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>RG</label>
                  <div class="item_campo">
                    <input class="rg isNumber" type="tel" id="aut-rg" name="aut-rg" placeholder="Seu número de RG" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>CPF</label>
                  <div class="item_campo">
                    <input class="cpf isNumber" type="tel" id="aut-cpf" name="aut-cpf" placeholder="Seu número de CPF" required></input>
                  </div>
                </div>
                <div class="col-md-12 item_cotacao">
                  <label>Possuí cadastro junto à empresa de consulta cadastral? </label>
                  <div class="item_campo">
                    <input type="text" id="possuiCad" name="possuiCad" placeholder="Empresa de consulta cadastral" autocomplete="off" required></input>
                  </div>
                </div>
              </div>
              <h4>SOBRE SEU VEÍCULO</h4>
              <div class="row">
                <div class="col-md-12 item_cotacao">
                  <label class="lbl_check">Tipo de veículo</label>
                  <div class="item_check item_check_aut_veiculo">                  
                    <div class="div_check">
                      <input id="carretaLS-aut" type="checkbox" name="carretaLS-aut" value="X">
                      <label for="carretaLS-aut"> Cavalo/carreta LS</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="carretaSimples-aut" type="checkbox" name="carretaSimples-aut" value="X">
                      <label for="carretaSimples-aut"> Cavalo/Carreta eixo simples</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="truck-aut" type="checkbox" name="truck-aut" value="X">
                      <label for="truck-aut"> Truck</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="tres-quartos-aut" type="checkbox" name="tres-quartos-aut" value="X">
                      <label for="tres-quartos-aut"> 3/4</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="outrosAutVeiculo" type="checkbox">
                      <label for="outrosAutVeiculo"> Outros</label>
                      <input id="outrosAutVeiculoTxt" type="text" name="outrosAutVeiculoTxt" placeholder="Descreva" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 item_cotacao">
                  <label class="lbl_check">Carroceria/Carreta</label>
                  <div class="item_check item_check_aut_carroceria">                  
                    <div class="div_check">
                      <input id="bau-aut" type="checkbox" name="bau-aut" value="X">
                      <label for="bau-aut"> Baú</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="aberta-aut" type="checkbox" name="aberta-aut" value="X">
                      <label for="aberta-aut"> Aberta</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="sider-aut" type="checkbox" name="sider-aut" value="X">
                      <label for="sider-aut"> Sider</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="portaContainer-aut" type="checkbox" name="portaContainer-aut">
                      <label for="portaContainer-aut"> Porta container</label>
                    </div>
                    <br/>
                    <div class="div_check">
                      <input id="outrosAutCarroceria" type="checkbox" class="outros">
                      <label for="outrosAutCarroceria"> Outros</label>
                      <input id="outrosAutCarroceriaTxt" type="text" name="outrosAutCarroceriaTxt" placeholder="Descreva" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <h4>SOBRE SEU TRABALHO</h4>
              <div class="row">
                <div class="col-md-4 item_cotacao">
                  <label>DESCRIÇÃO DE REGIÃO:</label>
                  <div class="item_campo_txtarea">
                    <textarea id="regiao-desc-aut" name="regiao-desc-aut" placeholder="Descreva aqui a região em que mais atua" autocomplete="off" required></textarea>
                  </div>
                </div> 
                <div class="col-md-4 item_cotacao">
                  <label>DESCRIÇÃO DE CARGA:</label>
                  <div class="item_campo_txtarea">
                    <textarea id="carga-desc-aut" name="carga-desc-aut" placeholder="Descreva aqui que tipo de carga costuma transportar" autocomplete="off" required></textarea>
                  </div>
                </div> 
                <div class="col-md-4 item_cotacao">
                  <label>OBSERVAÇÕES</label>
                  <div class="item_campo_txtarea">
                    <textarea id="obs-aut" name="obs-aut" placeholder="Observações"autocomplete="off"></textarea>
                  </div>
                </div>
              </div>
              <div class="div_btn">
                <button class="btn btn_Padrao" id="btn_form_aut" onclick="enviarEmailParceiroAutonomo();">
                    <b>
                    Enviar
                    </b>
                </button>
              </div>
            </form>




            <!-- FORMULARIO PARCEIRO TRANSPORTADORA -->

            <form id="formEmpresa" style="display:none" action="return false;">
                <h4>SUAS INFORMAÇÕES</h4>
              <div class="row">
                <div class="col-md-6 item_cotacao">
                  <label>EMPRESA</label>
                  <div class="item_campo">
                    <input type="text" id="emp-empresa" name="nome" placeholder="Nome da Empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-2 item_cotacao">
                  <label>CNPJ</label>
                  <div class="item_campo">
                    <input class="cnpj isNumber" type="tel" id="emp-cnpj" name="emp-cnpj" placeholder="CNPJ da sua empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-2 item_cotacao">
                  <label>CEP</label>
                  <div class="item_campo">
                    <input class="cep isNumber" type="tel" id="emp-cep" name="emp-cep" placeholder="CEP da sua empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-2 item_cotacao">
                  <label>ESTADO</label>
                  <div class="item_campo">
                    <input maxlength="2" type="text" id="emp-estado" name="emp-estado" placeholder="Estado da sua empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>CIDADE</label>
                  <div class="item_campo">
                    <input type="text" id="emp-cidade" name="emp-cidade" placeholder="Cidade da sua empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>ENDEREÇO</label>
                  <div class="item_campo">
                    <input type="text" id="emp-endereco" name="emp-endereco" placeholder="Endereço da sua empresa" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>NOME PARA CONTATO</label>
                  <div class="item_campo">
                    <input type="text" id="emp-nome-contato" name="emp-nome-contato" placeholder="Nome para contato" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>E-MAIL</label>
                  <div class="item_campo">
                    <input type="email" id="emp-email" name="email" placeholder="E-mail" autocomplete="off" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>CELULAR</label>
                  <div class="item_campo">
                    <input class="sp_celphones" type="tel" id="cel" name="emp-cel" placeholder="Número de celular" required></input>
                  </div>
                </div>
              </div>
              <h4>SOBRE SEUS VEÍCULOS</h4>
              <div class="row">
                <div class="col-md-12 item_cotacao">
                  <label class="lbl_check">Tipo de veículo</label>
                  <div class="item_check item_check_emp_veiculo">                  
                    <div class="div_check">
                      <input id="carretaLS-emp" type="checkbox" name="carretaLS-emp" value="X">
                      <label for="carretaLS-emp"> Cavalo/carreta LS</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="carretaSimples-emp" type="checkbox" name="carretaSimples-emp" value="X">
                      <label for="carretaSimples-emp"> Cavalo/Carreta eixo simples</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="truck-emp" type="checkbox" name="truck-emp" value="X">
                      <label for="truck-emp"> Truck</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="tres-quartos-emp" type="checkbox" name="tres-quartos-emp" value="X">
                      <label for="tres-quartos-emp"> 3/4</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="outrosempVeiculo" type="checkbox">
                      <label for="outrosempVeiculo"> Outros</label>
                      <input id="outrosempVeiculoTxt" type="text" name="outrosempVeiculoTxt" placeholder="Descreva" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 item_cotacao">
                  <label class="lbl_check">Carroceria/Carreta</label>
                  <div class="item_check item_check_emp_carroceria">                  
                    <div class="div_check">
                      <input id="bau-emp" type="checkbox" name="bau-emp" value="X">
                      <label for="bau-emp"> Baú</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="aberta-emp" type="checkbox" name="aberta-emp" value="X">
                      <label for="aberta-emp"> Aberta</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="sider-emp" type="checkbox" name="sider-emp" value="X">
                      <label for="sider-emp"> Sider</label>
                    </div>
                    <div class="div_sep_parc"></div>
                    <div class="div_check">
                      <input id="portaContainer-emp" type="checkbox" name="portaContainer-emp" value="X">
                      <label for="portaContainer-emp"> Porta container</label>
                    </div>
                    <br/>
                    <div class="div_check">
                      <input id="outrosempCarroceria" type="checkbox" class="outros">
                      <label for="outrosempCarroceria"> Outros</label>
                      <input id="outrosempCarroceriaTxt" type="text" name="outrosempCarroceriaTxt" placeholder="Descreva" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <h4>SOBRE SEU TRABALHO</h4>
              <div class="row">
                <div class="col-md-6 item_cotacao">
                  <label>DESCRIÇÃO DE REGIÃO:</label>
                  <div class="item_campo_txtarea">
                    <textarea id="regiao-desc-emp" name="regiao-desc-emp" placeholder="Descreva aqui a região em que mais atua" autocomplete="off" required></textarea>
                  </div>
                </div> 
                <div class="col-md-6 item_cotacao">
                  <label>OBSERVAÇÕES</label>
                  <div class="item_campo_txtarea">
                    <textarea id="obs-emp" name="obs-emp" placeholder="Observações"autocomplete="off"></textarea>
                  </div>
                </div>
              </div>
              <div class="div_btn">
                <button class="btn btn_Padrao" id="btn_form_emp" onclick="enviarEmailParceiroEmpresa();">
                    <b>
                    Enviar
                    </b>
                </button>
              </div>
            </form>
          </div>
        </div>
        <?php
            require_once("fixeds.php");
            require_once("rodape.php");
            require_once("importsCss.php");
            require_once("importsJs.php");
        ?>
    </body>
        
</html>