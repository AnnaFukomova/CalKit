<?php 
    require_once 'templates/header/head.php';
    require_once 'templates/header/header-dark.php';
?>
        <div class="mask">
            <div class="loader-wrap">
                <div class="loader"></div>
            </div>
        </div>

        <section>
            <div class="section-fon">
                <header class="header-min">
                    <div class="flex header-container__min">
                        <div class="flex header-container-min__link"> 
                            <img class="link-arrow" src="../FaqPages/img/arrow-light.svg" loading="lazy" alt="arrow"><a class="header-link light-text" href="../index.php">Back to CalKit</a>
                        </div>
                    </div>
                </header>

                <div class="container">
                    <h1 class="main-heading ExtraBold-bigText__header light-text">CalKit Knowledge Base</h1>
                </div>    
            </div>
            
            <section class="section-informationMaterials">
                <div class="section-container flex">
                    <aside class="informate-aside">
                        <h3 class="information-heading Bold-text less-text">Categories</h3>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Pricing.html">Pricing</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Formulas.html">Formulas</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Interface.html">Interface</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Widgets.html">Widgets</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Publication.html">Publication</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-PaymentSystems.html">Payment Systems</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-Integrations.html">Integrations</a>
                        <a class="information-link simple-text Normal-text" href="../FaqPages/FAQ-General.html">General</a>
                    </aside>

                    <dl class="qestion">   
                        <h3 class="qestion-header less-text Bold-text">General</h3>                  
                        
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I connect statistics?
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    How do I connect statistics? In the settings, select the Statistics option. ... Authorize access to your account. If you already have an account, the connection will be automated and you will be taken to the statistics management page.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                   How do I delete my project? 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Log in to your personal account an open the page with the list of your projects. Open the menu of the project you would like to delete and go to settings. In the setting window click the Delete project button
                                </dd>
                            </div>
                        </div>
                        
                         <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I create my project's copy?
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Log in to your account and open the page with the list of your projects. Open the menu and click Duplicate.
                                </dd>
                            </div>
                        </div>
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I transfer my project to another account? 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Contact the Support Team in the account settings or write us here.
                                </dd>
                            </div>
                        </div>
                        
                       
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    "An unexpected error occurred" message
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    <p style="padding-bottom: 20px;">If Calkit returns the "An unexpected error has occurred" message, this means we are working on debugging and improving the system.</p>

                                    <p style="padding-bottom: 20px;">Contact our Support Team to let us know you've run into this error and provide details on the device you're using, operating system, browser, and its version.</p>

                                    <p style="padding-bottom: 20px;">We will apprecite if you forward us a screenshot of the error with the open browser's console (in most browsers you can open it with the Ctrl + Shift + I command (1), and then navigate to the Console tab.</p>
                                </dd>
                            </div>
                        </div>

                    </dl>
                </div> 
            </section>
        </section>    

    <script  src="../js/show-text.js"></script>
    <!-- footer -->
    <?php
        require_once 'templates/footer.php';
    ?>