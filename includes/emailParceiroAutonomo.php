<?php
    header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos

    $arrDados = json_decode(stripslashes($_POST['data']));

    require_once(".." . DIRECTORY_SEPARATOR . "api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");
    require_once(".." . DIRECTORY_SEPARATOR . "api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "cls_email.php");
    
    
    
    try {
        
        //EMAIL PARA ANDRESSA
        //CARREGANDO ARQUIVO HTML E FAZENDO ALTERACOES 
        $corpoEmail = file_get_contents(".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "emails" . DIRECTORY_SEPARATOR . "parceriaAutonomo-Empresa.html");
        foreach ($arrDados as $array) {
            if ($array->value != "") {
                $valor = $array->value;
            } else {
                $valor = "Nao informado";
            }

            $corpoEmail = str_replace("[" . $array->name . "]", $valor, $corpoEmail);    
        }

        $corpoEmail = str_replace("[carretaLS-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[carretaSimples-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[truck-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[tres-quartos-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[outrosAutVeiculoTxt]", "Não Informado", $corpoEmail);

        $corpoEmail = str_replace("[bau-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[aberta-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[sider-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[portaContainer-aut]", " ", $corpoEmail);
        $corpoEmail = str_replace("[outrosAutCarroceriaTxt]", "Não Informado", $corpoEmail);


    
        $enderecos = array(
            "triunfocabotagem@gmail.com",
            "brasilfretefacil@gmail.com"
        );
    
        $assunto = "Nova solicitação de parceria com Autônomo";
    
        $email = new Cls_email();
        $email->assunto = $assunto;
        $email->mensagem = $corpoEmail;
        $email->enderecos = $enderecos;
        $email->enviarEmail();

        //EMAIL CLIENTE

        $corpoEmail = file_get_contents(".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "emails" . DIRECTORY_SEPARATOR . "retornoParceiros.html");
        
        
        $enderecos = array();

        foreach ($arrDados as $array) {
            $corpoEmail = str_replace("[" . $array->name . "]", $array->value, $corpoEmail);
            if ($array->name == "email") {
                array_push($enderecos, $array->value);
            }
        }

    
        $assunto = "Recebemos seu pedido de parceria.";
    
        $email = new Cls_email();
        $email->assunto = $assunto;
        $email->mensagem = $corpoEmail;
        $email->enderecos = $enderecos;
        $email->enviarEmail();

        $retorno = array(
            "title" => "Sucesso",
            "message" => "Mensagem enviada",
            "type" => "success"
        );
    } catch (\Throwable $th) {

        $retorno = array(
            "title" => "Erro",
            "message" => "Mensagem nao enviada",
            "type" => "error"
        ); 
    }

    echo json_encode($retorno);

    
    
?>