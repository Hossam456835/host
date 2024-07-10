<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Domain Dns Lookup - Web Hosting & WHMCS Template</title>

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
   
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
     <link rel="stylesheet preload" href="assets/css/domain-dns-lookup.css" as="style">
</head>

<body>
      <?php include 'header.php';?>
     
   <div class="overflow-hidden bg-grad_blue">
    <section class="hostingBannerSec pay_method_hdr pay-60 pay-lg-90 pay-xl-160" id="domain-dns-lookup">
        <div class="container">
            <div class="hostingBannerContent d-flex flex-column align-items-center justify-content-center">
                <div class="hsbInnerSection mw-800px position-relative mab-30 text-center">
                    <h1 class="bannerTitle fs-22 fs-lg-26 fs-xl-32 fs-xxl-38 fs-hxl-65 fw-700 mab-15 ">Domain DNS Lookup</h1>
                    <div class="bannerPara fs-14 fs-lg-16 fs-xl-18 fs-xxl-20 lh-22 lh-lg-24 lh-xl-26 lh-xxl-30 mab-30 text-muted">Quickly verify domain DNS configurations.</div>
                </div>
                <div class="pax-xl-120 w-100">
                    <div class="whois_domain_search">
                        <div class="whois_domain_search_innr dng_btns_sections">
                            <input type="text" class="form-control" placeholder="Enter website URL here" required="" id="check-websiteurl">
                            <button class="btn" type="button" id="check-btn">Query DNS</button>
                        </div>
                        <div class="my-4 ddns_table dns-checker-result hidden">
                            <div class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="pat-100 pab-60 homeServiceMap secTopBotGap pax-20 pax-xxl-0 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M71.4363 28.57V23.5C71.4363 22.1675 70.3313 21.0625 68.9988 21.0625C67.6663 21.0625 66.5613 22.1675 66.5613 23.5V28.375H45.4363V23.5C45.4363 22.1675 44.3313 21.0625 42.9988 21.0625C41.6663 21.0625 40.5613 22.1675 40.5613 23.5V28.57C31.7863 29.3825 27.5288 34.615 26.8788 42.3825C26.8138 43.325 27.5938 44.105 28.5038 44.105H83.4938C84.4363 44.105 85.2163 43.2925 85.1188 42.3825C84.4688 34.615 80.2113 29.3825 71.4363 28.57Z"
                                fill="#457BFF"></path>
                                <path d="M82 48.98H30C28.2125 48.98 26.75 50.4425 26.75 52.23V72.25C26.75 82 31.625 88.5 43 88.5H69C80.375 88.5 85.25 82 85.25 72.25V52.23C85.25 50.4425 83.7875 48.98 82 48.98ZM46.9325 76.1825C46.77 76.3125 46.6075 76.475 46.445 76.5725C46.25 76.7025 46.055 76.8 45.86 76.865C45.665 76.9625 45.47 77.0275 45.275 77.06C45.0475 77.0925 44.8525 77.125 44.625 77.125C44.2025 77.125 43.78 77.0275 43.39 76.865C42.9675 76.7025 42.6425 76.475 42.3175 76.1825C41.7325 75.565 41.375 74.72 41.375 73.875C41.375 73.03 41.7325 72.185 42.3175 71.5675C42.6425 71.275 42.9675 71.0475 43.39 70.885C43.975 70.625 44.625 70.56 45.275 70.69C45.47 70.7225 45.665 70.7875 45.86 70.885C46.055 70.95 46.25 71.0475 46.445 71.1775C46.6075 71.3075 46.77 71.4375 46.9325 71.5675C47.5175 72.185 47.875 73.03 47.875 73.875C47.875 74.72 47.5175 75.565 46.9325 76.1825ZM46.9325 64.8075C46.315 65.3925 45.47 65.75 44.625 65.75C43.78 65.75 42.935 65.3925 42.3175 64.8075C41.7325 64.19 41.375 63.345 41.375 62.5C41.375 61.655 41.7325 60.81 42.3175 60.1925C43.2275 59.2825 44.6575 58.99 45.86 59.51C46.2825 59.6725 46.64 59.9 46.9325 60.1925C47.5175 60.81 47.875 61.655 47.875 62.5C47.875 63.345 47.5175 64.19 46.9325 64.8075ZM58.3075 76.1825C57.69 76.7675 56.845 77.125 56 77.125C55.155 77.125 54.31 76.7675 53.6925 76.1825C53.1075 75.565 52.75 74.72 52.75 73.875C52.75 73.03 53.1075 72.185 53.6925 71.5675C54.895 70.365 57.105 70.365 58.3075 71.5675C58.8925 72.185 59.25 73.03 59.25 73.875C59.25 74.72 58.8925 75.565 58.3075 76.1825ZM58.3075 64.8075C58.145 64.9375 57.9825 65.0675 57.82 65.1975C57.625 65.3275 57.43 65.425 57.235 65.49C57.04 65.5875 56.845 65.6525 56.65 65.685C56.4225 65.7175 56.2275 65.75 56 65.75C55.155 65.75 54.31 65.3925 53.6925 64.8075C53.1075 64.19 52.75 63.345 52.75 62.5C52.75 61.655 53.1075 60.81 53.6925 60.1925C53.985 59.9 54.3425 59.6725 54.765 59.51C55.9675 58.99 57.3975 59.2825 58.3075 60.1925C58.8925 60.81 59.25 61.655 59.25 62.5C59.25 63.345 58.8925 64.19 58.3075 64.8075ZM69.6825 76.1825C69.065 76.7675 68.22 77.125 67.375 77.125C66.53 77.125 65.685 76.7675 65.0675 76.1825C64.4825 75.565 64.125 74.72 64.125 73.875C64.125 73.03 64.4825 72.185 65.0675 71.5675C66.27 70.365 68.48 70.365 69.6825 71.5675C70.2675 72.185 70.625 73.03 70.625 73.875C70.625 74.72 70.2675 75.565 69.6825 76.1825ZM69.6825 64.8075C69.52 64.9375 69.3575 65.0675 69.195 65.1975C69 65.3275 68.805 65.425 68.61 65.49C68.415 65.5875 68.22 65.6525 68.025 65.685C67.7975 65.7175 67.57 65.75 67.375 65.75C66.53 65.75 65.685 65.3925 65.0675 64.8075C64.4825 64.19 64.125 63.345 64.125 62.5C64.125 61.655 64.4825 60.81 65.0675 60.1925C65.3925 59.9 65.7175 59.6725 66.14 59.51C66.725 59.25 67.375 59.185 68.025 59.315C68.22 59.3475 68.415 59.4125 68.61 59.51C68.805 59.575 69 59.6725 69.195 59.8025C69.3575 59.9325 69.52 60.0625 69.6825 60.1925C70.2675 60.81 70.625 61.655 70.625 62.5C70.625 63.345 70.2675 64.19 69.6825 64.8075Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Instant WHOIS Lookup</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> Instant WHOIS lookup to reveal the domain name servers, IP address, and contact details with just a click. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="113" height="112" viewBox="0 0 113 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M77.6672 29.7L61.0339 23.4667C58.2672 22.4333 53.7339 22.4333 50.9672 23.4667L34.3339 29.7C30.5005 31.1333 27.3672 35.6666 27.3672 39.7333V64.5C27.3672 68.4333 29.9672 73.6 33.1339 75.9667L47.4672 86.6667C52.1672 90.2 59.9005 90.2 64.6005 86.6667L78.9338 75.9667C82.1005 73.6 84.7005 68.4333 84.7005 64.5V39.7333C84.6339 35.6666 81.5005 31.1333 77.6672 29.7ZM55.7672 39.4333C59.7005 39.4333 62.9005 42.6333 62.9005 46.5667C62.9005 50.4333 59.8672 53.5333 56.0339 53.6667H55.9672H55.9005C55.8339 53.6667 55.7672 53.6667 55.7005 53.6667C51.7005 53.5333 48.7005 50.4333 48.7005 46.5667C48.6672 42.6333 51.8672 39.4333 55.7672 39.4333ZM63.3005 70.5333C61.2672 71.8667 58.6339 72.5667 56.0005 72.5667C53.3672 72.5667 50.7005 71.9 48.7005 70.5333C46.8005 69.2667 45.7672 67.5333 45.7339 65.6333C45.7339 63.7667 46.8005 61.9667 48.7005 60.7C52.7339 58.0333 59.3005 58.0333 63.3339 60.7C65.2339 61.9667 66.3005 63.7 66.3005 65.6C66.2672 67.4667 65.2005 69.2667 63.3005 70.5333Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Find Domain Ownership</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> Use our WHOIS domain lookup tool to buy or find ownership details. Enter the domain for availability, ownership, creation, and expiration info. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="113" height="112" viewBox="0 0 113 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M70.468 22.6666H42.5346C30.4013 22.6666 23.168 29.9 23.168 42.0333V69.9333C23.168 82.1 30.4013 89.3333 42.5346 89.3333H70.4346C82.568 89.3333 89.8013 82.1 89.8013 69.9666V42.0333C89.8346 29.9 82.6013 22.6666 70.468 22.6666ZM69.8346 58.5H59.0013V69.3333C59.0013 70.7 57.868 71.8333 56.5013 71.8333C55.1346 71.8333 54.0013 70.7 54.0013 69.3333V58.5H43.168C41.8013 58.5 40.668 57.3666 40.668 56C40.668 54.6333 41.8013 53.5 43.168 53.5H54.0013V42.6666C54.0013 41.3 55.1346 40.1666 56.5013 40.1666C57.868 40.1666 59.0013 41.3 59.0013 42.6666V53.5H69.8346C71.2013 53.5 72.3346 54.6333 72.3346 56C72.3346 57.3666 71.2013 58.5 69.8346 58.5Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Check Domain Availability</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> To check domain availability, enter the name in UltaHost's WHOIS domain lookup. We'll inform you if it's available or not. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.9517 32.72C46.754 35.7172 45.8563 38.8257 45.2717 42H66.7277C66.143 38.8258 65.2453 35.7173 64.0477 32.72C62.8437 29.788 61.4557 27.544 60.0157 26.068C58.5837 24.596 57.2277 24 55.9997 24C54.7717 24 53.4157 24.596 51.9837 26.068C50.5437 27.548 49.1597 29.788 47.9517 32.72ZM47.5597 25.124C46.3037 26.828 45.1997 28.888 44.2477 31.196C42.9677 34.316 41.9277 37.972 41.1997 42H27.2157C29.2137 37.9029 32.0619 34.2786 35.5706 31.3686C39.0792 28.4586 43.1638 26.3298 47.5597 25.124ZM67.7477 31.196C66.8934 29.0462 65.7827 27.0075 64.4397 25.124C68.835 26.3303 72.9227 28.4594 76.4306 31.3693C79.9385 34.2793 82.7861 37.9033 84.7837 42H70.7957C70.0677 37.972 69.0357 34.308 67.7477 31.196ZM86.4077 46H71.3997C71.7917 49.18 71.9997 52.536 71.9997 56C71.9997 59.464 71.7917 62.82 71.3997 66H86.4077C87.4664 62.7724 88.0038 59.3968 87.9997 56C88.0038 52.6032 87.4664 49.2276 86.4077 46ZM70.7957 70H84.7837C82.7861 74.0967 79.9385 77.7207 76.4306 80.6307C72.9227 83.5406 68.835 85.6697 64.4397 86.876C65.7829 84.9926 66.8936 82.9538 67.7477 80.804C69.0317 77.684 70.0677 74.028 70.7957 70ZM54.2477 71.76C54.5197 71.188 54.7637 70.6 54.9757 70H66.7277C66.143 73.1742 65.2453 76.2828 64.0477 79.28C63.7995 79.888 63.5328 80.4883 63.2477 81.08C62.9756 80.5957 62.6378 80.1515 62.2437 79.76L54.2477 71.76ZM55.8877 66H67.3677C67.7757 62.856 67.9997 59.5 67.9997 56C67.9997 52.5 67.7757 49.14 67.3677 46H44.6317L44.4837 47.2C48.1948 48.6334 51.3268 51.2554 53.3906 54.6565C55.4544 58.0576 56.3299 62.0464 55.8877 66ZM40.6037 46L40.5797 46.184C39.7252 46.0614 38.863 45.9999 37.9997 46H40.6037ZM25.5957 46H37.9997C35.3675 45.9979 32.767 46.5743 30.3823 47.6886C27.9976 48.8028 25.8869 50.4276 24.1997 52.448C24.4437 50.224 24.9197 48.064 25.5997 46M38.0077 78C41.1517 78 44.0557 76.96 46.3917 75.212L56.5917 85.412C56.7774 85.598 56.9979 85.7455 57.2406 85.8462C57.4833 85.947 57.7435 85.9989 58.0063 85.9991C58.2691 85.9993 58.5293 85.9477 58.7722 85.8473C59.0151 85.7469 59.2358 85.5997 59.4217 85.414C59.6077 85.2283 59.7552 85.0078 59.856 84.7651C59.9567 84.5224 60.0086 84.2622 60.0088 83.9994C60.009 83.7366 59.9574 83.4764 59.857 83.2335C59.7566 82.9907 59.6094 82.77 59.4237 82.584L49.2237 72.384C51.1116 69.8594 52.0921 66.7715 52.0066 63.6203C51.9211 60.469 50.7745 57.4389 48.7526 55.0203C46.7306 52.6018 43.9516 50.9365 40.8653 50.2939C37.7791 49.6514 34.5664 50.0692 31.7472 51.4798C28.928 52.8904 26.6674 55.2112 25.3313 58.0665C23.9952 60.9217 23.6619 64.1444 24.3853 67.2126C25.1087 70.2809 26.8465 73.0153 29.3173 74.973C31.7881 76.9307 34.8473 77.9973 37.9997 78M37.9997 74C35.3476 74 32.804 72.9464 30.9286 71.0711C29.0533 69.1957 27.9997 66.6522 27.9997 64C27.9997 61.3478 29.0533 58.8043 30.9286 56.9289C32.804 55.0536 35.3476 54 37.9997 54C40.6519 54 43.1954 55.0536 45.0708 56.9289C46.9461 58.8043 47.9997 61.3478 47.9997 64C47.9997 66.6522 46.9461 69.1957 45.0708 71.0711C43.1954 72.9464 40.6519 74 37.9997 74Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Insightful Domain Analysis</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> Get detailed domain insights with WHOIS lookup tool. Explore info like registration date, name server details, and more. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="113" height="112" viewBox="0 0 113 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M54.8346 22.6667C37.368 22.6667 23.168 36.8667 23.168 54.3334C23.168 71.8 37.368 86 54.8346 86C72.3013 86 86.5013 71.8 86.5013 54.3334C86.5013 36.8667 72.3013 22.6667 54.8346 22.6667ZM54.8346 61.8334H44.8346C43.468 61.8334 42.3346 60.7 42.3346 59.3334C42.3346 57.9667 43.468 56.8334 44.8346 56.8334H54.8346C56.2013 56.8334 57.3346 57.9667 57.3346 59.3334C57.3346 60.7 56.2013 61.8334 54.8346 61.8334ZM64.8346 51.8334H44.8346C43.468 51.8334 42.3346 50.7 42.3346 49.3334C42.3346 47.9667 43.468 46.8334 44.8346 46.8334H64.8346C66.2013 46.8334 67.3346 47.9667 67.3346 49.3334C67.3346 50.7 66.2013 51.8334 64.8346 51.8334Z"
                                fill="#457BFF"></path>
                                <path d="M87.5005 89.3287C86.9005 89.3287 86.3005 89.0953 85.8672 88.662L79.6672 82.462C78.7672 81.562 78.7672 80.0953 79.6672 79.162C80.5672 78.262 82.0339 78.262 82.9672 79.162L89.1672 85.362C90.0672 86.262 90.0672 87.7287 89.1672 88.662C88.7005 89.0953 88.1005 89.3287 87.5005 89.3287Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Check Registry Info</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> Utilize our WHOIS lookup tool to check public information about the current registrar and website owner, including their name and contact details. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mab-40">
                <div class="singleBlock text-center m-0 h-100">
                    <div class="blockIcon">
                        <div class="biconpart vertgrdbg">
                            <svg width="113" height="112" viewBox="0 0 113 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M74.4663 68.2333L60.9996 56H51.9663L38.4996 68.2333C34.7329 71.6333 33.4996 76.8667 35.3329 81.6C37.1663 86.3 41.6329 89.3333 46.6663 89.3333H66.2996C71.3663 89.3333 75.7996 86.3 77.6329 81.6C79.4663 76.8667 78.2329 71.6333 74.4663 68.2333ZM62.5663 76.4667H50.4329C49.1663 76.4667 48.1663 75.4333 48.1663 74.2C48.1663 72.9667 49.1996 71.9333 50.4329 71.9333H62.5663C63.8329 71.9333 64.8329 72.9667 64.8329 74.2C64.8329 75.4333 63.7996 76.4667 62.5663 76.4667Z"
                                fill="#457BFF"></path>
                                <path d="M77.6675 30.4C75.8342 25.7 71.3675 22.6667 66.3342 22.6667H46.6675C41.6342 22.6667 37.1675 25.7 35.3342 30.4C33.5342 35.1334 34.7675 40.3667 38.5342 43.7667L52.0009 56H61.0342L74.5009 43.7667C78.2342 40.3667 79.4675 35.1334 77.6675 30.4ZM62.5675 40.1H50.4342C49.1675 40.1 48.1675 39.0667 48.1675 37.8334C48.1675 36.6 49.2009 35.5667 50.4342 35.5667H62.5675C63.8342 35.5667 64.8342 36.6 64.8342 37.8334C64.8342 39.0667 63.8009 40.1 62.5675 40.1Z"
                                fill="#457BFF"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="blockContent">
                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700">Domain Expiry Lookup</h5>
                        <div class="bcPara fs-16 fs-xl-18 lh-26 lh-lg-30 mat-20"> Determine the expiration date of a domain name. This enables you to seize a valuable domain promptly if the current owner opts not to renew it. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="themeBlockImgSection pax-10 pax-xxl-0 bg-white pat-60 pab-100 secTopBotGap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-lg-2 align-self-center">
                <div class="blockImgPart text-center"> <img loading="lazy" src="https://ultahost.com/themes/default/images/datacenter/infrastructure.png" class="img-fluid w-60" alt="Network Infrastructure"> </div>
            </div>
            <div class="col-md-6 order-lg-1 align-self-center">
                <div class="timgBlocContent mw-630px">
                    <h2 class="headingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-700 mab-20">What is the WHOIS lookup tool?</h2>
                    <ul class="data_server_feat_list">
                        <li>Ultahost's WHOIS lookup tool shows the latest data registered on the logical WHOIS domain database. it can be used for obtaining information about the domain's registrant as man times as you want for free.</li>
                    </ul>
                    <ul class="data_server_feat_list">
                        <div class="mat-20 mab-10"><b>How does it work?</b></div>
                        <li class="m-0">Whenever someone registers a domain name, they have to submit their information to ICANN. some of this information is made available on the public database and can be accessed using our lookup services.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="themeFaq pax-20 pax-xxl-0 pay-60 secTopBotGap bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="themeHeading mab-20 mab-md-40">
                    <div class="text-center">
                        <div class="section-header-span">HAVE <span style="margin: 0;">QUESTIONS?</span></div>
                        <h3 class="headingTitleheadingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-700 mab-20">WHOIS FAQs</h3> </div>
                </div>
            </div>
            <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
                <div class="accordion themeAccordian" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3311"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3311" aria-expanded="false" aria-controls="faq3311"> What is WHOIS? </button> </h3>
                        <div id="faq3311" class="accordion-collapse collapse" aria-labelledby="faqh3311" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p data-block-id="892b5b74-d90a-44b4-ac72-05418a21002f">WHOIS is a global information lookup system. It allows you to retrieve publicly available information about a registered domain name. This information can include the domain owner's name, contact details, registration date,
                                    and expiration date.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3312"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3312" aria-expanded="false" aria-controls="faq3312"> What is a WHOIS domain lookup? </button> </h3>
                        <div id="faq3312" class="accordion-collapse collapse" aria-labelledby="faqh3312" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p>A WHOIS domain lookup is the process of using a WHOIS search tool to retrieve publicly available information about a registered domain name.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3313"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3313" aria-expanded="false" aria-controls="faq3313"> Is all WHOIS information accurate and up-to-date? </button> </h3>
                        <div id="faq3313" class="accordion-collapse collapse" aria-labelledby="faqh3313" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p data-block-id="31160abf-b00c-4055-a40a-5d124c4f246d" data-pm-slice="1 1 []">While WHOIS data aims for accuracy, some registrants may use privacy protection services to redact their personal details. Additionally, outdated or inaccurate information may exist in some cases.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3314"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3314" aria-expanded="false" aria-controls="faq3314"> Is Ultahost WHOIS domain lookups free? </button> </h3>
                        <div id="faq3314" class="accordion-collapse collapse" aria-labelledby="faqh3314" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p>Yes, the WHOIS domain lookup tool offered by the Ultahost is free to use. You can use WHOIS lookup for as many domains as you like.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3315"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3315" aria-expanded="false" aria-controls="faq3315"> Does a WHOIS lookup reveal the website hosting company? </button> </h3>
                        <div id="faq3315" class="accordion-collapse collapse" aria-labelledby="faqh3315" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p data-block-id="9912989f-30e0-42e0-b8bc-bb2a7b3dc622">No, a WHOIS lookup typically doesn't show the specific web hosting company. It reveals the domain registrar. A separate entity responsible for domain registration, not website hosting.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3349"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3349" aria-expanded="false" aria-controls="faq3349"> Can I use Ultahost WHOIS lookup for any domain extension? </button> </h3>
                        <div id="faq3349" class="accordion-collapse collapse" aria-labelledby="faqh3349" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p>Yes, you can use Ultahost WHOIS lookup for most domain extensions (TLDs), including popular ones like .com, .net, .org, as well as country-code TLDs (ccTLDs) such as .uk, .ca, and .au.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqh3350"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3350" aria-expanded="false" aria-controls="faq3350"> Does WHOIS lookup provide information about the domain's registration history? </button> </h3>
                        <div id="faq3350" class="accordion-collapse collapse" aria-labelledby="faqh3350" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                                <p>Yes, WHOIS typically includes information about the domain's registration history, including the date it was first registered, and any changes made to the registration over time.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="faqBotTxt mat-20 mat-xxl-40 fs-16 fs-xl-18 fw-500">Want to know more? Check our <a href="https://ultahost.com/knowledge-base/" class="text-themecolor">Knowledge base</a></div>
        </div>
    </div>
</section>
<!--<section class="pat-60 pab-50 pax-20 pax-xxl-0 homeServiceMap bg-lightblue secTopBotGap">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">-->
<!--                <div class="themeHeading mab-20 mab-md-40">-->
<!--                    <div class="text-center">-->
<!--                        <h2 class="headingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-700 mab-20">Domain DNS Lookup - Check DNS Records</h2>-->
<!--                        <div class="thParaSec fs-16 fs-xl-20 lh-26 lh-xl-32 mw-800px mx-auto">-->
<!--                            <p>Check DNS records, IP address, and how a website connects online with our free domain DNS lookup tool.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-lg-4 col-sm-6 mab-40">-->
<!--                <div class="singleBlock text-center strachableHeight blockTag gutter-b40 ssl_block">-->
<!--                    <div class="blockIcon">-->
<!--                        <div class="biconpart vertgrdbg">-->
<!--                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M47.3598 36.9765C49.7931 36.9765 51.7698 35.0099 51.7698 32.5865C51.7685 32.0087 51.6534 31.4368 51.431 30.9035C51.2087 30.3702 50.8835 29.8858 50.474 29.4782C50.0645 29.0706 49.5787 28.7476 49.0444 28.5276C48.51 28.3077 47.9376 28.1952 47.3598 28.1965C44.9265 28.1965 42.9531 30.1632 42.9531 32.5865C42.9558 33.7529 43.4214 34.8705 44.2477 35.6937C45.0741 36.5169 46.1934 36.9783 47.3598 36.9765Z"-->
<!--                                fill="#457BFF"></path>-->
<!--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.124 10.124C5 15.255 5 23.501 5 40C5 56.499 5 64.7485 10.124 69.8725C15.255 75 23.501 75 40 75C56.499 75 64.7485 75 69.8725 69.8725C75 64.752 75 56.499 75 40C75 23.501 75 15.2515 69.8725 10.124C64.752 5 56.499 5 40 5C23.501 5 15.2515 5 10.124 10.124ZM47.728 45.432C49.4672 45.4357 51.1901 45.0968 52.7984 44.4346C54.4066 43.7724 55.8687 42.7999 57.1011 41.5727C58.3336 40.3455 59.3122 38.8876 59.9812 37.2821C60.6501 35.6767 60.9963 33.9552 61 32.216C60.9963 30.4768 60.6501 28.7553 59.9812 27.1499C59.3122 25.5444 58.3336 24.0865 57.1011 22.8593C55.8687 21.6321 54.4066 20.6596 52.7984 19.9974C51.1901 19.3352 49.4672 18.9963 47.728 19C44.2161 18.9935 40.8454 20.3821 38.3571 22.8605C35.8689 25.3389 34.4669 28.7041 34.4595 32.216C34.4595 35.597 35.9995 38.0575 35.9995 38.0575L19.959 54.035C19.238 54.7525 18.23 56.618 19.959 58.34L21.8105 60.181C22.528 60.797 24.341 61.658 25.8215 60.181L27.981 58.032C30.1405 60.181 32.6115 58.9525 33.5355 57.724C35.079 55.5715 33.2275 53.419 33.2275 53.419L33.847 52.8065C36.808 55.757 39.4015 54.035 40.3255 52.8065C41.869 50.654 40.3255 48.5015 40.3255 48.5015C40.161 48.1939 39.9523 47.912 39.706 47.665C39.223 47.14 38.929 46.8215 40.0175 45.7365L41.8725 43.892C43.3495 45.1205 46.391 45.432 47.728 45.432Z"-->
<!--                                fill="#457BFF"></path>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blockContent">-->
<!--                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700 may-20">Instant DNS Insights</h5>-->
<!--                        <div class="bcPara fs-16 fs-md-16 fs-lg-18 lh-24 lh-lg-30"> Instantly get in-depth DNS info of any website with our easy-to-use DNS lookup tool. Make faster, smarter decisions. </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6 mab-40">-->
<!--                <div class="singleBlock text-center strachableHeight gutter-b40">-->
<!--                    <div class="blockIcon">-->
<!--                        <div class="biconpart vertgrdbg">-->
<!--                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M41.0527 60.1052C44.1798 60.1052 46.7148 57.5479 46.7148 54.3934C46.7148 51.2389 44.1798 48.6816 41.0527 48.6816C37.9256 48.6816 35.3906 51.2389 35.3906 54.3934C35.3906 57.5479 37.9256 60.1052 41.0527 60.1052Z"-->
<!--                                fill="#457BFF"></path>-->
<!--                                <path d="M62.868 32.4725V28.1304C62.868 18.7515 60.6101 6.31567 41.0532 6.31567C21.4964 6.31567 19.2385 18.7515 19.2385 28.1304V32.4725C9.5122 33.6883 6.31641 38.6209 6.31641 50.7441V57.2051C6.31641 71.4473 10.6585 75.7894 24.9006 75.7894H57.2059C71.448 75.7894 75.7901 71.4473 75.7901 57.2051V50.7441C75.7901 38.6209 72.5943 33.6883 62.868 32.4725ZM41.0532 64.4651C35.2522 64.4651 30.5627 59.7409 30.5627 53.9746C30.5627 48.1736 35.2869 43.4841 41.0532 43.4841C46.8196 43.4841 51.5438 48.2083 51.5438 53.9746C51.5438 59.7757 46.8543 64.4651 41.0532 64.4651ZM24.9006 32.1599C24.6227 32.1599 24.3796 32.1599 24.1017 32.1599V28.1304C24.1017 17.9525 26.9848 11.1788 41.0532 11.1788C55.1217 11.1788 58.0048 17.9525 58.0048 28.1304V32.1946C57.7269 32.1946 57.4838 32.1946 57.2059 32.1946H24.9006V32.1599Z"-->
<!--                                fill="#457BFF"></path>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blockContent">-->
<!--                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700 may-20">Check MX, CNAME Records</h5>-->
<!--                        <div class="bcPara fs-16 fs-md-16 fs-lg-18 lh-24 lh-lg-30"> Uncover more than just basic A records. Our DNS checker provides detailed information on MX records, CNAME records, and more. </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6 mab-40">-->
<!--                <div class="singleBlock text-center strachableHeight gutter-b40">-->
<!--                    <div class="blockIcon">-->
<!--                        <div class="biconpart vertgrdbg">-->
<!--                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M53.966 6.66675H26.0327C13.8993 6.66675 6.66602 13.9001 6.66602 26.0334V53.9334C6.66602 66.1001 13.8993 73.3334 26.0327 73.3334H53.9327C66.066 73.3334 73.2993 66.1001 73.2993 53.9667V26.0334C73.3327 13.9001 66.0993 6.66675 53.966 6.66675ZM25.4327 60.5001C25.4327 61.8667 24.2993 63.0001 22.9327 63.0001C21.566 63.0001 20.4327 61.8667 20.4327 60.5001V53.6001C20.4327 52.2334 21.566 51.1001 22.9327 51.1001C24.2993 51.1001 25.4327 52.2334 25.4327 53.6001V60.5001ZM42.4993 60.5001C42.4993 61.8667 41.366 63.0001 39.9993 63.0001C38.6327 63.0001 37.4993 61.8667 37.4993 60.5001V46.6667C37.4993 45.3001 38.6327 44.1667 39.9993 44.1667C41.366 44.1667 42.4993 45.3001 42.4993 46.6667V60.5001ZM59.566 60.5001C59.566 61.8667 58.4327 63.0001 57.066 63.0001C55.6994 63.0001 54.566 61.8667 54.566 60.5001V39.7667C54.566 38.4001 55.6994 37.2667 57.066 37.2667C58.4327 37.2667 59.566 38.4001 59.566 39.7667V60.5001ZM59.566 29.2334C59.566 30.6001 58.4327 31.7334 57.066 31.7334C55.6994 31.7334 54.566 30.6001 54.566 29.2334V26.0001C46.066 34.7334 35.4327 40.9001 23.5327 43.8667C23.3327 43.9334 23.1327 43.9334 22.9327 43.9334C21.7993 43.9334 20.7993 43.1667 20.4993 42.0334C20.166 40.7001 20.966 39.3334 22.3327 39.0001C33.566 36.2001 43.566 30.3001 51.4993 21.9667H47.3327C45.966 21.9667 44.8327 20.8334 44.8327 19.4667C44.8327 18.1001 45.966 16.9667 47.3327 16.9667H57.0993C57.2327 16.9667 57.3327 17.0334 57.466 17.0334C57.6327 17.0667 57.7993 17.0667 57.966 17.1334C58.1327 17.2001 58.266 17.3001 58.4327 17.4001C58.5327 17.4667 58.6327 17.5001 58.7327 17.5667C58.766 17.6001 58.766 17.6334 58.7993 17.6334C58.9327 17.7667 59.0327 17.9001 59.1327 18.0334C59.2327 18.1667 59.3327 18.2667 59.366 18.4001C59.4327 18.5334 59.4327 18.6667 59.466 18.8334C59.4993 19.0001 59.566 19.1667 59.566 19.3667C59.566 19.4001 59.5993 19.4334 59.5993 19.4667V29.2334H59.566Z"-->
<!--                                fill="#457BFF"></path>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blockContent">-->
<!--                        <h5 class="blockTitle fs-18 fs-lg-20 fs-xl-22 fs-xxl-24 fw-700 may-20">Free DNS Lookup Tool</h5>-->
<!--                        <div class="bcPara fs-16 fs-md-16 fs-lg-18 lh-24 lh-lg-30"> Use our DNS lookup tool completely free, with no registration required. Start finding the information you need right away! </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="themeFaq pax-20 pax-xxl-0 bg-grey pay-60 secTopBotGap">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-12">-->
<!--                <div class="themeHeading mab-20 mab-md-20">-->
<!--                    <div class="text-center">-->
<!--                        <div class="section-header-span">HAVE <span style="margin: 0;">QUESTIONS?</span></div>-->
<!--                        <h2 class="headingTitleheadingTitle fs-24 fs-xxl-38 fs-xl-36 fs-lg-28 fw-700 mab-20">Domain DNS FAQs</h2>-->
<!--                        <div class="thParaSec fs-16 fs-xl-20 lh-34 mw-900px mx-auto">-->
<!--                            <p>Discover FAQs about the DNS Lookup to learn more.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">-->
<!--                <div class="accordion themeAccordian" id="accordionExample">-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3321"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3321" aria-expanded="false" aria-controls="faq3321"> What is a DNS lookup tool? </button> </h3>-->
<!--                        <div id="faq3321" class="accordion-collapse collapse" aria-labelledby="faqh3321" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p data-sourcepos="5:1-5:272">A DNS lookup tool is a free online service that allows you to enter a domain name and retrieve its corresponding IP address and various DNS record types. These records act like instructions, directing users to the website's-->
<!--                                    location and functionalities like email servers.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3322"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3322" aria-expanded="false" aria-controls="faq3322"> Why is DNS lookup important? </button> </h3>-->
<!--                        <div id="faq3322" class="accordion-collapse collapse" aria-labelledby="faqh3322" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p>DNS lookup is crucial because it translates human-readable domain names into machine-readable IP addresses. This process enables users to access websites, send emails, and perform other online activities seamlessly.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3323"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3323" aria-expanded="false" aria-controls="faq3323"> What different types of DNS records can the Ultahost DNS tool lookup? </button> </h3>-->
<!--                        <div id="faq3323" class="accordion-collapse collapse" aria-labelledby="faqh3323" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p>Ultahost DNS lookup tool can search for a variety of DNS records, such as A, AAAA, MX, CNAME, TXT, and NS records, offering thorough insights into a domain's configuration.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3324"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3324" aria-expanded="false" aria-controls="faq3324"> Is it possible to use a DNS lookup tool to troubleshoot DNS-related issues? </button> </h3>-->
<!--                        <div id="faq3324" class="accordion-collapse collapse" aria-labelledby="faqh3324" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p data-block-id="845a93b5-728f-4294-9d9b-5ee07b462769" data-pm-slice="1 1 []">Yes, DNS lookup tools are commonly used for troubleshooting DNS-related problems. Such as DNS propagation issues, misconfigured DNS records, and DNS resolution errors.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3325"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3325" aria-expanded="false" aria-controls="faq3325"> Are there any limitations to the number of DNS lookups I can perform with a DNS lookup tool? </button> </h3>-->
<!--                        <div id="faq3325" class="accordion-collapse collapse" aria-labelledby="faqh3325" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p data-block-id="a47249ee-794b-4f21-a2a1-a86db4b3eb3f" data-pm-slice="1 1 []">No, there's no limitation on number of number of DNS lookups with our DNS checker. You can use DNS checker without any worry of limit.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3339"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3339" aria-expanded="false" aria-controls="faq3339"> How can I use the Ultahost DNS lookup tool to check DNS records for a domain? </button> </h3>-->
<!--                        <div id="faq3339" class="accordion-collapse collapse" aria-labelledby="faqh3339" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p>To use Ultahost DNS lookup tool, simply enter the domain name you want to analyze into the tool's search bar. The tool will then query DNS servers and display the corresponding DNS records for that domain.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="accordion-item">-->
<!--                        <h3 class="accordion-header" id="faqh3340"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3340" aria-expanded="false" aria-controls="faq3340"> Can I use a DNS lookup tool to check DNS records for subdomains? </button> </h3>-->
<!--                        <div id="faq3340" class="accordion-collapse collapse" aria-labelledby="faqh3340" data-bs-parent="#accordionExample">-->
<!--                            <div class="accordion-body">-->
<!--                                <p></p>-->
<!--                                <p data-block-id="1c46942c-1154-410d-8cd1-1c1a675e5ea6" data-pm-slice="1 1 []">Yes, Ultahost DNS lookup tools allow you to check DNS records for both main domains and subdomains. Simply enter the desired domain or subdomain into the tool's search bar.</p>-->
<!--                                <p></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="text-center">-->
<!--            <div class="faqBotTxt mat-20 mat-xxl-40 fs-16 fs-xl-18 fw-500">Want to know more? Check our <a href="https://ultahost.com/knowledge-base/" target="_blank" class="text-themecolor">Knowledge base</a></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

    
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
    <script defer src="assets/js/main.js"></script>
    <script type="text/javascript">
    window.onload = function() {
	$('#check-btn').click(function() {
		ddlcheckWebsite();
	});
	$('#check-websiteurl').keypress(function(event) {
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
        success: function(data) {
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
            }, 200).fadeOut(300, function() {
                $(this).width("0")
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            $("#bar_loading").animate({
                width: "100%"
            }, 200).fadeOut(300, function() {
                $(this).width("0")
            });
        }
    });
}
</script>
</body>

</html>