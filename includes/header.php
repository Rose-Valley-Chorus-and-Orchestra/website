<?php
  // Start session if it hasn't been started yet
  if (session_id() == '') session_start();
?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Rose Valley Chorus & Orchestra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active';} ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active';} ?>" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='tickets.php'){echo 'active';} ?>" href="tickets.php">Tickets</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='venue.php'){echo 'active';} ?>" href="venue.php">Venue</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='auditions.php'){echo 'active';} ?>" href="auditions.php">Auditions</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active';} ?>" href="contact.php">Contact Us</a></li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="button" id="loginBtn">Log In</button>
        </form>
      </div>
    </div>
  </nav>

  <script type="text/javascript">
      window.csrfToken = '<?php echo isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : ''; ?>';
  </script>
</header>
