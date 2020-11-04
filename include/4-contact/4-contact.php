<?php include('./include/00-all/2-menu.php') ?>

<div id="contactUsMap" class="big-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d633.5972130653385!2d30.31420552924726!3d50.564134350606864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b2dec7ceaa821%3A0x39fdb2ac6a7ab91!2sVulytsya%20Radhospna%2C%20Horenka%2C%20Kyivs&#39;ka%20oblast!5e0!3m2!1sen!2sua!4v1603915054387!5m2!1sen!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="main main-raised">
    <div class="contact-content">
        <div class="container">
            <h2 class="title" id="textus">Напишите нам</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">Будем рады ответить на любые ваши вопросы<br><br>
                    </p>
                    <form role="form" id="contact-form" method="post">
                        <div class="form-group label-floating">
                            <label class="control-label">Имя</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Email или Телефон</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Сообщение</label>
                            <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" class="btn btn-primary btn-raised btn-round" value="Отправить" />
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Производство</h4>
                            <p> ул. Совхозная 3, с. Горенка<br>
                                Киевская область,<br>
                                Украина
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Телефон</h4>
                            <p> Ольга<br>
                                <a href="tel:+380630637932">+38(063)063-79-32</a><br>
                                Понедельник - Пятница,<br>8:00-20:00
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">markunread_mailbox</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Ел. Почта</h4>
                            <p> detvora.mbl@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
