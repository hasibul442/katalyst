import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import Swal from "sweetalert2";

function JobDescription() {
  const { id } = useParams();

  const [jobdetails, setJobDetails] = useState("");
  const featchJobDescription = async () => {
    await axios
      .get(`https://katalystbd.com/admin/api/jobs/details/${id}`)
      .then(({ data }) => {
        setJobDetails(data.jobdetails);
        console.log(data);
      });
  };

  useEffect(() => {
    featchJobDescription();
  }, []);

  // const job_id = id;
  const [job_id, setJobId] = useState("");
  const [candidate_name, setCandidateName] = useState("");
  const [last_degree, setlastDegree] = useState("");
  const [mobile_number, setmobileNumber] = useState("");
  const [email, setEmail] = useState("");
  const [cv, setCv] = useState("");

  const changeCVHandler = (event) => {
    setCv(event.target.files[0]);
  };

  const applyforjob = async (e) => {
    e.preventDefault();

    const formData = new FormData();
    formData.append("job_id", id);
    formData.append("candidate_name", candidate_name);
    formData.append("last_degree", last_degree);
    formData.append("mobile_number", mobile_number);
    formData.append("email", email);
    formData.append("cv", cv);

    await axios
      .post(`https://katalystbd.com/admin/api/application/submit`, formData)
      .then(({ data }) => {
        Swal.fire({
          icon: "success",
          text: data.message,
        });
        // setJobId("");
        setCandidateName("");
        setlastDegree("");
        setmobileNumber("");
        setEmail("");
        setCv("");
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
        </div>
      </div>

      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section className="mt-5">
        <div className="container">
          <div className="card">
            <div className="card-body">
              <p
                className="text-center"
                style={{ fontSize: "30px", fontWeight: "700" }}
              >
                <span>Position Name : </span>{" "}
                <span className="text-info">{jobdetails.position_name}</span>
              </p>

              <div className="d-flex justify-content-around">
                <div className="p-2">
                  Application Dateline: {jobdetails.application_dead_line}
                </div>

                <div className="p-2">Exprience: {jobdetails.exprience} year</div>
                <div className="p-2">Salary Range: {jobdetails.salary} Tk</div>
              </div>

              <div>
                <h5>Description: </h5>
                <p
                  dangerouslySetInnerHTML={{ __html: jobdetails.description }}
                ></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="mt-5">
        <h3 className="text-center">Apply For This Job</h3>

        <form onSubmit={applyforjob}>
          <div className="row pb-3">
            <div className="col" style={{ display:'none' }}>
              <input
                type="text"
                onChange={(event) => {
                  setJobId(event.target.value);
                }}
                value={id}
                className="form-control"
                placeholder="First Name"
                name="job_id"
              />
            </div>
            <div className="col">
              <input
                type="text"
                onChange={(event) => {
                  setCandidateName(event.target.value);
                }}
                value={candidate_name}
                className="form-control"
                placeholder="First Name"
                name="candidate_name"
                required
              />
            </div>
            <div className="col">
              <input
                type="text"
                onChange={(event) => {
                  setlastDegree(event.target.value);
                }}
                value={last_degree}
                className="form-control"
                placeholder="Last Name"
                name="last_degree"
                required
              />
            </div>
          </div>

          <div className="row pb-3">
            <div className="col">
              <input
                type="text"
                onChange={(event) => {
                  setmobileNumber(event.target.value);
                }}
                value={mobile_number}
                className="form-control"
                placeholder="Organization Name"
                name="mobile_number"
              />
            </div>
          </div>

          <div className="row pb-3">
            <div className="col">
              <input
                type="email"
                onChange={(event) => {
                  setEmail(event.target.value);
                }}
                value={email}
                className="form-control"
                placeholder="Email"
                name="email"
              />
            </div>
          </div>
          <div className="row pb-3">
            <div className="col">
              <input
                type="file"
                onChange={changeCVHandler}
                className="form-control"
                name="cv"
              />
            </div>
          </div>

          <div className="pb-3 text-center">
            <button className="btn btn-primary button-style" type="submit">
              <span>Send Message</span>
              <div className="wave"></div>
            </button>
          </div>
        </form>
      </section>
    </>
  );
}

export default JobDescription;
