<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    header("Location: index.php?error=Usuário " . $_POST['username'] . " não existe");
}
?>