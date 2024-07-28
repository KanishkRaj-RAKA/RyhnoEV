<?php
?>
    <footer>
    <section class=" wed-hom-footer">
    <div class="fcontainer">
        <div class="row foot-supp">
            <h2><span>Free support:</span> +91 90239 87528 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span> info@rhyno.in</h2>
        </div>
        <div class="row wed-foot-link">
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <p>Rhyno Wheels Private limited,<br> Near UG hostel gate #2, Behind PDEU,
                    <br> Raisan, Gandhinagar, Gujarat, India.</p>
                    <p>Phone: <a href="tel:+919023987528">+91 90239 87528</a></p>
                    <p>Email: <a href="mailto:info@rhyno.in">info@rhyno.in</a></p>
                </div>
  
            <div class="col-md-4">
                <h4>HELP &amp; SUPPORT</h4>
                <ul>
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="about.php">About us</a> </li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="https://www.linkedin.com/login">Career</a> </li>
                    <li><a href="rentals.php">Rentals</a> </li>
                </ul>
            </div>
            <div class="col-md-4 fot-soc">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                   <a href="https://www.instagram.com/?hl=en"> <i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a>
                </ul>
            </div>
        </div>


        <div class="row foot-count">
            <ul>
                <li>Legal</li>
                <li><a target="_blank" href="tc.php">Terms & Conditions</a></li>
                <li><a target="_blank" href="privacy.php">WebSite Policy</a></li>
                <li><a target="_blank" href="crp.php">Cancellation & Refund Policy</a></li>
            </ul>
        </div>
    </div>
    </section>


    <section>
        <div class="cr">
            <div class="ffcontainer">
                <div class="copy">
                    <p>Copyright © 2024 Rhyno.in   <a href="#" target="_blank"></a>. All rights reserved  Rhyno.in</p>
                    <p> Developed by <a href="https://www.linkedin.com/in/kanishk-raj-1a6345226/">Kanishk Raj</a></p>
                </div>
            </div>
        </div>
    </section>
    </footer>
</body>
<style>
    .wed-hom-footer {
        background: #3C3C3C;
        color: #fff;
        padding: 20px 0;
    }
    .fcontainer {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* max-width: 1200px; */
        margin: 0 auto;
    }
    .wed-foot-link {
        display: flex;
        flex-wrap: wrap;
        margin-top: 40px;
        gap: 200px;
        justify-content: space-between;
    }
    .col-md-4 a, .row a, .cr p a {
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }
    .col-md-4 a:hover, .row a:hover, .cr p a:hover, .fot-soc ul i:hover {
        color: #FFF225;
    }
    .col-md-4 ul li, .row ul li {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .row ul {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        gap: 20px;
        justify-content: space-between;
    }
    .fot-soc ul i {
        font-size: 30px;
    }
    .foot-count ul {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        padding: 0%;
    }
    .cr {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #424242;
    }
    .cr p {
        margin: 0;
        padding: 2px;
        text-align: center;
    }
    @media (max-width: 1024px) {
        .wed-foot-link {
            gap: 100px;
            justify-content: space-around;
        }
    }
    @media (max-width: 768px) {
        .foot-supp h2{
            text-align:center;
        }
        .col-md-4 {
            /* gap: 15px; */
            align-items: flex-start;
        }
        .fot-soc ul i {
            font-size: 25px;
        }

        .foot-count ul {
            justify-content: center;
        }
    }
    @media (max-width: 480px) {
        .foot-supp h2{
            font-size: 25px;
        }
        .wed-foot-link {
            gap: 20px;
            flex-direction: column;
            align-items: center;
            text-align:center;
        }
        /* .col-md-4 ul {
            text-align:center;
        } */
        .row ul {
            gap: 10px;
            align-items: center;
            padding: 0px;
        }
        .fot-soc ul i {
            font-size: 20px;
        }
        .foot-count ul {
            flex-direction: column;
            align-items: center;
        }
        .cr {
            flex-direction: column;
        }
        .cr p {
            padding: 5px;
        }
    }
</style>
</html>

