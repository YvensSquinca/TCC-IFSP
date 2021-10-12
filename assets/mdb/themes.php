<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Netto Tattoo</title>
<link rel='shortcut icon' href='img/catrina.png') />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='css/bootstrap.min.css' rel="stylesheet">
<link href='css/mdb.min.css' rel="stylesheet">
<link href='css/style.min.css' rel="stylesheet">
<link href='css/style.css' rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='css/packages/core/main.css' rel='stylesheet' />
<link href='css/packages/bootstrap/main.css' rel='stylesheet' />
<link href='css/packages/timegrid/main.css' rel='stylesheet' />
<link href='css/packages/daygrid/main.css' rel='stylesheet' />
<link href='css/packages/list/main.css' rel='stylesheet' />

<style>
  #calendar {
    max-width: 90%;
    margin: 0 auto;
  }
</style>
</head>
<body>

<div class="modal fade bd-example-modal-lg" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content elegant-color-dark">
      <div class="modal-header">
        <h5 class="modal-title h2p" id="exampleModalLabel" style="color:white;">Detalhes do Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body h3p text-center" style="color:white;">
        <dl class"row">
          <dt>Titulo do Evento</dt>
          <dd id="title"></dd>
          <br>
          <dt>Inicio do Evento</dt>
          <dd id="start"></dd>
          <br>
          <dt>Fim do Evento</dt>
          <dd id="end"></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<main class="containerfull mt-3" style="background-image: url('img/fundo.png'); background-attachment: fixed; margin-top: 5px;">


<div style='display:none'>
<div id='theme-system-selector' class='selector' style='display:none'>
    <select>
        <option value='bootstrap' selected></option>
    </select>
</div>
<div data-theme-system="bootstrap" class='selector' style='display:none'>
    <select>
        <option value='slate' selected></option>
    </select>
</div>
<span id='loading' style='display:none'></span>
</div>
<br><br>
<div class='clear'></div>

<a class="ml-5" href="http://hospedagem.ifspguarulhos.edu.br/~gu170088x/netotattoo/">
	<img src='img/netotattoo.png' height="50" alt="mdb logo">
</a>
<p class="h2p text-center">Agenda</p>
	
<div id='calendar-container' class="mb-5">
    <div id='calendar'></div>
</div>
 
<script src='css/packages/core/main.js'></script>
<script src='css/packages/interaction/main.js'></script>
<script src='css/packages/bootstrap/main.js'></script>
<script src='css/packages/daygrid/main.js'></script>
<script src='css/packages/timegrid/main.js'></script>
<script src='css/packages/list/main.js'></script>
<script src='js/theme-chooser.js'></script>
<!-- titulo -->
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
<!-- texto -->
<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar;

  initThemeChooser({

    init: function(themeSystem) {
      calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'pt-br',
        plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        themeSystem: themeSystem,
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,listMonth'
        },
        defaultDate: '2019-06-12',
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: 'list_eventos.php',
        extraParams: function(){
          return{
            cachebuster: new Date().valueOf()
          };
        },
        eventClick: function(info) {
          info.jsEvent.preventDefault(); // don't let the browser navigate

          $('#visualizar #title').text(info.event.title);
          $('#visualizar #start').text(info.event.start.toLocaleString());
          $('#visualizar #end').text(info.event.end.toLocaleString());
          $('#visualizar').modal('show');
        }
      });
      calendar.render();
    },

    change: function(themeSystem) {
      calendar.setOption('themeSystem', themeSystem);
    }

  });

});


</script>
<script type="text/javascript" src='js/jquery-3.3.1.min.js'></script>
<script type="text/javascript" src='js/popper.min.js'></script>
<script type="text/javascript" src='js/bootstrap.min.js'></script>
<script type="text/javascript" src='js/mdb.min.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    new WOW().init();
    AOS.init();
</script>
<script src='css/packages/core/main.js'></script>
<script src='css/packages/interaction/main.js'></script>
<script src='css/packages/bootstrap/main.js'></script>
<script src='css/packages/daygrid/main.js'></script>
<script src='css/packages/timegrid/main.js'></script>
<script src='css/packages/list/main.js'></script>
<script src='js/theme-chooser.js'></script>
<script src='css/packages/core/locales/pt-br.js'></script>
<script src='js/myscript.js'></script>
</body>
</html>
