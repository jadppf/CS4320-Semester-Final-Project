<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Contribute</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<!--
<style>

   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #F0F000;
   }
   /* label underline focus color */
   .input-field input[type=search]:focus {
     border-bottom: 1px solid #F00FFF;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #00F0F0;
   }
	</style>
 -->

<body class='indigo lighten-5'>
  <nav class="indigo" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Contribute</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Git Hub</a></li>
				<li><a href="browseManifests.php">Browse Manifests</a></li>
				<li><a href="addDataset.php">addDataset</a></li>
				<li><a href="login.php">login</a></li>
<!--         <li><input id="search"><i class="material-icons">search</i></li> -->
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section" id="index-banner">
    <div class="white z-depth-1 container" style='padding: 1% 1% 1% 1%;'>
      <br><br>
      <div class="row">
		  <div class="input-field col s12">
		  	<h3>File Upload List</h3>

			  <table class="highlight">
        <thead>
          <tr>
              <th style='width:65%' data-field="name">Name</th>
              <th style='width:10%' data-field="size">Size</th>
              <th style='width:25%' data-field="func"></th>
          </tr>
        </thead>

        <tbody style='padding: 50px 30px 50px 80px;'>
          <?php
            for ($i=0; $i < 5; $i++) {
              echo "<tr>";
              echo "<td> sampleFile".$i."</td>";
              echo "<td> 1kb </td>";
              echo "<td><form method='post' action=''><input type='submit' name='rename' value='rename'><input type='submit' name='remove' value='remove'></form></td>";
            }
          ?>
        </tbody>
        </table>
      <form method="post" action="">
      <!-- <a class="btn-floating btn-large waves-effect waves-light teal lighten-2" name="add"><i class="material-icons">add</i></a> -->
        <input type="submit" name="add" value="add" class="btn-floating btn-large teal lighten-2">
      </form>

    </div>
    </div>
      <div class="row center">
      </div>
      <br><br>

    	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <form method="post" action="">
          <input type="submit" name="submit" value="submit" class="btn-floating btn-large yellow accent-4">
        </form>
      </div>

    </div>
  </div>

  <footer class="page-footer indigo">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <?php
    if(isset($_POST['add'])){
      echo "<script type='text/javascript'>alert('Added File')</script>";
    }
    if (isset($_POST['submit'])) {
      echo "<script type='text/javascript'>alert('Submit files for upload')</script>";
    }
    if (isset($_POST['rename'])) {
      echo "<script type='text/javascript'>alert('rename selected file')</script>";
    }
    if (isset($_POST['remove'])) {
      echo "<script>alert('delete from list')</script>";
    }
  ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
