{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Account Settings')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-account-settings.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- Account settings -->
<section class="tabs-vertical mt-1 section">
  <div class="row">
    <div class="col l4 s12">
      <!-- tabs  -->
      <div class="card-panel">
        <ul class="tabs">
          <li class="tab">
            <a href="#general">
              <i class="material-icons">brightness_low</i>
              <span>General</span>
            </a>
          </li>
          <li class="tab">
            <a href="#change-password">
              <i class="material-icons">lock_open</i>
              <span>Change Password</span>
            </a>
          </li>
          <li class="tab">
            <a href="#info">
              <i class="material-icons">error_outline</i>
              <span> Info</span>
            </a>
          </li>
          <li class="tab">
            <a href="#social-link">
              <i class="material-icons">chat_bubble_outline</i>
              <span>Social Links</span>
            </a>
          </li>
          <li class="tab">
            <a href="#connections">
              <i class="material-icons">link</i>
              <span>Connections</span>
            </a>
          </li>
          <li class="tab">
            <a href="#notifications">
              <i class="material-icons">notifications_none</i>
              <span> Notifications</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col l8 s12">
      <!-- tabs content -->
      <div id="general">
        <div class="card-panel">
          <div class="display-flex">
            <div class="media">
              <img src="{{asset('images/avatar/avatar-12.png')}}" class="border-radius-4" alt="profile image"
                height="64" width="64">
            </div>
            <div class="media-body">
              <div class="general-action-btn">
                <button id="select-files" class="btn indigo mr-2">
                  <span>Upload new photo</span>
                </button>

              </div>
              <small>Allowed JPG, GIF or PNG. Max size of 800kB</small>
              <div class="upfilewrapper">
                <input id="upfile" type="file" />
              </div>
            </div>
          </div>
          <div class="divider mb-1 mt-1"></div>
          <form class="formValidate" method="get">
            <div class="row">
              <div class="col s12">
                <div class="input-field">
                  <label for="uname">Username</label>
                  <input type="text" id="uname" name="uname" value="hermione007" data-error=".errorTxt1">
                  <small class="errorTxt1"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <label for="name">Name</label>
                  <input id="name" name="name" type="text" value="Hermione Granger" data-error=".errorTxt2">
                  <small class="errorTxt2"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" value="granger007@hogward.com" data-error=".errorTxt3">
                  <small class="errorTxt3"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="card-alert card orange lighten-5">
                  <div class="card-content orange-text">
                    <p>Your email is not confirmed. Please check your inbox.</p>
                    <a href="javascript: void(0);">Resend confirmation</a>
                  </div>
                  <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="company" type="text">
                  <label for="company">Company Name</label>
                </div>
              </div>

              <div class="col s12 display-flex justify-content-end form-action">
                <button type="submit" class="btn indigo waves-effect waves-light mr-2">
                  Save changes
                </button>
                <button type="button" class="btn btn-light-pink waves-effect waves-light mb-1">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div id="change-password">
        <div class="card-panel">
          <form class="paaswordvalidate">
            <div class="row">
              <div class="col s12">
                <div class="input-field">
                  <input id="oldpswd" name="oldpswd" type="password" data-error=".errorTxt4">
                  <label for="oldpswd">Old Password</label>
                  <small class="errorTxt4"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="newpswd" name="newpswd" type="password" data-error=".errorTxt5">
                  <label for="newpswd">New Password</label>
                  <small class="errorTxt5"></small>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="repswd" type="password" name="repswd" data-error=".errorTxt6">
                  <label for="repswd">Retype new Password</label>
                  <small class="errorTxt6"></small>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end form-action">
                <button type="submit" class="btn indigo waves-effect waves-light mr-1">Save changes</button>
                <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div id="info">
        <div class="card-panel">
          <form class="infovalidate">
            <div class="row">
              <div class="col s12">
                <div class="input-field">
                  <input id="address" type="text">
                  <label for="address">Address</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="city" type="text">
                  <label for="city">City</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="state" type="text">
                  <label for="state">State</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="postcode" type="text">
                  <label for="postcode">Postcode / ZIP</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="country" type="text">
                  <label for="country">Country</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="pick-birthday" type="text" class="birthdate-picker datepicker">
                  <label for="pick-birthday">Birth date</label>
                </div>
              </div>
              <div class="col s12">
                <label for="languageselect2">Traffic Source</label>
                <div class="input-field">
                  <select class="browser-default" id="languageselect2" multiple="multiple">
                    <option value="ppc" selected>PPC</option>
                    <option value="display">Display</option>
                    <option value="email">Email</option>
                    <option value="sms">SMS</option>
                    <option value="facebookAds" selected>Facebook Ads</option>
                  </select>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="phone-num" type="text" class="validate" value="">
                  <label for="phone-num">Phone</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="web-link" type="text" class="validate">
                  <label for="web-link">Website</label>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end form-action">
                <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
                  changes</button>
                <button type="button" class="btn btn-light-pink waves-effect waves-light ">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div id="social-link">
        <div class="card-panel">
          <form>
            <div class="row">
              <div class="col s12">
                <div class="input-field">
                  <input id="twitter-link" type="text" class="validate" placeholder="Add link"
                    value="https://www.twitter.com">
                  <label for="twitter-link">Twitter</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="fb-link" type="text" class="validate" placeholder="Add link">
                  <label for="fb-link">Facebook</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="google+link" type="text" class="validate" placeholder="Add link">
                  <label for="google+link">Google+</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="linkedin" type="text" class="validate" placeholder="Add link"
                    value="https://www.linkedin.com">
                  <label for="linkedin">LinkedIn</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="instragram-link" type="text" class="validate" placeholder="Add link">
                  <label for="instragram-link">Instagram</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="quora-link" type="text" class="validate" placeholder="Add link">
                  <label for="quora-link">Quora</label>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end form-action">
                <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
                  changes</button>
                <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div id="connections">
        <div class="card-panel">
          <div class="row">
            <div class="col s12 mt-1 mb-1">
              <a href="javascript: void(0);" class="btn cyan waves-effect waves-light">
                Connect to <strong>Twitter</strong>
              </a>
            </div>
            <div class="col s12 mt-1 mb-1">
              <button class="btn btn-small waves-effect waves-light btn-light-indigo float-right">edit</button>
              <h6>You are connected to facebook.</h6>
              <p>Johndoe@gmail.com</p>
            </div>
            <div class="col s12 mt-1 mb-1">
              <a href="javascript: void(0);" class="btn waves-effect waves-light">Connect to
                <strong>Google</strong>
              </a>
            </div>
            <div class="col s12 mt-1 mb-1">
              <button class="btn btn-small btn-light-indigo float-right waves-effect waves-light">edit</button>
              <h6>You are connected to Instagram.</h6>
              <p>Johndoe@gmail.com</p>
            </div>
            <div class="col s12 display-flex justify-content-end form-action">
              <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
                changes</button>
              <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <div id="notifications">
        <div class="card-panel">
          <div class="row">
            <h6 class="col s12 mb-2">Activity</h6>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" checked id="accountSwitch1">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">Email me when someone comments on my article</span>
              </div>
            </div>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" checked id="accountSwitch2">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">
                  Email me when someone answers on my form</span>
              </div>
            </div>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" id="accountSwitch3">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">
                  Email me hen someone follows me</span>
              </div>
            </div>
            <h6 class="col s12 mb-2 mt-2">Application</h6>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" checked id="accountSwitch4">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">News and announcements</span>
              </div>
            </div>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" id="accountSwitch5">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">Weekly product updates</span>
              </div>
            </div>
            <div class="col s12 mb-1">
              <div class="switch">
                <label>
                  <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
                  <span class="lever"></span>
                </label>
                <span class="switch-label w-100">Weekly blog digest</span>
              </div>
            </div>
            <div class="col s12 display-flex justify-content-end form-action mt-2">
              <button type="submit" class="btn indigo waves-light waves-effect mr-sm-1 mr-2">Save
                changes</button>
              <button type="button" class="btn btn-light-pink waves-light waves-effect">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

{{-- page scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-account-settings.js')}}"></script>
@endsection