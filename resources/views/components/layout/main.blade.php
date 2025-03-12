<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <title>Portfolio</title>
</head>

<body>
<header>
    {{-- Navigation bar --}}
    <nav class="navbar" >
        <div class="links">
            <ul>
                <li><a href="{{ route('home') }}"
                       class="home-page {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                        Home
                    </a></li>
                <li><a href="{{ route('profile') }}"
                       class="profile-page {{ Request::route()->getName() === 'profile' ? "is-active" : "" }}">
                        Profile
                    </a></li>
                <li><a href="{{ route('dashboard') }}"
                       class="dashboard-page {{ Request::route()->getName() === 'dashboard' ? "is-active" : "" }}">
                        Dashboard
                    </a></li>
                <li><a href="{{ route('faq.index') }}"
                       class="faq-page {{ Request::route()->getName() === 'faq.index' ? "is-active" : "" }}">
                        FAQ
                    </a></li>

            </ul>
        </div>
    </nav>
</header>

<div class="mainAndAsideMenu">
    <aside class="left">
        <ul class="asideMenu">
            <li><a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754" target="_blank">HZ HBO-ICT
                    CER</a><br></li>
            <li><a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
                   target="_blank">IR of the HBO-ICT</a><br></li>
            <li><a href="https://learn.hz.nl/" target="_blank">Learn environment</a><br></li>
            <li><a href="https://hz.osiris-student.nl/home" target="_blank">Study Progress</a><br></li>
            <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">GitHub HBO-ICT</a><br></li>
        </ul>
    </aside>

    <main>
        {{ $slot }}
    </main>
</div>

<footer>
    <div>
        <p class="text">&copy; 2024, Miriam</p>
    </div>

    <div class="footerPhotos">
        <a href="https://github.com/mirka175" target="_blank" class="git">
            <img src="{{ asset('images/git.png') }}" alt="git" width="50" height="50">
        </a>
        <a href="https://www.facebook.com/" target="_blank" class="git">
            <img src="{{ asset('images/facebook.png') }}" alt="facebook" width="50" height="50">
        </a>
    </div>
</footer>

</body>

</html>
