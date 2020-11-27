<!-- Start Contact Seaction -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="mb-5">@lang('Contact Us')</h3>
            @if(session()->has('message'))
              <div class="alert alert-success">
                {{ session()->get('message') }}
              </div>
            @endif
            <form role="form" class="text-center" action="{{url('/contact/insert')}}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="@lang('Name')" name="name"
                            value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="@lang('phone')" name="phone"
                            value="{{old('phone')}}" required>
                        @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="@lang('Email')"
                            name="email" value="{{old('email')}}" required>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message"
                            placeholder="@lang('Your Message')">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>
              <button type="submit" class="btn-block">@lang('Send')</button>
            </form>
          </div>
          <div class="col-md-6">
            <div class="location">
              <iframe
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              ></iframe
              ><a href="https://www.maps.ie/route-planner.htm"
                >Road Trip Planner</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Seaction -->
