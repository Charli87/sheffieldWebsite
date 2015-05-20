<!DOCTYPE HTML>
<html>
    <head>
        <title>Sheffield Attractions</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
        <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
        <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#images').kwicks({
                    max: 600,
                    spacing: 2
                });
                $('ul.sf-menu').sooperfish();
            });
        </script>
    </head>

    <body>
        <div id="main">
            <header>

                <!--Start of header-->
                <div id="logo">
                    <div id="logo_text">
                        <h1><a href="index.php">Sheffield<span class="logo_colour"> Attractions</span></a></h1>
                        <h2>A Cool Guide To The Steel City...</h2>
                    </div>
                </div>
                <?php require_once ('navbar.php'); ?>
            </header>
            <div id="site_content">

                <div id="top_border"></div>
