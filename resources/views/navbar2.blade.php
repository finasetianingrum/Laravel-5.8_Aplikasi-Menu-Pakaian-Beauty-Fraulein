<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse~1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}" style="color: #ac3b61"><strong>BEAUTY FRAULEIN</strong></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<!-- Navbar Link -->
			<ul class="nav navbar-nav">

				{{-- Home --}}
				@if (!empty($halaman) && $halaman == 'homepage')
				<li class="active"><a href="{{ url('/') }}">Home
					<span class="sr-only">(current)</span></a></li>
				@else
				<li><a href="{{ url('/') }}">Home</a></li>
				@endif

				{{-- product --}}
				@if (Auth::check())
					@if (!empty($halaman) && $halaman == 'product')
					<li class="active"><a href="{{ url('about') }}">Product
						<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('product') }}">Product</a></li>
					@endif
				@endif

				{{-- brand --}}
				@if (Auth::check())
					@if (!empty($halaman) && $halaman == 'brand')
					<li class="active"><a href="{{ url('brand') }}">Brand
						<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('brand') }}">Brand</a></li>
					@endif
				@endif

				{{-- macam/jenis --}}
				@if (Auth::check())
					@if (!empty($halaman) && $halaman == 'macam')
					<li class="active"><a href="{{ url('macam') }}">Jenis Dress
						<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('macam') }}">Jenis Dress</a></li>
					@endif
				@endif

				{{-- user --}}
				@if (Auth::check())
					@if (!empty($halaman) && $halaman == 'user')
					<li class="active"><a href="{{ url('user') }}">User
						<span class="sr-only">(current)</span></a></li>
					@else
					<li><a href="{{ url('user') }}">User</a></li>
					@endif
				@endif	
			</ul> <!-- / Navbar Link -->
			
			<!-- Link Login / Logout -->
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li class="nav-item">
        	<a class="nav-link" href="#"> {{ Auth::user()->name }} 
        		<span class="caret"></span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                		document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
        </li>
                    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
    </ul><!-- /.logout link -->

		</div> <!-- navbar-collapse -->
	</div>     <!-- container-fluid -->
</nav>