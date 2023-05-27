<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Coffee shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <!-- header -->
    <header class="header">
        <a href="#" class="logo">
            <img src="Image/logo.jpg" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <a href="giohang.php"><img src="../Coffe_shop/Image/shopping-cart.png" style="width: 30px;margin:0px 20px"></a>
            <a class="fas fa-bars text-danger" id="menu-btn">Giỏ hàng</a>
        </div>
        <!-- search icon -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here">
            <label for="search-box" class="fas fa-search"></label>
        </div>
        <!-- cart icon -->
        <div class="cart-item-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="image/CF_capuchino.jpg" alt="">
                <div class="content">
                    <h3>cart item01</h3>
                    <div class="price">30000vnđ/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout</a>
        </div>



    </header>
    <!-- end of header -->
    <!-- home -->
    <section class="home" id="home">
        <div class="content">
            <h3>Cafe sang moi ngay</h3>
            <p>hello xin chao tat ca moi nguoi da den voi cafe TDTU</p>
            <a href="#" class="btn">take now</a>
        </div>
    </section>
    <!-- end of home  -->
    <!-- menu -->

    <section class="menu" id="menu">
        <h1 class="heading">our <span>menu</span></h1>
        <div class="box-container">
            <?php
            require "config.php";
            $sql = "select * from san_pham;";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo " <div class='box'>";
                echo "  <img src='Image/CF_capuchino.jpg' alt=''>";
                echo "  <h3>" . $row['name'] . "</h3>";
                echo "  <div class='price'>" . $row['price'] . "</div>";
                echo "  <a href='#' class='btn'>add to cart</a>";
                echo "</div>";
            }
            ?>

        </div>
    </section>
    <!-- end of menu -->

    <!-- review -->
    <section class="review" id="review">
        <h1 class="heading"> Re<span>views</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="Image/billgate.jpg" alt="" class="user">
                <p>Coffee in this shop is the best, trust me bro</p>
                <h3>Bill Gates</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="Image/Mark_Zuckerberg.jpg" alt="" class="user">
                <p>I buy Coffee here everyday</p>
                <h3>Mark Zuckerberg</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="Image/Donald_Trump.jpg" alt="" class="user">
                <p>I like this shop's Coffee very much</p>
                <h3>Donald Trump</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- end of review -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>con</span>tact</h1>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2456.0158684137396!2d109.20382513566017!3d12.269786952252469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067ec4dea80dd%3A0xa0bcb74ba7ab732c!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBUw7RuIMSQ4bupYyBUaOG6r25nIC0gUGjDom4gaGnhu4d1IEtow6FuaCBIw7Jh!5e0!3m2!1svi!2s!4v1684580671747!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="">
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="phone number">
                </div>

                <input type="submit" value="contact now" class="btn">
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="shar">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">menu</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>