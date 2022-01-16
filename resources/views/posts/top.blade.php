<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/top.css')}}"> 
</head>
<body>

    <section class="cards">
        <div class="card">
            <div class="card__content">
                <h2>01</h2>
                <h3>Card One</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                </p>
                <a href="https://koagiesmark.tech/?p=27">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card__content">
                <h2>02</h2>
                <h3>Card Two</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                </p>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card__content">
                <h2>03</h2>
                <h3>Card Three</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugit sint voluptatum saepe voluptate vero? Illum placeat voluptatem quaerat? Animi laborum ratione, atque aspernatur esse libero voluptas modi distinctio adipisci.
                </p>
                <a href="#">Read More</a>
            </div>
        </div>
    </section>



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




<!-- 
    <header class="header">
        <div class="humberger"></div>
        <div class="title"></div>                  
    </header>
    <section id="flower">
       <img src="" alt="flower__1" class="img__flower"> 
       <img src="" alt="flower__2" class="img__flower"> 
       <img src="" alt="flower__3" class="img__flower"> 
    </section>
    <section class="mv">
        <h1 class="mv__top-comment">
            hello!!<br>
            this is<br>
            demo
        </h1>   
        <div class="mv__info">
            <h1>information</h1>
        </div>
        <div class="mv__date">
            <h2>2021.12.30</h2>
            <br>
            to
            <br>
            <h2>2022.01.02</h2>
        </div>
    </section>
    <section class="gallery">
        <h1>gallery</h1>
        <div class="gallery__container">
           <img src="" alt="1" class="img__1"> 
           <img src="" alt="2" class="img__2"> 
           <img src="" alt="3" class="img__3"> 
           <img src="" alt="4" class="img__4"> 
           <img src="" alt="5" class="img__5"> 
           <img src="" alt="6" class="img__6"> 
        </div>         
    </section>
    <section class="contact">
        tel
        <br>
        map
    </section>
    <section class="footer">
        this is demo site...
    </section>
    <script src="{{asset('js/main.js')}"></script> -->