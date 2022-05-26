import React, { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import RellaxWrapper from "react-rellax-wrapper";
// import { Link } from "react-router-dom";
import AOS from "aos";
import "aos/dist/aos.css";

import Slider from "react-slick/lib/slider";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import axios from "axios";

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
          initialSlide: 0,
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
 
  const { id } = useParams();

  const [basicchemical1, setBasicChemicalDetails] = useState("");
  const fetchProduct = async () => {
    await axios
      .get(`https://katalystbd.com/admin/api/basic-chemical/details/${id}`)
      .then(({ data }) => {
        setBasicChemicalDetails(data.basicchemicals1);
        // console.log(data)
      });
  };
  useEffect(() => {
    fetchProduct();
  },[]);


  const [basicchemical, setBasicChemical] = useState([]);

  useEffect(() => {
    fetchBasicChemical();
  }, []);

  const fetchBasicChemical = async () => {
    await axios
      .get(`https://katalystbd.com/admin/api/basic-chemicals`)
      .then(({ data }) => {
        setBasicChemical(data);
      });
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
              { basicchemical1.chemical_name}
            </h1>
          </div>
        </div>
        <div className="custome-shape">
          <img
            src="/contact/11.png"
            className="shape-image"
            alt="Custom Shape"
          />
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
                          src={`https://katalystbd.com/admin/assets/image/basicchemicals/${basicchemical1.chemical_image}`}
                          alt={ basicchemical1.chemical_name}
                          className="img-fluid product-details-octa-image"
                        />
                      </div>
                    </div>
                  </RellaxWrapper>
                </div>

                <div className="col-md-6" data-aos="fade-up">
                  <h1 className="product-description-title">
                    <i className="fab fa-audible"></i> Product Description
                  </h1>
                  <div className="product-description">
                    {/* {parser(basicchemical1.description)} */}
                    <p dangerouslySetInnerHTML={{__html: basicchemical1.description}}></p>
                  </div>
                  <br />
                  <br />
                  <br />
                  <h1 className="product-description-title">
                    <i className="fad fa-biohazard"></i> Application Area
                  </h1>
                  <p className="product-description">{basicchemical1.application}</p>
                  {/* <p className="product-description">{basicchemical1.chemical_image}</p> */}
                </div>
              </div>
            </div>
          </div>
        </section>

      {/* related Product */}
      <section className="mb-5  texture-1">
        <div className="container">
          <h1 className="product-description-title">Related Product</h1>
          <Slider {...settings}>
            {basicchemical.length > 0 && 
              basicchemical.map((item) =>(
                <div key={item.id}>
                <div className="box m-2">
                  <img
                    src={`https://katalystbd.com/admin/assets/image/basicchemicals/${item.chemical_image}`}
                    style={{ height: "300px" }}
                    alt="Product"
                  />
                  <div className="box-content">
                    <h3 className="title">{item.chemical_name}</h3>
                    {/* <span className="post">Web designer</span> */}
                  </div>
                  <ul className="icon">
                  <li>
                        <p className="short_description">
                          {item.short_description}
                        </p>
                      </li>
                    <li>
                      <Link to={`/basic-chemical/details/${item.id}`} onClick ={() =>window.location.href(`/basic-chemical/details/${item.id}`)} className="see-more ">
                        See More
                      </Link>
                    </li>
                  </ul>
                </div>
              </div>
              ))
            }


          </Slider>
        </div>
      </section>
    </>
  );
}

export default Product_Details;
