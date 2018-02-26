<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <?php
      if(!islogin())
      {
        ?>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>

        </ul>

      <?php
      }
      else{
        ?>
        <ul class="nav navbar-nav">
          <li><a href="bankhome1.php">Home</a></li>
          <li><a href="updateblood.php">Update Blood details</a></li>
        <li>  <a href="checkdonar.php">Check donars</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" style="color:red">
          <a class="dropdown-toggle uppercase" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile<span class="caret "></span></a>
          <ul class="dropdown-menu">
            <li><a href="updateprofile.php" > Update profile</a></li>
            <li><a href="updatepwd.php" > Update password</a></li>
            <li><a href="banklogout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
          </ul>
        </li>
        <?php
      }
      ?>
      </ul>

    </div>
  </div>
</nav>
