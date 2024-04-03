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
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="/login" method="post">
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-login">Login</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
