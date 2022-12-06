<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank Management System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.html" class="logo"> <img src="https://i.ibb.co/N1HZk6F/logofinal.png" alt=""></a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a>
            <li><a href="#">Login</a>
            </li>
        </ul>
    </nav>

</header>



<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/image 1.png" alt="">
    </div>

    <div class="content">
        <h3>You Don’t Need To Be A Doctor To Save Lives.</h3>
        <p>Just Donate <span>Blood</span>.</p>
    </div>

</section>



<!-- about us section  -->

<section class="about" id="about">
    <div class="container">
        <div class="about-details">
            <div class="text-title">
                <h1>Online Blood Bank Management System</h1>
            </div>
            <div class="text">
                <div class="text-container">
                    <p>Blood banks indeed play an important role in the process of collecting blood as well as
                         other procedures such as managing blood stocks, approving blood requests, updating donations,
                          and updating available blood types. Blood banks typically manage their operations using a
                           manual system. They use a manual process to keep track of blood donors, recipients, blood
                            donation programs, and blood stocks. This manual management system is vulnerable to problems,
                             particularly in managing donor records, and it may be unsafe due to human errors and
                              disasters. It is also inconvenient for those in need of blood to manually search for and
                               match donors in an emergency.</p>
                </div>
            </div> <br>

            <div class="cards">
                <div class="card1">
                    <h1>Our Company</h1>
                    <p> We, the young inventors created a system which is Blood 
                                Management System that would help to address this problem and this system would serve as
                                 an online process for any blood transaction.</p>
                </div>
                <div class="card2">
                    <h1>Who we are?</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non suscipit quisquam beatae
                        consectetur laborum incidunt unde neque quos facilis sit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, nam veniam. Quis et eveniet 
                        sapiente eligendi aperiam laudantium. Adipisci, pariatur?</p>
                </div>
                <div class="card3">
                    <h1>What we value?</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non suscipit quisquam beatae
                        consectetur laborum incidunt unde neque quos facilis sit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, nam veniam. Quis et eveniet 
                        sapiente eligendi aperiam laudantium. Adipisci, pariatur?</p>
                </div>
              
            </div>
        </div>
        <div class="image-container">

        </div>
    </div>

</section>
<!-- Contact Us section -->


<section  id="contact" >
    <div class="for-image">
        
    </div>
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <h1>Contact Us</h1>

                <form id="contact-form" action="./contact.php" method="post" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname * </label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname * </label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *  </label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *  </label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> These fields are required. Contact form by MSM Developers.</p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>
</section>





<!-- footer section starts  -->

<footer class="footer">
    <div class="socmed">
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>

    </div>
    <div class="footer-text">
        <p>All Rights Reserved <span>@2002</span></p>
    </div>

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>