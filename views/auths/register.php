<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="register-container">
        <h2>Registro de Usuario</h2>
        <form action="path/to/your/script_for_registration.php" method="POST">
            <div class="form-group">
                <label for="firstName">Nombre:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Apellido:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="dob">Fecha de Nacimiento:</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Número de Teléfono:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
