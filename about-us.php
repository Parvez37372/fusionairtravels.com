<?php include('header.php')?>

<style>
 .hero {
            
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
            
            position: relative;
            width: 100%;
            height: 300px;
            background: url('image/about.webp') no-repeat center center/cover;
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

/*process-container*/
    .process-container {
        text-align: center;
        padding: 50px 20px;
        box-sizing: border-box;
    }
    .process-container p {
        color: #f56c2d;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        margin-bottom: 5px;
    }
    .process-container h2 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .steps {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        border: 2px dashed #f56c2d; /* Border added */
        border-radius: 10px;
        padding: 20px;
    }
    .step-box {
        text-align: center;
        width: 250px;
        padding: 20px;
        background: white; /* Card Background */
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Shadow Added */
        transition: 0.3s ease-in-out;
    }
    .step-box:hover {
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15); /* Hover Shadow Effect */
        transform: scale(1.05); /* Zoom Effect */
    }
    .icon-box {
        width: 60px;
        height: 60px;
        background: linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        margin: 0 auto 10px auto;
        transition: 0.3s ease-in-out;
    }
    .icon-box i {
        font-size: 30px;
        color: white;
    }
    .icon-box:hover {
        background: linear-gradient(94deg, rgb(239, 54, 33) 0%, rgb(255, 100, 35) 50%);
        transform: scale(1.1);
    }
    .step-box h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .step-box p {
        font-size: 14px;
        color: #555;
    }
    
        .why-choose-container {
    text-align: center;
    padding: 50px 20px;
}
.why-choose-container p {
    color: #f56c2d;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 5px;
}
.why-choose-container h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 40px;
}
.features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 900px;
    margin: auto;
}
.feature-box {
    display: flex;
    align-items: center;
    background: #f8f8f8;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: 0.3s ease-in-out;
}
.feature-box:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}
.icon-boxe {
    width: 115px;
    height: 60px;
    background: #1d4ed8;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin-right: 15px;
}
.icon-boxe:hover {
    background: linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
    color: white;
}
.icon-boxe i {
    font-size: 30px;
    color: white;
}
.feature-content h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}
.feature-content p {
    font-size: 14px;
    color: #555;
}

@media (max-width: 768px) {
    .features-grid {
        grid-template-columns: 1fr; 
    }
    .feature-box {
        flex-direction: column; 
        text-align: center;
        padding: 15px;
    }
    .icon-boxe {
        margin: 0 auto 10px auto; 
         width: 50px;
    }
    
    
    
}

 .faq-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding: 50px 20px;
        max-width: 1100px;
        margin: auto;
        color:black;
    }
    .faq-image {
        width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .faq-content {
        flex: 1;
    }
    .faq-title {
        color: #f56c2d;
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 5px;
    }
    .faq-heading {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .faq-list {
        list-style: none;
        padding: 0;
    }
    
   
    .faq-items {
        background: #f8f8f8;
        
        padding: 15px 20px;
        margin-bottom: 10px;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
        border: 1px solid #ddd;
    }
    .faq-items:hover {
        background: #f5f5f5;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }
    .faq-answer {
        display: none;
        padding-top: 10px;
        font-size: 14px;
        color: #555;
        animation: fadeIn 0.3s ease-in-out;
    }
    .faq-items.active .faq-answer {
        display: block;
    }
    .faq-items i {
        color: #f56c2d;
        transition: transform 0.3s ease;
    }
    .faq-items.active i {
        transform: rotate(45deg);
    }
    @media (max-width: 768px) {
        .faq-container {
            flex-direction: column;
            text-align: center;
        }
        .faq-image {
            width: 100%;
        }
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
        .testimonials-container {
    margin-top: 80px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
}

        .testimonial-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 320px;
            flex: 1;
        }
         
        .quote-icon {
            font-size: 30px;
            color: #1d4ed8;
        }
        .stars {
            color: #ffcc00;
            font-size: 18px;
            margin: 10px 0;
        }
        .testimonial-text {
            font-size: 14px;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .testimonial-user {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        .user-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
       .user-img:hover {
    transform: scale(1.2); /* 1.2 means 20% bigger */
    transition: transform 0.3s ease-in-out;
}

        .user-info {
            text-align: left;
        }
        .user-info h4 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
        .user-info p {
            margin: 0;
            font-size: 12px;
            color: #666;
        }
        @media (max-width: 768px) {
            .testimonials-container {
                flex-direction: column;
                align-items: center;
            }
        }

</style>

 <section class="hero">
        <div class="hero-content">
            <h1>About Us</h1>
            <p class="breadcrumb"><a href="#">Home</a> / <span>About Us</span></p>
        </div>
    </section>
    
    <div class="about-container">
    <div class="about-content">
        <span class="highlight">About Fusion</span>
        <h2>Experience Unmatched Comfort and Time Savings with Our Private</h2>
        <p>Non augue egestas, commodo velit eget, vestibulum tellus. Curabitur vulputate justo elit, at elementum orci pulvinar vel. Pellentesque habitant morbi tristique. Ut non augue egestas.</p>
        <ul>
            <li>✔ There are many variations of passage of lorem.</li>
            <li>✔ Available but the majority alteration.</li>
        </ul>
        <div class="about-contact">
            <div>
                <i class="fa fa-phone"></i>
                <span><strong>Phone Number</strong><br>+91 96508 12477</span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span><strong>Email Address</strong><br>info@fusionairtravels.com</span>
            </div>
        </div>
        <a href="#" class="btn">About More →</a>
    </div>
    <div class="about-images">
        <div class="experience-badge">15+ <br> Years Of Experience</div>
        <img src="image/a-a_1.webp" class="about-main-image">
        <img src="image/a-b.webp" alt="Businesswoman at airport" class="about-small-image">
    </div>
</div>

<div class="process-container">
    <p>Working Process</p>
    <h2>How To Book Your Flight Tickets <br>A Step By Step Guide</h2>
    <div class="steps">
        <div class="step-box">
            <div class="icon-box">
                <i class="fa-solid fa-plane"></i>
            </div>
            <h3>Search Choice</h3>
            <p>Have continually evolved embracing new technologies and innovative.</p>
        </div>
        <div class="step-box">
            <div class="icon-box">
                <i class="fa-solid fa-map-marker-alt"></i>
            </div>
            <h3>Select Destination</h3>
            <p>Have continually evolved embracing new technologies and innovative.</p>
        </div>
        <div class="step-box">
            <div class="icon-box">
                <i class="fa-solid fa-ticket"></i>
            </div>
            <h3>Easy To Book</h3>
            <p>Have continually evolved embracing new technologies and innovative.</p>
        </div>
    </div>
</div>
<div class="why-choose-container">
    <p>Why Choose Us</p>
    <h2>Crafting Unforgettable Journeys <br>For Every Traveler</h2>
    <div class="features-grid">
        <div class="feature-box">
            <div class="icon-boxe">
                <i class="fa-solid fa-calendar"></i>
            </div>
            <div class="feature-content">
                <h3>Personal Schedule</h3>
                <p>In today’s world, the fusion of luxury and comfort weaves a rich tapestry of indulgence, enhancing.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="icon-boxe">
                <i class="fa-solid fa-globe"></i>
            </div>
            <div class="feature-content">
                <h3>Global Flight Connections</h3>
                <p>In today’s world, the fusion of luxury and comfort weaves a rich tapestry of indulgence, enhancing.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="icon-boxe">
                <i class="fa-solid fa-network-wired"></i>
            </div>
            <div class="feature-content">
                <h3>Global Flight Connections</h3>
                <p>In today’s world, the fusion of luxury and comfort weaves a rich tapestry of indulgence, enhancing.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="icon-boxe">
                <i class="fa-solid fa-plane"></i>
            </div>
            <div class="feature-content">
                <h3>Ticketing for Air Travel</h3>
                <p>In today’s world, the fusion of luxury and comfort weaves a rich tapestry of indulgence, enhancing.</p>
            </div>
        </div>
    </div>
</div>
<div class="faq-container">
    <img src="image/about2.webp" alt="FAQ Image" class="faq-image"> 
    <div class="faq-content">
        <p class="faq-title">FAQ</p>
        <h2 class="faq-heading">Frequently Asked Questions</h2>
        <ul class="faq-list">
            <li class="faq-items">
                <div class="faq-question">
                    <span>What You Mean By A Booking / Reservation Is Made?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">A booking means your seat is reserved for travel.</p>
            </li>
            <li class="faq-items">
                <div class="faq-question">
                    <span>Can I check-in online? How does it work?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">Yes, you can check-in online through our website or mobile app.</p>
            </li>
            <li class="faq-items">
                <div class="faq-question">
                    <span>What time do the check-in desks open and close?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">Check-in desks open 3 hours before departure and close 45 minutes before departure.</p>
            </li>
            <li class="faq-items">
                <div class="faq-question">
                    <span>How does late-night check-in work?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">Late-night check-in follows the same rules as regular check-in.</p>
            </li>
            <li class="faq-items">
                <div class="faq-question">
                    <span>Does Air Dolomiti offer in-flight entertainment system?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">Yes, in-flight entertainment is available on most flights.</p>
            </li>
            <li class="faq-items">
                <div class="faq-question">
                    <span>What time should I arrive at the airport?</span>
                    <i class="fa fa-plus"></i>
                </div>
                <p class="faq-answer">You should arrive at least 2 hours before domestic flights and 3 hours before international flights.</p>
            </li>
        </ul>
    </div>
</div>
 <div class="testimonials-container">
        <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Lucille R. Nash</h4>
                    <p>Businessman</p>
                </div>
            </div>
        </div>

        <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Thomas B. Gilliam</h4>
                    <p>CEO & Founder</p>
                </div>
            </div>
        </div>

         <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/men/47.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Eric S. Blaisdell</h4>
                    <p>Medical Doctor</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="testimonials-container">
        <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Lucille R. Nash</h4>
                    <p>Businessman</p>
                </div>
            </div>
        </div>

        <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Thomas B. Gilliam</h4>
                    <p>CEO & Founder</p>
                </div>
            </div>
        </div>

         <div class="testimonial-box">
            <i class="fas fa-quote-left quote-icon"></i>
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">
                "I recently took a long-haul flight with Aerox and it was one of the best flying experiences I’ve had. The seat was incredibly comfortable, and the entertainment system had a great variety of movies and TV shows to choose from."
            </p>
            <div class="testimonial-user">
                <img src="https://randomuser.me/api/portraits/men/47.jpg" class="user-img" alt="User">
                <div class="user-info">
                    <h4>Eric S. Blaisdell</h4>
                    <p>Medical Doctor</p>
                </div>
            </div>
        </div>
    </div>

<script>
    document.querySelectorAll('.faq-items').forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
</script>


<?php include('footer.php')?>