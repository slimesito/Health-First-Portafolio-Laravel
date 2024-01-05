<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{asset('newlogin/loginstyles.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section>        
        <div class="form-box">
            <div class="form value">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Login</h2>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" name="password" required autocomplete="current-password">
                        <label for="">Contraseña</label>
                    </div>

                    <div class="forget">
                        <label for="remember_me" class="flex items-center">
                            <checkbox id="remember_me" name="remember" />
                            @if (Route::has('password.request'))
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">Recuérdame <a href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            @endif
                        </label>
                    </div>

                    <button>Inicia Sesión</button>
                    
                    <div class="register">
                        <p>No tienes una cuenta? <a href="{{route('register')}}">Regístrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>