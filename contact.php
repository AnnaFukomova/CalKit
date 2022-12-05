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
        window.location = "https://calkit.space/index.php";
    </script>
    <?php
}
        require_once 'templates/header/head.php';
  
?>
        <div class="mask">
            <div class="loader-wrap">
                <div class="loader"></div>
            </div>
        </div>

        <div class="form-wrap__fon headSpace back-transform">
             
            <?php
                require_once 'templates/header/header-dark.php';
            ?>

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
    <?php
    require_once 'templates/footer.php';
    ?>
   
