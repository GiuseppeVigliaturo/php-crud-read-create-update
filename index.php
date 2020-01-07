<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-crud-read-create-update</title>

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <div class="box">

        <p> {{ title }} </p>
        <p> {{ description }}</p>
        <p>{{ creazione }}</p>
      </div>
    </script>


    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>
  <body>

    <form id="myForm">
      <label for="titolo">titolo</label>
      <input id="title" type="text" name="titolo" value="">
      <label for="descrizione">descrizione</label>
      <input id="descrizione" type="text" name="descrizione" value="">
      <input type="submit" name="" value="invio">

    </form>
    <form id="myForm2">
      <label for="titolo2">settitolo</label>
      <input id="title2"type="text" name="titolodue" value="">
      <label for="descrizione2">setdescrizione</label>
      <input id="descrizione2"type="text" name="descrizionedue" value="">
      <input type="submit" name="" value="invio">

    </form>

    <form id="myForm3">
      <label for="titolo3">delete id</label>
      <input id="title3" type="text" name="titolodel" value="">
      <input type="submit" name="" value="invio">

    </form>

    <div id="container" class="container">
    </div>
  </body>
</html>
