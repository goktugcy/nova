<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Simple app Landing Page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="{{ assets('css/style.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="wrap">

        <section class="banner">
            <div class="banner-left">
                <img src="{{ assets('images/nova.png') }}" alt="" />
            </div>
            <div class="banner-right">
                <img src="http://res.cloudinary.com/dzuqw67ww/image/upload/v1519715524/nest-128_fgdoao.png"
                    alt="" />
                <h1>Nova PHP Framework</h1>
                <p class="tagline">Fast, Secure, Minimal PHP framework. <br> Designed for rapid web development.</p>
                <div class="btn-wrap">
                    {{-- <div class="btn download-btn">
                        <a href="https://github.com/goktugcy">My Github</a>
                    </div> --}}
                    <div class="btn demo-btn">
                        <a target="_blank" href="https://github.com/goktugcy/nova">Project</a>
                    </div>
                </div>
            </div>
            <div class="description">
                <p>Coming soon</p>
                <p class="notice">* </p>
            </div>
        </section>



        <section class="cta">
            <div class="credit">
                <p>Made with <i class="material-icons">favorite</i> by <a target="_blank"
                        href="https://twitter.com/goktug_cy" target="_blank">Göktuğ</a></p>
            </div>
        </section>
    </div>
    <!-- partial -->

</body>

</html>
