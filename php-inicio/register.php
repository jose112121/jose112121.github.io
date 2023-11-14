<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
include("php/config.php");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $primernombre = $_POST['primernombre'];
    $segundonombre = $_POST['segundonombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];

    //verifying the unique email
    $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

    if(mysqli_num_rows($verify_query) !=0 ){
        echo "<div class='message'>
                <p>Este correo electrónico ya está en uso, ¡intenta con otro por favor!</p>
            </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Regresar</button>";
    }
    else{
        mysqli_query($con,"INSERT INTO users(username, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Email, Age, Password, Genero, fecha)
        VALUES('$username','$primernombre','$segundonombre','$primerapellido','$segundoapellido','$email','$age','$password','$genero','$fecha')") or die("Ocurrió un error");

        echo "<div class='message'>
                <p>¡Registro exitoso!</p>
            </div> <br>";
        echo "<a href='index.php'><button class='btn'>Iniciar sesión ahora</button>";
    }
}else{
?>


            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="primernombre"> primer nombre</label>
                    <input type="text" name="primernombre" id="primernombre" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="segundonombre"> segundo nombre</label>
                    <input type="text" name="segundonombre" id="segundonombre" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="primerapellido"> primer apellido</label>
                    <input type="text" name="primerapellido" id="primerapellido" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="segundoapellido"> segundo apellido</label>
                    <input type="text" name="segundoapellido" id="segundoapellido" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
    <label for="genero">Género:</label>
    <select id="genero" name="genero">
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="no_binario">No binario</option>
        <option value="otro">Otro</option>
        <option value="genero_fluido">Género fluido</option>
        <option value="bigenero">Bigénero</option>
        <option value="androginia">Androginia</option>
        <option value="agenero">Agénero</option>
        <option value="queer">Queer</option>
        <option value="demiboy">Demiboy</option>
        <option value="demigirl">Demigirl</option>
        <option value="two_spirit">Two-spirit</option>
        <option value="pangenero">Pangénero</option>
        <option value="neutrois">Neutrois</option>
        <option value="genderqueer">Genderqueer</option>
        <option value="nonconforming">No conformante al género</option>
        <option value="trigenero">Trigénero</option>
        <option value="flux">Género fluctuante</option>
        <option value="intersex">Intersex</option>
        <option value="agender">Agénero</option>
        <option value="biogenero">Biogénero</option>
        <option value="multigénero">Multigénero</option>
        <option value="autogénero">Autogénero</option>
        <option value="ceterogénero">Ceterogénero</option>
        <option value="ambigénero">Ambigénero</option>
        <option value="fa'afafine">Fa'afafine</option>
        <option value="muxe">Muxe</option>
        <option value="gender questioning">Cuestionando el género</option>
        <option value="third gender">Tercer género</option>
        <option value="x-género">X-género</option>
        <option value="género_no_conforme">Género no conforme</option>
        <option value="otro_especificar">Otro (Especificar)</option>
    </select><br><br>


                <div class="fiel input">
                <label for="fecha">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>