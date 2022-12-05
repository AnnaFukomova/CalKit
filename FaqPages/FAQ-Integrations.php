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
                        <h3 class="qestion-header less-text Bold-text">Integrations</h3>                  
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Adding the calculator to the page
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Go to managing your Webflow site. Click on the Add Elements button and drag the Embed widget to the desired place. Paste the calculator code you copied before and click Save. Your calculator is ready!
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Webflow - Getting the code
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Log in to your CalKit account and open the page with the list of projects. Click on the menu and select Get code. A window with HTML code will appear. Copy the code from it. 
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    OpenCart - Getting the code
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Log in to your CalKit account and go to the page with the list of your projects. Open the menu and click on the Get code button. The window with the embed HTML code will appear. 
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Adding the calculator to your page
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Proceed to managing your Tilda website. Choose a page and a desired place on it. Click on the + icon to add a new block. Choose Other > HTML code. Click on the Content button next to the new block. Add the calculator embed code you've copied before and close the block editor.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Tilda - Getting the code
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Log in to your CalKit account and go to the page with the list of your projects. Open the menu and click on the Get code button. The window with the embed HTML code will appear.
                                </dd>
                            </div>
                        </div>


                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    WordPress – Installing the plugin 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    In the WordPress control panel, go to the Plugins tab and search. Install and activate the plugin. Once the files are extracted and the plugin is installed, click on the Activate the plugin button.
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