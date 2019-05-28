


<?php
echo('
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Special <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="AddSpecial.php">Add</a></li>
          <li><a href="ModifySpecial.php">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors <span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="DoctorAproval.php">Aprove Doctors</a></li>
          <li><a href="#">Add</a></li>
          <li><a href="#">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reservation <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Add</a></li>
          <li><a href="#">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Patient <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Add</a></li>
          <li><a href="#">Modify</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
	  
      
    </ul>
  </div>
</nav>

');
?>