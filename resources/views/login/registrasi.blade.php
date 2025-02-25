<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        @font-face {
            font-family: 'Raleway';
            src: url('{{ asset('font/raleway.woff2') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

        .input-group {
            border: 1px solid #ccc; 
            border-radius: 0.375rem; 
        }

        .input-group input {
            border-right: none; 
            border-radius: 0.375rem 0 0 0.375rem;
        }

        .input-group button {
            border-left: none;  
            border-right: none;  
            border-top: none;  
            border-bottom: none;  
        }

    </style>
</head>
<body>
    <!-- flex -->
    <div class="d-flex">
        <!-- Kolom Kiri -->
        <div class="colkiri col-lg-5 container-fluid position-fixed d-flex align-items-center justify-content-center" style="background-color: #0B3D91; height: 100vh;">
            <div class="text-center">
                <img src="{{asset('img/login.svg')}}" style="height:300px;" alt="">
                <p class="fw-bold fs-5 pt-4" style="color: #FFFFFF;">Selamat datang di 
                <br>ALC Gampengrejo</p>
            </div>
        </div>
        <!-- Kolom Kanan -->
        <div class="colkanan col-lg-7 offset-lg-5 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <form method="POST" action="{{ route('register') }}" class="w-75 text-center">
                @csrf 
                <img src="{{asset('img/logo.png')}}" alt="Logo">
                <p class="fs-4 pt-4 pb-4 fw-bold">Registrasi Akun</p>
                

                
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                </div>
                
                <!-- Email -->
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <!-- akhir email -->


                <!-- Password -->
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <!-- akhir password -->

                <!-- Input Konfirmasi Password -->
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password" required>
                        <button type="button" class="btn btn-outline-secondary" id="togglePasswordConfirm">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
                <p class="pt-4" style="color: #CACACA;">Sudah memiliki akun? <a href="{{ route('login') }}" style="color: #0B3D91;">Login</a></p>
            </form>
        </div>
    </div>
    <!-- akhir flex -->

    <!-- Script Toggle Password -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye');
            this.querySelector('i').classList.toggle('bi-eye-slash');
        });

        document.getElementById('togglePasswordConfirm').addEventListener('click', function () {
            const passwordConfirm = document.getElementById('password_confirmation');
            const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirm.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye');
            this.querySelector('i').classList.toggle('bi-eye-slash');
        });

        //peringatan tcuy
        @if (session('success'))
            alert('{{ session('success') }}');
        @endif
        //akhir tcuy
    </script>
    <script>
        AOS.init();
    </script>
</body>
</html>
