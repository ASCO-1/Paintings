<!DOCTYPE HTML>
<html>

    <head>

        <title>ASCO Paintings</title>

        <!--css-->
        <link rel="stylesheet" href="Resources/css/homePage.css">

        <!--media queries-->
        <link rel="stylesheet" href="Resources/css/MediaQueries/homePageMQ.css">

    </head>

    <body>

        <!-- including logo and navigation bar-->
        <?php include 'Views/titleAndNavBar.php' ?> 
            
        <!--home page content start-->

        <!--carousel-->
        <!-- <div class="carousel slide" data-ride="carousel" id="carouselMain">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="Resources/images/IndexCarouselFirst.png" alt="Slide1">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="Resources/images/Fish2.jpg" alt="Slide2">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="Resources/images/bird2.jpeg" alt="Slide3">
                </div>
            </div>
        </div> -->

        <!--about Us section-->
        <div class="container-fluid" id="containerAboutUs">

            <h1 class = "sectionHeadings">About Us</h1>
            <div class="container-fluid" id="containerAboutUsSecondary">

                <!--about us text-->
                <div class="container-fluid" id="containerAboutUsText">

                    <p>
                        ASCO paintings is managed by two friends who aim to deliver the best paintings to clients all over Australia.
                        The paintings arre drawn wih various mediums including pen and pencil, watercolours and charcoal.
                        No matter what the medium is or no matter what the painting is about we at ASCO try to stand by our slogan of 
                        "The definition of Art" so that we could provide the best to our clients.
                    </p>
                    
                </div>

                <!--about us carousel-->

                    <div class="carousel slide" data-ride="carousel" id="carouselAboutUs">
                        <div class="carousel-inner" id="carouselAboutUsInner">

                            <div class="carousel-item active CarouselAboutUsImgDivs">
                                <img class="d-block " src="ActualPaintings/Fish1.jpg" alt="Slide1">
                            </div>

                            <div class="carousel-item CarouselAboutUsImgDivs" >
                                <img class="d-block" src="ActualPaintings/Girl5.jpg" alt="Slide2">
                            </div>

                            <div class="carousel-item CarouselAboutUsImgDivs">
                                <img class="d-block" src="ActualPaintings/Bird1.jpg" alt="Slide3">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        

        <!--categories section-->
        <div class="container-fluid" id="containerCategoriesSection">

            <h1 class = "sectionHeadings">Categories</h2>

            <div class="container" id="containerCategories">

                <div class="card-deck" id="cardDeckCategories">

                    <!--charcoal paintings card-->
                    <div class="card cardCategories">

                        <img class="card-img-top imgCardCategories" src="ActualPaintings/Girl1.jpg" alt="category1">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Charcoal</h3>
                            <p>dd</p>
                        </div>

                    </div>

                    <!--Watercolours paintings card-->
                    <div class="card cardCategories">
                        
                        <img class="card-img-top imgCardCategories" src="" alt="category2">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Watercolours</h3>
                            <p>dd</p>
                        </div>

                    </div>

                    <!--Pen and pencil paintings card-->
                    <div class="card cardCategories">
                        
                        <img class="card-img-top imgCardCategories" src="" alt="category3">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Pen or pencil</h3>
                            <p>dd</p>
                        </div>

                    </div>

                </div>

            </div>


        </div>

        <!--Paintings section-->
        <div class="container-fluid" id="containerPaintingsSection">

            <h1 class = "sectionHeadings">Paintings</h1>

            
        </div>

        <!--Contact Us section-->
        <div class="container-fluid" id="containerContactUsSection">

            <h1 class = "sectionHeadings">Contact Us</h1>
            
        </div>

        <!--home page content end-->

        <!-- including the footer-->
        <?php include 'Views/footer.php' ?>
        
    </body>


</html>