<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet"  href="{{asset('/css/payment/confirmation-page.css')}}">
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Days One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap"
    />
  </head>
  <body>
    <div class="confirmation-page">
      <header class="content">
        <div class="payment-heading">
          <h1 class="pembayaran-online-mentoring-container">
            <span>Pembayaran Paket</span>
            <span class="mentoring"> Mentoring</span>
          </h1>
        </div>
        <div class="container4">
          <div class="container5">
            <div class="ellipse-container">
              <div class="frame-child30 active"></div>
              <div class="line-wrapper12">
                <div class="frame-child31 active"></div>
              </div>
              <div class="frame-child32"></div>
              <div class="line-wrapper13">
                <div class="frame-child33"></div>
              </div>
              <div class="frame-child34"></div>
            </div>
          </div>
          <nav class="profile-container">
            <div class="package-container1">
              <div class="paket2">Paket</div>
            </div>
            <div class="profil2">
              Pembayaran
            </div>
            <div class="pembayaran2">
              Konfirmasi
            </div>
          </nav>
        </div>
      </header>
      <div class="thank-you-message">
        <h1 class="thank-you-for">Terima Kasih Telah Memesan!</h1>
        <div class="image-container">
          <img class="thank-you-message-child" alt="" src="asset/payment/PicConfirmation.png" />
        </div>
      </div>
      <div class="frame-div">
        <div class="vector-parent" id="groupContainer">
          {{-- <button class="home-button" onclick="location.href='index.html'"><a href={{route('home-after')}}></a>Home</button> --}}
          {{-- <button class="home-button" onclick="location.href='index.html'">Home</button> --}}
          <button class="home-button" onclick="location.href='{{ route('home-after') }}'">Home</button>
        </div>
      </div>
    </div>

    <script>
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          // Please sync "Mentoring Page" to the project
        });
      }
    </script>
  </body>
</html>
