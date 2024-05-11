<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS/normalize.css">
    <link rel="stylesheet" href="/CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/x-icon" href="/img/logo.png">

    <title>Dag-Media</title>
</head>

<body>
    <nav class="navbar">
        <div class="left-container">
            <img src="/img/disney-hotstar-logo-dark.svg" alt="" class="brand-logo">
            <ul class="nav-links">
                <li class="nav-items"><a href="#">Home</a></li>
                <li class="nav-items"><a href="#">Filmes</a></li>
                <li class="nav-items"><a href="#">Series</a></li>
                <li class="nav-items"><a href="#">Videos</a></li>
            </ul>
        </div>

        <div class="right-container">
            <a href="#" class="user-name">Olá, Alex</a>
            <img src="/img/perfil.png" alt="" class="profile-avatar">
            <div class="bx bx-menu" id="menu-icon"></div>

        </div>
    </nav>

    <section class="banner">
        <div class="carousel-container">
            <div class="carousel">
               <!-- <div class="slider">
                    <div class="slider-content">
                        <h1 class="movie-title">LUCA</h1>
                        <p class="movie-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis a iste nobis unde fuga ea, assumenda dolorum enim mollitia necessitatibus consequatur doloremque veniam vel perferendis eveniet harum nisi, rem aliquam!</p>

                    </div>
                    <img src="/img/slider 5.png" alt="">
                </div> -->
            </div>
        </div>

    </section>

    <section class="cards">
        <div class="video-card-container">
            <div class="video-card">
                <img src="/img/disney.png" alt="" class="video-card-image">
                <video src="/videos/disney.mp4" class="card-video" loop autoplay></video>
            </div>
            <div class="video-card">
                <img src="/img/pixar.png" alt="" class="video-card-image">
                <video src="/videos/pixar.mp4" class="card-video" loop autoplay></video>
            </div>
            <div class="video-card">
                <img src="/img/star-wars.png" alt="" class="video-card-image">
                <video src="/videos/star-war.mp4" class="card-video" loop autoplay></video>
            </div>
            <div class="video-card">
                <img src="/img/marvel.png" alt="" class="video-card-image">
                <video src="/videos/marvel.mp4" class="card-video" loop autoplay></video>
            </div>

            <div class="video-card">
                <img src="/img/geographic.png" alt="" class="video-card-image">
                <video src="/videos/geographic.mp4" class="card-video" loop autoplay></video>
            </div>
        </div>
    </section>

    <section class="entretenimento">
        <h1 class="title-section">Lançamentos</h1>
        <h1 class="title-section">Favoritos</h1>
    </section>


    <script src="/JS/Navbar.js"></script>
    <script src="/JS/Carrossel.js"></script>
    <script src="/JS/cardvideo.js"></script>
    
</body>

</html>