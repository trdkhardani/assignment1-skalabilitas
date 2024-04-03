@include('template.header')

<style>
    body {
        background-color: #f8f9fa;
    }

    .login-form {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        height: 40px;
    }

    .btn-login {
        padding: 10px 20px;
    }
</style>

<body>
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }} {{-- secara otomatis akan menampilkan pesan error dari validasi yang kita buat di controller --}}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }} {{-- secara otomatis akan menampilkan pesan error dari validasi yang kita buat di controller --}}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary btn-login">Login</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
