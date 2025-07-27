<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        hr{
            width:100%;
            align-items:center;
        }
        .copy
        {
            text-align:center;
        }
        .air{
            color:white;
        }
            .footer {
            background-color: #0a0f14;
            color: white;
            margin-top: 80px;
            padding: 40px 80px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            animation: fadeIn 1s ease-in-out;
        }
        .footer div {
            margin-bottom: 20px;
        }
        .footer h3 {
            color: #ff5722;
        }
        .footer a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 5px 0;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: #ff5722;
        }
        .social-icons {
            display: flex;
            gap: 10px;
        }
        .social-icons a {
            font-size: 20px;
            color: white;
            transition: transform 0.3s;
        }
        .social-icons a:hover {
            transform: scale(1.2);
            color: #ff5722;
        }
        .app-buttons img {
            width: 120px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .app-buttons img:hover {
            transform: translateY(-5px);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
                align-items: start;
                text-align: start;
                padding: 20px;
            }
            .social-icons {
                justify-content:start;
            }
            .app-buttons img {
                width: 100px;
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div>
            <h3>Contact Us</h3>
            <p>Email: info@fusionairtravels.com</p>
            <p>Phone: +91 96508 12477</p>
            <p>Address: Block E3 Jhandewalan New Delhi 110055.</p>
            
            <h3>Fusion <span class="air">Air</span> Travels</h3>
        </div>
        <div>
            <h3>Useful Links</h3>
            <a href="about-us.php">About Us</a>
            <a href="#">Mobile App</a>
            <a href="contact.php">Contact Us</a>
            <a href="#">Flight Schedule</a>
            <a href="#">Check-In</a>
        </div>
        <div>
            <h3>Support</h3>
            <a href="blog.php">News & Blog</a>
            <a href="#">Help Center</a>
            <a href="#">Manage Booking</a>
            <a href="#">Feedback</a>
            <a href="#">Travel Information</a>
        </div>
        <div>
            <h3>Follow Us On</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/fusion-air-travels-30770a369/"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="app-buttons">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/512px-Google_Play_Store_badge_EN.svg.png" alt="Google Play">
                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
            </div>
            
        </div>
        
        <hr>
            <p class="copy">© Copyright 2017 by Fusion</p>
    </footer>
</body>
</html>
<script>
        function toggleFields() {
            let returnDate = document.getElementById("return-date-container");
            let returnTime = document.getElementById("return-time-container");
            let additionalDestination = document.getElementById("additional-destination");
            let departTimeContainer = document.getElementById("depart-time-container");
            
            if (document.getElementById("one-way").checked) {
                returnDate.classList.add("hidden");
                returnTime.classList.add("hidden");
                additionalDestination.classList.add("hidden");
            } else if (document.getElementById("multi-city").checked) {
                additionalDestination.classList.remove("hidden");
                returnDate.classList.add("hidden");
                returnTime.classList.add("hidden");
            } else {
                returnDate.classList.remove("hidden");
                returnTime.classList.remove("hidden");
                additionalDestination.classList.add("hidden");
            }
        }

        function addDestination() {
            let container = document.getElementById("multi-city-container");
            let div = document.createElement("div");
            div.classList.add("destination-group");
            div.innerHTML = `<input type="text" placeholder="From" onkeyup="autoComplete(this)"> 
                             <input type="text" placeholder="To" onkeyup="autoComplete(this)">
                             <button type="button" onclick="this.parentElement.remove()">×</button>`;
            container.appendChild(div);
        }

        

        toggleFields();
    </script>
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    
      <script>
    function openPopup() {
      document.getElementById('popup').style.display = 'flex';
      document.getElementById('youtubeFrame').src = 'https://www.youtube.com/embed/TYOUR_VIDEO_ID?autoplay=1';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
      document.getElementById('youtubeFrame').src = '';
    }
  </script>
  <script>
    document.querySelectorAll('.faq-items').forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
</script>


