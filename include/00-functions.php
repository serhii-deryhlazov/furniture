
<?php

function build_page()
{
    if (!isset($_GET['p'])) {
        $_GET['p'] = "1-main";
    }

    foreach (glob('./include/' . $_GET['p'] . '/*.php') as $element) {

        require $element;
    };
}

function isLandingFooter(){
    if (isset($_GET['p']) && $_GET['p'] == "5-materials") 
    {
        echo "style='color: #fff;'";
    } 
    else if (isset($_GET['p']) && $_GET['p'] == "3-product")
    {
        echo "style='background-color: transparent;'";
    }
}

function isLanding()
{
    if (isset($_GET['p']) && $_GET['p'] == "5-materials" || $_GET['p'] == "3-product") 
    {
        echo "navbar-transparent navbar-absolute";
    }
    else
    {
        echo " \"style=\"background-color: #FFF;color: #555; margin-bottom: 0;box-shadow: none;z-index: 99;\"";
    }
}

function isLandingShadow()
{
    if (isset($_GET['p']) && $_GET['p'] == "5-materials" || $_GET['p'] == "3-product") 
    {
        echo "src=\"./assets/img/detvora-logo.png\"";
    }
    else
    {
        echo "src=\"./assets/img/detvora-logo.jpg\"";
    }
}

function activeBodyClass($page)
{
    switch ($page) {
        case "1-main":
            echo "section-white";
            break;
        case "2-catalog":
            echo "ecommerce-page";
            break;
        case "3-product":
            echo "product-page";
            break;
        case "4-contact":
            echo "contact-page";
            break;
        case "5-materials":
            echo "landing-page";
            break;
        default:
            echo "ecommerce-page";
    }
}

function isActiveCat($page, $tab=null)
{
    if (isset($_GET['cat']))
    {
        if ($tab == null && $_GET['cat'] == $page) 
        {

            echo "checked=''";
        }
        else
        {
            echo "in";
        }
    }
}

function isActive($page)
{
    if ($_GET['p'] == $page) {
        echo "active";
    }
}


?>