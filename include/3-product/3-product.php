







<?php

$content = array(
    array(

        '<div class="tab-pane" id="product-page1">
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
        <div class="tab-pane" id="product-page5">
            <img src="./assets/img/t1/5.jpg" />
        </div>',
        
        
        '<li>
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
        <li>
            <a href="#product-page5" role="tab" data-toggle="tab" aria-expanded="true">
                <img src="./assets/img/t1/5.jpg" />
            </a>
        </li>',


        'Стол TPW2',

        'Стол предназначен для детей дошкольного возраста.<br>
        Столешница имеет двухсторонний функционал: одна сторона покрыта hpl-пластиком, 
        на вторую сторону нанесена грифельная краска для рисования мелом.<br> 
        Внутри стол разделен на секции для удобства хранения канцтоваров 
        и любых других предметов ребенка.',

        '<li>Фанера березовая</li>
        <li>HPL-пластик белый</li>
        <li>Масло-воск Osmo</li>',

        '<i class="material-icons" style="float: left;">height</i> 
        <p style="float: left; vertical-align: top;">Высота 500мм</p>
        <br><br>
        <i class="material-icons" style="float: left;">space_bar</i> 
        <p style="float: left; vertical-align: top;">Длина 750мм</p>
        <br><br>
        <i class="material-icons" style="float: left;">north_east</i> 
        <p style="float: left; vertical-align: top;">Глубина 550мм</p>',

        './assets/img/t1/5.jpg',

        'bottom'
    ),





















    array(

        '<div class="tab-pane" id="product-page1">
        <img src="./assets/img/t2/1.jpg" />
        </div>
        <div class="tab-pane active" id="product-page2">
            <img src="./assets/img/t2/2.jpg" />
        </div>
        <div class="tab-pane" id="product-page3">
            <img src="./assets/img/t2/3.jpg" />
        </div>
        <div class="tab-pane" id="product-page4">
            <img src="./assets/img/t2/4.jpg" />
        </div>
        <div class="tab-pane" id="product-page5">
            <img src="./assets/img/t2/5.jpg" />
        </div>
        <div class="tab-pane" id="product-page6">
            <img src="./assets/img/t2/6.jpg" />
        </div>',
        
        
        '<li>
        <a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
            <img src="./assets/img/t2/1.jpg" />
        </a>
        </li>
        <li class="active">
            <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                <img src="./assets/img/t2/2.jpg" />
            </a>
        </li>
        <li>
            <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                <img src="./assets/img/t2/3.jpg" />
            </a>
        </li>
        <li>
            <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                <img src="./assets/img/t2/4.jpg" />
            </a>
        </li>
        <li>
            <a href="#product-page5" role="tab" data-toggle="tab" aria-expanded="true">
                <img src="./assets/img/t2/5.jpg" />
            </a>
        </li>
        <li>
            <a href="#product-page6" role="tab" data-toggle="tab" aria-expanded="true">
                <img src="./assets/img/t2/6.jpg" />
            </a>
        </li>',


        'Стул CPW1',

        'Стул для детей дошкольного возраста с покрытием hpl-пластика.',

        '<li>Фанера березовая</li>
        <li>HPL-пластик белый</li>
        <li>Масло-воск Osmo</li>',

        '<i class="material-icons" style="float: left;">height</i> 
        <p style="float: left; vertical-align: top;">Высота общая стула 500мм</p>
        <br><br>
        <p style="float: left; vertical-align: top;">Высота сидения 280мм</p>
        <br><br>
        <i class="material-icons" style="float: left;">space_bar</i> 
        <p style="float: left; vertical-align: top;">Длина сидения 300мм</p>
        <br><br>
        <i class="material-icons" style="float: left;">north_east</i> 
        <p style="float: left; vertical-align: top;">Глубина сидения 270мм</p>',

        './assets/img/t2/1.jpg',

        'center center'
    )
);

?>































































<?php include('./include/00-all/2-menu.php') ?>



<div class="page-header header-filter" data-parallax="true" filter-color="primary" 
        <?php echo "style=\"background: url('".$content[$_GET['t']][6]."') ".$content[$_GET['t']][7]."; \"" ?> >
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
                        <?php echo $content[$_GET['t']][0] ?>
                    </div>
                    <ul class="nav flexi-nav" role="tablist" id="flexiselDemo1">
                        <?php echo $content[$_GET['t']][1] ?>
                    </ul>
                </div>


























                <div class="col-md-6 col-sm-6">
                    <h2 class="title"> <?php echo $content[$_GET['t']][2] ?> </h2>
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
                                        <p> <?php echo $content[$_GET['t']][3] ?> </p>
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
                                            <?php echo $content[$_GET['t']][4] ?>
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
                                        <?php echo $content[$_GET['t']][5] ?>
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

