<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
  <title>Domain Checker - Web Hosting & WHMCS Template</title>

  <!-- bootstrap css -->
  <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
  <!-- fontawesome css -->
  <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.min.css" as="style">
  <!-- swiper css -->
  <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
  <!-- magnific popup css -->
  <link rel="stylesheet preload" href="assets/css/plugins/magnific-popup.css" as="style">
  <!-- aos css -->
  <!-- <link  rel="stylesheet preload" href="assets/css/plugins/aos.min.css" as="style"> -->
  <link rel="stylesheet preload" href="assets/css/plugins/sal.min.css" as="style">
  <!-- nice select css -->
  <link rel="stylesheet preload" href="assets/css/plugins/nice-select.css" as="style">
  <!-- metismenu css -->
  <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
  <!-- Custom css -->

  <link rel="stylesheet preload" href="assets/css/domain-checker-style.css" as="style">
  <link rel="stylesheet preload" href="assets/css/domain-dns-lookup.css" as="style">
  <style>
      h4 {
          color:#0D034A;
      }
  </style>
</head>

<body>
  <?php include 'header.php';?>

  <div class="overflow-hidden bg-grad_blue">
    <section class="hostingBannerSec pay_method_hdr pay-60 pay-lg-90 pay-xl-160" id="domain-dns-lookup">
      <div class="container">
        <div class="hostingBannerContent d-flex flex-column align-items-center justify-content-center">
          <div class="  position-relative mab-30 text-center">
            <h1 class="bannerTitle fs-22 fs-lg-26 fs-xl-32 fs-xxl-38 fs-hxl-65 fw-700 mab-15 "
              style="font-size: 60px; color: white;">Search and Buy a Domain</h1>
            <div
              class="bannerPara fs-14 fs-lg-16 fs-xl-18 fs-xxl-20 lh-22 lh-lg-24 lh-xl-26 lh-xxl-30 mab-30 text-muted">
              Grab the domain you've been looking for.</div>
          </div>
          <div class="search-container p-sm-0 col-lg-8 col-md-10 col-sm-12 ">
            <div class="search-bar d-flex p-2 position-relative">
              <input class="col-lg-10 col-md-8 col-sm-6 p-4 " id="searchDomain" type="text" value="" placeholder="Search for a keyword">
              <svg class="position-absolute  svgSearch"
              xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
              <path fill="#ff8f3c"
                d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z">
              </path>
            </svg>
              <button class="col-lg-2 col-md-4 col-3 p-4" style="background-color: #0D034A;">Search</button>
            </div>
            <hr style=" width: 100%;background-color: black; color: black;" />
            <div class="categories justify-content-around w-100 text-center">
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-2 text-center position-relative"
                for="Popular" name="Popular">
                <svg class="category " fill="black" viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <span>Popular</span>
                <input id="Popular" type="checkbox" class="checker hidden " />
              </label>

              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Geographic">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path
                    d="M7 18c1.66 0 2.99-1.34 2.99-3H4.01A3 3 0 007 18zm5 2h2v-1h4v1h2v-6h-2.59l-2.7-7H9.29l-2.7 7H4v6h2v-1h4v1zm1.24-7h2.52l1.14 3h-4.8l1.14-3z" />
                </svg>
                <span>Geographic</span>
                <input type="checkbox" class="checker hidden" id="Geographic" name="Geographic" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Technology">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path d="M9 18h6v-2H9v2zm0-4h6v-2H9v2zm0-4h6V8H9v2zm11 6V4H4v12H2v2h20v-2h-2z" />
                </svg>
                <span>Technology</span>
                <input type="checkbox" class="checker hidden" id="Technology" name="Technology" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Services">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path
                    d="M12 4.14L6 6.39v3.38C6 17.61 8.37 22 12 22s6-4.39 6-12.23V6.39l-6-2.25zm0 15.11c-1.95 0-4-1.86-4-7.73v-1.91l4 1.5 4-1.5v1.91c0 5.87-2.05 7.73-4 7.73z" />
                </svg>
                <span>Services</span>
                <input type="checkbox" class="checker hidden" id="Services" name="Services" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Business">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path d="M9 17H7V7h2v10zm6 0h-2V7h2v10z" />
                </svg>
                <span>Business</span>
                <input type="checkbox" class="checker hidden" id="Business" name="Business" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Media">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path
                    d="M12 4a4 4 0 00-4 4v2H6V8a6 6 0 0112 0v2h-2V8a4 4 0 00-4-4zm6 8H6a2 2 0 00-2 2v6h16v-6a2 2 0 00-2-2zm-7 5.5V16h2v1.5a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5z" />
                </svg>
                <span>Media</span>
                <input type="checkbox" class="checker hidden" id="Media" name="Media" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Shopping">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path
                    d="M7 18c1.66 0 2.99-1.34 2.99-3H4.01A3 3 0 007 18zm5 2h2v-1h4v1h2v-6h-2.59l-2.7-7H9.29l-2.7 7H4v6h2v-1h4v1zm1.24-7h2.52l1.14 3h-4.8l1.14-3z" />
                </svg>
                <span>Shopping</span>
                <input type="checkbox" class="checker hidden" id="Shopping" name="Shopping" />
              </label>
              <label class="text-center col-lg-1 col-md-1 col-sm-2 col-2 p-2 p-sm-0 m-1 text-center position-relative"
                for="Other">
                <svg class="category" fill="black" viewBox="0 0 24 24">
                  <path d="M3 13h8v8H3v-8zm0-10h8v8H3V3zm10 10h8v8h-8v-8zm0-10h8v8h-8V3z" />
                </svg>
                <span>Other</span>
                <input type="checkbox" class="checker hidden" id="Other" name="Other" />
              </label>
            </div>
          </div>
          <div style="margin-top: 40px;">
            <p style="font-size: 25px; color: white;">Already bought domain?<span style="color: #f67a3c;"> Transfer
                it</span></p>
          </div>
        </div>
      </div>
    </section>
    <div class="shape"></div>
  </div>

  <section class=" pab-60 homeServiceMap secTopBotGap pax-20 pax-xxl-0 bg-white">
    <div class="container-fluid">
      <div class="row text-center m-5">
        <h1 style="color: #000d61">Choose From the Most Popular <br /> Domains</h1>
      </div>
      <div class="row justify-content-center gap-5">
        <div class="col-lg-3 col-md-5  p-lg-5 p-md-3 col-sm-6 mab-40 shadow domainsName " style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">me</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-6  p-lg-5 p-md-3 mab-40 shadow domainsName" style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">ing</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-6  p-lg-5 p-md-3 mab-40 shadow domainsName" style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">ca</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>



        <div class="col-lg-3 col-md-5  col-sm-6  p-lg-5 p-md-3 mab-40 shadow domainsName" style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">blog</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>
        <div class="col-lg-3 col-md-5  p-lg-5 p-md-3 col-sm-6 mab-40 shadow domainsName" style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">shop</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>
        <div class="col-lg-3 p-lg-5 p-md-3 col-md-5 col-sm-6 mab-40 shadow domainsName" style="border-radius: 15px;">
          <div class="py-5 m-2 d-flex align-items-center">
            <span class="domain">help</span>
            <span class="p-2  m-2 mt-4" style="background-color: #fee9df; color: #f67a3c; border-radius: 10px;">57%
              Off</s>
          </div>
          <div class="d-flex flex-wrap m-5 align-items-end">


            <div class="col-6"><small class="w-100 d-block text-decoration-line-through"
                style="font-size: small; color: gray;">$19.95/yr</small>
              <strong class="w-100 d-block " style="font-size: 25px; font-weight: bolder;">$8.49/yr</strong>
              <small class="w-100 d-block " style="font-size: small; color: gray;">Renews at $19.95 /yr</small>

            </div>
            <button class="col-6 btn btn-lg" style="border-color: #f67a3c; color: #f67a3c; height: 40px;">Register
              Now</button>


          </div>
        </div>


      </div>
    </div>
  </section>
  <section class="themeBlockImgSection pax-10 pax-xxl-0 bg-white pat-60 pab-100 secTopBotGap">
    <div class="container " style="margin: 50px auto 150px auto;">
      <div class="row">

        <h1 class="text-center" style=" color: #0D034A">5 Things To Remember Before You Buy Domains</h1>
      </div>
    </div>
    <div class="d-flex gap-3 w-100 justify-content-around rememberparent flex-wrap"
      style="margin: 100px auto 0px auto;">
      <div class=" text-center remember my-5 col-10 col-sm-10 col-lg-2 col-md-6" style="border: 1px #EFECEC solid;">
        <div class="p-4 remember">
          <h4>Stay simple</h4>
          <small>Don’t get complicated. An easy-to-remember domain is always best.</small>
        </div>
        <span class="number">01</span>
      </div>
      <div class=" text-center remember my-5 col-10 col-sm-10 col-lg-2 col-md-6" style="border: 1px #EFECEC solid;">
        <div class="p-4 remember">
          <h4>Keep it on-brand</h4>
          <small>Stay true to your brand. Be distinct but choose a domain your audience will recognize.</small>
        </div>
        <span class="number">02</span>
      </div>
      <div class=" text-center remember my-5 col-10 col-sm-10 col-lg-2 col-md-6" style="border: 1px #EFECEC solid;">
        <div class="p-4 remember">
          <h4>Act now</h4>
          <small>Don’t wait until it’s too late. That perfect domain could be gone by tomorrow if you don’t grab it
            now.</small>
        </div>
        <span class="number">03</span>
      </div>
      <div class=" text-center remember my-5 col-10 col-sm-10 col-lg-2 col-md-6" style="border: 1px #EFECEC solid;">
        <div class="p-4 remember">
          <h4>Drop the hyphens</h4>
          <small>Just because the internet is high-tech doesn’t mean your domain name should be.</small>
        </div>
        <span class="number">04</span>
      </div>
      <div class=" text-center remember my-5 col-10 col-sm-10 col-lg-2 col-md-6" style="border: 1px #EFECEC solid;">
        <div class="p-4 remember">
          <h4>Consider your options</h4>
          <small>Grab similar domain names to protect your brand: .net, .org, .co, or even .photo.</small>
        </div>
        <span class="number">05</span>
      </div>





    </div>
  </section>


  <section class="themeFaq pax-20 pax-xxl-0 pay-60 secTopBotGap bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="themeHeading mab-20 mab-md-40">
            <div class="text-center">

              <h2 class="headingTitleheadingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-900 mab-20 text-dark"> Register a
                Domain Name For Free</h2>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
          <p class="text-center domainName">Grab a 36-month hosting plan and get a <a href="#"
              class="text-decoration-underline" style="color: #f67a3c;">free domain</a> for one year. You can get
            popular generic top-level domain names like .com, .net, .org, and other extensions for free.</p>
        </div>
        <div class="text-center col-12">
          <button class="col-lg-2 col-sm-10 col-md-6 p-4 viewPlans btn mat-20 mat-xxl-40 fs-16 fs-xl-18 fw-500">View
            Plans</button>
        </div>
      </div>
  </section>





  
  <!--START TABLE SEACTIONS -->
  <section class="container tableparent" style="overflow-x: scroll;">
    <div class="row text-center m-5">
      <h2 style="color: #000d61">Explore the Possibilities from Our TLD List</h2>
    </div>
    
    <div class="container-fluid d-flex justify-content-between paginations flex-wrap my-5 align-items-center">
      <div class="position-relative col-lg-3 col-md-6 col-sm-12 col-12"> 
        <svg class="position-absolute"
          xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
          <path fill="#0D034A"
            d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z">
          </path>
        </svg>
         <input class="search" type="text" placeholder="Search TLDs..." id="search"/>
        </div>
      <div id="pagination" class="d-flex col-lg-3 col-md-6 col-sm-10 my-sm-3"></div>
    </div>
    <table class="table w-100 " id="table" >
      <thead>
        <tr>
          <th scope="col">TLD</th>
          <th scope="col">Registration</th>
          <th scope="col">Renewal</th>
          <th scope="col">Transfer</th>
          <th scope="col">ID Protection</th>
        </tr>
      </thead>
      <tbody id="tbody">

      </tbody>
    </table>

  </section>


  <section class="themeFaq pax-20 pax-xxl-0 pay-60 secTopBotGap bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="themeHeading mab-20 mab-md-40">
            <div class="text-center">

              <h2 class="headingTitleheadingTitle fs-36 fs-xxl-38 fs-xl-36 fs-lg-36 fw-bolder mab-20 text-dark">Why Buy
                Domains at Hostim?</h2>
            </div>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-around flex-wrap parentCloud">
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
            <h4>Domain locking</h4>
            <p>Lock your domain to prevent unauthorized transfers of your domain names.</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M8.2702 14.8501C8.2702 14.8501 8.63161 16.9542 11.3755 16.9294C16.5545 16.8824 16.9563 11.8052 11.9321 11.8751C6.90803 11.9449 7.20278 6.86023 12.3818 6.81329C15.1257 6.78842 15.4871 8.89251 15.4871 8.89251"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M12 19L12 5" stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
              </svg></div>
            <h4>Great renewal rates</h4>
            <p>When it’s time to renew your domain, you’ll never have to worry about breaking the bank.</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4V10H7" stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path d="M23 20V14H17" stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path
                  d="M20.49 9.00001C19.9828 7.5668 19.1209 6.28542 17.9845 5.27543C16.8482 4.26545 15.4745 3.55978 13.9917 3.22427C12.5089 2.88877 10.9652 2.93436 9.50481 3.35679C8.04437 3.77922 6.71475 4.56473 5.64 5.64001L1 10M23 14L18.36 18.36C17.2853 19.4353 15.9556 20.2208 14.4952 20.6432C13.0348 21.0657 11.4911 21.1113 10.0083 20.7758C8.52547 20.4402 7.1518 19.7346 6.01547 18.7246C4.87913 17.7146 4.01717 16.4332 3.51 15"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
            <h4>Auto-renewal</h4>
            <p>You’ll never lose your domain (even if you forget) thanks to our auto-renewal option.</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2 12H22" stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path
                  d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22C9.49872 19.2616 8.07725 15.708 8 12C8.07725 8.29203 9.49872 4.73835 12 2V2Z"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
            <h4>Easy management</h4>
            <p>Manage your domain with an easy-to-use control panel and dashboard.</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
                  stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
            <h4>Whois privacy protection</h4>
            <p>Need some privacy? We’ll protect your personal info from the WHOIS database for a small fee.</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-10 p-3">
            <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3L10.07 19.97L12.58 12.58L19.97 10.07L3 3Z" stroke="#f67a3c" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M13 13L19 19" stroke="#f67a3c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
              </svg></div>
            <h4>Low prices & huge selection</h4>
            <p>Register your domain for a low price and choose from a wide selection of extensions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- FAQS SEACTIONS -->
    <section class="themeFaq pax-20 pax-xxl-0 pay-60 secTopBotGap bg-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="themeHeading mab-20 mab-md-40">
              <div class="text-center">
  
                <h3 class="headingTitleheadingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-900 mab-20 text-dark">Domain
                  Registration FAQs</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
            <div class="accordion themeAccordian" id="accordionExample">
              <div class="accordion-item" >
                <h3 class="accordion-header" style="background-color: #fff;"  id="faqh3311"> 
                  <button class="accordion-button collapsed"   type="button"
                    data-bs-toggle="collapse" data-bs-target="#faq3311" aria-expanded="false" aria-controls="faq3311">
                    What is a domain name?</button> </h3>
                <div id="faq3311" class="accordion-collapse collapse" style="background-color: #fff;" aria-labelledby="faqh3311"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" >
                    <p></p>
                    <p data-block-id="892b5b74-d90a-44b4-ac72-05418a21002f">Think of a domain name like your house’s
                      street address, so a domain name is your address on the internet!</p><br> It’s what people will type
                    into their browser (or sometimes their search engine) to find, engage with, and communicate with you!
  
                    It consists of a series of letters and/or numbers, and it usually ends with a top-level domain (TLD)
                    such as ".com," ".net," or ".org."
                    and expiration date.</p>
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header" style="background-color: #fff;" id="faqh3312"> <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faq3312" aria-expanded="false" aria-controls="faq3312">
                    What's the difference between buying a domain and a hosting package? </button> </h3>
                <div id="faq3312" class="accordion-collapse collapse" style="background-color: #fff;" aria-labelledby="faqh3312"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p></p>
                    <p>As said above, a domain name is like your website's street address. It helps people find your site
                      online. Web hosting is like your website's home - it's where all the files, images, and other
                      information for your site are stored. Your site needs an address and a home to be up and running.
                      But they are definitely two different things.</p>
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header" style="background-color: #fff;" id="faqh3313"> <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faq3313" aria-expanded="false" aria-controls="faq3313"> How
                    I can register a domain name for free? </button> </h3>
                <div id="faq3313" class="accordion-collapse collapse" style="background-color: #fff;" aria-labelledby="faqh3313"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p></p>
                    <p data-block-id="31160abf-b00c-4055-a40a-5d124c4f246d" data-pm-slice="1 1 []">You must purchase one
                      of our hosting plans on a minimum of 3 years billing cycles to get a <a
                        class="text-decoration-underline" href="#" style="color: #f67a3c;">free domain name.</a> Check out
                      our hosting <a class="text-decoration-underline" href="#" style="color: #f67a3c;">plans and
                        pricing.</a> . Free domain registration is available for the first year only.
  
                      What are you waiting for? Claim your free domain and get yourself online.</p>
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header" style="background-color: #fff;" id="faqh3314"> <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faq3314" aria-expanded="false" aria-controls="faq3314"> Is
                    Domain Name Privacy Protection worth it? </button> </h3>
                <div id="faq3314" style="background-color: #fff;" class="accordion-collapse collapse" aria-labelledby="faqh3314"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p></p>
                    <p>Short answer: yes!
                      <br>
                      <br>
                      When you register a domain, your personal contact information (such as your name, address, and phone
                      number) is typically added to the WHOIS database, which is a public directory of domain name
                      registrants.
                      <br>
                      <br>
                      If you are concerned about your privacy and don't want your personal information to be publicly
                      available, you should definitely consider using domain privacy protection.
                    </p>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="faqBotTxt mat-20 mat-xxl-40 fs-16 fs-xl-18 fw-500">Want to know more? Check our <a
              href="#" class="text-themecolor">Knowledge base</a></div>
        </div>
      </div>
    </section>


  </section>
<?php include 'footer.php';?>

  <!-- jquery js -->
  <script defer src="assets/js/plugins/jquery.min.js"></script>
  <script defer src="assets/js/plugins/popper.js"></script>
  <script defer src="assets/js/plugins/bootstrap.min.js"></script>
  <script defer src="assets/js/plugins/metismenu.js"></script>
  <script defer src="assets/js/vendor/jqueryui.js"></script>
  <script defer src="assets/js/vendor/waypoint.js"></script>
  <script defer src="assets/js/plugins/swiper.js"></script>
  <script defer src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
  <script defer src="assets/js/plugins/jquery.nice-select.min.js"></script>
  <script defer src="assets/js/plugins/sal.js"></script>
  <script defer src="assets/js/vendor/waw.js"></script>
  <script defer src="assets/js/plugins/counter-up.js"></script>
  <script defer src="assets/js/plugins/magnific-popup.js"></script>
  <!-- contact form js -->
  <script defer src="assets/js/plugins/contact-form.js"></script>
  <script defer src="assets/js/table.js"></script>
  <script defer src="assets/js/main.js"></script>
  <script type="text/javascript">
    window.onload = function () {
      $('#check-btn').click(function () {
        ddlcheckWebsite();
      });
      $('#check-websiteurl').keypress(function (event) {
        if (event.which === 13) {
          ddlcheckWebsite();
        }
      });
    }

    function ddlcheckWebsite() {
      var websiteUrl = $('#check-websiteurl').val();
      $('#check-btn').text("Please wait..");
      if (!$('.dns-checker-result').hasClass("hidden")) {
        $('.dns-checker-result').addClass("hidden");
      }
      $('.dns-checker-result').find("div").removeClass();
      $("#bar_loading").show().animate({
        width: 20 + 80 * Math.random() + "%"
      }, 200);
      $.ajax({
        url: "https://host.4cards.store/xhr.php?first=get-website-dns-records",
        type: 'GET',
        data: {
          websiteUrl: websiteUrl
        },
        success: function (data) {
          data = JSON.parse(data);
          $('.dns-checker-result').removeClass("hidden");
          if (data.status == 200) {
            $('.dns-checker-result').find("div").html(data.html);
          } else {
            $('.dns-checker-result').find("div").addClass("bad_status").html(data.message);
          }
          $('#check-btn').text("Query DNS");
          $("#bar_loading").animate({
            width: "100%"
          }, 200).fadeOut(300, function () {
            $(this).width("0")
          });
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
          $("#bar_loading").animate({
            width: "100%"
          }, 200).fadeOut(300, function () {
            $(this).width("0")
          });
        }
      });
    }
  </script>
</body>

</html>