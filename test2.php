
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        .main-contains {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 5px;
        }
        .booking-container {
            background: white;
          
            padding: 30px;
            max-width: 600px;
            width: 85%;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px 20px;
            text-align: left;
        }
        label {
            font-size: 14px;
            font-weight: 600;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            background: #f9f9f9;
            transition: 0.3s ease-in-out;
        }
        .full-width {
            grid-column: span 2;
        }
        button {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
            border: none;
            padding: 14px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
            grid-column: span 2;
            font-weight: 600;
        }
        .radio-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .hidden {
            display: none;
        }
        .destination-group {
            display: flex;
            gap: 10px;
            align-items: center;
        }
         form div {
    display: flex;
    flex-direction: column;
    gap: 5px;
    margin-right: 10px; /* Right margin for spacing */
}

form div:nth-child(even) {
    margin-right: 0; /* Right margin हटाएं ताकि हर दूसरी input सही लगे */
}
@media (max-width: 768px) {
    .booking-container {
        width: 90%;
        padding: 20px;
    }
    
    form {
        grid-template-columns: 1fr; /* Single column layout for mobile */
    }
    
    .full-width, button {
        grid-column: span 1; /* Button and full-width elements adjust */
    }
    
    .radio-options {
        flex-direction: column;
        gap: 10px;
    }

    input, select {
        font-size: 14px;
        padding: 10px;
    }
}


    </style>

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

