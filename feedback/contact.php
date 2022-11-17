<?php
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $today = date("F j, Y, g:i a");

    $file = $_SERVER['DOCUMENT_ROOT'] . '/dataBase/leads.csv';
    $tofile = "$name; $email; $message; $today\n";
    $bom = "\xEF\xBB\xBF";

    @file_put_contents($file, $bom . $tofile . file_get_contents($file));
    ?>
     <script type="text/javascript">
        window.location = "https://calkit.space/index.html";
    </script>
    <?php
}
    
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="../include/img/logo.svg">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <meta name="description" content="Calculators & Forms To Make Your Business Thrive! Get in touch with us." />

        <!-- fonts CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- style CSS -->
        <link rel="stylesheet" href="../include/reset.css">
        <link rel="stylesheet" href="../css/loader.css">
        <link rel="stylesheet" href="../PricingPlans/css/section.css">
        <link rel="stylesheet" href="../Feedback/css/section.css">
        <link rel="stylesheet" href="../include/header/header.css">
        <link rel="stylesheet" href="../include/footer/footer.css">
        
        <link rel="stylesheet" href=".././include/scroll/scrolTop.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <title>CalKit-Feedback Form</title>
    </head>
    <body>
        <div class="mask">
            <div class="loader-wrap">
                <div class="loader"></div>
            </div>
        </div>

        <div class="form-wrap__fon back-transform">
            <header>
                <div class="header-container space-between__property">
                    <a href="../index.html"><img class="" src="../include/header/img/1-logo_light.svg" loading="lazy" alt="Logo"></a>
                    <menu class="nav-container flex">
                        <li><a class="header-link" href="../index.html">Home</a></li>     
                        <li><a class="header-link" href="../PricingPlans/price.html">Price</a></li>     
                        <li><a class="header-link" href="../AffiliateProgram/affiliateProgram.html">Affiliate Program</a></li>
                        <li><a class="header-link" href="../FaqMain/faq.html">Knowledge Base</a></li>
                        <li><a class="header-link" href="../Feedback/contact.php">Feedback</a></li>
                    </menu>
                </div>
            </header>
            <div class="container">
                <div class="feedback-wrap">  
                    <form id="contact" action="" method="post">
                        <div class="feedback-header__container сentral-text">
                            <h3>Let's get started!</h3>
                            <p class="feedback-text">Contact us to create your own calculator!</p>
                        </div>
                        <input class="form-element" type="text" id="name" name="name" placeholder="Your name" maxlength="40" required>
                        <input class="form-element" type="email" id="email" name="email" placeholder="Your email" maxlength="40" required>
                        <textarea  class="form-element" id="message" name="message" placeholder="Enter your message..." maxlength="500" required></textarea>
                        <p class="feedback-text сentral-text">PleaseBy signing up, you acknowledge that you have read and agree to the 
                        <a class="feedback-link" href="../LisenseAgreement/LisenseAgreement.html">Lisense Agreement</a> and <a class="feedback-link" href="../PrivacyPolicy/privacyPolicy.html">Privacy Policy</a>.</p>
                        <button type="submit" id="contact-submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>   
        
        <!-- Вопросы и ответы -->
        <section class="container"> 
            <div class="section-guestions">
                <h2 class="questions-heading thicker-text text-color__bark">Questions & Answers</h2> 

                <div class="pricing-container flex">
                    <div class="pricing-component">
                        <h3 class="question Semiless-text SemiBold-title text-color__bark"> How can I pay?</h3>
                        <p class="answer simple-text black-text">Pay with VISA or MasterCard bank cards, or use PayPal. A wire transfer is also possible. Contact our Support Team for more details.</p>
                        
                        <h3 class="question Semiless-text SemiBold-title text-color__bark">How many plans does CALKit offer?</h3>
                        <p class="answer simple-text black-text">There are 4 plans: Basic, Standard, Premium and Pro. We also offer a 14-day trial period that gives you access to all opportunities of the Basic Plan.</p>

                        <h3 class="question Semiless-text SemiBold-title text-color__bark">Is there an affiliate program?</h3>
                        <p class="answer simple-text black-text">Yes, we offer an affiliate program that will let you earn by attracting new users. To learn more, visit the program's page.</p>
                    </div>    

                    <div class="pricing-component">
                        <h3 class="question Semiless-text SemiBold-title text-color__bark">Do I get a discount when subscribing for several months or a year at once?</h3>
                        <p class="answer simple-text black-text">Yes. The longer the subscription period, the greater your discount.</p> 

                        <h3 class="question Semiless-text SemiBold-title text-color__bark">What happens after the trial expires?</h3>
                        <p class="answer simple-text black-text">The basic features will remain and you will be able to use the service absolutely free, with the exception of premium features (pictures, statistics, payment collection, SMS and links).</p>

                        <h3 class="question Semiless-text SemiBold-title text-color__bark">I still have some questions</h3>
                        <p class="answer simple-text black-text">Contact our Support Team, we will be glad to answer any questions you might have!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-top content-center">
                <a href="../index.html"><img src="../include/footer/img/logo-footer__bark.svg" loading="lazy" alt="logo"></a>
                <div class="footer-top_container space-between__property">
                    <a class="footer-top_link black-text simple-text" href="../LisenseAgreement/LisenseAgreement.html">Agreement</a> 
                    <a class="footer-top_link black-text simple-text" href="../PricingPlans/price.html">Pricing</a>
                    <a class="footer-top_link black-text simple-text" href="../Feedback/contact.php">Feedback</a>  
                    <a class="footer-top_link black-text simple-text" href="../FaqMain/faq.html">Knowledge Base</a> 
                    <a class="footer-top_link black-text simple-text" href="../AffiliateProgram/AffiliateProgram.html">Affiliate Program</a> 
                    <a class="footer-top_link black-text simple-text" href="../PrivacyPolicy/privacyPolicy.html">Privacy Policy</a></a> 
                </div>
            </div>
            <p class="footer-lower_copyright">©2021 CALKit. All rights reserved.</p> 
        </div> 
    </footer>
    
    <a href="#" id="scroll_top" title="Upstairs"></a>

    
    <script  src="../js/scroll.js"></script>
    <script src='https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js'></script>
    
    <script  src="../js/loader.js"></script>

    <!-- <script src="https://kit.fontawesome.com/ed9e32c3a4.js" crossorigin="anonymous"></script> -->

  </body>
</html>
   
