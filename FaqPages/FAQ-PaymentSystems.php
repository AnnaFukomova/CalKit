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
                        <h3 class="qestion-header less-text Bold-text">Payment Systems</h3>                  
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I let my clients check out through PayPal? 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Hover your mouse cursor over the Button widget and navigate to On click - Proceed to payment – PayPal. Next, go to Settings and enter your email, currency and purpose of payment.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I connect Yandex.Money? 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Hover your mouse cursor over the Button widget and navigate to On click - Proceed to payment. Select Yandex.Money and open the Settings section.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    How do I connect Yandex.Checkout? 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Hover your mouse cursor over the Button widget and navigate to One Click - Proceed to payment. Select Yandex.Checkout and open the Settings section. To accept payments, create a personal account on the Yandex.Checkout website, complete the connection application form, upload the required documents, and specify the method to connect the checkout to your website. Once your application is approved, copy the Shop ID along with the Sc ID in your Yandex.Checkout account and specify them in the CalKit's settings. Go to payment settings and click the Amount source option. Choose the result that will serve as a source for the payable amount.
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