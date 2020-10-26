<?php include('./include/00-all/2-menu.php') ?>

<div id="contactUsMap" class="big-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43988.89348001401!2d32.07300384891463!3d49.42783018908224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3acd4587a29b0dea!2sBurevisnyk!5e0!3m2!1sen!2sua!4v1602328170742!5m2!1sen!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="main main-raised">
    <div class="contact-content">
        <div class="container">
            <h2 class="title">Send us a message</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
                    </p>
                    <form role="form" id="contact-form" method="post">
                        <div class="form-group label-floating">
                            <label class="control-label">Your name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Email address</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Phone</label>
                            <input type="text" name="phone" class="form-control" />
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Your message</label>
                            <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us" />
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Find us at the office</h4>
                            <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                7652 Bucharest,<br>
                                Romania
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Give us a ring</h4>
                            <p> Michael Jordan<br>
                                +40 762 321 762<br>
                                Mon - Fri, 8:00-22:00
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Legal Information</h4>
                            <p> Creative Tim Ltd.<br>
                                VAT &middot; EN2341241<br>
                                IBAN &middot; EN8732ENGB2300099123<br>
                                Bank &middot; Great Britain Bank
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
