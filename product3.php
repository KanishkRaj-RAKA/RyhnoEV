<?php
    include 'header.php'; //header
    ?>
        <link rel="stylesheet" href="product.css">
<body>
    <div class="product">
        <img src="image/blue.png" alt="SE03" id="product1-img" class="product1-img">
        <div class="product-details" id="product1-details">
            <h2>RHYNO SE03 MAX </h2>
            <p>Indulge in the perfect harmony of power and range with this Rhyno. Offering an exhilarating experience with its robust 2000W motor, it ensures a thrilling ride while still delivering an impressive 80-100 km range on a single charge. Like its counterparts, this machine features the safety assurance of a fire-safe advanced LFP battery, along with the comprehensive benefits of owning a Rhino. Boasting a formidable combination of a 2000W motor and a 2.7kWh battery, this beast is ready to roar on the roads, providing an electrifying journey at every turn. Check out the other details below!</p>
            <button class="bookNow" id="booknow">Book Now</button>
            <div class="color-options">
                <p>Choose Color:</p>
                <div onclick="changeColor('product1-img', 'image/blue.png')" class="color2"></div>
                <div onclick="changeColor('product1-img', 'image/red.png')" class="color4"></div>
            </div>
        </div>
    </div>
    <div class="productcard">
        <div class="card">
            <h2>Rhyno SE03 Max Specifications</h2>
            <div class="specs">
                <div><span class="label">Warranty on Electronics:</span><span class="value">1 year</span></div>
                <div><span class="label">Battery:</span><span class="value">2.7Kwh</span></div>
                <div><span class="label">Motor:</span><span class="value">1500W</span></div>
                <div><span class="label">Charging Time:</span><span class="value">4 hours (12A)</span></div>
                <div><span class="label">Battery Warranty:</span><span class="value">3 Years</span></div>
                <div><span class="label">Max Speed:</span><span class="value">55 km/h</span></div>
                <div><span class="label">Max Range (@Full Speed):</span><span class="value">90 km</span></div>
                <div><span class="label">Max Range (@45km/h):</span><span class="value">110  km</span></div>
                <div><span class="label">Max Range (@30km/h):</span><span class="value">150  km</span></div>
                <div><span class="label">Other Key Benefits:</span><span class="value">FFire-safe battery Range prediction Comfortable ride Stable and safe
</span></div>
                <div><span class="label">Battery Features:</span><span class="value">LFP with 1500 cyclesActive Balancing Waterproof (IP67)
</span></div>
            </div>
        </div>
    </div>
    <!-- Start of Tawk.to Script -->
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
<!-- End of Tawk.to Script -->
<script>
        function changeColor(imageId, imagePath) {
    document.getElementById(imageId).src = imagePath;
    }

    function openProductPage(id) {
    const pages = {
        'bookNow': 'per-book.php'
    };
    if (pages[id]) {
        window.open(pages[id], '_blank');
    } else {
        console.error('No page found for id:', id);
    }
    }
    document.getElementById('booknow').addEventListener('click', function() {
        openProductPage('bookNow');
    });
</script>

<?php
    include 'footer.php'; //footer
    ?>