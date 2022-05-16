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

      <div className="custome-shape">
        <img src="/contact/11.png" className="shape-image" alt="Custom Shape" />
      </div>
    </>
  )
}

export default Homepage