

<div class="mil-reviews-section">
    <div class="container mil-relative mil-p-120-0">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12 col-xl-3 mil-relative mil-mb-120">
                <h3 class="mil-link mil-softened-60 mil-appearance mil-mb-30">Algeria Venture</h3>
                <h3 class="mil-appearance mil-mb-30">Offers and Consultation deals</h3>
            </div>
            <div class="col-lg-12 col-xl-9 mil-mb-120">

                <div class="swiper-container mil-reviews-slider mil-appearance">
                    <div class="swiper-wrapper">
                        @foreach($offers as $offer)
                            <div class="swiper-slide">
                                <div class="mil-review">
                                    <p class=" mil-mb-30">{{substr($offer->desc,0,100)}} <a href=""> ...read more </a> 
                                        
                                    </p>
                                    <div class="mil-user-details">
                                        <div class="mil-avatar mil-mr-15">
                                            <img src="img/what-we-do/acceleration.png" alt="User">
                                        </div>
                                        <div>
                                            <h4 class="mil-mb-5">{{$offer->title}}</h4>
                                            <div class="mil-text-sm mil-softened-40">Algeria Venture</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        @endforeach
                       
                </div>

            </div>
        </div>

        <!-- slider pagination -->
        <div class="mil-pagination-frame">
            <div class="mil-slider-pagination"></div>
        </div>
    </div>
   <!-- Button trigger modal -->

</div>

<div class="testing">
    Test
</div>
