<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"><b> <?php echo $site_title; ?> </b></a>
      <div class="nav-collapse collapse">
        <ul class="nav pull-right">
        <li>
            <a>
              <i class="icon-calendar icon-large"></i>
              <?php
                $Today = date('y:m:d',mktime(date('H')));
                $new = date('l, F d, Y', strtotime($Today));                      
                echo $new;
              ?>
            </a>
          </li>
          <li>
            <a>
              <i class="icon-user icon-large"></i>
              <strong> 
                <?php echo $_SESSION['SESS_MEMBER_ID']; ?>
              </strong>
            </a>
          </li>
         
          <li>
            <a href="logout.php"> <font color="red"> <i class="icon-minus-sign icon-large"></i> </font> Log Out </a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
	