import React from "react";
import RellaxWrapper from "react-rellax-wrapper";
import "./aboutus.css";
// import { ProgressBar } from "react-bootstrap";

import AOS from "aos";
import "aos/dist/aos.css";

function Aboutus() {
  AOS.init({
    duration: 800,
    delay: 200,
    mirror: true,
  });

  return (
    <>
      <div className="aboutus-bg">
        <div>
          <h1
            className="text-center my-auto"
            style={{
              fontFamily:
                "'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif",
              fontSize: "50px",
              textTransform: "uppercase",
              fontWeight: "600",
              color: "#fff",
            }}
          >
            About Us
          </h1>
          {/* <h5 className="text-center item--title">
            If you need any service please contact us, we will try our best to
            answer
          </h5> */}
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>
      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section className="texture-3">
        <div className="container mt-5">
          <div className="row">
            <div className="col-md-6">
              <p className="background-title text-center"> OUR COMPANY </p>
              <p className="background-description">
                Katalyst Bangladesh, is a partnership entity of four
                professionals having academic background of Textile Engineering
                and Biochemistry with combined pharmaceutical and textile
                experiences of more than 75 years, has been established in early
                2019 considering the growth potentiality of textile dyeing and
                washing industries. And, to exclusively focus in its target
                industries currently Katalyst Bangladesh is closely working with
                one of the major sole distributor of soda ash light and Soda Ash
                Dense from Double Ring, China. Besides, Katalyst Bangladesh
                sources others basic chemicals from renowned manufacturer
                worldwide which include Glauber Salt from Sateri (China), Acetic
                Acid Substitute from India, Sodium Metabisulfate from Hunan
                Yinqia (China), Sodium Bicarbonate from Malan (China). Side by
                side, Katalyst Bangladesh is currently working directly with HT
                Fine Chem (China) to market their Soda Ash Substitute. The
                Company is working relentlessly to develop business relationship
                with customers of the said industries.
              </p>
            </div>

            <div className="col-md-6">
              <div className="background-image">
                <div className="text-center">
                  <div className="history-img mx-auto my-auto">
                    <div className="history-image-shape">
                      <img
                        src="/homepage/homepage-1.png"
                        alt=""
                        className="img-fluid shadow history-side-image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="aboutus-mission-vision ">
        <div className="desktop-view">
          <div className="custom-shape">
            <img
              src="/custom_shape/Asset-2.png"
              className="shape-image1"
              alt="Custom Shape"
            />
          </div>

          <div className="text-center container">
            <p
              className="background-title text-center mt-5"
              style={{ color: "#fff" }}
            >
              MISSION, VISION & VALUES
            </p>
            <div className="pt-5 pb-5 vmv">
              <img
                src="/aboutus/vmv.svg"
                alt=""
                className="img-fluid"
                style={{ width: "350px", zIndex: 10 }}
              />
            </div>
          </div>

          <div className="container " style={{ marginBottom: "80px" }}>
            <div className="vision-group vision-group-1 position-relative">
              <div className="vision-block position-absolute">
                <h3><br/></h3>
                <div className="vision-block-1">
                  <ul>
                    <li>
                      To become the first choice of customers for a value added,
                      ecofriendly chemicals and process.{" "}
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div className="vision-group vision-group-2 position-relative">
              <div className="mission-block position-absolute">
                <h3><br/></h3>
                <div className="mission-block-1">
                  <ul>
                    <li>
                      To source and supply the best quality, value added and
                      ecofriendly chemicals and process to customers of the
                      industries we operate in so that we can promote natural
                      decomposition to reduce carbon footprint, to reduce water
                      and energy consumption to overcome the challenges of
                      global warming.
                    </li>
                    <li>
                      To develop and to retain customers committed to quality
                      and consistent purchase behavior.
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div className="vision-group value-group-2 position-relative">
              <div className="value-block position-absolute">
                <h3><br/></h3>
                <div className="value-block-1">
                  <ul>
                    <p>
                      Our core values define what we stand for, whom we work
                      with and how we interact with colleagues, customers,
                      principles, shareholders and others stakeholders. Our core
                      values are:
                    </p>
                    <li>Passion for quality partners</li>
                    <li>Accountability</li>
                    <li>Promises and commitments.</li>
                    <li>Professional Attitude and ethics.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="mobile-view">
          <div className="custom-shape">
            <img
              src="/custom_shape/Asset-2.png"
              className="shape-image1"
              alt="Custom Shape"
            />
          </div>

          <div className="text-center container">
            <p
              className="background-title text-center mt-5"
              style={{ color: "#fff" }}
            >
              MISSION, VISION & VALUES
            </p>
          </div>

          <div className="container">
            <div className="row">
              <div className="col-lg-6">
                <div className="text-center">
                  <img
                    src="/aboutus/vision.svg"
                    alt=""
                    className="img-fluid w-25"
                  />
                </div>
              </div>

              <div className="col-lg-6">
                <div>
                  <p className="vmv-title"><br/></p>
                  <div className="vision-block-only">
                    <ul>
                      <li>
                        To become the first choice of customers for a value
                        added, ecofriendly chemicals and process.{" "}
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div className="col-lg-6">
                <div className="text-center">
                  <img
                    src="/aboutus/mission.svg"
                    alt=""
                    className="img-fluid w-25"
                  />
                </div>
              </div>

              <div className="col-lg-6">
                <div>
                  <p className="vmv-title"><br/></p>
                  <div className="vision-block-only">
                    <ul>
                    <li>
                      To source and supply the best quality, value added and
                      ecofriendly chemicals and process to customers of the
                      industries we operate in so that we can promote natural
                      decomposition to reduce carbon footprint, to reduce water
                      and energy consumption to overcome the challenges of
                      global warming.
                    </li>
                    <li>
                      To develop and to retain customers committed to quality
                      and consistent purchase behavior.
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div className="col-lg-6">
                <div className="text-center">
                  <img
                    src="/aboutus/value.svg"
                    alt=""
                    className="img-fluid w-25"
                  />
                </div>
              </div>

              <div className="col-lg-6">
                <div>
                  <p className="vmv-title"><br/></p>
                  <div className="vision-block-only">
                    <ul>
                    <p>
                      Our core values define what we stand for, whom we work
                      with and how we interact with colleagues, customers,
                      principles, shareholders and others stakeholders. Our core
                      values are:
                    </p>
                    <li>Passion for quality partners</li>
                    <li>Accountability</li>
                    <li>Promises and commitments.</li>
                    <li>Professional Attitude and ethics.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div className="custom-shape-box">
        <img
          src="/custom_shape/shape-4.png"
          className="custom-shape-image-2"
          alt="Custom Shape"
        />
      </div>

      <section>
          <div className="company-history-point" data-aos="fade-up">
            <p className="h2 katalyst-history-headline text-center">
              Why Choose Us
            </p>
            {/* <p
              className="history-short-description text-center"
              style={{ color: "#ec008c" }}
            >
              OUR JOURNEY FOR THE LAST 10 YEARS WAS ALL ABOUT EXPLORING NEW
              FRONTIERS
            </p> */}
            <div className="d-sm-flex justify-content-around pt-3">
              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-trophy fa-3x"></i>
                  <p>
                    Quality <br /> Products
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fad fa-dollar-sign fa-3x"></i>
                  <p>
                    Competitive <br /> price
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fad fa-ship fa-3x"></i>
                  <p>
                    In time <br /> shipment
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-user-friends fa-3x"></i>
                  <p>
                    Our outstanding <br /> services
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
    </>
  );
}

export default Aboutus;
