//setTimeout(function(){ $('#modal1').modal('open'); }, 3000);

function CallBacksAjax(pUrl, pType, pData, pDatatype, MyCallBack) {
    var ObjectData;
    $.ajax({
        url: pUrl,
        type: pType,
        data: { MyJson: pData },
        datatype: pDatatype,
        async: true
    }).done(function(jsonStr, textStatus, jqXHR) {
        if (console && console.log) {
            console.log("Success: " + textStatus);
        }
        if (pDatatype == 'JSON') {
            ObjectData = JSON.parse(jsonStr);
        } else if (pDatatype == 'html') {
            ObjectData = jsonStr;
        }
        MyCallBack(ObjectData);
        return ObjectData;
    }).fail(function(jqXHR, textStatus, errorThrown) {
        if (console && console.log) {
            console.log("Error: " + textStatus + ". " + errorThrown + ". " + jqXHR);
        }
        ObjectData = "Sorry, Error: " + errorThrown + ". Status: " + textStatus;
        MyCallBack(ObjectData);
        return ObjectData;
    });
}

$(document).ready(function() {
    CreaComboSemanas();
    OcultarModulos();
    $('#mod1').show(500);
});

function CreaComboSemanas() {

    var JsonData = { "vars": { "NomFunction": "CreaComboSemanas", "id": 1 } };

    CallBacksAjax("views/soft_resp.php", 'POST', JsonData, 'html', function(ObjectDrop) {

        $("#SecDropDownSemanas").html(ObjectDrop);

    });
}

function CreaTablaAsignaciones() {
    var JsonData = { "vars": { "NomFunction": "CreaTablaAsignaciones", "id_sem": $("#CmbCatSemanas").val() } };

    CallBacksAjax("views/soft_resp.php", "POST", JsonData, "html", function(ObjectTable) {

        $("#TablaAsignaciones").html(ObjectTable);
        console.log(ObjectTable);
        $("#TabSemana").DataTable();

    });
}

function MostrarModulo(id_li) {

    OcultarModulos();
    RemoverClassActiv();
    $('#mod' + id_li).show(500);

    if (id_li === 2) {
        CreaTablaAsignaciones();
    }

    $('#li' + id_li).addClass("active");

}

function OcultarModulos() {

    $('#mod1').hide();
    $('#mod2').hide();
    //$('#mod3').hide();
    //$('#mod4').hide();
    //$('#mod5').hide();
    //$('#mod6').hide();
    //$('#mod7').hide();
    //$('#mod8').hide();
    //$('#mod9').hide();
    //$('#mod10').hide();

}

function RemoverClassActiv() {
    $('#li1').removeClass("active");
    $('#li2').removeClass("active");
    $('#li3').removeClass("active");
    $('#li4').removeClass("active");
    $('#li5').removeClass("active");
    $('#li6').removeClass("active");
    $('#li7').removeClass("active");
    $('#li8').removeClass("active");
    $('#li9').removeClass("active");
    $('#li10').removeClass("active");

}