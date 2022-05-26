import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";

import "bootstrap/dist/css/bootstrap.min.css";

import "./homepage.css";
import "./../custom.css";

import RellaxWrapper from "react-rellax-wrapper";

import AOS from "aos";
import "aos/dist/aos.css";

// import CountUp from "react-countup";
import { Carousel } from "react-bootstrap";

import Slider from "react-slick/lib/slider";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import axios from "axios";
import "animate.css";
function Homepage() {
  const settings = {
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 2000,
    slidesToShow: 3,
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

  AOS.init({
    duration: 800,
    delay: 200,
    mirror: true,
  });

  const [banners, setBanners] = useState([]);
  const fetchData = async () => {
    const response = await fetch("https://katalystbd.com/admin/api/banner");
    const data = await response.json();
    setBanners(data);
    console.log(data);
  };

  useEffect(() => {
    fetchData();
  }, []);

  const [basicchemical, setBasicChemical] = useState([]);

  useEffect(() => {
    fetchBasicChemical();
  }, []);

  const fetchBasicChemical = async () => {
    await axios
      .get(`https://katalystbd.com/admin/api/basic-chemicals`)
      .then(({ data }) => {
        setBasicChemical(data);
        console.log(data);
      });
  };
  return (
    <>
      <section className="carousel-section">
        {banners.length > 0 && (
          <Carousel>
            {banners.map((banner) => (
              <Carousel.Item key={banner.id}>
                <img
                  className="d-block w-100"
                  style={{ height: "650px" }}
                  src={`https://katalystbd.com/admin/assets/image/banner/${banner.image}`}
                  alt="Banner_Photo"
                />
                <Carousel.Caption fade={true}>
                  <h2 className="animate__animated animate__bounceInDown">
                    {banner.title}
                  </h2>
                </Carousel.Caption>
              </Carousel.Item>
            ))}
          </Carousel>
        )}
      </section>

      <section className="custome-shape">
        <img
          src="/custom_shape/11.png"
          className="shape-image"
          alt="Custom Shape"
        />
      </section>

      <section className="texture-1">
        <div className="container">
          <div className="row">
            <div className="col-md-6">
              <RellaxWrapper speed={2} className="text-center">
                <div className="history-img mx-auto my-auto">
                  <div className="history-image-shape">
                    <img
                      src="/homepage/homepage-1.jpg"
                      alt=""
                      className="img-fluid shadow history-side-image"
                    />
                  </div>
                </div>
              </RellaxWrapper>
            </div>

            <div className="col-md-6 my-auto" data-aos="fade-up">
              <p className="h2 katalyst-history-headline">OUR STORIES</p>
              <p className="history-short-description">
                Katalyst Bangladesh, is a partnership entity of four
                professionals having academic background of Textile Engineering
                and Biochemistry with combined pharmaceutical and textile
                experiences of more than 75 years. has been established in early
                2019 considering the growth potentiality of textile dyeing and
                washing industries.
              </p>

              <div>
                <Link to="/about-us" className="learn-more button-style-2">
                  <span className="circle" aria-hidden="true">
                    <span className="icon arrow"></span>
                  </span>
                  <span className="button-text">Learn More</span>
                </Link>
              </div>
            </div>
          </div>
        </div>

        <section>
          <div className="company-history-point" data-aos="fade-up">
            <p className="h2 katalyst-history-headline text-center">
              Our Strength
            </p>
            <p
              className="history-short-description text-center"
              style={{ color: "#ec008c" }}
            >
              OUR JOURNEY FOR THE LAST 10 YEARS WAS ALL ABOUT EXPLORING NEW
              FRONTIERS
            </p>
            <div className="d-sm-flex justify-content-around pt-3">
              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-trophy fa-3x"></i>
                  <p>
                    Quality <br /> Products
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fad fa-dollar-sign fa-3x"></i>
                  <p>
                    Competitive <br /> price
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fad fa-ship fa-3x"></i>
                  <p>
                    In time <br /> shipment
                  </p>
                </div>
              </div>

              <div className="pb-2">
                <div className="text-center">
                  <i className="fas fa-user-friends fa-3x"></i>
                  <p>
                    Our outstanding <br /> services
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>

      <section className="mt-5 texture-1">
        <div className="container pt-5">
          <div className="homepage-product-left-block">
            <h2 className="katalyst-history-headline text-center">
              Types Of Product
            </h2>
            <p className="text-center pb-4">
              For over 10 years, the Katalyst family has been building
              relationships with many Company. Our core values define what we
              stand for, whom we work with and how we interact with colleagues,
              customers, principles, shareholders and others stakeholders.
            </p>
            {/* <Link to="/basic-chemicals" className="learn-more button-style-2">
              <span className="circle" aria-hidden="true">
                <span className="icon arrow"></span>
              </span>
              <span className="button-text">Learn More</span>
            </Link> */}
          </div>
          <div className="row">
            <div className="col-lg-4">
              <div className="product-box mb-2 mt-2">
                <img
                  src="/product/Product-type-1.jpg"
                  alt=""
                  className="img-fluid"
                />
                <h3 className="title pt-3">Basic Chemical</h3>
                <div className="box-content">
                  <span className="post">
                    Our Basic Chemicals Are: Soda Ash, Glauber Salt, Sodium
                    Metabisulphite, Acetic Acid etc.
                  </span>
                  <Link
                    to="/basic-chemicals"
                    className="learn-more button-style-2"
                  >
                    <span className="circle" aria-hidden="true">
                      <span className="icon arrow"></span>
                    </span>
                    <span className="button-text text-light">Learn More</span>
                  </Link>
                </div>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="product-box mb-2 mt-2">
                <img
                  src="/product/Product-type-2.jpg"
                  alt=""
                  className="img-fluid"
                />
                <h3 className="title pt-3">Auxiliary Chemicals</h3>
                <div className="box-content">
                  <span className="post">
                    We Also Provide A lot of Other Chemicals Like: Enzyme, Eco
                    Bleach, Micro Silicone, Ect.{" "}
                  </span>
                  <Link
                    to="/auxiliarychemicals"
                    className="learn-more button-style-2"
                  >
                    <span className="circle" aria-hidden="true">
                      <span className="icon arrow"></span>
                    </span>
                    <span className="button-text text-light">Learn More</span>
                  </Link>
                </div>
              </div>
            </div>

            <div className="col-lg-4">
              <div className="product-box mb-2 mt-2">
                <img
                  src="/product/Product-type-3.jpg"
                  alt=""
                  className="img-fluid"
                />
                <h3 className="title pt-3">Dyestuffs</h3>
                <div className="box-content">
                  <span className="post">
                    We Provide three Type of Dyestuffs: Naturel Dyes, Vat Dyes,
                    Sulphur Dyes. Every Category also have lot of color.{" "}
                  </span>
                  <Link to="/dyestuff" className="learn-more button-style-2">
                    <span className="circle" aria-hidden="true">
                      <span className="icon arrow"></span>
                    </span>
                    <span className="button-text text-light">Learn More</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="tranging-product-section mt-5">
        <div className="custom-shape">
          <img
            src="/custom_shape/Asset-2.png"
            className="shape-image1"
            alt="Custom Shape"
          />
        </div>
        <div className="container pb-5">
          <p className="tranding-product-title text-center">Tranding Product</p>

          <Slider {...settings}>
            {basicchemical.length > 0 &&
              basicchemical.map((item, key) => (
                <div key={item.id}>
                  <div className="box m-2">
                    <img
                      src={`https://katalystbd.com/admin/assets/image/basicchemicals/${item.chemical_image}`}
                      style={{ height: "400px" }}
                      alt="Product"
                    />
                    <div className="box-content">
                      <h3 className="title">{item.chemical_name}</h3>
                    </div>
                    <ul className="icon">
                      <li>
                        <p className="short_description">
                          {item.short_description}
                        </p>
                      </li>
                      <li>
                        <Link
                          to={`/basic-chemical/details/${item.id}`}
                          className="see-more "
                        >
                          See More
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
              ))}

            <div>
              <div className="box m-2">
                <img
                  src="/product/auxiliary_chemicals.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Auxiliary Chemicals</h3>
                </div>
                <ul className="icon">
                  <li>
                    <p className="short_description">
                      We also import Other type of Chemicals like Different type
                      of Enzyme, Micro Silicone, Scouring Agent ect.
                    </p>
                  </li>
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
                  src="/product/dyestuffs.jpg"
                  style={{ height: "400px" }}
                  alt="Product"
                />
                <div className="box-content">
                  <h3 className="title">Dyestuffs</h3>
                  {/* <span className="post">Web designer</span> */}
                </div>
                <ul className="icon">
                  <li>
                    <p className="short_description">
                      We also provide many type of Dyestuffs. Our Dyestuffs
                      Qulity Are 100% good. We had A lot of option a lot of
                      color
                    </p>
                  </li>
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

export default Homepage;
