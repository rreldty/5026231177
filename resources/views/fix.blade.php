<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HomePage Teknisi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
      .Logo {
        width: 50px;
        height: auto;
        position: relative;
        left: 10px;
        top: 5px;
        border: 2px solid black;
        border-radius: 50%;
      }
      h2 {
        position: relative;
        top: 10px;
        background-color: #ebebeb;
        padding: 10px;
        border-radius: 5px;
      }
      .status-borrowed {
        color: red;
      }
      .status-available {
        color: green;
      }
      img {
        max-height: 80px;
        object-fit: contain;
      }
      .card-item {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #fff;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div><img src="pic/logo.png" class="Logo" /></div>
    <h2 class="text-center">HomePage Teknisi</h2>

    <div class="container mt-4">
      <h4>ALAT YANG SEDANG DISEWA</h4>
      <div class="row no-gutters">
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam2.png" class="img-fluid" alt="SONY Cinema Line" />
            <p>SONY Cinema Line<br><span class="status-borrowed">❌ 19 November 2024</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/lens1.png" class="img-fluid" alt="SONY NP-FZ100" />
            <p>SONY NP-FZ100<br><span class="status-borrowed">❌ 19 November 2024</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/lens2.png" class="img-fluid" alt="SONY FE 24-70mm" />
            <p>SONY FE 24-70mm F2.8 GM<br><span class="status-borrowed">❌ 19 November 2024</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam3.png" class="img-fluid" alt="Sony Maximum" />
            <p>Sony Maximum<br><span class="status-borrowed">❌ 19 November 2024</span></p>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <button class="btn btn-secondary">Cek Alat</button>
      </div>

      <h4 class="mt-5">MENUNGGU PERSETUJUAN</h4>
      <div class="row no-gutters">
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam4.png" class="img-fluid" alt="Nikon D7500" />
            <p>Nikon D7500<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/lens1.png" class="img-fluid" alt="Canon Lens EFS" />
            <p>Canon Lens EFS 18-135mm<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam5.png" class="img-fluid" alt="Sony PXW-Z90T" />
            <p>Sony PXW-Z90T XDCAM<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam6.png" class="img-fluid" alt="Canon EOS 4000D" />
            <p>Canon EOS 4000D<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam7.png" class="img-fluid" alt="Instax mini11" />
            <p>Instax mini11<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam8.png" class="img-fluid" alt="Instax slim-go" />
            <p>Instax slim-go<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam9.png" class="img-fluid" alt="Canon EOS 80D" />
            <p>Canon EOS 80D<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
        <div class="col-3 p-2">
          <div class="card-item text-center">
            <img src="pic/cam7.png" class="img-fluid" alt="Sony Zeiss" />
            <p>Sony Zeiss<br><span class="status-available">🟢 Diajukan pada 2/12/24</span></p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>