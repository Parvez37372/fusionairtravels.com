<?php include('header.php')?>
 <style>
     .map-container {
        width: 100vw;
        height: 400px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
     
        .hero {
            
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
            
            position: relative;
            width: 100%;
            height: 300px;
            background: url('image/hero.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .breadcrumb {
            font-size: 18px;
        }
        .breadcrumb a {
            color: white;
            text-decoration: none;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        .breadcrumb span {
            color: #ff5722;
        }
        
        .contact-container {
    margin-top: 50px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap; 
}


.contact-box {
    background: white;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: left;
    width: 300px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: 0.3s ease-in-out; 
}


.contact-box::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    background: #e4effc;
    clip-path: polygon(0 0, 100% 0, 0 100%);
}

.icon {
    background: #39609b;
    color: white;
    padding: 15px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    transition: 0.3s ease-in-out;
}


.contact-content {
    display: flex;
    flex-direction: column;
}
h3 {
    margin-bottom: 5px;
    font-size: 18px;
}
p {
    font-size: 14px;
    color: #555;
}

.contact-box:hover {
    transform: translateY(-5px); 
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}
.contact-box:hover .icon {
    background: #1d4ed8; 
}

@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        align-items: center;
    }
}

.contact-form-container {
     box-sizing: border-box;
    font-family: Arial, sans-serif;
    width: 100%;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    border: 2px dashed #ddd;
    border-radius: 10px;
    text-align: center;
}

.contact-form-container h2 {
    font-size: 26px;
    margin-bottom: 15px;
}
.contact-form-container p {
    color: #f56c2d;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.form-group {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}
.input-field {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    resize: none;
    height: 120px;
}

.send-btn {
    background:linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    display: flex;
    align-items: center;
    gap: 5px;
    justify-content: center;
    width: 100%;
    transition: 0.3s;
}
.send-btn:hover {
    background: #e64a19;
}

@media (max-width: 600px) {
    .form-group {
        flex-direction: column;
    }
}
        
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p class="breadcrumb"><a href="#">Home</a> / <span>Contact Us</span></p>
        </div>
    </section>
    <div class="contact-container">
    <div class="contact-box">
        <div class="icon">📞</div>
        <div class="contact-content">
            <h3>Phone Number</h3>
            <p>+91 96508 12477</p>
            <p>+91 96508 12477</p>
        </div>
    </div>
    
    <div class="contact-box">
        <div class="icon">✉️</div>
        <div class="contact-content">
            <h3>Email Address</h3>
            <p>info@fusionairtravels.com</p>
            <p>info@fusionairtravels.com</p>
        </div>
    </div>
    
    <div class="contact-box">
        <div class="icon">📍</div>
        <div class="contact-content">
            <h3>Our Location</h3>
            <p>70-80 Upper St Norwich NR2</p>
            <p>London, United Kingdom</p>
        </div>
    </div>
</div>
<div class="contact-form-container">
    <p>Contact Us</p>
    <h2>Send Us A Message</h2>
    <form   action="sendmail.php" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <input type="text" class="input-field" placeholder="Name" required>
            <input type="email" class="input-field" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" id="phone" class="input-field" placeholder="Phone" required>
            <input type="text" class="input-field" placeholder="Subject" required>
        </div>
        <textarea placeholder="Write A Message" required></textarea>
        <button type="submit" class="send-btn">Send Message ➜</button>
    </form>
</div>

<div class="map-container">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d158858.18114950156!2d-0.101599!3d51.528642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1743057305525!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<script>
function validateForm() {
    var phone = document.getElementById("phone").value;
    var phonePattern = /^[0-9]{10}$/; // Only 10 digits allowed

    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
    return true;
}
</script>



<?php include('footer.php')?>