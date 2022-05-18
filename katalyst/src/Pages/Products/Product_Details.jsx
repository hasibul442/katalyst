import React from "react";
import RellaxWrapper from "react-rellax-wrapper";
import { Link } from "react-router-dom";

function Product_Details() {
  return (
    <>
      <div className="product-bg">
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
            Soda Ash Dense
          </h1>
          {/* <h5 className="text-center item--title">
            Produce with the highest quality of material ,provide the best
            service
          </h5> */}
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>
      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section>
        <div>
          <div className="container">
            <div className="row">
              <div className="col-md-6"></div>

              <div className="col-md-6">
                <RellaxWrapper speed={2}>
                  <div className="product-details-round-img-block text-center mt-5">
                    <img
                      src="/details_product/round-img.jpg"
                      alt=""
                      className="img-fluid product-details-round-image"
                    />
                  </div>
                </RellaxWrapper>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default Product_Details;
