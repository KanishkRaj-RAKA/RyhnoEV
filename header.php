<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYNO EV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="shortcut icon" href="image/Rhyno Logo .png" type="image/x-icon">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            position: relative; 
        }
        .logo img {
            height: 100px;
        }
        .headerMenu {
            display: flex;
            align-items: center;
        }
        .headerMenu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .headerMenu ul li {
            margin: 0 15px;
        }
        .headerMenu ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 5px 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        .headerMenu ul li a:hover {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
        }
        .headerMenu .hamburger {
            /* display: none; */
            cursor: pointer;
            font-size: 20px;
        }
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }
            .headerMenu {
                width: 100%;
            }
            .headerMenu ul {
                flex-direction: row;
                width: 100%;
                padding: 0;
                justify-content:space-around;
            }
            .headerMenu ul li {
                margin: 5px 0;
            }
            .headerMenu ul li a {
                display: block;
                padding: 10px 0;
            }
        }
        @media (max-width: 576px) {
            .logo img {
                height: 80px; 
            }
            .headerMenu ul li a {
                font-size: 14px; 
            }
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            background-color: #333333;
            color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1000;
        }
        .sidebar a {
            padding: 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #f1f1f1;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 20px;
            left: 15px;
            font-size: 36px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="image/Rhyno Logo .png" alt="logo">
        </div>
        <div class="headerMenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="usp.php">Our USP</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="hamburger" onclick="toggleNav()"><i class="fa-solid fa-bars" id="hamburger-icon"></i></li>
            </ul>
        </div>
    </div>

    <!-- menu bar -->
    <div id="sidebar" class="sidebar">
        <span class="closebtn" onclick="closeNav()">&times;</span>
        <h2 style="margin-left:20px">Product</h2>
        <a href="product1.php">RHYNO SE03</a>
        <a href="product2.php">RHYNO SE03 LITE</a>
        <a href="product3.php">RHYNO SE03 MAX</a>
        <hr>
        <a href="compareall.php">COMPARE ALL</a>
        <a href="per-book.php">PRE BOOK NOW</a>
        <a href="rentals.php">Rentals</a>
        <div class="col-md-4 fot-soc" >
                <h4 style="margin-left:20px">SOCIAL MEDIA</h4>
                <ul style="display:flex; flex-direction:row">
                   <a href="https://www.instagram.com/?hl=en"> <i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a>
                </ul>
            </div>
        
    </div>

    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("hamburger-icon").classList.remove('fa-bars');
            document.getElementById("hamburger-icon").classList.add('fa-x');
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("hamburger-icon").classList.remove('fa-x');
            document.getElementById("hamburger-icon").classList.add('fa-bars');
        }

        function toggleNav() {
            const sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                closeNav();
            } else {
                openNav();
            }
        }
    </script>
</body>
</html>
