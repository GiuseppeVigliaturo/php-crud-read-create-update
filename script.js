function reset(){
  $('#container').html('');
  // $(input).val('');
}

function printData(data) {

  var target = $("#container");

  var template = $("#box-template").html();
  var compiled = Handlebars.compile(template);

  for (var i=0;i<data.length;i++) {

    var configurazione = data[i];
    var configurazioneHTML = compiled(configurazione);
    target.append(configurazioneHTML);

  }
}

function insertNewConfig() {
 reset();
  var me = $(this);
  $.ajax({

    url: 'insertConf.php',
    method: 'POST',
    data: me.serialize(),
    success: function(data) {
      //questo data contiene se l'esito della chiamata
      if (data) {
        getData();
      }
    },
    error: function(error) {

      console.log("error", error);
    }
  });
  //evita alla pagina di ricaricarsi ogni volta
 return false;

}

function getData() {

  $.ajax({

    url: 'getConfig.php',
    method: 'GET',
    success: function(data) {
      console.log(data);

      printData(data);
    },
    error: function(error) {

      console.log("error", error);
    }
  });
}

function main() {

  getData();
  $("#myForm").submit(insertNewConfig);
}

$(document).ready(main);
