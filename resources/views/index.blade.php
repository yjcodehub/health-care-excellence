@extends('layout')
@section('content')
  <!-- How It Works? Start -->
  @if (session()->has('success'))
    <p class="alert alert-danger">{{ session('success') }}</p>
  @endif
  <div id="features-two" class="section">
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
          <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
            <div>
              <p class="btn btn-subtitle">@lang('auth.hiw')</p>
              <h3>@lang('auth.sbm') </h3>
              <p>@lang('auth.cac')
              </p>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </div>
  <!-- How It Works? End -->
  <!-- Learn About Study Start -->
  <section class=" about-study container py-5">
    <h3 class="text-center">@lang('auth.sub-title')</h3>
    <h5 class="text-center">@lang('auth.s-line') </h5>
    <form action="{{ app()->getLocale() . '/save-application' }}" method="POST">
      @csrf
      <div class="row p-4">
        {{-- <div class="col-12">
        <div class="btn-group-toggle" data-toggle="buttons">
          <label for="chx1" class="btn btn-primary">
            <input type="checkbox" class="form-check" id="chx1" checked autocomplete="off"> CHeckbox 1

          </label>
          <label for="chx2" class="btn btn-primary">
            <input type="checkbox" class="form-check" id="chx2" autocomplete="off">Checkbox2

          </label>
          <label for="chx3" class="btn btn-primary">
            <input type="checkbox" class="form-check" id="chx3" autocomplete="off">Checkbox3

          </label>
        </div>
      </div> --}}

        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.mail')">@lang('auth.mail')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.mail')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Flyer')">@lang('auth.Flyer')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Flyer')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Social Media')">@lang('auth.Social Media')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Social Media')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Community Event')">@lang('auth.Community Event')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Community Event')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Website')">@lang('auth.Website')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Website')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Wom')">@lang('auth.Wom')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Wom')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Coupon')">@lang('auth.Coupon')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Coupon')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="@lang('auth.Npo')">@lang('auth.Npo')
            </label>
          </div>
          {{-- <div class="card-header border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('auth.Npo')
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="card-header border-0 btn-group-toggle" data-toggle="buttons">
            <label for="chx1" class="btn btn-link btn-block collapsed btn-apple" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <input type="checkbox" name="how_do_you_know[]" class="form-check" id="chx1" checked autocomplete="off"
                value="other">Other
            </label>
          </div>
          {{-- <div class="card-header border-0 border-0">
            <h5 class="mb-0">
              <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Other
              </button>
            </h5>
          </div> --}}
        </div>
        <div class="col-sm-3"></div>
      </div>

      <div id="collapseTwo" class="collapse mt-3" aria-labelle data-parent="#accordionExample">
        <div class="card-body Regular shadow">
          <h4 class="text-center text-dark my-3">@lang('auth.title') </h4>
          <div class="row">
            <div class="col-sm-12 text-dark mb-3">
              <h6>@lang('auth.cif')</h6>
            </div>
            <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="user">@lang('auth.Enter your First name')</label>
                <input type="text" class="form-control" name="fname" id="" placeholder="First Name">
                <small class="text-danger">
                  @error('fname')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="user">@lang('auth.Enter your Last name')</label>
                <input type="text" class="form-control" name="lname" id="" placeholder="Last Name">
                <small class="text-danger">
                  @error('lname')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="user">@lang('auth.Address1')</label>
                <input type="text" class="form-control" name="addLine1" id="" placeholder="Address">
                <small class="text-danger">
                  @error('addLine1')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="user">@lang('auth.Address 2')</label>
                <input type="text" class="form-control" name="addLine2" id="" placeholder="Address">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="mb-3">
                <label for="user">@lang('auth.City')</label>
                <input type="text" class="form-control" name="city" id="" placeholder="City">
                <small class="text-danger">
                  @error('city')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="mb-3">
                <label for="user">@lang('auth.State')</label>
                <input type="text" class="form-control" name="state" id="" placeholder="State">
                <small class="text-danger">
                  @error('state')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="mb-3">
                <label for="user">@lang('auth.Zip')</label>
                <input type="text" class="form-control" name="zipCode" id="" placeholder="Zip Code">
                <small class="text-danger">
                  @error('zipCode')
                    {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-12 text-dark my-3">
              <h6>@lang('auth.pre-con')</h6>
            </div>
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="email">
                  @lang('auth.email')
                </label>
              </div>
              <input type="email" class="form-control" name="email" id="" placeholder="Email">
              <small class="text-danger">
                @error('email')
                  {{ $message }}
                @enderror
              </small>
            </div>
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="phone-number">
                  @lang('auth.mob-no')
                </label>
              </div>
              <input type="tel" class="form-control" name="tel" id="" placeholder="Phone number">
              <small class="text-danger">
                @error('tel')
                  {{ $message }}
                @enderror
              </small>
            </div>
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="text">
                  @lang('auth.text')
                </label>
              </div>
              <input type="text" class="form-control" name="textOk" id="" placeholder="Text ok?">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h6 class="text-dark my-3">@lang('auth.communiti')</h6>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="south-asian-india"
                    id="south-asian-india">
                  <label class="form-check-label" for="south-asian-india">
                    @lang('auth.sia')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="chinese" id="china">
                  <label class="form-check-label" for="china">
                    @lang('auth.china')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="dominican" id="dominican">
                  <label class="form-check-label" for="dominican">
                    @lang('auth.Dominican')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="filipino" id="filipino">
                  <label class="form-check-label" for="filipino">
                    @lang('auth.Filipino')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="korean" id="korea">
                  <label class="form-check-label" for="korea">
                    @lang('auth.Korean')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="mexican" id="mexican">
                  <label class="form-check-label" for="mexican">
                    @lang('auth.Mexican')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="nigerian" id="nigerian">
                  <label class="form-check-label" for="nigerian">
                    @lang('auth.Nigerian')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="afro-caribbean"
                    id="afro-caribbean">
                  <label class="form-check-label" for="afro-caribbean">
                    @lang('auth.Afro-Caribbean')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="refugee" id="refugee">
                  <label class="form-check-label" for="refugee">
                    @lang('auth.Refugee')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="no" id="no">
                  <label class="form-check-label" for="no">
                    No
                  </label>
                </div>
              </div>
              <small class="text-danger">
                @error('community')
                  {{ $message }}
                @enderror
              </small>
            </div>
            <div class="col-sm-6">
              <h6 class="text-dark my-3">@lang('auth.Pref-Lang')</h6>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="english" id="english">
                  <label class="form-check-label" for="english">
                    @lang('auth.English')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="spanish" id="spanish">
                  <label class="form-check-label" for="spanish">
                    @lang('auth.Spanish')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="chinese" id="chinese">
                  <label class="form-check-label" for="chinese">
                    @lang('auth.china')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="korean" id="korean">
                  <label class="form-check-label" for="korean">
                    @lang('auth.Korean')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="gujarati" id="gujarati">
                  <label class="form-check-label" for="gujarati">
                    @lang('auth.Guj')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="tagalog" id="tagalog">
                  <label class="form-check-label" for="tagalog">
                    @lang('auth.Tagalog')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="pidgin" id="pidgin">
                  <label class="form-check-label" for="pidgin">
                    @lang('auth.Pidgin')
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="urdu" id="urdu">
                  <label class="form-check-label" for="urdu">
                    Urdu
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="hindi" id="hindi">
                  <label class="form-check-label" for="hindi">
                    Hindi
                  </label>
                </div>
                <div class="form-check specify">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="">
                        <input type="checkbox" class="form-check-input"
                          aria-label="checkbox button for following text input" name="languages[]" id="other"
                          value="other">
                      </div>
                      <label class="form-check-label" for="other">
                        @lang('auth.other')
                      </label>
                    </div>
                    <input type="text" name="language_other" class="form-control ml-3"
                      placeholder="Please specify Other langauge" id="otherInput">
                  </div>
                </div>
              </div>
              <small class="text-danger">
                @error('languages')
                  {{ $message }}
                @enderror
              </small>
            </div>
          </div>
          <div class="mb-3">
            <h6 class="text-dark my-3">@lang('auth.mgfam')</h6>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="family" value="yes" id="mgf-y">
              <label class="form-check-label" for="mgf-y">
                @lang('auth.yes')
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="family" value="no" id="mgf-n">
              <label class="form-check-label" for="mgf-n">
                No
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="family" value="Unsure" data-toggle="collapse"
                href="#collapsebtn" role="button" aria-expanded="false" aria-controls="collapsebtn" id="mgf-u">
              <label class="form-check-label" for="mgf-u">
                @lang('auth.Unsure')
              </label>
              <div class="collapse" id="collapsebtn">
                <div class="card card-body">
                  <label class="form-label">@lang('auth.dyalishh')</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="sameHousehold" name="same_household" id="same">
                    <label class="form-check-label" for="same">
                      @lang('auth.yes')
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="differentHousehold" name="same_household"
                      id="different">
                    <label class="form-check-label" for="different">
                      No
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="N/A" name="same_household" id="na">
                    <label class="form-check-label" for="na">
                      N/A
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <small class="text-danger">
              @error('family')
                {{ $message }}
              @enderror
            </small>
            <small class="text-danger">
              @error('same_household')
                {{ $message }}
              @enderror
            </small>
          </div>
          <h6 class="text-dark my-3">@lang('auth.Que') <a href="#">@lang('auth.email') @lang('auth.e-id')</a></h6>
          <div class="submit-button mt-4">
            <button class="btn btn-common btn-effect disabled" id="submit" type="submit"
              style="pointer-events: all; cursor: pointer;">@lang('auth.submit')</button>
            <div id="msgSubmit" class="h3 hidden"></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- Learn About Study End -->


  <!-- Start Video Section -->
  <section class="video-promo section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="video-promo-content text-center embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/o7l1oXYKalI"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <h2 class="mt-3 wow zoomIn text-center" data-wow-duration="1000ms" data-wow-delay="100ms">@lang('auth.video')
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Video Section -->


  <!-- Contact Section Start -->
  <section id="contact">
    <div class="contact-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="offset-top">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header">
                  <p>@lang('auth.new-yorker')
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->
  <!-- Subcribe Section Start -->
  <div id="subscribe" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-xs-12">
          <div class="subscribe-form">
            <div class="form-wrapper">
              <div class="sub-title text-center">
                <p>@lang('auth.policy')
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
  </a>
@endsection
