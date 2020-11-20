<nav id="main-menu" class="navbar navbar-primary <?php isLanding() ?>">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-primary">
                <span class="sr-only">Toggle navigation</span>
                <span style="color: #3C4858;" class="icon-bar"></span>
                <span style="color: #3C4858;" class="icon-bar"></span>
                <span style="color: #3C4858;" class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?p=1-main"><img <?php isLandingShadow(); ?> /></a>
        </div>

        <div class="collapse navbar-collapse" id="example-navbar-primary">
            <ul class="nav navbar-nav navbar-center">
                <li class="dropdown <?php isActive("2-catalog"); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">apps</i> КАТАЛОГ
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li class="text-center">
                            <a href="?p=2-catalog">
                                Все товары
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=1">
                                Cтулья
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=2">
                                Столы
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=3">
                                Шкафы
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=3">
                                Кровати
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=3">
                                Полки
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=3">
                                Для детских садиков
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="?p=2-catalog&cat=3">
                                Аксесуары
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">account_circle</i> О НАС
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li class="text-center">
                            <a href="#">
                                Кто мы
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="#">
                                Производство
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown <?php isActive("5-materials"); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">nature_people</i> МАТЕРИАЛЫ
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li class="text-center">
                            <a href="#">
                                Фанера
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="#">
                                HPL-пластик
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="#">
                                Масло-воск
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php isActive("4-contact"); ?>">
                    <a href="?p=4-contact">
                        <i class="material-icons">location_on</i> КОНТАКТЫ
                    </a>
                </li>
                <li class="text-center">
                    <img id="lang" src="assets\img\flags\ukraine.png">
                </li>
            </ul>
        </div>
    </div>
</nav>