<?php
$host = $_SERVER['HTTP_HOST'];

if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    $base_path = '/kiwicat.wtf/';
} else {
    $base_path = '/';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kiwicat0_0</title>

    <script src="https://kit.fontawesome.com/1c457c6875.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.php">

    <meta charset="UTF-8">
    <meta name="description" content="Kiwicat0_0 is a twitch streamer and youtuber and this is her website">
    <meta name="keywords" content="Kiwicat0_0, KiwiCat, VTubing">
    <meta name="author" content="Kiwicat0_0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph -->
    <meta property="og:title" content="Kiwicat – Streamer & Youtuber">
    <meta property="og:description" content="Official Kiwicat0_0 website with news and stuff!">
    <meta property="og:image" content="https://kiwicat.cat/assets/images/channels4_banner.jpg">
    <meta property="og:url" content="https://kiwicat.cat">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kiwicat – Streamer and Youtuber">
    <meta name="twitter:description" content="Official Kiwicat0_0 website with news and stuff!">
    <meta name="twitter:image" content="https://kiwicat.cat/assets/images/channels4_banner.jpg">
</head>

<body>

    <div class="dropdown">
        <button>Pages</button>
        <div class="content">
            <a class="link" href="<?php echo $base_path; ?>reviews/">Reviews</a>
            <a class="link" href="<?php echo $base_path; ?>discord/"><i class="fa-brands fa-discord" style="color: #501fe2;"></i>Discord</a>
            <a class="link" href="<?php echo $base_path; ?>catalonia/">Catalonia</a>
            <a class="link" href="<?php echo $base_path; ?>calculator/">Calculator</a>
            <a class="link" href="<?php echo $base_path; ?>pokemon/">Pokemon Data</a>
            <a class="link" href="<?php echo $base_path; ?>minecraft/skins/">Skin Data</a>
            <a class="link" href="<?php echo $base_path; ?>news/">News</a>
            <a class="link" href="<?php echo $base_path; ?>pronouns/">Pronouns</a>
        </div>
    </div>

    <header><h1 class="title" style="display: inline;">Kiwicat0_0</h1></header>

    <p style="display: inline;">go visit </p>
    <a href="<?php echo $base_path; ?>catalonia/" id="cat" class="link" style="display: inline;">Catalonia</a>

    <br>
    <hr color="black">

    <div id="main">
        <section>
            <div class="text" id="me" style="text-align:center;">
                <img alt="Icon of Kiwicats Profile Picture" id="kiwi" class="icons" src="<?php echo $base_path; ?>assets/images/avatar.webp" width="100">
                <i class="fa-brands fa-twitch" style="display: inline;"></i>
                <h2 style="display: inline;">About Me</h2>
                <i class="fa-brands fa-youtube" style="display: inline;"></i>

                <p>
                    Hi, I am A Programmer and also a small 
                    <a class="link" id="link" href="https://twitch.tv/Kiwicat0_0" target="_blank">streamer</a>
                    /
                    <a class="link" id="link" href="https://youtube.com/@Kiwicat0_0" target="_blank">youtuber.</a>
                </p>
            </div>
        </section>

        <br><br>

        <div class="text" id="newsb" style="width: 91%; margin: auto;">
            <h2>News</h2>

            <iframe class="news" src="<?php echo $base_path; ?>news/news_8.html" height="300"></iframe>
            <iframe class="news" src="<?php echo $base_path; ?>news/news_7.html" height="300"></iframe>
            <iframe class="news" src="<?php echo $base_path; ?>news/news_6.html" height="300"></iframe>
            <iframe class="news" src="<?php echo $base_path; ?>news/news_5.html" height="300"></iframe>
            <iframe class="news" src="<?php echo $base_path; ?>news/news_4.html" height="300"></iframe>
            <iframe class="news" src="<?php echo $base_path; ?>news/news_3.html" height="300"></iframe>
        </div>
    </div>

    <hr color="black">

    <footer>
        <div class="imp">
            <p>
                <a class="link" href="mailto:kiwicat@kiwicat.cat">kiwicat@kiwicat.cat</a> for business 
                <br>
                <a class="link" href="<?php echo $base_path; ?>impressum/">impressum</a>
            </p>
        </div>
    </footer>

    <img id="nyan_cat" src="<?php echo $base_path; ?>assets/images/Nyan-Cat.png" alt="nyan Cat">

    <script src="<?php echo $base_path; ?>assets/scripts/index.js"></script>

</body>
</html>
