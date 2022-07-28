import React, { useState } from "react";
import "./contactus.css";
import axios from "axios";
import Swal from "sweetalert2";
// import { useNavigate } from "react-router-dom";

function ContactUs() {

  const [f_name, setFname] = useState("");
  const [l_name, setLname] = useState("");
  const [name_of_organization, setNameOfOrg] = useState("");
  const [position, setPosition] = useState("");
  const [phone_number, setPhoneNumber] = useState("");
  const [email, setEmail] = useState("");
  const [description, setDescriptione] = useState("");

  const sendMessage = async (e) => {
    e.preventDefault();

    const formData = new FormData();

    formData.append("f_name", f_name);
    formData.append("l_name", l_name);
    formData.append("name_of_organization", name_of_organization);
    formData.append("position", position);
    formData.append("phone_number", phone_number);
    formData.append("email", email);
    formData.append("description", description);

    await axios
      .post(`https://katalystbd.com/admin/api/messages/add`, formData)
      .then(({ data }) => {
        // console.log(data.message);
        Swal.fire({
          icon: "success",
          text: data.message,
        });
        // navigate("/contact-us")
        setFname("");
        setLname("");
        setNameOfOrg("");
        setPosition("");
        setPhoneNumber("");
        setEmail("");
        setDescriptione("");
      });
  };

  return (
    <>
      <div className="contact-bg">
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
            Contact Us
          </h1>
          {/* <h5 className="text-center item--title">
            If you need any service please contact us, we will try our best to
            answer
          </h5> */}
          {/* <p className='text-center item--title'>Feel free to contact with us. We are always waiting eagerly for you to help. Contact with us, discuss about your project and get the best solution from us.</p> */}
        </div>
      </div>
      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>

      <section className="texture">
        <div className="container">
          <div className="pt-5">
            <div className="row">
              <div className="col-md-6">
                <h1 className="contact-us-headline text-center">Message Us</h1>
                <p className="text-center">
                  If you wish to be considered for employment at Weifield,
                  please do not send a message, here – instead, please complete
                  Weifield’s job application and our Human Resources department
                  will contact you after their review of your submitted
                  information.
                </p>
              </div>

              <div className="col-md-6 pt-4">
                <div>
                  <form onSubmit={sendMessage}>
                    <div className="row pb-3">
                      <div className="col">
                        <input
                          type="text"
                          onChange={(event) => {
                            setFname(event.target.value);
                          }}
                          value={f_name}
                          className="form-control"
                          placeholder="First Name"
                          name="f_name"
                          required
                        />
                      </div>
                      <div className="col">
                        <input
                          type="text"
                          onChange={(event) => {
                            setLname(event.target.value);
                          }}
                          value={l_name}
                          className="form-control"
                          placeholder="Last Name"
                          name="l_name"
                          required
                        />
                      </div>
                    </div>

                    <div className="row pb-3">
                      <div className="col">
                        <input
                          type="text"
                          onChange={(event) => {
                            setNameOfOrg(event.target.value);
                          }}
                          value={name_of_organization}
                          className="form-control"
                          placeholder="Organization Name"
                          name="name_of_organization"
                        />
                      </div>
                      <div className="col">
                        <input
                          type="text"
                          onChange={(event) => {
                            setPosition(event.target.value);
                          }}
                          value={position}
                          className="form-control"
                          placeholder="Position"
                          name="position"
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
                      <div className="col">
                        <input
                          type="phone"
                          onChange={(event) => {
                            setPhoneNumber(event.target.value);
                          }}
                          value={phone_number}
                          className="form-control"
                          placeholder="Phone Number"
                          name="phone_number"
                        />
                      </div>
                    </div>

                    <div className="pb-3">
                      <textarea
                        className="form-control"
                        onChange={(event) => {
                          setDescriptione(event.target.value);
                        }}
                        value={description}
                        placeholder="Message"
                        rows={5}
                        name="description"
                      ></textarea>
                    </div>

                    <div className="pb-3 text-center">
                      <button
                        className="btn btn-primary button-style"
                        type="submit"
                      >
                        <span>Send Message</span>
                        <div className="wave"></div>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="contactinfo">
          <div className="container">
            <h1 className="get-in-touch">Get In Touch</h1>
            <div className="row pt-5">
              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                    <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <h3 className="address-headline">Address</h3>
                    <p className="text-white">
                      House # 428 (A); Road # 30 <br />
                      New DOHS, Mohakhali,
                      <br />
                      Dhaka-1206
                    </p>
                  </div>
                </div>
              </div>

              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                    <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-phone-alt text-white"></i>
                    </div>
                    <h3 className="address-headline">Phone</h3>
                    <p className="text-white">
                      Telephone : +88 02 48811048-490 <br />
                      Mobile : +88 01713090871 <br />
                      Mobile : +88 01318 321617
                    </p>
                  </div>
                </div>
              </div>

              <div className="col-lg-4 pb-3 text-center">
                <div className="card glassmorphism">
                  <div className="card-body">
                    <div className="address-icon-box text-center mt-5">
                      <i className="fas fa-comment-alt-dots text-white"></i>
                    </div>
                    <h3 className="address-headline">Email</h3>
                    <p className="text-white">
                    info@katalystbd.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h1 className="contact-map-headline text-center">
            Get Deriction From Here
          </h1>
          <div className="pt-3">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1126831832635!2d90.39064921447506!3d23.779001393601128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b8864a3c37%3A0x7c221cca7ca22475!2sKatalyst%20Bangladesh!5e0!3m2!1sen!2sbd!4v1653400860159!5m2!1sen!2sbd"
              width="100%"
              height="250"
              style={{ border: 0 }}
              allowFullScreen=""
              title="Google Map Location"
              loading="lazy"
              referrerPolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>
    </>
  );
}

export default ContactUs;
