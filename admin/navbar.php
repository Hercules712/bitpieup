<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $site; ?>admin/index.php">Admin Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $site; ?>admin/index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li><a href="<?php echo $site; ?>admin/members.php"><i class="glyphicon glyphicon-bookr"></i> Members</a></li>
       
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="<?php echo $site; ?>admin/admins.php"><i class="glyphicon glyphicon-bookr"></i> Admin</a></li>
        <li><a class="btn btn-danger btn-sm" href="../session/login.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>