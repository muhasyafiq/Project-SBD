<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="img/logo.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Team</a> </li>
        <li class="nav-item"> <a class="nav-link" href="order.php">Order</a> </li>
        <a><form action="includes/logout.inc.php" method="post">
          <button>Logout</button>
          </form></a> 
      </ul> 
    </div>
  </div>
</nav>


<style>
  button {
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    position: fixed;
    top: 13px;
  }

  button:hover {
    color: #5f0099;
  }
</style>