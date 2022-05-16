import { CCarousel, CCarouselItem, CImage } from '@coreui/react';
import React from 'react';
import '@coreui/coreui/dist/css/coreui.min.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import './homepage.css'

function Homepage() {
  return (
    <>
      <section>
        <CCarousel controls indicators interval={2000}>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '700px' }} src='/carousel/Banner-1.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '700px' }} src='/carousel/Banner-2.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '700px' }} src='/carousel/Banner-3.jpg'/>
          </CCarouselItem>
          <CCarouselItem>
            <CImage className='d-block w-100' style={{ height: '700px' }} src='/carousel/Banner-4.jpg'/>
          </CCarouselItem>
        </CCarousel>
      </section>

      <section className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </section>

      <section className='pt-5'>
          <div className="container">
            <div className="row">
              <div className="col-md-6">
                <div className='history-img text-center'>
                  <img src="/homepage/homepage-1.jpg" alt="" className='img-fluid history-side-image' />
                </div>
              </div>
              <div className="col-md-6">
                <p className='h2 katalyst-history-headline'>Katalyst Bangladesh, is a partnership entity of four professionals having academic background of Textile Engineering and Biochemistry with combined pharmaceutical and textile experiences of more than 75 years</p>
                <p>has been established in early 2019 considering the growth potentiality of textile dyeing and washing industries. And, to exclusively focus in its target industries currently Katalyst Bangladesh is closely working with one of the major sole distributor of soda ash light and Soda Ash Dense from Double Ring, China. Besides, Katalyst Bangladesh sources others basic chemicals from renowned manufacturer worldwide which include Glauber Salt from Sateri (China), </p>
              </div>
            </div>
          </div>
      </section>
    </>
  )
}

export default Homepage