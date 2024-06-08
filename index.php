<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <title>geolocation</title>
    <style>
        #mapid{  height: 300px;
                 width: 100%;
                 display: flex;
                 justify-content: center;
                 align-items: center;}

         h1{     text-align: center}
         h2{     text-align: center;}
         p{text-align: center}
         
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/gui.css"></link>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script type="module">
        import { appInstance } from "./js/controllers/App.js";
    
    </script>
    <link rel="manifest" href="manifest.json"></link>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <button id="btnToggleDrawer" class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">sua localização</a>
    <div id="installPwaWebAPP"></div>
    <div id="user_identification_div" class="d-flex">
      <i class="bi bi-person-circle"></i>
      <a class="nav-link" href="#">voce está aqui</a>
    </div>
  </nav>


  <div class="container">
    <h1>localização</h1>
    <p>Veja sua localização em tempo real</p>
  </div>


  <div id="drawerMenu" class="drawer container border border-primary-subtle rounded-end">
    <div class="container border border-primary-subtle rounded-end">    
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center py-3">
          <h1 class="text-white">MENU PRINCIPAL</h1>
        </div>
      </div>
    </div>
    <div>
      <br>
        <div class="container">
            <button type="button" class="btn btn-primary w-100" data-action="acao1"
                onclick="">
                  sua localização em longitude e latitude
            </button>
            <hr>
            <button type="button" class="btn btn-primary w-100" data-action="acao1"
                onclick="">
                  codigo completo em https://github.com/vannucchi10/geolocation.git
            </button>
            <hr>
            


        </div>
    </div>
  </div>

    <h1>Sua localização é:</h1>
      <h2></h2>
    <div id="mapid"></div>

    <script src="script.js"></script>
    <script src="index.js"></script>
</body>
</html>