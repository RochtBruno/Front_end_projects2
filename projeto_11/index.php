<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/2cef6ec148.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>project_02</title>
</head>
<body>
    <header>
        <div class="container">

            <div class="navbar">
                <div class="logo"><a href="">BM Inc.</a></div>
        
                <div class="hamburger active"><i class="fas fa-equals"></i></div>
                <ul class="menu active">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            
        </div><!--container-->
        
    </header>

    <section class="main__bg">
        <div class="container">
            <h1>BM Inc</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices luctus mauris ac lobortis.</p>
            <input type="submit" name="acao" value="Know more!">
        </div>
    </section>

    <section class="associate">
        <div class="container">
            <p>Join our list!<i class="fas fa-angle-right"></i></p>
            <form>
                <input type="email" name="email" placeholder="Your E-mail..." required>
                <input type="submit" name="acao" value="send">
            </form>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
        <h1>What our clients are saying about us?</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum efficitur. 
                Nunc vel magna sapien. Aenean ac sapien quis est gravida tempus quis porta magna. Duis tristique commodo 
                enim non luctus."</p>
        </div>
    </section>

    <section class="about">
    <h1>About us</h1>
        <div class="container">
            <div class="about__box w33">
            <i class="fas fa-code"></i>
            <h3>We are coders,like you!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum 
                efficitur. Nunc vel magna sapien. Aenean ac sapien quis est gravida tempus quis porta magna.</p>
            </div>

            <div class="about__box w33">
            <i class="fas fa-code"></i>
            <h3>We are coders,like you!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum 
                efficitur. Nunc vel magna sapien. Aenean ac sapien quis est gravida tempus quis porta magna.</p>
            </div>

            <div class="about__box w33">
            <i class="fas fa-code"></i>
            <h3>We are coders,like you!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum 
                efficitur. Nunc vel magna sapien. Aenean ac sapien quis est gravida tempus quis porta magna.</p>
            </div>
        </div>
    </section>

    <section class="team">
        <h1>Our team</h1>
        <div class="container">
            <div class="team__box w50">
                <h2>Bruno R.</h2>
                <h4>Front-End Dev</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum 
                efficitur. Nunc vel magna sapien.</p>
            </div>

            <div class="team__box w50">
                <h2>Bruno R.</h2>
                <h4>Front-End Dev</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit leo non ligula elementum 
                efficitur. Nunc vel magna sapien.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h1>Let's talk!</h1>
            <form >
                <input type="email" name="email" placeholder="Your e-mail" required>
                <input type="text" name="phone" placeholder="Your phone">
                <input type="submit" name="acao" value="Send!">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>BM Inc</p>
            <p>all rights reserved</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>

</body>
</html>