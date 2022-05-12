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
        <img src="/contact/11.png" className="shape-image" />
        {/* <img src="/contact/ssspill.svg" className="shape-image"/> */}
      </div>

      <section className="texture">
        <div className="container">
          <h1 className="contact-map-headline text-center">
            Get Deriction From Here
          </h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.55595227125!2d90.39212758190097!3d23.779029125217203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71753b4db3b%3A0x156c1948da30a377!2s71%20Foundation!5e0!3m2!1sen!2sbd!4v1652345710721!5m2!1sen!2sbd" width="100%" height="250" style={{ border:0 }} allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
    </>
  );
}

export default ContactUs;
