@extends('template.default')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
  
            <ul class="portfolio-flters">
             
              <li data-filter=".filter-product">Product</li>
             
            </ul><!-- End Portfolio Filters -->
          </div>
          @foreach($modals as $list)
          @if($loop->odd)
          <div class="row gy-4 portfolio-container">


            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{$list->image}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{$list->image}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{$list->title}}</a></h4>
                  <p>{{$list->desc}}</p>
                </div>
              </div>
            </div><!-- End Portfolio ->em -->

            </div><!-- End Portfolio Item -->
            @else
            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{$list->image}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{$list->image}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{$list->title}}</a></h4>
                  <p>{{$list->desc}}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          <!--  <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
 @endif
@endforeach
@endsection