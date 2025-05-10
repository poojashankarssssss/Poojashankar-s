<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Online Voting System - Mini DBMS Project</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
      margin: 0;
    }
    header {
      background: #007BFF;
      color: white;
      padding: 20px;
      text-align: center;
    }
    nav {
      background: #343a40;
      display: flex;
      justify-content: center;
    }
    nav button {
      background: none;
      border: none;
      color: white;
      padding: 14px 20px;
      cursor: pointer;
      font-size: 16px;
    }
    nav button:hover {
      background: #495057;
    }
    section {
      display: none;
      padding: 20px;
      max-width: 600px;
      margin: 20px auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px #ccc;
    }
    section.active {
      display: block;
    }
    h2 {
      text-align: center;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }
  </style>
</head>
<body>

<header>
  <h1>Online Voting System</h1>
</header>

<nav>
  <button onclick="show('home')">Home</button>
  <button onclick="show('register')">Register</button>
  <button onclick="show('login')">Voter Login</button>
  <button onclick="show('vote')">Vote</button>
  <button onclick="show('results')">Results</button>
  <button onclick="show('admin')">Admin</button>
</nav>

<section id="home" class="active">
  <h2>Welcome!</h2>
  <p>This is a simulated DBMS mini project: Online Voting System.</p>
  <p>Use the buttons above to navigate through the demo: register, login, vote, and view results.</p>
</section>

<section id="register">
  <h2>Voter Registration</h2>
  <input type="text" placeholder="Full Name" required />
  <input type="email" placeholder="Email Address" required />
  <input type="text" placeholder="Username" required />
  <input type="password" placeholder="Password" required />
  <button onclick="alert('Registered (Demo Only)!')">Register</button>
</section>

<section id="login">
  <h2>Voter Login</h2>
  <input type="text" id="voterUser" placeholder="Username" required />
  <input type="password" id="voterPass" placeholder="Password" required />
  <button onclick="loginVoter()">Login</button>
</section>

<section id="vote">
  <h2>Cast Your Vote</h2>
  <form onsubmit="submitVote(event)">
    <label><input type="radio" name="candidate" value="Alice" required /> Alice (President)</label><br />
    <label><input type="radio" name="candidate" value="Bob" /> Bob (President)</label><br />
    <label><input type="radio" name="candidate" value="Carol" /> Carol (Secretary)</label><br />
    <button type="submit">Submit Vote</button>
  </form>
</section>

<section id="results">
  <h2>Voting Results</h2>
  <table>
    <thead>
      <tr>
        <th>Candidate</th>
        <th>Position</th>
        <th>Votes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alice</td>
        <td>President</td>
        <td id="voteAlice">0</td>
      </tr>
      <tr>
        <td>Bob</td>
        <td>President</td>
        <td id="voteBob">0</td>
      </tr>
      <tr>
        <td>Carol</td>
        <td>Secretary</td>
        <td id="voteCarol">0</td>
      </tr>
    </tbody>
  </table>
</section>

<section id="admin">
  <h2>Admin Login</h2>
  <input type="text" id="adminUser" placeholder="Admin Username" />
  <input type="password" id="adminPass" placeholder="Admin Password" />
  <button onclick="adminLogin()">Login</button>
</section>

<script>
  let votes = { Alice: 0, Bob: 0, Carol: 0 };

  function show(id) {
    document.querySelectorAll('section').forEach(s => s.classList.remove('active'));
    document.getElementById(id).classList.add('active');
  }

  function loginVoter() {
    const user = document.getElementById('voterUser').value;
    const pass = document.getElementById('voterPass').value;
    if (user === 'voter' && pass === '123') {
      alert('Login successful!');
      show('vote');
    } else {
      alert('Invalid voter credentials. Try voter / 123');
    }
  }

  function submitVote(e) {
    e.preventDefault();
    const choice = document.querySelector('input[name="candidate"]:checked');
    if (choice) {
      votes[choice.value]++;
      updateResults();
      alert('Vote submitted!');
      show('results');
    }
  }

  function updateResults() {
    document.getElementById('voteAlice').textContent = votes.Alice;
    document.getElementById('voteBob').textContent = votes.Bob;
    document.getElementById('voteCarol').textContent = votes.Carol;
  }

  function adminLogin() {
    const user = document.getElementById('adminUser').value;
    const pass = document.getElementById('adminPass').va<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AI Travel Planner</title>
  <style>
  body {
      font-family: Arial, sans-serif;
      padding: 30px;
      text-align: center;
      background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e'); /* Replace with your preferred image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
    }
      font-family: Arial, sans-serif;
      padding: 30px;
      text-align: center;
      background: #f0f8ff;
    }
    select, button {
      padding: 10px;
      margin: 10px;
      width: 250px;
    }
    .result {
      margin-top: 20px;
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 8px;
      max-width: 600px;
      margin: 20px auto;
      text-align: left;
      background:"https://www.tusktravel.com.mx/blog/wp-content/uploads/2020/02/Agumbe-Karnataka.jpg" ;
    }
    .result img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <h1>🌍 AI-Based Travel Planner</h1>

  <p>Choose your travel preferences:</p>

  <select id="interest">
    <option value="nature">Nature & Forests</option>
    <option value="heritage">Cultural Heritage</option>
    <option value="mountains">Mountains</option>
    <option value="coastal">Coastal & Beaches</option>
    <option value="adventure">Adventure</option>
  </select>

  <select id="stayType">
    <option value="eco">Eco-friendly Homestays</option>
    <option value="hostel">Local Hostels</option>
    <option value="community">Community-run Lodges</option>
  </select>

  <button onclick="generatePlan()">Suggest Destinations</button>

  <div id="resultsContainer"></div>

  <script>
    const destinations = {
      nature: [
        {
          name: "Agumbe, Karnataka",
          desc: "A hidden rainforest in the Western Ghats, perfect for biodiversity lovers.",
          stay: "Eco-stays in forest lodges.",
          experience: "Guided nature walks and wildlife photography with locals.",
          climate: "Tropical, best from October to March.",
          image: "https://www.tusktravel.com.mx/blog/wp-content/uploads/2020/02/Agumbe-Karnataka.jpg"
        },
        {
          name: "Mawlynnong, Meghalaya",
          desc: "Asia’s cleanest village surrounded by lush greenery and waterfalls.",
          stay: "Community-run bamboo cottages.",
          experience: "Village clean-up drives and Khasi cultural shows.",
          climate: "Pleasant, best from September to May.",
          image: "https://th.bing.com/th/id/OIP.WoFydZkP88QTgH4fp9fqPQHaE0?cb=iwc1&w=1200&h=780&rs=1&pid=ImgDetMain.jpg"
        }
      ],
      heritage: [
        {
          name: "Hampi, Karnataka",
          desc: "UNESCO site known for ancient temples and royal architecture.",
          stay: "Local heritage guest houses.",
          experience: "Cultural tours and local guide storytelling.",
          climate: "Hot summers, best from October to February.",
          image: "https://www.holidaymonk.com/wp-content/uploads/2020/10/Vastuchitra_Stone-Chariot-Hampi-1024x683.jpg"
        },
        {
          name: "Khajuraho, Madhya Pradesh",
          desc: "Famous for intricately carved temples and cultural significance.",
          stay: "Heritage lodges near the temple complex.",
          experience: "Evening light shows and sculpture workshops.",
          climate: "Best from October to March.",
          image: "https://th.bing.com/th/id/OIP.eHdDvzErVjaiungLHkltIAHaE8?cb=iwc1&rs=1&pid=ImgDetMain.jpg"
        }
      ],
      mountains: [
        {
          name: "Tawang, Arunachal Pradesh",
          desc: "Scenic monastery town in the Eastern Himalayas.",
          stay: "Monastery guesthouses and local homes.",
          experience: "Trekking, meditation, and culture exchange.",
          climate: "Cold winters, best from March to May and September to November.",
          image: "https://th.bing.com/th/id/OIP.glFCRGQ-vOKeAHvVz8CIYwHaE7?cb=iwc1&rs=1&pid=ImgDetMain.jpg"
        },
        {
          name: "Lachung, Sikkim",
          desc: "Snow-clad peaks and the Yumthang Valley.",
          stay: "Homestays with local families.",
          experience: "Local Sikkimese cuisine and flower valley visits.",
          climate: "Snowy winters, best from March to June.",
          image: "https://sikkimtourism.org/wp-content/uploads/2022/04/Lachung-e1653463465649.jpg"
        }
      ],
      coastal: [
        {
          name: "Varkala, Kerala",
          desc: "Cliffside beach with spiritual vibes and local charm.",
          stay: "Eco resorts and Ayurvedic homestays.",
          experience: "Yoga, sea cliff walks, and seafood experiences.",
          climate: "Tropical, best from October to March.",
          image: "https://th.bing.com/th/id/OIP.wiR3tcATtoz8Vo3IzQtHCwHaE8?cb=iwc1&rs=1&pid=ImgDetMain.jpg"
        },
        {
          name: "Gokarna, Karnataka",
          desc: "Chilled beach town with a mix of spirituality and surf.",
          stay: "Beachside shacks and eco cabins.",
          experience: "Temple visits and beach treks.",
          climate: "Warm year-round, avoid monsoon (June–Sep).",
          image: "https://static.toiimg.com/photo/imgsize-737214,msid-79949037/79949037.jpg"
        }
      ],
      adventure: [
        {
          name: "Spiti Valley, Himachal",
          desc: "High-altitude desert with biking, monasteries, and stargazing.",
          stay: "Mud houses powered by solar energy.",
          experience: "Treks, yak rides, and glacier visits.",
          climate: "Cold desert, best from May to September.",
          image: "https://www.tripsavvy.com/thmb/aUgWsuQq_gu1zmarPc0s5solung=/2121x1414/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-676106126-5943bd015f9b58d58a8cd2f4.jpg"
        },
        {
          name: "Sandakphu, West Bengal",
          desc: "Trekker’s paradise with views of Everest and Kanchenjunga.",
          stay: "Community-run trekker huts.",
          experience: "Camping, star trails, and eco-awareness camps.",
          climate: "Cool and scenic, best from March to May and October to December.",
          image: "https://th.bing.com/th/id/OIP._Qmu0psMAtDoaLGzZNlb3wHaE9?cb=iwc1&rs=1&pid=ImgDetMain.jpg"
        }
      ]
    };

    function generatePlan() {
      const interest = document.getElementById("interest").value; // Get selected interest
      const stay = document.getElementById("stayType").value; // Get selected stay type
      const options = destinations[interest]; // Get destinations for selected interest

      if (!options) {
        alert("No destinations found for this category.");
        return;
      }

      const shuffled = options.sort(() => 0.5 - Math.random()); // Shuffle the options for randomness
      const selected = shuffled.slice(0, 2); // Get 2 random destinations

      const container = document.getElementById("resultsContainer");
      container.innerHTML = ""; // Clear any previous results

      // Loop through the selected destinations and display them
      selected.forEach(place => {
        container.innerHTML += `
          <div class="result">
            <img src="${place.image}" alt="${place.name}">
            <h2>${place.name}</h2>
            <p>${place.desc}</p>
            <p><strong>Stay Option:</strong> ${place.stay}</p>
            <p><strong>Experience:</strong> ${place.experience}</p>
            <p><strong>Climate:</strong> ${place.climate}</p>
          </div>
        `;
      });
    }
  </script>

</body>
</html>lue;
    if (user === 'admin' && pass === 'admin') {
      alert('Admin login successful!');
      show('results');
    } else {
      alert('Invalid admin credentials.');
    }
  }
</script>

</body>
</html>

