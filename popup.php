<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li {
            margin: 0;
            padding: 0;
            font-family: 'Viga', sans-serif;
            font-weight: lighter;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color: white;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-logo {
            color: black;
            text-decoration: none;
            font-size: 24px;
        }

        .navbar-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .navbar-links li {
            margin-right: 20px;

        }

        .navbar-links a:hover {
            color: #777;
        }

        .navbar-links a {

            font-weight: normal;
            color: black;
            text-decoration: none;
        }

        /* Style for the right corner buttons */
        .navbar-right {
            display: flex;
            align-items: center;
        }

        .navbar-button {
            margin-left: 20px;
            padding: 10px 20px;
            background-color: #d4cfd0;
            color: black;
            border-color: white;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition-delay: 0.2s;

            /* Add cursor style for better interaction */
        }

        .navbar-button:hover {

            background-color: white;
            border-color: #222;
        }
        #profile{
            display: grid;
            place-items: center;
        }
        #popup {
            background-color: #222;
            height: 50vh;
            width: 50vw;
            display: none;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .navbar-links {
                display: none;
            }

            .navbar-right {
                margin-left: auto;
            }
        }

        /* Other CSS styles ... */
        /* Responsive adjustments ... */
    </style>
</head>

<body>
    <nav class="navbar" id="nav">
        <div class="navbar-brand">
            <img src="img\log2.png" alt="" style=" width: 150px;height: auto;">
        </div>
        <ul class="navbar-links">
            <li><a href="#" style="color: #777;">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="navbar-right">
            <form method="post" action="">
                <input type="submit" class="navbar-button" name="logout" value="Logout">
                <a href="" id="usr">USER</a>
            </form>
        </div>
    </nav>
    <div id="profile-popup" style="display: none; position: absolute; top: 20%; left: 30%; transform: translate(-50%, -50%); background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
        <!-- Profile content goes here -->
        <h2>User Profile</h2>
        <p>Profile information goes here...</p>
        <button id="close-popup">X</button>
    </div>

    <script>
        var profilePopup = document.getElementById("profile-popup");
        var closePopup = document.getElementById("close-popup");
        var navbar = document.getElementById("nav");

        document.getElementById("usr").addEventListener("click", function() {
            event.preventDefault();
            profilePopup.style.display = "block";
            navbar.style.filter="blur(5px)";    

            
        });

        closePopup.addEventListener("click", function() {
            profilePopup.style.display = "none";
            navbar.style.filter="blur(0px)";
        });
    </script>
</body>

</html>