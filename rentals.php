
<?php
include 'header.php'; //header
?>


    <div class="aboutContainer">
        <div class="about">
            <h2>Rentals</h2>
            <p>Explore the roars of Rhyno at your own pace with our rental options! Test the waters with our flexible rental model, available for a week or a month, allowing you to experience the Rhyno first hand before committing. Simply visit our authorized dealerships to unlock this opportunity.
            </p>
            <p>  Additionally, we're redefining campus commuting with our rental fleet tailored for college                   students. Navigate your daily commute effortlessly by renting Rhyno vehicles on an hourly basis through our user-friendly mobile app. Embrace the freedom to ride and explore a new dimension in sustainable and convenient transportation.
            </p>
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
include 'footer.php'; //footer
?>