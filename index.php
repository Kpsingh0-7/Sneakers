<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>.Sneakers</title>
</head>

<body>



    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/sneakers.png" alt="">
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/search.png" width="20" height="20" alt="" class="searchIcon">
                </div>
            </div>
            <div class="navItem">
                <span class="limitedOffer">Limited Offer!</span>

                <a class="btn btn-outline-success" style="margin-left: 50px;" href="logout.php">Logout</a>


            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">AIR FORCE</h3>
            <h3 class="menuItem">JORDAN</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">HIPPIE</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/air.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR FORCE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹9,695</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/jordan.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹12,295</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/blazer.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹7,995</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/crater.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹5,217</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/hippie.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹6,249</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/air.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">AIR FORCE</h1>
            <p class="productDesc">The Air Force 1 was the first ever basketball shoe to feature Nike Air technology,
                revolutionizing the game and sneaker
                culture forever.</p>
            <h2 class="productPrice">₹9,695</h2>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">BUY NOW!</button>
        </div>
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="Tony Stark" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+91 12345 67890" class="payInput">
            <label>Address</label>
            <input type="text" placeholder="Manhattan St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/rupay.png" width="40" alt="" class="cardIcon">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton">Checkout!</button>
            <span class="close">X</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
        <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="galleryImg">
            
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@sneakers. All rights reserved. 2022.</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>


</body>

</html>