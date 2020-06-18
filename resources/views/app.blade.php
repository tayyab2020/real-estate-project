<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="@yield('head_description', getcong('site_description'))">
    <meta property="keywords" content="@yield('head_keywords', getcong('site_keywords'))" />

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('head_title',  getcong('site_name'))"/>
    <meta property="og:description" content="@yield('head_description', getcong('site_description'))"/>

    <meta property="og:image" content="@yield('head_image', url('/upload/logo.png'))" />
    <meta property="og:url" content="@yield('head_url', url('/'))" />

    <link href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" rel="icon" type="image/x-icon" />

    <title>@yield('head_title', getcong('site_name'))</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">


    <link href="{{ URL::asset('assets/css/'.getcong('site_style').'.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick-theme.css') }}"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('assets/js/html5shiv.js') }}"></script>
      <script src="{{ URL::asset('assets/js/respond.min.js') }}"></script>

    <![endif]-->
 	{!!getcong('site_header_code')!!}

	{!! getcong('addthis_share_code')!!}
  </head>

  <body id="top">

	  @include("_particles.header")


	  @yield("content")


	  @include("_particles.footer")


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="https://kit.fontawesome.com/29532268c4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFPa3LVeBRpaGafuUtk4znrty6IIqtMUw&libraries=places&region=nl" async defer></script>
    <script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
    <script src="{{ URL::asset('assets/js/gmap3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.backstretch.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/slick.min.js') }}"></script>

    <script type="text/javascript">

    /* backstretch slider */
    $('.header-slide').backstretch([
      @foreach(\App\Slider::orderBy('name')->get() as $slide)
      "{{ URL::asset('upload/slides/'.$slide->image_name.'.jpg') }}",

      @endforeach
      ], {
        fade: 850,
        duration: 4000
    });



	  </script>

      <style>

          .backstretch
          {
              width: 100% !important;
              height: 100% !important;
          }

          .backstretch img{
              width: 100% !important;
              height: 100% !important;
              left: 0 !important;
              top: 0px !important;
          }

      </style>

    {!!getcong('site_footer_code')!!}

  </body>
</html>


