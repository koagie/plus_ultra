<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
</head>
<body class="body">
    <div class="wrapper">
        <div class="header">test</div>
        <div class="content__wrapper">
            <div class="content">test</div>
            <div class="sidebar">test</div>
        </div>
        <div class="footer">test</div>
    </div>
</body>
    
</html> -->


<!-- ここから作成 -->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>koagiesmark</title>
        <meta name="description" content="自分が知っている、Laravelの全て">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|M+PLUS+Rounded+1c:400,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}"> 

    <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/b8a7fea4d4.js"></script>
    </head>

	<body>
    <!-- main visual -->
        <section class="mv">
            <div class="hero">
                <nav class="hero__nav">
                    <img class="hero__menu" src="{{ asset('/storage/images/menu.png') }}" alt="menu">
                    <img class="hero__logo" src="{{ asset('/storage/images/logo.png') }}" alt="logo">
                    <img src="" alt="">
                    <ul class="hero__ul">
                        <li><a href="">works</a></li>
                        <li><a href="">blogs</a></li>
                        <li><a href="">contacts</a></li>
                        <li><a href="">latest</a></li>
                    </ul>
                    <button type="button" onclick="toggleBtn()" id="btn">
                        <span class="onclick__span"></span>
                    </button>
                </nav>

                <div class="lamp-container">
                    <img class="lamp" src="{{ asset('/storage/images/lamp.png') }}" alt="lamp" >
                    <img class="light" src="{{ asset('/storage/images/light.png') }}" alt="light" id="light">
                </div>


                <div class="text-container">
                    <h1>Latest<br>
                        in Lightning
                    </h1>
                    <p>
                        This is the first lamp from our country.
                    </p>
                    <a href="">check all</a>
                    <div class="control">
                        <p>04</p>
                        <div class="line">
                            <span></span>
                        </div>
                        <p>05</p>
                    </div>
                </div>
            </div>


        </section>

<!-- header -->
        <header>
            <h1 class="page-title">koagiesmark</h1>
            <p class="page-desc">開発中</p>
            
        </header>


        <div class="container">
            <main>
                <article class="post-home">
                    <div class="post-title">
                        <h2><a href="#"></a></h2>
                    </div>
                    <div class="post-thumb">
                        <p class="post-date"><span>2021</span>12/28</p>
                    </div>
                    <p class="post-desc">
                    </p>
                    <!-- <p class="btn"><a href="#">続きを読む</a></p> -->
                    <a href="https://koagiesmark.tech/?p=27">
                        <button class="button__liquid">
                            <span class="span__liquid">記事を読む</span>
                            <div class="liquid"></div>
                        </button>
                    </a>
                </article>

                <ul class="pagination">
                    <li><span class="current">1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </main>

            <aside>
                <div class="side-box">
                    <h3>Category</h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

                <div class="side-box">
                    <h3>Newsletter</h3>
                    <p></p>
                    <form class="newsletter-form" action="#">
                        <input type="email" placeholder="hello@example.com">
                        <input type="submit" value="登録">
                    </form>
                </div>

                <div class="side-box popular-posts">
                    <h3>Popular Posts</h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            <button>
                <span>Button</span><div class="liquid"></div>
            </button>
            </aside>
            
        </div>

        <footer>
            <ul class="footer-nav">
                <li><a href="https://twitter.com/">Twitter</a></li>
                <li><a href="https://facebook.com/">Facebook</a></li>
                <li><a href="https://youtube.com/">YouTube</a></li>
                <li><a href="https://instagram.com/">Instagram</a></li>
            </ul>
            <p><small>&copy; 2022 koagiesmark</small></p>
        </footer>
        <script>
            var btn = document.getElementById("btn");
            var light = document.getElementById("light");

            function toggleBtn() {
                btn.classList.toggle("active");
                light.classList.toggle("on");
            }
        </script>
	</body>
</html>
