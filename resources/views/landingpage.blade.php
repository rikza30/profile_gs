<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>

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

    <section>
        <div class="jumbotron jumbotron-fluid bg-light">
          <div class="container">
            <div class="row pt-5">
              <div class="title col-12 col-lg-6 mt-5">
                <h1>
                  Want to study technology?  <br />
                  Join Us
                </h1>
                <p class="mt-4">
                  Together to build <br />
                  <strong>Better Technology</strong>
                </p>
                <a class="btn btn-primary mt-4" href="#" role="button">Discover</a>
              </div>
              <div class="col-6 col-lg-5">
                <img
                  src="assets/img/bnr.png"
                  alt=""
                  class="banner img-fluid"/>
                <img
                  src="assets/img/bg-bnr2.png"
                  alt=""
                  class="bg img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Home-->
      <Section>
        <div>
          <div>
            <div>
              
            </div>
          </div>
        </div>
      </Section>

      <!-- Location -->
      <section>
        <div class="map">
          <div class="container">
            <div class="row pt-5">
              <div class="col text-center">
                <h1><strong>Location</h1>
                <p>Griyasoft Banjarnegara</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="title col-12 col-lg-6 mt-7">
                <h2><strong>
                  Griyasoft <br>
                  Banjarnegara</strong>
                </h2>
                <p class="mt-4">
                  Ds.Gemuruh RT 03/09, Kaliwuluh, Gemuruh, Kec. Bawang, <br>
                  Kab. Banjarnegara, Jawa Tengah 53471
                </p>
              </div>
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.570562011337!2d109.64224271428083!3d-7.401918574936137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aab255adcc8a5%3A0xb30fc1761c42b33f!2sGriyasoft!5e0!3m2!1sen!2sid!4v1669076803433!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="mt-2">

      <footer class="footer mt-2 mb-2">
        <p>Di Buat Oleh Kelompok Sekian dari Kelas XII RPL6</p>
      </footer>
    <!--bootstrap-->
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>