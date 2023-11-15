<?php if (!isset($_SESSION['email'])) : ?>
  <div class="container text-dark">
    <div class="row" style="min-height: 100vh;">
      <div class="col-12 col-sm-6 d-flex flex-column align-items-start justify-content-center">
        <h1 class="display-3 text-uppercase d-inline"><span class="fw-bold"><span class="text-primary fw-bold lineUp">Virtual</span> Debit Card / <span class="text-primary fw-bold lineUp">Gift</span> Cards</span></h1><br>
        <h5 class="fw-normal">Banks complicate things, we don't. All the Virtual and Gift Card payment functions reachable with a tap on your smartphone.</h5> <br>
        <a class="btn btn-lg btn-primary text-light" href="register">GET STARTED</a>
      </div>
      <div class="col-12 col-sm-6  d-flex flex-column align-items-center justify-content-center d-none d-sm-block">
        <lottie-player src="json/card.json" class="ms-auto" background="transparent" speed="1" style="width: 80%; height: 80%; " loop autoplay></lottie-player>
      </div>
    </div>
  </div>
<?php endif ?>