<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Responsive Dashboard</title>
  </head>

  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <a href="#" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>On_</span>A.ment</div>
      </a>
      <ul class="side-menu">
        <li>
          <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="request.php"><i class="bx bx-store-alt"></i>Request</a>
        </li>
        <li class="active">
          <a href=""><i class="bx bx-analyse"></i>Appointment</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-group"></i>Registrar</a>
        </li>
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
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
      <!-- Dark Theme Toggle -->
      <nav>
        <i class="bx bx-menu"></i>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
      </nav>
      <!-- End of Dark Theme Toggle-->

      <main>
        <div class="header">
          <h1>Welcome</h1>
        </div>

        <!-- Insights -->
        <ul class="insights">
          <li>
            <i class="bx bx-calendar-check"></i>
            <span class="info">
              <h3>1,074</h3>
              <p>Paid Order</p>
            </span>
          </li>
          <li>
            <i class="bx bx-show-alt"></i>
            <span class="info">
              <h3>3,944</h3>
              <p>Site Visit</p>
            </span>
          </li>
          <li>
            <i class="bx bx-line-chart"></i>
            <span class="info">
              <h3>14,721</h3>
              <p>Searches</p>
            </span>
          </li>
          <li>
            <i class="bx bx-dollar-circle"></i>
            <span class="info">
              <h3>$6,742</h3>
              <p>Total Sales</p>
            </span>
          </li>
        </ul>
        <!-- End of Insights -->

        <div class="bottom-data">
          <div class="orders">
            <div class="header">
              <i class="bx bx-receipt"></i>
              <h3>Recent Requests</h3>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Document</th>
                  <th>Request Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p>John Doe</p>
                  </td>
                  <td>14-08-2023</td>
                </tr>
                <tr>
                  <td>
                    <p>John Doe</p>
                  </td>
                  <td>14-08-2023</td>
                </tr>
                <tr>
                  <td>
                    <p>John Doe</p>
                  </td>
                  <td>14-08-2023</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Reminders -->
          <div class="reminders">
            <div class="header">
              <i class="bx bx-note"></i>
              <h3>Reminders</h3>
            </div>
            <ul class="task-list">
              <li class="completed">
                <div class="task-title">
                  <i class="bx bx-check-circle"></i>
                  <p>Start Our Meeting</p>
                </div>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="completed">
                <div class="task-title">
                  <i class="bx bx-check-circle"></i>
                  <p>Analyse Our Site</p>
                </div>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="not-completed">
                <div class="task-title">
                  <i class="bx bx-x-circle"></i>
                  <p>Play Footbal</p>
                </div>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
            </ul>
          </div>

          <!-- End of Reminders-->
        </div>
      </main>
    </div>

    <script src="script.js"></script>
  </body>
</html>
