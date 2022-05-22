import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import "./product.css";
import "./../custom.css"
import axios from "axios";

function BasicChemical() {

  const [basicchemical, setBasicChemical] = useState([]);

  useEffect(()=>{
    fetchBasicChemical();
  },[])

  const fetchBasicChemical = async () => {
    await axios.get(`http://localhost:8000/api/basic-chemicals`).then(({data})=>{
      setBasicChemical(data)
      console.log(data)
    })
  }

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
            {
              basicchemical.length > 0 && (
                basicchemical.map((item, key)=>(
                  <div className="col-md-4 col-sm-6 pb-3" key={key}>
                  <div className="box">
                    <img
                      src={`http://127.0.0.1:8000/assets/image/basicchemicals/${item.chemical_image}`}
                      style={{ height: "400px" }}
                      alt="Product"
                    />
                    <div className="box-content">
                      <h3 className="title">{item.chemical_name}</h3>
                      
                    </div>
                    <ul className="icon">
                      <li><p className="short_description">{item.short_description}</p></li>
                      <li>
                        <Link to="/product/details" className="see-more ">
                          See More
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
                ))
              )
            }
          </div>
        </div>
      </section>
    </>
  );
}

export default BasicChemical;
