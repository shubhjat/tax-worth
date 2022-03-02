<!DOCTYPE html>
<html lang="zxx">
  <head>
    <?php include "./header.html.php"; ?>
  </head>

  <body>
    <!-- Preloader Part Start -->
    <div class="preload-main">
      <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- Preloader Part End -->

    <!-- HEADER AREA START -->
      <?php include "./navbar.html.php"; ?>
    <!-- HEADER AREA END -->

    <!-- BANNER AREA START -->
    <section id="banner">
      <i class="fa fa-long-arrow-left slidPrv" aria-hidden="true"></i>
      <i class="fa fa-long-arrow-right slidNext" aria-hidden="true"></i>
      <div class="slider-img">
        <div class="slide-banner" style="background: url('./image/dashboard/banner.jpg')">
          <div class="overly">
            <div class="banner-content">
              <div class="container text-center">
                <div class="banner-text">
                  <h2>WE ARE</h2>
                  <h3>TAX WORTH</h3>
                  <p>
                    From tax filling to bookkeping, we provide you with the best services.
                  </p>
                  <a class="ban-btn" href="#contact">Contact Us</a>
                  <div class="social-icon text-center">
                    <a href="<?php htmlout($companyProfile['facebook']); ?>">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="<?php htmlout($companyProfile['instagram']); ?>">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="<?php htmlout($companyProfile['linkedin']); ?>">
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- ABOUT AREA START -->
    <section id="about">
      <div class="backtotop">
        <a href="#banner"
          ><i class="fa fa-chevron-up" aria-hidden="true"></i
        ></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 about-head">
            <h2>ABOUT US</h2>
            <h3>KNOW ABOUT OUR COMPANY</h3>
          </div>
        </div>
        <div class="row apt">
          <div class="col-lg-5 col-sm-8 m-sm-auto">
            <div class="about-img">
              <img src="image/about2.jpg" alt="about-img" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-6 about-text">
            <h2>WE ARE TAX WORTH</h2>
            <!-- <span>From United State, America</span> -->
            <div class="about-p">
              <p>
                When we hear the word “TAX,” the first thing that comes to our mind is the laborious tasks. We have to deal with all the bills, expenses, savings and prepare the papers to fill the tax. Not everyone is good with numbers, We provide burden free services whether any customized or end to end which includes business & Tax consultancy, Bookkeeping and Tax filing.
              </p>
            </div>
            <!-- <div class="row counter-main">
              <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                <div class="chart" data-percent="75"></div>
                <h3>95%</h3>
                <h4>Projects</h4>
              </div>
              <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                <div class="chart" data-percent="65"></div>
                <h3>80%</h3>
                <h4>Satisfaction</h4>
              </div>
              <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                <div class="chart" data-percent="55"></div>
                <h3>75%</h3>
                <h4>Rating</h4>
              </div>
              <div class="counter-1 col-lg-3 col-sm-6 col-md-3">
                <div class="chart" data-percent="45"></div>
                <h3>60%</h3>
                <h4>New Skills</h4>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT AREA END -->

    <!-- COUNT AREA START -->
    <!-- <section id="count">
      <div class="container zindex">
        <div class="row">
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="count-item">
              <div class="count-icon">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </div>
              <div class="count-text">
                <h3>Work <span>Done</span></h3>
                <p
                  class="counter"
                  data-counterup-time="1500"
                  data-counterup-delay="30"
                  data-counterup-beginat="100"
                >
                  23,502,73
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="count-item">
              <div class="count-icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <div class="count-text">
                <h3>Happy <span>Client</span></h3>
                <p
                  class="counter"
                  data-counterup-time="1500"
                  data-counterup-delay="30"
                  data-counterup-beginat="100"
                >
                  35,420,83
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="count-item">
              <div class="count-icon">
                <i class="fa fa-coffee" aria-hidden="true"></i>
              </div>
              <div class="count-text">
                <h3>Coffee <span>Taken</span></h3>
                <p
                  class="counter"
                  data-counterup-time="1500"
                  data-counterup-delay="30"
                  data-counterup-beginat="100"
                >
                  85,733,99
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 text-center">
            <div class="count-item">
              <div class="count-icon">
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="count-text">
                <h3>Got <span>Award</span></h3>
                <p
                  class="counter"
                  data-counterup-time="1500"
                  data-counterup-delay="30"
                  data-counterup-beginat="100"
                >
                  13,020
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- COUNT AREA END -->

    <!-- PROTFOLIO AREA START -->
    <!-- <section id="portfolio" class="portfolio-bg">
      <div class="port-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 about-head heading-bg">
            <h2>OUR PORTFOLIO</h2>
            <h3>SEE OUR LATEST WORKS</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="portfolio-imag">
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big1.jpg"
                        ><i class="fa fa-search-plus"></i>
                      </a>
                    </div>
                    <img src="image/port1.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big2.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port2.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big3.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port3.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big4.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port4.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big5.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port5.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big6.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port6.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big7.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port7.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big8.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port8.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big1.jpg"
                      >
                        <i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port1.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big2.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port2.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-inner">
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big3.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port3.png" alt="port1" class="img-fluid" />
                  </div>
                  <div class="port-img">
                    <div class="port-overlay">
                      <a
                        class="venobox"
                        data-gall="gallery01"
                        href="image/port-big4.jpg"
                        ><i class="fa fa-search-plus"></i
                      ></a>
                    </div>
                    <img src="image/port4.png" alt="port2" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- PROTFOLIO AREA END -->

    <!-- SERVICE AREA START -->
    <section id="service">
      <div class="container">
        <div class="about-head mb-5">
          <h2>OUR SERVICES</h2>
          <h3>CHECKOUT OUR SERVICE</h3>
        </div>
        <div class="servicesList">
          <div class="singleService">
            <img src="./image/dashboard/tax-return-filing.jpg" alt="Tax Return Filing & Consultancy" />
            <div class="content">
              <h3 class="title">Tax Return Filing & <span>Consultancy</span></h3>
              <ul>
                <li>1040 Individual (Including all schedules applicable)</li>
                <li>1120 Corporate Tax Filing</li>
                <li>1120 S (S corporations)</li>
                <li>1065 (Partnerships tax filing including K-1 schedules)</li>
                <li>1041 (Estate tax returns)</li>
                <li>1099 as per applicability</li>
              </ul>
            </div>
          </div>
          <div class="singleService">
            <img src="./image/dashboard/accounting-and-bookkeeping.jpg" alt="Accounting & Bookkeeping" />
            <div class="content">
              <h3 class="title">Accounting & <span>Bookkeeping</span></h3>
              <p class="text">
                We provide monthly, Quarterly, Half yearly and Yearly accounting and bookkeeping services as per the requirements along with the cashflow status and applicable accounting standards.
              </p>
            </div>
          </div>
          <div class="singleService">
            <img src="./image/dashboard/business-consultancy.jpg" alt="Business Consultancy" />
            <div class="content">
              <h3 class="title">Business <span>Consultancy</span></h3>
              <p class="text">
                Identification of potential risks and mitigating through strategic business framework is one of the critical functions in business advisory services. Our expertise solutions as per the specifications of client manifolds the business performance and ensures the proper risk management of the organization and highlight indispensable KPI's.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SERVICE AREA END -->

    <!-- TEAM AREA START -->
    <!-- <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 about-head">
            <h2>OUR TEAM</h2>
            <h3>BEST TEAM RIGHT NOW</h3>
          </div>
        </div>
        <div class="row apt">
          <div class="col-lg-3 col-sm-6">
            <div class="team-item">
              <div class="team-overlay text-center">
                <div class="overlay-text">
                  <h3>Shakib</h3>
                  <p>Web Designer</p>
                </div>
                <div class="t-icon">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-google-plus" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
              <img
                src="image/team1.jpg"
                alt="team-img"
                class="img-fluid w-100"
              />
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-item">
              <div class="team-overlay text-center">
                <div class="overlay-text">
                  <h3>Tahsan</h3>
                  <p>Web Developer</p>
                </div>
                <div class="t-icon">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-google-plus" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
              <img
                src="image/team2.jpg"
                alt="team-img"
                class="img-fluid w-100"
              />
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-item">
              <div class="team-overlay text-center">
                <div class="overlay-text">
                  <h3>Fatima</h3>
                  <p>Digital Marketer</p>
                </div>
                <div class="t-icon">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-google-plus" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
              <img
                src="image/team4.jpg"
                alt="team-img"
                class="img-fluid w-100"
              />
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-item">
              <div class="team-overlay text-center">
                <div class="overlay-text">
                  <h3>Alex</h3>
                  <p>App Developer</p>
                </div>
                <div class="t-icon">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-google-plus" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
              <img
                src="image/team3.jpg"
                alt="team-img"
                class="img-fluid w-100"
              />
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- TEAM AREA END -->

    <!-- PRICE AREA START -->
    <!-- <section id="price">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 about-head">
            <h2>PRICE PLAN</h2>
            <h3>GET THINGS DONE EASILY</h3>
          </div>
        </div>
      </div>
    </section>
    <section id="price2">
      <div class="pricing pricing-palden">
        <div class="pricing-item">
          <div class="pricing-deco">
            <svg
              class="pricing-deco-img"
              enable-background="new 0 0 300 100"
              height="100px"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 300 100"
              width="300px"
              x="0px"
              xml:space="preserve"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns="http://www.w3.org/2000/svg"
              y="0px"
            >
              <path
                class="deco-layer deco-layer--1"
                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--2"
                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--3"
                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                fill="#FFFFFF"
                opacity="0.7"
              ></path>
              <path
                class="deco-layer deco-layer--4"
                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                fill="#FFFFFF"
              ></path>
            </svg>
            <div class="pricing-price">
              <span class="pricing-currency">$</span>15
              <span class="pricing-period">/ mo</span>
            </div>
            <h3 class="pricing-title">Freelance</h3>
          </div>
          <ul class="pricing-feature-list">
            <li class="pricing-feature">1 GB of space</li>
            <li class="pricing-feature">Support at $25/hour</li>
            <li class="pricing-feature">Limited cloud access</li>
          </ul>
          <a href="#" class="pricing-action">Order Now</a>
        </div>
        <div class="pricing-item pricing__item--featured">
          <div class="pricing-deco">
            <svg
              class="pricing-deco-img"
              enable-background="new 0 0 300 100"
              height="100px"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 300 100"
              width="300px"
              x="0px"
              xml:space="preserve"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns="http://www.w3.org/2000/svg"
              y="0px"
            >
              <path
                class="deco-layer deco-layer--1"
                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--2"
                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--3"
                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                fill="#FFFFFF"
                opacity="0.7"
              ></path>
              <path
                class="deco-layer deco-layer--4"
                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                fill="#FFFFFF"
              ></path>
            </svg>
            <div class="pricing-price">
              <span class="pricing-currency">$</span>30
              <span class="pricing-period">/ mo</span>
            </div>
            <h3 class="pricing-title">Business</h3>
          </div>
          <ul class="pricing-feature-list">
            <li class="pricing-feature">5 GB of space</li>
            <li class="pricing-feature">Support at $5/hour</li>
            <li class="pricing-feature">Full cloud access</li>
          </ul>
          <a href="#" class="pricing-action pa-act">Order Now</a>
        </div>
        <div class="pricing-item">
          <div class="pricing-deco">
            <svg
              class="pricing-deco-img"
              enable-background="new 0 0 300 100"
              height="100px"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 300 100"
              width="300px"
              x="0px"
              xml:space="preserve"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns="http://www.w3.org/2000/svg"
              y="0px"
            >
              <path
                class="deco-layer deco-layer--1"
                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--2"
                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                fill="#FFFFFF"
                opacity="0.6"
              ></path>
              <path
                class="deco-layer deco-layer--3"
                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z"
                fill="#FFFFFF"
                opacity="0.7"
              ></path>
              <path
                class="deco-layer deco-layer--4"
                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                fill="#FFFFFF"
              ></path>
            </svg>
            <div class="pricing-price">
              <span class="pricing-currency">$</span>60
              <span class="pricing-period">/ mo</span>
            </div>
            <h3 class="pricing-title">Enterprise</h3>
          </div>
          <ul class="pricing-feature-list">
            <li class="pricing-feature">10 GB of space</li>
            <li class="pricing-feature">Support at $5/hour</li>
            <li class="pricing-feature">Full cloud access</li>
          </ul>
          <a href="#" class="pricing-action">Order Now</a>
        </div>
      </div>
    </section> -->
    <!-- PRICE AREA END -->

    <!-- CONTACT AREA START -->
    <section id="contact">
      <div class="container zindex">
        <div class="row">
          <div class="col-lg-12 about-head heading-bg form-head">
            <h2>CONTACT US</h2>
            <h3>STAY CONNECTED EVERYTIME</h3>
          </div>
        </div>
      </div>
      <div class="container zindex">
        <div class="row">
          <div class="col-lg-6 form-p">
            <div class="user-form">
              <form action="?action=send-enquiry" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="name">
                        <i class="fa fa-user-o" aria-hidden="true"></i> Full Name
                      </label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Type your name" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="mobileNo">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i> Mobile No.
                      </label>
                      <input name="contact" type="text" class="form-control" id="mobileNo" placeholder="Type your mobile no." />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="email">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> Email-ID
                      </label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Type your email-id" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="message">
                        <i class="fa fa-comments-o" aria-hidden="true"></i> Message
                      </label>
                      <textarea name="message" class="form-control" id="message" rows="3" placeholder="Type here..."></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">
                  <input type="hidden" name="address" value="">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send It
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-6 form-icon text-center">
            <a
              class="venobox"
              data-autoplay="true"
              data-vbtype="video"
              href="https://www.youtube.com/watch?v=nuktTVmoKfc"
              ><i class="fa fa-play" aria-hidden="true"></i
            ></a>
            <div class="watch-text">
              <a
                class="venobox"
                data-autoplay="true"
                data-vbtype="video"
                href="https://www.youtube.com/watch?v=nuktTVmoKfc"
                >Watch Our Story</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT AREA END -->

    <!-- TESTIMONIAL AREA START -->
    <!-- <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 about-head">
            <h2>OUR TESTIMONIAL</h2>
            <h3>LOOK WHAT PEOPLE SAYS</h3>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-lg-12">
            <div class="news-main">
              <div class="col-lg-6 col-md-6">
                <div class="news-item-main">
                  <div class="news-items">
                    <div class="testimonial-text">
                      <p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum, veritatis, aut. Aperiam quas sunt numquam,
                        quos eaque
                      </p>
                    </div>
                    <div class="testimonial-img">
                      <div class="user-img">
                        <img src="image/testimonial2.png" alt="user-img" />
                      </div>
                      <div class="testimonial-img-text">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h4>Shakibul A.</h4>
                        <span>3 jan, 2019</span>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="news-item-main">
                  <div class="news-items">
                    <div class="testimonial-text">
                      <p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum, veritatis, aut. Aperiam quas sunt numquam,
                        quos eaque
                      </p>
                    </div>
                    <div class="testimonial-img">
                      <div class="user-img">
                        <img src="image/testimonial1.png" alt="user-img" />
                      </div>
                      <div class="testimonial-img-text">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h4>Mrs Jerry</h4>
                        <span>3 jan, 2019</span>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="news-item-main">
                  <div class="news-items">
                    <div class="testimonial-text">
                      <p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum, veritatis, aut. Aperiam quas sunt numquam,
                        quos eaque
                      </p>
                    </div>
                    <div class="testimonial-img">
                      <div class="user-img">
                        <img src="image/testimonial2.png" alt="user-img" />
                      </div>
                      <div class="testimonial-img-text">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h4>Shuvo Kiron</h4>
                        <span>3 jan, 2019</span>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="news-item-main">
                  <div class="news-items">
                    <div class="testimonial-text">
                      <p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum, veritatis, aut. Aperiam quas sunt numquam,
                        quos eaque
                      </p>
                    </div>
                    <div class="testimonial-img">
                      <div class="user-img">
                        <img src="image/testimonial3.png" alt="user-img" />
                      </div>
                      <div class="testimonial-img-text">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <h4>Alvi Alam</h4>
                        <span>3 jan, 2019</span>
                      </div>
                    </div>
                    <div class="clr"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- TESTIMONIAL AREA END -->

    <!-- FOOTER AREA START -->
      <?php include "./footer.html.php"; ?>
    <!-- FOOTER AREA END -->

    <!-- Optional JavaScript -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/circular.js"></script>
    <script src="js/custom.js"></script>

    <?php include "./scripts.html.php"; ?>
  </body>
</html>
