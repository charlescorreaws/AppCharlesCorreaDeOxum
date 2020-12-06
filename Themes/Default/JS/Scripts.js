
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



// Mascaras

jQuery(function ($) {
    $("#DataBR").mask("99/99/9999");

    $("#DataBR2").mask("99/99/9999");

    $("#TelefoneFixo").mask("(99) 9999-9999");

    $("#TelefoneCelular1").mask("(99) 9 9999-9999");

    $("#TelefoneCelular2").mask("(99) 9 9999-9999");

    $("#TelefoneCelular3").mask("(99) 9 9999-9999");

    $("#WhatsApp").mask("(99) 9 9999-9999");

    $("#Telegram").mask("(99) 9 9999-9999");

    $("#CEP").mask("99999-999");

    $("#cep").mask("99999-999");

    $("#Login").mask("999.999.999-99");

    $("#CPF").mask("999.999.999-99");



});


jQuery(function ($) {

    $('#DataBR').datepicker({
        maxViewMode: 3,
        todayBtn: "linked",
        clearBtn: true,
        language: "pt-BR",
        calendarWeeks: true,
        autoclose: true,
        toggleActive: true,
        defaultViewDate: {year: 1970, month: 01, day: 01}
    });

});

// desabilita f5, habilitar em produção
//function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
//$(document).on("keydown", disableF5);
// liberar em produção
/*
 $(document).on({
 "contextmenu": function (e) {
 console.log("ctx menu button:", e.which);
 
 // Stop the context menu
 e.preventDefault();
 },
 "mousedown": function (e) {
 console.log("normal mouse down:", e.which);
 },
 "mouseup": function (e) {
 console.log("normal mouse up:", e.which);
 }
 });
 
 */


// Desabilita PrintScreen de tela

function copyToClipboard() {

    var aux = document.createElement("input");
    aux.setAttribute("value", "Função desabilitada nesta tela!");
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    // Remove it from the body
    document.body.removeChild(aux);
    alert("Função desabilitada nesta tela!");
}

$(window).keyup(function (e) {
    if (e.keyCode == 44) {
        copyToClipboard();
    }
});


document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
    if (keyCode == 44) {
        stopPrntScr();
    }
});
function stopPrntScr() {

    var inpFld = document.createElement("input");
    inpFld.setAttribute("value", ".");
    inpFld.setAttribute("width", "0");
    inpFld.style.height = "0px";
    inpFld.style.width = "0px";
    inpFld.style.border = "0px";
    document.body.appendChild(inpFld);
    inpFld.select();
    document.execCommand("copy");
    inpFld.remove(inpFld);
}
function AccessClipboardData() {
    try {
        window.clipboardData.setData('text', "Access   Restricted");
    } catch (err) {
    }
}
setInterval("AccessClipboardData()", 300);




// Verifica se o formulário foi preenchido


function Validar_Form(){
    
    if (CadastroForm.TXT_Nome.value == "")
    {
        alert("Campo Nome está em branco, favor verificar!");
        CadastroForm.TXT_Nome.focus();
        return false;
    }
    
    if (CadastroForm.TXT_Email.value == "")
    {
        alert("Campo Email está em branco, favor verificar!");
        CadastroForm.TXT_Email.focus();
        return false;
    }
    
    if (CadastroForm.TXT_WhatsApp.value == "")
    {
        alert("Campo WhatsApp está em branco, favor verificar!");
        CadastroForm.TXT_WhatsApp.focus();
        return false;
    }
    
    if (CadastroForm.TXT_Estado.value == "")
    {
        alert("Campo Estado está em branco, favor verificar!");
        CadastroForm.TXT_Estado.focus();
        return false;
    }
    
    if (CadastroForm.TXT_Cidade.value == "")
    {
        alert("Campo Cidade está em branco, favor verificar!");
        CadastroForm.TXT_Cidade.focus();
        return false;
    }
    
    if (CadastroForm.TXT_Nascimento.value == "")
    {
        alert("Campo Data de Nascimento está em branco, favor verificar!");
        CadastroForm.TXT_Nascimento.focus();
        return false;
    }
    
    if (CadastroForm.Tipo_Pessoa.value == "")
    {
        alert("Campo Tipo de Pessoa está em branco, favor verificar!");
        CadastroForm.Tipo_Pessoa.focus();
        return false;
    }
    
    if (CadastroForm.Tradicao_Religiosa.value == "")
    {
        alert("Campo Tradição Religiosa está em branco, favor verificar!");
        CadastroForm.Tradicao_Religiosa.focus();
        return false;
    }
}


