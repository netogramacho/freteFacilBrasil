$(document).ready(function () {
    iniciarComponetes();
    iniciarMascara();
    iniciarRodape();
    AOS.init();
    $('img').Lazy()
});
var phone = '5519988700830';
var DIRETORIO = "includes/";


function iniciarComponetes() {
    //ESCONDER SETA NO SCROLL
    $(window).scroll(function () {
        if ($(document).scrollTop() >= 50) {
            $('.arrowBottom').fadeOut();
        } else {
            $('.arrowBottom').fadeIn();
        }
    });

    //AJUSTAR IMAGEM PRINCIPAL NO RESIZE
    $(window).resize(function(){
        $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));
    });
    $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));

    $('.menu_toggle').on('click', function () {
        $('.menu_txt').slideToggle('fast');
    });

    if (window.innerWidth > 800) {
        $('.txt_mobile').removeClass('txt_mobile');
        $('.menu_txt').removeClass('menu_txt');
    }

    $('#btn_email').on('click', function () {
        enviarEmailContato();
    });
    $('#btn_wpp').on('click', function () {
        enviarWpp();
    });
    $('.staticWpp').on('click', function() {
        voltaAnimacaoContato();
    });
    $('.staticEmail').on('click', function() {
        voltaAnimacaoContato();
    });
    $('.fundoContato').on('click', function(){
        voltaAnimacaoContato();
        $('body').css('overflow', '');
        $('body').css('padding-right', '');
    });


    $('.btn_agende_aqui').on('click', function(){
      $('#agendamento_modal').modal({
        fadeDuration: 500,
        fadDelay: 0.50,
        clickClose: false,
        showClose: false,
      });
    });
    $(window).on('load', function(){
        setTimeout(function(){
            $("#img_carregamento").css("-webkit-transform","scale(0.75)");
            $("#img_carregamento").css("-moz-transform","scale(0.75)");
            $("#img_carregamento").css("-o-transform","scale(0.75)");
            $('.loading').find('h1').slideDown();
        }, 500);
        setTimeout(function(){
        $(".loading").fadeOut();
    }, 2000);
    });

    //REACOES FORMULARIO PARCEIROS
    $("#divCheckAutonomo").on("click", function(){
        $("#autonomo").prop("checked", true);
    });
    $("#divCheckEmpresa").on("click", function(){
        $("#empresa").prop("checked", true);
    });


    //OUTROS FORMULARIO AUTONOMO
    $("#outrosAutVeiculo").click(function(){
        if($(this).is(":checked")){
            $("#outrosAutVeiculoTxt").prop("disabled", false);
        } else {
            $("#outrosAutVeiculoTxt").prop("disabled", "disabled");
        }
    });
    $("#outrosAutCarroceria").click(function(){
        if($(this).is(":checked")){
            $("#outrosAutCarroceriaTxt").prop("disabled", false);
        } else {
            $("#outrosAutCarroceriaTxt").prop("disabled", "disabled");
        }
    });

    //OUTROS FOMRULARIO EMPRESA
    $("#outrosempVeiculo").click(function(){
        if($(this).is(":checked")){
            $("#outrosempVeiculoTxt").prop("disabled", false);
        } else {
            $("#outrosempVeiculoTxt").prop("disabled", "disabled");
        }
    });
    $("#outrosempCarroceria").click(function(){
        if($(this).is(":checked")){
            $("#outrosempCarroceriaTxt").prop("disabled", false);
        } else {
            $("#outrosempCarroceriaTxt").prop("disabled", "disabled");
        }
    });

    //SELECIONAR FORM
    $('.radioAbrirFormulario').click(function() {
        if($("#autonomo").is(":checked")){
            $("#formEmpresa").slideUp(1000); 
            setTimeout(function(){
                $("#formAutonomo").slideDown(1000);
            }, 900);
        } else {
            $("#formAutonomo").slideUp(1000);
            setTimeout(function(){
                $("#formEmpresa").slideDown(1000);
            }, 900);
        }
    });


    //TRAVAR INSERCAO DE NUMEROS
    
    $('.isNumber').on('keypress', function () {
        return isNumber(event);
    });

    $('#inicio, #princpal_servicos').css('min-height', (window.innerHeight - parseInt($('#menu').css('height'))));
    
    if (screen.width < 640 || screen.height < 480) {
        $('.mov-aos').attr('data-aos', 'fade');
    }
}

var objEmail = {
    nome: '',
    telefone: '',
    email: '',
    mensagem: ''
}
var objWpp = {
    nome: '',
    mensagem: ''
}



function clearInputs(classe) {
    $('#' + classe + '_nome').val('')
    $('#' + classe + '_telefone').val('')
    $('#' + classe + '_email').val('')
    $('#' + classe + '_msg').val('')
}



function verificaCampoVazio(objDM, classe) {
    var valido = true;
    if (objDM.nome == '') {
        $('#' + classe + '_nome').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_nome').css('border', 'none');
    }
    if (objDM.email == '') {
        $('#' + classe + '_email').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_email').css('border', 'none');
    }
    if (objDM.telefone == '') {
        $('#' + classe + '_telefone').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_telefone').css('border', 'none');
    }
    if (objDM.mensagem == '') {
        $('#' + classe + '_msg').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_msg').css('border', 'none');
    }
    return valido;
}



function iniciarMascara() {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }, spOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.sp_celphones').mask(SPMaskBehavior, spOptions);
    $('.money').maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});

    $(".rg").mask("99.999.999-9");
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $(".cep").mask("99.999-999");
}
//SCROLL PARA FORA DA PAGINA DE COMECO (SETA PARA BAIXO)
function scrollToQuemSomos(){
    $("html, body").delay(200).animate({scrollTop: (window.innerHeight - parseInt($('#menu').css('height')))}, 1000);
}




//ANIMACAO DE BOTOES ESTATICOS PARA O CENTRO
function exibirContato(){
    $('body').css('overflow', 'hidden');
    $('.fundoContato').fadeIn('fast');
    $('.staticWpp').addClass('staticWppAnimation');
    $('.staticWpp').removeClass('staticWppAnimationVolta');
    $('.staticWpp').removeClass('staticWppPosOne');
    $('.staticWpp').addClass('staticWppPosTwo');


    $('.staticEmail').addClass('staticEmailAnimation');
    $('.staticEmail').removeClass('staticEmailAnimationVolta');
    $('.staticEmail').removeClass('staticEmailPosOne');
    $('.staticEmail').addClass('staticEmailPosTwo');


    $('.staticEmail').addClass('voltarAnimacao');
    $('.staticWpp').addClass('voltarAnimacao');
}

//ANIMACAO DE BOTOES ESTATICOS PARA A POSICAO ORIGINAL
function voltaAnimacaoContato(){
    $('body').css('overflow', '');
    $('.fundoContato').fadeOut('fast');
    if ($('.staticWpp').hasClass('voltarAnimacao')) {
        $('.staticWpp').addClass('staticWppAnimationVolta');
        $('.staticWpp').removeClass('staticWppAnimation');
        $('.staticWpp').removeClass('staticWppPosTwo');
        $('.staticWpp').addClass('staticWppPosOne');
    }


    if ($('.staticEmail').hasClass('voltarAnimacao')) {   
        $('.staticEmail').addClass('staticEmailAnimationVolta');
        $('.staticEmail').removeClass('staticEmailAnimation');
        $('.staticEmail').removeClass('staticEmailPosTwo');
        $('.staticEmail').addClass('staticEmailPosOne');
    }


    $('.staticEmail').removeClass('voltarAnimacao');
    $('.staticWpp').removeClass('voltarAnimacao');
}


//DEFINE UM TAMANHO MINIMO PARA O CORPO DO SITE
function iniciarRodape(){
    $('.corpo').css('min-height', (window.innerHeight - parseInt($('#menu').css('height')) - parseInt($('.rodape').css('height'))))
}


//SCROLL PARA O TOPO DO SITE
function voltarTopo(){
    $("html, body").delay(200).animate({scrollTop: 0}, 1000);
}


//ENVIO DE EMAIL DE CONTATO
function enviarEmailContato(){
    $('#btn_email').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_email').attr('disabled', true);
    var dados = $("#formEmail").serializeArray();
    console.log(dados);
    if (!conferirForm("formEmail")) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
            $('#btn_email').html('<b>Enviar</b>');
            $('#btn_email').attr('disabled', false);
        });
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: DIRETORIO + "enviarEmailContato.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_email').html('<b>Enviar</b>');
                    $('#btn_email').attr('disabled', false);
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_email').html('<b>Enviar</b>');
                $('#btn_email').attr('disabled', false);
            });
        });
    }
}


//ENVIO DE EMAIL DE COTACAO
function enviarEmailCotacao(){
    // myform = $("#formCotacao");
    // var disabled = myform.find(':input:disabled').removeAttr('disabled');
    // disabled.attr('disabled','disabled');
    $('#btn_cotacao').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_cotacao').attr('disabled', true);
    var verifica; 
    if (!$('#formCotacao input[name="aereo"]').prop("checked") & 
        !$('#formCotacao input[name="cabotagem"]').prop("checked") &
        !$('#formCotacao input[name="rodoviario"]').prop("checked")
        ) {
        verifica = false;
        $('.item_check').css("border", "3px solid red");
    } else {
        $('.item_check').css("border", "");
        verifica = true;
    }
    var dados = $("#formCotacao").serializeArray();

    verifica = conferirForm("formCotacao");
    if (!verifica) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
        });
        $('#btn_cotacao').html('<b>Enviar</b>');
        $('#btn_cotacao').attr('disabled', false);
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: "includes/" + "enviarEmailCotacao.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_cotacao').html('<b>Enviar</b>');
                    $('#btn_cotacao').attr('disabled', false);
                    window.location.reload();
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_cotacao').html('<b>Enviar</b>');
                $('#btn_cotacao').attr('disabled', false);
            });
        });
    }
}

//ENVIO DE EMAIL PARCEIRO AUTONOMO
function enviarEmailParceiroAutonomo(){
    $('#btn_form_aut').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_form_aut').attr('disabled', true);
    var verifica; 
    if (!$('input[name="carretaLS-aut"]').prop("checked") & 
        !$('input[name="carretaSimples-aut"]').prop("checked") &
        !$('input[name="truck-aut"]').prop("checked") &
        !$('input[name="tres-quartos-aut"]').prop("checked") &
        !$('input[name="outrosAutVeiculoTxt"]').val() != ""
        ) {
        verifica = false;
        $('.item_check_aut_veiculo').css("border", "3px solid red");
    } else {
        $('.item_check_aut_veiculo').css("border", "");
        verifica = true;
    }

    if (!$('input[name="bau-aut"]').prop("checked") & 
        !$('input[name="aberta-aut"]').prop("checked") &
        !$('input[name="sider-aut"]').prop("checked") &
        !$('input[name="portaContainer-aut"]').prop("checked") &
        !$('input[name="outrosAutCarroceriaTxt"]').val() != ""
        ) {
        verifica = false;
        $('.item_check_aut_carroceria').css("border", "3px solid red");
    } else {
        $('.item_check_aut_carroceria').css("border", "");
        verifica = true;
    }

    var dados = $("#formAutonomo").serializeArray();

    verifica = conferirForm("formAutonomo");
    if (!verifica) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
        });
        $('#btn_form_aut').html('<b>Enviar</b>');
        $('#btn_form_aut').attr('disabled', false);
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: "includes/" + "emailParceiroAutonomo.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_form_aut').html('<b>Enviar</b>');
                    $('#btn_form_aut').attr('disabled', false);
                    window.location.reload();
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_form_aut').html('<b>Enviar</b>');
                $('#btn_form_aut').attr('disabled', false);
            });
        });
    }
}

//ENVIO DE EMAIL PARCEIRO EMPRESA
function enviarEmailParceiroEmpresa(){
    $('#btn_form_emp').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_form_emp').attr('disabled', true);
    var verifica; 
    if (!$('#formEmpresa input[name="carretaLS-emp"]').prop("checked") & 
        !$('#formEmpresa input[name="carretaSimples-emp"]').prop("checked") &
        !$('#formEmpresa input[name="truck-emp"]').prop("checked") &
        !$('#formEmpresa input[name="tres-quartos-emp"]').prop("checked") &
        !$('#formEmpresa input[name="outrosempVeiculoTxt"]').val() != ""
        ) {
        verifica = false;
        $('.item_check_emp_veiculo').css("border", "3px solid red");
    } else {
        $('.item_check_emp_veiculo').css("border", "");
        verifica = true;
    }

    if (!$('#formEmpresa input[name="bau-emp"]').prop("checked") & 
        !$('#formEmpresa input[name="aberta-emp"]').prop("checked") &
        !$('#formEmpresa input[name="sider-emp"]').prop("checked") &
        !$('#formEmpresa input[name="portaContainer-emp"]').prop("checked") &
        !$('#formEmpresa input[name="outrosempCarroceriaTxt"]').val() != ""
        ) {
        verifica = false;
        $('.item_check_emp_carroceria').css("border", "3px solid red");
    } else {
        $('.item_check_emp_carroceria').css("border", "");
        verifica = true;
    }

    var dados = $("#formEmpresa").serializeArray();

    verifica = conferirForm("formEmpresa");
    if (!verifica) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
        });
        $('#btn_form_emp').html('<b>Enviar</b>');
        $('#btn_form_emp').attr('disabled', false);
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: "includes/" + "emailParceiroEmpresa.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_form_emp').html('<b>Enviar</b>');
                    $('#btn_form_emp').attr('disabled', false);
                    window.location.reload();
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_form_emp').html('<b>Enviar</b>');
                $('#btn_form_emp').attr('disabled', false);
            });
        });
    }
}
