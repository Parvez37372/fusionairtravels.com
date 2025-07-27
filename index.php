<?php include('header.php'); ?>



<div class="main-content">
    <div class="container">
        <div class="text-content">
            <h1>Soaring High <br> Flying <span>Safe!</span></h1>
            <br>
            <p>Fusion Air Travels</p>
            <p>Wings of Adventure: The Ultimate Air Travel Guide<br>
            Safe Journeys With Fusion</p>
            <div class="search-box">
                <i class="fa fa-location-dot"></i>
<input type="text" placeholder="Where Are You Going?" >
                <input type="date" placeholder="Select Date">
                <button>Search Flight</button>
            </div>
        </div>
        <img src="image/hero-plane-shape1.webp" alt="Airplane" class="airplane">
    </div>
    
</div>
<!--about-->
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
        <a href="about-us.php" class="btn">About More →</a>
        <br>
    </div>
    <div class="about-images">
        <div class="experience-badge counter">15+ <br> Years Of Experience</div>
        <img src="image/a-a_1.webp" class="about-main-image">
        <img src="image/a-b.webp" alt="Businesswoman at airport" class="about-small-image">
    </div>
</div>
<!--    <h3 class="testi">Our Testimonials</h3>-->
  <!--  <div class="testimonials-container-->
        
     <!-- <div class="testimonial-box">
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

       <!--  <div class="testimonial-box">
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
    </div>-->
    
<div class="deal">
  <div class="deals-section">
    <div class="he">
      <div>
        <span>Flight Deals</span>
        <h2>Our Travel Deals For You</h2>
      </div>
      <button class="explore-btn"><a href="https://fusionairtravels.com/explore.php">Explore More →</a></button>
    </div>

    <div class="deals-grid">
      <div class="deal-card">
        <img src="image/c-image-a.webp" alt="Canada">
        <h3>Canada</h3>
        <p>From $150.00</p>
        <button><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
      </div>
      <div class="deal-card">
        <img src="image/c-image-b.webp" alt="France">
        <h3>France</h3>
        <p>From $120.00</p>
        <button><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
      </div>
      <div class="deal-card">
        <img src="image/c-image-c.webp" alt="Germany">
        <h3>Germany</h3>
        <p>From $130.00</p>
        <button><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
      </div>
      <div class="deal-card">
        <img src="image/c-image-d.webp" alt="Spain">
        <h3>Spain</h3>
        <p>From $100.00</p>
        <button><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
      </div>
    </div>
  </div>
  </div>
<div class="main-contains">
    <div class="booking-container">
        <h4>Booking Flight</h4>
        <h2>Request For Private Flight</h2>
        <div class="radio-options">
            <label><input type="radio" name="trip" id="return" checked onchange="toggleFields()"> Return</label>
            <label><input type="radio" name="trip" id="one-way" onchange="toggleFields()"> One Way</label>
            <label><input type="radio" name="trip" id="multi-city" onchange="toggleFields()"> Multi City</label>
        </div>
        <form action="process.php" method="POST">
            <div >
                <label for="from">From</label>
                <input type="text" id="from" placeholder="Enter departure city" ">
            </div>
            <div>
                <label for="to">To</label>
                <input type="text" id="to" placeholder="Enter destination" ">
            </div>
            <div id="additional-destination" class="hidden">
                <label>Additional Destinations</label>
                <div id="multi-city-container"></div>
                <button type="button" onclick="addDestination()">+ Add More</button>
            </div>
            <div style="margin-right:10px">
                <label for="depart-date">Departing Date</label>
                <input type="date" id="depart-date">
            </div>
             <div style="margin-left:10px">
                <label for="depart-time">Departing Time</label>
                <input type="time" id="depart-time">
            </div>
            <div id="return-date-container" style="margin-right:10px">
                <label for="return-date">Returning Date</label>
                <input type="date" id="return-date">
            </div>
            <div id="return-time-container" style="margin-left:10px">
                <label for="return-time">Returning Time</label>
                <input type="time" id="return-time">
            </div>
            <div>
                <label for="passenger">Passengers</label>
                <select id="passenger">
                    <option>1 Passenger</option>
                    <option>2 Passengers</option>
                    <option>3 Passengers</option>
                    <option>4+ Passengers</option>
                </select>
            </div>
            <div>
                <label for="country">Country</label>
                <select id="country">
                    <option>Country</option>
                    <option>USA</option>
                    <option>UK</option>
                    <option>India</option>
                </select>
            </div>
            <button type="submit">Send →</button>
        </form>
    </div>
      </div>
<div class="contw">

  <div class="conte">
    <div class="video-section">
      <img src="image/f-image-a.jpg" alt="Flight video thumbnail" />
      <div class="play-button" onclick="openPopup()"></div>
    </div>
    <div class="content">
      <div class="tag">Flight Deals</div>
      <h2>Experience Luxurious Travel with Flight Facilities</h2>
      <div class="desc">Airlines play a crucial role in connecting people and places fostering economic growth, and facilitating global trade.</div>
      
      <div class="feature">
        <i class="fas fa-shield-alt"></i>
        <div>
          <strong>Safety and Confidentiality</strong>
          <p style="font-size: 13px;">Through their dynamic operations airlines are not just carriers of people but vital contributors to the global.</p>
        </div>
      </div>

      <div class="feature">
        <i class="fas fa-clock"></i>
        <div>
          <strong>Personal Schedule</strong>
          <p style="font-size: 13px;">Through their dynamic operations airlines are not just carriers of people but vital contributors to the global.</p>
        </div>
      </div>

      <button class="btn">See All Facilities →</button>
    </div>
  </div>

  <!-- Video Popup -->
  <div class="video-popup" id="popup">
    <div class="close-btn" onclick="closePopup()">×</div>
    <iframe id="youtubeFrame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</div>
<div class="fd-wrapper">
  <div class="fd-subtitle">Airlines Flight</div>
  <h2 class="fd-title">Featured Flight Deals</h2>

  <div class="fd-grid">
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-1.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">Canadian Airlines ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Dubai to London</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    <!-- Repeat for other cards with same structure -->
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-2.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">Air France ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Paris to London</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    
    
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-3.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">American Airlines ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Vietnam to Yemenn</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-4.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">British Airways ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Portugal to Qatar</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-5.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">Air Portugal ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Egypt to Senegal</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    <div class="fd-card">
      <div class="fd-heart"><i class="fa-regular fa-heart"></i></div>
      <img src="image/d-image-6.webp" alt="Dubai to London">
      <div class="fd-content">
        <div class="fd-airline">Italian Airlin ✈ <span class="fd-price">From $87.00</span></div>
        <div class="fd-route">Serbia to Croatia</div>
        <div class="fd-footer">
          <span class="fd-tag">One Way Flight</span>
          <button class="fd-book-btn"><a href="https://fusionairtravels.com/contact.php">Book Now →</a></button>
        </div>
      </div>
    </div>
    
  </div>
</div>
  <div class="stats-container">
    <div class="stat-box">
      <i class="fas fa-phone"></i>
      <div class="stat-number">24/7</div>
      <div class="stat-label">Customer Services</div>
    </div>
    <div class="stat-box">
      <i class="fas fa-map-marked-alt"></i>
      <div class="stat-number">3K</div>
      <div class="stat-label">Destinations Collaboration</div>
    </div>
    <div class="stat-box">
      <i class="fas fa-briefcase"></i>
      <div class="stat-number">15+</div>
      <div class="stat-label">Years Of Experience</div>
    </div>
    <div class="stat-box">
      <i class="fas fa-smile-beam"></i>
      <div class="stat-number">5K+</div>
      <div class="stat-label">Happy Customers</div>
    </div>
  </div>
 <section class="sect">
    <div class="left">
      <p>Payment Options</p>
      <h1>Plan Your Upcoming<br>Flight with Fusion Air Travels</h1>
      <div class="desc">
        They provide a swift and efficient means of transportation across vast distances
        enabling both business and leisure travel airlines.
      </div>
      <div class="payment-logos">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="MasterCard">
        <img src="image/p-card-3-removebg-preview.png" alt="Stripe">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
      </div>
    </div>
    <div class="right">
      <img src="image/payment.webp" alt="Family at Airport">
    </div>
  </section>
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
</div>
<?php include('footer.php'); ?>



<script>
    // Hide loader after page load
    window.onload = function() {
        document.querySelector(".loader-wrapper").style.display = "none";
    };
</script>



<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
