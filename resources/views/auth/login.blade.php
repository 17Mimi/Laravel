@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0">
                <!-- Header del formulario -->
                <div class="card-header bg-success-light border-0 text-center py-4">
                    <h3 class="mb-0 font-weight-bold text-success">Iniciar Sesión</h3>
                    <p class="text-muted mb-0 mt-2">Accede a tu cuenta</p>
                </div>

                <div class="card-body px-4 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Campo Email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label font-weight-semibold text-success">
                                Correo Electrónico
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white border-success">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input id="email" 
                                       type="email" 
                                       class="form-control border-left-0 @error('email') is-invalid @enderror" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required 
                                       autocomplete="email" 
                                       autofocus
                                       placeholder="tu@email.com">
                                
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        <small class="text-danger">
                                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="form-group mb-4">
                            <label for="password" class="form-label font-weight-semibold text-success">
                                Contraseña
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white border-success">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input id="password" 
                                       type="password" 
                                       class="form-control border-left-0 @error('password') is-invalid @enderror" 
                                       name="password" 
                                       required 
                                       autocomplete="current-password"
                                       placeholder="Tu contraseña">
                                
                                @error('password')
                                    <div class="invalid-feedback d-block">
                                        <small class="text-danger">
                                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Checkbox Remember Me -->
                        <div class="form-group mb-4">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" 
                                       type="checkbox" 
                                       name="remember" 
                                       id="remember" 
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label text-muted" for="remember">
                                    Recordar mi sesión
                                </label>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success btn-block py-2 font-weight-semibold">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Iniciar Sesión
                            </button>
                        </div>

                        <!-- Enlace de recuperación -->
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" class="text-decoration-none text-success">
                                    <small>¿Olvidaste tu contraseña?</small>
                                </a>
                            </div>
                        @endif
                    </form>
                </div>

                <!-- Footer opcional -->
                <div class="card-footer bg-light-green border-0 text-center py-3">
                    <small class="text-success">
                        ¿No tienes cuenta? 
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-success font-weight-semibold text-decoration-none">
                                Regístrate aquí
                            </a>
                        @endif
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS personalizado -->
<style>
    .min-vh-100 {
        min-height: 100vh;
    }
    
    .card {
        border-radius: 15px;
        overflow: hidden;
        border: 2px solid #e8f5e8;
    }
    
    .card-header {
        border-bottom: 1px solid #f8f9fa;
    }
    
    .bg-success-light {
        background: linear-gradient(135deg, #f0fff4 0%, #e8f5e8 100%) !important;
    }
    
    .bg-light-green {
        background: linear-gradient(135deg, #e6ffed 0%, #f0fff4 100%) !important;
    }
    
    .form-control {
        border-radius: 0 8px 8px 0;
        padding: 12px 15px;
        font-size: 14px;
        transition: all 0.3s ease;
        border-left: none;
        border-color: #28a745;
    }
    
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }
    
    .input-group-text {
        border-radius: 8px 0 0 8px;
        border: 1px solid #28a745;
        padding: 12px 15px;
        border-right: none;
    }
    
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        font-size: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    }
    
    .btn-success:hover {
        background: linear-gradient(135deg, #1e7e34 0%, #155724 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
    }
    .custom-control-label {
        font-size: 14px;
        color: #28a745;
    }
    
    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #28a745;
        border-color: #28a745;
    }
    
    /* Enlaces verdes */
    a {
        color: #28a745 !important;
    }
    
    a:hover {
        color: #1e7e34 !important;
    }
    
    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }
    
    .font-weight-semibold {
        font-weight: 600;
    }
    
    .text-decoration-none {
        text-decoration: none !important;
    }
    
    .text-decoration-none:hover {
        text-decoration: underline !important;
    }
    
    .invalid-feedback.d-block {
        display: block !important;
        margin-top: 5px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card {
            margin: 20px;
        }
        
        .card-body {
            padding: 2rem 1.5rem;
        }
    }
</style>
@endsection