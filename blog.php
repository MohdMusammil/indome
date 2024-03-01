<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IndomedEducare|Leading Study MBBS Abroad Consultancy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta property="og:image" content="https://indomededucare.com/img/IndoMed-Educare.png" />
    <link rel="canonical" href="https://www.indomededucare.com/blog.php" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGW23P6');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/w3.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G561WRYQG8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-G561WRYQG8');
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGW23P6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Topbar Start -->
<?php include 'include/header.php';?>
<!-- Topbar End -->
<!-- Navbar Start -->
<?php include 'include/menu.php';?>
<!-- Navbar End -->
<!-- Intro Start -->
<div class="container">
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;"><br>
        <h1 class="display-5 mb-4">All Blogs</h1>
    </div>
    <div class="row mt-n5">
        <!-- Loop through your blog posts here -->
        <?php
        // Dummy array of blog posts (you'll replace this with your actual data)
        $blogPosts = [
            ["title" => "Things to know before choosing to study mbbs china", "image" => "img/Blogs/Things to know before choosing to study mbbs china.jpg", "url" => "things-to-know-before-choosing-to-study-mbbs-china.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "Is NEET Necessary and How to study MBBS Abroad without NEET In 2024?", "image" => "img/Blogs/Is NEET Necessary and How to study MBBS Abroad without NEET In 2024.jpg", "url" => "is-neet-necessary-and-how-to-study-mbbs-abroad-without-neet-in-2024.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "5 REASONS WHY STUDENTS CHOOSE TO STUDY MBBS ABROAD", "image" => "img/Blogs/5 REASONS WHY STUDENTS CHOOSE TO STUDY MBBS ABROAD.jpg", "url" => "5-reasons-why-students-choose-to-study-mbbs-abroad.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "Scholarship Opportunities for International Medical Students", "image" => "img/Blogs/Scholarship Opportunities for International Medical Students.jpg", "url" => "guideline-to-indianstudents-for-study-mbbs-abroad.php", "date" => "26 Jan", "comments" => 13],
            ["title" => "Why Timor Leste for study MBBS abroad?", "image" => "img/Blogs/Why Timor Leste for study MBBS abroad.jpg", "url" => "why-timor-leste-for-studying-MBBS-abroad.php", "date" => "07 Jan", "comments" => 11],
            ["title" => "An Overview To a Successful Overseas Medical Education", "image" => "img/Blogs/an-overview-to-a-successful-overseas-medical-education.jpg", "url" => "an-overview-to-a-successful-overseas-medical-education.php", "date" => "07 Jan", "comments" => 11],
            ["title" => "What are the Eligibility and Requirements in the Study MBBS Abroad?", "image" => "img/Blogs/eligibility-and-requirements-for-study-mbbs-abroad.jpg", "url" => "what-are-the-eligibility-and-requirements-in-the-study-mbbs-abroad.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "Guidelines to Indian Students for Study MBBS Abroad", "image" => "img/Blogs/Indian_Students_for_Study_MBBS_Abroad2.jpg", "url" => "guideline-to-indianstudents-for-study-mbbs-abroad.php", "date" => "26 Jan", "comments" => 13],
            ["title" => "Is it possible to study MBBS without passing the NEET exam?", "image" => "img/Blogs/study_MBBS_without__NEET_exam.jpg", "url" => "study-mbbs-without-passing-the-neet.php", "date" => "07 Jan", "comments" => 11],
            ["title" => "Is it possible to study MBBS with a low NEET score?", "image" => "img/Blogs/studyMBBSwith_low_NEET_score.jpg", "url" => "study-mbbs-with-low-neet-score.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "Admission process to study MBBS abroad", "image" => "img/Blogs/admission-process-to-study mbbs.jpg", "url" => "admission-process-to-study-mbbs-abroad.php", "date" => "26 Jan", "comments" => 13],
            ["title" => "Why Timor Leste for study MBBS abroad?", "image" => "img/Blogs/successful-overseas-medical-education.jpg", "url" => "why-timor-leste-for-studying-MBBS-abroad.php", "date" => "07 Jan", "comments" => 11],
            ["title" => "What are the Eligibility and Requirements in the Study MBBS Abroad?", "image" => "img/Blogs/eligibility-and-requirements.jpg", "url" => "what-are-the-eligibility-and-requirements-in-the-study-mbbs-abroad.php", "date" => "17 Jan", "comments" => 7],
            ["title" => "Guidelines to Indian Students for Study MBBS Abroad", "image" => "img/Blogs/Guidelines_to_Indian_Students_for_Study_MBBS_Abroad1.jpg", "url" => "guideline-to-indianstudents-for-study-mbbs-abroad.php", "date" => "26 Jan", "comments" => 13],
            // Add more blog posts here...
        ];
        // Pagination
        $itemsPerPage = 9; // Number of blog posts per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number
        $startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate starting index for blog posts
        $totalPages = ceil(count($blogPosts) / $itemsPerPage); // Calculate total pages
        // Loop through the subset of blog posts for the current page
        for ($i = $startIndex; $i < min($startIndex + $itemsPerPage, count($blogPosts)); $i++) {
            $post = $blogPosts[$i];
            ?>
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".<?php echo $i + 2; ?>s">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative"><a href="<?php echo $post['url']; ?>"><img alt="img" src="<?php echo $post['image']; ?>"></a></div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3"><a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a></h3>

                        <div class="meta meta-style2">
                            <ul>
                                <li><a href="#!"><i class="fas fa-calendar-alt"></i> <?php echo $post['date']; ?>, <script>document.write(new Date().getFullYear())</script></a></li>
                                <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
                                <li><a href="#!"><i class="fas fa-comments"></i> <?php echo $post['comments']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- Pagination -->
    <div class="row mt-6 wow fadeInUp" data-wow-delay=".<?php echo count($blogPosts) + 2; ?>s">
        <div class="col-12">
            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                <ul>
                    <li><a href="?page=<?php echo max($currentPage - 1, 1); ?>"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a></li>
                    <?php for ($page = 1; $page <= $totalPages; $page++) { ?>
                        <li<?php echo $page == $currentPage ? ' class="active"' : ''; ?>><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                    <?php } ?>
                    <li><a href="?page=<?php echo min($currentPage + 1, $totalPages); ?>">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
