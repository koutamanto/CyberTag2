<?php
    $post_json_data = json_encode($_POST);
?><html>
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>KJUNKIE - Zero</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
  <body>
        <!--Google map-->
        <main class="container">
            <div id="map" class="map"></div>
            <p id="info" class="info"></p>
          </main>
    <script type="text/javascript" src="script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnvfCzfTUocTomdfaS9h6xDYBI76RMdbI&callback=init"></script>
      <!--Google Maps-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
  </body>
</html>