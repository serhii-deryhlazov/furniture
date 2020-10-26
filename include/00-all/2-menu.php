<nav id="main-menu" class="navbar navbar-primary" style="background-color: #FFF; 
        color: #555; margin-bottom: 0; 
        box-shadow: none;
        z-index: 99;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-primary">
                <span class="sr-only">Toggle navigation</span>
                <span style="color: #3C4858;" class="icon-bar"></span>
                <span style="color: #3C4858;" class="icon-bar"></span>
                <span style="color: #3C4858;" class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?p=1-main"><img src="./assets/img/detvora-logo.png" /></a>
        </div>

        <div class="collapse navbar-collapse" id="example-navbar-primary">
            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown <?php isActive("2-catalog"); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">apps</i> КАТАЛОГ
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="?p=2-catalog">
                                <i class="material-icons">apps</i> Все товары
                            </a>
                        </li>
                        <li>
                            <a href="?p=2-catalog&cat=1">
                                <i class="material-icons disabled">list</i> Детские столы и стулья
                            </a>
                        </li>
                        <li>
                            <a href="?p=2-catalog&cat=2">
                                <i class="material-icons disabled">list</i> Школьные парты
                            </a>
                        </li>
                        <li>
                            <a href="?p=2-catalog&cat=3">
                                <i class="material-icons disabled">list</i> Уличная мебель
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php isActive("4-contact"); ?>">
                    <a href="?p=4-contact">
                        <i class="material-icons">location_on</i> КОНТАКТЫ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">account_circle</i> О НАС
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>