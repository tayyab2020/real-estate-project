@extends("app")

@section('head_title', 'Properties | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

 <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url({{ URL::asset('assets/img/img01.jpg') }});">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            {{--<div class="quick-search">
              <div class="row">
                {!! Form::open(array('url' => array('search'),'name'=>'search_form','id'=>'search_form','role'=>'form')) !!}
                  <div class="col-md-3 col-sm-3 col-xs-6">

                      <div class="form-group">
                          <label for="city">City</label>

                          <input class="form-control city-input" type="text" placeholder="City, State, Address" name="city_name" id="city-input" autocomplete="off">

                          <input type="hidden" name="city_latitude" id="city-latitude"  />
                          <input type="hidden" name="city_longitude" id="city-longitude"  />

                      </div>

                  </div>
                  <!-- break -->
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" name="purpose">
                        <option value="Sale">For Sale</option>
                        <option value="Rent">For Rent</option>
                      </select>
                    </div>

                  </div>
                  <!-- break -->
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select class="form-control" name="type">
                        @foreach(\App\Types::orderBy('types')->get() as $type)
                        <option value="{{$type->id}}">{{$type->types}}</option>
						@endforeach

                      </select>
                    </div>

                  </div>
                  <!-- break -->
                  <div class="col-md-3 col-sm-3 col-xs-6">

                    <div class="form-group">
                      <label for="maxprice">&nbsp;</label>
                      <input type="submit" name="submit" value="Search Again" class="btn btn-primary btn-block">
                    </div>
                  </div>

                {!! Form::close() !!}
              </div>
            </div>--}}

              <div class="page-title">
                  <h2>Search Results</h2>
              </div>

            <ol class="breadcrumb">
              <li><a href="{{ URL::to('/') }}">Home</a></li>
              <li class="active">Search</li>
            </ol>
          </div>
        </div>

      </div>
    </div>
    <!-- end:header -->

    <!-- begin:content -->
    <div id="content">

      <div class="container">
        <div class="row">
          <!-- begin:article -->
          <div class="col-md-9 col-md-push-3">

            <!-- begin:product -->
            <div class="row container-realestate">

                @if(count($properties) == 0)

                    <h1>No Properties found..</h1>

                @endif

           	  @foreach($properties as $i => $property)
             	 <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="property-container">
              <div class="property-image">

                <img src="{{ URL::asset('upload/properties/'.$property[0]->featured_image.'-s.jpg') }}" alt="{{ $property[0]->property_name }}">
                <div class="property-price">
                  <h4>{{ getPropertyTypeName($property[0]->property_type)->types }}</h4>
                  <span>{{getcong('currency_sign')}}@if($property[0]->sale_price) {{$property[0]->sale_price}} @else {{$property[0]->rent_price}} @endif</span>
                </div>
                <div class="property-status">
                  <span>For {{$property[0]->property_purpose}}</span>
                </div>
              </div>
              <div class="property-features">
                <span><i class="fa fa-home"></i> {{$property[0]->area}}</span>
                <span><i class="fa fa-hdd-o"></i> {{$property[0]->bedrooms}}</span>
                <span><i class="fa fa-male"></i> {{$property[0]->bathrooms}}</span>
              </div>
              <div class="property-content">
                <h3><a href="{{URL::to('properties/'.$property[0]->property_slug)}}">{{ Str::limit($property[0]->property_name,35) }}</a> <small>{{ Str::limit($property[0]->address,40) }}</small></h3>
              </div>
            </div>
          </div>
              <!-- break -->
           	  @endforeach


            </div>
            <!-- end:product -->

          </div>
          <!-- end:article -->

          <!-- begin:sidebar -->
          @include('_particles.sidebar')
          <!-- end:sidebar -->

        </div>
      </div>
    </div>
    <!-- end:content -->

@endsection
