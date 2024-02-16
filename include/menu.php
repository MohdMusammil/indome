<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">

<?php
            function active($currect_page){
            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
            $url = end($url_array);  
            if($currect_page == $url){
            echo 'active'; //class name in css 
            } 
            }
        ?>


        <a href="https://www.indomededucare.com/" class="navbar-brand ps-5 me-0">
              <!-- <img src="img/nlogo.png" > -->
              <img src="img/nlogo.png" alt="Indomed Educare">
              <!-- <h1 class="   ">Idomed Educare</h1> -->
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="https://indomededucare.com/" class="nav-item nav-link <?php active('https://www.indomededucare.com/');?>">Home</a>
                <a href="about-us.php" class="nav-item nav-link <?php active('about-us.php');?>">About Us</a>
                <a href="studymbbsabroad.php" class="nav-item nav-link <?php active('studymbbsabroad.php');?>">Study MBBS Abroad</a>
                <div class="nav-item dropdown">
                    <a href="study-mbbs-in-philippines.php" class="nav-link dropdown-toggle <?php active('study-mbbs-in-philippines.php');?>" data-bs-toggle="dropdown">Countries </a>
                    <div class="dropdown-menu bg-light m-0">
                    <a href="study-mbbs-in-philippines.php" class="dropdown-item <?php active('study-mbbs-in-philippines.php');?>">MBBS in Philippines</a>
                        <a href="study-mbbs-in-georgia.php" class="dropdown-item <?php active('study-mbbs-in-georgia.php');?>">MBBS in Georgia</a>
                        <a href="study-mbbs-in-kazakhstan.php" class="dropdown-item <?php active('study-mbbs-in-kazakhstan.php');?>">MBBS in Kazakhstan</a>
                        <a href="study-mbbs-in-russia.php" class="dropdown-item <?php active('study-mbbs-in-russia.php');?>">MBBS in Russia</a>
                        <a href="study-mbbs-in-china.php" class="dropdown-item <?php active('study-mbbs-in-china.php');?>">MBBS in China</a>
                        <a href="study-mbbs-in-uk.php" class="dropdown-item <?php active('study-mbbs-in-uk.php');?>">MBBS in UK</a>

                    </div>
                </div>
                <a href="blog.php" class="nav-item nav-link <?php active('blog.php');?>">Blogs</a>
                <a href="service.php" class="nav-item nav-link <?php active('service.php');?>">Services</a>
                <a href="contact-us.php" class="nav-item nav-link <?php active('contact-us.php');?>">Contact Us</a>
            </div>
            <a href="https://docs.google.com/forms/d/1UMZOS3icZVKnGBO2GwvOlIHjFyfZED7dbv58EQTvO-0/edit" class="btn btn-primary px-3 d-none d-lg-block">Register Now</a>
        </div>
    </nav>