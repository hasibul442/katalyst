import React from "react";
import { Link } from "react-router-dom";

import "bootstrap/dist/css/bootstrap.min.css";

import "./homepage.css";

import RellaxWrapper from "react-rellax-wrapper";

import AOS from "aos";
import "aos/dist/aos.css";

import CountUp from "react-countup";
import { Carousel } from "react-bootstrap";

function Homepage() {
  AOS.init({
    duration: 800,
    delay: 200,
    mirror: true,
  });

  return (
    <>
      <section className="carousel-section">
        <Carousel>
          <Carousel.Item>
            <img
              className="d-block w-100"
              style={{ height: "800px" }}
              src="/carousel/Banner-1.jpg"
              alt="Banner_Photo"
            />
          </Carousel.Item>
          <Carousel.Item>
            <img
              className="d-block w-100"
              style={{ height: "800px" }}
              src="/carousel/Banner-2.jpg"
              alt="Banner_Photo"
            />
          </Carousel.Item>
          <Carousel.Item>
            <img
              className="d-block w-100"
              style={{ height: "800px" }}
              src="/carousel/Banner-3.jpg"
              alt="Banner_Photo"
            />
          </Carousel.Item>
          <Carousel.Item>
            <img
              className="d-block w-100"
              style={{ height: "800px" }}
              src="/carousel/Banner-4.jpg"
              alt="Banner_Photo"
            />
          </Carousel.Item>
        </Carousel>
      </section>

      <section className="custome-shape">
        <img
          src="/custom_shape/11.png"
          className="shape-image"
          alt="Custom Shape"
        />
      </section>

      <section className="texture-1">
        <div className="container">
          <div className="row">
            <div className="col-md-6 my-auto">
              <RellaxWrapper speed={3} className="text-center">
                <div className="history-img  mt-5">
                  <div className="history-image-shape">
                    <img
                      src="/homepage/homepage-1.jpg"
                      alt=""
                      className="img-fluid shadow history-side-image"
                    />
                  </div>
                </div>
              </RellaxWrapper>
            </div>

            <div className="col-md-6 my-auto" data-aos="fade-up">
              <p className="h2 katalyst-history-headline">OUR STORIES</p>
              <p className="history-short-description">
                Katalyst Bangladesh, is a partnership entity of four
                professionals having academic background of Textile Engineering
                and Biochemistry with combined pharmaceutical and textile
                experiences of more than 75 years. has been established in early
                2019 considering the growth potentiality of textile dyeing and
                washing industries.
              </p>

              <div>
                <Link to="/about-us" className="learn-more button-style-2">
                  <span className="circle" aria-hidden="true">
                    <span className="icon arrow"></span>
                  </span>
                  <span className="button-text">Learn More</span>
                </Link>
              </div>
            </div>
          </div>
        </div>

        <section>
          <div className="company-history-point" data-aos="fade-up">
            <p className="h2 katalyst-history-headline text-center">
              ecofriendly chemicals and process
            </p>
            <p
              className="history-short-description text-center"
              style={{ color: "#ec008c" }}
            >
              OUR JOURNEY FOR THE LAST 10 YEARS WAS ALL ABOUT EXPLORING NEW
              FRONTIERS
            </p>
            <div className="d-sm-flex justify-content-around pt-3">
              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-trophy fa-3x"></i>
                  <p>
                    Year Of Exprience <br /> <CountUp end={75} />
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-flag fa-3x"></i>
                  <p>
                    Year Of Established <br /> <CountUp end={2019} />
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-globe fa-3x"></i>
                  <p>
                    Imported From
                    <br /> China
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-user-friends fa-3x"></i>
                  <p>
                    Employees <br /> <CountUp end={26} />
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>

      {/* <section className="product-show">
        <div className="custom-shape">
          <img
            src="/custom_shape/Asset 2.png"
            className="shape-image1"
            alt="Custom Shape"
          />
        </div>
        <div className="container pb-5">
            <p></p>
        </div>
        
      </section> */}

      <section className="mt-5">
        <div className="container pt-5">
          <div className="row">
            <div className="col-md-5 col-lg-6">
              <div className="homepage-product-left-block">
                <h2 className="katalyst-history-headline">Our Product</h2>
                <p>
                  For over 10 years, the Katalyst family has been building
                  relationships with many Company. Our core values define what
                  we stand for, whom we work with and how we interact with
                  colleagues, customers, principles, shareholders and others
                  stakeholders.
                </p>
                <Link
                  to="/basic-chemicals"
                  className="learn-more button-style-2"
                >
                  <span className="circle" aria-hidden="true">
                    <span className="icon arrow"></span>
                  </span>
                  <span className="button-text">Learn More</span>
                </Link>
              </div>
            </div>
            <div className="col-md-7 col-lg-6">
              
            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default Homepage;
