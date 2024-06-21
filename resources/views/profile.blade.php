<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            max-width: 600px;
            margin: 100px auto;
            padding: 40px; /* Anda bisa menyesuaikan padding sesuai kebutuhan */
            background-color: white;
            border: 4px solid #dee2e6; /* Mengubah border menjadi 4px */
            border-radius: 0; /* Menghapus border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .profile-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .profile-header p {
            margin: 0;
            color: gray;
        }
        .info-section, .security-section {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #fff;
        }
        .info-section h2, .security-section h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .info-item, .security-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <div class="profile-header">
            <img src="https://via.placeholder.com/100" alt="Profile Picture">
            <div>
                <h1>{{ $user['first_name'] }} {{ $user['last_name'] }}</h1>
                <p>{{ $user['student_id'] }}</p>
                <p>{{ $user['department'] }}</p>
            </div>
        </div>
        <div class="info-section">
            <h2>Informasi Personal</h2>
            <div class="info-item">
                <strong>Nama Awal:</strong> {{ $user['first_name'] }}
            </div>
            <div class="info-item">
                <strong>Nama Akhir:</strong> {{ $user['last_name'] }}
            </div>
            <div class="info-item">
                <strong>Nomor Induk Mahasiswa:</strong> {{ $user['student_id'] }}
            </div>
        </div>
        <div class="security-section">
            <h2>Keamanan</h2>
            <div class="security-item">
                <strong>Kata Sandi:</strong> {{ $user['password'] }}
            </div>
            <button class="btn btn-danger">Ganti Kata Sandi</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
