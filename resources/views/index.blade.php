@extends('layout')
@section('content')
  <!-- How It Works? Start -->
  <div id="features-two" class="section">
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
          <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
            <div>
              <p class="btn btn-subtitle">How It Works?</p>
              <h3>State of Health Small Business Marketplace </h3>
              <p>Certified Application Counselors, Marketplace Facilitated Enrollers, and Navigators are types of
                assistors that can help New Yorkers apply for health insurance, understand their coverage options, and
                enroll in a plan that is right for them.
                Individuals and families in Nassau, Suffolk and Westchester counties can now find and purchase in-home
                care from a New York State licensed home care services agency through NY State of Health’s home care
                partner, Carina. To find an agency with trained, certified home care aides in your area, click on “Get
                Started” now.
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
    <h3 class="text-center">Each participant can earn up to $10!</h3>
    <h5 class="text-center">How did you learn about this study? </h5>

    <div class="row p-4">
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Mail
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Flyer
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Social Media
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Community Event
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Website
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Word of Mouth/Friends/Family
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Coupon
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-header border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Non-profit organization or community group
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="card-header border-0 border-0">
          <h5 class="mb-0">
            <button class="btn btn-link btn-block collapsed btn-apple" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Other
            </button>
          </h5>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <form action="{{ app()->getLocale() . '/save-application' }}" method="POST">
      @csrf
      <div id="collapseTwo" class="collapse mt-3" aria-labelle data-parent="#accordionExample">
        <div class="card-body Regular shadow">
          <h4 class="text-center text-dark my-3">Register to join and we’ll contact you soon! </h4>
          <div class="row">
            <div class="col-sm-12 text-dark mb-3">
              <h6>Contact Information:</h6>
            </div>
            <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="user">Enter your First name</label>
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
                <label for="user">Enter your Last name</label>
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
                <label for="user">Address 1</label>
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
                <label for="user">Address 2</label>
                <input type="text" class="form-control" name="addLine2" id="" placeholder="Address">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="mb-3">
                <label for="user">City</label>
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
                <label for="user">State</label>
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
                <label for="user">Zip Code</label>
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
              <h6>Preferred Contact</h6>
            </div>
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="email">
                  Email
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
                  Phone Number
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
                  Text ok
                </label>
              </div>
              <input type="text" class="form-control" name="textOk" id="" placeholder="Text ok?">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h6 class="text-dark my-3">Are you part of one of these immigrant communities</h6>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="south-asian-india"
                    id="south-asian-india">
                  <label class="form-check-label" for="south-asian-india">
                    South Asian Indian
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="chinese" id="china">
                  <label class="form-check-label" for="china">
                    Chinese
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="dominican" id="dominican">
                  <label class="form-check-label" for="dominican">
                    Dominican
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="filipino" id="filipino">
                  <label class="form-check-label" for="filipino">
                    Filipino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="korean" id="korea">
                  <label class="form-check-label" for="korea">
                    Korean
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="mexican" id="mexican">
                  <label class="form-check-label" for="mexican">
                    Mexican
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="nigerian" id="nigerian">
                  <label class="form-check-label" for="nigerian">
                    Nigerian
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="afro-caribbean"
                    id="afro-caribbean">
                  <label class="form-check-label" for="afro-caribbean">
                    Afro-Caribbean
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="community" value="refugee" id="refugee">
                  <label class="form-check-label" for="refugee">
                    Refugee/Asylee
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
              <h6 class="text-dark my-3">Preferred Language</h6>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="english" id="english">
                  <label class="form-check-label" for="english">
                    English
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="spanish" id="spanish">
                  <label class="form-check-label" for="spanish">
                    Spanish
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="chinese" id="chinese">
                  <label class="form-check-label" for="chinese">
                    Chinese
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="korean" id="korean">
                  <label class="form-check-label" for="korean">
                    Korean
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="gujarati" id="gujarati">
                  <label class="form-check-label" for="gujarati">
                    Gujarati
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="tagalog" id="tagalog">
                  <label class="form-check-label" for="tagalog">
                    Tagalog
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="languages[]" value="pidgin" id="pidgin">
                  <label class="form-check-label" for="pidgin">
                    Pidgin
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
                        Other? Specify
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
            <h6 class="text-dark my-3">Are you part of a multi-generational family? (Three or more generations living
              in New York?)</h6>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="family" value="yes" id="mgf-y">
              <label class="form-check-label" for="mgf-y">
                Yes
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
                Unsure
              </label>
              <div class="collapse" id="collapsebtn">
                <div class="card card-body">
                  <label class="form-label">Do you all live in the same household?</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="sameHousehold" name="same_household">
                    <label class="form-check-label" for="flexRadioDefault3">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="differentHousehold" name="same_household">
                    <label class="form-check-label" for="flexRadioDefault1">
                      No
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="N/A" name="same_household">
                    <label class="form-check-label" for="flexRadioDefault1">
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
          </div>
          <h6 class="text-dark my-3">Questions? <a href="#">Email health@ny.gov</a></h6>
          <div class="submit-button mt-4">
            <button class="btn btn-common btn-effect disabled" id="submit" type="submit"
              style="pointer-events: all; cursor: pointer;">Submit</button>
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
          <h2 class="mt-3 wow zoomIn text-center" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Video</h2>
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
                  <p>Hey New Yorkers, 2022 enrollment is here, and so is your opportunity to find low-cost health
                    coverage through NY State of Health. More people than ever are qualifying for financial assistance
                    to pay for their premiums. Get free, local help to compare health plans, and get the coverage you
                    need with low out-of-pocket costs.
                    Funding for this study is provided State.
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
                <p>DATA PROTECTION POLICY: We take the protection of your personal data very seriously. We treat your
                  personal data as confidential and in accordance with the statutory data protection regulations and
                  this privacy policy. Personal information is any data with which you could be personally identified.
                  We will retain the data you provide on the form until you request its deletion, revoke your consent
                  for its storage, or the purpose for its storage no longer pertains. Any mandatory statutory
                  provisions, especially those regarding mandatory data retention periods, remain unaffected by this
                  provision. Above form does not automatically transfer user data to the operators of any social media
                  platform or advertisement agencies. Many data processing operations are only possible with your
                  express consent. You may revoke your consent at any time with future effect. An informal email making
                  this request is sufficient. To revoke the permission please send the email.
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
