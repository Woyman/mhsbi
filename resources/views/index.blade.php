@extends('layout.main-layout')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background: url('<?php echo asset('assets/img/hero-bg.jpg') ?> ') top right no-repeat; ">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Muhammad Hasbi Habibi</h1>
        <p>I'm <span class="typed" data-typed-items="Programmer, Web Developer"></span></p>
        <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="https://instagram.com/hsbi.22/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>        
        <a href="https://www.linkedin.com/in/hasbi-habibi-437131139/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About Me</h2>                
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/my-picture.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3> Web Developer.</h3>
                    <p>
                        Lives in Yogyakarta, Indonesia. 
                        Graduated from the Department of Informatics Engineering at Amikom University Yogyakarta. 
                        Now I work as a Web Developer at Inosoft Transistem.
                    <br>
                        I started into web development since Vocational High School. 
                        Skilled in using PHP, Laravel, Mongodb. And then worked as a full stack developer for Inosoft, focusing more on back-end development.
                    </p>
                    <div class="row">
                        <div class="col-lg-3">
                            <h4>Languages</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> PHP </li>                                                                                  
                                <li><i class="bi bi-chevron-right"></i> Javascript  </li>                            
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4>Database</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> Mysql </li>                            
                                <li><i class="bi bi-chevron-right"></i> MongoDb  </li>                            
                                
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4>Frontend</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> Bootstrap </li>                            
                                <li><i class="bi bi-chevron-right"></i> CSS & HTML  </li>      
                                <li><i class="bi bi-chevron-right"></i> Vuejs  </li>      
                                
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4>Backend</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> Rest API </li>                            
                                <li><i class="bi bi-chevron-right"></i> Laravel  </li>      
                                <li><i class="bi bi-chevron-right"></i> Nginx  </li>      
                                
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4>Tools</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> VSCode </li>                            
                                <li><i class="bi bi-chevron-right"></i> Laragon  </li>      
                                <li><i class="bi bi-chevron-right"></i> Postman  </li>      
                                <li><i class="bi bi-chevron-right"></i> Git  </li>      
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    </section>

</main>



@endsection