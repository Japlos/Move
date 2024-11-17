<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>Dashboard</title>
</head>

<body>
  <!-- Sidebar and Content Wrapper -->
  <div class="dashboard-page">
    <!-- Sidebar (unchanged) -->
    <div class="sidebar">
      <a href="#" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>On_</span>A.ment</div>
      </a>
      <ul class="side-menu">
        <li class="active">
          <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="request.php"><i class="bx bx-store-alt"></i>Request</a>
        </li>
        <li>
          <a href="index.php"><i class="bx bx-analyse"></i>Appointment</a>
        </li>
        <li><a href="#"><i class="bx bx-group"></i>Registrar</a> </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#" class="logout">
            <i class="bx bx-log-out-circle"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>

    <!-- Content Section (updated with new information design) -->
    <div class="content">
      <nav>
        <i class="bx bx-menu"></i>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
      </nav>

      <!-- Dashboard Main Content -->
      <main>
        <!-- Header Section -->
        <div class="header">
          <h1>Welcome to Your Dashboard</h1>
        </div>

        <!-- User Info Section (kept simple and clean) -->
        <div class="user-info">
          <div class="user-card">
            <img src="profile-pic.jpg" alt="User Photo" class="profile-img">
            <h3>John Doe</h3>
            <p>Student</p>
          </div>
        </div>

        <!-- Key Stats Section -->
        <section class="stats">
          <div class="stat-card">
            <h4>Total Requests</h4>
            <p>35</p>
          </div>
          <div class="stat-card">
            <h4>Pending Approval</h4>
            <p>5</p>
          </div>
          <div class="stat-card">
            <h4>Completed Requests</h4>
            <p>25</p>
          </div>
          <div class="stat-card">
            <h4>Upcoming Appointments</h4>
            <p>3</p>
          </div>
        </section>

        <!-- Request Analytics Chart (Added section for visualization) -->
        <div class="chart-container">
          <h3>Request Analytics</h3>
          <canvas id="requestChart"></canvas>
        </div>
      </main>
    </div>
  </div>

  <script src="script.js"></script>

  <style>

* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: var(--grey);
      overflow-x: hidden;
    }
    /* Namespace the dashboard page */
    .dashboard-page {
      display: flex;
    }

    /* Sidebar Styles (unchanged) */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      background: var(--light);
      width: 230px;
      height: 100%;
      z-index: 2000;
      overflow-x: hidden;
      scrollbar-width: none;
      transition: all 0.3s ease;
    }

    .sidebar .logo {
      font-size: 24px;
      font-weight: 700;
      height: 56px;
      display: flex;
      align-items: center;
      color: red;
      z-index: 500;
      padding-bottom: 20px;
      box-sizing: content-box;
    }

    .sidebar .logo .logo-name span {
      color: var(--dark);
    }

    .sidebar .logo .bx {
      min-width: 60px;
      display: flex;
      justify-content: center;
      font-size: 2.2rem;
    }

    .sidebar .side-menu {
      width: 100%;
      margin-top: 48px;
    }

    .sidebar .side-menu li {
      height: 48px;
      background: transparent;
      margin-left: 6px;
      border-radius: 48px 0 0 48px;
      padding: 4px;
    }

    .sidebar .side-menu li.active {
      background: var(--grey);
      position: relative;
    }

    .sidebar .side-menu li a {
      width: 100%;
      height: 100%;
      background: var(--light);
      display: flex;
      align-items: center;
      border-radius: 48px;
      font-size: 16px;
      color: var(--dark);
      white-space: nowrap;
      overflow-x: hidden;
      transition: all 0.3s ease;
    }

    .sidebar .side-menu li.active a {
      color: red;
    }

    .sidebar.active {
    transform: translateX(0); /* Bring sidebar into view when active */
  }
    /* Content Styles */
    .content {
      left: 230px;
      /* Make sure the content starts after the sidebar */
      width: calc(100% - 230px);
      /* Ensure the content takes up the remaining space */
      position: relative;
      
    }

    .content nav {
      height: 56px;
      background: var(--light);
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 0 20px;
      z-index: 999;
    }

    .content main {
      margin-top: 30px;
    }

    .content .header h1 {
      font-size: 2.2rem;
      color: var(--dark);
    }

    .user-info {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .user-card {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .user-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .user-card h3 {
      font-size: 1.5rem;
    }

    .user-card p {
      font-size: 1rem;
      color: var(--dark-grey);
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .stat-card {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .stat-card h4 {
      font-size: 1.2rem;
      color: var(--dark);
    }

    .stat-card p {
      font-size: 2rem;
      font-weight: 600;
    }

    .chart-container {
      background: var(--light);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }

    .chart-container h3 {
      font-size: 1.5rem;
      color: var(--dark);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .content {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>

</body>

</html>