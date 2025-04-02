<x-layout>

    <x-slot name="Register_css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            :root {
                --primary: #92400b;
                --primary-dark: #793509;
                --secondary: #b85c38;
                --accent: #e09132;
            }

            .register-section {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                padding: 5rem 2rem;
            }

            .card {
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                max-width: 450px;
                width: 100%;
            }

            .card-header {
                background-color: white;
                border-bottom: none;
                text-align: center;
                padding-top: 30px;
                padding-bottom: 10px;
            }

            .card-header h2 {
                color: var(--primary);
                font-weight: bold;
                margin-bottom: 5px;
            }

            .card-header p {
                color: #666;
                font-size: 14px;
            }

            .form-control {
                border-radius: 4px;
                padding: 12px;
                border: 1px solid #ddd;
            }

            .form-control:focus {
                border-color: var(--accent);
                box-shadow: 0 0 0 0.2rem rgba(224, 145, 50, 0.25);
            }

            .btn-primary {
                background-color: var(--primary);
                border-color: var(--primary);
                padding: 12px;
                font-weight: 600;
                border-radius: 4px;
            }

            .btn-primary:hover {
                background-color: var(--primary-dark);
                border-color: var(--primary-dark);
            }

            .or-divider {
                text-align: center;
                margin: 20px 0;
                color: #777;
                position: relative;
            }

            .or-divider::before,
            .or-divider::after {
                content: "";
                position: absolute;
                top: 50%;
                width: 45%;
                height: 1px;
                background-color: #ddd;
            }

            .or-divider::before {
                left: 0;
            }

            .or-divider::after {
                right: 0;
            }

            .social-buttons .btn {
                padding: 10px;
                border: 1px solid #ddd;
                width: 100%;
                background-color: white;
                color: #555;
            }

            .social-buttons .btn:hover {
                background-color: #f8f9fa;
            }

            .social-buttons .btn-google {
                color: #DB4437;
            }

            .social-buttons .btn-facebook {
                color: #4267B2;
            }

            .social-buttons .btn-apple {
                color: #000;
            }

            .form-check-label {
                font-size: 14px;
                color: #666;
            }

            .form-check-label a {
                color: var(--secondary);
                text-decoration: none;
            }

            .form-check-label a:hover {
                text-decoration: underline;
            }

            .form-check-input {
                margin-top: 0.25rem;
            }

            .login-link {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
                color: #666;
            }

            .login-link a {
                color: var(--secondary);
                text-decoration: none;
                font-weight: 600;
            }

            .login-link a:hover {
                text-decoration: underline;
            }

            .input-group-text {
                background-color: transparent;
                border-left: none;
            }

            .input-group .form-control {
                border-right: none;
            }

            /* Make error message visible */
            .invalid-feedback {
                display: block;
                color: #dc3545;
                margin-top: 0.25rem;
            }

            /* Add border for invalid inputs */
            .form-control.is-invalid {
                border-color: #dc3545;
                padding-right: calc(1.5em + 0.75rem);
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
        </style>
    </x-slot>

    <div class="container">
        <section class="register-section">
            <div class="card">
                <div class="card-header">
                    <h2>Login</h2>
                    <p>Welcome back</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <div class="input-group">
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    value="{{ old('email') }}"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input
                                    name="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="far fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>

                        <div class="or-divider">Or continue with</div>

                        <div class="social-buttons row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-google mb-2">
                                    <i class="fab fa-google"></i>
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-facebook mb-2">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-apple mb-2">
                                    <i class="fab fa-apple"></i>
                                </button>
                            </div>
                        </div>

                        <div class="login-link">
                            Don't have an account? <a href="/register">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="Register_script">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Toggle password visibility
            document.querySelector('.fa-eye').addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        </script>
    </x-slot>

</x-layout>
