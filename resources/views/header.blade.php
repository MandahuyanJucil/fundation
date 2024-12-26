<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Side Navigation</title>
    <style>
 body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
    background-color: #F5EFFF;
    color: #333;
    padding-top: 60px;
}

.aaa {
    text-decoration: none;
    color: #000;
}

a {
    color: rgb(246, 246, 246);
    text-decoration: none;
}

/* Navbar */
.navbar {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeInDown 1s ease; /* Fade-in animation for navbar */
}

/* Navbar Logo */
.navbar-logo {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    margin-right: 20px;
    animation: scaleLogo 1s ease; /* Logo animation */
}

.navbar-logo img {
    width: 100px;
    height: auto;
}

/* Dropdown container */
.dropdown-container {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    position: relative;
}

/* Menu button */
.dropdown-button {
    background-color: #A294F9;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    margin: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.dropdown-button:hover {
    background-color: #0056b3;
    transform: scale(1.05); /* Scale effect on hover */
}

/* Dropdown Content */
.dropdown-content {
    position: fixed;
    top: 0;
    right: -300px;
    width: 300px;
    height: 100%;
    background-color: #A294F9;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
    transition: right 0.5s ease; /* Smooth slide animation */
    z-index: 1000;
}

.dropdown-content.active {
    right: 0;
}

/* Menu items hover animation */
.menu-item {
    padding: 15px;
    border-bottom: 1px solid #ccc;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.menu-item:hover {
    background-color: #CDC1FF;
    transform: translateX(10px); /* Slide effect */
}

.menu-item h3 {
    margin: 0;
    font-size: 18px;
}

.logout h3 {
    color: red;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleLogo {
    from {
        opacity: 0;
        transform: scale(0.5);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@media (max-width: 768px) {
    .dropdown-button {
        font-size: 14px;
        padding: 8px 16px;
    }

    .dropdown-content {
        width: 250px;
    }
}

</style>

</head>
<body>
<nav class="header-navbar">
    <div class="navbar-logo">
        <img src="http://localhost/dashboard/fundation/public/img/logo.png" alt="Logo">
    </div>

    <div class="dropdown-container">
        <button class="dropdown-button" onclick="toggleDropdown()">Menu</button>
        <div id="dropdown-menu" class="dropdown-content">
            <div class="menu-item">
                <a  class="aaa" href="http://localhost/dashboard/fundation/public/admin_dasboard"><h3>Dashboard</h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/accoutinformation"><h3>Account Information</h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/events"><h3>Events</h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/chalice"><h3>Maya's Hope<p>Sponsored</p></h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/mayashope"><h3>Chalice</h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/mayashope_onrtime_record"><h3>Maya's Hope <p>One Time Support</p></h3></a>
            </div>
            <div class="menu-item">
                <a class="aaa" href="http://localhost/dashboard/fundation/public/mayaform"><h3>Qualification Form</h3></a>
            </div>
            <div class="menu-item">
                <a href="{{ route('logout') }}" class="logout"><h3>Log Out</h3></a>
            </div>
        </div>
    </div>
</nav>


    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('active'); 
        }
    </script>
</body>
</html>
