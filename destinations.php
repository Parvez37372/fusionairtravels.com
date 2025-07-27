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
        .destinations {
    text-align: center;
    padding: 50px 20px;
}

.section-tag {
    color: #ff6600;
    font-weight: 600;
    margin-bottom: 10px;
}

.section-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
}

.destinations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.destination-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative;
}

.destination-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.destination-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.destination-info {
    padding: 15px;
    position: relative;
}

.destination-info h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
}

.destination-info p {
    font-size: 14px;
    color: #666;
}

.destination-info i.fa-map-marker {
    color: #ff6600;
    margin-right: 5px;
}

.arrow-btn {
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: #f5f5f5;
    color:black;
    border: none;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

.arrow-btn:hover {
    background: #ddd;
    color:rgb(255, 100, 35);
}
.trending-section {
    padding: 40px 20px;
    background: #fff;
}

.trending-container {
    display: flex;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.sidebar {
    flex: 1;
    min-width: 280px;
    max-width: 300px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
}

.info-card h3 {
    margin-bottom: 10px;
    font-size: 18px;
}

.info-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.info-card li {
    padding: 6px 0;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

.info-card li:last-child {
    border-bottom: none;
}

.sidebar-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.sidebar-item {
    display: flex;
    gap: 10px;
    align-items: flex-start;
}

.sidebar-item img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 5px;
}

.sidebar-item h4 {
    font-size: 15px;
    margin: 0 0 5px 0;
}

.sidebar-item p {
    font-size: 13px;
    color: #555;
    margin: 0;
}

.main-content {
    flex: 3;
    min-width: 300px;
    background-color:white;
    color:black;
}

.main-content h2 {
    font-size: 26px;
    margin-bottom: 20px;
}

.main-content img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
}

.main-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.main-content p {
    font-size: 15px;
    color: #333;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .trending-container {
        flex-direction: column;
    }
}
@media (max-width: 768px) {
    .trending-section {
        padding: 30px 15px;
    }

    .trending-container {
        flex-direction: column;
        gap: 20px;
    }

    .sidebar {
        min-width: 100%;
        max-width: 100%;
        flex-direction: column;
        gap: 15px;
    }

    .info-card {
        padding: 15px;
    }

    .info-card h3 {
        font-size: 16px;
        margin-bottom: 8px;
    }

    .info-card li {
        font-size: 13px;
        padding: 5px 0;
    }

    .sidebar-list {
        gap: 12px;
    }

    .sidebar-item {
        gap: 8px;
    }

    .sidebar-item img {
        width: 50px;
        height: 50px;
    }

    .sidebar-item h4 {
        font-size: 14px;
    }

    .sidebar-item p {
        font-size: 12px;
    }

    .main-content {
        min-width: 100%;
        padding: 0 5px;
    }

    .main-content h2 {
        font-size: 22px;
        margin-bottom: 15px;
    }

    .main-content img {
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .main-content h3 {
        font-size: 18px;
        margin-bottom: 8px;
    }

    .main-content p {
        font-size: 14px;
        line-height: 1.5;
    }
}
@media (max-width: 768px) {
.follow{
   padding:10px;
    
}}

</style>
 <section class="hero">
        <div class="hero-content">
            <h1>Destinations</h1>
            <p class="breadcrumb"><a href="#">Home</a> / <span>Destinations</span></p>
        </div>
    </section>
    <section class="destinations">
    <p class="section-tag">Destination</p>
    <h2 class="section-title">Popular Destinations</h2>

    <div class="destinations-grid">
        <!-- Card 1 -->
        <div class="destination-card">
            <img src="image/D1.webp" alt="Canada">
            <div class="destination-info">
                <h3>Canada</h3>
                <p><i class="fa fa-map-marker"></i> Toronto View</p>
                <button class="arrow-btn"><i class="fa fa-arrow-up-right-from-square"></i></button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="destination-card">
            <img src="image/D2.webp" alt="Australia">
            <div class="destination-info">
                <h3>Australia</h3>
                <p><i class="fa fa-map-marker"></i> Sydney View</p>
                <button class="arrow-btn"><i class="fa fa-arrow-up-right-from-square"></i></button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="destination-card">
            <img src="image/D3.webp" alt="Germany">
            <div class="destination-info">
                <h3>Germany</h3>
                <p><i class="fa fa-map-marker"></i> Berlin View</p>
                <button class="arrow-btn"><i class="fa fa-arrow-up-right-from-square"></i></button>
            </div>
        </div>
    </div>
</section>
<section class="trending-section">
    <div class="trending-container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="info-card">
                <h3>Some Information</h3>
                <ul>
                    <li><strong>Country</strong> <select>
                        <option>New York</option>
                        <option>America</option>
                        <option>Dubai</option>
                        <option>Japan</option>
                         <option>Farance</option>
                          <option>Spin</option>
                           <option>Nepal</option>
                    </select></li>
                    <li><strong>Language Spoken</strong> <select>
    <option value="en">English</option>
     <option value="hi">हिन्दी (Hindi)</option>
    <option value="ar">العربية (Arabic)</option>
    <option value="es">Español (Spanish)</option>
    <option value="fr">Français (French)</option>
</select></li>
                    <li><strong>Visa Requirements</strong> Yes</li>
                    <li><strong>Area (Km2)</strong> 80.00 Km2</li>
                    <li><strong>Per Person</strong> $1000</li>
                    <li><strong>Guide</strong> Local Guide Available</li>
                </ul>
            </div>

            <div class="sidebar-list">
                <div class="sidebar-item">
                    <img src="image/user-9.webp" alt="Hot Balloon Journey">
                    <div>
                        <h4>Hot Balloon Journey</h4>
                        <p>We are dedicated to transforming air travel into extraordinary experience</p>
                    </div>
                </div>
                <div class="sidebar-item">
                    <img src="image/user-7.webp" alt="Peek Mountain View">
                    <div>
                        <h4>Peek Mountain View</h4>
                        <p>We are dedicated to transforming air travel into extraordinary experience</p>
                    </div>
                </div>
                <div class="sidebar-item">
                    <img src="image/user-9.webp" alt="Tour in New York">
                    <div>
                        <h4>Tour in New York</h4>
                        <p>We are dedicated to transforming air travel into extraordinary experience</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Content -->
        <div class="main-content">
            <h2>Trending Destinations - World</h2>
            <img src="image/d-image-26.webp" alt="City View">
            <h3>Our Tour Process</h3>
            <p> At Fusion Air Travels, we make your international travel seamless and memorable. 
        From selecting your dream destination to booking flights, accommodations, and guided tours,
        we handle every step with care. Our experienced travel consultants assist you with visa guidance,
        personalized itineraries, and 24/7 support, ensuring you enjoy a hassle-free journey abroad.
    </p>
    <section class="follow">
        <br>
    <h2>Follow Process</h2>
    <ol>
        <li>
            <strong>1. Select Destination:</strong> Choose your dream country and travel dates with our consultant’s guidance.
        </li>
        <br>
        <li>
            <strong>2. Book Flights & Hotels:</strong> We handle your flight bookings and comfortable hotel arrangements within your budget.
        </li>
                <br>
        <li>
            <strong>3. Visa & Documentation:</strong> Get complete visa assistance, travel insurance, and documentation support.
        </li>
                <br>
        <li>
            <strong>4. Enjoy Your Journey:</strong> Fly worry-free with 24/7 support, local guides, and personalized itineraries abroad.
        </li>
    </ol>
</section>

        </div>
        
    </div>
    
</section>


<?php include('footer.php')?>
