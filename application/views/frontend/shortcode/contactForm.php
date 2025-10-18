<section class="abv2-contact h4-contact-area pt-100 pt-sm-100 pb-40" data-background="<?=base_url('assets/frontend/images/backdrop.webp') ?>" style="background-image: url(<?=base_url('assets/frontend/images/backdrop.webp')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-2 text-center">
                    <span class="bixol-subtitle">_Get in Touch with Us Today _</span>
                    <h3>Learn about all our Training Program, Request for consultation and counseling by dropping a mail or call</h3>
                    <span class="line"></span>
                    <p>Our Experts Are Ready to Help, Becuase We Train Future Detailers and Entrepreneurs.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="abv2-contact-left pt-50">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="abv2-contact-item">
                                <div class="icon-wrapper">
                                    <span><i class="flaticon flaticon-phone"></i></span>
                                </div>
                                <div class="contact-content">
                                    <h5>Phone Number: </h5>
                                    <span><?=$this->phone1;?></span>
                                    <span class="text-grey"><?=$this->phone2;?> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="abv2-contact-item">
                                <div class="icon-wrapper">
                                    <span><i class="flaticon flaticon-mail"></i></span>
                                </div>
                                <div class="contact-content">
                                    <h5>Mail Address: </h5>
                                    <span><?=$this->email1;?></span>
                                    <span class="text-grey"><?=$this->email2;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="abv2-contact-item">
                                <div class="icon-wrapper">
                                    <span><i class="flaticon flaticon-pin"></i></span>
                                </div>
                                <div class="contact-content">
                                    <h5>Gurugram Experience Centre</h5>
                                    <span><?=$this->address1;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="abv2-contact-item">
                                <div class="icon-wrapper">
                                    <span><i class="flaticon flaticon-pin"></i></span>
                                </div>
                                <div class="contact-content">
                                    <h5>Noida Experience Centre</h5>
                                    <span><?=$this->address2;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="abv2-contact-item">
                                <div class="icon-wrapper">
                                    <span><i class="flaticon flaticon-pin"></i></span>
                                </div>
                                <div class="contact-content">
                                    <h5>Mohali Experience Centre</h5>
                                    <span>Sector 118, Sahibzada Ajit Singh Nagar, Mohali Punjab 140301</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="abv2-contact-right">
                    <form id="contact-form" action="<?=base_url('ajax/forms/contactUs') ?>">
                        <input type="email" name="fekEmail" class="hide">
                        <div class="name-area">
                            <div class="fname">
                                <input type="text" name="fname" placeholder="First name*">
                                <div class="fname_error error"></div>
                            </div>
                            <div class="lname">
                                <input type="text" name="lname" placeholder="Last name*">
                                <div class="lname_error error"></div>
                            </div>
                        </div>
                        <div class="info-area">
                            <div class="mail-address">
                                <input type="email" name="email" placeholder="Mail address*">
                                <div class="email_error error"></div>
                            </div>
                            <div class="phone-number">
                                <input type="tel" name="phone" placeholder="Phone number*">
                                <div class="phone_error error"></div>
                            </div>
                        </div>
                        <div class="message">
                            <textarea name="text" placeholder="text..." rows="5"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button id="form-submit" type="submit">Send us message</button>
                            <div class="message_error error"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>