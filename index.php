<?php
	include 'db1.php';
	$sql = "SELECT * FROM resume";
	$qry = mysqli_query($conn, $sql);
	$fetch = mysqli_fetch_array($qry)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Portfolio | Jeffrey Austria</title>
    <link rel="icon" href="/assets/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://kit.fontawesome.com/81ce3cf64a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class='navBar'>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar top-nav-collapse">
            <a class="navbar-brand font-weight-bold" href="#">
                <img id="navLogo" class="navbar-brand-c " src="assets/image/logo.png" alt="profilePic">
            </a>
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pg</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> -->


    <!-- About -->


    <div class="aboutt bg-light">
        <div class="about container-fluid pt-4">
            <div class="container text-center pt-4">
                <div class=" myprofile ">
                    <img class=" try" src="assets/image/myprofile.jpg" alt="myprofile">
                </div>
                <h1 class="pt-4 display-3 font-weight-bold">Hi, I'm Jeffrey. I...</h1>
                <h2 class="typing">
                    </h1>
                    <span data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="badge badge-pill badge-danger p-3 mt-3 px-5 text-white ">GET IN TOUCH</span>
                    <div class="icon p-4">
                        <a href="https://github.com/settings/profile"> <i class="fab fa-github-alt px-1"></i></a>
                        <a href="https://www.linkedin.com/in/jeffrey-austria-1072a5199/"> <i
                                class="fab fa-linkedin px-1"></i></a>
                    </div>
            </div>

        </div>
    </div>

    <!-- Experience -->
    <div class="experience pt-1">
        <div class="container-fluid bg-info">
            <div class="container bg-info">
                <h1 class="text-center pt-5 text-white display-4 font-weight-bold">Technology I used</h1>
            </div>
            <div class="container skills pb-4">
                <div class="row py-3">
                    <div class="col-md-4">
                        <div class="card bg-info">
                            <img class="scard-img-top img-fluid" src="assets/image/backend.png" alt="">
                            <div class="card-block">
                                <h3 class="card-title text-center text-white">Tools</h3>
                                <p class="text-center text-white">Sublime</p>
                                <p class="text-center text-white">Visual Studio</p>
                                <p class="text-center text-white">Git</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-info">
                            <img class="card-img-top img-fluid" src="assets/image/fronEnd2.png" alt="">
                            <div class="card-block">
                                <h3 class="card-title text-center text-white">Front End</h3>
                                <p class="text-center text-white">bootstrap</p>
                                <p class="text-center text-white">html(5)</p>
                                <p class="text-center text-white">css(3)</p>
                                <p class="text-center text-white">Javascript(3)</p>
                                <p class="text-center text-white">API | AJAX</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card bg-info">
                            <img class="card-img-top img-fluid" src="assets/image/backend.png" alt="">
                            <div class="card-block">
                                <h3 class="card-title text-center text-white">Back End</h3>
                                <p class="text-center text-white">Php</p>
                                <p class="text-center text-white">MySql</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- My Works -->
    <div class="container-fluid bg-light">
        <div class="container bg-light">
            <h1 class="text-center pt-5 display-4 font-weight-bold">Works</h1>
            <p class="text-center">Here are few of my former clients.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card cont">
                        <img src="assets/image/resort.png" id='imge' alt="" class="card-img-left img-fluid">
                        <div class="middle text-center">
                        <a href="https://ja-resort.netlify.app/index.html" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                            <!-- <a href="www.google.com"><button id="btnSrcCode" type="submit" name="try">SOURCE
                                    CODE</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h3 class="text-center">JA Resort</h3>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbspA JA Resort is a dummy company  showing the establishment, rooms, amenities, such as the in-house store, pools. Provided the contact forms and location of the resort</p>
                    <p>-This is a self taught project.</p>
                    
                    <div class="text-center">
                    <a href="https://ja-resort.netlify.app/index.html" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                        <!-- <a href="#">
                            <span class="btn badge badge-pill badge-success p-3 mt-2 px-4">SOURCE
                                CODE</span>

                        </a> -->
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6 ">
                    <div class="card cont">
                        <img src="assets/image/explorer.png" id='imge' alt="" class="card-img-left img-fluid">
                        <div class="middle text-center">
                        <a href="https://ja-explorer.netlify.app" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                            <!-- <a href="www.google.com"><button id="btnSrcCode" type="submit" name="try">SOURCE
                                    CODE</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h3 class="text-center ">Explorer</h3>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbspThe Explorer is a static website that shows the most beautiful place from different countries</p>
                    <p>-This is self taught project</p>
                    <div class="text-center">
                        <a href="https://ja-explorer.netlify.app" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                        <!-- <a href="#">
                            <span class="btn badge badge-pill badge-success p-3 mt-2 px-4">SOURCE
                                CODE</span>

                        </a> -->
                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="col-md-6 ">
                    <div class="card cont">
                        <img src="assets/image/gameasia.png" id='imge' alt="" class="card-img-left img-fluid">
                        <div class="middle text-center">
                        <a href="https://gameasia.netlify.app" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                            <!-- <a href="www.google.com"><button id="btnSrcCode" type="submit" name="try">SOURCE
                                    CODE</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h3 class="text-center ">Game Asia</h3>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbspGame Asia is a dummy company that renting a gaming machine to their clients. They offer a world class facilities and high end equipment for game entertainment.
                    </p>
                    <p>- This is a self taught project.</p>
                    <div class="text-center">
                        <a href="https://gameasia.netlify.app" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                        <!-- <a href="#">
                            <span class="btn badge badge-pill badge-success p-3 mt-2 px-4">SOURCE
                                CODE</span>

                        </a> -->
                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="col-md-6 ">
                    <div class="card cont">
                        <img src="assets/image/portfolio.png" id='imge' alt="" class="card-img-left img-fluid">
                        <div class="middle text-center">
                        <a href="http://jeffreyaustria.000webhostapp.com" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                            <!-- <a href="www.google.com"><button id="btnSrcCode" type="submit" name="try">SOURCE
                                    CODE</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h3 class="text-center ">My Online Portfolio</h3>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbspI created this website to showcase my skills in Web Development. Before i created this I construct first a prototype of my project using figma and compressed all the image that I used for better user experience
                    </p>
                    <p>- This is a self taught project.</p>
                    <div class="text-center">
                        <a href="http://jeffreyaustria.000webhostapp.com" target="_blank"><span class="btn badge badge-pill badge-danger p-3 mt-2 px-4">LIVE VIEW</span>
                        </a>
                        <!-- <a href="#">
                            <span class="btn badge badge-pill badge-success p-3 mt-2 px-4">SOURCE
                                CODE</span>

                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- all modals -->
    <div class="modal fade bd-example-modal-lg md-12 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/image/lessonplan.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/image/guidance.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/image/clearanceSystem.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- achievments -->
    <div class="container-fluid pt-3 mt-5" style="background-color:#e3e3e3">
        <div class="container">
            <h2 class="display-4 text-center text-Muted font-weight-bold">About me</h2>
            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am a graduate of bachelors degree in
                Information
                Technology at Nueva Ecija
                University of Science and Technology. I take bootcamp training that help me enhance my developing
                skills. I specialized my skills
                on Front End and UI-UX Design and already developed projects in this website. I like creating something
                new and discovering things that will expand my capacity to learn, thats why i do spend my time in
                researching, practicing and developing. Above are some of the technologies i currently used in
                developing. </p>
        </div>
        <div class="container py-3">
            <h2 class="display-4 text-center text-Muted font-weight-bold">Services</h2>
            <div>
                <nav class="nav nav-pills nav-fill justify-content-center flex-md-row flex-column">
                    <a class="nav-link active text-center" href="#frontend" data-toggle="tab">
                        Front End</a>
                    <a class="nav-link text-center" href="#responsive" data-toggle="tab">Responsive Web Design</a>
                    <a class="nav-link text-center" href="#backend" data-toggle="tab">Backend</a>
                </nav>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="frontend">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md text-center">
                                <img class=" card-img-top img-fluid" src="assets/image/frontend.jpg" alt=""
                                    style="width:23rem">
                            </div>
                            <div class="col-md align-items-center">
                                <h1 class="text-center">Front End Development</h1>
                                <p class="text-justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can build a dynamic
                                    website designs, creates
                                    an
                                    interaction and user
                                    experience. I can convert the design concept into a usable codes - HTML, CSS and
                                    javascript and other frameworks of CSS and js.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="responsive">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md text-center">
                                <img class=" card-img-top img-fluid" src="assets/image/responsiveser.png" alt=""
                                    style="width:23rem">
                            </div>
                            <div class="col-md align-items-center">
                                <h1 class="text-center">Responsive Web Design</h1>
                                <p class="text-justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I make every project
                                    responsive and mobile friendly to the users. Making layouts will automatically
                                    adjust and adapt to any device screen size.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="backend">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md text-center">
                                <img class=" card-img-top img-fluid" src="assets/image/backendser.jpg" alt=""
                                    style="width:23rem">
                            </div>
                            <div class="col-md align-items-center">
                                <h1 class="text-center">Backend Server</h1>
                                <p class="text-justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can also program for the
                                    backend of a website Using PHP computer language and MySql for the database</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <div class=" container-fluid py-5" style="background-color: rgba(255, 103, 68, 0.91);">
        <div class="container text-center py-5 text-white">
            <h1 class="display-3">Wanna work with me?</h1>

            <p class="py-3">I'm currently available for work</p>
            <span data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                class="btns badge badge-pill badge-danger p-3 mt-2 px-4 font-weight-bold "
                style="color:rgba(255, 103, 68, 0.91)">START
                NOW</span>
        </div>
    </div>

    <!-- modal -->

    <div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-center" id="exampleModalLabel">Message</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form method = "POST" action = "">
                    <?php include 'sendmessage.php';?>
                        <div class="form-group">
                       
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name = "fname" id="recipient-name" placeholder = "Enter Your Fullname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name = "email" id="recipient-name" placeholder = "Email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name ="mess" id="message-text" placeholder = "Write Message here......"></textarea>
                        </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name = "btnsend" class="btn btn-danger">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container text-center py-2 mt-3">
            <img id="logo" class="navbar-brand-c " src="assets/image/logo.png" alt="profilePic">
            <h5 id="copyright " class="text-center text-secondary mt-3">Copyright &copy; 2020 | Jeffrey Austria</h5>
        </div>
    </div>






    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="assets/scripts/app.js"></script>
</body>

</html>