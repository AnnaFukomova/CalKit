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
                        <h3 class="qestion-header less-text Bold-text">Interface</h3>                  
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Changing font size and color
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Highlight the text you'd like to change . A panel with editing options will appear next to it : Alignment is applied to the whole paragraph, while the size, color and formatting settings are used for the highlighted text.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Changing units of measurement (currency, meters, grams, etc)
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Go to the Design tab  and edit the result's unit of measurement.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Resizing your calculator
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    To change your calculator's size (width), use the handles located at several points on the border of the calculator.
                                </dd>
                            </div>
                        </div>
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Changing background colors
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Go to the Design tab and select the first option. A background editor window will appear. Use the color picker to find the color you want. Alternatively, if you know the value for the desired color, you can enter it in the Color code field.
                                </dd>
                            </div>
                        </div>

                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Switching your color scheme
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Go to the Design tab and select the second option . A window with the color scheme collection will appear. To install a scheme, just click on it.
                                </dd>
                            </div>
                        </div>
                        
                        <div class="qestionContainer">
                            <button type="button" class="trigger"><img src="img/documents-file.svg" loading="lazy" alt="Question document">
                                <dt class="qestion-punct simple-text text-color__bark Normal-text">
                                    Changing design 
                                </dt>
                            </button>
                            <div class="content">
                                <dd class="qestion-punct__description">
                                    Go to the Design tab and select the third option. A window with the design themes collection will appear. To install a theme, just click on it.
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