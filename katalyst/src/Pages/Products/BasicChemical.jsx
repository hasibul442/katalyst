import React from "react";
import { Link } from "react-router-dom";
import "./product.css";

function BasicChemical() {
  return (
    <>
      <section className="pt-5">
        <div className="container">
            <p className="basic-chemicals-title">Basic Chemical</p>
            <p className="basic-chemicals-subtitle">Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.</p>

          <div className="row mt-5 mb-5">
            <div className="col-md-4 col-sm-6 pb-3">
              <div className="box">
                <img src="/product/Picture 002.jpg" style={{ height:'400px' }} alt="Product"/>
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
                <img src="/product/Picture 002.jpg" style={{ height:'400px' }} alt="Product"/>
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
                <img src="/product/Picture 04.jpg" style={{ height:'400px' }} alt="Product"/>
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
                <img src="/product/Picture 005.jpg" style={{ height:'400px' }} alt="Product"/>
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
