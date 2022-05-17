import React from 'react';
import { Link } from 'react-router-dom';
import { CCarousel, CCarouselItem, CImage } from '@coreui/react';
import '@coreui/coreui/dist/css/coreui.min.css';
import 'bootstrap/dist/css/bootstrap.min.css';

import './homepage.css'

import RellaxWrapper from 'react-rellax-wrapper';

import AOS from 'aos';
import 'aos/dist/aos.css';

function Homepage() {

  AOS.init({
    duration: 800,
    delay: 200,
    mirror: true
  });

  return (
    <>
      <section className='carousel-section'>
        <CCarousel controls indicators interval={2000}>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '800px' }} src='/carousel/Banner-1.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '800px' }} src='/carousel/Banner-2.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '800px' }} src='/carousel/Banner-3.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '800px' }} src='/carousel/Banner-4.jpg'/>
          </CCarouselItem>
        </CCarousel>
      </section>

      <section className="custome-shape">
        <img src="/custom_shape/11.png" className="shape-image" alt="Custom Shape" />
      </section>

      <section className='texture-1'>
          <div className="container">
            <div className="row">

              <div className="col-md-6">
                <RellaxWrapper speed={3}>
                  <div className='history-img text-center mt-5'>
                    <img src="/homepage/homepage-1.jpg" alt="" className='img-fluid history-side-image' />
                  </div>
                </RellaxWrapper>
              </div>

              <div className="col-md-6" data-aos="fade-up">
                <p className='h2 katalyst-history-headline'>Katalyst Bangladesh, is a partnership entity of four professionals having academic background of Textile Engineering and Biochemistry with combined pharmaceutical and textile experiences of more than 75 years</p>
                <p className='history-short-description'>has been established in early 2019 considering the growth potentiality of textile dyeing and washing industries. And, to exclusively focus in its target industries currently Katalyst Bangladesh is closely working with one of the major sole distributor of soda ash light and Soda Ash Dense from Double Ring, China. Besides, Katalyst Bangladesh sources others basic chemicals from renowned manufacturer worldwide which include Glauber Salt from Sateri (China), </p>

                <div>
                  <Link to="/about-us"  className="btn learn-more button-style-2">
                    <span className="circle" aria-hidden="true">
                      <span className="icon arrow"></span>
                    </span>
                    <span className="button-text">Learn More</span>
                  </Link>
                </div>

              </div>

              <div className="col-md-6" data-aos="fade-up">
                <p className='h2 katalyst-history-headline'>Katalyst Bangladesh, is a partnership entity of four professionals having academic background of Textile Engineering and Biochemistry with combined pharmaceutical and textile experiences of more than 75 years</p>
                <p className='history-short-description'>has been established in early 2019 considering the growth potentiality of textile dyeing and washing industries. And, to exclusively focus in its target industries currently Katalyst Bangladesh is closely working with one of the major sole distributor of soda ash light and Soda Ash Dense from Double Ring, China. Besides, Katalyst Bangladesh sources others basic chemicals from renowned manufacturer worldwide which include Glauber Salt from Sateri (China), </p>

                <div>
                  <Link to="/about-us"  className="btn learn-more button-style-2">
                    <span className="circle" aria-hidden="true">
                      <span className="icon arrow"></span>
                    </span>
                    <span className="button-text">Learn More</span>
                  </Link>
                </div>

              </div>
              
              <div className="col-md-6">
                <RellaxWrapper speed={3}>
                  <div className='history-img text-center mt-5'>
                    <img src="/homepage/homepage-1.jpg" alt="" className='img-fluid history-side-image' />
                  </div>
                </RellaxWrapper>
              </div>

            </div>
          </div>

          
      </section>

      <section className="custome-shape">
            <img src="/custom_shape/shape-2.png" className="shape-image1" alt="Custom Shape" />
          </section>
    </>
  )
}

export default Homepage