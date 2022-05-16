import React from "react";
import "./contactus.css";

function ContactUs() {
  return (
    <>
      <div className="contact-bg">
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
            Contact Us
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

      <section className="texture">
        <div className="container">

          <div className="pt-5">
            <div className="row">
              <div className="col-md-6">

              <h1 className="contact-us-headline text-center">Message Us</h1>
              <p className="text-center">If you wish to be considered for employment at Weifield, please do not send a message, here – instead, please complete Weifield’s job application  and our Human Resources department will contact you after their review of your submitted information.</p>

              </div>

              <div className="col-md-6 pt-4">
                <div>
                  <form>
                    <div class="pb-3">
                        <input type="text" class="form-control" placeholder="Name"/>
                    </div>
                    <div class="row pb-3">
                      <div class="col">
                        <input type="email" class="form-control" placeholder="Email"/>
                      </div>
                      <div class="col">
                        <input type="phone" class="form-control" placeholder="Phone Number"/>
                      </div>
                    </div>

                    <div class="pb-3">
                        <textarea class="form-control" placeholder="Message" rows={5}></textarea>
                    </div>

                    <div class="pb-3 text-center">
                        <button className="btn btn-primary button-style">
                          <span>Send Message</span>
                          <div class="wave"></div>
                        </button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div className="contactinfo">
          <div className="container">
            <h1 className="get-in-touch">Get In Touch</h1>
            <div className="row pt-5">

              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                  <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <h3 className="address-headline">Address</h3>
                    <p className="text-white">House # 428 (A); Road # 30 <br/>New DOHS, Mohakhali,<br/>Dhaka-1206</p>
                  </div>
                </div>
              </div>

              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                  <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-phone-alt text-white"></i>
                    </div>
                    <h3 className="address-headline">Phone</h3>
                    <p className="text-white">Telephone : +88 02 48811048-490 <br/>Mobile : +88 01713090871 <br/>Mobile : +88 01318 321617</p>
                  </div>
                </div>
              </div>

              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                  <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-comment-alt-dots text-white"></i>
                    </div>
                    <h3 className="address-headline">Email</h3>
                    <p className="text-white">indrojite.roy@movingmachinesbd.com</p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div>
            <h1 className="contact-map-headline text-center">
              Get Deriction From Here
            </h1>
            <div className="pt-3">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.55595227125!2d90.39212758190097!3d23.779029125217203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71753b4db3b%3A0x156c1948da30a377!2s71%20Foundation!5e0!3m2!1sen!2sbd!4v1652345710721!5m2!1sen!2sbd"
                width="100%"
                height="250"
                style={{ border: 0 }}
                allowFullScreen=""
                title="Google Map Location"
                loading="lazy"
                referrerPolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
      </section>
    </>
  );
}

export default ContactUs;
