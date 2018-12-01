<section class="header-wrapper navgiation-wrapper">

    <div class="navbar navbar-default">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{ route('index') }}"><img alt="" src="images/logo.png"></a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="drop">
                        <a href="{{ route('index') }}" title="Home Layout 01">Home</a>
                    </li>
                    <!-- <li><a href="{{ route('about-us') }}" title="About Us">About Us</a></li> -->

                    <li>
                        <a href="{{ route('campaigns')}}">Campaign</a>
                    </li>

                    <li><a href="{{ route('contact')}}">Contact</a></li>

                    <li><a href="{{ route('user-login')}}">donor space</a></li>
                </ul>
            </div>
        </div>
    </div>

</section>

