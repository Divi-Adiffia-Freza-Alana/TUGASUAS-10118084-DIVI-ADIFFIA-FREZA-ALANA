<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/base.css">
    <link rel="stylesheet" href="assets/mobile.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <title>Divi adiffia freza</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light  fixed-top  bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" style="color:#FFFF;" href="index.php">DIRUMAHAJA</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto my-2 my-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data-kasus.php">Data Kasus Corona</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rujukan.php">Daftar RS rujukan</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="Header">
      <div class="container">
        <div class="title-table">
           Data Pandemi Covid-19 per provinsi
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Provinsi</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
            </tr>
          </thead>
          <tbody id="table-data">

          </tbody>
        </table>
      </div>
    </section>
    <footer>
      <div class="copyright  bg-primary">
        Copyright &copy; 2020 All Right Reserved
      </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
    dataProvinsi();
    setInterval(function(){
       dataProvinsi();
     }, 3000 );

     function dataProvinsi(){
     $.ajax({
      url :'api/api_data_kasus.php',
      type : 'GET',
      success : function(data){
        try {
          $('#table-data').html(data);
        } catch {
          alert('Errorr');
        }
      }
     });

     }

    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>


  </body>
</html>
