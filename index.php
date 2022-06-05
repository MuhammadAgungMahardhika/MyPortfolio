<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->

    <!-- Bootstrap CSSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9d17737383.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>MuhammadAgungMahardhika_Portfolio</title>
</head>

<body>
    <!-- Awal Header -->
    <header class="container">
        <!-- Awal navigasi -->
        <nav class="container navbar navbar-expand-lg navbar-light" id="Nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-example" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbar-example">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyProjects">MY PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyCertificates">CERTIFICATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyContacts">CONTACTS</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Akhir navigasi -->
        <aside>

            <figure class="row text-center" id="MyFoto">
                <div class="col">
                    <img class="rounded-circle" src="images/MyFoto.JPG" width="200" id="Foto" />
                </div>
            </figure>

            <div class="row text-center" id="MyName">
                <div class="col">
                    <h1 class="NamaSaya">MUHAMMAD AGUNG MAHARDHIKA</h1>
                </div>
            </div>

        </aside>

        <aside class="copyright">
            Image source
            <a href="https://pixabay.com/id/users/pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pexels</a>
            dari
            <a href="https://pixabay.com/id/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pixabay</a>
        </aside>

    </header>

    <!-- Akhir header -->

    <main>
        <!-- About me -->
        <section class="container text-center" id="AboutMe">
            <article class="row">
                <h2 class="efek1">ABOUT ME</h2>
                <div class="col">
                    <p style="text-align: justify">
                        Nama saya adalah Muhammad Agung Mahardhika. Saya berasal dari Kota
                        Padang Sumatra Barat. Saat ini saya sedang berkuliah di jurusan Sistem Informasi Universitas Andalas. Saya sangat menggemari programing dalam bidang Web Developing terutama pada bagian Front-end. Saya bercita-cita menjadi seorang Front-end Developer professional.
                    </p>
                </div>
            </article>
        </section>
        <!-- Akhir About me -->

        <!-- My Projects -->
        <section class="container text-center" id="MyProjects">
            <div class="row">
                <h2 class="efek2">MY PROJECTS</h2>
                <div class="col allcard">
                    <div class="card" style="width: 18rem">
                        <a href="https://stimik.herokuapp.com/">
                            <img src="images/2.png" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    Web Design- Stimik Indonesia Festivals
                                </h5>
                                <p class="card-text">
                                    Landing web design with ocean theme by using
                                    HTML,CSS,Bootsrap,Javascript and Jquery
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://greenfoot.org/scenarios/25077">
                            <img src="images/3.png" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">Game- Honey Bear Survive</h5>
                                <p class="card-text">
                                    A simple shooting game using Java with greenfoot's app
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://batubusuak.wordpress.com/">
                            <img src="images/4.png" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    Blog- Batu Busuk Destination Tourism Web
                                </h5>
                                <p class="card-text">
                                    A website that provide information of Batu Busuk destination
                                    Tourism in Lambung Bukit/ Pauh/ Padang City/ West Sumatra.
                                    By using Wordpress.com
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://batubusuak.wordpress.com/">
                            <img src="images/5.png" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    Web Aplication- West Sumatra Provincial Health Service
                                    Pharmacy Logistics Application
                                </h5>
                                <p class="card-text">
                                    A web application that can manage logistics goods in
                                    pharmacy warehouses using HTML, CSS, Bootstrap, Javascript,
                                    Jquery, PHP, Mysql server and other library/plugins
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://github.com/MuhammadAgungMahardhika/lumen_api">
                            <img src="images/Lumen.jpg" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    API- API for My Android Mobile Project
                                </h5>
                                <p class="card-text">
                                    An api for my android mobile application for booking gym in
                                    Padang City, West Sumatra. By using Lumen PHP Framework
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://github.com/MuhammadAgungMahardhika/Pafitness">
                            <img src="images/Android.jpeg" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <h5 class="card-title">Android- Mobile Aplication</h5>
                                <p class="card-text">
                                    An android mobile aplication for searching gym in Padang
                                    City. By using Java, Firebase Auth, API, PostrgreSQL, Google
                                    Maps API
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir My Projects -->

        <!-- Awal My Certificate -->
        <section class="container text-center" id="MyCertificates">
            <div class="row">
                <h2 class="efek3">CERTIFICATES</h2>
                <div class="col allcertificate">
                    <div class="card" style="width: 18rem">
                        <a href="https://www.freecodecamp.org/certification/Muhammad_Agung_mahardhika/responsive-web-design">
                            <img src="images/Freecodecamp.png" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <p class="card-title">Responsive web design</p>
                            </div>
                            <div class="star">
                                <i class="fa fa-star fa-2x"></i>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="card" style="width: 18rem;">
                    <a href="https://github.com/MuhammadAgungMahardhika/lumen_api">
                        <img src="images/dicoding.jpg" class="card-img-top" alt="..." sizes="300">
                        <div class="card-body">
                            <p class="card-title">Dasar pemrograman web</p>
           
                        </div>
                    </a>
                </div> -->

                    <div class="card" style="width: 18rem">
                        <a href="https://www.dicoding.com/certificates/JLX136K5GP72">
                            <img src="images/dicoding.jpg" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <p class="card-title">
                                    Cloud practitioner essentials (dasar AWS Cloud)
                                </p>
                            </div>
                            <div class="star">
                                <i class="fa fa-star fa-2x"></i>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://www.dicoding.com/certificates/07Z65DELYXQR">
                            <img src="images/dicoding.jpg" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <p class="card-title">
                                    Membuat aplikasi Android untuk pemula
                                </p>
                            </div>
                            <div class="star">
                                <i class="fa fa-star fa-2x"></i>
                            </div>
                        </a>
                    </div>

                    <div class="card" style="width: 18rem">
                        <a href="https://certificates.revou.co/muhammadagung-mahardhika-certificate-completion-damc22.pdf">
                            <img src="images/revou.jpg" class="card-img-top" alt="..." sizes="300" />
                            <div class="card-body">
                                <p class="card-title">Intro to Data Analytics</p>
                            </div>
                            <div class="star">
                                <i class="fa fa-star fa-2x"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Akhir My Cerficate -->
        <!-- My Contacts -->
        <section class="container-fluid text-center" id="MyContacts">
            <div class="row">
                <h2 class="efek4">CONTACTS</h2>
                <div class="col-md-12 text-center">
                    <a href="https://muhammadagungmahardhika.wordpress.com/"><i class="fa-brands fa-wordpress fa-3x p-2"></i></a>
                    <a href="https://www.instagram.com/m.agungmahardhika/"><i class="fa-brands fa-instagram fa-3x p-2"></i></a>
                    <a href="https://www.linkedin.com/in/muhammad-agung-mahardhika-ba1b39203/"><i class="fa-brands fa-linkedin fa-3x p-2"></i></a>
                    <a href="https://wa.me/6281373517899"><i class="fa-brands fa-whatsapp fa-3x p-2"></i></a>
                    <a href="https://github.com/MuhammadAgungMahardhika"><i class="fa-brands fa-github fa-3x p-2"></i></a>
                </div>
            </div>
        </section>
        <!-- Akhir My Contacts -->
    </main>
    <!-- Akhir main -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="function.js"></script>
</body>

</html>