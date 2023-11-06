<?php require_once __DIR__ . '/../header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Iniciar Sesión</h3>
                    <form>
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
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
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
            if (passwordField.attr('type') == 'password') {
                passwordField.attr('type', 'text');
                passwordIcon.removeClass('bi-eye-slash').addClass('bi-eye');
            } else {
                passwordField.attr('type', 'password');
                passwordIcon.removeClass('bi-eye').addClass('bi-eye-slash');
            }
        });
    });
</script>

<?php require_once __DIR__ . '/../footer.php'; ?>