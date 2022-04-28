import React from "react";
import "./footer.css";
import { Link } from "react-router-dom";
function Footer() {
  return (
    <>
      <section>
        <div className="footer">
          <img
            src="/footer/Untitled-1.png"
            className="img-fluid footer-image"
          />

          <div className="row">
            <div className="col-md-6">
              <div className="centered">
                <div className="text-center">
                  <div className="social-container">
                    <ul className="social-icons">
                      <li>
                        <a href="#">
                          <i className="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i className="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i className="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i className="fab fa-linkedin"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i className="fab fa-codepen"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <p className="text-center footer-text">
              Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All
              Rights Reserved
            </p>
          </div>
        </div>
      </section>
    </>
  );
}

export default Footer;
