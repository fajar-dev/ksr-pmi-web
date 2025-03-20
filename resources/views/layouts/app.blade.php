
<!DOCTYPE html>
<html lang="en">
	<head>
    <title>Burento - Corporate Business HTML Template</title>
		<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" />
		@yield('seo')
    @include('layouts._partials.head')

	</head>
	<body>
		<!-- preloader -->
    {{-- <div id="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div> --}}
    <!-- preloader end  -->

		  @include('layouts._partials.header')
			@yield('content')
      @include('layouts._partials.footer')

    {{-- @include('layouts._partials.alert') --}}
    @include('layouts._partials.foot')
    <!--begin::Vendors Javascript(used for this page only)-->
    @yield('script')
	</body>
</html>