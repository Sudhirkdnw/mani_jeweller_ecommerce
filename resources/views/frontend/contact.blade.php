@include ('frontend.layouts.header')
 <!-- Begin Hiraola's Breadcrumb Area -->
 <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <div id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.2830135711274!2d80.25339557488115!3d26.51102087723871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c37e1be1a62bb%3A0xf810883b8a4f5f60!2sMani%20Jewellers!5e0!3m2!1sen!2sin!4v1730226768593!5m2!1sen!2sin" width="1125" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>         </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Contact Us</h3>
                            <p class="contact-page-message">Claritas est etiam processus dynamicus, qui sequitur
                                mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                                claram anteposuerit litterarum formas human.</p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Address</h4>
                                <p>123 Main Street, Anytown, CA 12345 – USA</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Phone</h4>
                                <p>Mobile: (08) 123 456 789</p>
                                <p>Hotline: 1009 678 456</p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                <p>yourmail@domain.com</p>
                                <p>support@hastech.company</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Tell Us Your Message</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" name="con_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email <span class="required">*</span></label>
                                        <input type="email" name="con_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="con_subject">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>Your Message</label>
                                        <textarea name="con_message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="hiraola-contact-form_btn" name="submit">send</button>
                                    </div>
                                </form>
                                <p class="form-message mt-3 mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->
    

@include ('frontend.layouts.footer')