import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import "./App.css";
import Navbar from "./Component/NavBar/Navbar";
import Aboutus from "./Pages/Aboutus/Aboutus";
import Homepage from "./Pages/HomePage/Homepage";
import Product from "./Pages/Products/Product";
import Partners from "./Pages/Partners/Partners";
import ContactUs from "./Pages/Contactus/ContactUs";
import Footer from "./Component/Footer/Footer";

function App() {
  return (
    <>
      <Router basename = {process.env.PUBLIC_URL}>
        <Navbar />
        <Routes>
          <Route path="/" element={<Homepage />} />
          <Route path="/home" element={<Homepage />} />
          <Route path="/about-us" element={<Aboutus />} />
          <Route path="/basic-chemicals" element={<Product/>} />
          <Route path="/auxiliary-chemicals" element={<Product/>} />
          <Route path="/dyes-stuff" element={<Product/>} />
          <Route path="/machines" element={<Product/>} />
          <Route path="/partners" element={<Partners/>} />
          <Route path="/contact-us" element={<ContactUs/>} />
        </Routes>
        <Footer/>
      </Router>
    </>
  );
}

export default App;
