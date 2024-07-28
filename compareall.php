<?php
    include 'header.php'; //header
?>
<link rel="stylesheet" href="product.css">


    <div class="productcard">
        <div class="card">
            <h2>Rhyno Specifications</h2>
            <table class="specs-table">
                <tr>
                    <th></th>
                    <th>Rhyno SE03 Lite</th>
                    <th>Rhyno SE03</th>
                    <th>Rhyno SE03 Max</th>
                </tr>
                <tr>
                    <th></th>
                    <th> <img src="image/black.png" alt=""> </th>
                    <th><img src="image/golden.png" alt=""></th>
                    <th><img src="image/red.png" alt=""></th>
                </tr>
                <tr>
                    <td>Battery</td>
                    <td>1.8 KWh</td>
                    <td>2.7 KWh</td>
                    <td>2.7 KWh</td>
                </tr>
                <tr>
                    <td>Battery Features</td>
                    <td>LFP with 1500 cycles<br>Active Balancing<br>Waterproof (IP67)</td>
                    <td>LFP with 1500 cycles<br>Active Balancing<br>Waterproof (IP67)</td>
                    <td>LFP with 1500 cycles<br>Active Balancing<br>Waterproof (IP67)</td>
                </tr>
                <tr>
                    <td>Battery Warranty</td>
                    <td>3 Years</td>
                    <td>3 Years</td>
                    <td>3 Years</td>
                </tr>
                <tr>
                    <td>Charging Time</td>
                    <td>3 hours (12A)</td>
                    <td>4 hours (12A)</td>
                    <td>4 hours (12A)</td>
                </tr>
                <tr>
                    <td>Motor</td>
                    <td>1500W</td>
                    <td>1500W</td>
                    <td>2000W</td>
                </tr>
                <tr>
                    <td>Max Speed</td>
                    <td>55 km/h</td>
                    <td>55 km/h</td>
                    <td>65 km/h</td>
                </tr>
                <tr>
                    <td>Warranty on Electronics</td>
                    <td>1 year</td>
                    <td>1 year</td>
                    <td>1 year</td>
                </tr>
                <tr>
                    <td>Max Range (@30 km/h)</td>
                    <td>100 km</td>
                    <td>150 km</td>
                    <td>120 km</td>
                </tr>
                <tr>
                    <td>Max Range (@45 km/h)</td>
                    <td>90 km</td>
                    <td>110 km</td>
                    <td>100 km</td>
                </tr>
                <tr>
                    <td>Max Range (@full speed)</td>
                    <td>60 km</td>
                    <td>90 km</td>
                    <td>80 km</td>
                </tr>
                <tr>
                    <td>Other Key Benefits</td>
                    <td>Fire-safe battery<br>Range prediction<br>Comfortable ride<br>Stable and safe</td>
                    <td>Fire-safe battery<br>Range prediction<br>Comfortable ride<br>Stable and safe</td>
                    <td>Fire-safe battery<br>Range prediction<br>Comfortable ride<br>Stable and safe</td>
                </tr>
            </table>
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
            background-color: #ededed;
        }
        .productcard {
            margin-top: 20px;
        }
        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .specs-table th, .specs-table td {
            padding: 10px;
            text-align: center;
        }
        .specs-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .specs-table td {
            font-size: 14px; 
        }
        .specs-table img {
            max-width: 100%;
            height: auto; 
            display: block; 
            margin: 0 auto; 
        }
        @media only screen and (max-width: 768px) {
            .specs-table th, .specs-table td {
                padding: 8px;
            }
            .specs-table td {
                font-size: 12px; 
            }
        }
        @media only screen and (max-width: 480px) {
            .specs-table th, .specs-table td {
                padding: 6px; 
            }
            .specs-table td {
                font-size: 10px; 
            }
        }
    </style>
<?php include 'footer.php'; //footer
?>
