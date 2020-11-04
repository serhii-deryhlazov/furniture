<?php include('./include/00-all/2-menu.php') ?>

<div class="page-header header-filter" data-parallax="true" filter-color="primary" style="background-image: url('../assets/img/bg6.jpg');">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-4 col-md-offset-8">
                <button class="btn btn-white pull-right"><i class="material-icons">shopping_cart</i> 0 Items</button>
            </div>
        </div>
    </div>
</div>

<div class="section section-gray">
    <div class="container">
        <div class="main main-raised main-product">
            <div class="row">
                <div class="col-md-6 col-sm-6">




























                    <div class="tab-content">
                        <div class="tab-pane" id="product-page1">
                            <img src="./assets/img/t1/1.jpg" />
                        </div>
                        <div class="tab-pane active" id="product-page2">
                            <img src="./assets/img/t1/2.jpg" />
                        </div>
                        <div class="tab-pane" id="product-page3">
                            <img src="./assets/img/t1/3.jpg" />
                        </div>
                        <div class="tab-pane" id="product-page4">
                            <img src="./assets/img/t1/4.jpg" />
                        </div>
                    </div>
                    <ul class="nav flexi-nav" role="tablist" id="flexiselDemo1">
                        <li>
                            <a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
                                <img src="./assets/img/t1/1.jpg" />
                            </a>
                        </li>
                        <li class="active">
                            <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                <img src="./assets/img/t1/2.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                                <img src="./assets/img/t1/3.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                <img src="./assets/img/t1/4.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>


























                <div class="col-md-6 col-sm-6">
                    <h2 class="title"> Стул </h2>
                    <h3 class="main-price">$335</h3>
                    <div id="acordeon">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-border panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="panel-title">
                                            Описание
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Стул идеально подходит для детей дошкольного возраста.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-border panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseOne">
                                        <h4 class="panel-title">
                                            Материалы
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Фанера</li>
                                            <li>HPL-пластик</li>
                                            <li>Масло-воск Osmo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-border panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne">
                                        <h4 class="panel-title">
                                            Размеры
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" 
                                style="line-height: 1.2;">
                                    <div class="panel-body">
                                        <i class="material-icons" style="float: left;">height</i> 
                                        <p style="float: left; vertical-align: top;">Высота 562/600мм</p>
                                        <br><br>
                                        <i class="material-icons" style="float: left;">space_bar</i> 
                                        <p style="float: left; vertical-align: top;">Ширина 300/320мм</p>
                                        <br><br>
                                        <i class="material-icons" style="float: left;">north_east</i> 
                                        <p style="float: left; vertical-align: top;">Глубина 430/430мм</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!--  end acordeon -->

                    <div class="row pick-size">
                        <div class="col-md-6 col-sm-6">
                            <label>Выберите цвет</label>
                            <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                <option value="1">Белый </option>
                                <option value="2">Розовый</option>
                                <option value="3">Голубой</option>
                            </select>
                        </div>
                    </div>
                    <div class="row text-right">
                        <button class="btn btn-rose btn-round">нравится &nbsp;<i class="material-icons">favorite</i></button>
                    </div>
                </div>
            </div>
        </div>
































        <div class="related-products">
            <h3 class="title text-center">Вам так же может понравиться:</h3>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-product">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="./assets/img/t1/1.jpg" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-rose">Стул</h6>
                            <h5 class="card-title">
                                <a href="#pablo">Стул детский</a>
                            </h5>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-product">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="./assets/img/t1/3.jpg" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-rose">Стол и стул</h6>
                            <h5 class="card-title">
                                <a href="#pablo">Стул детский</a>
                            </h5>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-product">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="./assets/img/t1/1.jpg" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-rose">Стол</h6>
                            <h5 class="card-title">
                                <a href="#pablo">Стул детский</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-product">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="./assets/img/t1/3.jpg" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-rose">Стол и стул</h6>
                            <h5 class="card-title">
                                <a href="#pablo">Стул детский</a>
                            </h5>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

