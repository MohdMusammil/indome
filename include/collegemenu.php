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


        <a href="index.php" class="navbar-brand ps-5 me-0">
              <img src="img/nlogo.png" >
              <!-- <h1 class="   ">Idomed Educare</h1> -->
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php active('index.php');?>">Home</a>
                <a href="about-us.php" class="nav-item nav-link <?php active('about-us.php');?>">About Us</a>
                <a href="Philippines.php" class="nav-item nav-link <?php active('Philippines.php');?>">MBBS in Philippines</a>
                <div class="nav-item dropdown">
                    <a href="studyabroad.php" class="nav-link dropdown-toggle <?php active('studyabroad.php');?>" data-bs-toggle="dropdown">MBBS in Abroad</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="georgia.php" class="dropdown-item <?php active('georgia.php');?>">MBBS in Georgia</a>
                        <a href="Kazakhstan.php" class="dropdown-item <?php active('Kazakhstan.php');?>">MBBS in Kazakhstan</a>
                        <a href="russia.php" class="dropdown-item <?php active('russia.php');?>">MBBS in Russia</a>
                        <a href="china.php" class="dropdown-item <?php active('china.php');?>">MBBS in China</a>
                        <a href="uk.php" class="dropdown-item <?php active('uk.php');?>">MBBS in UK</a>

                    </div>
                </div>
                <a href="service.php" class="nav-item nav-link <?php active('service.php');?>">Services</a>
                <a href="contact-us.php" class="nav-item nav-link <?php active('contact-us.php');?>">Contact Us</a>
            </div>
            <a href="https://docs.google.com/forms/d/1UMZOS3icZVKnGBO2GwvOlIHjFyfZED7dbv58EQTvO-0/edit" class="btn btn-primary px-3 d-none d-lg-block">Register Now</a>
        </div>
    </nav>