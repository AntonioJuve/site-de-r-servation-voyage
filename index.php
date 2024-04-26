<?php

// Démarrer la session
session_start();

// Vérifier si la variable de session indiquant la redirection depuis log.php ou reg.php est définie
if(isset($_SESSION['redirect_from']) && ($_SESSION['redirect_from'] == 'PHP/log.php' || $_SESSION['redirect_from'] == 'PHP/reg.php')) {
    // Exécuter le code spécifique que vous avez envoyé
    if(isset($_SESSION['username'])) {
        // L'utilisateur est connecté, donc ne pas afficher les boutons de connexion et d'inscription
        $display = "none";
    } else {
        // L'utilisateur n'est pas connecté, donc afficher les boutons de connexion et d'inscription
        $display = "block";
    }

    // Supprimer la variable de session après utilisation
    unset($_SESSION['redirect_from']);
} else {
    // La redirection n'a pas eu lieu depuis log.php ou reg.php, donc ne rien faire dans ce cas
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADES</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap">
</head>
<body>

    <header>
        <a href="#" class="logo">HAD<span>Es</span></a>
        <ul class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="information.html">Information</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="contact.html">Contact us</a></li>
        </ul>


        <div class="h-right">
            <a href="login.html" style="display: <?php echo $display; ?>" class="btn">connection</a>
            <a href="register.html" style="display: <?php echo $display; ?>" class="btn">inscription</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section class="home">
        <div class="home-text">
            <h5>Let's.</h5>
            <h1>Planning your <br> own travel</h1>
            <p>
                Indonesia, a Southeast Aisn nation made up of thousands of
                volcanic<br> island, is home to hundreds of ethnic groups
                speaking
            </p>
            <a href="information.html" class="btn">Book a trip</a>
        </div>
    </section>

    <section class="feature">
        <div class="feature-content">
            <div class="row">
                <div class="row-img">
                    <img src="Images/nap1.jpg" alt="">
                </div>
                <h4>Ski tours</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="Images/nap2.jpg" alt="">
                </div>
                <h4>Excursion tours</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="Images/nap3.jpg" alt="">
                </div>
                <h4>Shop tours</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="Images/nap4.jpg" alt="">
                </div>
                <h4>SPA tours</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="Images/nap5.jpg" alt="">
                </div>
                <h4>Wedding tours</h4>
            </div>
           
        </div>
    </section>

    <section class="holiday">
        <div class="holiday-img">
            <img src="Images/h1.png" alt="">
        </div>

        <div class="holiday-text">
            <h5>east nusa tengga</h5>
            <h2>Have uou enjoyed your holiday</h2>
            <p>
                You will be amezed if you take part in this sailing Komodo
                island tour packege. so it is also mandatory for you, besides
                enjoying Komodo tourism on Komodo Island, you also have to tast
                the marine tourism. the beautiful waters of Komodo will make
                you meet many travelers form other countries.
            </p>
            <a href="#" class="btn">Read more</a>
        </div>
    </section>

    <section class="tour">
        <div class="center-text">
            <h2>Popular Tours</h2>
        </div>

        <div class="tour-content">
            <div class="box">
                <img src="Images/t1.jpg" alt="">
                <h6>East java</h6>
                <h4>Mount Bromo</h4>
            </div>

            <div class="box">
                <img src="Images/t2.jpg" alt="">
                <h6>East java</h6>
                <h4>Mount Bromo</h4>
            </div>

            <div class="box">
                <img src="Images/t3.jpg" alt="">
                <h6>East java</h6>
                <h4>Mount Bromo</h4>
            </div>
        </div>

        <div class="center-btn">
            <a href="#" class="btn">See Tours</a>
        </div>
    </section>

    <section class="culture">
        <div class="culture-text">
            <h5>INDONESIAN CULTURE</h5>
            <h2>Our culture her is very friendly to people</h2>
            <p>
                Known for his politeness, manners and gentleness. This
                becomes a characteristic when they mingle with otger tribes and
                become basic traits that are passed down by their ancestors.
            </p>
            <a href="#" class="btn">Read more</a>
        </div>

        <div class="culture-img">
            <img src="Images/c1.png" alt="">
        </div>
    </section>

    <section class="newletter">
        <div class="newletter-content">
            <div class="newletter-text">
                <h2>Ready to explore?</h2>
                <p>Let's go on vacation, make your day</p>
            </div>

            <form action="">
                <input type="email" placeholder="Entrer your email..." required>
                <input type="submit" value="Get started" class="btn">
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="footer-box">
            <h3>Services</h3>
            <a href="#">Email Marketing</a>
            <a href="#">Campaigns</a>
            <a href="#">Brandings</a>
            <a href="#">Offline</a>
        </div>

        <div class="footer-box">
            <h3>About</h3>
            <a href="#">Our story</a>
            <a href="#">Benefits</a>
            <a href="#">Team</a>
            <a href="#">Careers</a>
        </div>

        <div class="footer-box">
            <h3>Help</h3>
            <a href="#">FAQs</a>
            <a href="#">contact us</a>
        </div>

        <div class="footer-box">
            <h3>Social</h3>
            <div class="social">
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-twitter-x-fill"></i></a>
                <a href="#"><i class="ri-facebook-fill"></i></a>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>copyright &copy; 2024 By Juve Dev</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="JavaScript/script.js"></script>

</body>
</html>