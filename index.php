<!DOCTYPE HTML>
<html>

    <head>

        <title>ASCO Paintings</title>

        <!--css-->
        <link rel="stylesheet" href="Resources/css/homePage.css">
        <link rel="stylesheet" href="Resources/css/lightslider.css">
        
        <!--media queries-->
        <link rel="stylesheet" href="Resources/css/MediaQueries/homePageMQ.css">

        <!--js files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="Resources/javascript/lightslider.js"></script>
        <script type="text/javascript" src="Resources/javascript/indexPage.js"></script>




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
                        ASCO paintings aim to deliver the best paintings to clients all over Australia.
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

                        <img class="card-img-top imgCardCategories" src="Resources/images/Charcoal.jpg" alt="Charcoal Image by TheDigitalWay from Pixabay">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Charcoal</h3>
                            <p>Charcoal paintings are drawn with charcoal and are therefore suitable for someone
                                who loves a drawing in black colour.
                            </p>
                        </div>

                    </div>

                    <!--Pen paintings card-->
                    <div class="card cardCategories">
                        
                        <img class="card-img-top imgCardCategories" src="Resources/images/Pens.jpg" alt="Pen Image from Pixabay">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Pen</h3>
                            <p>Painters use red, black, blue and gel pens to come up with
                                beautiful drawings that would captivate viewers.
                            </p>
                        </div>

                    </div>

                    <!--Pencil paintings card-->
                    <div class="card cardCategories">
                        
                        <img class="card-img-top imgCardCategories" src="Resources/images/ColourPencils.jpg" alt="Pencil Image from Pixabay">
                        <div class="card-body bodyCardCategories">
                            <h3 class="card-title">Pencils</h3>
                            <p>Both grey lead pencils and different colour pencils are used
                                to deliver breathtaking paintings
                            </p>
                        </div>

                    </div>

                </div>

            </div>


        </div>

        <!--Paintings section start-->
        <div class="container-fluid" id="containerPaintingsSection">

            <h1 class = "sectionHeadings">Paintings</h1>


            <div class="container-fluid" id="containerFluidPaintingsButtons">

            
                <div class="btn-group btn-group-toggle" data-toggle="buttons" id="paintingsCategoryButtons">
                    <label class="btn btn-dark active" id="PaintingsOptionsCharcoalLabel">
                        <input type="radio" name="PaintingsOptionsCharcoal" id="PaintingsOptionsCharcoal"> Chacoal
                    </label>
                    <label class="btn btn-dark" id="PaintingsOptionsPenLabel">
                        <input type="radio" name="PaintingsOptionsPen" id="PaintingsOptionsPen" > Pen
                    </label>
                    <label class="btn btn-dark" id="PaintingsOptionsPencilsLabel">
                        <input type="radio" name="PaintingsOptionsPencils" id="PaintingsOptionsPencils"> Pencils
                    </label>
                </div>

            </div>

            <div class="container-fluid" id="paintingsCategoryDiv">

                <!--charcoal paintings start-->
                <div class= "container-fluid" id="paintingsCharcoalSection">

                    <div class= "container-fluid " id="paintingsCharcoalSectionInner">

                        <ul id="charcoalPaintingsSlider" class="cs-hidden">

                            <li class="item-a">
                                <div class="paintingsCard card">
                                    <img class="paintingsCardImage card-img-top" src="ActualPaintings/Girl1.jpg" alt="Card image cap"/>
                                    <div class="paintingsCardbody card-body">
                                        <div class="paintingsBodyInner">
                                            <h5 class="paintingsCardTitle card-title">Girl</h5>
                                            <p class="paintingsCardText card-text">
                                                Charcoal drawing of a girl with long hair<br>
                                                Price: AU$200
                                            </p>
                                            <a href="#" class="btn btn-primary orderNowBtn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
 
                            <li class="item-a">
                                <div class="paintingsCard card">
                                    <img class="paintingsCardImage card-img-top" src="ActualPaintings/Girl1.jpg" alt="Card image cap">
                                    <div class="paintingsCardbody card-body">

                                        <div class="paintingsBodyInner">
                                            <h5 class="paintingsCardTitle card-title">Girl</h5>
                                            <p class="paintingsCardText card-text">
                                                Charcoal drawing of a girl with long hair<br>
                                                Price: AU$200
                                            </p>
                                            <a href="#" class="btn btn-primary orderNowBtn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="item-a">
                                <div class="paintingsCard card">
                                    <img class="paintingsCardImage card-img-top" src="ActualPaintings/Girl1.jpg" alt="Card image cap">
                                    <div class="paintingsCardbody card-body">

                                        <div class="paintingsBodyInner">
                                            <h5 class="paintingsCardTitle card-title">Girl</h5>
                                            <p class="paintingsCardText card-text">
                                                Charcoal drawing of a girl with long hair<br>
                                                Price: AU$200
                                            </p>
                                            <a href="#" class="btn btn-primary orderNowBtn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="item-a">
                                <div class="paintingsCard card">
                                    <img class="paintingsCardImage card-img-top" src="ActualPaintings/Girl1.jpg" alt="Card image cap">
                                    <div class="paintingsCardbody card-body">

                                        <div class="paintingsBodyInner">
                                            <h5 class="paintingsCardTitle card-title">Girl</h5>
                                            <p class="paintingsCardText card-text">
                                                Charcoal drawing of a girl with long hair<br>
                                                Price: AU$200
                                            </p>
                                            <a href="#" class="btn btn-primary orderNowBtn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="item-a">
                                <div class="paintingsCard card">
                                    <img class="paintingsCardImage card-img-top" src="ActualPaintings/Girl1.jpg" alt="Card image cap">
                                    <div class="paintingsCardbody card-body">

                                        <div class="paintingsBodyInner">
                                            <h5 class="paintingsCardTitle card-title">Girl</h5>
                                            <p class="paintingsCardText card-text">
                                                Charcoal drawing of a girl with long hair<br>
                                                Price: AU$200
                                            </p>
                                            <a href="#" class="btn btn-primary orderNowBtn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
        
                </div>
                <!--charcoal paintings end-->

                <!--pen paintings start-->
                <div class= "container-fluid" id="paintingsPenSection">
                    
                </div>
                <!--pen paintings end-->

                <!--pencil paintings start-->
                <div class= "container-fluid" id="paintingsPencilsSection">
                    
                </div>
                <!--pen paintings end-->
            </div>
        </div>
        <!--paintings section end-->

        <!--Contact Us section-->
        <div class="container-fluid" id="containerContactUsSection">

            <h1 class = "sectionHeadings">Contact Us</h1>

            <!--form and email card container-->
            <div class = "container-fluid" id="containerFormAndEmail">

                <!--form container-->
                <div class="container-fluid" id="formContainer">

                    <!--contact us form start-->
                    <form id = "formContactUs">

                        <!--first row - First Name and Last Name-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstNameOfContactUs">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="firstNameOfContactUs">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastNameOfContactUs">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="lastNameOfContactUs">
                            </div>
                        </div>


                        <!--Second row - Email and phone number-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="emailofContactUs">Email</label>
                                <input type="text" class="form-control" placeholder="Email" id="emailofContactUs">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phoneNumberOfContactUs">Last Name</label>
                                <input type="text" class="form-control" placeholder="Phone Number" id="phoneNumberOfContactUs">
                            </div>
                        </div>

                        <!--Third row - Reason for contacting-->
                        <div class="form-row">
                           <div class="col-md-12">

                                <label for="reasonForContactingOfContactUs">Reason for contacting us</label>
                                <select class="custom-select" placeholder="Reason for contacting" id="reasonForContactingOfContactUs">

                                    <option selected>Reason for Contacting</option>
                                    <option value="purchaseReasonContactUs">Purchase related</option>
                                    <option value="aboutUsReasonContactUs">Company related</option>
                                    <option value="deliveryReasonContactUs">Delivery related</option>
                                    <option value="compalainReasonContactUs">Complains</option>
                                    <option value="otherReasonContactUs">Other</option>
                                </select>


                           </div>

                        </div>
                           
                       

                        <!--Fourth row - Reason for contacting-->
                        <div class="form-row">

                            <div class="col-md-12">

                                <label for="messageOfContactUs">Message</label>
                                <textarea class="form-control" id="messageOfContactUs"></textarea>

                            </div>

                        </div>

                        <button class="btn btn-primary" type="submit" id="buttonSubmitOfContactUs">Submit</button>

                    </form>
                    <!--contact us form end-->

                </div>

                <!--email container-->
                <div class="container-fluid" id="emailContainer">

                    <div class="card cardEmail">

                        <img class="card-img-top imgCardEmail" src="Resources/images/Mail.jpg" alt="Email image by Erica Steeves">
                            <div class="card-body bodyCardEmail">
                                <h3 class="card-title">Email</h3>
                                <p> 
                                    Email us on rajinthacorera@gmail.com for any queries
                                </p>
                            </div>

                    </div>

                </div>

            </div>

            
        </div>

        <!--home page content end-->

        <!-- including the footer-->
        <?php include 'Views/footer.php' ?>
        
    </body>


</html>

