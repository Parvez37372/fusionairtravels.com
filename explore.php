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

    .deal-wrapper {
        padding: 40px 20px;
        background: #f5f7f8;
    }

    .deal-top {
        max-width: 1000px;
        margin: auto;
        background: #f1f3f4;
        padding: 30px;
        border-radius: 8px;
    }

    .deal-top h2 {
        margin: 0;
        font-size: 24px;
        color: #000;
    }

    .deal-top p {
        margin-top: 10px;
        color: #444;
        font-size: 15px;
    }

    .deal-tabs {
        max-width: 1000px;
        margin: 30px auto 20px;
        display: flex;
        gap: 30px;
        border-bottom: 2px solid #ddd;
    }

    .deal-tab {
        padding-bottom: 10px;
        cursor: pointer;
        font-weight: 600;
        color: #000;
        border-bottom: 3px solid transparent;
    }

    .deal-tab.active {
        border-bottom: 3px solid #000;
    }

    .deal-content {
        max-width: 1000px;
        margin: auto;
        background: #f5f7f8;
        padding-bottom: 30px;
    }

    .deal-content h3 {
        font-size: 20px;
        color: #000;
    }

    .deal-content p {
        margin-bottom: 20px;
        font-size: 15px;
        color: #444;
    }

    .deal-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .deal-box {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
    }

    .deal-box:hover {
        transform: translateY(-5px);
    }

    .deal-box img {
        width: 60%;
        height: 180px;
        object-fit: cover;
    }

    .deal-tag {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #e62e00;
        color: #fff;
        padding: 5px 10px;
        font-size: 13px;
        font-weight: bold;
        border-radius: 4px;
    }

    .deal-info {
        padding: 15px;
    }

    .deal-info h4 {
        margin: 0 0 10px;
        font-size: 17px;
        color: #000;
    }

    .deal-btn {
        display: inline-block;
        padding: 8px 16px;
        background: transparent;
        border: 1.5px solid #ff5a1f;
        color: #ff5a1f;
        font-weight: bold;
        border-radius: 6px;
        font-size: 14px;
        text-decoration: none;
        transition: 0.3s;
    }

    .deal-btn:hover {
        background: #ff5a1f;
        color: white;
    }

    .promo-form {
        display: flex;
        gap: 10px;
        margin-top: 15px;
        flex-wrap: wrap;
    }

    .promo-form input {
        padding: 10px 15px;
        border: 1.5px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        flex: 1 1 250px;
    }

    .promo-btn {
        padding: 10px 20px;
        background: linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .promo-btn:hover {
        opacity: 0.9;
    }

    @media (max-width: 600px) {
        .deal-tabs {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<section class="hero">
    <div class="hero-content">
        <h1>Deals</h1>
        <p class="breadcrumb"><a href="#">Home</a> / <span>Deals</span></p>
    </div>
</section>

<div class="deal-wrapper">
    <div class="deal-top">
        <h2>Exciting Deals</h2>
        <p>Grab yourself a good bargain! Air India Express serves up interesting and cost-efficient offers, ensuring that the guests get the best out of it.</p>
    </div>

    <div class="deal-tabs">
        <div class="deal-tab active">Limited Time Offers</div>
        <div class="deal-tab">Special Fares</div>
        <div class="deal-tab">Promo Code</div>
    </div>

    <!-- Limited Time Offers -->
    <div class="deal-content deal-tab-content">
        <h3>Limited time offers</h3>
        <p>It's time to seize the moment and pick from our exclusive travel deals.</p>

        <div class="deal-grid">
            <div class="deal-box">
                <img src="image/offer-a.webp" alt="Deal 1" />
                <span class="deal-tag">39% OFF</span>
                <div class="deal-info">
                    <h4>Rising in an Exotic Locale</h4>
                    <a href="#" class="deal-btn">View More →</a>
                </div>
            </div>

            <div class="deal-box">
                <img src="image/offer-b.webp" alt="Deal 2" />
                <span class="deal-tag">39% OFF</span>
                <div class="deal-info">
                    <h4>Awakening in a Distant Land</h4>
                    <a href="#" class="deal-btn">View More →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Fares -->
    <div class="deal-content deal-tab-content">
        <h3>Special Fares</h3>
        <p>Grab your special flight fares before they're gone!</p>
        <div class="deal-grid">
            <div class="deal-box">
                <img src="image/d-image-7.webp" alt="Deal 3" />
                <span class="deal-tag">25% OFF</span>
                <div class="deal-info">
                    <h4>Adventure Fare to the Hills</h4>
                    <a href="#" class="deal-btn">Book Now →</a>
                </div>
            </div>

            <div class="deal-box">
                <img src="image/d-image-8.webp" alt="Deal 4" />
                <span class="deal-tag">30% OFF</span>
                <div class="deal-info">
                    <h4>Romantic Getaway Deals</h4>
                    <a href="#" class="deal-btn">Book Now →</a>
                </div>
            </div>
            
        </div>
        <br>
          <div class="deal-grid">
            <div class="deal-box">
                <img src="image/d-image-12.webp" alt="Deal 3" />
                <span class="deal-tag">25% OFF</span>
                <div class="deal-info">
                    <h4>Defense Personnel</h4>
                    <a href="#" class="deal-btn">Book Now →</a>
                </div>
            </div>

            <div class="deal-box">
                <img src="image/d-image-9.webp" alt="Deal 4" />
                <span class="deal-tag">35% OFF</span>
                <div class="deal-info">
                    <h4>Senior Citizens</h4>
                    <a href="#" class="deal-btn">Book Now →</a>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Promo Code -->
    <div class="deal-content deal-tab-content">
        <h3>Apply Promo Code</h3>
        <p>Get the best discounts using your unique promo codes.</p>
        <form class="promo-form">
            <input type="email" placeholder="Email" required />
            <button type="submit" class="promo-btn">Apply Offer →</button>
        </form>
    </div>
</div>

<script>
    const tabs = document.querySelectorAll(".deal-tab");
    const contents = document.querySelectorAll(".deal-tab-content");

    tabs.forEach((tab, i) => {
        tab.addEventListener("click", () => {
            tabs.forEach(t => t.classList.remove("active"));
            contents.forEach(c => c.style.display = "none");

            tab.classList.add("active");
            contents[i].style.display = "block";
        });
    });

    // Show first tab by default
    contents.forEach((c, i) => {
        c.style.display = i === 0 ? "block" : "none";
    });
</script>

<?php include('footer.php')?>
