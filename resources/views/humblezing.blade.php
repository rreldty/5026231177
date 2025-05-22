<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Humblezing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">



  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #fff;
      background-image: url('https://ugc.production.linktr.ee/Ywzp8PKjQl2qwnKrSyfH_846fae49fe8f39096145bdb29e3705bed.png?io=true&size=avatar-v3_0');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      position: relative;
      z-index: 0;
    }

    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.777); /* layer putih transparan */
      backdrop-filter: blur(40px);
      -webkit-backdrop-filter: blur(40px);
      z-index: -1;
    }

    .top-logo {
      margin: 20px 0;
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .top-logo img {
      width: 96px;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
      font-size: 20px;
      margin: 20px;
    }

    .toggle-switch {
      margin: 20px 0;
      display: flex;
      justify-content: center;
      margin: 20px auto;
      background-color: #958681a2;
      border-radius: 30px;
      padding: 3px;
      width: fit-content;
      transition: background 0.3s;
    }

    .toggle-switch button {
      border: none;
      background-color: transparent;
      color: white;
      font-weight: bold;
      padding: 10px 25px;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .toggle-switch .active {
      background-color: white;
      color: black;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .content {
      display: none;
      text-align: center;
      max-width: 500px;
      margin: auto;
    }

    .content.active {
      display: block;
    }

    .btn-custom {
      margin: 5px 0;
      padding: 15px;
      font-size: 16px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.826);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.008);
      transition: transform 0.2s ease-in-out;
    }

    .btn-custom:hover {
      transform: scale(1.03);
      background-color: #fff;
    }

    .btn-custom2 {
      margin: 15px 0;
      padding: 15px;
      font-size: 16px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.826);
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }

    .btn-custom2:hover {
      transform: scale(1.03);
      background-color: #fff;
    }

    .footer {
      position: sticky;
      bottom: 10px;
      display: flex;
      justify-content: center;
    }

    .clickable {
      cursor: pointer;
    }

    .backdrop-blur {
      backdrop-filter: blur(8px);
      background: rgba(255, 255, 255, 0.622);
      border-radius: 0.75rem;
      z-index: 0;
    }

    .product-card {
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
      transition: transform 0.2s;
    }
    .product-card:hover {
      transform: scale(1.03);
    }

  </style>
</head>

<body>
  <div class="top-logo">
    <img src="https://ugc.production.linktr.ee/Ywzp8PKjQl2qwnKrSyfH_846fae49fe8f39096145bdb29e3705bed.png?io=true&size=avatar-v3_0" alt="Humblezing Logo">
  </div>
  <h5 class="text-center fw-bold">Humblezing</h5>
  <div class="social-icons">
    <i class="fab fa-instagram"></i>
    <i class="fab fa-tiktok"></i>
    <i class="fab fa-youtube"></i>
    <i class="fab fa-facebook"></i>
    <i class="fab fa-whatsapp"></i>
  </div>

  <div class="toggle-switch">
    <button id="linksBtn" class="active" onclick="showContent('links')">Links</button>
    <button id="shopBtn" onclick="showContent('shop')">Shop</button>
  </div>

  <div id="links" class="content active">
    <div class="btn btn-light w-100 btn-custom" onclick="showContent('shop')">
      <div class="d-flex justify-content-around">
        <img src="https://ugc.production.linktr.ee/988e8230-e6f9-48ec-821d-7c160e5541c3_HBZ-4-e295ebcb-c1ed-47da-bf5d-be289c139344.jpeg?io=true&size=square-fit" width="100" />
        <img src="https://ugc.production.linktr.ee/71b21096-2d0a-434f-8cd2-9acbbad9b65a_HUMBLEZING-5-17af10eb-4c18-40cd-a739-994f230d5444.jpeg?io=true&size=square-fit" width="100" />
        <img src="https://ugc.production.linktr.ee/fb87aa63-ad45-4af6-833d-88beb7745a91_HBZ-204.jpeg?io=true&size=square-fit" width="100" />
      </div>
      <p class="fw-bold mt-2 mb-0">See Full Shop</p>
      <small class="text-muted">6 Products</small>
    </div>
    
    <div class="container">
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://maps.app.goo.gl/mSsC5EPgRZAFtgSWA'">Store Location</button>
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://humblezing.com/collections/all'">Order via Webstore (Local & International Order)</button>
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://shopee.co.id/humblezing'">Order via Shopee</button>
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://www.tokopedia.com/humblezing'">Order via Tokopedia</button>
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://wa.me/62811230331'">Customer Service</button>
      <button class="btn btn-light w-100 btn-custom2" onclick="location.href='https://wa.me/62811113890'">Corporate Order</button>
    </div>
  </div>

  <div id="shop" class="content">
    <div class="container">
      <div class="row g-2">
        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/collections/accessories/products/denali-bagpack-black'"><img src="https://ugc.production.linktr.ee/988e8230-e6f9-48ec-821d-7c160e5541c3_HBZ-4-e295ebcb-c1ed-47da-bf5d-be289c139344.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Denali Bagpack Black</p><small>IDR 475,000</small></div></button>
        </div>
        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/collections/accessories/products/foxtrot-daypack-black-1'"><img src="https://ugc.production.linktr.ee/71b21096-2d0a-434f-8cd2-9acbbad9b65a_HUMBLEZING-5-17af10eb-4c18-40cd-a739-994f230d5444.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Foxtrot Daypack Black</p><small>IDR 323,000</small></div></button>
        </div>

        <div class="btn btn-light w-100 btn-custom" data-bs-toggle="modal" data-bs-target="#totebagModal">
          <div class="d-flex justify-content-around">
            <img src="https://ugc.production.linktr.ee/fb87aa63-ad45-4af6-833d-88beb7745a91_HBZ-204.jpeg?io=true&size=square-fit" width="100">
            <img src="https://ugc.production.linktr.ee/c7d01412-af77-46c0-b474-ac15b065fddf_HBZ-153.jpeg?io=true&size=square-fit" width="100">
            <img src="https://ugc.production.linktr.ee/289b9332-de45-406f-ad96-f1b0aa7761d9_HBZ-1-e3524ca3-77c3-49cb-835e-2c6e70198ba7.jpeg?io=true&size=square-fit" width="100">
          </div>
          <p class="fw-bold mt-2 mb-0">Totebag Collections</p>
          <small class="text-muted">4 Products</small>
        </div>

        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/products/shako-totepack-black?_pos=5&_sid=50d03d46b&_ss=r'"><img src="https://ugc.production.linktr.ee/c7d01412-af77-46c0-b474-ac15b065fddf_HBZ-153.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Shako Totepack Black</p><small>IDR 420,000</small></div></button>
        </div>
        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/products/bona-totebag-black?_pos=4&_sid=50d03d46b&_ss=r'"><img src="https://ugc.production.linktr.ee/289b9332-de45-406f-ad96-f1b0aa7761d9_HBZ-1-e3524ca3-77c3-49cb-835e-2c6e70198ba7.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Bona Totebag Black</p><small>IDR 435,000</small></div></button>
        </div>
        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/products/marvel-totebag-navy?_pos=1&_sid=27f0e2506&_ss=r'"><img src="https://ugc.production.linktr.ee/fb87aa63-ad45-4af6-833d-88beb7745a91_HBZ-204.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Marvel Totebag Navy</p><small>IDR 340,000</small></div></button>
        </div>
        <div class="col-6">
          <button class="card btn-custom" onclick="location.href='https://humblezing.com/products/marvel-totebag-black?_pos=2&_sid=27f0e2506&_ss=r'"><img src="https://ugc.production.linktr.ee/0c93c726-a55d-492c-ae49-3adc108cd018_id-11134207-7r98o-lwcfun2ibwn1df.jpeg?io=true&size=square-fit" class="card-img-top"><div class="card-body text-center"><p class="mb-1">Marvel Totebag Black</p><small>IDR 323,000</small></div></button>
        </div>
      </div>
    </div>
  </div>


  <div class="footer">
    <button class="btn btn-light rounded-pill shadow-sm d-flex align-items-center gap-2 px-3 py-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="black">
        <path d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z" fill="#000000" />
      </svg>
      <span style="font-weight: 500;">Join humblezing on Linktree</span>
    </button>
  </div>

 <!-- Totebag Modal -->
<div class="modal fade" id="totebagModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content border-0 bg-transparent">
      <div class="position-absolute top-0 start-0 w-100 h-100 backdrop-blur"></div>
      <div class="position-relative p-4">
        <!-- Header (Theme Switch + Share + Close) -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
          </div>
          <div>
            <button class="btn btn-light rounded-circle" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
          </div>
        </div>

        <!-- Title -->
        <div class="text-center mb-4">
          <h5 class="fw-bold mb-1">Totebag Collections</h5>
          <small class="text-muted">4 Products</small>
        </div>

        <!-- Product Grid -->
        <div class="row g-3 justify-content-center">
          <div class="col-6 col-md-3">
            <a href="https://humblezing.com/products/marvel-totebag-navy?_pos=1&_sid=27f0e2506&_ss=r" class="text-decoration-none text-dark">
              <div class="card product-card">
                <img src="https://ugc.production.linktr.ee/fb87aa63-ad45-4af6-833d-88beb7745a91_HBZ-204.jpeg?io=true&size=square-fit" class="card-img-top">
                <div class="card-body text-center">
                  <p class="mb-1 fw-medium">Marvel Totebag Navy</p>
                  <small class="text-muted">IDR 340,000</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3">
            <a href="https://humblezing.com/products/shako-totepack-black?_pos=5&_sid=50d03d46b&_ss=r" class="text-decoration-none text-dark">
              <div class="card product-card">
                <img src="https://ugc.production.linktr.ee/c7d01412-af77-46c0-b474-ac15b065fddf_HBZ-153.jpeg?io=true&size=square-fit" class="card-img-top">
                <div class="card-body text-center">
                  <p class="mb-1 fw-medium">Shako Totepack Black</p>
                  <small class="text-muted">IDR 420,000</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3">
            <a href="https://humblezing.com/products/bona-totebag-black?_pos=4&_sid=50d03d46b&_ss=r" class="text-decoration-none text-dark">
              <div class="card product-card">
                <img src="https://ugc.production.linktr.ee/289b9332-de45-406f-ad96-f1b0aa7761d9_HBZ-1-e3524ca3-77c3-49cb-835e-2c6e70198ba7.jpeg?io=true&size=square-fit" class="card-img-top">
                <div class="card-body text-center">
                  <p class="mb-1 fw-medium">Bona Totebag Black</p>
                  <small class="text-muted">IDR 435,000</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3">
            <a href="https://humblezing.com/products/marvel-totebag-black?_pos=2&_sid=27f0e2506&_ss=r" class="text-decoration-none text-dark">
              <div class="card product-card">
                <img src="https://ugc.production.linktr.ee/0c93c726-a55d-492c-ae49-3adc108cd018_id-11134207-7r98o-lwcfun2ibwn1df.jpeg?io=true&size=square-fit" class="card-img-top">
                <div class="card-body text-center">
                  <p class="mb-1 fw-medium">Marvel Totebag Black</p>
                  <small class="text-muted">IDR 323,000</small>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script>
    function showContent(section) {
      document.getElementById('links').classList.remove('active');
      document.getElementById('shop').classList.remove('active');
      document.getElementById(section).classList.add('active');

      document.getElementById('linksBtn').classList.remove('active');
      document.getElementById('shopBtn').classList.remove('active');
      document.getElementById(section + 'Btn').classList.add('active');
    }
  </script>
</body>

</html>

