
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Journey, Our Passion – Fusion Air Travels</title>
    <meta name="description" content="Travel smarter with Fusion Air Travels! Get exclusive flight deals, budget-friendly tickets, and top-notch customer service for a seamless journey.">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="image/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="assets/style.css">
      <link rel="stylesheet" href="assets/style2.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
           
        }

        body {
            background-color: #f8f9fa;
           
        }

        .header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 40px;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 999; /* higher to stay above content */
}

        
        
        .logo a {
            
            text-decoration:none;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration:none;
        }

        .blue { color: #007bff; }
        .orange { color: #ff6600; }
        .black{color:black;}
      .nav ul {
    display: flex;
    list-style: none;
    gap: 15px;
    justify-content: center; /* Center horizontally */
    width: 70%; /* Full width */
}
.nav {
    display: flex;
    align-items: center;
    justify-content: center; /* Center items */
    width: 100%;
}


        .nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav ul li a:hover, .active {
            color: #ff6600;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon-btn {
            background: #f0f0f0;
            padding: 8px 10px;
            border-radius: 5px;
            color: black;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
            border: none;
        }

        .icon-btn:hover {
            background: #e0e0e0;
        }

        .contact-btn {
            text-decoration: none;
            background:linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background: #e65c00;
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            color:orange;
            
        }
        .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    display: none; /* hidden by default */
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.modal-content {
    background: white;
    padding: 30px 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 400px;
    text-align: center;
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
}

.search-input {
    width: 50%;
    padding: 10px;
    margin: 15px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.search-submit {
    background: linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.search-submit:hover {
    background: #e65c00;
}


        /* Mobile View */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: white;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
                text-align: center;
            }

            .nav ul {
                flex-direction: column;
                padding: 0;
            }

            .nav ul li {
                padding: 10px 0;
            }

            .icons {
                display: flex;
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            .nav.active {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.php"
            <span class="blue">Fusion</span><span class="black">Air</span><span class="orange">Travels</span>
            </a>
        </div>

        <button class="menu-toggle" id="menuToggle">☰</button>

        <nav class="nav" id="navMenu">
            <ul>
                <li><a href="index.php" class="active">Home </a></li>
                <li><a href="about-us.php">About Us +</a></li>
                <li><a href="#">Plan +</a></li>
                <li><a href="manage.php">Manage +</a></li>
                <li><a href="destinations.php">Destinations +</a></li>
                <li><a href="blog.php">Blog +</a></li>
              
            </ul>
            <div class="icons">
            <!-- Existing search button -->
<button class="icon-btn" id="searchBtn"><i class="fa fa-search"></i></button>

<!-- Modal -->
<div class="modal-overlay" id="searchModal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>
        <h2>Search Your Dream Flight</h2>
        <input type="text" placeholder="Enter destination, flight, or keyword" class="search-input">
        <button class="search-submit">Search</button>
    </div>
</div>

                <button class="icon-btn" id="account"><i class="fa fa-user"><a href="account.php"></a></i></button>
                <a href="contact.php" class="contact-btn">Contact Us →</a>
            </div>
        </nav>
    </header>
<script>
    document.getElementById("account").addEventListener("click", function() {
  window.location.href = "account.php";
});

</script>
    <script>
        document.getElementById("menuToggle").addEventListener("click", function() {
            document.getElementById("navMenu").classList.toggle("active");
        });
    </script>
    <script>
    const searchBtn = document.getElementById('searchBtn');
    const searchModal = document.getElementById('searchModal');
    const closeModal = document.getElementById('closeModal');

    searchBtn.addEventListener('click', () => {
        searchModal.style.display = 'flex';
    });

    closeModal.addEventListener('click', () => {
        searchModal.style.display = 'none';
    });

    // Close modal when clicking outside content
    window.addEventListener('click', (e) => {
        if (e.target === searchModal) {
            searchModal.style.display = 'none';
        }
    });
</script>

</body>
</html>
