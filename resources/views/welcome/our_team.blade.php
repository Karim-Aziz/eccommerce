  @php
      $our_team = App\our_team::orderBy('id', 'desc')->get();
  @endphp
   <!-- Start Counter -->
  <div class="counter-box text-center" data-aos="fade-up" data-aos-anchor-placement="top-center"
    data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="icon-box">
            <i class="fas fa-tasks mb-4"></i>
          </div>
          <h3 class="counter mt-5" data-target="40">0</h3>
          <h5>Completed Projects</h5>
        </div>

        <div class="col-md-3">
          <div class="icon-box">
            <i class="far fa-lightbulb"></i>
          </div>
          <h3 class="counter mt-5" data-target="9">0</h3>
          <h5>Social Media Pages</h5>
        </div>

        <div class="col-md-3">
          <div class="icon-box">
            <i class="fas fa-trophy"></i>
          </div>
          <h3 class="counter mt-5" data-target="12">0</h3>
          <h5>Number of Team</h5>
        </div>

        <div class="col-md-3">
          <div class="icon-box">
            <i class="fas fa-puzzle-piece"></i>
          </div>
          <h3 class="counter mt-5" data-target="100000">0</h3>
          <h5>Line of Codes</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- End Counter -->
