<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ---========== CSS ==========--- -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- ---========= BOXICONS ========--- -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- ---========== FONTAWESOME ==========--- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ---========== GOOGLE FONT ==========--- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- ---========== BOOTSTRAP ==========--- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- ---========== JS ==========--- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>PORTFOLIO</title>
</head>

<body>
    <!-- ---========== PHP CODE ==========--- -->
    <?php

include 'conn.php';

if(isset($_POST['csubmit'])){
    $clientname = $_POST['cname'];
    $clientemail = $_POST['cemail'];
    $clientnumber = $_POST['cnumber'];
    $clientreview = $_POST['creview'];
    $clientphoto = $_FILES['cphoto'];
    $clientfiles = $clientphoto['name'];
    move_uploaded_file($clientphoto['tmp_name'], 'images/'.$clientfiles);

    $client_record = "INSERT INTO `contactme`( `name`, `email`, `number`, `picture`, `review`)
                          VALUES ('$clientname','$clientemail','$clientnumber','$clientfiles','$clientreview')";


    $query = mysqli_query($conn, $client_record);


}
?>
    <!-- ---========== HAMBERGER ==========--- -->
    <div class="site-main-wrapper" id="start">
        <button class="hamberger" id="nmark"><i class="fa-solid fa-bars"></i></button>
        <!-- MOBILE NAV -->
        <div class="mobile-nav">
            <button class="mark"><i class="fa-solid fa-circle-xmark"></i></button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-link">
                <li>
                    <a class="navbar-brand logo-nav" href="#dani">DANI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#work">Works</a>
                </li>
                <li>
                    <div class="contact-nav">
                        <button><a href="#contact">CONTACT</a></button>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ---========== HEADER ==========--- -->
        <header class="header" id="cv-head">
            <!-- ---========== NAVIGATION BAR ==========--- -->
            <nav class="navbar navbar-expand-lg " id="main-nav">
                <div class="container main-nav">
                    <!-- HOME BUTTON -->
                    <a class="navbar-brand logo-name" href="#dani">DANI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- LIST LINK -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-link">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#education">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience">Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#skills">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#work">Works</a>
                            </li>
                        </ul>
                    </div>
                    <!-- CONTACT LINK -->
                    <div class="contact-link">
                        <button><a href="#contact">CONTACT</a></button>
                    </div>
                </div>
            </nav>
            <!-- ---========== HERO-SECTION ==========--- -->
            <div class="container hero-section" id="myhome">
                <div class="row">
                    <!-- IMAGE -->
                    <div class="col-4 about-img" id="myhomepix"><img
                            src="./assets/img/images/my pic/WhatsApp_Image_2024-09-24_at_2.42.04_PM-removebg-preview.png"
                            alt=""></div>
                    <!-- TEXT -->
                    <div class="col-8 about-text" id="myhometext">
                        <div class="row">
                            <h4>HAMZA SIRAJ</h4>
                            <h1>I'm a Creative <br><span>Developer.</span></h1>
                        </div>
                        <div class="row para">As an enthusiastic Web Developer, I'm dedicated to translating creative
                            ideas into visually captivating
                            and functional websites. With a fresh perspective and a solid foundation in modern web
                            technologies, I
                            am eager to apply my skills to deliver impactful digital experiences.
                        </div>
                        <!-- CV LINK-01 -->
                        <div class="row">
                            <div class="CV-link-01">
                                <button><a href="./CV.php" target="_blank">DOWNLOAD CV</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ---========== MAIN BODY==========--- -->

        <!-- ---========== FIRST SECTION ==========--- -->
        <section id="me">
            <section class="first-one" id="about">
                <!-- ---========== MORE DETAIL ==========--- -->
                <div class="container">
                    <div class="row">
                        <!-- CHARACTER PHOTO -->
                        <div class="col-4 character-pic"><img
                                src="./assets/img/images/my pic/WhatsApp Image 2024-09-24 at 2.42.04 PM.jpeg" alt="">
                        </div>
                        <!-- CHARACTER TEXT -->
                        <div class="col-8 character-text">
                            <div class="row">
                                <h1>About <span>ME.</span></h1>
                            </div>
                            <div class="row character-name">
                                <h2>Hello! I'm HAMZA SIRAJ.</h2>
                            </div>
                            <div class="row more-info-01">As a passionate Web Developer from Pakistan, I blend
                                creativity with technical skills to craft visually
                                stunning and highly functional websites. With a strong foundation in modern web
                                technologies, I am
                                enthusiastic about applying my abilities to create impactful digital solutions.</div>
                            <div class="row  more-info-02">Although I'm at the start of my career, my passion for web
                                development fuels my commitment to
                                continuous learning and excellence. I thrive on embracing new challenges and exploring
                                innovative
                                technologies to stay ahead in the ever-evolving tech landscape. With a keen eye for
                                detail and a
                                drive to push creative boundaries, I aim to craft exceptional web experiences that blend
                                cutting-edge design with technical precision. My goal is to create digital solutions
                                that not only
                                meet but exceed user expectations, setting new standards in functionality and
                                aesthetics.</div>
                            <!-- CHRACTER_LINKS -->
                            <div class="character-links">
                                <div class="col">
                                    <ul>
                                        <li><a href="https://wa.me/03285980850" target="_blank"><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </li>
                                        <li><a href="https://www.facebook.com/profile.php?id=61566182610630"
                                                target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@itz_dani0906?is_from_webapp=1&sender_device=pc"
                                                target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                        <li><a href="https://www.instagram.com/itz_dani0906/" target="_blank"><i
                                                    class="fa-brands fa-square-instagram"></i></a></li>
                                        <li><a href="https://www.threads.net/@itz_dani0906" target="_blank"><i
                                                    class="fa-brands fa-threads"></i></a></li>
                                        <li><a href="https://youtube.com/@itz_dani0416?si=N_SIhUv7VVmIjK9B"
                                                target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/itz-dani-066362326?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                                target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="https://www.fiverr.com/pe/rL2Dmx" target="_blank"><i
                                                    class="fa-solid fa-f"></i></a></li>
                                        <li><a href="https://www.upwork.com/freelancers/~01ddc74e0dc6a35a3c"
                                                target="_blank"><i class="fa-brands fa-square-upwork"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- ---========== EDUCATION ==========--- -->
        <section class="education" id="education">
            <h2 class="heading">My <span>Journey</span></h2>
            <div class="container education-1">
                <div class="education-row">
                    <div class="education-coloumn">
                        <h3 class="title">Education</h3>
                        <div class="education-box">
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2021 -
                                        2023</div>
                                    <h3>Matricultion - GCHSS, Sahiwal</h3>
                                    <p>Matriculated from Government Comprehensive Higher Secondary School (GCHSS) with a
                                        focus on Bio Science,
                                        scoring
                                        892
                                        out of 1100 marks. Builting a strong foundation in scientific principles and
                                        core
                                        subjects.
                                    </p>
                                </div>
                            </div>
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2023 - 2025</div>
                                    <h3>Intermediate - PGC, Sahiwal</h3>
                                    <p>Continuing intermediate At Punjab Group of Colleges (PGC), Sahiwal. Built
                                        a
                                        strong
                                        academic foundation for future success.</p>
                                </div>
                            </div>
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2024</div>
                                    <h3>Web Development - Tech Step, Sahiwal</h3>
                                    <p>Completed a Web Development course at Tech Step, Sahiwal. Mastered key
                                        technologies
                                        and
                                        design principles to create innovative, responsive digital solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container experience-1" id="experience">
                    <div class="education-coloumn">
                        <h3 class="title">Experience</span></h3>

                        <div class="education-box">
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2024 </div>
                                    <h3>Front-End Projects</h3>
                                    <p>Developed several projects similar to a Collab Dash using HTML, CSS, and
                                        Bootstrap,
                                        honing responsive design and UI development skills.</p>
                                </div>
                            </div>
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2024</div>
                                    <h3>Back-End Projects</h3>
                                    <p>Developed several back-end systems using PHP and SQL, refining server-side
                                        scripting
                                        and
                                        database management. Focused on creating scalable and efficient data solutions.
                                    </p>
                                </div>
                            </div>
                            <div class="education-content">
                                <div class="content">
                                    <div class="year"><i class="bx bxs-calendar"></i>2024</div>
                                    <h3>Complete Project: Fruitable Website</h3>
                                    <p>Developed the Fruitable website with a dynamic, responsive design. Utilized
                                        modern
                                        web
                                        technologies to create an engaging user experience and optimize performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---========== SECOND SECTION ==========--- -->
        <section class="second-one" id="skills">
            <!-- SERVICES TEXT -->
            <div class="container">
                <div class="services-text-01">
                    <div class="row services-text">
                        <h1><span>My</span> Skills</h1>
                    </div>
                    <div class="row services-text">I provide high standar clean website for your bussiness solutions
                        with my skills.
                    </div>
                </div>
                <!-- SERVICES BOX -->
                <div class="container-fluid services-box">
                    <div class="row grid-01">
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-solid fa-database"></i></div>
                                <h2>Web Development <br> Frameworks</h2>
                                <p>Proficient in popular front-end frameworks like React, Angular, and
                                    back-end frameworks like Express, Ruby on Rails, to streamline
                                    development and improve efficiency.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-solid fa-code"></i></div>
                                <h2>Front-end <br>Development</h2>
                                <p>Skilled in writing clean, efficient, and well-documented HTML, CSS, and JavaScript
                                    code to bring designs to life, with expertise in responsive web design and
                                    mobile-first approach.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-brands fa-php"></i></div>
                                <h2>Back-end <br>Development</h2>
                                <p>Adept in server-side programming languages like PHP, Ruby, Python, and JavaScript
                                    (Node.js), with experience in building robust and scalable web applications, APIs,
                                    and databases.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row grid-02">
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-solid fa-crop"></i></div>
                                <h2>Visual Design <br> Expertise</h2>
                                <p>Proficient in creating visually stunning and user-friendly designs that capture the
                                    essence of a brand, using Adobe Creative Cloud (Photoshop, Illustrator, XD, etc.)
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-solid fa-chart-column"></i></div>
                                <h2>Web Performance <br> Optimization</h2>
                                <p>Knowledgeable in optimizing website performance, ensuring fast loading speeds, and
                                    creating a seamless user experience through different techniques like caching,
                                    minification, and compression.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-text">
                                <div class="servic-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                                <h2>Responsive & Mobile <br>-first Design</h2>
                                <p>Skilled in designing and developing responsive, mobile-friendly websites that adapt
                                    to various devices, screen sizes, and orientations, ensuring an optimal user
                                    experience across all platforms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---========== THIRD SECTION ==========--- -->
        <section class="third-one" id="cv">
            <div class="container freelancer">
                <div class="row">
                    <h1> I Am Available For Developers.</h1>
                </div>
                <div class="row">
                    <h4>Here is my summary of my profession.</h4>
                </div>
                <div class="row">
                    <div class="CV-link-02">
                        <button><a href="#cv-head">Download CV</a></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---========== THIRD MAIN ==========--- -->
        <section class="main-third" id="work">
            <div class="container">
                <div class="row client">
                    <h1><span>MY</span> Works</h1>
                </div>
                <div class="row client-text">
                    <h4>Following are the projects/works that i have done with my skills.</h4>
                </div>
                <!-- WORK PIX -->
                <div class="container work-box">
                    <div class="row">
                        <div class="col-6">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active work-pix">
                                        <img src="./assets/img/Captures/03/01.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/03/02.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/03/03.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active work-pix">
                                        <img src="./assets/img/Captures/02/01.png" class="d-block w-100 h-1" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/02/02.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/02/03.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/02/04.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/02/05.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active work-pix">
                                        <img src="./assets/img/Captures/01/01.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/01/02.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/01/03.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/01/04.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/01/05.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/01/06.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active work-pix">
                                        <img src="./assets/img/Captures/04/01.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/02.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/03.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/04.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/05.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/06.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item work-pix">
                                        <img src="./assets/img/Captures/04/07.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---========== SUB FOOTER ==========--- -->
        <!-- CONTACT US -->
        <section class="contact" id="contact">
            <div class="container contact">
                <div class="row">
                    <h1>Contact <span>ME</span></h1>
                </div>
                <div class="row">
                    <h4>I provide high standar clean website for your bussiness solutions</h4>
                </div>
                <div class="row">
                    <div class="CV-link-02">
                        <button><a href="#contact">CONTACT</a></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ICONS -->
        <div class="container main-icon">
            <div class="row sub-icon">
                <div class="col-2  icon-box">
                    <div class="row icon"><i class="fa-solid fa-mobile-button"></i></div>
                    <div class="row icon-name">
                        <h4>Call <span>Me</span> On</h4>
                    </div>
                    <div class="row icon-text">
                        <h6>+92 328-5980850</h6>
                    </div>
                </div>
                <div class="col-3  icon-box">
                    <div class="row icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="row icon-name">
                        <h4>Email <span>Me</span> At</h4>
                    </div>
                    <div class="row icon-text">
                        <h6>silent.boss.5445@email.com</h6>
                    </div>
                </div>
                <div class="col-4  icon-box">
                    <div class="row icon"><i class="fa-solid fa-map"></i></div>
                    <div class="row icon-name">
                        <h4>Meet <span>Me</span> At</h4>
                    </div>
                    <div class="row icon-text">
                        <h6><a
                                href="https://www.google.com/maps/place/132-KV+Grid+Station/@30.6740406,73.117699,17z/data=!3m1!4b1!4m6!3m5!1s0x3922b797276ebcdd:0xaf61418108379078!8m2!3d30.674036!4d73.1202739!16s%2Fg%2F11cjhzrwzg?entry=ttu&g_ep=EgoyMDI0MDkyMy4wIKXMDSoASAFQAw%3D%3D">Q#E-01,
                                132-KV Grid Station 3rd, WAPDA Colony,<br> JAHAZ GROUND, SAHIWAL.</a></h6>
                    </div>
                </div>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="row uform">
                    <div class="col-6 bdr">
                        <input type="text" required placeholder="Your Name*" name="cname">
                    </div>
                    <div class="col-6 bdr">
                        <input type="email" required placeholder="Your Email*" name="cemail">
                    </div>
                </div>
                <div class="row uform">
                    <div class="col-6 bdr">
                        <input type="text" placeholder="Your Number" name="cnumber">
                    </div>
                    <div class="col-6 bdr">
                        <input type="file" name="cphoto">
                    </div>
                </div>
                <div class="row uform">
                    <div class="col-12 textarea">
                        <input type="text" placeholder="Type Your Reviews or Message Here..........*" required
                            name="creview">
                    </div>
                </div>
                <div class="submit ">
                    <button class="submit-link"><input type="submit" name="csubmit"></button>
                </div>
            </form>
        </div>
        <!-- ---========== MAIN FOOTER ==========--- -->
        <div class="container-fluid footer-main" id="dani">
            <div class="row fotter-name">
                <h1><a href="#me">DANI</a></h1>
            </div>
            <div class="row fotter-text">
                <div class="fotter-links">
                    <div class="col">
                        <ul>
                            <li><a href="https://wa.me/03285980850" target="_blank"><i
                                        class="fa-brands fa-square-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=61566182610630" target="_blank"><i
                                        class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="https://www.tiktok.com/@itz_dani0906?is_from_webapp=1&sender_device=pc"
                                    target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/itz_dani0906/" target="_blank"><i
                                        class="fa-brands fa-square-instagram"></i></a></li>
                            <li><a href="https://www.threads.net/@itz_dani0906" target="_blank"><i
                                        class="fa-brands fa-threads"></i></a></li>
                            <li><a href="https://youtube.com/@itz_dani0416?si=N_SIhUv7VVmIjK9B" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/itz-dani-066362326?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="https://www.fiverr.com/pe/rL2Dmx" target="_blank"><i
                                        class="fa-solid fa-f"></i></a></li>
                            <li><a href="https://www.upwork.com/freelancers/~01ddc74e0dc6a35a3c" target="_blank"><i
                                        class="fa-brands fa-square-upwork"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row fotter-act">
                <h5>Copyright 2024 by <a href="">DANI</a>. All Rights Reserved.</h5>
                <a href="#start"><i class="bx bx-up-arrow-alt"></i></a>
            </div>
        </div>
    </div>

    <!-- ---========== MAIN JS ==========--- -->
    <script src="./assets/js/main.js"></script>
    <!-- ---========== BOOTSTRAP JS ==========--- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>