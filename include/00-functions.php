
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

function activeClass($page)
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
        default:
            echo "ecommerce-page";
    }
}

function isActiveCat($page, $tab=null)
{
    if ($tab == null && $_GET['cat'] == $page) {

        echo "checked=''";
    }
    else
    {
        echo "in";
    }

}

function isActive($page)
{
    if ($_GET['p'] == $page) {
        echo "active";
    }
}


?>