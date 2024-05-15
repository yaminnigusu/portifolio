<?php 
include ("config.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>yamin Landing page </title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#home">Yamin</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li>
                
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Yamin </span>
            </h1>
            <p class="header-subtitle">Full-stack WEB developer</p>

            <button class="btn btn-primary">Visit My Works</button>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->  
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/man.png" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                    Hello! I'm Yamin, a full stack developer . 

                 My technical expertise includes proficiency in HTML, CSS, JavaScript, PHP and SQL . I thrive in dynamic environments where I can leverage my skills to create innovative solutions.

                    Outside of coding, I enjoy attending tech meetups, contributing to open-source projects, and staying updated with the latest trends in web development.

                  Thank you for visiting my portfolio. Feel free to explore my projects and reach out if you're interested in collaborating on your next web development endeavor or discussing tech opportunities.
                    </p>
                    <a herf="C:\xampp\htdocs\portifolio\plant nursery employee.pdf" type="pdf.pdf" class="btn-rounded btn btn-outline-primary mt-4">Download CV</a>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
    <div class="container text-center">
        <p class="section-subtitle">What I Do</p>
        <h6 class="section-title mb-6">Services</h6>
        <!-- Row for Services -->
        <div class="row">
            <!-- HTML Service Card -->
            
            <!-- CSS Service Card -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        
                        <h6 class="title">CSS Styling</h6>
                        <p class="subtitle">Design responsive and visually appealing layouts with CSS3 and modern techniques.</p>
                        <img src="data:image/png;base64,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"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                    </div>
                </div>
            </div>
            <!-- PHP Service Card -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        
                        <h6 class="title">PHP Development</h6>
                        <p class="subtitle">Build dynamic and scalable web applications using PHP and server-side scripting.</p>
                        <img src="data:image/png;base64,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"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                    </div>
                </div>
            </div>
            <!-- SQL Service Card -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                        
                        <h6 class="title">Database Management</h6>
                        <p class="subtitle">Implement and optimize SQL database queries for efficient data storage and retrieval.</p>
                        <img src="data:image/png;base64,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"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                    </div>
                </div>
            </div>
            <!-- JavaScript Service Card -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="body">
                    
                        <h6 class="title">JavaScript Programming</h6>
                        <p class="subtitle">Develop interactive and dynamic user interfaces using JavaScript and frameworks like React or Vue.js.</p>
                        <img src="data:image/png;base64,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"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                       
                    </div>
                </div>
            </div>
        </div><!-- End of Row -->
    </div>
</section><!-- End of Service Section -->


    <!-- portfolio section -->
    <section class="section" id="portfolio">
    <div class="container text-center">
        <p class="section-subtitle">What I Did</p>
        <h6 class="section-title mb-6">Portfolio</h6>
        <!-- Row for Portfolio Projects -->
        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4">
                <a href="project1.html" class="portfolio-card">
                    <img src="assets/imgs/project1.jpg" class="portfolio-card-img"
                        alt="Web Design Project 1">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>E-commerce Website</h4>
                            <p class="font-weight-normal">Category: Full Stack Development</p>
                        </span>
                    </span>
                </a>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4">
                <a href="project2.html" class="portfolio-card">
                    <img src="assets/imgs/project2.jpg" class="portfolio-card-img"
                        alt="Web Design Project 2">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>Social Media Platform</h4>
                            <p class="font-weight-normal">Category: Full Stack Development</p>
                        </span>
                    </span>
                </a>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4">
                <a href="project3.html" class="portfolio-card">
                    <img src="assets/imgs/project3.jpg" class="portfolio-card-img"
                        alt="Web Design Project 3">
                    <span class="portfolio-card-overlay">
                        <span class="portfolio-card-caption">
                            <h4>Online Learning Platform</h4>
                            <p class="font-weight-normal">Category: Full Stack Development</p>
                        </span>
                    </span>
                </a>
            </div>
        </div><!-- End of Row -->
    </div><!-- End of Container -->
</section><!-- End of Portfolio Section -->


   >

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <a href="#contact" class="btn btn-lg my-font btn-light rounded" >Hire Me</a>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar2.jpg" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar3.jpg" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

   

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="process_form.php" class="contact-form col-md-10 col-lg-8 m-auto" method="POST">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="letter" size="50" class="form-control" placeholder="Your Name" name="name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required >
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea  id="comment" rows="6" class="form-control"type="varchar"
                            placeholder="Write Something" name="message" required></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
            <div class="container">
                <footer class="footer">
                    <p class="mb-0">Copyright
                        <script>document.write(new Date().getFullYear())</script> &copy; <a
                            href="http://www.devcrud.com">DevCRUD</a> Distribution <a
                            href="https://themewagon.com">ThemeWagon</a>
                    </p>
                    <div class="social-links text-right m-auto ml-sm-auto">
                        
                        
                        <a href="https://pin.it/5Dt1ht2ly" class="link"><i class="ti-pinterest-alt"></i></a>
                        <a href="https://www.instagram.com/nigusuyamin?igsh=MXQzbno5YTh6aXBxYg==" class="link"><i class="ti-instagram"></i></a>
                        <a href="https://t.me/yaminnigusu" class="link"><i class="fab fa-telegram"></i></a>
                    </div>
                </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>

</html>