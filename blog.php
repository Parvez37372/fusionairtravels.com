<?php
include('header.php');
?>

  <style>
    .container {
      display: flex;
      max-width: 1200px;
      margin: auto;
      gap: 20px;
    }

    .sidebar {
      width: 25%;
    }

    .main-content {
        background-color:#fff;
      width: 75%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .card {
      background: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .card img {
      width: 100%;
      border-radius: 5px;
    }

    .card h4 {
      font-size: 16px;
      margin: 10px 0;
      color: #333;
    }

    .meta {
      font-size: 12px;
      color: #888;
      margin-bottom: 10px;
    }

    .view-more {
      font-size: 14px;
      color: orange;
      text-decoration: none;
    }

    .widget {
      margin-bottom: 55px;
    }

    .widget h4 {
      margin-bottom: 12px;
      font-size: 22px;
      border-bottom: 2px solid #ddd;
      padding-bottom: 5px;
    }

    .widget ul {
      list-style: none;
    }

    .widget ul li {
      margin-bottom: 10px;
      font-size: 14px;
    }

    .tag-cloud span {
      display: inline-block;
      background: #eee;
      padding: 5px 10px;
      border-radius: 3px;
      margin: 5px 5px 0 0;
      font-size: 13px;
    }
  .tag-cloud span:hover {
    background-color: #ff6423;
    color: #fff;
    transition-duration: 1s; /* or 1000ms */
}

    .pagination {
      text-align: center;
      margin-top: 30px;
    }

    .pagination span {
      display: inline-block;
      margin: 0 5px;
      padding: 5px 10px;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      cursor: pointer;
    }

    .pagination .active {
      background: orange;
      color: #fff;
      border-color: orange;
    }
      .pagination .active:hover {
      background: rgb(255, 100, 35);
      color: #fff;
      border-color: orange;
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
     a{
         text-decoration: none;

     }
     .desc{
         color:black;
     }
     .view-more
     {
         color:#ff6423;
         
     }
     .view-more:hover
     {
         color:#fff;
         background-color:#f65c1b;
         border-radius:10px;
         padding:8px;
        transition-duration: 1s; /* or 1000ms */
     }
     .fa-solid
     {
         background:linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
         color:#fff;
         font-size:18px;
         padding:12px;
     }
     .fa-solid {
  transition: all 0.3s ease;
}

.fa-solid:hover {
  color: #fff;         /* Change color on hover */
  transform: scale(1.2);  /* Slight zoom effect */
  cursor: pointer;
}
     
     .card img {
  width: 100%;
  border-radius: 5px;
  transition: transform 0.4s ease, box-shadow 0.3s ease;
}

.card img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
img {
  
  border-radius: 5px;
  transition: transform 0.4s ease, box-shadow 0.3s ease;
}
img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
/* Mobile View */
@media screen and (max-width: 768px) {
  .container {
    flex-direction: column;
    padding: 10px;
    align-items: flex-start;
  }
   
  .sidebar {
    width: 100%;
    margin-bottom: 20px;
    text-align: left;
  }

  .main-content {
    width: 100%;
    grid-template-columns: 1fr;
    gap: 15px;
    text-align: left;
  }

  .card {
    text-align: left;
  }

  .card img {
    display: block;
    margin: 0;
  }

  .card h4 {
    font-size: 14px;
    text-align: left;
  }

  .meta {
    font-size: 11px;
    text-align: left;
  }

  .view-more {
    font-size: 13px;
    display: inline-block;
    text-align: left;
  }

  .widget h4 {
    font-size: 18px;
    text-align: left;
  }

  .widget ul li {
    text-align: left;
  }

  .tag-cloud span {
    text-align: left;
  }

  .hero {
    height: 200px;
  }

  .hero-content h1 {
    font-size: 24px;
    text-align: center; /* Keep this centered if it's a hero title */
  }

  .fa-solid {
    font-size: 16px;
    padding: 10px;
  }

  .pagination span {
    padding: 4px 8px;
    font-size: 13px;
  }
}

/* Smaller screens */
@media screen and (max-width: 480px) {
  .main-content {
    grid-template-columns: 1fr;
  }

  .card {
    padding: 10px;
  }

  .hero {
    height: 150px;
  }

  .hero-content h1 {
    font-size: 20px;
  }
}


  </style>
 <section class="hero">
        <div class="hero-content">
            <h1>Blogs Us</h1>
            <p class="breadcrumb"><a href="#">Home</a> / <span>Blogs</span></p>
        </div>
    </section>
  <div class="container">
    <div class="sidebar">
     <div class="widget search-widget">
  <div class="search-box">
    <input type="text" placeholder="Search...">
    <i class="fa-solid fa-magnifying-glass"></i>
  </div>
</div>


      <div class="widget">
        <h4>Popular Post</h4>
        <img src="image/user-10.webp">
        <p>08 Fab 2025</p>
        <ul>
          <li>Title of Community Broken Down</li>
                  <img src="image/user-11.webp">
                     <p>15 Fab 2025</p>
          <li>Top 10 Holiday Can Enjoy in Canada Trips</li>
                  <img src="image/user-12.webp">
                     <p>11 Fab 2025</p>
          <li>Exploring The Enigmatic Charm Of Eternal Rome</li>
        </ul>
      </div>

      <div class="widget">
        <h4>Categories</h4>
        <ul>
          <li>● Adventure Travel</li>
          <li>● Food & Drink</li>
          <li>● Lifestyle</li>
        </ul>
      </div>

      <div class="widget">
        <h4>Tags</h4>

        <div class="tag-cloud">
          <span>Tour</span><span>Holiday</span><span>Trip</span><span>Travel</span>
        </div>
      </div>
    </div>

    <div class="main-content">
      <div class="card">
        <img src="image/b-image-4.webp" alt="">
        <h4>Exploring The Enigmatic Charm Of Eternal Rome</h4>
        <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
<a href="#" class="view-more">
  View More <i class="ti ti-arrow-up-right"></i>
</a>

      </div>
      <div class="card">
        <img src="image/b-image-5.webp" alt="">
        <h4>Top 10 Holiday Can Enjoy In Canada Trips</h4>
          <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
        <a href="#" class="view-more">View More</a>
      </div>
      <div class="card">
        <img src="image/b-image-6.webp" alt="">
        <h4>Five Ways To Get Best Photos On Picnic Spot</h4>
          <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
        <a href="#" class="view-more">View More</a>
      </div>
      <div class="card">
        <img src="image/b-image-7.webp" alt="">
        <h4>Exploring The Enigmatic Charm Of Eternal Rome</h4>
          <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
        <a href="#" class="view-more">View More</a>
      </div>
      <div class="card">
        <img src="image/b-image-8.webp" alt="">
        <h4>Top 10 Holiday Can Enjoy In Canada Trips</h4>
          <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
        <a href="#" class="view-more">View More</a>
      </div>
      <div class="card">
        <img src="image/b-image-9.webp" alt="">
        <h4>Five Ways To Get Best Photos On Picnic Spot</h4>
          <p class="desc">They provide a swift and efficient means transportation across vast distances enabling both business and leisure travel.</p>
        <div class="meta">By admin | June 2025</div>
        <a href="#" class="view-more">View More</a>
      </div>
    </div>
  </div>
  <div class="pagination">
    <span class="active">1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
  </div>

<?php
include('footer.php');
?>