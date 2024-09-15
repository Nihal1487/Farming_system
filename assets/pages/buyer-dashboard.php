<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buyer Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="../css/dashboard2.css" />
  </head>

  <body>
    <!-- <nav class="navbar"></nav> -->

    <header>
      <div class="container-fluid">
        <nav class="navbar">
          <div class="logo">
            <a href="index.html"><img src="../images/logo.png" alt="logo" /></a>
          </div>
          <ul class="nav-links">
            <li><a href="/index.php">Home</a></li>
            <li><a href="./buyer-my-purchases.php">My Purchases</a></li>
            <li><a href="./buyer-new-purchases.php">Marketplace</a></li>
            <!-- <li><a href="./payment.html">Payment</a></li> -->
          </ul>
          <button class="toggle-menu" id="toggle-menu">
            <i class="fa-solid fa-bars"></i>
          </button>
        </nav>
      </div>
    </header>

    <main>
      <div class="content">
        <h1>Welcome</h1>
       
        <p>Here is a summary of your recent purchases and activity:</p>
        <!-- Add dashboard widgets, graphs, etc. here -->
        <div class="dashboard-widgets">
          <div class="widget">
            <h3>Total Purchases</h3>
            <p>8</p>
          </div>
          <div class="widget">
            <h3>Pending Orders</h3>
            <p>3</p>
          </div>
          <div class="widget">
            <h3>Completed Orders</h3>
            <p>5</p>
          </div>
        </div>
      </div>
    </main>

    <!-- footer section starts here -->

   

    <!-- footer section ends here -->

    <script>
      document
        .getElementById("toggle-menu")
        .addEventListener("click", function () {
          const navLinks = document.querySelector(".nav-links");
          navLinks.classList.toggle("active");
        });
    </script>
  </body>
</html>
