import React from "react";
import "./partners.css";

function Partners() {
  return (
    <>
      <div className="partner-bg">
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
            Partners
          </h1>
          <h5 className="text-center item--title">
          Future-focussed business strategy and financial management by Partner
          </h5>
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>

      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section className="texture">
            <div className="pt-5">
              <h3 className="text-center contact-us-headline">Meet Our Partners</h3>
            </div>

            <div className="container">
              <div className="row">
                <div className="col-md-4">
                  <img src="/partner/1.png" alt="" className="img-fluid"/>
                </div>
              </div>
            </div>
      </section>
    </>
  );
}

export default Partners;
