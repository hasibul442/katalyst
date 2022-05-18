import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import "./App.css";
import Navbar from "./Component/NavBar/Navbar";
import Aboutus from "./Pages/Aboutus/Aboutus";
import Homepage from "./Pages/HomePage/Homepage";
import Partners from "./Pages/Partners/Partners";
import ContactUs from "./Pages/Contactus/ContactUs";
import Footer from "./Component/Footer/Footer";
import BasicChemical from "./Pages/Products/BasicChemical";
import Product_Details from "./Pages/Products/Product_Details";

function App() {
  return (
    <>
      <Router basename = {process.env.PUBLIC_URL}>
        <Navbar />
          <div className="mainbody">
            <Routes >
              <Route path="/" element={<Homepage />} />
              <Route path="/home" element={<Homepage />} />
              <Route path="/about-us" element={<Aboutus />} />
              <Route path="/basic-chemicals" element={<BasicChemical/>} />
              <Route path="/auxiliary-chemicals" element={<BasicChemical/>} />
              <Route path="/dyes-stuff" element={<BasicChemical/>} />
              <Route path="/machines" element={<BasicChemical/>} />
              <Route path="/partners" element={<Partners/>} />
              <Route path="/contact-us" element={<ContactUs/>} />
              <Route path="/product/details" element={<Product_Details/>} />
            </Routes>
          </div>
        <Footer/>
      </Router>
    </>
  );
}

export default App;
