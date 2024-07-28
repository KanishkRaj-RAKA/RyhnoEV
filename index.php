<?php
include 'header.php'; //header
?>

    <link rel="stylesheet" href="index.css">


<div class="homeSection">
    <div class="fontLine">
        <p>Let's Elevate Your Ride Experience With Rhyno <br> Where <span id="changingWord">Superiority</span> Meets Style.</p>
    </div>
</div>

<div class="spacification">
    <div class="card1">
        <div class="detal">
            <i class="fa-solid fa-bolt"></i>
            <h3>Made in India</h3>
            <p>For Indians By Indians</p>
        </div>
    </div>
    <div class="card2">
        <div class="detal">
            <i class="fa-solid fa-motorcycle"></i>
            <h3>Long Riding Range</h3>
            <p>Range that's true to your riding style</p>
        </div>
    </div>
    <div class="card3">
        <div class="detal">
            <i class="fa-solid fa-battery-full"></i>
            <h3>Removable Battery</h3>
            <p>Charge At Your Convenience, Wherever !</p>
        </div>
    </div>
    <div class="card4">
        <div class="detal">
            <i class="fa-solid fa-wifi"></i>
            <h3>Wifi</h3>
            <p>Easy to connect</p>
        </div>
    </div>
</div>

<!-- product list -->
<section class="home-section">
    <div class="product">
        <img src="image/golden.png" alt="SE03" id="product1-img" class="product1-img">
        <div class="product-details" id="product1-details">
            <h2>RHYNO SE03</h2>
            <p>Indulge in the perfect harmony of power and range with this Rhyno. Offering an exhilarating experience with its robust 2000W motor, it ensures a thrilling ride while still delivering an impressive 80-100 km range on a single charge. Like its counterparts, this machine features the safety assurance of a fire-safe advanced LFP battery, along with the comprehensive benefits of owning a Rhino. Boasting a formidable combination of a 2000W motor and a 2.7kWh battery, this beast is ready to roar on the roads, providing an electrifying journey at every turn. Check out the other details below!</p>
            <button class="bookNow" id="product1-book">Book Now</button>
            <button class="bookNow" id="product1-spe">Specification</button>
        </div>
    </div>

    <div class="product">
        <img src="image/black.png" alt="SE03 Lite" id="product2-img" class="product2-img">
        <div class="product-details" id="product2-details">
            <h2>RHYNO SE03 LITE</h2>
            <p>Indulge in the perfect harmony of power and range with this Rhyno. Offering an exhilarating experience with its robust 2000W motor, it ensures a thrilling ride while still delivering an impressive 80-100 km range on a single charge. Like its counterparts, this machine features the safety assurance of a fire-safe advanced LFP battery, along with the comprehensive benefits of owning a Rhino. Boasting a formidable combination of a 2000W motor and a 2.7kWh battery, this beast is ready to roar on the roads, providing an electrifying journey at every turn. Check out the other details below!</p>
            <button class="bookNow" id="product2-book">Book Now</button>
            <button class="bookNow" id="product2-spe">Specification</button>
        </div>
    </div>

    <div class="product">
        <img src="image/blue.png" alt="SE03 MAX" id="product3-img" class="product3-img">
        <div class="product-details" id="product3-details">
            <h2>RHYNO SE03 MAX</h2>
            <p>Indulge in the perfect harmony of power and range with this Rhyno. Offering an exhilarating experience with its robust 2000W motor, it ensures a thrilling ride while still delivering an impressive 80-100 km range on a single charge. Like its counterparts, this machine features the safety assurance of a fire-safe advanced LFP battery, along with the comprehensive benefits of owning a Rhino. Boasting a formidable combination of a 2000W motor and a 2.7kWh battery, this beast is ready to roar on the roads, providing an electrifying journey at every turn. Check out the other details below!</p>
            <button class="bookNow" id="product3-book">Book Now</button>
            <button class="bookNow" id="product3-spe">Specification</button>
            <div class="color-options">
                <p>Choose Color:</p>
                <div onclick="changeImage('product3-img', 'image/blue.png')" class="color1"></div>
                <div onclick="changeImage('product3-img', 'image/red.png')" class="color2"></div>
            </div>
        </div>
    </div>
</section>




<div class="Pcontainer">
    <div class="color-selector">
        <div class="model-selectot">
            <div class="color-option" data-color="red" onclick="changeColor('SE03')">
                <span>RHYNO SE03</span>
            </div>
            <div class="color-option" data-color="black" onclick="changeColor('LLITE')">
                <span>RHYNO SE03 LLITE</span>
            </div>
            <div class="color-option" data-color="white" onclick="changeColor('MAX')">
                <span>RHYNO SE03 MAX</span>
            </div>
        </div>
      <div class="bike-details">
        <i class="fa-solid fa-battery-full"></i>
        <p id="battery">0-100% in 4.5 hours</p>
        <i class="fa-solid fa-gauge"></i>
        <p id="speed">85 KM/H Top Speed</p>
        <i class="fa-solid fa-bolt"></i>
        <p id="range">150 KMS per charge</p>
      </div>
      <button class="bookNow" id="compare">COMPARE ALL</button>
    </div>
    
    <div class="bike-display">
      <img id="bikeImage" src="image/red.png" alt="Bike Image">
      
    </div>
</div>


<a href="per-book.php" class="pre-book-now">Pre-book Now</a>
<!--Start of Tawk.to Script-->
<div class="chat">
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/669c2e8a32dca6db2cb2d181/1i391bk3i';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    </div>
<!--End of Tawk.to Script-->

<!-- JS file -->
<script >
    // word
    const words = ["Elegance", "Minimalism", "Comfort"];
    let index = 0;
    function changeWord() {
        document.getElementById("changingWord").innerText = words[index];
        index = (index + 1) % words.length;
    }
    setInterval(changeWord, 3000);

    function openProductPage(id) {
        const pages = {
            'product1': 'product1.php',
            'product2': 'product2.php',
            'product3': 'product3.php',
            'bookNow': 'per-book.php',
            'compare': 'compareall.php'
        };
        if (pages[id]) {
            window.open(pages[id], '_blank');
        } else {
            console.error('No page found for id:', id);
        }
    }
    document.getElementById('product1-spe').addEventListener('click', function() {
        openProductPage('product1');
    });
    document.getElementById('product2-spe').addEventListener('click', function() {
        openProductPage('product2');
    });
    document.getElementById('product3-spe').addEventListener('click', function() {
        openProductPage('product3');
    });
    document.getElementById('product1-book').addEventListener('click', function() {
        openProductPage('bookNow');
    });
    document.getElementById('product2-book').addEventListener('click', function() {
        openProductPage('bookNow');
    });
    document.getElementById('product3-book').addEventListener('click', function() {
        openProductPage('bookNow');
    });
    document.getElementById('compare').addEventListener('click', function() {
        openProductPage('compare');
    });

    function changeImage(imageId, newColorSrc) {
        var imgElement = document.getElementById(imageId);
        imgElement.src = newColorSrc;
    }

    document.querySelector('.color1').addEventListener('click', function() {
        changeColor('product3-img', 'image/blue.png');
    });

    document.querySelector('.color2').addEventListener('click', function() {
        changeColor('product3-img', 'image/red.png');
    });


    const colorData = {
        SE03: {
            image: 'image/golden.png',
            battery: '0-100% in 4 hours',
            speed: '85 KM/H Top Speed',
            range: '150 KMS per charge',
        },
        LLITE: {
            image: 'image/black.png',
            battery: '0-100% in 4.2 hours',
            speed: '90 KM/H Top Speed',
            range: '160 KMS per charge',
        },
        MAX: {
            image: 'image/blue.png',
            battery: '0-100% in 6hours',
            speed: '110 KM/H Top Speed',
            range: '185 KMS per charge',
        },
    };

    function changeColor(color) {
        const bikeImage = document.getElementById('bikeImage');
        const battery = document.getElementById('battery');
        const speed = document.getElementById('speed');
        const range = document.getElementById('range');

        if (colorData[color]) {
            bikeImage.src = colorData[color].image;
            battery.textContent = colorData[color].battery;
            speed.textContent = colorData[color].speed;
            range.textContent = colorData[color].range;
        } else {
            console.error('No color data found for:', color);
        }
    }

    setTimeout(function() {
        document.getElementById('product1-img').classList.add('animate-left');
        document.getElementById('product1-details').classList.add('animate-right');
    }, 500);

    setTimeout(function() {
        document.getElementById('product2-img').classList.add('animate-right-to-left');
        document.getElementById('product2-details').classList.add('animate-left-to-right');
    }, 1000);

    setTimeout(function() {
        document.getElementById('product3-img').classList.add('animate-left');
        document.getElementById('product3-details').classList.add('animate-right');
    }, 1500);



</script>

<?php include 'footer.php'//footer
?> 
