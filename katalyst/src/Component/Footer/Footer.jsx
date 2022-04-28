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
              <div className="col-md-4">
                <h3 className="text-white">Touch With Us</h3>
                <p>address</p>
                <p>Phone</p>
                <p>email</p>
              </div>
              <div className="col-md-4">
                <h3 className="text-white">Quick Link</h3>
                <Link  to="/">
                  Terms and Conditions
                </Link>
                <Link to="/">
                  Privacy Policy
                </Link>
                <Link to="/">
                  Career
                </Link>
              </div>

              <div className="col-md-4">
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
                <h3 className="text-white">Facebook Page</h3>
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
