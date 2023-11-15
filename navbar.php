<?php  if (!isset($_SESSION['email'])): ?>
  <nav class="navbar navbar-expand-sm  glass shadow-glass navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index">ZexCard</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#home">HOME</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#service">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#giftcard">GIFT CARD</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">REGISTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php endif ?>
<?php  if (isset($_SESSION['email'])): ?>
  <nav class="navbar navbar-expand-sm  glass shadow-glass navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index">Coinpay</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="orderbook" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Order"><i class="bi bi-file-earmark-text"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wallet">Wallet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php endif ?>