<!DOCTYPE html>
<html lang="en">

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
                <img src="./images/profile.avif" alt="" />
                <input type="file" id="img" name="img" accept="image/*" />

                <h2>Mouaad Essa</h2>
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
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" />
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
                <label for="address">Address</label>
                <input type="text" name="address" id="address" />
                <label for="tel">Phone Number</label>
                <input type="tel" name="tel" id="tel" />
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
                <label for="user">UserName</label>
                <input type="text" name="user" id="user" />
                <label for="psw">Password</label>
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