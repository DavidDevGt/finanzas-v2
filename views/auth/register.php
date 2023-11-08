<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow">
                <div class="card-body p-4">
                <h3 class="card-title text-center mb-4">Crear Mi Cuenta</h3>
                    <form id="registerForm">
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Ingresa tu nombre de usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="ejemplo@correo.com">
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Ingresa tu contraseña" required>
                                <span class="input-group-text">
                                    <i class="bi bi-eye-slash" id="togglePasswordIcon" onclick="togglePassword('inputPassword', 'togglePasswordIcon')"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPasswordConfirm" class="form-label">Confirmar Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirma tu contraseña" required>
                                <span class="input-group-text">
                                    <i class="bi bi-eye-slash" id="toggleConfirmPasswordIcon" onclick="togglePassword('inputPasswordConfirm', 'toggleConfirmPasswordIcon')"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
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
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();
            // Implementar lógica de validación y envío aquí
        });
    });
</script>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>