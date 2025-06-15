<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farrel Aditya Rosyidi : 5026231177</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .colorful-header {
            background: linear-gradient(120deg, #aa83ff, #6fb5ff, #00d2d3);
            padding: 4rem 1rem 3rem;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.07);
            animation: gradientMove 10s ease infinite;
            background-size: 300% 300%;
        }

        .colorful-header h1 {
            font-size: 2.7rem;
            color: #fff;
            font-weight: 700;
            text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.15);
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

     .modern-navbar {
        background-color: white;
        border-radius: 60px;
        padding: 0.6rem 1.2rem;
        margin: -35px auto 30px;
        max-width: 1000px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: center;
        overflow-x: auto;
        white-space: nowrap;
        gap: 0.8rem;
        scrollbar-width: none;
    }

    .modern-navbar::-webkit-scrollbar {
        display: none;
    }

    .modern-navbar a {
        flex: 0 0 auto;
        text-decoration: none;
        color: #333;
        padding: 0.4rem 1rem;
        border-radius: 30px;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .modern-navbar a:hover {
        background-color: #e8f0fe;
        color: #1a73e8;
        box-shadow: 0 8px 20px rgba(26, 115, 232, 0.15);
        transform: scale(0.97);
        box-shadow: 0 4px 14px rgba(26, 115, 232, 0.1);
    }

    .content-container {
        padding: 2rem 1rem;
        max-width: 960px;
        margin: 0 auto;
    }
    </style>
</head>

<body>

    <!-- Header dengan gradasi biru tosca -->
    <div class="colorful-header">
        <h1>Farrel Aditya Rosyidi : 5026231177</h1>
    </div>

    <!-- Navbar minimalis -->
    <nav class="modern-navbar">
        <a href="/frontend"><i class="fas fa-laptop-code"></i> All Front End</a>
        <a href="/pegawai"><i class="fas fa-user-tie"></i> Pegawai</a>
        <a href="/tugascrud"><i class="fas fa-tasks"></i> Tugas CRUD</a>
        <a href="#"><i class="fas fa-file-alt"></i> EAS</a>
        <a href="/latihan1"><i class="fas fa-pen-nib"></i> Latihan 1</a>
        <a href="/latihan2"><i class="fas fa-cubes"></i> Latihan 2</a>
        <a href="/latihan3"><i class="fas fa-vials"></i> Latihan 3</a>
    </nav>

    <!-- Konten -->
    <div class="content-container">
        @yield('content')
    </div>

</body>

</html>
