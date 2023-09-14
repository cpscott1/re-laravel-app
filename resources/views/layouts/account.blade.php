<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
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
            <i class="fa-regular fa-user signup-icon"></i>
            <a href="#" class="signup-link">Signup</a>
        </div>
       </div> 
       </div>
    </header>
    <div class="account-layout">
        <div class="listings-city">
            <img class="listing-city-image" src="@yield('page-bg')" alt="">
            <h1 class="listing-city-title">@yield('title')</h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="account-menu">
                            <h2>Menu</h2>
                            <a href="/account/saved">Saved Listings</a>
                            <a href="/account/show-status">Listing Request Status</a>
                        </div>

                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 
</body>
</html>