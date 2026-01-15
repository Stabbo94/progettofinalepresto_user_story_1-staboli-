<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span>{{ __('ui.footerFollow') }}</span>
    </div>
    
    <div>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-facebook-f"></i></a>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-twitter"></i></a>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-google"></i></a>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-instagram"></i></a>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-linkedin"></i></a>
      <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-github"></i></a>
    </div>
  </section>
  
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-lightbulb me-2"></i>Presto S.r.l.
          </h6>
          <p>{{ __('ui.footerDesc') }}</p>
        </div>
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">{{ __('ui.usefulLinks') }}</h6>
          <p><a href="#!" class="text-reset">{{ __('ui.pricing') }}</a></p>
          <p><a href="#!" class="text-reset">{{ __('ui.settings') }}</a></p>
          <p><a href="#!" class="text-reset">{{ __('ui.orders') }}</a></p>
          <p><a href="#!" class="text-reset">{{ __('ui.support') }}</a></p>
          <p>
            {{ __('ui.becomeRevisor') }}
            <a href="{{route('become.revisor')}}" class="text-reset"> {{ __('ui.sendRequest') }}</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">{{ __('ui.contacts') }}</h6>
          <p><i class="fas fa-home me-3"></i> Via Misurina 75, 00135 Roma RM</p>
          <p><i class="fas fa-envelope me-3"></i> info@presto.com</p>
          <p><i class="fas fa-phone me-3"></i> + 39 351 956 1403</p>
          <p><i class="fas fa-print me-3"></i> + 39 06 331 3509</p>
        </div>
      </div>
    </div>
  </section>
  
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2026 Copyright: <a class="text-reset fw-bold" href="#">Presto.it</a>
  </div>
</footer>