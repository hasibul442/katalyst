import React from "react";
import "./footer.css";
import { Link } from "react-router-dom";
function Footer() {
  return (
    <>
      <section>
        <div className="footer">
          <div className="container ">
            <div className="row pt-4">
              <div className="col-lg-4">
                <h4 className="text-white"><i className="fad fa-align-right" style={{ color: "#EC008C" }}></i> <span className="footer-headline">Touch With Us</span></h4>
                <p><i className="fas fa-map-marker-alt" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text" href="https://goo.gl/maps/QNrxwQM1xndLCwoCA">&nbsp;House# 428A (3rd Floor), Road# 30, New DOHS Mohakhali, Dhaka</a></p>
                <p><i className="fas fa-mobile-alt" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text" href="tel:+8801318321616">&nbsp;(+880) 1318-321616</a></p>
                <p><i className="fas fa-envelope" style={{color: "#65C18C"}}></i><a className="touch-with-us-text" href="mailto:indrojite.roy@movingmachinesbd.com">&nbsp;indrojite.roy@movingmachinesbd.com</a></p>
              </div>

              <div className="col-lg-4">
                <h4 className="text-white"><i className="fad fa-align-right"style={{ color: "#EC008C" }}></i> <span className="footer-headline"> Quick Link</span></h4>
                <Link  to="/terms-and-condition" className="quick-link-text">
                  Terms and Conditions
                </Link>
                <Link to="/privacy-policy" className="quick-link-text">
                  Privacy Policy
                </Link>
                <Link to="/career" className="quick-link-text">
                  Career
                </Link>
              </div>

              <div className="col-lg-4">
                {/* <div className="social-container">
                  <div className="d-inline-flex flex-column social-icons">
                    <div className="d-flex justify-content-center">
                      <a className="social-link" href="#">
                        <i className="fab fa-facebook"></i>
                      </a>
                      <div className="text-white">
                        <div
                          className="fb-like"
                          data-href="https://www.facebook.com/Cinepatchal/"
                          data-width="100"
                          data-layout="button_count"
                          data-action="like"
                          data-size="small"
                          data-share={true}
                          data-lazy={true}
                          data-colorscheme="dark"
                        ></div>
                      </div>
                    </div>


                    <div className="">
                      <a className="social-link" href="#">
                        <i className="fab fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div> */}
                <h4 className="text-white"><i className="fad fa-align-right"style={{ color: "#EC008C" }}></i> <span className="footer-headline"> Facebook Page</span></h4>
                <div>
                  <div
                    className="fb-page"
                    data-href="https://www.facebook.com/Cinepatchal/"
                    data-tabs="aboot"
                    data-width=""
                    data-height=""
                    data-small-header={true}
                    data-adapt-container-width={true}
                    data-hide-cover={false}
                    data-show-facepile={true}
                  >
                    <blockquote
                      cite="https://www.facebook.com/Cinepatchal/"
                      className="fb-xfbml-parse-ignore"
                    >
                      <a href="https://www.facebook.com/Cinepatchal/">
                        Cinepatchal
                      </a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="footer2">
          <p className="text-center footer-text my-auto pb-2">
            Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All
            Rights Reserved
          </p>
        </div>
      </section>
    </>
  );
}

export default Footer;
