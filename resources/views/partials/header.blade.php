


<header>
    <div class="container">
        <a href=" {{ route('home') }} ">
            <img src="{{ asset('images/dc-logo.png')}}" alt="Logo DC">
        </a>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('com') }}"
                    @if (Request::route()->getName() === 'com') class="active" @endif>  
                    COMICS
                    </a>
                </li>
                <li>
                    <a href="{{ route('news') }}"
                    @if (Request::route()->getName() === 'news') class="active" @endif>          
                    NEWS
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</header>

