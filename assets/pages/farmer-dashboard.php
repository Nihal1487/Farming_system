<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmer Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="../css/dashboard.css" />
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar">
          <div class="logo">
            <a href="index.html"><img src="../images/logo.png" alt="logo" /></a>
          </div>
          <ul class="nav-links">
            <li><a href="/index.html">Home</a></li>
            <li><a href="./farmer-my-contracts.html">My Contracts</a></li>
            <li><a href="./farmer-new-contracts.php">Add Product</a></li>
          </ul>
          <button class="toggle-menu" id="toggle-menu">
            <i class="fa-solid fa-bars"></i>
          </button>
        </nav>
      </div>
    </header>

    <main>
      <div class="tab-content">
        <h1>All Contracts</h1>
        <div class="tabs">
          <button class="tab-button active" onclick="showTab('all')">
            All Contracts (5)
          </button>
          <button class="tab-button" onclick="showTab('pending')">
            Pending Contracts (2)
          </button>
          <button class="tab-button" onclick="showTab('completed')">
            Completed Contracts (3)
          </button>
        </div>
        <div id="all" class="tab-pane active">
          <div class="container">
            <!-- Contract cards for all contracts -->
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <!-- Add more contract cards as needed -->
          </div>
        </div>
        <div id="pending" class="tab-pane">
          <div class="container">
            <h1>Pending Contracts</h1>
            <!-- Contract cards for pending contracts -->
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <!-- Add more contract cards as needed -->
          </div>
        </div>
        <div id="completed" class="tab-pane">
          <div class="container">
            <h1>Completed Contracts</h1>
            <!-- Contract cards for completed contracts -->
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <div class="contract-card">
              <h2>Contract ID: 12345</h2>
              <p><strong>Buyer Name:</strong> ABC Foods</p>
              <p><strong>Crop:</strong> Wheat</p>
              <p><strong>Quantity:</strong> 500 kg</p>
              <p><strong>Contract Date:</strong> 2024-08-01</p>
              <p><strong>Delivery Schedule:</strong> 2024-09-01</p>
              <p><strong>Payment Status:</strong> Pending</p>
              <p><strong>Contract Status:</strong> Active</p>
              <button class="btn">View/Download Contract</button>
              <button class="btn">Update Progress</button>
            </div>
            <!-- Add more contract cards as needed -->
          </div>
        </div>
      </div>
    </main>

    <footer class="footer-1">
      <div class="container-fluid">
        <p>© 2024 ContractFarm. All rights reserved.</p>
      </div>
    </footer>

    <script>
      document
        .getElementById("toggle-menu")
        .addEventListener("click", function () {
          const navLinks = document.querySelector(".nav-links");
          navLinks.classList.toggle("active");
        });

      function showTab(tabId) {
        const tabs = document.querySelectorAll(".tab-pane");
        tabs.forEach((tab) => {
          tab.style.display = "none";
          if (tab.id === tabId) {
            tab.style.display = "block";
          }
        });

        const buttons = document.querySelectorAll(".tab-button");
        buttons.forEach((button) => {
          button.classList.remove("active");
          if (button.textContent.trim().toLowerCase().includes(tabId)) {
            button.classList.add("active");
          }
        });
      }
    </script>
  </body>
</html>
