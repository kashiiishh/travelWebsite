<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Travel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <style>

    @keyframes fadeIn {
        0%{
            transform: scale(0);
            opacity:0;
        }
    }
        html { overflow-y: scroll; }
        /* body { position: absolute; } */

    .heading{
        background: url(header23.png);
        background-size:  cover !important;
        background-position:  center !important;
        padding-top: 10rem;
        padding-bottom: 15rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .heading h1{
        font-size: 10rem;
        text-transform: uppercase;
        color: var(--white);
    }
    .heading-title{
        text-transform: uppercase;
        text-align:center;
        font-size: 2.5rem;
        font-weight: 900;
    }
    .services {
        display: flex;
        justify-content: center; 
        align-items: center; 
        flex-wrap: wrap;
    }

    .box-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 20px; 
    }

    .services .box-container{
        background: var(--main-color);
        transition: 0.1s linear;
        text-align: center;
        border-radius: 3px;
    }

    .services .box-container:hover{
        background: var(--black);
        cursor:pointer;
    }

    .services .box-container .box h3{
        color: var(--black);
        font-size: 1.7rem;
    }

    .title{
        margin-left: 120px;
        margin-top: 40px;
    }
    
    
    .home{
        padding: 0;

    }

    .home .slide{
        text-align:center;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content:center;
        background-size: cover !important;
        background-position: center !important;
        min-height: 60rem;
     }   


    .home .slide .content{
        width:85rem;
        display:none;
    }
    .home .swiper-slide-active .content{
        display: inline-block;
    }

    .home .slide .content span{
        display: block;
        font-size: 2.2rem;
        padding-bottom:1rem;
        animation: fadeIn 0.4s linear backwards 0.2s;
    }

     .home .slide .content h3{
        font-size: 6vw;
        text-transform:uppercase;
        line-height: 1;
        text-shadow:var(--text-shadow);
        padding: 1rem 0;
        animation: fadeIn 0.4s linear backwards 0.4s;
     }

     .home .slide .content .btn{
        animation: fadeIn 0.4s linear backwards 0.6s;
     }

     .btn{
        display:inline-block;
        background: var(--black);
        margin-top:1rem;
        color:var(--white);
        font-size:1.7rem;
        padding: 1rem 3rem;
        cursor: pointer;
     }

     .btn:hover{
        background: var(--main-color);
     }

     .home-about{
        display:flex;
        align-items:center;
        flex-wrap:wrap;
     }

     .home-about .image{
        flex: 1 1 22rem;
     }

     .home-about .image img{
        width: 100%;
     }

     .home-about .content{
        flex: 1 1 41rem;
        padding: 2rem;
        background: var(--light-bg);
     }
    


     .home-about .content h3{
        font-size: 3rem;
        color: var(--black);
     }


     .home-about .content p{
        font-size: 1.5rem;
        padding: 1rem 0;
        line-height: 2;
        color: var(--light-black);
     }

    
   

   .home .swiper-button-prev,
   .home .swiper-button-next{
        height:5rem;
        width: 5rem;
        background: var(--white);
        color:var(--black);
    }

    .home .swiper-button-next{
        top: inherit;
        left:inherit;
        right:0;bottom:0;
       
    }


    .home .swiper-button-prev{
        top: inherit;
        right:5rem;
        left:inherit;
        bottom:0;
       
    }


    .swiper-button-next:hover,
    .swiper-button-prev:hover{
        background: var(--main-color);
        color: var(--white);
    }

    .swiper-button-next:after,
    .swiper-button-prev:after{
        font-size: 1rem;
    }


    .home-package{
        background: var(--light-bg);
    }
    .box-container {
        display: flex;
        flex-direction:row;
        align-items: center;
        /* flex-wrap: wrap; */
        
    }

    .home-package .box-container{
       
        text-align: center;
       
    }
    .home-package .box-container .box{
        border: var(--border);
        box-shadow: var(--box-shadow);
        background:var(--white);
        margin: 25px;
    }
    .home-package .box-container .box .image{
        height: 25rem;
        /* margin-right: 25px; */
        overflow: hidden;
    }
    .home-package .box-container .box .image img{
        height:100%;
        width:100%;
        object-fit: cover;
        transition: 0.2s linear;
    }


    .home-package .box-container .box .content{
        padding: 2rem;
        text-align:center;
    }


    .home-package .box-container .box .content h3{
        font-size: 2.5rem;
        color: var(--black);
    }

    .home-package .box-container .box .content p{
        font-size: 1.5rem;
        color: var(--light-black);
        line-height: 2;
        padding: 1rem 0;
    }

    .home-offer{
        text-align:center;
    }

    .home-offer .content{
        max-width: 70rem;
        margin: 0 auto;
    }


    .home-offer .content h3{
        font-size: 3rem;
        text-transform: uppercase;
        color: var(--black);
    }


    .home-offer .content p{
        font-size: 1.5rem;
        color: var(--light-black);
        line-height: 2;
        padding: 1rem 0;
    }

    .home-package .load-more{
        text-align: center;
        margin-top:2rem;
    }



    .about{
        display: flex;
        align-items: center;
        flex-wrap:wrap;
        gap:3rem;
    }


    .about .image{
        flex: 1 1 21rem;
    }

    .about .image img{
        width: 100%;
    }



    .about .content{
        flex: 1 1 41rem;
        text-align:center;
    }


    .about .content h3{
        font-size:3rem;
        color: var(--black);
    }


    .about .content p{
        font-size: 1.5rem;
        color: var(--light-black);
        line-height: 2;
        padding: 1rem 0;
    }


    .about .content .icon-container{
        margin-top:2rem;
        display:flex;
        flex-wrap: wrap;
        gap:1.5rem;
        align-items: flex-end;
    }

    .about .content .icon-container .icons{
        background: var(--light-bg);
        padding: 2rem;
        flex: 1 1 16rem;
    }


    .about .content .icon-container .icons i{
        font-size: 4rem;
        margin-bottom: 1rem;
        color: var(--main-color);
    }

    .about .content .icon-container .icons span{
       font-size: 1.5rem;
       color: var(--light-black);
       display: block;
    }


    .reviews{
        background:var(--light-bg);
    }

    .reviews .slide{
        padding: 2rem;
        border: var(--border);
        background: var(--white);
        text-align: center;
        box-shadow: var(--box-shadow);
        margin-bottom: 4rem;
    }

.reviews .slide .stars{
    padding-bottom: 1rem;
}

    .reviews .slide .stars i{
        font-size: 1.7rem;
        color: var(--main-color);
    }


    .reviews .slide p{
        font-size: 1.5rem;
        color: var(--light-black);
        line-height: 2;
        padding: 1rem 0;
    }


    .reviews .slide h3{
        font-size: 2rem;
        color: var(--black); 
    }

    .reviews .slide span{
        font-size: 1.6rem;
        color: var(--main-color);
        display: block;
    }

    .reviews .slide img{
        height: 7rem;
        width: 7rem;
        border-radius: 50%;
        margin-top: 1rem;
    }

    .footer{
            background: url(footer-5.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

    .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(25rem, 1fr));
            gap: 3rem;
        }


    .footer .box-container .box h3{
            color: var(--white);
            font-size: 2.0rem;
            padding-bottom: 2rem;
        }

    .footer .box-container .box a{
            color: var(--light-white);
            font-size: 1.5rem;
            padding-bottom: 1rem;
            display: block;
        }

        .footer .box-container .box a i{
            color: var(--main-color);
            padding-right: 0.5rem;
            transition: 0.2s linear;
        }

        .footer .box-container .box a:hover i{
            color: var(--main-color);
            padding-right: 2rem;
        }

    .footer .credit{
            text-align: center;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 0.1rem solid var(--light-black);
            font-size: 2rem;
            color: var(--white);
            font-weight: 700;
        }



        
    </style>
    <!-- header starts -->
    <section class="header">
        <a href="index.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">pacakage</a>
            <a href="book.php">book</a>
        </nav>


        <div id="menu-btn" class="fas fa-bars"></div> 
    </section>
    
    <!-- header ends -->

    <div class="heading" style="background:url(header bg-1 1.png) no-repeat">
<h1>about us</h1></div>
        
    


<!-- about starts -->

    <section class="about">
        <div class="image">
            <img src="about.jpeg" alt="">
        </div>


        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quas tenetur deserunt, ipsam in qui tempore! Natus nam atque cumque impedit? Ab ipsa ducimus blanditiis praesentium autem, culpa commodi? Distinctio!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi in perferendis odio illo. Nostrum amet hic culpa deleniti cumque similique eveniet possimus temporibus minima dolores, aliquam illum repudiandae enim qui?</p>

            <div class="icon-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>


                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>


                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide services</span>
                </div>
            </div>
        </div>
    </section>


    <!-- about ends -->
    
    <!-- review starts -->
        <section class="reviews">
            <div class=" reviews-slider">
                <div class="">
                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero esse placeat error eos. Atque culpa natus nihil similique est dolorem officiis ipsa maxime? Consequuntur esse quisquam quod saepe! Rerum, similique!</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="pic-1.png" alt="">
                    </div>


                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum reprehenderit maxime vitae consequatur ratione repellat, delectus excepturi! Commodi voluptate possimus soluta praesentium dolorum minus laborum itaque inventore ad, hic numquam placeat omnis iure corrupti tempore saepe consectetur rem incidunt sapiente.</p>
                        <h3>cristiano john</h3>
                        <span>traveler</span>
                        <img src="pic-2.png" alt="">
                    </div>


                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero esse placeat error eos. Atque culpa natus nihil similique est dolorem officiis ipsa maxime? Consequuntur esse quisquam quod saepe! Rerum, similique!</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="pic-3.png" alt="">
                    </div>



                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, at eveniet adipisci vel ipsa pariatur dicta animi, voluptate cupiditate placeat incidunt accusantium officia voluptatum architecto amet, quaerat accusamus mollitia molestiae.
                        </p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="pic-4.png" alt="">
                    </div>



                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eveniet a nisi est nam earum exercitationem. Itaque praesentium deserunt quae.</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="pic-5.png" alt="">
                    </div>


                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum optio quos ipsum dicta nobis tempora, fugit minima quam. Architecto eum expedita sequi commodi itaque cumque voluptatibus autem voluptas repudiandae voluptate quasi soluta cupiditate corporis laudantium consequatur laborum ratione sunt ullam maiores, maxime ex mollitia aliquid. Velit maxime, amet doloribus minima natus, eveniet perspiciatis quas iste dolorum sunt repudiandae voluptates sint!</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="pic-6.png" alt="">
                    </div>
                </div>
            </div>
        </section>


    <!-- review ends -->



    <!-- footer starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Pacakage</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> comewithus@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> mumbai, india - 400104</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>

        <div class="credit">© All rights reserved</div>
    </section>


    <!-- footer ends -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
</body>
</html>