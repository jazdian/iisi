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

function MostrarMenuOpciones()
{
   $('#MenuPrincipal').hide(500, function(){
      
      $('#MenuAddMantenimiento').hide(500, function(){

         $('#MenuMasOpciones').show(500);
         
      });
      
   });
}

function MostrarAddMantenimiento()
{
   $('#MenuPrincipal').hide(500, function(){
      
      $('#MenuMasOpciones').hide(500, function(){

         $('#MenuAddMantenimiento').show(500);
         
      });
      
   });   
   
}

function MostrarMenu()
{
   $('#MenuMasOpciones').hide(500, function(){
      
      $('#MenuAddMantenimiento').hide(500, function(){

         $('#MenuPrincipal').show(500);
         
      });
      
   });   
   
}