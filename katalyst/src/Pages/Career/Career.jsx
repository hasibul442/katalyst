import React, { useEffect, useState } from "react";

import { Link } from "react-router-dom";
import "./career.css";
import axios from "axios";
// import "react-tabs/style/react-tabs.css";
function Career() {
  const [jobopen, setJobOpen] = useState([]);
  useEffect(() => {
    fetchJobOpen();
  }, []);

  const fetchJobOpen = async () => {
    await axios.get(`https://katalystbd.com/admin/api/jobsopen`).then(({ data }) => {
      setJobOpen(data);
      // console.log(data);
    });
  };

  return (
    <>
      <div className="career-bg">
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
            Career
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

      <section className="mt-5">
        <div className="job-post container">
          <div className="row mb-5">
            {jobopen.length > 0 &&
              jobopen.map((item) => (
                <div className="col-md-4 mb-3" key={item.id}>
                  <Link to={`/job/details/${item.id}`} className="job_blocks">
                    <div className="card">
                      <div className="card-body">
                        <p className="position_name">
                          <i className="fad fa-angle-double-right"></i>{" "}
                          {item.position_name}
                        </p>
                        <span className="application_dead_line">
                          <i className="fas fa-calendar-day"></i>{" "}
                          {item.application_dead_line}
                        </span>
                        <br />
                        <span className="application_dead_line">
                          <i className="fad fa-users"></i> {item.vacancy}
                        </span>
                      </div>
                    </div>
                  </Link>
                </div>
              ))}
          </div>
        </div>
      </section>
    </>
  );
}

export default Career;
