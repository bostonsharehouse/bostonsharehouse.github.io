<?php
$username = "bostonsharehouse";
$password = "RikuoChan2017";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Resident's Page</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">


  <link href="//fezvrasta.github.io/snackbarjs/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      padding-top: 50px
    }

    #banner {
      border-bottom: none
    }

    .page-header h1 {
      font-size: 4em
    }

    .bs-docs-section {
      margin-top: 8em
    }

    .bs-component {
      position: relative
    }

    .bs-component .modal {
      position: relative;
      top: auto;
      right: auto;
      left: auto;
      bottom: auto;
      z-index: 1;
      display: block
    }

    .bs-component .modal-dialog {
      width: 90%
    }

    .bs-component .popover {
      position: relative;
      display: inline-block;
      width: 220px;
      margin: 20px
    }

    #source-button {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 100;
      font-weight: bold;
      padding: 5px 10px;
    }

    .progress {
      margin-bottom: 10px
    }

    footer {
      margin: 5em 0
    }

    footer li {
      float: left;
      margin-right: 1.5em;
      margin-bottom: 1.5em
    }

    footer p {
      clear: left;
      margin-bottom: 0
    }

    .splash {
      padding: 4em 0 0;
      background-color: #141d27;
      color: #fff;
      text-align: center
    }

    .splash h1 {
      font-size: 4em
    }

    .splash #social {
      margin: 2em 0
    }

    .splash .alert {
      margin: 2em 0
    }

    .section-tout {
      padding: 4em 0 3em;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      background-color: #eaf1f1
    }

    .section-tout .fa {
      margin-right: .5em
    }

    .section-tout p {
      margin-bottom: 3em
    }

    .section-preview {
      padding: 4em 0 4em
    }

    .section-preview .preview {
      margin-bottom: 4em;
      background-color: #eaf1f1
    }

    .section-preview .preview .image {
      position: relative
    }

    .section-preview .preview .image:before {
      box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.1);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      content: "";
      pointer-events: none
    }

    .section-preview .preview .options {
      padding: 1em 2em 2em;
      border: 1px solid rgba(0, 0, 0, 0.05);
      border-top: none;
      text-align: center
    }

    .section-preview .preview .options p {
      margin-bottom: 2em
    }

    .section-preview .dropdown-menu {
      text-align: left
    }

    .section-preview .lead {
      margin-bottom: 2em
    }

    @media (max-width: 767px) {
      .section-preview .image img {
        width: 100%
      }
    }

    .sponsor {
      text-align: center
    }

    .sponsor a:hover {
      text-decoration: none
    }

    @media (max-width: 767px) {
      #banner {
        margin-bottom: 2em;
        text-align: center
      }
    }

    .infobox .btn-sup {
      color: rgba(0, 0, 0, 0.5);
      font-weight: bold;
      font-size: 15px;
      line-height: 30px;
    }

    .infobox .btn-sup img {
      opacity: 0.5;
      height: 30px;
    }

    .infobox .btn-sup span {
      padding-left: 10px;
      position: relative;
      top: 2px;
    }

    .icons-material .row {
      margin-bottom: 20px;
    }

    .icons-material .col-xs-2 {
      text-align: center;
    }

    .icons-material i {
      font-size: 34pt;
    }

    .icon-preview {
      display: inline-block;
      padding: 10px;
      margin: 10px;
      background: #D5D5D5;
      border-radius: 3px;
      cursor: pointer;
    }

    .icon-preview span {
      display: none;
      position: absolute;
      background: black;
      color: #EEE;
      padding: 5px 8px;
      font-size: 15px;
      border-radius: 2px;
      z-index: 10;
    }

    .icon-preview:hover i {
      color: #4285f4;
    }

    .icon-preview:hover span {
      display: block;
      cursor: text;
    }

  </style>
</head>
<body>


<div class="container">
  <!-- Tables
================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1 id="tables">Resources</h1>
        </div>

        <div class="bs-component">
          <table class="table table-striped table-hover ">
            <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Link</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Directions</td>
              <td>To send to Guests before arrival</td>
              <td><a href="resources/directions.pdf" target="_blank">directions.pdf</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Finances</td>
              <td>Review rent, request refunds etc</td>
              <td><a href="https://docs.google.com/spreadsheets/d/1mPwE4s5RdbD6DLr-k5mqkuC7_8ub8jNOr_Gmddfp038/edit#gid=142178490" target="_blank">Google Drive</a></td>
            </tr>
            <tr class="info">
              <td>3</td>
              <td>Guest Schedules</td>
              <td>Please input schedule and sleeping arrangement in this spreadsheet</td>
              <td><a href="https://docs.google.com/spreadsheets/d/1AbK2He_sy1Rk-Zi-til4tzokpOh8DefLVKHxkIsqUVk/edit#gid=0" target="_blank">Google Drive</a></td>
            </tr>
            <tr class="success">
              <td>4</td>
              <td>Reservations</td>
              <td>Review current and past reservations here</td>
              <td><a href="https://docs.google.com/a/college.harvard.edu/spreadsheets/d/1Zwhg69X8iFv9A7DlM0GoJ_C7PkmXPlscXfVpgUNw9kM/edit?usp=drive_web" target="_blank">Google Drive</a></td>
            </tr>
            <tr class="danger">
              <td>5</td>
              <td>Internet</td>
              <td>Review bills/usage</td>
              <td><a href="" target="_blank">ComCast</a></td>
            </tr>
            <tr class="warning">
              <td>6</td>
              <td>Gas/Electricity</td>
              <td>Review bills/usage</td>
              <td><a href="" target="_blank">EverSource</a></td>
            </tr>
            </tr>
            <tr class="active">
              <td>7</td>
              <td>Venmo</td>
              <td>For payments to Sharehouse Account</td>
              <td><a href="https://venmo.com/bostonsharehouse" target="_blank">Venmo</a></td>
            </tr>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>
</div>
<br>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script src="//fezvrasta.github.io/snackbarjs/snackbar.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
</body>
</html>

<?php
      exit;
   } else {
      echo "Bad Cookie.";
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Sorry, that username does not match.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Sorry, that password does not match.";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<!-- <label><input type="text" name="user" id="user" /> Name</label><br /> -->
<!-- <label><input type="password" name="keypass" id="keypass" /> Password</label><br /> -->
<input class="input-medium" type="text" name="user" id="user" placeholder="username">
<input class="input-medium" type="password" name="keypass" id="keypass" placeholder="password">
<input type="submit" id="submit" value="Login" />
</form>


