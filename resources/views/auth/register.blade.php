<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regístrate</title>
    <link rel="stylesheet" href="{{asset('newlogin/registerstyles.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section>        
        <div class="form-box">
            <div class="form value">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Regístrate</h2>

                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input id="email" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                        <label for="email">Nombre</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" name="password" required autocomplete="new-password">
                        <label for="">Contraseña</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                        <label for="">Confirmar contraseña</label>
                    </div>

                    <button>Regístrate</button>
                
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>