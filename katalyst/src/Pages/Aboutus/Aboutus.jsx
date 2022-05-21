import React from "react";
import RellaxWrapper from "react-rellax-wrapper";
import "./aboutus.css";
import { ProgressBar } from "react-bootstrap";

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
          <h5 className="text-center item--title">
            If you need any service please contact us, we will try our best to
            answer
          </h5>
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
                <RellaxWrapper speed={4} className="text-center">
                  <div className="history-img mx-auto my-auto">
                    <div className="history-image-shape">
                      <img
                        src="/aboutus/aboutus-img-1.jpg"
                        alt=""
                        className="img-fluid shadow history-side-image"
                      />
                    </div>
                  </div>
                </RellaxWrapper>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="aboutus-mission-vision ">
        <div className="custom-shape">
          <img
            src="/custom_shape/Asset-2.png"
            className="shape-image1"
            alt="Custom Shape"
          />
        </div>

        <div className="container pt-5 pb-5">
          <div className="row">
            <div className="col-lg-4 border-box-1"></div>

            <div className="col-lg-4 border-box-2 my-auto" data-aos="fade-up">
              <p className="mission-title text-center mt-3">Mission</p>
              <ul>
                <li>
                  To source and supply the best quality, value added and
                  ecofriendly chemicals and process to customers of the
                  industries we operate in so that we can promote natural
                  decomposition to reduce carbon footprint, to reduce water and
                  energy consumption to overcome the challenges of global
                  warming.{" "}
                </li>
                <li>
                  To develop and to retain customers committed to quality and
                  consistent purchase behavior.
                </li>
              </ul>
            </div>

            <div className="col-lg-4 border-box-3"></div>

            <div className="col-lg-4 border-box-4" data-aos="fade-up">
              <p className="mission-title text-center pt-3">Vision</p>
              <p className="text-white">
                To become the first choice of customers for a value added,
                ecofriendly chemicals and process.{" "}
              </p>
            </div>

            <div className="col-lg-4 border-box-5 text-center "></div>
            <div className="col-lg-4 border-box-6" data-aos="fade-up">
              <p className="mission-title text-center pt-3">Values</p>
              <p>
                Our core values define what we stand for, whom we work with and
                how we interact with colleagues, customers, principles,
                shareholders and others stakeholders. Our core values are:
              </p>
              <ul>
                <li>Passion for quality partners</li>
                <li>Accountability</li>
                <li>Promises and commitments.</li>
                <li>Professional Attitude and ethics.</li>
              </ul>
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

      <section className="pb-5">
        <div className="container">
          <div className="row">
            <div className="col-md-6">
              <p className="why-choose-us-title">WHY CHOOSE US</p>
              <p className="why-choose-us-subtitle">
                Our Company has 10 years experience in this sector
              </p>
              <p className="why-choose-us-description">
                Our Company is working relentlessly to develop business
                relationship with customers of the said industries.
              </p>
            </div>

            <div className="col-md-6">
              <span className="why-choose-us-progress-bar-title">Product Supply</span>
              <div className="progress">
                <div
                  className="progress-bar bg-info progress-bar-animated progress-bar-striped"
                  role="progressbar"
                  style={{ width: "100%" }}
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  100%
                </div>
              </div>

              <br />

              <span className="why-choose-us-progress-bar-title">Product Qulity</span>
              <div className="progress">
                <div
                  className="progress-bar progress-bar-animated progress-bar-striped"
                  role="progressbar"
                  style={{ width: "95%",backgroundColor:'#242F9B' }}
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  95%
                </div>
              </div>

              <br />

              <span className="why-choose-us-progress-bar-title">Customer Satisfaction</span>
              <div className="progress">
                <div
                  className="progress-bar progress-bar-animated progress-bar-striped"
                  role="progressbar"
                  style={{ width: "99%" , backgroundColor:'#FF5D5D'}}
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  
                >
                  99%
                </div>
              </div>


            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default Aboutus;
