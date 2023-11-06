<?php require_once __DIR__ . '/../header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Registro</h3>
                    <form>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="inputName" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="inputPassword" required>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="togglePassword()">
                                    <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPasswordConfirm" class="form-label">Confirmar Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="inputPasswordConfirm" required>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon-confirm" onclick="toggleConfirmPassword()">
                                    <i class="bi bi-eye-slash" id="toggleConfirmPasswordIcon"></i>
                                </button>
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
    $(document).ready(function() {
        $('#button-addon2').click(function() {
            var passwordField = $('#inputPassword');
            var passwordIcon = $('#togglePasswordIcon');
            togglePasswordVisibility(passwordField, passwordIcon);
        });

        $('#button-addon-confirm').click(function() {
            var confirmPasswordField = $('#inputPasswordConfirm');
            var confirmIcon = $('#toggleConfirmPasswordIcon');
            togglePasswordVisibility(confirmPasswordField, confirmIcon);
        });

        function togglePasswordVisibility(field, icon) {
            if (field.attr('type') == 'password') {
                field.attr('type', 'text');
                icon.removeClass('bi-eye-slash').addClass('bi-eye');
            } else {
                field.attr('type', 'password');
                icon.removeClass('bi-eye').addClass('bi-eye-slash');
            }
        }
    });
</script>

<?php require_once __DIR__ . '/../footer.php'; ?>