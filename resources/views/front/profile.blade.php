<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Ecom buiss</title>
</head>

<body>
    <div class="main_wrapper">
        <div class="main_container">
            <nav class="navbar">
                <div class="brand">Fofana</div>
                <div class="menus">
                    <ul class="navbar_list">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact us</a></li>
                        <li class="nav-item"><a href="#contact" class="button">Hire us</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero_sec row mt-2">
                <div class="hero_left col-6">
                    <div class="hero_wrapper text-center p-4">
                        <div class="hero_title display-2">Hi There , I'm Kunj</div>
                        <div class="hero_subtitle display-5 mb-2">Full Stack Developer</div>
                        <div class="hero_details mb-2"> we understand that visibility on search engines is key to driving
                            traffic
                            and
                            business growth. With our comprehensive SEO optimization services, we help your website rank
                            higher,
                            attract more visitors, and convert them into loyal customers. Our data-driven approach
                            focuses
                            on
                            the
                            latest SEO best practices, ensuring your website remains competitive in today’s digital
                            landscape.
                        </div>
                        <button class="btn bg-info">Know More</button>
                    </div>
                </div>
                <div class="hero_right col-6 ">
                    <div class="hero_img">
                        <img src="{{ asset('images/home.png') }}" alt="" height="500">
                    </div>
                </div>

            </div>
            <section class="features">
                <div class="features_left">
                    <div class="feature">
                        <div class="feature_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="feature_details">
                            <span class="f_title">Fast Learn</span>
                            <p class="f_details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                                pariatur aliquid reprehenderit libero molestias amet animi obcaecati magnam quisquam,
                                facere consectetur, dis</p>
                        </div>

                    </div>
                    <div class="feature">
                        <div class="feature_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="feature_details">
                            <span class="f_title">Friendly Suppport</span>
                            <p class="f_details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                                pariatur aliquid reprehenderit libero molestias amet animi obcaecati magnam quisquam,
                                facere consectetur, dis</p>
                        </div>
                    </div>
                </div>
                <div class="features_right">
                    <div class="feature">
                        <div class="feature_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="feature_details">
                            <span class="f_title">Creative</span>
                            <p class="f_details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                                pariatur aliquid reprehenderit libero molestias amet animi obcaecati magnam quisquam,
                                facere consectetur, dis</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="feature_details">
                            <span class="f_title">Work Hard</span>
                            <p class="f_details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                                pariatur aliquid reprehenderit libero molestias amet animi obcaecati magnam quisquam,
                                facere consectetur, dis</p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="services">
                <div class="services_title">Services</div>
                <div class="services_subtitle">We provide the best services</div>
                <div class="services_blocks">
                    <div class="s_block">
                        <div class="block_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="block_title">Design</div>
                        <p class="block_details">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet dolor
                        </p>
                    </div>
                    <div class="s_block">
                        <div class="block_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="block_title">Design</div>
                        <p class="block_details">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet dolor
                        </p>
                    </div>
                    <div class="s_block">
                        <div class="block_icon"><i class="fa-solid fa-door-closed"></i></div>
                        <div class="block_title">Design</div>
                        <p class="block_details">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet dolor
                        </p>
                    </div>
                </div>
            </section>
            <section class="portfolio">
                <div class="portfolio_title">Portfolio</div>
                <div class="portfolio_subtitle">See our awesome done project</div>
                <div class="portfolio_blocks">
                    <div class="p_block">
                        <img src="{{ asset('images/blog2.jpg') }}" alt="">
                        <div class="p_details">
                            <div class="p_title">Design Art</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quibusdam doloremque</p>
                        </div>
                    </div>
                    <div class="p_block">
                        <img src="{{ asset('images/blog2.jpg') }}" alt="">
                        <div class="p_details">
                            <div class="p_title">Design Art</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quibusdam doloremque</p>
                        </div>
                    </div>
                    <div class="p_block">
                        <img src="{{ asset('images/blog2.jpg') }}" alt="">
                        <div class="p_details">
                            <div class="p_title">Design Art</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quibusdam doloremque</p>
                        </div>
                    </div>
                    <div class="p_block">
                        <img src="{{ asset('images/blog2.jpg') }}" alt="">
                        <div class="p_details">
                            <div class="p_title">Design Art</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quibusdam doloremque</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

</html>
