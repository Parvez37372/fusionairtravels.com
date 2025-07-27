<?php include('header.php'); ?>

<style>
.container-near {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
}
.headeres {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.headeres h1 {
    font-size: 28px;
    margin: 10px 0;
}
.social-share a {
    margin-left: 10px;
    text-decoration: none;
    font-size: 18px;
    color: #000;
    transition: color 0.3s;
}
.social-share a:hover {
    color: #ff5722;
}
.content-tt {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 20px;
}
.main-content-tt {
    flex: 2;
    min-width: 280px;
}
.main-content-tt img {
    width: 100%;
    border-radius: 8px;
}
.main-content-tt h2 {
    font-size: 20px;
    margin-top: 15px;
}
.main-content-tt p {
    font-size: 14px;
    line-height: 1.6;
}
.side-content-tt {
    flex: 1;
    min-width: 250px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
a
{
    text-decoration:none;
    color:white;
}
.offer-card, .manage-card {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
}
.offer-card {
    background: #fff5e5;
    text-align: center;
}
.offer-card h3 {
    margin: 10px 0;
}
.offer-card button {
    background: #ff5722;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}
.offer-card button:hover {
    background: #e64a19;
}
.manage-card h4 {
    font-size: 16px;
    margin-bottom: 10px;
}
.manage-card ul {
    list-style: none;
    padding: 0;
}
.manage-card li {
    padding: 8px 0;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}
.manage-card li:last-child {
    border-bottom: none;
}
.booking-forms {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 1000px;
    width: 100%;
    margin: 20px auto;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
.booking-forms h2 {
    text-align: center;
    font-size: 20px;
    margin-bottom: 20px;
}
.trip-type {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 15px;
}
.trip-type label {
    font-size: 14px;
    cursor: pointer;
}
.form-group {
    margin-bottom: 15px;
}
label {
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
}
input, select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}
input:focus, select:focus {
    border-color: #ff5722;
    box-shadow: 0 0 5px rgba(255, 87, 34, 0.2);
    outline: none;
}
.btn-group {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}
.btn {
    flex: 1;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}
.btn-reset {
    background: #0d47a1;
    color: #fff;
}
.btn-submit {
    background: linear-gradient(to right, #ff5722, #ff7043);
    color: #fff;
}
.btn:hover {
    transform: translateY(-2px);
}
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
@media (max-width: 768px) {
    .content-tt {
        flex-direction: column;
    }
    .btn-group {
        flex-direction: column;
    }
}
</style>
 <section class="hero">
        <div class="hero-content">
            <h1>Manage Your Flights</h1>
            <p class="breadcrumb"><a href="#">Home</a> / <span>Manage</span></p>
        </div>
    </section>
<div class="container-near">
    <div class="headeres">
        <h1>Flight Schedules</h1>
        <div class="social-share">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <div class="content-tt">
        <div class="main-content-tt">
            <img src="image/hero-image-10.webp" alt="Flight Schedule">
            <h2>FUSION AIR TRAVELS SCHEDULES</h2>
            <p>Our schedule provides website visitors with a convenient overview of available destinations and flight times with SAA, allowing you to plan your journey effortlessly before booking.</p>
            <p>Stay connected with SAA flight schedules, no matter your location. Check our online flight schedules before making a reservation.</p>
            <h2>Use the flight search functionality below ➥</h2>
        </div>
        <div class="side-content-tt">
            <div class="offer-card">
                <small>49% OFF</small>
                <h3>Sizzling Summer Offers</h3>
      <button><a href="explore.php">View Deals ➔</a></button>            </div>
            <div class="manage-card">
                <h4>Manage My Booking</h4>
                <ul>
                    <li>Online Check-in</li>
                    <li>Flight Status</li>
                    <li>Manage Booking</li>
                    <li>Travel Experience</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<form class="booking-forms">
    <h2>Search & Book Your Flight</h2>

<div class="trip-type">
         <input type="search" placeholder="search your dream flight">
         
        <button type="submit" class="btn btn-submit"><i class="fas fa-paper-plane"></i>Search</button>
    </div>
    
    </form>

<form class="booking-forms">
    <h2>Search & Book Your Flight</h2>
    
   
    <div class="trip-type">
        <label><input type="radio" name="tripType" value="Round Trip" checked> Round Trip</label>
        <label><input type="radio" name="tripType" value="One Way"> One Way</label>
    </div>
    
    <div class="form-group">
        <label for="from">From</label>
        <select id="from" name="from" required>
            <option value="">Select Departure City</option>
            <option value="New York">New York</option>
            <option value="Dubai">Dubai</option>
            <option value="London">London</option>
            <option value="Tokyo">Tokyo</option>
        </select>
    </div>
    <div class="form-group">
        <label for="destination">Destination</label>
        <input type="text" id="destination" name="destination" placeholder="Enter Destination City" required>
    </div>
    <div class="form-group">
        <label for="departing">Departing Date</label>
        <input type="date" id="departing" name="departing" required>
    </div>
    <div class="form-group" id="returningField">
        <label for="returning">Returning Date</label>
        <input type="date" id="returning" name="returning">
    </div>
    <div class="btn-group">
        <button type="reset" class="btn btn-reset"><i class="fas fa-rotate-left"></i> Reset</button>
        <button type="submit" class="btn btn-submit"><i class="fas fa-paper-plane"></i> Submit</button>
    </div>
</form>

<script>
// Toggle returning date field based on trip type
document.querySelectorAll('input[name="tripType"]').forEach(radio => {
    radio.addEventListener('change', function() {
        if (this.value === "One Way") {
            document.getElementById('returningField').style.display = 'none';
        } else {
            document.getElementById('returningField').style.display = 'block';
        }
    });
});

// Initialize on load
window.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('input[name="tripType"]:checked').value === "One Way") {
        document.getElementById('returningField').style.display = 'none';
    }
});
</script>

<?php include('footer.php'); ?>
