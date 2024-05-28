<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include('../config/controller/login.php');
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    
    <link rel="stylesheet" type="text/css" href="../assets/static/view.10b0d755.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.7074b8c5.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.b59f0ae6.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.cb9574b1.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.page.74745429.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.40f80cd8.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/index.a63779b0.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/default.page.client.e4901c18.css">
    <link rel="stylesheet" type="text/css" href="../assets/static/default.page.server.b89a1076.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="theme-color" content="#000000">

    <!-- Language -->
    <meta charset="UTF-8">
    <meta property="og:locale" content="en_US">



    <!-- Title -->
    <title>Employee Login | Neuralink</title>
    <meta property="og:title" content="Employee Login | Neuralink">
    <meta property="og:site_name" content="Neuralink">

    <!-- Description -->
    <meta name="description"
        content="If you&#039;re interested in learning whether you may qualify for current and/or future Neuralink clinical trials, consider joining our Patient Registry.">
    <meta property="og:description"
        content="If you&#039;re interested in learning whether you may qualify for current and/or future Neuralink clinical trials, consider joining our Patient Registry.">

    <!-- Canonical URL -->
    <link rel="canonical" href="index.html">


    <!-- Icon and Image -->
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="../favicon.png">
    <meta property="og:image" content="https://neuralink.com/assets/static/default.9b034b9f.png">
    <meta property="og:image:alt" content="Neuralink Logo">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Authorship -->
    <meta name="twitter:site" content="@s.pinto32">
    <meta name="twitter:creator" content="@s.pinto32">
    <meta name="author" content="Sergio Pinto">
    <meta name="copyright" content="Questa pagina è stata creata a scopo di studio">

    <!-- Miscellaneous SEO -->
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <link rel="sitemap" type="application/xml" href="../sitemap.xml">
    <meta name="keywords"
        content="neuralink,bci,brain computer interface,clinical trial,human trial,prime study,quadriplegia,paraplegia,als">


    <meta property="og:type" content="website">


    <!-- Schema.org -->
    <script type="application/ld+json">
          {"@context":"https://schema.org","@type":"WebSite","url":"https://neuralink.com/patient-registry/","name":"Patient Registry | Neuralink","abstract":"If you're interested in learning whether you may qualify for current and/or future Neuralink clinical trials, consider joining our Patient Registry.","image":{"@type":"ImageObject","url":"https://neuralink.com/assets/static/default.9b034b9f.png","caption":"Neuralink Logo","width":1200,"height":630},"author":[{"@type":"Organization","name":"Neuralink","logo":{"@type":"ImageObject","url":"https://neuralink.com/favicon.png","caption":"Neuralink Logo","width":96,"height":96}}]}
        </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FR4E2J5WBJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-FR4E2J5WBJ');
    </script>
</head>

<body>
    <div id="page-view">
        <div class="_pageHeader_c2lk8_1">
            <nav class="_nav_s9xl1_11">
                <div class="_main_s9xl1_42">
                    <a class="_logoLink_s9xl1_26" aria-label="Neuralink Logo" href="../index.html">
                        <svg width="56" height="35" viewBox="0 0 56 35" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="_logo_s9xl1_26">
                            <path fill="black" fill-rule="evenodd" clip-rule="evenodd"
                                d="M30.8777 22.4886H0.705078L22.5011 2.28693C24.3585 0.565492 27.0293 -0.000275522 29.47 0.809903C31.9102 1.62058 33.6439 3.6498 33.994 6.10498L37.476 30.5019C37.5803 31.2306 38.0767 31.8049 38.8036 32.0367C39.5305 32.2696 40.2868 32.0946 40.8255 31.572L50.1712 22.4886H39.4676L39.1096 20.2688H55.7051L42.4717 33.131C41.6499 33.9302 40.5593 34.3566 39.4367 34.3566C38.9823 34.3566 38.5221 34.2862 38.073 34.1429C36.5143 33.6455 35.4074 32.3656 35.1842 30.8031L31.7021 6.40672C31.4673 4.75921 30.3499 3.45166 28.7127 2.90802C27.0759 2.36337 25.3548 2.72899 24.108 3.88365L6.42923 20.2688H30.5522L30.8777 22.4886Z">
                            </path>
                        </svg></a>
                    <div class="_buttonGroup_s9xl1_99">
                        <a class="_underline-on-hover_s9xl1_143"
                            href="../careers/index.html">Careers</a>
                            <a class="_underline-on-hover_s9xl1_143"
                            href="../blog/index.html">Blog</a>
                            <a href="../patient-registry/index.html" aria-disabled="false"
                            class="_button_1wxcu_11 _nlkButton_s9xl1_107">Patient Registry</a>
                            <a href="index.html" aria-disabled="false" class="_button_1wxcu_11 _nlkButton_s9xl1_107">Exployee Login</a>
                        </div>

                </div>
                <div class="_navigationAlt_s9xl1_45 hidden"><a class="_underline-on-hover_s9xl1_143"
                        href="index.html#mission">Mission</a><a class="_underline-on-hover_s9xl1_143"
                        href="index.html#n1">Implant</a><a class="_underline-on-hover_s9xl1_143"
                        href="index.html#robot">Surgical Robot</a><a class="_underline-on-hover_s9xl1_143"
                        href="index.html#experience">BCI Experience</a>
                </div>
            </nav>
        </div>
        <main id="page-patient-registry-home" class="page-main">
            <main class="_view_owt3g_11">
            <section class="_section_koj4l_11">
                <div class="_innerContainer_koj4l_22 _spacedOut_koj4l_72">
                    <h1>Welcome Back</h1>
                    <p class="_headlineText_koj4l_56">Please Login into your dedicate zone </p>
                </div>
            </section>
                <div class="wrapper">
                <h2>Enter your credentials!</h2>
                <form action="" method="post">
                    <div class="input-box" >
                        <input type="text" placeholder="Email" id="email" name="email" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" id="password" name="password" required>
                        <i class='bx bx-key' ></i>
                    </div>
                    <center>
                        <input type="submit" name="submit" value="Login" class="_button_1wxcu_11 _nlkButton_s9xl1_107">
                        <h6>If can't access to your account, contact the support.</h6>
                    </center>
                </form>
                </div>
            </main>
        </main>
    </div>

</body>

</html>