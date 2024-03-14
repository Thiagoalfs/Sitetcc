<!DOCTYPE html>
<body>

<?php
    $email = $_POST['email'];
    $senha = $_POST['password'];

    if ($email == 'admin@gmail.com' && $senha == 'admin') {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: home.html');
    } else {
        echo "Nome de usuário ou senha inválidos";
    }
?>



</body>
</html>
