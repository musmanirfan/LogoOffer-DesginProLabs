<?php $title = "Design Pro Labs | Special Offer";
include 'include/header.php';?>

<section id="home" class="sm:!h-[109vh] !h-fit w-full pt-28 relative pb-20 flex items-center">
  <div
    class="grid md:grid-cols-5 grid-cols-1 md:gap-0 gap-10 items-center sm:w-[85%] w-[90%] mx-auto z-20  2xl:w-[1500px]">
    <div class="col-span-3 relative">
      <h1 class="sm:text-5xl text-2xl font-bold text-white md:leading-[55px]">
        Professional Logo Design Starting From
        <span class="text-[#FE5F00]">$39</span>
        Only
      </h1>
      <p class="text-white mt-2 md:mt-0 text-xl">
        Make a strong first impression with a custom, attention-grabbing,
        customer-centric logo design.
      </p>
      <ul class="space-y-2 my-3">
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">3 Unique Logo Design Concepts</p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">5 Revisions
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">Free Color Options
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">24-48 Hours Turnaround Time
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">100% Money Back Guarantee
            </p>
          </div>
        </li>
      </ul>
      <div class="gap-3 mt-3 flex flex-wrap items-center">
        <div
          class="bg-transparent text-white border border-white text-xl hover:opacity-90 rounded transition-all duration-300 active:scale-90 w-fit py-3 px-4">
          <a href="javascript:;" class="chat hover:!text-white">Talk With Expert
          </a>
        </div>
        <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
          class="px-4 flex item-center rounded-lg text-lg h-16 !hover:text-black bg-[#FE6F19] !border-[#FE6F19] text-white border focus:outline-none transition-all"
          data-src="#popupform2"><button style="outline:none;"
            class="hover:text-black transition-all hover:!text-white hover:!opacity-90">Claim Your Logo Now</button></a>
      </div>
    </div>
    <form onSubmit="handleBannerForm(event, 'BannerFormLogo')"
      class="bg-white shadow-2xl !border-2 !border-[#E4FF3E] !outline-[#E4FF3E] py-4 px-8 md:w-[93%] col-span-2 w-full h-fit mx-auto rounded-xl relative">
      <h1 class="text-center text-[#FE5F00] text-2xl font-bold mb-3">Limited Time Offer</h1>
      <div class="space-y-4">
        <div>
          <input placeholder="Name" type="text" id="name"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Email Address?" type="text" id="email"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Phone No?" type="text" id="phone"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <textarea placeholder="Share any specific ideas or requirements you have in mind" type="text" id="description"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]"></textarea>
        </div>
      </div>
      <button type="submit" class="w-full py-3 text-xl font-medium bg-[#FE5F00] mt-3 rounded-lg text-white">Get Started
        Now</button>
      <img src="asets/images/blackfriday-tag.jpg" alt="" class="left-0 -top-11 absolute !z-30">
    </form>
  </div>

  <video autoplay muted loop src="assets/videos/hero.mp4"
    class="absolute top-0 left-0 z-10 w-full md:h-[109vh] h-full object-cover"></video>
</section>

<section id="portfolio" class="sm:w-[85%] w-[90%] mx-auto my-20 2xl:w-[1500px]">
  <h1 class="text-center text-[46px] font-bold">Our Portfolio</h1>
  <p class="text-xl mt-1 text-center">Explore our collection of unique logo designs, sorted by category.</p>
  <ul class="flex flex-wrap gap-[10px] items-center justify-center my-4 nav nav-pills" id="portfolioTabs"
    role="tablist">
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 active !border-2 !border-black text-black font-medium rounded nav-link" id="tab-All"
        data-bs-toggle="pill" data-bs-target="#content-All" type="button" role="tab" aria-controls="content-All"
        aria-selected="true">
        All
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Estate"
        data-bs-toggle="pill" data-bs-target="#content-Estate" type="button" role="tab" aria-controls="content-Estate"
        aria-selected="false">
        Real Estate
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Food"
        data-bs-toggle="pill" data-bs-target="#content-Food" type="button" role="tab" aria-controls="content-Food"
        aria-selected="false">
        Food
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Sports"
        data-bs-toggle="pill" data-bs-target="#content-Sports" type="button" role="tab" aria-controls="content-Sports"
        aria-selected="false">
        Sports
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Technology"
        data-bs-toggle="pill" data-bs-target="#content-Technology" type="button" role="tab"
        aria-controls="content-Technology" aria-selected="false">
        Technology
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="min-w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Clothing"
        data-bs-toggle="pill" data-bs-target="#content-Clothing" type="button" role="tab"
        aria-controls="content-Clothing" aria-selected="false">
        Clothing and Apparel
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="min-w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Businesses"
        data-bs-toggle="pill" data-bs-target="#content-Businesses" type="button" role="tab"
        aria-controls="content-Businesses" aria-selected="false">
        Businesses and Marketing
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="min-w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Cleaning"
        data-bs-toggle="pill" data-bs-target="#content-Cleaning" type="button" role="tab"
        aria-controls="content-Cleaning" aria-selected="false">
        Cleaning
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="min-w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Fitness"
        data-bs-toggle="pill" data-bs-target="#content-Fitness" type="button" role="tab" aria-controls="content-Fitness"
        aria-selected="false">
        Fitness
      </button>
    </li>
  </ul>


  <!-- Tab Content -->
  <div class="tab-content">
    <!-- All Animation Tab -->
    <div class="tab-pane fade show active" id="content-All" role="tabpanel" aria-labelledby="tab-All">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/1.webp">
              <img src="assets/images/PortfolioLogos/1.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/2.webp">
              <img src="assets/images/PortfolioLogos/2.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/3.webp">
              <img src="assets/images/PortfolioLogos/3.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/4.webp">
              <img src="assets/images/PortfolioLogos/4.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/5.webp">
              <img src="assets/images/PortfolioLogos/5.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/6.webp">
              <img src="assets/images/PortfolioLogos/6.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Estate Animation Tab -->
    <div class="tab-pane fade" id="content-Estate" role="tabpanel" aria-labelledby="tab-Estate">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/7.webp">
              <img src="assets/images/PortfolioLogos/7.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/8.webp">
              <img src="assets/images/PortfolioLogos/8.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/9.webp">
              <img src="assets/images/PortfolioLogos/9.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/10.webp">
              <img src="assets/images/PortfolioLogos/10.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/11.webp">
              <img src="assets/images/PortfolioLogos/11.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/12.webp">
              <img src="assets/images/PortfolioLogos/12.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Food Tab -->
    <div class="tab-pane fade" id="content-Food" role="tabpanel" aria-labelledby="tab-Food">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/13.webp">
              <img src="assets/images/PortfolioLogos/13.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/14.webp">
              <img src="assets/images/PortfolioLogos/14.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/15.webp">
              <img src="assets/images/PortfolioLogos/15.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/16.webp">
              <img src="assets/images/PortfolioLogos/16.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/17.webp">
              <img src="assets/images/PortfolioLogos/17.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/18.webp">
              <img src="assets/images/PortfolioLogos/18.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Sports Tab -->
    <div class="tab-pane fade" id="content-Sports" role="tabpanel" aria-labelledby="tab-Sports">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/19.webp">
              <img src="assets/images/PortfolioLogos/19.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/20.webp">
              <img src="assets/images/PortfolioLogos/20.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/21.webp">
              <img src="assets/images/PortfolioLogos/21.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/22.webp">
              <img src="assets/images/PortfolioLogos/22.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/23.webp">
              <img src="assets/images/PortfolioLogos/23.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/24.webp">
              <img src="assets/images/PortfolioLogos/24.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Technology Tab -->
    <div class="tab-pane fade" id="content-Technology" role="tabpanel" aria-labelledby="tab-Technology">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/25.webp">
              <img src="assets/images/PortfolioLogos/25.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/26.webp">
              <img src="assets/images/PortfolioLogos/26.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/27.webp">
              <img src="assets/images/PortfolioLogos/27.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/28.webp">
              <img src="assets/images/PortfolioLogos/28.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/29.webp">
              <img src="assets/images/PortfolioLogos/29.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/30.webp">
              <img src="assets/images/PortfolioLogos/30.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Clothing Tab -->
    <div class="tab-pane fade" id="content-Clothing" role="tabpanel" aria-labelledby="tab-Clothing">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/31.webp">
              <img src="assets/images/PortfolioLogos/31.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/32.webp">
              <img src="assets/images/PortfolioLogos/32.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/33.webp">
              <img src="assets/images/PortfolioLogos/33.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/34.webp">
              <img src="assets/images/PortfolioLogos/34.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/35.webp">
              <img src="assets/images/PortfolioLogos/35.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/36.webp">
              <img src="assets/images/PortfolioLogos/36.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Businesses Tab -->
    <div class="tab-pane fade" id="content-Businesses" role="tabpanel" aria-labelledby="tab-Businesses">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/37.webp">
              <img src="assets/images/PortfolioLogos/37.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/38.webp">
              <img src="assets/images/PortfolioLogos/38.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/39.webp">
              <img src="assets/images/PortfolioLogos/39.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/40.webp">
              <img src="assets/images/PortfolioLogos/40.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/41.webp">
              <img src="assets/images/PortfolioLogos/41.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/42.webp">
              <img src="assets/images/PortfolioLogos/42.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Cleaning Tab -->
    <div class="tab-pane fade" id="content-Cleaning" role="tabpanel" aria-labelledby="tab-Cleaning">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/43.webp">
              <img src="assets/images/PortfolioLogos/43.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/44.webp">
              <img src="assets/images/PortfolioLogos/44.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/45.webp">
              <img src="assets/images/PortfolioLogos/45.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/46.webp">
              <img src="assets/images/PortfolioLogos/46.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/47.webp">
              <img src="assets/images/PortfolioLogos/47.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/48.webp">
              <img src="assets/images/PortfolioLogos/48.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Fitness Tab -->
    <div class="tab-pane fade" id="content-Fitness" role="tabpanel" aria-labelledby="tab-Fitness">
      <div class="row g-3 bg-[#FAFAFA]">
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/49.webp">
              <img src="assets/images/PortfolioLogos/49.webp" class="card-img-top" alt="Iconic Logo 1">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/50.webp">
              <img src="assets/images/PortfolioLogos/50.webp" class="card-img-top" alt="Iconic Logo 2">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/51.webp">
              <img src="assets/images/PortfolioLogos/51.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/52.webp">
              <img src="assets/images/PortfolioLogos/52.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/53.webp">
              <img src="assets/images/PortfolioLogos/53.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
        <div class="col-md-4 !cursor-pointer">
          <div>
            <a data-fancybox="" tabindex="0" href="assets/images/PortfolioLogos/54.webp">
              <img src="assets/images/PortfolioLogos/54.webp" class="card-img-top" alt="Iconic Logo 3">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-72 md:py-0 py-20 bg-fixed flex items-center text-center text-white justify-center">
  <div class="space-y-3">
    <h3 class="text-4xl font-bold">Ready to Create a Logo You’ll Love? </h3>
    <p class="text-xl">Share your ideas and pick a package that fits. Let’s create something extraordinary together!</p>
    <div class="flex flex-wrap items-center gap-3 justify-center mt-4">
      <div>
        <a href="#pricingSection"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">See
          Pricing</a>
      </div>
      <button data-src="#popupform2" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#FE5F00] text-white rounded">Let's Work
        Together</button>
    </div>
  </div>
</section>

<section class="packages-block !mt-20 !p-0" id="pricingSection">
  <div class="sm:w-[85%] w-[90%] mx-auto 2xl:w-[1500px]">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
      Pricing Plans That Fit Every Need!
    </h2>
    <p class="text-center text-wrap -mt-2">
      At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we offer high-quality services at
      prices that work for everyone. Whether you're starting small or need the best, our packages are designed to match
      your goals and budget. Choose the plan that fits your needs and let us help you create something amazing!
    </p>
  </div>
  <div class="container -mt-8">
    <div class="row">
      <div class="tab-content ">
        <div id="logo" class="tab-pane fade in active show">
          <!-- logo_pack -->
          <?php include 'include/logo-pack.php';?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sm:w-[85%] w-[90%] mx-auto my-20 2xl:w-[1500px] space-y-10">
  <div class="space-y-5">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
      Helping Businesses Stand Out with Affordable, <br> <span class="text-[#FE5F00]">Custom Logo Designs.</span>
    </h2>
    <p class="text-center text-wrap">
      At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we create custom logos that perfectly
      reflect your brand’s identity and values. Our talented designers work with you every step of the way to deliver
      unique, high-quality logos at a price you can afford. Whether you’re launching a new business or rebranding, we’ll
      make sure your logo stands out and captures attention.
    </p>
  </div>
  <ul class="grid md:grid-cols-5 grid-cols-3 gap-8">
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-1.png" />
        <p class="text-center !leading-0">Constant Client <br />Coordination</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-2.png" />
        <p class="text-center">Supreme Customer <br />Satisfaction</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-3.png" />
        <p class="text-center">100% Ownership <br />Rights</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-4.png" />
        <p class="text-center">Secure Money Back <br />Guarantee</p>
      </div>
    </li>
    <li>
      <div id="about" class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-5.png" />
        <p class="text-center">Industry Proven <br />Professionals</p>
      </div>
    </li>
  </ul>
</section>

<section class="about-new-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-1.png" />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>who we are</h2>
          <p class="mt-3">
            At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we help businesses grow with
            creative designs, digital marketing, and powerful software solutions. Based in the U.S., we offer custom
            logo design, website development, mobile applications, SEO, and digital marketing. Whether you’re building
            your online presence or expanding your brand, we’re here to make it happen. Let’s work together to create
            something amazing.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#FE5F00] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#FE6F19] text-[#FE6F19] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-new-sec about-new-sec2 mb-32">
  <div class="container-fluid">
    <div class="row flex-col-reverse md:flex-row mt-10 md:mt-0">
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>what we do</h2>
          <p class="mt-3">
            At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we combine years of experience,
            creativity, and dedication to deliver the best results for our clients. Our talented team focuses on
            providing top-quality services, from logo design to website development and digital marketing, helping your
            business grow and succeed. We’re here to bring your ideas to life with professionalism and care.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#FE5F00] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#FE6F19] text-[#FE6F19] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-2.png" />
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-72 md:py-0 py-20 md:px-0 px-2 bg-fixed flex items-center text-center text-white justify-center">
  <div class="space-y-3">
    <h3 class="text-4xl font-bold">Not Sure Where to Start? </h3>
    <p class="text-xl">Contact our expert design team today and let’s bring your ideas to life.</p>
    <div class="flex items-center flex-wrap gap-3 justify-center mt-4">
      <div id="testimonial">
        <a href="tel:+14372949609"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">Call
          Now</a>
      </div>
      <button
        class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg chat banner-btn yb-btn various">Talk
        to an Expert</button>
      <button data-src="#popupform2" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#FE5F00] text-white rounded">Let's Work
        Together</button>
    </div>
  </div>
</section>

<section class="our-testimonial">
  <div class="container test-upp !w-[1350px] !sm:w-[1350px]">
    <div class="row sm:mx-12">
      <div class="col-md-12 test-right">
        <div id="testslider" class="owl-carousel">
          <!-- Slide 1 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/7.webp" alt="test-1">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"Brought My Vision to Life!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                The team understood my ideas perfectly and created a logo that speaks volumes about my brand. Their
                attention to detail and professionalism exceeded my expectations!"
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/barbara.webp" alt="John R. Taylor" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">John R. Taylor, CEO</p>
                  <p class="text-sm text-muted-foreground">BrightPath Solutions</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/2.webp" alt="test-2">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"Creative and Reliable!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                I couldn’t have asked for a more dedicated team. They transformed my brand’s identity with a unique and
                timeless logo. Their creative approach and quick delivery were outstanding!
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/ashlay.webp" alt="Emily K. Parker" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Emily K. Parker, Founder</p>
                  <p class="text-sm text-muted-foreground">Blissful Blooms</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/6.webp" alt="test-3">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"Exceeded Expectations!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                From start to finish, the process was seamless. They captured the essence of my business and delivered a
                logo that’s both modern and memorable. Highly recommended!
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/steven.webp" alt="Alex M. Harris" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Alex M. Harris, Owner</p>
                  <p class="text-sm text-muted-foreground">Urban Edge Marketing</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Aap aur slides bhi add kar sakte hain agar chahen -->
        </div>
      </div>
    </div>
  </div>

  <!-- Custom Dots Container -->
  <div class="d-flex arr-gap"></div>
</section>

<?php include 'include/footer.php';?>