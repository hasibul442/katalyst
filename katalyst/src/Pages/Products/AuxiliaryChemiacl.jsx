import React, { useEffect, useState } from "react";
import "./product.css";
import "./../custom.css";
import RellaxWrapper from "react-rellax-wrapper";
import axios from "axios";
import { Link } from "react-router-dom";

import Slider from "react-slick/lib/slider";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

import AOS from "aos";
import "aos/dist/aos.css";

function AuxiliaryChemiacl() { 

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

    const [auxiliarychemical, setAuxiliaryChemical] = useState([]);
    useEffect(()=>{
        fetchAuxiliaryChemical();
    },[])

    const fetchAuxiliaryChemical = async() =>{
        await axios.get(`https://katalystbd.com/admin/api/auxiliarychemicals`).then(({data})=>{
            setAuxiliaryChemical(data);
        })
    }

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
            Auxiliary Chemicals
          </h1>
          <h5 className="text-center item--title">
            Produce with the highest quality of material ,provide the best
            service
          </h5>
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>

      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section className="pt-5 texture-1">
        <div className="container" >
          <p className="basic-chemicals-title" data-aos="fade-up">Auxiliary Chemical</p>
          <p className="basic-chemicals-subtitle" data-aos="fade-up">
            To become the first choice of customers for a value added,
            ecofriendly chemicals and process.
          </p>

          <div>
            <div className="row mt-5">
              <div className="col-md-6">
                <RellaxWrapper speed={2}>
                  <br />
                  <br />
                  <br />
                  <br />
                  <div className="product-details-octa-img-block text-center mt-5 ">
                    <div className="product-details-octa-img-block2">
                      <img
                        src="/product/auxiliary_chemicals.jpg"
                        alt=""
                        className="img-fluid product-details-octa-image"
                      />
                    </div>
                  </div>
                </RellaxWrapper>
              </div>

              <div className="col-md-6" data-aos="fade-up">
                <h1 className="product-description-title">
                  <i className="fas fa-stream"></i> Auxilary Chemical List
                </h1>

                <div className="product-description" >
                    {
                       auxiliarychemical.length > 0 && (
                           auxiliarychemical.map((item)=>(
                               <div key={item.id}>
                                    <span className="item-hover" ><i className="fad fa-angle-right text-success"></i> {item.chemical_name}</span>
                               </div>
                           ))
                       ) 
                    }
                    
                </div>
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

export default AuxiliaryChemiacl;
