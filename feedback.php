<?php
    include 'header.php'; //header
    ?>
<section class=" fedback">
    <img loading="lazy" src="" alt="" class="fed">
    <div class="fed-box">
        <div class="lhs">
                <h3>Send your feedbacks</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Enter name*" required="required">
                    </div>
                <div class="form-group">
                    <input type="email"  placeholder="Enter email*" required="required">
                </div>
                <div class="form-group">
                    <input type="text" onkeypress="return isNumber(event)" placeholder="Enter mobile number *" required="">
                </div>
                <div class="form-group">
                    <textarea  required="required" placeholder="Write your feedback here*" rows="4"></textarea>
                </div>
                <button type="submit">
                    Submit Feedback
                </button>
            </form>
        </div>
        <div class="rhs">
            <h2>Your feedback</h2>
            <p>Your feedback is most important for us. There are many variations of passages of Lorem Ipsum available,but the majority have suffered alteration in some form, by injected humour</p>
            <ul>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-linkedin"></i>
            </ul>
            <h4>Why send feedback?</h4>
            <p>Useful for feature update</p>
            <p>Helping for customer feedback</p>
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
   .fedback {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
    }
    .fed-box {
        display: flex;
        flex-direction: row;
        width: 62%;
        max-width: 1200px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        background-color: #dcefff;
    }
    .lhs, .rhs {
        flex: 1;
    padding: 20px;
    }
    .lhs h3, .rhs h2 {
        color:#160EDB;
        padding: 0 0 20px;
        font-size:20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group input, .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }
    button {
        width: inherit;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #0056b3;
    }
    .rhs ul {
        display: flex;
        gap:20px;
        list-style: none;
        padding: 0;
    }
    .rhs ul i {
        font-size:25px;
        margin: 0 0 20px
    }
    .rhs ul i:hover{
        cursor: pointer;
        color:#FFF225;
    }
    .rhs ul li a img {
        width: 30px;
        height: 30px;
        transition: transform 0.3s ease;
    }
    .rhs ul li a img:hover {
        transform: scale(1.1);
    }
    @media (max-width: 445px) {
        .lhs, .rhs {
            flex: 1;
            padding: 0px;
        }
        .fed-box {
            flex-direction: column;
            width: 90%;
        }
        
        .lhs, .rhs {
            margin: 0 0 20px 0;
        }
    }
    @media (max-width: 768px) {
        .fed-box {
            flex-direction: column;
            width: 80%;
        }
    }
</style>
<?php
include 'footer.php'; //footer
?>