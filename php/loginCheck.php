<?php
    session_start();
    include ("../connection/connexion.php");
    $mail = $conn->real_escape_string($_POST['mail']);
    $password = $conn->real_escape_string($_POST['psw']);
    $query = "SELECT * FROM client WHERE email = '$mail' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
        $_SESSION['nom']=$row['nomP'];
        $_SESSION['prenom']=$row['prenomP'];
        $_SESSION['cni']=$row['CNI'];
        $_SESSION['adresse']=$row['adresse'];
    } else {
       header("location:index.php");
    }
    $conn->close();