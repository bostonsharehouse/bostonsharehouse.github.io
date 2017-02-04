<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css"> 
<link rel="stylesheet" type="text/css" href="css/ripples.css"> 
<script src="js/ripples.js"></script>
<script src="js/material.js"></script>
<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>



<?php
$username = "test";
$password = "test";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<a href="javascript:void(0)" class="btn btn-default btn-lg btn-block btn-raised">Guest Schedules</a>
<a href="javascript:void(0)" class="btn btn-default btn-lg btn-block btn-raised">Refunds/Finances</a>
<a href="javascript:void(0)" class="btn btn-default btn-lg btn-block btn-raised">Directions for Guests</a>

<table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th>#</th>
    <th>Column heading</th>
    <th>Column heading</th>
    <th>Column heading</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  </tbody>
</table>

<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
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