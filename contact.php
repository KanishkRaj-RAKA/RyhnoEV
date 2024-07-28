<?php
    include 'header.php'; //header
    ?>
    <section class="con-us-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.6095472043024!2d72.56314631450464!3d23.2206881848557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b987c6d6809%3A0xf86f06a7873e0391!2sGandhinagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1624642826164!5m2!1sen!2sin"
            width="100%" height="100px" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>

<section class=" con-us-loc">
    <div class="contactContainer">
        <div class="tit">
            <h2>Contact Us</h2>
            <p>Contact Rhyno if you have any query.</p>
        </div>
        <div class="rows">
            <div class="col-cd-4">
                <div class="con-pg-addr ">
                    <h4>Address:</h4>
                    <h5>Rhyno.in</h5>
                    <p>Rhyno Wheels Private limited,<br>Near UG hostel gate #2, Behind PDEU,<br>Raisan, Gandhinagar, Gujarat, India.</p>
                    
                </div>
            </div>
            <div class="col-cd-4">
                <div class="con-pg-info">
                    <h4>Contact info:</h4>
                    <ul>
                        <li class="ic-pho">Support: +91 90239 87528</li>
                        <li class="ic-eml">Email:  info@rhyno.in </li>
                    </ul>
                </div>
            </div>
            <div class="col-cd-4">
                <div class="con-pg-soc">
                    <h4>Website & Social media:</h4>
                    <ul>
                        <li ><a href="#" >www.rhyno.in</a></li>
                        <li ><a href="#" >Instagram</a></li>
                        <li ><a href="#" >Facebook</a></li>
                        <li ><a href="#" >X (Twitter)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
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
        .con-us-map iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }
        .contactContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .tit{
            text-align:center;
        }
        .rows {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            justify-content: space-around;
            gap: 50px;
        }
        .con-pg-addr, .con-pg-info, .con-pg-soc {
            margin: 20px;
            /* text-align: center; */
        }
        .con-pg-addr h4, .con-pg-info h4, .con-pg-soc h4 {
            margin: 0 0 8px;
            padding: 0 0px;
        }
        .con-pg-info ul, .con-pg-soc ul {
            list-style: none;
            padding: 0;
        }
        .con-pg-info ul li, .con-pg-soc ul li {
            margin: 5px 0;
        }
        .con-pg-soc ul li a {
            text-decoration: none;
            color: #000;
        }
        .con-pg-soc ul li a:hover {
            text-decoration: underline;
        }
        @media (max-width: 445px) {
            .contactContainer {
                padding: 15px;
            }
            .con-us-map iframe {
                height: 300px; 
            }
            .lhs h3{
                text-align: center;
            }
            .rows {
                flex-direction: column;
                align-items: center;
            }
            .con-pg-addr, .con-pg-info, .con-pg-soc {
                width: 100%;
                text-align: center;
                margin: 10px 0;
            }
            .con-pg-info ul, .con-pg-soc ul {
                padding-left: 0;
            }
            .con-pg-info ul li, .con-pg-soc ul li {
                margin: 10px 0;
            }
        }
    </style>
<?php
include 'footer.php'; //footer
?>
