<!DOCTYPE html>
<html lang="en">
<?php
include('./connection/connexion.php');

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/profileStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>Profile</title>
</head>

<body>
    <div class="profile-container">
        <div class="profile-container_left">
            <div class="profile-image">
                <img src=<?php echo $_SESSION['photoClient']; ?> alt="" />
                <input type="file" id="img" name="img" accept="image/*" />

                <h2>welcome <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?></h2>
            </div>

            <ul class="profile-buttons">
                <li id="Account" class="active">
                    <i class="fa-solid fa-address-card"></i>
                    Account
                </li>
                <li id="Password">
                    <i class="fa-solid fa-lock"></i>
                    Password
                </li>
            </ul>
        </div>
        <div class="profile-container_right">
            <h1>Account Settings</h1>
            <form action="" class="account-form">
                <label for="cni">CNI</label>
                <input type="text" name="cni" id="fullname" value=<?php echo $_SESSION['cni']; ?> />
                <label for="fullname">First Name</label>
                <input type="text" name="firstName" id="fullname" value=<?php echo $_SESSION['nom']; ?> />
                <label for="fullname">Last Name</label>
                <input type="text" name="lastName" id="fullname" value=<?php echo $_SESSION['prenom']; ?> />
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value=<?php echo $_SESSION['email']; ?> />
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value=<?php echo $_SESSION['adresse']; ?> />
                <label for="tel">Phone Number</label>
                <input type="tel" name="tel" id="tel" value=<?php echo $_SESSION['tel']; ?> />
                <div class="radio-grp">
                    <input type="radio" id="male" name="gender" value="male" />
                    <label for="male">Male</label><br />
                    <input type="radio" id="female" name="gender" value="female" />
                    <label for="female">Female</label><br />
                </div>
                <button>Save Changes</button>
            </form>

            <!--
            ? password Form
        -->
            <form action="" class="password-form toggle">
                <label for="user">Current Password</label>
                <input type="password" name="user" id="user" value=<?php echo $_SESSION['passwordClient']; ?> />
                <label for="psw">New Password</label>
                <input type="password" name="psw" id="psw" />
                <label for="cpsw">Confirm Password</label>
                <input type="password" name="cpsw" id="cpsw" />
                <button>Save Changes</button>
            </form>
        </div>
    </div>
    <script src="./js/profileScript.js"></script>
</body>

</html>