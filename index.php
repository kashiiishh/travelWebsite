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
        color: var(--black);
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
        color: var(--white);
        font-size: 1.9rem;
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


    .home-package .box-container .box:hover .image img{
        transform: scale(1.1);
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
        flex: 0 1 21rem;
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

    <!-- <div class="heading" style="background:url(header bg-1 1.png) no-repeat">
<h1>about us</h1></div> -->
        
    <!-- home starts -->

        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(home-1.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>travel around the world</h3>
                            <a href="pacakage.php" class="btn">discover more</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide" style="background:url(home-2.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>discover the new places</h3>
                            <a href="pacakage.php" class="btn">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(header3.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>make your world worthwhile</h3>
                            <a href="pacakage.php" class="btn">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>


    <!-- home ends -->
    <!-- services starts -->
        <div class="title"><h1 class="heading-title">Our services</h1></div>
        <section class="services">
            
            <div class="box-container">
                <div class="box"></div>
                <img src="icon-1 1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box-container">
                <div class="box"></div>
                <img src="icon2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box-container">
                <div class="box"></div>
                <img src="icon-3 1.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box-container">
                <div class="box"></div>
                <img src="icon-4 1.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box-container">
                <div class="box"></div>
                <img src="icon-5 1.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box-container">
                <div class="box"></div>
                <img src="icon-6 1.png" alt="">
                <h3>camping</h3>
            </div>
        </section>


    <!-- services ends -->
    <!-- home about starts -->
        <section class="home-about">
            <div class="image">
                <img src="about.jpeg" alt="">
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias odit sequi ipsam quo perferendis distinctio ipsa quidem dolorem quisquam maxime et recusandae exercitationem pariatur, aspernatur qui eaque nobis est sed?
                Inventore dolorem, nihil repudiandae blanditiis laboriosam fuga neque exercitationem et est voluptatem, modi repellendus illo itaque quod saepe officia! Officiis labore magni molestiae! Suscipit ex maxime mollitia? Amet, dignissimos vitae.</p>
                <a href="about.php" class="btn">read more</a>
            </div>
        </section>


    <!-- home about ends -->


    <!-- home packages starts -->

    <section class="home-package">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img-1.png" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsa possimus inventore sed 
                    </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="img-2 1.png" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsa possimus inventore sed 
                    </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="img-4 1.png" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsa possimus inventore sed 
                    </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <!-- home packages ends -->


    <!-- home offer starts -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere doloribus eos iste, nesciunt fuga ullam architecto aperiam pariatur adipisci similique! Temporibus sapiente facere ex reiciendis iusto accusantium neque quos ipsam.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <!-- home offer ends -->


<!-- about starts -->

    <!-- <section class="about">
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
    </section> -->


    <!-- about ends -->
    
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