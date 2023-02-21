<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/costum.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    @include('template.navbar')

    <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT</span>
                  <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : +62 895391728752</div>
              </div>
              <div class="screen-body-item">
                <div class="app-form" action="/store" method="post">
                  @csrf
                  <div class="app-form-group">
                    <input type="text" class="app-form-control" id="Name" placeholder="NAME" name="Name">
                  </div>
                  <div class="app-form-group">
                    <input type="text" class="app-form-control" id="Email" placeholder="EMAIL" name="Email">
                  </div>
                  <div class="app-form-group">
                    <input type="text" class="app-form-control" id="NoHP" placeholder="CONTACT NO" name="NoHP">
                  </div>
                  <div class="app-form-group message">
                    <input type="text" class="app-form-control" id="Pesan" placeholder="MESSAGE" name="Pesan">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button"><a href="home" role="button">CANCEL</button>
                    <button type="submit" class="app-form-button"><a href="greeting" role="button">SEND</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <hr class="mt-0">

    <footer class="footer  mb-2">
      <p>Di Buat Oleh Kelompok Sekian dari Kelas XII RPL6</p>
    </footer>
  
   <!--bootstrap-->
   <script src="assets/js/bootstrap.js" type="text/javascript"></script>

</body>
</html>