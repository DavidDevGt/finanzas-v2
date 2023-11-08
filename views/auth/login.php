<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Ingresa tu contraseña" required>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                            <label class="form-check-label" for="rememberCheck">Recuérdame</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(inputId, iconId) {
        var passwordField = $('#' + inputId);
        var passwordIcon = $('#' + iconId);
        if (passwordField.attr('type') === 'password') {
            passwordField.attr('type', 'text');
            passwordIcon.removeClass('bi-eye-slash').addClass('bi-eye');
        } else {
            passwordField.attr('type', 'password');
            passwordIcon.removeClass('bi-eye').addClass('bi-eye-slash');
        }
    }

    $(document).ready(function() {
        $('#button-addon2').click(function() {
            togglePassword('inputPassword', 'togglePasswordIcon');
        });

        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            // Aquí iría la lógica para manejar el inicio de sesión.
        });
    });
</script>
<?php require_once __DIR__ . '/../layout/footer.php'; ?>