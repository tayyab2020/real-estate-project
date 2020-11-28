@extends("app")

@if(Route::currentRouteName() == 'addproperty')

    @section('head_title', 'Add New Property | '.getcong('site_name') )

@elseif(Route::currentRouteName() == 'addnewconstruction')

    @section('head_title', 'Add New Construction | '.getcong('site_name') )

@else

    @section('head_title', 'Add Home Exchange | '.getcong('site_name') )

@endif


@section('head_url', Request::url())


@section("content")


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">


    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url({{ URL::asset('assets/img/img01.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="page-title">
                        <h2>{{__('text.Post your Property')}}</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">{{__('text.Home')}}</a></li>
                        {{--<li class="active">Add New Property</li>--}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end:header -->

<div id="main" style="width: 60%;margin: auto;margin-top: 25px;">


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            {{ Session::get('flash_message') }}
        </div>
    @endif


    <div class="panel panel-default">

        <div class="panel-body">


            <div class="stepper">
                <ul class="nav nav-tabs" role="tablist">
                    @if(Route::currentRouteName() == 'addnewconstruction')

                        <li role="presentation" class="active">
                            <a class="persistant-disabled" data-content="stepper-step-2"  data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 1">
                                <span class="round-tab">1</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-3"  data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 2">
                                <span class="round-tab">2</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-4"  data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Step 3">
                                <span class="round-tab">3</span>
                            </a>
                        </li>

                        <style>

                            .stepper .nav-tabs > li
                            {
                                width: 33% !important;
                            }

                            .stepper .nav-tabs > li:nth-child(3)::after
                            {
                                background: transparent;
                            }

                        </style>

                        @elseif(Route::currentRouteName() == 'addproperty')

                        <li role="presentation" class="active">
                            <a class="persistant-disabled" data-content="stepper-step-1"  data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Step 1">
                                <span class="round-tab">1</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-2"  data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 2">
                                <span class="round-tab">2</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-3"  data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 3">
                                <span class="round-tab">3</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-4"  data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Step 4">
                                <span class="round-tab">4</span>
                            </a>
                        </li>

                        @else

                        <li role="presentation" class="active">
                            <a class="persistant-disabled" data-content="stepper-step-2"  data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 1">
                                <span class="round-tab">1</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-3"  data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 2">
                                <span class="round-tab">2</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-4"  data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Step 3">
                                <span class="round-tab">3</span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-5"  data-toggle="tab" aria-controls="stepper-step-5" role="tab" title="Step 4">
                                <span class="round-tab">4</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-6"  data-toggle="tab" aria-controls="stepper-step-6" role="tab" title="Step 5">
                                <span class="round-tab">5</span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a class="persistant-disabled" data-content="stepper-step-7"  data-toggle="tab" aria-controls="stepper-step-7" role="tab" title="Step 6">
                                <span class="round-tab">6</span>
                            </a>
                        </li>

                        <style>

                            .stepper .nav-tabs > li
                            {
                                width: 16% !important;
                            }

                            .stepper .nav-tabs > li:nth-child(6)::after
                            {
                                background: transparent;
                            }

                        </style>

                    @endif


                </ul>

                {!! Form::open(array('url' => array('admin/properties/addproperty'),'class'=>'form-horizontal padding-15','name'=>'property_form','id'=>'property_form','role'=>'form','enctype' => 'multipart/form-data')) !!}

                @if(Route::currentRouteName() == 'addproperty')

                    <input type="hidden" name="route" value="property">

                @elseif(Route::currentRouteName() == 'addnewconstruction')

                    <input type="hidden" name="route" value="construction">

                    @else

                    <input type="hidden" name="route" value="home_exchange">

                @endif

                <input type="hidden" name="id" value="{{ isset($property->id) ? $property->id : null }}">

                    <div class="tab-content">

                        <div @if(Route::currentRouteName() == 'addnewconstruction' || Route::currentRouteName() == 'addhomeexchange') class="tab-pane fade" @else class="tab-pane fade in active" @endif role="tabpanel" id="stepper-step-1">

                            <div class="form-group" style="width: 90%;margin: auto;text-align: left;">

                                <h2>{{__('text.Step 1: What do you want to do with your property?')}}</h2>


                                <ul class="property-radios" style="padding: 0;margin-top: 40px;display: inline-block;width: 100%;justify-content: space-between;">

                                @if(isset($property->property_purpose))


                                        <li @if($property->property_purpose=='Sale') class="active1 pp col-md-3 col-sm-6 col-xs-12" @else class="pp col-md-3 col-sm-6 col-xs-12" @endif >

                                            <div class="type-holder-main">

                                                <label style="min-width: 100%;min-height: 147px;">

                                                    <input type="radio" name="property_purpose"  @if($property->property_purpose=='Sale') checked="checked" @endif  value="Sale">

                                                    <img src="{{ URL::asset('assets/img/sale.png') }}" style="width: 100%;height: 105px;">

                                                </label>

                                            </div>
                                        </li>

                                        <li @if($property->property_purpose=='Rent') class="active1 pp col-md-3 col-sm-6 col-xs-12" @else class="pp col-md-3 col-sm-6 col-xs-12" @endif>

                                            <div class="type-holder-main">

                                                <label style="min-width: 100%;min-height: 147px;">

                                                    <img src="{{ URL::asset('assets/img/rent.png') }}"  style="width: 100%;height: 105px;">

                                                    <input type="radio" name="property_purpose" @if($property->property_purpose=='Rent') checked="checked" @endif value="Rent">

                                                </label>

                                            </div>
                                        </li>


                                @else

                                        <li @if(old('property_purpose') == 'Sale') class="active1 pp col-md-3 col-sm-6 col-xs-12" @elseif(old('property_purpose') == '') class="active1 pp col-md-3 col-sm-6 col-xs-12" @else class="pp col-md-3 col-sm-4 col-xs-12"  @endif >

                                            <div class="type-holder-main">

                                                <label style="min-width: 100%;min-height: 147px;">

                                                    <input type="radio" name="property_purpose" @if(old('property_purpose') == 'Sale') checked="checked" @elseif(old('property_purpose') == '') checked="checked"  @endif  value="Sale">

                                                    <img src="{{ URL::asset('assets/img/sale.png') }}" style="width: 100%;height: 105px;">

                                                </label>

                                            </div>
                                        </li>

                                        <li @if(old('property_purpose') == 'Rent') class="active1 pp col-md-3 col-sm-6 col-xs-12" @elseif(old('property_purpose') == '') class="pp col-md-3 col-sm-6 col-xs-12" @else class="pp col-md-3 col-sm-4 col-xs-12"  @endif>

                                            <div class="type-holder-main">

                                                <label style="min-width: 100%;min-height: 147px;">

                                                    <img src="{{ URL::asset('assets/img/rent.png') }}"  style="width: 100%;height: 105px;">

                                                    <input type="radio" name="property_purpose" @if(old('property_purpose') == 'Rent') checked="checked"  @endif value="Rent">

                                                </label>

                                            </div>
                                        </li>

                                @endif

                                    <p class="col-md-5 col-sm-12 col-xs-12" style="padding-left: 10px;display: inline-block">{{__('text.Ad Heading')}}</p>

                                </ul>


                            </div>

                            <ul class="list-inline pull-right">

                                <li>
                                    <a class="btn btn-primary next-step" data-id="stepper-step-1">{{__('text.Next')}}</a>
                                </li>
                            </ul>

                        </div>


                        <div @if(Route::currentRouteName() == 'addnewconstruction' || Route::currentRouteName() == 'addhomeexchange') class="tab-pane fade in active" @else class="tab-pane fade" @endif role="tabpanel" id="stepper-step-2">


                            <div class="form-group main-div" style="width: 90%;margin: auto;">

                                @if(Route::currentRouteName() == 'addnewconstruction')

                                    <h3>{{__('text.Step 1: What type of property are you marketing?')}}</h3>

                                    @elseif(Route::currentRouteName() == 'addproperty')

                                    <h3>{{__('text.Step 2: What type of property are you marketing?')}}</h3>

                                    @else

                                    <h3>{{__('text.Step 1: What kind of home do you have?')}}</h3>

                                    @endif



                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #e6e6e6;padding: 20px;margin: 25px 0px;">

                                    @if(Route::currentRouteName() != 'addhomeexchange')

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Type of house')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->property_type))

                                                <select name="property_type" id="property_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">

                                                @foreach($types as $type)

                                                    <option value="{{$type->id}}" @if($type->id == $property->property_type) selected @endif>{{$type->types}}</option>

                                                @endforeach

                                                </select>


                                            @else

                                                <select name="property_type" id="property_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">

                                                    @foreach($types as $type)

                                                        <option value="{{$type->id}}" @if(old('property_type') == $type->id) selected @endif>{{$type->types}}</option>

                                                    @endforeach

                                                </select>

                                            @endif

                                        </div>

                                    </div>

                                    @if(Route::currentRouteName() == 'addproperty')

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Type of construction')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->construction_type))

                                                <select name="construction_type" id="construction_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="New" @if($property->construction_type == 'New') selected @endif>{{__('text.New')}}</option>
                                                    <option value="Old" @if($property->construction_type == 'Old') selected @endif>{{__('text.Old')}}</option>
                                                </select>

                                                @else

                                                <select name="construction_type" id="construction_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="New" @if(old('construction_type') == 'New') selected @endif>{{__('text.New')}}</option>
                                                    <option value="Old" @if(old('construction_type') == 'Old') selected @endif>{{__('text.Old')}}</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 20px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Year of construction')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <input type="number" step="1" max="" name="year_construction" @if(old('year_construction') != '') value="{{old('year_construction')}}" @else value="{{ isset($property->year_construction) ? $property->year_construction : 1980 }}" @endif class="quantity-field stepper-step-2-validate" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Condition of the building')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->building_condition))

                                                <select name="building_condition" id="building_condition" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Very Good Condition" @if($property->building_condition == 'Very Good Condition') selected @endif>{{__('text.Very Good Condition')}}</option>
                                                    <option value="Good Condition" @if($property->building_condition == 'Good Condition') selected @endif>{{__('text.Good Condition')}}</option>
                                                    <option value="Needs Some Maintenance" @if($property->building_condition == 'Needs Some Maintenance') selected @endif>{{__('text.Needs Some Maintenance')}}</option>
                                                </select>

                                                @else

                                                <select name="building_condition" id="building_condition" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Very Good Condition" @if(old('building_condition') == 'Very Good Condition') selected @endif>{{__('text.Very Good Condition')}}</option>
                                                    <option value="Good Condition" @if(old('building_condition') == 'Good Condition') selected @endif>{{__('text.Good Condition')}}</option>
                                                    <option value="Needs Some Maintenance" @if(old('building_condition') == 'Needs Some Maintenance') selected @endif>{{__('text.Needs Some Maintenance')}}</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>

                                        @else


                                        <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                            <label class="right-label" style="float: left;">{{__('text.Kind of Type')}} <span style="color: red;font-size: 20px;">*</span></label>

                                            <div style="width: 100%;display: inline-block;margin: auto">

                                                @if(isset($property->kind_of_type))

                                                    <select name="kind_of_type" id="kind_of_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                        <option value="For Sale" @if($property->kind_of_type == 'For Sale') selected @endif>{{__('text.For Sale')}}</option>
                                                        <option value="To Rent Social" @if($property->kind_of_type == 'To Rent Social') selected @endif>{{__('text.To Rent Social')}}</option>
                                                        <option value="To Rent Free" @if($property->kind_of_type == 'To Rent Free') selected @endif>{{__('text.To Rent Free')}}</option>
                                                    </select>

                                                    @else

                                                    <select name="kind_of_type" id="kind_of_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                        <option value="For Sale" @if(old('kind_of_type') == 'For Sale') selected @endif>{{__('text.For Sale')}}</option>
                                                        <option value="To Rent Social" @if(old('kind_of_type') == 'To Rent Social') selected @endif>{{__('text.To Rent Social')}}</option>
                                                        <option value="To Rent Free" @if(old('kind_of_type') == 'To Rent Free') selected @endif>{{__('text.To Rent Free')}}</option>
                                                    </select>

                                                    @endif

                                            </div>

                                        </div>

                                        <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 20px 0px;">

                                            <label class="left-label" style="float: left;">{{__('text.Realization (Year)')}}</label>

                                            <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                                <input type="number" step="1" max="" name="realization" @if(old('realization') != '') value="{{old('realization')}}" @else value="{{ isset($property->realization) ? $property->realization : 1980 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                                <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                                <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                            </div>

                                        </div>

                                        <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 20px 0px;">

                                            <label class="left-label" style="float: left;">{{__('text.How many buy homes?')}}</label>

                                            <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                                <input type="number" step="1" max="" name="homes" @if(old('homes') != '') value="{{old('homes')}}" @else value="{{ isset($property->homes) ? $property->homes : 0 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                                <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                                <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                            </div>

                                        </div>

                                        <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 20px 0px;">

                                            <label class="left-label" style="float: left;">{{__('text.How many rental properties?')}}</label>

                                            <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                                <input type="number" step="1" max="" name="rental_properties" @if(old('rental_properties') != '') value="{{old('rental_properties')}}" @else value="{{ isset($property->rental_properties) ? $property->rental_properties : 0 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                                <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                                <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                            </div>

                                        </div>

                                        <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="float: right;margin: 25px 0px;display: inline-block;">

                                            <label class="left-label" style="float: left;">{{__('text.Source Project')}}</label>

                                            <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">
                                                <input type="text" @if(old('citation') != '') value="{{old('citation')}}" @else value="{{ isset($property->citation) ? $property->citation : null }}" @endif name="citation" placeholder="" class="quantity-field" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            </div>

                                        </div>

                                            <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;">

                                                <label class="left-label" style="float: left;">{{__('text.Owner')}}</label>

                                                <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                                    <input type="text"  @if(old('owner') != '') value="{{old('owner')}}" @else value="{{ isset($property->owner) ? $property->owner : null }}" @endif name="owner" placeholder="{{__('text.Owner')}}" class="quantity-field" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">

                                                </div>

                                            </div>


                                    @endif

                                    @endif

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="@if(Route::currentRouteName() != 'addnewconstruction') display: inline-block @else display:none @endif">

                                        <label class="left-label" style="float: left;">{{__('text.Total Bedrooms')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-bed"></i></div>

                                            <input type="number" step="1" max="" name="bedrooms" @if(old('bedrooms') != '') value="{{old('bedrooms')}}" @else value="{{ isset($property->bedrooms) ? $property->bedrooms : 1 }}" @endif @if(Route::currentRouteName() != 'addnewconstruction') class="quantity-field stepper-step-2-validate" @else class="quantity-field" @endif style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="float: right;@if(Route::currentRouteName() != 'addnewconstruction') display: inline-block @else display:none @endif">

                                        <label class="right-label" style="float: left;">{{__('text.Total Bathrooms')}} @if(Route::currentRouteName() != 'addhomeexchange')<span style="color: red;font-size: 20px;">*</span>@endif</label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-restroom"></i></div>

                                            <input type="number" step="1" max="" name="bathrooms" @if(old('bathrooms') != '') value="{{old('bathrooms')}}" @else value="{{ isset($property->bathrooms) ? $property->bathrooms : 1 }}" @endif @if(Route::currentRouteName() != 'addnewconstruction' && Route::currentRouteName() != 'addhomeexchange') class="quantity-field stepper-step-2-validate" @else class="quantity-field" @endif style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>
                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="@if(Route::currentRouteName() != 'addnewconstruction') display: inline-block @else display:none @endif">

                                        <label class="right-label" style="float: left;">{{__('text.SQFT')}} <small>(m2)</small> @if(Route::currentRouteName() != 'addhomeexchange')<span style="color: red;font-size: 20px;">*</span>@endif</label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-crop-alt"></i></div>

                                            <input type="number" step="1" max="" name="area" @if(old('area') != '') value="{{old('area')}}" @else value="{{ isset($property->area) ? $property->area : null }}" @endif placeholder="" @if(Route::currentRouteName() != 'addnewconstruction' && Route::currentRouteName() != 'addhomeexchange') class="quantity-field stepper-step-2-validate" @else class="quantity-field" @endif style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>
                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="float: right;@if(Route::currentRouteName() != 'addnewconstruction') display: inline-block @else display:none @endif">

                                        <label class="left-label" style="float: left;">{{__('text.Volume')}} <small>(m3)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-arrows-alt-h"></i></div>

                                            <input type="number" step="1" max="" name="volume" @if(old('volume') != '') value="{{old('volume')}}" @else value="{{ isset($property->volume) ? $property->volume : null }}" @endif placeholder="" class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>
                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="@if(Route::currentRouteName() != 'addnewconstruction') display: inline-block @else display:none @endif">

                                        <label class="left-label" style="float: left;">{{__('text.Floors')}}</label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-sort-numeric-up"></i></div>

                                            <input type="number" step="1" max="" name="floors" @if(old('floors') != '') value="{{old('floors')}}" @else value="{{ isset($property->floors) ? $property->floors : 1 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                        @if(Route::currentRouteName() == 'addhomeexchange')

                                            <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;">

                                                <label class="left-label" style="float: left;">{{__('text.Owner')}}</label>

                                                <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                                    <input type="text"  @if(old('owner') != '') value="{{old('owner')}}" @else value="{{ isset($property->owner) ? $property->owner : null }}" @endif name="owner" placeholder="{{__('text.Owner')}}" class="quantity-field" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">

                                                </div>

                                            </div>


                                            <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                <label class="left-label" style="float: left;">{{__('text.Type of house')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->property_type))

                                                        <select name="property_type" id="property_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;height: 40px;">

                                                            @foreach($types as $type)

                                                                <option value="{{$type->id}}" @if($type->id == $property->property_type) selected @endif>{{$type->types}}</option>

                                                            @endforeach

                                                        </select>

                                                    @else

                                                        <select name="property_type" id="property_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;height: 40px;">

                                                            @foreach($types as $type)

                                                                <option value="{{$type->id}}" @if(old('property_type') == $type->id) selected @endif>{{$type->types}}</option>

                                                            @endforeach

                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                        @endif

                                </div>


                                    @if(Route::currentRouteName() != 'addhomeexchange')

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #e6e6e6;padding: 20px;margin: 25px 0px;@if(Route::currentRouteName() == 'addnewconstruction') display:none @endif">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Backyard')}} <small>(m2)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <input type="number" step="1" max="" @if(old('backyard') != '') value="{{old('backyard')}}" @else value="{{ isset($property->backyard) ? $property->backyard : null }}" @endif name="backyard" placeholder="800m2" class="quantity-field" style="border: 0;margin: 0;float: left;width: 70%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Frontyard')}} <small>(m2)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <input type="number" step="1" max="" @if(old('frontyard') != '') value="{{old('frontyard')}}" @else value="{{ isset($property->frontyard) ? $property->frontyard : null }}" @endif name="frontyard" placeholder="800m2" class="quantity-field" style="border: 0;margin: 0;float: left;width: 70%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">Garage <small>(m2)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-warehouse"></i></div>

                                            <input type="number" step="1" max="" @if(old('garage') != '') value="{{old('garage')}}" @else value="{{ isset($property->garage) ? $property->garage : null }}" @endif name="garage" placeholder="800m2" class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Terrace')}} <small>(m2)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <input type="number" step="1" max="" @if(old('terrace') != '') value="{{old('terrace')}}" @else value="{{ isset($property->terrace) ? $property->terrace : null }}" @endif name="terrace" placeholder="800m2" class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">Type garage</label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">


                                            <input type="text"  @if(old('garage_type') != '') value="{{old('garage_type')}}" @else value="{{ isset($property->garage_type) ? $property->garage_type : null }}" @endif name="garage_type" placeholder="" class="quantity-field" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">

                                        </div>

                                    </div>


                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #e6e6e6;padding: 20px;margin: 25px 0px;@if(Route::currentRouteName() == 'addnewconstruction') display:none @endif">

                                    <h3 style="width: 100%;">{{__('text.Energy')}}</h3>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Energy Rating')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->energy_rating))

                                                <select name="energy_rating" id="energy_rating" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="A+" @if($property->energy_rating == 'A++++') selected @endif>A++++</option>
                                                    <option value="A+" @if($property->energy_rating == 'A+++') selected @endif>A+++</option>
                                                    <option value="A+" @if($property->energy_rating == 'A++') selected @endif>A++</option>
                                                    <option value="A" @if($property->energy_rating == 'A') selected @endif>A</option>
                                                    <option value="B" @if($property->energy_rating == 'B') selected @endif>B</option>
                                                    <option value="C" @if($property->energy_rating == 'C') selected @endif>C</option>
                                                    <option value="D" @if($property->energy_rating == 'D') selected @endif>D</option>
                                                    <option value="E" @if($property->energy_rating == 'E') selected @endif>E</option>
                                                    <option value="F" @if($property->energy_rating == 'F') selected @endif>F</option>
                                                    <option value="G" @if($property->energy_rating == 'G') selected @endif>G</option>
                                                </select>

                                                @else

                                                <select name="energy_rating" id="energy_rating" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="A+" @if(old('energy_rating') == 'A++++') selected @endif>A++++</option>
                                                    <option value="A+" @if(old('energy_rating') == 'A+++') selected @endif>A+++</option>
                                                    <option value="A+" @if(old('energy_rating') == 'A++') selected @endif>A++</option>
                                                    <option value="A" @if(old('energy_rating') == 'A') selected @endif>A</option>
                                                    <option value="B" @if(old('energy_rating') == 'B') selected @endif>B</option>
                                                    <option value="C" @if(old('energy_rating') == 'C') selected @endif>C</option>
                                                    <option value="D" @if(old('energy_rating') == 'D') selected @endif>D</option>
                                                    <option value="E" @if(old('energy_rating') == 'E') selected @endif>E</option>
                                                    <option value="F" @if(old('energy_rating') == 'F') selected @endif>F</option>
                                                    <option value="G" @if(old('energy_rating') == 'G') selected @endif>G</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 20px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Solar Panel')}}</label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-sort-numeric-up"></i></div>

                                            <input type="number" step="1" max="" name="solar_panel" @if(old('solar_panel') != '') value="{{old('solar_panel')}}" @else value="{{ isset($property->solar_panel) ? $property->solar_panel : 1 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;float: right;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Walls')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->walls))

                                                <select name="walls" id="walls" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Yes" @if($property->walls == 'Yes') selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="No" @if($property->walls == 'No') selected @endif>{{__('text.No')}}</option>
                                                    <option value="Partly" @if($property->walls == 'Partly') selected @endif>{{__('text.Partly')}}</option>
                                                </select>

                                                @else

                                                <select name="walls" id="walls" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Yes" @if(old('walls') == 'Yes') selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="No" @if(old('walls') == 'No') selected @endif>{{__('text.No')}}</option>
                                                    <option value="Partly" @if(old('walls') == 'Partly') selected @endif>{{__('text.Partly')}}</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;margin: 25px 0px;float: right;">

                                        <label class="left-label" style="float: left;">{{__('text.Roof Insulation')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->roof_insulation))

                                                <select name="roof_insulation" id="roof_insulation" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Yes" @if($property->roof_insulation == 'Yes') selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="No" @if($property->roof_insulation == 'No') selected @endif>{{__('text.No')}}</option>
                                                    <option value="Partly" @if($property->roof_insulation == 'Partly') selected @endif>{{__('text.Partly')}}</option>
                                                </select>

                                                @else

                                                <select name="roof_insulation" id="roof_insulation" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Yes" @if(old('roof_insulation') == 'Yes') selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="No" @if(old('roof_insulation') == 'No') selected @endif>{{__('text.No')}}</option>
                                                    <option value="Partly" @if(old('roof_insulation') == 'Partly') selected @endif>{{__('text.Partly')}}</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                        <label class="left-label" style="float: left;">{{__('text.Cook')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->cook))

                                                <select name="cook" id="cook" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Gas" @if($property->cook == 'Gas') selected @endif>{{__('text.Gas')}}</option>
                                                    <option value="Electricity" @if($property->cook == 'Electricity') selected @endif>{{__('text.Electricity')}}</option>
                                                </select>

                                                @else

                                                <select name="cook" id="cook" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="Gas" @if(old('cook') == 'Gas') selected @endif>{{__('text.Gas')}}</option>
                                                    <option value="Electricity" @if(old('cook') == 'Electricity') selected @endif>{{__('text.Electricity')}}</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 20px 0px;">

                                        <label class="right-label" style="float: left;">Type boiler</label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <input type="text" @if(old('type_of_boiler') != '') value="{{old('type_of_boiler')}}" @else value="{{ isset($property->type_of_boiler) ? $property->type_of_boiler : null }}" @endif name="type_of_boiler" placeholder="Type boiler" class="quantity-field" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">

                                        </div>

                                    </div>


                                    @if(isset($property->property_purpose))

                                        @if($property->property_purpose == 'Sale')

                                            <div id="type_agreement_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: none;margin: 25px 0px;">

                                                <label class="left-label" style="float: left;">{{__('text.Type of agreement')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->agreement_type))

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if($property->agreement_type == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if($property->agreement_type == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if(old('agreement_type') == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if(old('agreement_type') == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                            <div id="property_furnished_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: none;margin: 25px 0px;">

                                                <label class="right-label" style="float: left;">{{__('text.Property furnished')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->property_furnished))

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if($property->property_furnished == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if($property->property_furnished == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if(old('property_furnished') == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if(old('property_furnished') == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                        @else

                                            <div id="type_agreement_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                                <label class="left-label" style="float: left;">{{__('text.Type of agreement')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->agreement_type))

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if($property->agreement_type == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if($property->agreement_type == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if(old('agreement_type') == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if(old('agreement_type') == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                            <div id="property_furnished_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;margin: 25px 0px;">

                                                <label class="right-label" style="float: left;">{{__('text.Property furnished')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->property_furnished))

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if($property->property_furnished == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if($property->property_furnished == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if(old('property_furnished') == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if(old('property_furnished') == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                        @endif

                                    @else

                                        @if(old('property_purpose') == 'Rent')

                                            <div id="type_agreement_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin: 25px 0px;">

                                                <label class="left-label" style="float: left;">{{__('text.Type of agreement')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->agreement_type))

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if($property->agreement_type == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if($property->agreement_type == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if(old('agreement_type') == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if(old('agreement_type') == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                            <div id="property_furnished_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;margin: 25px 0px;">

                                                <label class="right-label" style="float: left;">{{__('text.Property furnished')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->property_furnished))

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if($property->property_furnished == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if($property->property_furnished == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if(old('property_furnished') == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if(old('property_furnished') == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                        @else

                                            <div id="type_agreement_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: none;margin: 25px 0px;">

                                                <label class="left-label" style="float: left;">{{__('text.Type of agreement')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->agreement_type))

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if($property->agreement_type == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if($property->agreement_type == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="agreement_type" id="agreement_type" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Temporarily" @if(old('agreement_type') == 'Temporarily') selected @endif>{{__('text.Temporarily')}}</option>
                                                            <option value="Indefinitely" @if(old('agreement_type') == 'Indefinitely') selected @endif>{{__('text.Indefinitely')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                            <div id="property_furnished_box" class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: none;margin: 25px 0px;">

                                                <label class="right-label" style="float: left;">{{__('text.Property furnished')}}</label>

                                                <div style="width: 100%;display: inline-block;margin: auto">

                                                    @if(isset($property->property_furnished))

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if($property->property_furnished == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if($property->property_furnished == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @else

                                                        <select name="property_furnished" id="property_furnished" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                            <option value="Unfurnished" @if(old('property_furnished') == 'Unfurnished') selected @endif>{{__('text.Unfurnished')}}</option>
                                                            <option value="Furnished" @if(old('property_furnished') == 'Furnished') selected @endif>{{__('text.Furnished')}}</option>
                                                        </select>

                                                    @endif

                                                </div>

                                            </div>

                                        @endif

                                    @endif


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;margin: 20px 0px;">

                                        <label class="right-label" style="float: left;">{{__('text.Year of the boiler')}}</label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-sort-numeric-up"></i></div>

                                            <input type="number" step="1" max="" name="year_boiler" @if(old('year_boiler') != '') value="{{old('year_boiler')}}" @else value="{{ isset($property->year_boiler) ? $property->year_boiler : 1980 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div style="width: 100%;display: inline-block;margin: auto">

                                        <ul style="list-style: none;display: inline-block;width: 100%;padding: 0;">

                                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin: 20px 0px;text-align: left;">

                                                    <input name="wheelchair" @if(old('wheelchair') == 1) checked @else @if(isset($property->wheelchair)) checked @endif @endif value="1" type="checkbox" id="wheelchair" style="position: relative;top: 2px;">

                                                    <label class="bg" for="wheelchair">

                                                        <img src="{{ URL::asset('assets/img/signaling.png') }}" class="icon-feature" />

                                                        <span style="position: relative;top: 3px;font-size: 17px;">{{__('text.Wheelchair friendly home for people with walking difficulties')}}</span>

                                                    </label>


                                                </li>


                                        </ul>

                                    </div>


                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 25px;@if(Route::currentRouteName() == 'addnewconstruction') display:none @endif">

                                    <label class="left-label" style="width: 100%;float: left;">{{__('text.Open House')}}</label>

                                    <small style="display: block;width: 100%;">{{__('text.Scheduled period of time in which Property is designated to be open for viewing by potential buyers.')}}</small>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;text-align: left;margin-top: 0;margin-bottom: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-calendar-alt"></i></div>


                                        <input type='text' placeholder="{{__('text.Select Date')}}" name="date" style="box-shadow: none;border: 0;margin: 0;float: left;width: 80%;left: 0;height: 37.5px;text-align: left;padding-left: 0px;" class="form-control" @if(old('date')) value="{{old('date')}}" @else @if(isset($property->date)) value="{{$property->date}}" @else value="" @endif @endif id='datetimepicker4' />


                                        </div>

                                    </div>

                                </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;float: right;text-align: right;margin-top: 0;">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;float: left;text-align: center;">

                                        {{--<label class="left-label" style="width: 70%;float: left;">OPEN HOUSE</label>--}}

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-calendar-alt"></i></div>


                                            <input type='text' placeholder="{{__('text.Time From')}}" name="time_from" style="box-shadow: none;border: 0;margin: 0;float: left;width: 80%;left: 0;height: 37.5px;text-align: left;padding-left: 8px;padding-bottom: 5px;" @if(old('time_from')) value="{{old('time_from')}}" @else @if(isset($property->time_from)) value="{{$property->time_from}}" @else value="" @endif @endif class="form-control" id='datetimepicker3' />


                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        {{--<label class="left-label" style="width: 70%;float: left;">OPEN HOUSE</label>--}}

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-calendar-alt"></i></div>


                                            <input type='text' placeholder="{{__('text.Time To')}}" name="time_to" style="box-shadow: none;border: 0;margin: 0;float: left;width: 80%;left: 0;height: 37.5px;text-align: left;padding-left: 8px;padding-bottom: 5px;" @if(old('time_to')) value="{{old('time_to')}}" @else @if(isset($property->time_to)) value="{{$property->time_to}}" @else value="" @endif @endif class="form-control" id='datetimepicker2' />


                                        </div>

                                    </div>

                                </div>

                                </div>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;@if(Route::currentRouteName() == 'addnewconstruction') display:none @endif">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <label class="left-label" style="float: left;">{{__('text.Available Immediately')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            @if(isset($property->available_immediately))

                                                <select name="available_immediately" id="basic" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="1" @if($property->available_immediately == 1) selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="0" @if($property->available_immediately == 0) selected @endif>{{__('text.No')}}</option>
                                                </select>

                                                @else

                                                <select name="available_immediately" id="basic" class="selectpicker show-tick form-control" data-live-search="true" style="box-shadow: none;width: 100%;">
                                                    <option value="1" @if(old('available_immediately') == 1) selected @endif>{{__('text.Yes')}}</option>
                                                    <option value="0" @if(old('available_immediately') == 0) selected @endif>{{__('text.No')}}</option>
                                                </select>

                                                @endif


                                        </div>

                                    </div>

                                </div>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;@if(Route::currentRouteName() == 'addnewconstruction') display:none @endif">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <label class="left-label" style="float: left;">{{__('text.Available From')}}</label>


                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-calendar-alt"></i></div>

                                            <input type='text' placeholder="{{__('text.Select Date')}}" name="available_from" style="box-shadow: none;border: 0;margin: 0;float: left;width: 80%;left: 0;height: 37.5px;text-align: left;padding-left: 0px;" class="form-control" @if(old('available_from')) value="{{old('available_from')}}" @else @if(isset($property->available_from)) value="{{$property->available_from}}" @else value="" @endif @endif id='datetimepicker5' />

                                        </div>

                                    </div>

                                </div>

                                    @endif


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 20px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;width: 100%;">{{__('text.Property Features')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                        <ul style="list-style: none;display: flex;flex-wrap: wrap;padding: 0;padding-top: 30px;">

                                            <?php $i = 0; if(isset($property->property_features)) { $selected_features = explode(',', $property->property_features); } ?>

                                            @foreach($property_features as $key)

                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin: 30px 0px;text-align: left;display: flex;">

                                                    <input name="property_features[]" @if(old('property_features')) @if(in_array($key->id, old('property_features'))) checked @endif @else @if(isset($property->property_features)) @if(in_array($key->id, $selected_features)) checked @endif @endif @endif value="{{$key->id}}" type="checkbox" id="property_features{{$i}}" style="position: relative;top: 2px;">

                                                    <label class="bg" for="property_features{{$i}}">

                                                        <img src="{{ URL::asset('assets/img/'.$key->icon) }}" class="icon-feature" />

                                                        <span style="position: relative;top: 3px;font-size: 17px;">{{$key->text}}</span>

                                                    </label>


                                                </li>

                                                <?php $i = $i + 1; ?>

                                            @endforeach



                                        </ul>

                                        </div>

                                    </div>

                                </div>


                            </div>





                            {{--<div class="form-group">
                                <label for="" class="col-sm-3 control-label">Property Type</label>
                                <div class="col-sm-4">
                                    <select name="property_type" id="basic" class="selectpicker show-tick form-control" data-live-search="true">

                                        @if(isset($property->property_type))

                                            @foreach($types as $type)
                                                <option value="{{$type->id}}" @if($property->property_type==$type->id) selected @endif>{{$type->types}}</option>

                                            @endforeach

                                        @else

                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->types}}</option>

                                            @endforeach

                                        @endif

                                    </select>
                                </div>
                            </div>--}}


                            {{--<div class="form-group">
                                <label for="" class="col-sm-3 control-label">Purpose</label>
                                <div class="col-sm-4">
                                    <select name="property_purpose" id="basic" class="selectpicker show-tick form-control" data-live-search="true" >
                                        @if(isset($property->property_purpose))

                                            <option value="Sale" @if($property->property_purpose=='Sale') selected @endif>Sale</option>
                                            <option value="Rent" @if($property->property_purpose=='Rent') selected @endif>Rent</option>

                                        @else

                                            <option value="Sale">Sale</option>
                                            <option value="Rent">Rent</option>

                                        @endif

                                    </select>
                                </div>
                            </div>--}}


                            <hr>

                            <ul class="list-inline pull-right">

                                @if(Route::currentRouteName() == 'addproperty')
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>
                                @endif

                                <li>
                                    <a class="btn btn-primary next-step" data-id="stepper-step-2">{{__('text.Next')}}</a>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">

                            <div class="form-group main-div" style="width: 90%;margin: auto;margin-bottom: 40px;">

                                @if(Route::currentRouteName() == 'addnewconstruction' || Route::currentRouteName() == 'addhomeexchange')

                                    <h2>{{__('text.Step 2: Property Description & Price')}}</h2>

                                    @else

                                    <h2>{{__('text.Step 3: Property Description & Price')}}</h2>

                                    @endif


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Property Name Heading')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">


                                            <input type="text" placeholder="{{__('text.Property Title')}}" name="property_name" @if(old('property_name')) value="{{old('property_name')}}" @else value="{{ isset($property->property_name) ? $property->property_name : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate"  >


                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <label class="left-label" style="float: left;">Property Slug</label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <input type="text" placeholder="Property Slug" name="property_slug" @if(old('property_slug')) value="{{old('property_slug')}}" @else value="{{ isset($property->property_slug) ? $property->property_slug : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control">

                                        </div>

                                    </div>

                                </div>

                                    @if(Route::currentRouteName() != 'addhomeexchange')

                                        @if(Route::currentRouteName() == 'addproperty')

                                            @if(old('property_purpose') == 'Sale')

                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Sale Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate"  >

                                                        </div>

                                                        <label style="margin-top: 10px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if(old('cost_for') == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                        </label>

                                                        <label style="margin-left: 15px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if(old('cost_for') == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                        </label>

                                                    </div>

                                                </div>


                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Rent Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control"  >

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" id="service_charges_box" style="padding: 0;display: none;">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" placeholder="" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                    </div>

                                                </div>

                                            @elseif(old('property_purpose') == 'Rent')

                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="sale_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Sale Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control"  >

                                                        </div>

                                                        <label style="margin-top: 10px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." checked> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                        </label>

                                                        <label style="margin-left: 15px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n."> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                        </label>

                                                    </div>

                                                </div>


                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="rent_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Rent Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate"  >

                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" id="service_charges_box" style="padding: 0;">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" placeholder="" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                    </div>

                                                </div>

                                            @else

                                                @if(isset($property->property_purpose))

                                                    @if($property->property_purpose == 'Sale')

                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Sale Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate"  >

                                                                </div>

                                                                <label style="margin-top: 10px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if($property->cost_for == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                                </label>

                                                                <label style="margin-left: 15px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if($property->cost_for == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                                </label>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Rent Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control"  >

                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" id="service_charges_box" style="padding: 0;display: none;">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" placeholder="" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                            </div>

                                                        </div>

                                                    @elseif($property->property_purpose == 'Rent')

                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="sale_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Sale Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control"  >

                                                                </div>

                                                                <label style="margin-top: 10px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if($property->cost_for == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                                </label>

                                                                <label style="margin-left: 15px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if($property->cost_for == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                                </label>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="rent_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Rent Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate"  >

                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" id="service_charges_box" style="padding: 0;">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" placeholder="" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                            </div>

                                                        </div>

                                                    @endif

                                                @else


                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Sale Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate">

                                                            </div>

                                                            <label style="margin-top: 10px;" class="container-radio">
                                                                <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." checked> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                            </label>

                                                            <label style="margin-left: 15px;" class="container-radio">
                                                                <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n."> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                            </label>

                                                        </div>

                                                    </div>


                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Rent Price')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control">

                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" id="service_charges_box" style="padding: 0;display: none;">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="number" placeholder="" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                            </div>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endif

                                        @elseif(Route::currentRouteName() == 'addnewconstruction')

                                            @if(old('kind_of_type') == 'For Sale')

                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Sale Price')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                        <label style="margin-top: 10px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if(old('cost_for') == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                        </label>

                                                        <label style="margin-left: 15px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if(old('cost_for') == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                        </label>

                                                    </div>

                                                </div>


                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Rent Price')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                    </div>

                                                </div>

                                            @elseif(old('kind_of_type') == 'To Rent Social' || old('kind_of_type') == 'To Rent Free')

                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="sale_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Sale Price')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                        <label style="margin-top: 10px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." checked> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                        </label>

                                                        <label style="margin-left: 15px;" class="container-radio">
                                                            <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n."> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                        </label>

                                                    </div>

                                                </div>


                                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="rent_price_box">

                                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                        <label class="left-label" style="float: left;">{{__('text.Rent Price')}}</label>

                                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                            <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                        </div>

                                                    </div>

                                                </div>

                                            @else

                                                @if(isset($property->kind_of_type))

                                                    @if($property->kind_of_type == 'For Sale')

                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Sale Price')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                                <label style="margin-top: 10px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if($property->cost_for == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                                </label>

                                                                <label style="margin-left: 15px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if($property->cost_for == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                                </label>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Rent Price')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                            </div>

                                                        </div>

                                                    @elseif($property->kind_of_type == 'To Rent Social' || $property->kind_of_type == 'To Rent Free')

                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="sale_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Sale Price')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                                <label style="margin-top: 10px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." @if($property->cost_for == 'k.k.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                                </label>

                                                                <label style="margin-left: 15px;" class="container-radio">
                                                                    <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n." @if($property->cost_for == 'v.o.n.') checked @endif> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                                </label>

                                                            </div>

                                                        </div>


                                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="rent_price_box">

                                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                                <label class="left-label" style="float: left;">{{__('text.Rent Price')}}</label>

                                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                    <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                                </div>

                                                            </div>

                                                        </div>

                                                    @endif

                                                @else


                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;" id="sale_price_box">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Sale Price')}}</label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="number" id="sale_price_field" name="sale_price" @if(old('sale_price')) value="{{old('sale_price')}}" @else value="{{ isset($property->sale_price) ? $property->sale_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                            </div>

                                                            <label style="margin-top: 10px;" class="container-radio">
                                                                <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="k.k." checked> <span style="font-weight: 600;margin-left: 3px;">k.k.</span>
                                                            </label>

                                                            <label style="margin-left: 15px;" class="container-radio">
                                                                <input style="position: relative;top: 2px;" name="cost_for" type="radio" value="v.o.n."> <span style="font-weight: 600;margin-left: 3px;">v.o.n.</span>
                                                            </label>

                                                        </div>

                                                    </div>


                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;display: none;" id="rent_price_box">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Rent Price')}}</label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="number" id="rent_price_field" name="rent_price" @if(old('rent_price')) value="{{old('rent_price')}}" @else value="{{ isset($property->rent_price) ? $property->rent_price : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" class="form-control">

                                                            </div>

                                                        </div>

                                                    </div>

                                                @endif

                                                    <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                            <label class="left-label" style="float: left;">{{__('text.Price Description')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                            <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                                <input type="text" placeholder="" name="price_description" @if(old('price_description')) value="{{old('price_description')}}" @else value="{{ isset($property->price_description) ? $property->price_description : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate">

                                                            </div>

                                                        </div>

                                                    </div>

                                            @endif

                                        @endif

                                    @else

                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                <label class="left-label" style="float: left;">{{__('text.Rent Per Month Heading')}} <span style="color: red;font-size: 20px;">*</span></label>

                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                    <input type="number" id="rent_per_month" name="rent_per_month" @if(old('rent_per_month')) value="{{old('rent_per_month')}}" @else value="{{ isset($property->rent_per_month) ? $property->rent_per_month : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control stepper-step-3-validate">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                            <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                                <label class="left-label" style="float: left;">{{__('text.Any Service Costs')}}</label>

                                                <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                                    <input type="number" id="service_costs" name="service_costs" @if(old('service_costs')) value="{{old('service_costs')}}" @else value="{{ isset($property->service_costs) ? $property->service_costs : null }}" @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control">

                                                </div>

                                            </div>

                                        </div>


                                    @endif

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Description Heading')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            <textarea name="description" rows="10" class="form-control stepper-step-3-validate summernote">@if(old('description')) {{old('description')}} @else @if(isset($property->description)) {!! $property->description !!} @endif @endif</textarea>

                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.KEYWORDS/TAGS')}}</label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <input type="text" name="property_keywords" @if(old('property_keywords')) value="{{old('property_keywords')}}" @else @if(isset($property->keywords)) value="{{$property->keywords}}" @endif @endif placeholder="" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;" data-role="tagsinput tag-primary" class="form-control">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr>

                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary next-step" data-id="stepper-step-3">{{__('text.Next')}}</a>
                                </li>
                            </ul>

                        </div>

                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">

                            <div class="form-group main-div" style="width: 90%;margin: auto;margin-bottom: 40px;">

                                @if(Route::currentRouteName() == 'addnewconstruction' || Route::currentRouteName() == 'addhomeexchange')

                                    <h2>{{__('text.Step 3: Address/Location & Photos')}}</h2>

                                    @else

                                    <h2>{{__('text.Step 4: Address/Location & Photos')}}</h2>

                                    @endif


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <label class="left-label" style="float: left;">{{__('text.Address')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <input type="text" id="address-input" placeholder="" name="address" @if(old('address')) value="{{old('address')}}" @else value="{{ isset($property->address) ? $property->address : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control map-input stepper-step-4-validate">
                                            <input type="hidden" name="address_latitude" id="address-latitude" @if(old('address_latitude')) value="{{old('address_latitude')}}" @else value="{{ isset($property->map_latitude) ? $property->map_latitude : 52.3666969 }}" @endif />
                                            <input type="hidden" name="address_longitude" id="address-longitude" @if(old('address_longitude')) value="{{old('address_longitude')}}" @else value="{{ isset($property->map_longitude) ? $property->map_longitude : 4.8945398 }}" @endif  />

                                        </div>

                                    </div>

                                </div>



                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <div id="address-map-container" style="width:100%;height:400px; ">
                                            <div style="width: 100%; height: 100%" id="address-map"></div>
                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">


                                        <label class="left-label" style="float: left;">{{__('text.City')}}</label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">


                                            @if(isset($property->city_id))


                                                @foreach($city_list as $city)

                                                    @if($property->city_id==$city->id)

                                                        <input type="text" value="{{$city->city_name}}" readonly id="city_name" name="city_name" class="form-control stepper-step-4-validate" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;">

                                                        @endif


                                                @endforeach

                                            @else

                                                <input type="text" id="city_name" name="city_name" @if(old('city_name')) value="{{old('city_name')}}" @endif readonly class="form-control stepper-step-4-validate" style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;">


                                            @endif

                                        </div>

                                    </div>

                                </div>

                                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                    <script type="text/javascript" src="{{ URL::asset('assets/js/spartan-multi-image-picker.js') }}"></script>

                                    <h3 style="margin: 30px 0px;display: inline-block;font-size: 15px;font-weight: 600;">{{__('text.Max Images Size')}}</h3>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Featured Image')}} @if(Route::currentRouteName() != 'addhomeexchange')<span style="color: red;font-size: 20px;">*</span>@endif</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            <div class="media">

                                                <div class="media-body media-middle">

                                                    @if(Route::currentRouteName() != 'addhomeexchange')

                                                        @if(isset($property->featured_image))

                                                            <div class="row">
                                                                <div id="featured_image" class="stepper-step-4-validate-new"></div>
                                                                <input type="hidden" id="f_image" name="f_image" value="{{$property->featured_image.'-s.jpg'}}">
                                                            </div>

                                                            <script>

                                                                $("#featured_image").spartanMultiImagePicker({
                                                                    fieldName:   'featured_image',
                                                                    maxCount:         1,
                                                                    groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                    dataImage: '<?php echo URL::asset('upload/properties/'.$property->featured_image.'-s.jpg'); ?>'
                                                                });

                                                            </script>

                                                        @else

                                                        <div class="row">
                                                            <div id="featured_image" class="stepper-step-4-validate-new"></div>
                                                            <input type="hidden" id="f_image" name="f_image" value="">
                                                        </div>

                                                            <script>

                                                                $("#featured_image").spartanMultiImagePicker({
                                                                    fieldName:   'featured_image',
                                                                    maxCount:         1,
                                                                    groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                    dataImage: ''
                                                                });

                                                            </script>

                                                        @endif

                                                        @else

                                                        @if(isset($property->featured_image))

                                                            <div class="row">
                                                                <div id="featured_image"></div>
                                                                <input type="hidden" id="f_image" name="f_image" value="{{$property->featured_image.'-s.jpg'}}">
                                                            </div>

                                                            <script>

                                                                $("#featured_image").spartanMultiImagePicker({
                                                                    fieldName:   'featured_image',
                                                                    maxCount:         1,
                                                                    groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                    dataImage: '<?php echo URL::asset('upload/properties/'.$property->featured_image.'-s.jpg'); ?>'
                                                                });

                                                            </script>

                                                        @else

                                                        <div class="row">
                                                            <div id="featured_image"></div>
                                                            <input type="hidden" id="f_image" name="f_image" value="">
                                                        </div>

                                                            <script>

                                                                $("#featured_image").spartanMultiImagePicker({
                                                                    fieldName:   'featured_image',
                                                                    maxCount:         1,
                                                                    groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                    dataImage: ''
                                                                });

                                                            </script>

                                                            @endif

                                                        @endif


                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Property Image 1')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            <div class="media">

                                                <div class="media-body media-middle">

                                                    <div class="row">

                                                        <?php

                                                        $x = 0;

                                                        if(Auth::user()->usertype == 'Users')
                                                            {
                                                                $limit = 5;
                                                            }
                                                        else
                                                            {
                                                                $limit = 24;
                                                            }

                                                        for($i = 1; $i<=$limit; $i++)
                                                            {
                                                                $p = 'property_images'.$i;

                                                                ?>

                                                        @if(isset($property->$p))

                                                            <?php $x++; ?>

                                                                <div id="{{$p}}"></div>
                                                                <input type="hidden" name="p_image{{$i}}" value="{{$property->$p.'-b.jpg'}}">
                                                                <input type="hidden" name="p_remove{{$i}}" value="0">

                                                            <script>

                                                                $("#{{$p}}").spartanMultiImagePicker({
                                                                    fieldName:   '{{$p}}',
                                                                    maxCount:         1,
                                                                    groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                    dataImage: '<?php echo URL::asset('upload/properties/'.$property->$p.'-b.jpg'); ?>'
                                                                });

                                                            </script>

                                                        @endif

                                                            <?php } ?>

                                                            @if($x < $limit)

                                                                <?php $y = $limit - $x; ?>

                                                                <div id="property_images"></div>

                                                                <script>

                                                                    $("#property_images").spartanMultiImagePicker({
                                                                        fieldName:   'property_images[]',
                                                                        maxCount:         '{{$y}}',
                                                                        groupClassName:   'col-md-5 col-sm-8 col-xs-12',
                                                                        dataImage: ''
                                                                    });

                                                                </script>

                                                            @endif

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Video Upload')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto;border: 1px solid #d7d7d7;">

                                            <div class="media">

                                                @if(isset($property->video))

                                                    <video id="video" style="width: 100%;height: 310px;" controls>
                                                        <source src="{{URL::asset('upload/properties/'.$property->video)}}" class="video_here" type="video/mp4">
                                                        <source src="{{URL::asset('upload/properties/'.$property->video)}}" class="video_here" type="video/ogg">
                                                    </video>

                                                    @else

                                                    <video id="video" style="width: 100%;height: 310px;display: none;" controls>
                                                        <source src="" class="video_here" type="video/mp4">
                                                        <source src="" class="video_here" type="video/ogg">
                                                    </video>

                                                    @endif


                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <label style="margin-bottom: 0;align-self: center;width: 100%;padding-left: 10px;font-family: 'Roboto';font-weight: 700;">
                                                        <input type="file" id="select_video" name="video" style="display: none;" />
                                                        Select Video
                                                    </label>

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>

                                                    <input type="hidden" id="remove_video" name="remove_video" value="0">

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.File Documents')}}</label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <div class="media">

                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <label style="margin-bottom: 0;align-self: center;width: 100%;padding-left: 10px;font-family: 'Roboto';font-weight: 700;">
                                                        <input type="file" name="documents[]" multiple style="display: none;" />
                                                        Select Files
                                                    </label>

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>


                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0px;margin-top: 35px;">

                                    <h4 style="text-align: center;width: 100%;">{{__('text.Floor Plans')}}</h4>

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.First Floor')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto;border:1px solid #d7d7d7;">

                                            <div class="media">

                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <input type="file" name="first_floor" multiple class="filestyle" style="border: none;">

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>

                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin-top: 0px;">


                                        <label class="left-label" style="float: left;">{{__('text.Second Floor')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto;border:1px solid #d7d7d7;">

                                            <div class="media">

                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <input type="file" name="second_floor" multiple class="filestyle" style="border: none;">

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>

                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin-top: 0px;">


                                        <label class="left-label" style="float: left;">{{__('text.Ground Floor')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto;border:1px solid #d7d7d7;">

                                            <div class="media">

                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <input type="file" name="ground_floor" multiple class="filestyle" style="border: none;">

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>

                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;margin-top: 0px;">


                                        <label class="left-label" style="float: left;">{{__('text.Basement')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto;border:1px solid #d7d7d7;">

                                            <div class="media">

                                                <div class="media-body media-middle" style="display: flex;justify-content: space-between;">

                                                    <input type="file" name="basement" multiple class="filestyle" style="border: none;">

                                                    <button type="button" class="remove-btn" style="outline: none;border: 0;color: red;float: right;font-size: 21px;background: transparent;padding: 10px 5px;margin-right: 5px;">

                                                        <i aria-hidden="true" class="fas fa-times-circle" style="position:relative;top: 1px;"></i>

                                                    </button>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <hr>


                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>

                                @if(Route::currentRouteName() != 'addhomeexchange')
                                <li>
                                    <button type="button" data-id="stepper-step-4" class="btn btn-primary submit-form" style="outline: none;">{{ isset($property->property_name) ? __('text.Edit Property') : __('text.Add Property') }}</button>
                                </li>
                                    @else

                                    <li>
                                        <a class="btn btn-primary next-step" data-id="stepper-step-4">{{__('text.Next')}}</a>
                                    </li>

                                @endif
                            </ul>

                        </div>

                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-5">

                            <div class="form-group main-div" style="width: 90%;margin: auto;">

                                    <h2>{{__('text.Step 4: What kind of home are you looking for?')}}</h2>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Im looking for')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            @if(isset($property->preferred_kind))

                                                <select style="border: 0;" class="form-control" name="preferred_kind">

                                                    <option @if($property->preferred_kind == 0) selected @endif value="0">Geen voorkeur</option>

                                                    @foreach($types as $type)

                                                        <option @if($property->preferred_kind == $type->id) selected @endif value="{{$type->id}}">{{$type->types}}</option>

                                                    @endforeach

                                                </select>

                                                @else

                                                <select style="border: 0;" class="form-control" name="preferred_kind">

                                                    <option @if(old('preferred_kind') == 0) selected @endif value="0">Geen voorkeur</option>

                                                    @foreach($types as $type)

                                                        <option @if(old('preferred_kind') == $type->id) selected @endif value="{{$type->id}}">{{$type->types}}</option>

                                                    @endforeach

                                                </select>

                                                @endif


                                        </div>

                                    </div>

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right;">

                                        <label class="right-label" style="float: left;">{{__('text.SQFT Homeexchange')}} <small>(m2)</small></label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-crop-alt"></i></div>

                                            <input type="number" step="1" max="" name="preferred_area" @if(old('preferred_area') != '') value="{{old('preferred_area')}}" @else value="{{ isset($property->preferred_area) ? $property->preferred_area : null }}" @endif placeholder="800m2" class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                </div>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Total Bedrooms')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-bed"></i></div>

                                            <input type="number" step="1" max="" name="preferred_bedrooms" @if(old('preferred_bedrooms') != '') value="{{old('preferred_bedrooms')}}" @else value="{{ isset($property->preferred_bedrooms) ? $property->preferred_bedrooms : 1 }}" @endif class="quantity-field stepper-step-5-validate" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>


                                    <div class="input-group col-lg-5 col-md-5 col-sm-12 col-xs-12 right-div" style="display: inline-block;float: right">

                                        <label class="right-label" style="float: left;">{{__('text.Total Bathrooms')}}</label>

                                        <div class="right-content" style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto;">

                                            <div style="width:20%;float: left;margin-top: 7px;text-align: center;"><i class="fas fa-restroom"></i></div>

                                            <input type="number" step="1" max="" name="preferred_bathrooms" @if(old('preferred_bathrooms') != '') value="{{old('preferred_bathrooms')}}"  @else value="{{ isset($property->preferred_bathrooms) ? $property->preferred_bathrooms : 1 }}" @endif class="quantity-field" style="border: 0;margin: 0;float: left;width: 50%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: -0.1px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: -0.1px;">

                                        </div>

                                    </div>

                                </div>


                            </div>

                            <hr>


                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>

                                    <li>
                                        <a class="btn btn-primary next-step" data-id="stepper-step-5">{{__('text.Next')}}</a>
                                    </li>

                            </ul>

                        </div>

                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-6">

                            <div class="form-group main-div" style="width: 90%;margin: auto;">

                                <h2>{{__('text.Step 5: Preferred Location')}}</h2>

                                <div class="main-childs col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Preferred Place of Residence')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <input type="text" id="looking-input" placeholder="{{__('text.Preferred Place of Residence Placeholder')}}" name="preferred_place" @if(old('preferred_place')) value="{{old('preferred_place')}}" @else value="{{ isset($property->preferred_place) ? $property->preferred_place : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control looking-input stepper-step-6-validate">
                                            <input type="hidden" name="preferred_latitude" id="looking-latitude" @if(old('preferred_latitude')) value="{{old('preferred_latitude')}}" @else value="{{ isset($property->preferred_latitude) ? $property->preferred_latitude : 52.3666969 }}" @endif />
                                            <input type="hidden" name="preferred_longitude" id="looking-longitude" @if(old('preferred_longitude')) value="{{old('preferred_longitude')}}" @else value="{{ isset($property->preferred_longitude) ? $property->preferred_longitude : 4.8945398 }}" @endif  />

                                        </div>

                                    </div>

                                </div>


                                <div class="main-childs col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;float: right;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Homeexchange Radius')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            @if(isset($property->preferred_radius))

                                                <select style="border: 0;" class="form-control" name="preferred_radius">
                                                    <option @if($property->preferred_radius == 0) selected @endif value="0">0 KM</option>
                                                    <option @if($property->preferred_radius == 1) selected @endif value="1">1 KM</option>
                                                    <option @if($property->preferred_radius == 2) selected @endif value="2">2 KM</option>
                                                    <option @if($property->preferred_radius == 5) selected @endif value="5">5 KM</option>
                                                    <option @if($property->preferred_radius == 10) selected @endif value="10">10 KM</option>
                                                    <option @if($property->preferred_radius == 15) selected @endif value="15">15 KM</option>
                                                    <option @if($property->preferred_radius == 30) selected @endif value="30">30 KM</option>
                                                    <option @if($property->preferred_radius == 50) selected @endif value="50">50 KM</option>
                                                    <option @if($property->preferred_radius == 100) selected @endif value="100">100 KM</option>
                                                </select>

                                                @else

                                                <select style="border: 0;" class="form-control" name="preferred_radius">
                                                    <option @if(old('preferred_radius') == 0) selected @endif value="0">0 KM</option>
                                                    <option @if(old('preferred_radius') == 1) selected @endif value="1">1 KM</option>
                                                    <option @if(old('preferred_radius') == 2) selected @endif value="2">2 KM</option>
                                                    <option @if(old('preferred_radius') == 5) selected @endif value="5">5 KM</option>
                                                    <option @if(old('preferred_radius') == 10) selected @endif value="10">10 KM</option>
                                                    <option @if(old('preferred_radius') == 15) selected @endif value="15">15 KM</option>
                                                    <option @if(old('preferred_radius') == 30) selected @endif value="30">30 KM</option>
                                                    <option @if(old('preferred_radius') == 50) selected @endif value="50">50 KM</option>
                                                    <option @if(old('preferred_radius') == 100) selected @endif value="100">100 KM</option>
                                                </select>

                                                @endif

                                        </div>

                                    </div>

                                </div>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 20px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Neighbourhood')}}</label>

                                        <div style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;margin: auto">

                                            <input type="text" placeholder="" name="neighbourhood" @if(old('neighbourhood')) value="{{old('neighbourhood')}}" @else value="{{ isset($property->neighbourhood) ? $property->neighbourhood : null }}" @endif style="border: 0;margin: 0;float: left;width: 100%;left: 0;height: 37.5px;text-align: left;padding-left: 20px;box-shadow: none;"  class="form-control">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr>


                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>

                                <li>
                                    <a class="btn btn-primary next-step" data-id="stepper-step-6">{{__('text.Next')}}</a>
                                </li>

                            </ul>

                        </div>

                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-7">

                            <div class="form-group main-div" style="width: 90%;margin: auto;">

                                <h2>{{__('text.Step 6: Price & Details')}}</h2>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;margin-top: 40px;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Maximum Rent Per Month €')}} <span style="color: red;font-size: 20px;">*</span></label>

                                        <div  style="width: 100%;display: inline-block;border: 1px solid #d7d7d7;border-right: 0;margin: auto">

                                            <input type="number" step="1" max="" placeholder="" name="preferred_rent_max" @if(old('preferred_rent_max') != '') value="{{old('preferred_rent_max')}}" @else value="{{ isset($property->preferred_rent_max) ? $property->preferred_rent_max : null }}" @endif class="quantity-field stepper-step-7-validate" style="border: 0;margin: 0;float: left;width: 70%;left: 0;height: 37.5px;text-align: left;font-weight: bold;padding-left: 20px;">
                                            <input type="button" value="+" class="button-plus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d7d7d7;margin-top: 0px;">
                                            <input type="button" value="-" class="button-minus" data-field="quantity-field" style="float: right;min-width: 15%;width: 15%;font-size: 15px;font-family: monospace;border-right: 1px solid #d1d1d1;margin-top: 0px;">

                                        </div>

                                    </div>

                                </div>

                                <div class="main-childs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                                    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 left-div" style="display: inline-block;">

                                        <label class="left-label" style="float: left;">{{__('text.Homeexchange Description')}}</label>

                                        <div style="width: 100%;display: inline-block;margin: auto">

                                            <textarea name="preferred_description" rows="10" class="form-control summernote">@if(old('preferred_description')) {{old('preferred_description')}} @else {{ isset($property->preferred_description) ? $property->preferred_description : null }} @endif</textarea>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr>


                            <ul class="list-inline pull-right">
                                <li>
                                    <a class="btn btn-default prev-step">{{__('text.Prev')}}</a>
                                </li>

                                <li>
                                    <button type="button" data-id="stepper-step-7" class="btn btn-primary submit-form">{{ isset($property->property_name) ? __('text.Edit Property') : __('text.Add Property') }}</button>
                                </li>

                            </ul>

                        </div>


                    </div>
                {!! Form::close() !!}
            </div>



        </div>
    </div>



	{{--<div class="page-header">
		<h2> {{ isset($property->property_name) ? 'Edit: '. $property->property_name : 'Add Property' }}</h2>

		<a href="{{ URL::to('admin/properties') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

	</div>--}}





</div>


    <style>

        .main-div .main-childs{display: flex;flex-wrap: wrap;justify-content: space-between;}

        .bootstrap-datetimepicker-widget table td .glyphicon
        {
            color: #474747;
        }

        .bootstrap-datetimepicker-widget .timepicker-hour, .bootstrap-datetimepicker-widget .timepicker-minute
        {
            background: white;
        }

        .bootstrap-datetimepicker-widget.dropdown-menu.top:after
        {
            border-top: 6px solid #48cfad;
        }

        .bootstrap-datetimepicker-widget.dropdown-menu.bottom:after
        {
            border-bottom: 6px solid #48cfad;
        }

        .checkbox
        {
            padding-top: 12px;
            padding-left: 20px;
        }

        .checkbox label
        {
            padding-left: 5px;
        }

        .checkbox input[type="checkbox"]
        {
            opacity: 1;
            margin-right: 10px;
            position: relative;
            left: 0;
        }

        .checkbox label::before {
            display: none;
        }

        .note-modal .modal-dialog .modal-content .modal-body .form-group
        {
            margin-bottom: 15px;
        }

        .note-btn-primary
        {
            background-color: green !important;
        }

        .icon-feature
        {
            width: 30px;
            position: relative;
            top:-1px;
            margin-right: 6px;
        }

        tr.bg_color  {
            background-color: #edf671 !important;
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            left: -9999px;
        }
        [type="checkbox"]:not(:checked) + label,
        [type="checkbox"]:checked + label {
            position: relative;
            padding-left: 1.95em;
            cursor: pointer;
            font-weight: 600;
        }

        /* checkbox aspect */
        [type="checkbox"]:not(:checked) + label:before,
        [type="checkbox"]:checked + label:before {
            content: '';
            position: absolute;
            left: 0; top: 9.5px;
            width: 15px; height: 15px;
            border: 2px solid #ccc;
            background: #fff;
            border-radius: 4px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
        }
        /* checked mark aspect */
        [type="checkbox"]:not(:checked) + label:after,
        [type="checkbox"]:checked + label:after {
            content: '\2713\0020';
            position: absolute;
            top: 12.5px; left: 2px;
            font-size: 1.0em;
            line-height: 0.8;
            color: #09ad7e;
            transition: all .2s;
            font-family: 'Lucida Sans Unicode', 'Arial Unicode MS', Arial;
        }
        /* checked mark aspect changes */
        [type="checkbox"]:not(:checked) + label:after {
            opacity: 0;
            transform: scale(0);
        }
        [type="checkbox"]:checked + label:after {
            opacity: 1;
            transform: scale(0.7);
        }
        /* disabled checkbox */
        [type="checkbox"]:disabled:not(:checked) + label:before,
        [type="checkbox"]:disabled:checked + label:before {
            box-shadow: none;
            border-color: #bbb;
            background-color: #ddd;
        }
        [type="checkbox"]:disabled:checked + label:after {
            color: #999;
        }
        [type="checkbox"]:disabled + label {
            color: #aaa;
        }
        /* accessibility */
        /*[type="checkbox"]:checked:focus + label:before,
        [type="checkbox"]:not(:checked):focus + label:before {
            border: 2px dotted blue;
        }*/

        /* hover style just for information */
        label.bg:hover:before {
            border: 2px solid #4778d9!important;
        }

        .bootstrap-tagsinput
        {
            width: 100%;
        }

        .note-video-btn
        {
            background: green !important;
        }

        .validate-error
        {
            border: 1px solid #e02727 !important;
            border-right: 1px solid #e02727 !important;
        }

        .form-group{ width: 90%;margin: auto;}

        @media (max-width: 735px) {

            #main {
                width: 75% !important;
            }
        }


        @media (max-width: 767px) {

            .pp {

                margin-left: 0 !important;
            }
        }

        @media (min-width: 992px)
        {
            .property-radios
            {
                display: flex !important;
            }
        }

        @media (max-width: 991px)
        {

            .right-label, .left-label, .right-content{
                float: none !important;
            }

            .left-div, .right-div, .main-div{

                text-align: center;

            }
        }

        input,
        textarea {
            border: 1px solid #eeeeee;
            box-sizing: border-box;
            margin: 0;
            outline: none;
            padding: 10px;
        }

        input[type="button"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .input-group {
            clear: both;
            margin: 15px 0;
            position: relative;
        }

        .input-group input[type='button'] {
            background-color: #eeeeee;
            min-width: 38.5px;
            width: auto;
            transition: all 300ms ease;
        }

        .input-group .button-minus,
        .input-group .button-plus {
            font-weight: bold;
            height: 38.5px;
            padding: 0;
            width: 38px;
            position: relative;
        }

        .input-group .quantity-field {
            position: relative;
            height: 38px;
            left: -6px;
            text-align: center;
            width: 62px;
            display: inline-block;
            font-size: 13px;
            margin: 0 0 5px;
            resize: vertical;
        }


        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance:textfield;
        }

        .stepper .nav-tabs {
            position: relative;
        }
        .stepper .nav-tabs > li {
            width: 25%;
            position: relative;
        }
        .stepper .nav-tabs > li:after {
            content: '';
            position: absolute;
            background: #f1f1f1;
            display: block;
            width: 100%;
            height: 5px;
            top: 30px;
            left: 50%;
            z-index: 1;
        }
        .stepper .nav-tabs > li.completed::after {
            background: #34bc9b;
        }
        .stepper .nav-tabs > li:last-child::after {
            background: transparent;
        }
        .stepper .nav-tabs > li.active:last-child .round-tab {
            background: #34bc9b;
        }
        .stepper .nav-tabs > li.active:last-child .round-tab::after {
            content: '✔';
            color: #fff;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 0;
            display: block;
        }
        .stepper .nav-tabs [data-toggle='tab'] {
            width: 25px;
            height: 25px;
            margin: 20px auto;
            border-radius: 100%;
            border: none;
            padding: 0;
            color: #f1f1f1;
        }
        .stepper .nav-tabs [data-toggle='tab']:hover {
            background: transparent;
            border: none;
        }
        .stepper .nav-tabs > .active > [data-toggle='tab'], .stepper .nav-tabs > .active > [data-toggle='tab']:hover, .stepper .nav-tabs > .active > [data-toggle='tab']:focus {
            color: #34bc9b;
            cursor: default;
            border: none;
        }
        .stepper .tab-pane {
            position: relative;
            padding-top: 50px;
        }
        .stepper .round-tab {
            width: 25px;
            height: 25px;
            line-height: 22px;
            display: inline-block;
            border-radius: 25px;
            background: #fff;
            border: 2px solid #34bc9b;
            color: #34bc9b;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 14px;
        }
        .stepper .completed .round-tab {
            background: #34bc9b;
        }
        .stepper .completed .round-tab::after {
            content: '✔';
            color: #fff;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 0;
            display: block;
        }
        .stepper .active .round-tab {
            background: #fff;
            border: 2px solid #34bc9b;
        }
        .stepper .active .round-tab:hover {
            background: #fff;
            border: 2px solid #34bc9b;
        }
        .stepper .active .round-tab::after {
            display: none;
        }
        .stepper .disabled .round-tab {
            background: #fff;
            color: #f1f1f1;
            border-color: #f1f1f1;
        }
        .stepper .disabled .round-tab:hover {
            color: #4dd3b6;
            border: 2px solid #a6dfd3;
        }
        .stepper .disabled .round-tab::after {
            display: none;
        }

        ul.property-radios li{
            display: inline-block; margin: 0; padding: 0; vertical-align: top;
        }

        li{ list-style: none; }

        .type-holder-main{ position: relative; }

        ul.property-radios li input{ display: none; }

        ul.property-radios li label {  -webkit-transition: all .5s ease-in-out; transition: all .5s ease-in-out ;overflow: hidden; padding: 20px; cursor: pointer; border: solid 1px #dddddd; -webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px; background-color: #fff;text-align: center; }

        .user-holder.create-property-holder ul.property-radios li label { display: block; min-height: 55px; }


        ul.property-radios li label span { padding-top: 15px;font-size: 13px; font-weight: 700; line-height: 19px; display: block; width: 100%; text-align: center; color: #5a2e8a !important; }


        li.active1 > div > label, label:hover{

            border-color: #5a2e8a !important;

        }

        .dropdown-menu{ position:absolute;top:100%;left:0;z-index:1000;display:none;
            float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;
            text-align:left;list-style:none;-webkit-background-clip:padding-box;
            background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);
            border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);
            box-shadow:0 6px 12px rgba(0,0,0,.175) }

        .bootstrap-tagsinput {
            display: inline-block;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: 22px;
            cursor: text;
        }
        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            padding: 0;
            margin: 0;
            width: auto !important;
            max-width: inherit;
            vertical-align: middle;
        }
        .bootstrap-tagsinput input:focus {
            border: none;
            box-shadow: none;
        }
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #fff;
        }
        .bootstrap-tagsinput .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;
        }
        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "x";
        }
        .bootstrap-tagsinput .tag [data-role="remove"]:hover {
            box-shadow: none;
        }
        .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
            box-shadow: none;
        }

    </style>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>


    <script>

        $(document).ready(function() {

            $('.file-upload').change(function() {
                var file = $(this)[0].files[0].name;
                $(this).parent().children('span').text(file);
            });

            $('.looking-input').on('keyup keypress', function(e) {

                var keyCode = e.keyCode || e.which;

                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }

                const locationInputs = $(this);

                var options = {

                    componentRestrictions: {country: "nl"}

                };

                const autocompletes = [];
                const geocoder = new google.maps.Geocoder;

                for (let i = 0; i < locationInputs.length; i++) {

                    const input = locationInputs[i];
                    const fieldKey = input.id.replace("-input", "");

                    const autocomplete = new google.maps.places.Autocomplete(input,options);
                    autocomplete.key = fieldKey;
                    autocompletes.push({input: input, autocomplete: autocomplete});
                }

                for (let i = 0; i < autocompletes.length; i++) {

                    const input = autocompletes[i].input;
                    const autocomplete = autocompletes[i].autocomplete;


                    google.maps.event.addListener(autocomplete, 'place_changed', function () {

                        const place = autocomplete.getPlace();

                        geocoder.geocode({'placeId': place.place_id}, function (results, status) {



                            if (status === google.maps.GeocoderStatus.OK) {

                                if (results[0]) {

                                    const lat = results[0].geometry.location.lat();
                                    const lng = results[0].geometry.location.lng();


                                    $(input).parent().children('#looking-latitude').val(lat);
                                    $(input).parent().children('#looking-longitude').val(lng);

                                    var value = $(input).val();

                                }
                                else
                                {

                                    alert("No results found!");

                                }

                            }

                        });

                        if (!place.geometry) {
                            window.alert("No details available for input: '" + place.name + "'");
                            input.value = "";
                            return;
                        }



                    });
                }


            });

            $(".remove-btn").on('click', function() {

                $('#select_video').val('');

                $('#remove_video').val(1);

                $('#video').hide();

            });

            $("#select_video").on('change', function() {

                var $source = $('.video_here');
                $source[0].src = URL.createObjectURL(this.files[0]);
                $source.parent()[0].load();
                $('#video').show();

                $('#remove_video').val(0);

            });

            $(".submit-form").on('click', function() {


                var step = $(this).data('id');

                var check = 0;

                $('#' + step + ' .' + step + '-validate').map(function() {

                    if(!$(this).val())
                    {
                        $(this).parent().addClass('validate-error');
                        check = 1;
                    }
                    else
                    {
                        $(this).parent().removeClass('validate-error');
                    }

                });


                $('#' + step + ' .' + step + '-validate-new').map(function() {

                    if(!$(this).next('input').val())
                    {
                        $(this).children().children().addClass('validate-error');
                        check = 1;
                    }
                    else
                    {
                        $(this).children().children().removeClass('validate-error');
                    }

                });

                if(!check)
                {
                    $(this).attr('disabled',true);
                    $("#property_form").submit();
                }
                else{

                    document.body.scrollTop = document.documentElement.scrollTop = 100;
                }

            });

            var eltPrimary = $('[data-role="tagsinput tag-primary"]');
            eltPrimary.tagsinput({
                tagClass: 'label label-primary'
            });

            var eltDefault = $('[data-role="tagsinput tag-default"]');
            eltDefault.tagsinput({
                tagClass: 'label label-default'
            });

            var eltDanger = $('[data-role="tagsinput tag-danger"]');
            eltDanger.tagsinput({
                tagClass: 'label label-danger'
            });

                initialize();


            function initialize() {

                $('form').on('keyup keypress', function(e) {
                    var keyCode = e.keyCode || e.which;
                    if (keyCode === 13) {
                        e.preventDefault();
                        return false;
                    }
                });
                const locationInputs = document.getElementsByClassName("map-input");

                var options = {

                    componentRestrictions: {country: "nl"}

                };

                const autocompletes = [];
                const geocoder = new google.maps.Geocoder;
                for (let i = 0; i < locationInputs.length; i++) {

                    const input = locationInputs[i];
                    const fieldKey = input.id.replace("-input", "");
                    const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

                    const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || 52.3666969;
                    const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 4.8945398;

                    const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                        center: {lat: latitude, lng: longitude},
                        zoom: 13
                    });

                    var base_url = window.location.origin;

                    var home_icon = base_url + '/assets/img/home_pin.png';


                    const marker = new google.maps.Marker({
                        map: map,
                        position: {lat: latitude, lng: longitude},
                        draggable: true,
                        animation: google.maps.Animation.DROP,
                        icon: {url:home_icon, scaledSize: new google.maps.Size(45, 50)}
                    });

                    google.maps.event.addListener(marker, 'dragend', function(marker) {
                        var latLng = marker.latLng;
                        document.getElementById('address-latitude').value = latLng.lat();
                        document.getElementById('address-longitude').value = latLng.lng();

                        geocoder.geocode({'latLng': this.getPosition()}, function(results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                if (results[0]) {

                                    var city_check = 0;

                                   $('#address-input').val(results[0].formatted_address);

                                    for(var a=0; a < results[0]['address_components'].length; a++)
                                    {

                                        if(results[0]['address_components'][a]['types'][0] == 'locality')
                                        {

                                            $('#city_name').val(results[0]['address_components'][a]['long_name']);

                                            city_check = 1;

                                        }

                                    }

                                    if(city_check == 0)
                                    {

                                        for(var b=0; b < results[0]['address_components'].length; b++)
                                        {

                                            if(results[0]['address_components'][b]['types'][0] == 'administrative_area_level_2')
                                            {


                                                $('#city_name').val(results[0]['address_components'][b]['long_name']);

                                                city_check = 1;

                                            }

                                        }

                                    }

                                    if(city_check == 0)
                                    {

                                        for(var c=0; c < results[0]['address_components'].length; c++)
                                        {

                                            if(results[0]['address_components'][c]['types'][0] == 'postal_town')
                                            {


                                                $('#city_name').val(results[0]['address_components'][c]['long_name']);

                                                city_check = 1;

                                            }

                                        }

                                    }

                                    if(city_check == 0)
                                    {
                                        $('#city_name').val();
                                    }

                                }

                                else
                                {
                                    $('#address-input').val();
                                    $('#city_name').val();

                                }
                            }
                        });

                    });

                    marker.setVisible(isEdit);

                    const autocomplete = new google.maps.places.Autocomplete(input,options);
                    autocomplete.key = fieldKey;
                    autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
                }

                for (let i = 0; i < autocompletes.length; i++) {
                    const input = autocompletes[i].input;
                    const autocomplete = autocompletes[i].autocomplete;
                    const map = autocompletes[i].map;
                    const marker = autocompletes[i].marker;

                    google.maps.event.addListener(autocomplete, 'place_changed', function () {
                        marker.setVisible(false);
                        const place = autocomplete.getPlace();

                        geocoder.geocode({'placeId': place.place_id}, function (results, status) {



                            if (status === google.maps.GeocoderStatus.OK) {

                                if (results[0]) {


                                    const lat = results[0].geometry.location.lat();
                                    const lng = results[0].geometry.location.lng();
                                    setLocationCoordinates(autocomplete.key, lat, lng);

                                    var city_check1 = 0;

                                    for(var e=0; e < results[0]['address_components'].length; e++)
                                    {

                                        if(results[0]['address_components'][e]['types'][0] == 'locality')
                                        {

                                            $('#city_name').val(results[0]['address_components'][e]['long_name']);

                                            city_check1 = 1;

                                        }

                                    }

                                    if(city_check1 == 0)
                                    {
                                        for(var x=0; x < results[0]['address_components'].length; x++)
                                        {

                                            if(results[0]['address_components'][x]['types'][0] == 'administrative_area_level_2')
                                            {

                                                $('#city_name').val(results[0]['address_components'][x]['long_name']);

                                                city_check1 = 1;

                                            }

                                        }
                                    }



                                    if(city_check1 == 0)
                                    {

                                        for(var y=0; y < results[0]['address_components'].length; y++)
                                        {

                                            if(results[0]['address_components'][y]['types'][0] == 'postal_town')
                                            {


                                                $('#city_name').val(results[0]['address_components'][y]['long_name']);

                                                city_check1 = 1;

                                            }

                                        }

                                    }

                                    if(city_check1 == 0)
                                    {
                                        $('#city_name').val();
                                    }
                                }
                                else
                                {

                                    $('#city_name').val();

                                }

                            }
                        });

                        if (!place.geometry) {
                            window.alert("No details available for input: '" + place.name + "'");
                            input.value = "";
                            return;
                        }

                        if (place.geometry.viewport) {
                            map.fitBounds(place.geometry.viewport);
                        } else {
                            map.setCenter(place.geometry.location);
                            map.setZoom(17);
                        }
                        marker.setPosition(place.geometry.location);
                        marker.setVisible(true);

                    });
                }
            }

            function setLocationCoordinates(key, lat, lng) {
                const latitudeField = document.getElementById(key + "-" + "latitude");
                const longitudeField = document.getElementById(key + "-" + "longitude");
                latitudeField.value = lat;
                longitudeField.value = lng;
            }

            $('.summernote').summernote({
                height: 250,   //set editable area's height
                toolbar:[["style",["style"]],["font",["bold","underline","clear"]],["fontname",["fontname"]],["fontsize", ["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],["insert",["link","picture","video"]],["view",["fullscreen","codeview","help"]]],
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36', '48' , '64', '82', '150'],
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });


            $('#datetimepicker4').datetimepicker({format: 'DD/MM/YYYY',locale: 'nl'});

            $('#datetimepicker4').on('dp.change', function(e){

                if($(this).val()){

                    $('#datetimepicker2').addClass('stepper-step-2-validate');
                    $('#datetimepicker3').addClass('stepper-step-2-validate');

            }
                else
                {

                    $('#datetimepicker2').parent().removeClass('validate-error');
                    $('#datetimepicker3').parent().removeClass('validate-error');

                    $('#datetimepicker2').removeClass('stepper-step-2-validate');
                    $('#datetimepicker3').removeClass('stepper-step-2-validate');
                }

            });

            $('#datetimepicker5').datetimepicker({format: 'DD/MM/YYYY',locale: 'nl'});

            $('#datetimepicker3').datetimepicker({
                format: 'LT',
                locale: 'nl'
            });

            $('#datetimepicker2').datetimepicker({
                format: 'LT',
                locale: 'nl'
            });

            function incrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[type=number]').val(), 10);


                if (!isNaN(currentVal)) {
                    parent.find('input[type=number]').val(currentVal + 1);
                } else {
                    parent.find('input[type=number]').val(0);
                }
            }

            function decrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[type=number]').val(), 10);

                if (!isNaN(currentVal) && currentVal > 0) {
                    parent.find('input[type=number]').val(currentVal - 1);
                } else {
                    parent.find('input[type=number]').val(0);
                }
            }

            $('.input-group').on('click', '.button-plus', function(e) {
                incrementValue(e);
            });

            $('.input-group').on('click', '.button-minus', function(e) {
                decrementValue(e);
            });


            $('input[name=property_purpose]').change(function(){


                $('.pp').removeClass('active1');

                $(this).parent().closest('li').addClass('active1');

                if( $(this).val() == "Sale" )
                {
                    $('#rent_price_box').hide();
                    $('#rent_price_field').removeClass('stepper-step-3-validate');
                    $('#sale_price_box').show();
                    $('#sale_price_field').addClass('stepper-step-3-validate');
                    $('#type_agreement_box').hide();
                    $('#property_furnished_box').hide();
                    $('#service_charges_box').hide();
                }
                else
                {
                    $('#sale_price_box').hide();
                    $('#sale_price_field').removeClass('stepper-step-3-validate');
                    $('#rent_price_box').show();
                    $('#rent_price_field').addClass('stepper-step-3-validate');
                    $('#type_agreement_box').show();
                    $('#property_furnished_box').show();
                    $('#service_charges_box').show();

                }

            });

            $('#kind_of_type').change(function(){

                if( $(this).val() == "For Sale" )
                {
                    $('#rent_price_box').hide();
                    $('#sale_price_box').show();
                }
                else if( $(this).val() == "To Rent Social" || $(this).val() == "To Rent Free" )
                {
                    $('#sale_price_box').hide();
                    $('#rent_price_box').show();

                }

            });


            $('input[name=property_type]').change(function(){

                $('.pt').removeClass('active1');

                $(this).parent().closest('li').addClass('active1');

            });

            var $global = 0;

            function triggerClick(elem) {

                $(elem).click();
            }
            var $progressWizard = $('.stepper'),
                $tab_active,
                $tab_prev,
                $tab_next,
                $btn_prev = $progressWizard.find('.prev-step'),
                $btn_next = $progressWizard.find('.next-step'),
                $tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
                $tooltips = $progressWizard.find('[data-toggle="tab"][title]');

            // To do:
            // Disable User select drop-down after first step.
            // Add support for payment type switching.

            //Initialize tooltips
            $tooltips.tooltip();

            //Wizard
            /*  $tab_toggle.on('show.bs.tab', function(e) {

                  return false;


              });*/

            $tab_toggle.on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                return false;
            });

            $btn_next.on('click', function() {

                document.body.scrollTop = document.documentElement.scrollTop = 100;

                var step = $(this).data('id');

                var check = 0;


                $('#' + step + ' .' + step + '-validate').map(function() {

                    if(!$(this).val())
                    {
                        $(this).parent().addClass('validate-error');
                        check = 1;
                    }
                    else
                    {
                        $(this).parent().removeClass('validate-error');
                    }

                });


                if(!check)
                {


                    $tab_active = $progressWizard.find('.active');

                    $tab = $tab_active.next().find('[data-content]').attr("data-content");

                    $section = $('.tab-content').find('#'+$tab);

                    $('.tab-content').find('.active').removeClass('in').removeClass('active');

                    $section.addClass('active');

                    window.setTimeout(function(){$section.addClass('in');}, 80);

                    $tab_active.next().removeClass('disabled');
                    $tab_active.next().addClass('active');

                    $tab_next = $tab_active.next().find('a[data-toggle="tab"]');

                    var $target = $tab_next;


                    if (!$target.parent().hasClass('active, disabled')) {
                        $target.parent().prev().removeClass('active');
                        $target.parent().prev().addClass('completed');
                    }
                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }



                }


            });
            $btn_prev.click(function() {

                $tab_active = $progressWizard.find('.active');

                $tab = $tab_active.prev().find('[data-content]').attr("data-content");

                $section = $('.tab-content').find('#'+$tab);

                $('.tab-content').find('.active').removeClass('in').removeClass('active');

                $section.addClass('active');

                window.setTimeout(function(){$section.addClass('in');}, 80);

                $tab_active.prev().removeClass('completed');
                $tab_active.prev().addClass('active');

                $tab_next = $tab_active.next().find('a[data-toggle="tab"]');

                var $target = $tab_next;

                if($target.length)
                {
                    if (!$target.parent().hasClass('active, disabled')) {
                        $target.parent().prev().removeClass('active');
                        $target.parent().prev().addClass('disabled');
                    }

                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }
                }
                else
                {
                    $tab_active.removeClass('active');
                    $tab_active.addClass('disabled');
                }

            });
        });



    </script>

@endsection
