import React from "react";
import RellaxWrapper from "react-rellax-wrapper";
import { Link } from "react-router-dom";

function Product_Details() {
  return (
    <>
      <section>
        <div>
          <div className="container">
            <div className="row">
              <div className="col-md-6">

              </div>

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
