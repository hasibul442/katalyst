import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import "./App.css";
import Navbar from "./Component/NavBar/Navbar";
import Aboutus from "./Pages/Aboutus/Aboutus";
import Homepage from "./Pages/HomePage/Homepage";
import ContactUs from "./Pages/Contactus/ContactUs";
import Footer from "./Component/Footer/Footer";
import BasicChemical from "./Pages/Products/BasicChemical";
import ProductDetails from "./Pages/Products/Product_Details";
import AuxiliaryChemiacl from "./Pages/Products/AuxiliaryChemiacl";
import Dyestuff from "./Pages/Products/Dyestuff";
import Career from "./Pages/Career/Career";
import JobDescription from "./Pages/Career/JobDescription";

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
              <Route path="/auxiliarychemicals" element={<AuxiliaryChemiacl/>} />
              <Route path="/dyestuff" element={<Dyestuff/>} />
              <Route path="/contact-us" element={<ContactUs/>} />
              <Route path="/basic-chemical/details/:id" element={<ProductDetails/>} />
              <Route path="/job/details/:id" element={<JobDescription/>} />
              <Route path ="/career" element={<Career/>} />
            </Routes>
          </div>
        <Footer/>
      </Router>
    </>
  );
}

export default App;
