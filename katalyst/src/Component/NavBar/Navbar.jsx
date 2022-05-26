import React,{useState} from 'react';
import "./navbar.css";
import {
  Link
} from "react-router-dom";

function Navbar() {
  const [click, setClick] = useState(false);
  const handleClick = () => setClick(!click);
  return (
    <>
      <nav className="navbar navbar-expand-lg shadow ftco-navbar-light" id="ftco-navbar">
        <div className="container">
          <Link className="navbar-brand" to='/'>
            <img src="/logo/katalyst.png" alt="Company Logo" height= '50px' className="navbar-logo"/>
          </Link>
          <div className='menu-icon navbar-toggler text-light'  onClick={handleClick} data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i className= {click ? 'fas fa-times' : 'fas fa-bars'} ></i>
          </div>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav mx-auto mb-2 mb-lg-0">

              <li className="nav-item">
                <Link className="nav-link" to="/home">
                  Home
                </Link>
              </li>

              <li className="nav-item">
                <Link className="nav-link" to="/about-us">
                  About Us
                </Link>
              </li>

              <li className="nav-item dropdown dropdown_auto">
                <div
                  className="nav-link dropdown-toggle"
                  id="navbarDropdown"
                  role="button"
                  aria-expanded="false"
                >
                  Products
                </div>
                <ul className="dropdown-menu dropdown_auto_menu" aria-labelledby="navbarDropdown">
                  <li>
                    <Link className="dropdown-item" to="/basic-chemicals">
                      Basic Chemicals
                    </Link>
                  </li>
                  <li>
                    <Link className="dropdown-item" to="/auxiliarychemicals">
                      Auxiliary Chemicals
                    </Link>
                  </li>
                  <li>
                    <Link className="dropdown-item" to="/dyestuff">
                      Dyes Stuff
                    </Link>
                  </li>
                </ul>
              </li>


              <li className="nav-item">
                <Link className="nav-link" to="/contact-us">
                  Contact Us
                </Link>
              </li>

              <li className="nav-item">
                <Link className="nav-link" to="/career">
                  Career
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </>
  );
}

export default Navbar;
