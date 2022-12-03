<?php

class Core
{
    public $documentRoot = null;

    public function __construct()
    {
        $this->documentRoot = $_SERVER["DOCUMENT_ROOT"];
    }
    public function buildTemplate($arrTemplate = [])
    {
        if ($arrTemplate['HEADER'] || in_array("HEADER", $arrTemplate)) {
            require($this->documentRoot . "/templates/header.html");

            if (!empty($arrTemplate['HEADER']['STYLES'])) {
                foreach ($arrTemplate['HEADER']['STYLES'] as $style) {
                    echo '<link rel="stylesheet" href="' . $style . '">';
                }
            }

            //general
            echo '<link rel="stylesheet" href="../templates/css/style.css">';
            echo '<link rel="stylesheet" href="../../templates/css/style.css">';

            if ($arrTemplate['HEADER']['TITLE']) {
                echo '<title>' . $arrTemplate['HEADER']['TITLE'] . '</title>';
            } else {
                echo '<title>Колесо Баланса</title>';
            }

            echo '</head><body>';

            if($arrTemplate['HEADER']['PAGES']){
               echo '<h3>' . $arrTemplate['HEADER']['PAGES'] . '</h3></div>';
            }
            else{
                echo '</div>';}
        }
        if (in_array('FOOTER', $arrTemplate) || $arrTemplate['FOOTER']) {

            require($this->documentRoot . "/templates/footer.php");

            if (!empty($arrTemplate['FOOTER']['SCRIPTS'])) {
                foreach ($arrTemplate['FOOTER']['SCRIPTS'] as $scripts) {
                    echo '<script src="' . $scripts . '"></script>';
                }
            }

            //general
            echo '<script src="../templates/js/script.js"></script>';
            echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';

            echo '</body></html>';
        }
    }
}
