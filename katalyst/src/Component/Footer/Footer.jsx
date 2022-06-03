import React, { useEffect, useState } from "react";
import "./footer.css";
import { Link } from "react-router-dom";
import countapi from "countapi-js";

import CountUp from "react-countup";
function Footer() {
 
  const [countamount, setCountamount] = useState("");

  // const fetchdata = async () => {
  //   await axios.get(`https://api.countapi.xyz/update/katalystbd.com/katalystbanglagesh?amount=1`).then(({data}) => {
  //     setCountamount(data);
  //     console.log(data)
  //   })
  // }
  // useEffect(() => {
  //   fetchdata();
  // }, []);
  useEffect(() => {
    countapi.update('katalystbd.com','katalystbanglagesh', 1).then((result) => {
      setCountamount(result);
    });
  },[])
  
  return (
    <>
      <section>
        <div className="footer">
          <div className="container ">
            <div className="row pt-4">
              <div className="col-lg-8">
                <h5 className="text-white"><i className="fad fa-align-right" style={{ color: "#EC008C" }}></i> <span className="footer-headline">Contact Us</span></h5>
                <span><i className="fas fa-map-marker-alt" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text"  href="https://goo.gl/maps/fNXbEh9e6tEeKg718">&nbsp;House# 428A (3rd Floor), Road# 30, New DOHS Mohakhali, Dhaka</a></span><br />
                <span><i className="fas fa-phone-office" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text" href="tel:+880248811048">&nbsp;(+880) 248811048-49</a></span><br />
                <span><i className="fas fa-mobile-alt" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text" href="tel:+8801713090871">&nbsp;(+880) 1713-090871</a><span className="text-white"> ,</span> <a className="touch-with-us-text" href="tel:+8801318321617">&nbsp;(+880) 1318-321617</a></span><br />
                {/* <p><i className="fas fa-mobile-alt" style={{color: "#65C18C"}}></i> <a className="touch-with-us-text" href="tel:+8801318321617">&nbsp;(+880) 1318-321617</a></p> */}
                <span><i className="fas fa-envelope" style={{color: "#65C18C"}}></i><a className="touch-with-us-text" href="mailto:ashish.chakrabartty@katalystbd.com">&nbsp;ashish.chakrabartty@katalystbd.com</a></span>
              </div>

              {/* <div className="col-lg-4">
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
              </div> */}

              <div className="col-lg-4">
                <h5 className="text-white"><i className="fad fa-align-right"style={{ color: "#EC008C" }}></i> <span className="footer-headline"> Social Link</span></h5>
                <div>
                  <div className="effect aeneas">
                    <div className="buttons">
                    <Link to="/" className="fb" title="Join us on Facebook"><i className="fab fa-facebook" aria-hidden="true"></i></Link>
                    <Link to="/" className="youtube" title="Join us on Facebook"><i className="fab fa-youtube"></i></Link>
                    <Link to="/" className="linkedin" title="Join us on Facebook"><i className="fab fa-linkedin"></i></Link>
                    </div>
                  </div>
                  <div>
                    <div className="visitorcounter mt-3">
                      <div className="text-light"><span className="counter-text">Total Visited:</span> <span className="visitor-amount"><CountUp end={countamount.value}></CountUp></span></div>
                      {/* <div className="text-light"><span className="counter-text">Total Visited:</span> <span className="visitor-amount">120</span></div> */}
                    </div>
                  </div>
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="footer2">
          <p className="text-center footer-text my-auto pb-2">
            Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All
            Rights Reserved | <small>Developed by Hasibul Hasan</small>
          </p>
        </div>
      </section>
    </>
  );
}

export default Footer;
