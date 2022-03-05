<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glassmorphism portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/glassmorphism.css') }}" rel="stylesheet">
    <!-- <link href="{{asset('css/top.css')}}" rel="stylesheet">  -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="" alt="image">
        <h3 class="name">kogi</h3>
        <p class="post">frontend and backend developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#service">service</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="#blogs">blogs</a></li>
            <li><a href="#search">search</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- content section starts  -->

<div class="container">

    <section class="home" id="home">

        <h3>hi there...</h3>
        <h3 class="name">my name is <span>kogi</span></h3>
        <h3 class="post">i am a <span class="typing-text">front end developer</span></h3>

        <a href="#"><button class="btn">use me</button></a>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

    </section>

    <!-- about section  -->

    <section class="about" id="about">

        <h1 class="heading">about me</h1>

        <div class="content">
            <h3 class="name">my name is <span>kogi</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quos ipsam, temporibus veritatis sed dignissimos. Ratione consequuntur sapiente reiciendis dolorem.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, iusto hic neque illo dolorem facere laborum quam inventore architecto voluptates totam quo corrupti assumenda nihil voluptatum optio ullam cupiditate excepturi?</p>
        </div>

        <div class="skills">
            <div class="progress">
                <h3>html <span>95%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>css <span>85%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>javascript <span>65%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>photoshop <span>70%</span></h3>
                <div class="bar"><span></span></div>
            </div>
        </div>

    </section>

    <!-- service section  -->
    <section class="service" id="service">

        <h1 class="heading">my services</h1>

        <div class="box-container">

            <div class="box">
                <i class="fab fa-html5"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

            <div class="box">
                <i class="fab fa-css3"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

            <div class="box">
                <i class="fab fa-js"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

            <div class="box">
                <i class="fab fa-wordpress"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sed.</p>
            </div>

        </div>

    </section>

    <!-- education section  -->

    <section class="education" id="education">

        <h1 class="heading">my education</h1>

        <div class="box-container">

            <div class="box">
                <div class="year">2017 - 2018</div>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut quis nam eos deserunt veritatis adipisci, beatae odio rerum doloribus?</p>
            </div>

            <div class="box">
                <div class="year">2018 - 2019</div>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut quis nam eos deserunt veritatis adipisci, beatae odio rerum doloribus?</p>
            </div>

            <div class="box">
                <div class="year">2019 - 2020</div>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut quis nam eos deserunt veritatis adipisci, beatae odio rerum doloribus?</p>
            </div>

            <div class="box">
                <div class="year">2020 - 2021</div>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut quis nam eos deserunt veritatis adipisci, beatae odio rerum doloribus?</p>
            </div>

        </div>

    </section>

    <!-- contact section  -->
    <section class="contact" id="contact">

        <h1 class="heading">contact me</h1>

        <div class="row">

            <form action="">
                <input type="text" class="box" placeholder="first name">
                <input type="text" class="box" placeholder="last name">
                <input type="email" class="box" placeholder="your email">
                <input type="text" class="box" placeholder="your project">
                <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <input type="submit" value="message" class="btn">
            </form>

            <div class="content">
                <div class="icons">
                    <h3><i class="fas fa-map-marker-alt"></i> address </h3>
                    <p>mumbai, india 400104</p>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-envelope"></i> email </h3>
                    <p>shaikh@gmail.com</p>
                </div>
                <div class="icons">
                    <h3><i class="fas fa-phone"></i> phone </h3>
                    <p>+123-456-7890</p>
                </div>
            </div>

        </div>

    </section>

    <!-- blog付け足し分 -->
    <section class="contact" id="blogs">

        <h1 class="heading">blogs</h1>

        <div class="row">
        
    <!-- cards secrtion -->
        <div class="cards">
            <div class="card">
                <div class="card__content">
                    <h2>01</h2>
                    <h3>Card One</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                    </p>
                    <a href="https://kogiblo.vercel.app/">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="card__content">
                    <h2>02</h2>
                    <h3>Card Two</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                    </p>
                    <a href="https://kogiblo.vercel.app/">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="card__content">
                    <h2>03</h2>
                    <h3>Card Three</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                    </p>
                    <a href="https://kogiblo.vercel.app/">Read More</a>
                </div>
            </div>
        </div>

    </section>

    <!-- search section  -->
    <section class="search" id="search">

        <h1 class="heading">search</h1>

        <div class="row">
            <div class="searchbox">
                <div class="shadow"></div>
                <input type="text" placeholder="search anything you want...">
            </div>


        </div>

    </section>


</div>

<!-- content section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">
    <span style="background: linear-gradient(deeppink, purple);"></span>
    <span style="background: linear-gradient(lightgreen, crimson);"></span>
    <span style="background:linear-gradient(blueviolet, deeppink)"></span>
    <span style="background:linear-gradient(coral, blueviolet)"></span>
    <span style="background:linear-gradient(#999, #111)"></span>
</div>



<!-- type.js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

<script>

    var type = new Typed('.typing-text',{
        strings : [ 'web designer', 'frontend developer', 'backend developer', 'photographer' ],
        typeSpeed: 120,
        loop:true
    });

    let themeColor = document.querySelectorAll('.theme-toggler span');
    themeColor.forEach(color => color.addEventListener('click', () =>{
        let background = color.style.background;
        document.querySelector('body').style.background = background;
    }));

</script>


<!-- vanilla.js -->
<script type="text/javascript" src="{{asset('js/vanilla-tilt.js')}}"></script>
    <script>
        VanillaTilt.init(document.querySelector(".cards"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        });
    </script>

</body>
</html>