import React from "react";
import { Link } from "react-router-dom";
import RellaxWrapper from "react-rellax-wrapper";
// import { Link } from "react-router-dom";
import AOS from "aos";
import "aos/dist/aos.css";

import Slider from "react-slick/lib/slider";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

function Product_Details() {
  AOS.init({
    duration: 800,
    delay: 200,
    mirror: true,
  });
  const settings = {
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 1,
    initialSlide: 0,
    lazyLoad: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };
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

      <section className="mt-5 texture-1">
        <div>
          <div className="container">
            <div className="row">
              <div className="col-md-6">
              <RellaxWrapper speed={2}>
                  <div className="product-details-octa-img-block text-center mt-5">
                    <div className="product-details-octa-img-block2">
                      <img
                        src="/details_product/round-img.jpg"
                        alt=""
                        className="img-fluid product-details-octa-image"
                      />
                    </div>
                  </div>
                </RellaxWrapper>
              </div>

              <div className="col-md-6" data-aos="fade-up">
                <h1 className="product-description-title"><i className="fab fa-audible"></i> Product Description</h1>
                <div className="product-description">
                <ul>
                  <li>Consumption is 1/8 times lower than the conventional soda ash light</li>
                  <li>The use of water is less, it also saves energy</li>
                  <li>It reduces the burden of waste water treatment and fully achieves the goal of environmental protection, energy saving, low consumption and lower production cost. </li>
                  <li>Even if the water quality is poor, there is no white spot on the cloths as like as the white spot arises due to the use of Soda Ash Light</li>
                  <li>Cost is remarkably lower than the conventional soda ash light (05 times lower)</li>
                  <li>Easy management</li>
                </ul>
                </div>
<br /><br /><br />
                <h1 className="product-description-title"><i className="fad fa-biohazard"></i> Application Area</h1>
                <p className="product-description">Textile Industry</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="mb-5">
        <div className="container">
          <h1 className="product-description-title">Related Product</h1>
          <Slider {...settings}>
            <div>
              <div className="box m-2">
                <img
                  src="/product/Picture 002.jpg"
                  style={{ height: "300px" }}
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

            <div>
              <div className="box m-2">
              <img
                  src="/product/Picture 0002.jpg"
                  style={{ height: "300px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Anhydrous Sodium Sulfat</h3>
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

            <div>
              <div className="box m-2">
              <img
                  src="/product/Picture 04.jpg"
                  style={{ height: "300px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Anhydrous Sodium Sulfat</h3>
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

            <div>
              <div className="box m-2">
                <img
                  src="/product/Picture 08.jpg"
                  style={{ height: "300px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Natural Dyes</h3>
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

            <div>
              <div className="box m-2">
                <img
                  src="/product/Picture 07.jpg"
                  style={{ height: "300px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Auxiliary Chemicals</h3>
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

          </Slider>
        </div>
      </section>
    </>
  );
}

export default Product_Details;
