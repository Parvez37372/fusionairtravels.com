<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flight with Aerox</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }
    .section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 60px 10%;
      gap: 40px;
      flex-wrap: wrap;
    }
    .left {
        background-image: url('image/payment-shape.webp');
      flex: 1 1 500px;
    }
    .left p {
      color: #ff5c00;
      font-weight: 600;
      margin-bottom: 10px;
    }
    .left h1 {
      font-size: 36px;
      margin: 10px 0;
      color: #111;
    }
    .left .desc {
      color: #555;
      margin-bottom: 30px;
      line-height: 1.6;
    }
    .payment-logos {
      display: flex;
      gap: 20px;
      padding: 20px;
      background: #fafafa;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      border-radius: 10px;
      max-width: 100%;
    }
    .payment-logos img {
      height: 35px;
      width: auto;
    }
    .right {
      flex: 1 1 400px;
    }
    .right img {
      width: 100%;
      border-radius: 10px;
    }

    @media screen and (max-width: 768px) {
      .sect {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
      }
      .left, .right {
        flex: 1 1 100%;
      }
      .payment-logos {
        justify-content: center;
        flex-wrap: wrap;
      }
    }
      @media screen and (max-width: 768px) {
      .sect {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
      }
      .left, .right {
        flex: 1 1 100%;
      }
      .payment-logos {
        justify-content: center;
        flex-wrap: wrap;
      }
    }
  </style>
</head>
<body>

  <section class="section">
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

</body>
</html>
