<header class="main-header">
  <div class="container-fluid">
    <div class="row g-0 justify-content-between align-items-center">
      <div class="col-auto col-logo">
        <!-- LOGO -->
        <a href="index.html" class="logo">
          <img src="images/logo.svg" alt="Bitu" class=" d-none d-lg-block">
          <img src="images/logo_sp.svg" alt="Bitu" class=" d-block d-lg-none">
        </a>
        <!-- LOGO -->

      </div>

      <div class="col-auto col-nav">
        <ul class="d-none d-lg-block">
          <li>
            <a href="#">item1</a>
          </li>
          <li>
            <a href="#">item2</a>
          </li>
          <li>
            <a href="#">item3</a>
          </li>
          <li>
            <a href="#">item4</a>
          </li>
        </ul>
        <button class="btn border-0 d-block d-lg-none btn-menu" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.42871 4.42871H18.5716M1.42871 10.143H18.5716M1.42871 15.8573H18.5716" stroke="#1A202C"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
<!-- /END .main-header -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">
      <a href="index.html" class="logo"><img src="images/logo_sp.svg" alt="Bitu"></a>
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <ul class="main-nav">
      <li><a href="index.html" class="active">Trang chủ</a></li>
      <li><a href="about-us.html">Về chúng tôi</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="page-pricing.html">Pricing</a></li>
      <li><a href="page-roadmap.html">Roadmap</a></li>
      <li><a href="faq.html">FAQs</a></li>
      <li><a href="page-recruitment.html">Tuyển dụng</a></li>
      <li><a href="contact.html">Liên hệ</a></li>
    </ul>
  </div>
</div>
<!-- /END .offcanvas -->