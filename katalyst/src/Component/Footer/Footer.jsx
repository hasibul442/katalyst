import React from "react";
import './footer.css';
import { Link } from "react-router-dom";
function Footer() {
  return (
    <>
      <section>
        <div className="footer">
          <img src="/footer/Untitled-1.png" className="img-fluid" style={{ height: '150px', width: '100%' }}/>
          <div className="centered">
          <div>
            <div className="social-container">
              <ul className="social-icons">
                  <li><a href="#"><i className="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i className="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i className="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i className="fab fa-linkedin"></i></a></li>
                  <li><a href="#"><i className="fab fa-codepen"></i></a></li>
              </ul>
            </div>
          </div>
          <p className="text-center footer-text pt-2 pb-2">
            Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All Rights
            Reserved
          </p>
          </div>
        </div>
        {/* <div className="footer2">
          <p className="text-center footer-text pt-2 pb-2">
            Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All Rights
            Reserved
          </p>

        </div> */}
      </section>
    </>
  );
}

export default Footer;
