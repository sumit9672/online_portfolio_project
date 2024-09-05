<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn,"SELECT * FROM `contact_form` WHERE name = '$name'
    AND email='$email' AND number ='$number' AND message='$msg'") or die('query failed');
    
    if(mysqli_num_rows($select_message)>0){
        $message[] = 'message sent already';

    }else{
        mysqli_query($conn,"INSERT INTO `contact_form`(name, email,number,message)
         VALUES('$name','$email','$number','$msg') ") or die('query failed');
        $message[] = 'message sent succesfully..!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- comment shotcut -ctrl +k +c -->
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   
    <!-- aos css link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   
    <!-- my custom link -->
    <link rel=" stylesheet" href="css/style.css">


</head>

<body>

<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message" data-aos="zoom-out">
        <span>' . $message . '</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i></div>';
    }
}

?>
    <!-- header section starts -->

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>

        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="img/user-img.jpg" alt="user image">
        </div>
        <div class="content">
            <h3 data-aos="fade-up" > hi , i am rushikesh kore </h3>
            <span data-aos="fade-up" > web designer & developer </span>
            <p data-aos="fade-up" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis cupiditate libero recusandae animi quis, in labore? Quos reprehenderit,
                reiciendis a suscipit beatae aperiam amet, eveniet quaerat vel nulla maiores?</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>
    </section>
    <!-- home section end -->

    <!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
       
        <div class="biography" >
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum beatae?
                Earum magnam similique id quasi soluta deserunt corporis nisi.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>name :</span>Rushikesh Kore</h3>
                <h3 data-aos="zoom-in"><span>email :</span>mysteriousman0947@gmail.com</h3>
                <h3 data-aos="zoom-in"><span>address :</span>kolhapur ,india</h3>
                <h3 data-aos="zoom-in"><span>phone :</span>+123-456-7890</h3>
                <h3 data-aos="zoom-in"><span>age :</span>23 years</h3>
                <h3 data-aos="zoom-in"><span>experience :</span>2+ years</h3>
            </div>
            <a href="#" class="btn"  data-aos="fade-up">Download CV</a>
        </div>
        <div class="skills"  data-aos="fade-up">
            <h1 class="heading"><span>skills</span></h1>
            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span><span>70%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JavaScript</span><span>55%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>PHP</span><span>55%</span></h3>
                </div>
            </div>
        </div>
        <div class="edu-exp">
            <h1 class="heading"  data-aos="fade-up"><span>education & experience</span></h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>(2020-2021)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>(2021-2022)</span>
                        <h3>web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>(2022-2023)</span>
                        <h3>Android developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>

                </div>

                <div class="box-container" >
                    <h3 class="title"data-aos="fade-left">experience</h3>
                    <div class="box" data-aos="fade-left">
                        <span>(2020-2021)</span>
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <span>(2021-2022)</span>
                        <h3>back-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <span>(2022-2023)</span>
                        <h3>Android developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service section start -->
    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"><span>services</span></h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fa fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-dev"></i>
                <h3>backend development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa fa-terminal on fa-square "></i>
                <h3>android development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa fa-bullhorn "></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-wordpress "></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
        </div>

    </section>


    <!-- service section end  -->

    <!-- portfolio section starts -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="img/f-1.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="img/f-2.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/f-3.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="img/f-4.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="img/f-5.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/f-6.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

        </div>

    </section>

    <!-- portfolio section end -->

    <!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

        <form action="" method="post">
            <div class="flex">
                <input type="text"  data-aos="fade-right" name="name" placeholder="enter your name" class="box" required>
                <input type="email" data-aos="fade-left"  name="email" placeholder="enter your email" class="box" required>
            </div>
            <input type="number"  data-aos="fade-up" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea name="message" data-aos="fade-up"  class="box" placeholder="enter your message" required cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+123-456-7890</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>mysteriousman0947@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>kolhapur ,india - 416121</p>
            </div>
    </section>

    <!-- contact section end -->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. rushikesh kore</span></div>

    <script src="js/script.js"></script>


   <!-- aos js link -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
 <script>
    AOS.init({
       duration:800,
       delay:300
    });
 </script>

</body>

</html>