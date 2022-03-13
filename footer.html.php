<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a class="f-logo" href="#banner"><b>Tax Worth Pvt. Ltd.</b></a>
                    <p>
                        <?php htmlout($companyProfile['description']); ?>
                    </p>
                    <!-- <div class="footer-social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#banner">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#service">Our Services</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="links">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <a href="mailto:<?php htmlout($companyProfile['email']) ?>"><?php htmlout($companyProfile['email']) ?></a>
                        </li>
                        <li>
                            <a href="tel:+91<?php htmlout($companyProfile['contact']) ?>">+91-<?php htmlout($companyProfile['contact']) ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<section id="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fop-btm text-center">
                    <h2>
                        Tech Partner- <a href="http://www.techeffin.com" target="_blank" rel="noreferrer noopener">TechEffin</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>