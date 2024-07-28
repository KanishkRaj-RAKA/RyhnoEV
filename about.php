<?php
include 'header.php'; // Include header
?>

<div class="container my-4">
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>About Us</h2>
            <p>Established in 2019 by an automotive engineer with a vision for sustainable and robust
                mobility solutions, Rhyno EV is not just a company; it's a collective effort of a dynamic team
                of young individuals passionately driving innovation in the electric vehicle industry. We
                believe in engineering solutions that solve problems.
            </p>
            <p>With our first product, we've taken a bold step to create something more than just a vehicle;
                    it's a unique experience of elegance, comfort, and style, addressing the pitfalls of
                    conventional electric scooters. Our design prioritizes safety, eliminating concerns of fires and
                    ensuring a longer battery lifespan with our battery technology. Perfectly suited for fleet
                    operators, especially in tourist-centric locations like Goa, our rugged yet aesthetically
                    appealing scooters are engineered for longevity and reliability. Join us as we pioneer a new
                    era in sustainable and dependable electric transportation.
            </p>
        </div>
    </div>
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>Our Mission</h2>
            <p>
                At Rhyno EV, our mission is to redefine urban mobility by creating innovative, sustainable, and robust electric vehicles that offer unmatched safety, comfort, and style. We are committed to delivering cutting-edge solutions that not only meet the needs of today's commuters but also pave the way for a cleaner and greener future.
            </p>
        </div>
    </div>
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>Who We Are</h2>
            <p>
                Rhyno EV is a team of passionate and forward-thinking individuals, driven by a shared vision of revolutionizing the electric vehicle industry. Founded in 2019 by an automotive engineer with a deep understanding of mobility solutions, our diverse team brings together expertise from various fields, all working collaboratively to push the boundaries of what's possible in electric transportation.
            </p>
        </div>
    </div>
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>What We Do</h2>
            <p>
            We design, engineer, and manufacture state-of-the-art electric scooters that are tailored to meet the demands of modern urban environments. Our flagship product combines elegance, comfort, and reliability, setting new standards for safety and battery longevity. By focusing on innovative battery technology and rugged design, we ensure that our scooters are perfect for both individual riders and fleet operators, particularly in tourist-friendly locations like Goa.
            </p>
        </div>
    </div>
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>Why Choose Us</h2>
            <p>
            Choosing Rhyno EV means opting for a company that prioritizes your safety, comfort, and overall riding experience. Our scooters are engineered to address the common concerns associated with electric vehicles, such as battery fires and short lifespans. With Rhyno EV, you get:
            </p>
            <ul>
                <li><span>Superior Safety:</span> Our advanced battery technology eliminates the risk of fires.</li>
                <li><span>Long-lasting Performance:</span> Enjoy a longer battery lifespan and reliable performance.</li>
                <li><span>Stylish Design:</span> Our scooters combine ruggedness with aesthetic appeal.</li>
                <li><span>Dependable Durability:</span> Built to last, ensuring you get the best value for your investment.</li>
            </ul>
        </div>
    </div>
    <div class="row aboutContainer">
        <div class="col-md-12 about">
            <h2>Our Future Plans</h2>
            <p>
            At Rhyno EV, we are constantly looking ahead, striving to innovate and improve our products. Our future plans include:
            </p>
            <ul>
                <li><span>Expanding Our Product Line:</span> Introducing new models and features to cater to a wider range of users and preferences.</li>
                <li><span>Enhancing Technology:</span> Continuously improving our battery technology and vehicle performance.</li>
                <li><span>Sustainable Practices:</span> Investing in eco-friendly manufacturing processes and materials to further reduce our environmental impact.</li>
                <li><span>Global Reach:</span> Expanding our market presence to more regions, making sustainable transportation accessible to a broader audience.</li>
            </ul>
        </div>
    </div>
</div>
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
<style>
    body{
        background-color: #EDEDED;
    }
    .aboutContainer {
        margin: 20px 0;
        width: 100%;
        display:flex;
        /* aling-item:center; */
        justify-content:center;
    }
    .about {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        width: 80%;
    }
    .about h2 {
        font-size: 24px;
        font-weight: 900;
        color: #000;
        margin-bottom: 10px;
    }
    .about p {
        font-size: 16px;
    }
    .about ul {
        padding-left: 20px;
    }
    .about ul li {
        margin: 10px 0;
    }
    .about ul li span {
        font-weight: 700;
    }
    @media (max-width: 768px) {
        .about h2 {
            font-size: 20px;
        }
        .about p {
            font-size: 14px;
        }
        .about ul li {
            font-size: 14px;
        }
    }
    @media (max-width: 576px) {
        .about h2 {
            font-size: 18px;
        }
        .about p {
            font-size: 12px;
        }
        .about ul li {
            font-size: 12px;
        }
    }
</style>
<?php
include 'footer.php'; // Include footer
?>
