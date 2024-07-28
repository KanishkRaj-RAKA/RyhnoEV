
<?php include 'header.php'; //header ?>
<div class="precontainer mt">
    <div class="row">
        <div class="col-6">
            <h2>Rhyno EV</h2>
            <h3>Online Payment Portal for Booking</h3>
            <p>How to Make a Payment:</p>
            <ol>
                <li>Enter your Name, Email, Phone number, and Address.</li>
                <li>Choose your preferred payment method from the available options.</li>
                <li>Enter your payment details securely.</li>
                <li>Review your payment summary and confirm.</li>
                <li>Once the payment is successful, you will receive an instant confirmation via email and SMS.</li>
            </ol>
            <p>Share this on:</p>
            <div class="share">
                    <a href="#" class="btn btn-info btn-sm">Twitter</a>
                    <a href="#" class="btn btn-success btn-sm">WhatsApp</a>
            </div>
            <p>Contact Us:</p>
            <p>Email: info@rhyno.in</p>
            <p>Phone: +91 90239 87528</p>
        </div>
        <div class="col-md-6">
            <h3>Payment Details</h3>
            <form action="process_payment.php" method="post">
                <div class="form-group">
                    <label for="model">Model</label>
                    <select class="form-control" id="model" name="model" required>
                        <option value="" disabled selected>Select Model</option>
                        <option value="RHYNO-SE03" data-price="30000">RHYNO SE03</option>
                        <option value="RHYNO-SE03-LITE" data-price="35000">RHYNO SE03 LITE</option>
                        <option value="RHYNO-SE03-MAX" data-price="50000">RHYNO SE03 MAX</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="state" name="state" required>
                        <option value="" disabled selected>Select State</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Goa">Goa</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                </div>
                <button type="submit" class="btn btn-primary">Pay ₹ <span id="payAmount">0.00</span></button>
            </form>
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
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .col-6 h2, .col-6 h3 {
        color: #0056b3;
    }
    p {
        line-height: 1.6;
    }
    .precontainer {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content:center;
    }
    .col-6, .col-md-6 {
        flex: 1;
        padding: 10px;
    }
    .col-6 {
        max-width: 50%;
    }
    .col-md-6 {
        max-width: 50%;
    }
    form {
        margin-top: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: none;
        border-bottom: 2px solid #007bff;
        border-radius: 0;
        transition: border-bottom-color 0.3s;
        background-color: transparent;
    }
    .form-control:focus {
        outline: none;
    }
    button.btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button.btn-primary {
        background-color: #007bff;
        color: #fff;
    }
    button.btn-primary:hover {
        background-color: #0056b3;
    }
    .btn {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px 0;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
        transition: background-color 0.3s;
    }
    .btn-primary {
        background-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-info {
        background-color: #17a2b8;
    }
    .btn-info:hover {
        background-color: #117a8b;
    }
    .btn-success {
        background-color: #28a745;
    }
    .btn-success:hover {
        background-color: #218838;
    }
    @media (max-width: 768px) {
        .col-6 h2, .col-6 h3,.col-6 p ,.col-md-6 h3{
            text-align: center;
        }
        .share{
            display:flex;
            justify-content:center;
            gap: 20px;
        }
        .col-md-6{
            max-width: 80%;
        }
        .col-6 {
            max-width: 100%;
            flex: 100%;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modelSelect = document.getElementById('model');
        const payButton = document.getElementById('payButton');
        const payAmountSpan = document.getElementById('payAmount');

        modelSelect.addEventListener('change', function () {
            const selectedOption = modelSelect.options[modelSelect.selectedIndex];
            const price = selectedOption.getAttribute('data-price');

            if (price) {
                payAmountSpan.textContent = price;
                payButton.innerHTML = `Pay ₹ ${price}`;
            } else {
                payAmountSpan.textContent = '0.00';
                payButton.innerHTML = 'Pay ₹ 0.00';
            }
        });

        payButton.addEventListener('click', function (e) {
            e.preventDefault();

            const formData = new FormData(document.getElementById('paymentForm'));
            const options = {
                key: 'YOUR_RAZORPAY_KEY', // Replace with your Razorpay key
                amount: parseInt(payAmountSpan.textContent) * 100, // Amount in paise
                currency: 'INR',
                name: 'Rhyno EV',
                description: 'Booking Payment',
                image: 'https://example.com/your_logo.jpg', // Replace with your logo URL
                handler: function (response) {
                    alert(response.razorpay_payment_id);
                    // After successful payment, you can redirect or do further processing
                },
                prefill: {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    contact: formData.get('phone')
                },
                notes: {
                    address: formData.get('address')
                },
                theme: {
                    color: '#007bff'
                }
            };
            const rzp = new Razorpay(options);
            rzp.open();
        });
    });
</script>
<?php include 'footer.php'; //footer ?>