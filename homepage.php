<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health & Nutrition Dairy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">
</head>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Health and Nuitration Dairy</label>

        <ul>
            <li><a class="active"  href="homepage.php">Home</a></li> 
             <li><a class="active"   href="index.php">Live chat</a></li>
            <li><a class="active"  href="upload.php">Emergency</a></li>
            <li><a class="active"   href="registration.php">Appoinment</a></li>
            <li><a class="active"                 href="fit.html">Daily Care </a></li>
            
        </ul>
    </nav>

    <div class="container">
        <div class="slider">
            <div class="slide slide1">
                <div class="caption">
                    <h2>Medical World </h2>
                    <p>For your GP practice, surgery, hospital, clinic and ophthalmic practice. A wide choice of money saving pharmaceuticals, practice consumables, GP and hospital equipment and furniture – Medical World</p>
                </div>
            
            </div>

            <div class="slide slide2">
                <div class="caption">
                    <h2>Nutration Table</h2>
                    <p>A dietary term signifying a diet that provides all nutrients, fiber, and energy in amounts sufficient to maintaining good health and body weight. A balanced diet supplies various types of foods in proportion to one another. With balance, foods rich in one nutrient leave room for foods that are rich in other nutrients.</p>
                </div>
            
            </div>

            <div class="slide slide3">
                <div class="caption">
                    <h2>24 Hours Docotor</h2>
                    <p>Our experienced physicians have been providing quality medical advice to those in need since 2014. Your Doctors Online is the passion project of our founders to bring affordable healthcare to all of the corners of the world. We believe that everyone in the world should have the ability to connect with an experienced doctor.</p>
                </div>
            
            </div>

            <div class="slide slide4">
                <div class="caption">
                    <h2>Cancer New Treatment</h2>
                    <p>Any cancer treatment can be used as a primary treatment, but the most common primary cancer treatment for the most common types of cancer is surgery. If your cancer is particularly sensitive to radiation therapy or chemotherapy, you may receive one of those therapies as your primary treatment. If you decide that you don't want more cancer treatment, then it's time to focus on a kind of palliative care called hospice care. Hospice care improves your quality of life. Care near the end of life is called hospice care.</p>
                </div>
            
            </div>

            <div class="slide slide5">
                <div class="caption">
                    <h2>Corona Vexin</h2>
                    <p>For most organizations, COVID-19 has been a literal transformative agent. Our organizations have almost overnight gone from environments
                     where teleworking was an exception, to where it's the norm.</p>
                </div>
            
            </div>

        </div>

    </div>



<!--


    <div class="head">
        <h1 style="text-align: center; margin-top:05%;">IT News</h1>

    </div>

    <div class="wrapper">
        <div class="cards_wrap">
            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="4.jpg" alt="card image" " >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                            Technology
                        </div>
                        <div class="card_info">
                            <p class="title">
                            SMB Cybersecurity Safety  
                            </p>
                            <p>The stampede from offices to working from... <a href="content_templete1.php">Read more..</a> </p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>
            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="5.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                            Security
                        </div>
                        <div class="card_info">
                            <p class="title">
                              Protect Mobile Apps  
                            </p>
                            <p>Automated purchasing bots, known as "sneaker bots, <a href="content_templete2.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="6.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                            Computer Science
                        </div>
                        <div class="card_info">
                            <p class="title">
                              Quantum Computing  
                            </p>
                            <p>Physicists from MIPT and the Russian Quantum... <a href="content_templete3.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="7.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                        Computer Science
                        </div>
                        <div class="card_info">
                            <p class="title">
                            It Predicts Your Thoughts 
                            </p>
                            <p>By monitoring brain function, computers can be... <a href="content_templete4.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="8.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                            Gadgets
                        </div>
                        <div class="card_info">
                            <p class="title">
                            Apple's AR Glasses Be Ready  
                            </p>
                            <p>Apple may launch an augmented reality... <a href="content_templete5.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="9.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                        Gadgets
                        </div>
                        <div class="card_info">
                            <p class="title">
                            World’s Largest Digital Camera  
                            </p>
                            <p>The camera will explore cosmic mysteries... <a href="content_templete6.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="10.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                            Computer Science
                        </div>
                        <div class="card_info">
                            <p class="title">
                            Software Piracy Spreading   
                            </p>
                            <p>The pandemic caused by COVID-19... <a href="content_templete7.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

            <div class="card_item">
                <div class="card_inner">
                   <div class="card_top">
                       <img src="11.jpg" alt="card image" >
                   </div>
                   <div class="card_bottom">
                        <div class="card_category">
                        IT Business
                        </div>
                        <div class="card_info">
                            <p class="title">
                            Macs Move to Apple Silicon  
                            </p>
                            <p class="pu">Apple's 2020 Worldwide Developers Conference..  <a href="content_templete8.php">Read more..</a></p>
                        </div>
                        <div class="card_creator">
                            by Alex kato
                        </div>
                   </div> 


                </div>

            </div>

        </div>

    </div>






    <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="page2.php" >2</a>
  
  
  <a href="#">&raquo;</a>
</div>

-->

<div class="footer">
    <div class="inner-footer">

        <div class="footer-items">
            <h1>New Invented</h1>
            <p>Content itself is what the user derives value from....</p>

        </div>

        <div class="footer-items">
            <h1>Quick Links</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Upload</li></a>
                    <a href=""><li>Search</li></a>
                    <a href=""><li>Registration</li></a>
                </ul>

        </div>
        <div class="footer-items">
            <h1>Tutorials</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>Madical Information</li></a>
                    <a href=""><li>Embulance</li></a>
                    <a href=""><li>Technology</li></a>
                    <a href=""><li>Madicen Delivery</li></a>
                </ul>

        </div>

        <div class="footer-items">
            <h1>Contact Us</h1>
            <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>15/2, Dhanmondi, Dhaka-1207</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+8801627162691</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>support@dairy.com</li>
                </ul>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>

        </div>
    </div>
    <div class="w3-container w3-teal" style="border: 1px solid black;background-color: #9932CC ">
  <footer style="width:100%; text-align: center;">
    <p>&copy; 2021 Health And Nurtation Dairy</p>
    <a href=" "> 24 hours service</a>
  </footer>


    </div>

</div>
    
</body>
</html>
