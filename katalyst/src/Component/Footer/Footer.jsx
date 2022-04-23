import React from "react";
import './footer.css';
import { Link } from "react-router-dom";
function Footer() {
  return (
    <>
      <section>
        <div className="footer2">
          <p className="text-center pt-2 pb-2">
            Copyright © {new Date().getFullYear()} Katalyst Bangladesh | All Rights
            Reserved
          </p>
        </div>
      </section>
    </>
  );
}

export default Footer;
