<header id="home" class="hero-area-2">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-right mt-3">
        <div class="btn-group">
          <button type="button" class="btn btn-border dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Language
            {{-- {{ app()->getLocale() == 'es' ? 'Spanish' : 'English' }} --}}
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('en') }}">English</a>
            <a class="dropdown-item" href="{{ url('es') }}">Spanish</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row space-100 text-center">
      <div class="col-2">
      </div>
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="contents">
          <h2 class="head-title">ny.health.gov</h2>
          <img src="{{ asset('img/health-care-logo.png') }}" alt="">
          <p class="my-4">@lang('auth.shop')</p>
        </div>
      </div>
      <div class="col-2">
      </div>
    </div>
  </div>
</header>
