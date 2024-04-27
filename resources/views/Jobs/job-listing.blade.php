<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Africon - Jobs</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <img src="assets/img/main-logo.png" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a href="{{ url('/jobs') }}">Jobs</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Jobs</li>
                </ol>
                <h2>Jobs</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-5">
                        {{-- icon seaerch with input --}}
                        <div class="input-group mb-3">

                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search Job" aria-label="Search Job"
                                aria-describedby="button-addon2">

                        </div>

                    </div>
                    <div class="col-lg-5">
                        {{-- icon location with input --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-geo-alt"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Location" aria-label="Location"
                                aria-describedby="button-addon2">
                        </div>

                    </div>

                    <div class="col-lg-2">
                        {{-- Button seerch --}}
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            @foreach ($jobs as $job)
                                <div class="card-body">
                                    <h5 class="card-title
                                ">Job Title </h5>
                                    <p class="card-text">
                                        <i class="bi bi-person "></i> Company Name
                                    </p>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste
                                        hic
                                        nam nostrum quas omnis molestias a laboriosam quia incidunt, suscipit, quisquam
                                        beatae. Corrupti, blanditiis! Voluptates, enim quos. Est, commodi odio.</p>

                                    <button class="btn btn-primary">Show Detail</button>


                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-5">
                        {{-- card detail --}}
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Job Title </h5>
                                <p class="card-text">
                                    <i class="bi bi-person "></i> Company Name
                                </p>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste hic
                                    nam nostrum quas omnis molestias a laboriosam quia incidunt, suscipit, quisquam
                                    beatae. Corrupti, blanditiis! Voluptates, enim quos. Est, commodi odio.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident optio adipisci,
                                    molestiae tenetur voluptate rem labore magni magnam consequatur? Itaque aliquid hic
                                    praesentium commodi quos laboriosam, voluptates illum repellendus eos.</p>

                                {{-- Type contrat --}}
                                <hr>
                                <p class="card-text">
                                    <i class="bi bi-file"></i> Type contrat
                                </p>
                                <hr>
                                {{-- Location --}}
                                <p class="card-text">
                                    <i class="bi bi-crosshair "></i> Location
                                </p>
                                <hr>
                                <p class="card-text">
                                    <i class="bi bi-telephone "></i>
                                    Phone Number
                                </p>
                                <hr>
                                {{-- Email --}}
                                <p class="card-text">
                                    <i class="bi bi-envelope "></i>
                                    Email
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga
                                    qui quibusdam quia</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde
                                    soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur
                                    assumenda perferendis dolore.
                                </p>
                                <div class="read-more">
                                    <a href="{{ url('/job') }}">Apply Now</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum
                                    voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                    Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit
                                    aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui
                                    aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed
                                    tempore enim omnis non alias odio quos distinctio.
                                </p>
                                <div class="read-more">
                                    <a href="{{ url('/job') }}">Apply Now</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et
                                    soluta libero sit sint.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem
                                    dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt
                                    omnis.
                                    Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae
                                    nesciunt. Ut dolores velit.
                                </p>
                                <div class="read-more">
                                    <a href="{{ url('/job') }}">Apply Now</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio
                                    deleniti explicabo eius exercitationem.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae.
                                    Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a
                                    qui.
                                    Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe
                                    ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est
                                    non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem
                                    ducimus sint id earum ut nesciunt sed corrupti nemo.
                                </p>
                                <div class="read-more">
                                    <a href="{{ url('/job') }}">Apply Now</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati
                                            ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a>
                                    </h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div> --}}

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts/footer')
    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
