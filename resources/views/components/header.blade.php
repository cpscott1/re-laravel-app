<header class="header">
       <div class="container">
        <div class="logo">
            HME
        </div>
        <div class="header-menu">
            <a href="#" class="menu-link">Home</a>
            <a href="#" class="menu-link">Listing</a>
            <a href="#" class="menu-link">Property</a>
            <a href="#" class="menu-link">Pages</a>
            <a href="#" class="menu-link">Contact</a>
        </div>
        <div class="sign-up">
           
            @if (Route::has('login'))
                    @auth
                    <i class="fa-regular fa-user signup-icon"></i>
                    <a href="#" class="signup-link">Signup</a>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                        </form>
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
        </div>
       </div> 
       <div class="hero-text">
        <div class="grid-item">
            <h1>Find your dream</h1>
            <p>Our catalog will surpirse you. Rather, discover an unprecendented offers of luxury properties</p>
            <div class="btn-container">
                 <button class="btn">Catalog</button>
            </div>
        </div>
    
       </div>
    </header>