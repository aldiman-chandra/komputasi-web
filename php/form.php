<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f3f4f6;
            padding: 20px;
        }

        .custom-form {
            width: 60%;
            margin: auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #007BFF;
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-label {
            font-weight: 500;
            color: #007BFF;
        }

        .btn-custom {
            background-color: #007BFF;
            color: white;
            border-radius: 50px;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .input-group-text {
            background-color: #007BFF;
            color: white;
            border: none;
        }

        .form-select {
            border-radius: 50px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Formulir Data Diri</h1>
        <p class="text-center">Lengkapi informasi di bawah ini</p>

        <form action="confirm.php" class="custom-form">
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan Email" name="email">
                    <span class="input-group-text">@gmail.com</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">No Handphone:</label>
                <input type="text" class="form-control" id="hp" placeholder="Masukkan No Handphone" name="hp">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" rows="3" id="Alamat" name="alamat" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Pekerjaan/Pelajar:</label>
                <input type="text" class="form-control" id="job" placeholder="Masukkan Pekerjaan/Pelajar" name="job">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin:</label><br>
                <input type="radio" class="form-check-input" id="radio1" name="gender" value="perempuan"> Perempuan
                <label class="form-check-label" for="radio1"></label>
                <input type="radio" class="form-check-input" id="radio2" name="gender" value="laki-laki"> Laki-laki
                <label class="form-check-label" for="radio2"></label>
            </div>
            <div class="mb-3">
                <label for="hobby" class="form-label">Hobby:</label>
                <textarea class="form-control" rows="2" id="hobby" name="hobby" placeholder="Masukkan Hobby"></textarea>
            </div>
            <div class="mb-4">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status">
                    <option value="">Pilih Status</option>
                    <option>Belum menikah</option>
                    <option>Sudah menikah</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-custom">Kirim</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>