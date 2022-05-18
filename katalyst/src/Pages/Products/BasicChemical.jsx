import React from "react";
import { Link } from "react-router-dom";
import "./product.css";

function BasicChemical() {
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
            Product Info
          </h1>
          <h5 className="text-center item--title">
          Produce with the highest quality of material ,provide the best service
          </h5>
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>
      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>
      <section className="pt-5">
        <div className="container">
          <p className="basic-chemicals-title">Basic Chemical</p>
          <p className="basic-chemicals-subtitle">
            Filler text is text that shares some characteristics of a real
            written text, but is random or otherwise generated.
          </p>

          <div className="row mt-5 mb-5">
            <div className="col-md-4 col-sm-6 pb-3">
              <div className="box">
                <img
                  src="/product/Picture 002.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Soda Ash Light</h3>
                  {/* <span className="post">Web designer</span> */}
                </div>
                <ul className="icon">
                  <li>
                    <Link to="/product/details" className="see-more ">
                      See More
                    </Link>
                  </li>
                </ul>
              </div>
            </div>

            <div className="col-md-4 col-sm-6 pb-3">
              <div className="box">
                <img
                  src="/product/Picture 002.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Soda Ash Dense</h3>
                  {/* <span className="post">Web designer</span> */}
                </div>
                <ul className="icon">
                  <li>
                    <Link to="/product/details" className="see-more ">
                      See More
                    </Link>
                  </li>
                </ul>
              </div>
            </div>

            <div className="col-md-4 col-sm-6 pb-3">
              <div className="box">
                <img
                  src="/product/Picture 04.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Anhydrous Sodium Sulfate</h3>
                  {/* <span className="post">Web designer</span> */}
                </div>
                <ul className="icon">
                  <li>
                    <Link to="/product/details" className="see-more ">
                      See More
                    </Link>
                  </li>
                </ul>
              </div>
            </div>

            <div className="col-md-4 col-sm-6 pb-3">
              <div className="box">
                <img
                  src="/product/Picture 005.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Sodium Metabisulphite</h3>
                  {/* <span className="post">Web designer</span> */}
                </div>
                <ul className="icon">
                  <li>
                    <Link to="/product/details" className="see-more ">
                      See More
                    </Link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default BasicChemical;
