<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Request Appointment</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script>
    // Function to dynamically show the form based on selected document
    function showFileInput() {
      const selectedDocument = document.getElementById('document').value;
      const fileInputDiv = document.getElementById('file-input-div');
      const fileInputLabel = document.getElementById('file-input-label');
      const formFields = document.getElementById('form-fields');
      const secondFileInputDiv = document.getElementById('second-file-input-div'); // Added this line

      // Clear previous form fields
      formFields.innerHTML = '';
      secondFileInputDiv.style.display = 'none'; // Hide second file input by default

      // Hide the file input div by default
      fileInputDiv.style.display = 'none';

      // Modify the form based on the selected document type
      if (selectedDocument === 'TOR') {
        // Show fields specific to TOR (Transcript of Records)
        formFields.innerHTML = `
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="year-graduate">Year Graduate:</label>
              <input type="text" id="year-graduate" name="year-graduate" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="section">Section:</label>
              <input type="text" id="section" name="section" required>
            </div>

            <div class="form-group">
              <label for="course">Course:</label>
              <select id="course" name="course" required>
                <option value="">-- Select Course --</option>
                <option value="ACT">Associative in Computer Technology</option>
                <option value="BACOMM">Bachelor of Arts in Communication</option>
                <option value="BSBA">Bachelor of Science in Business Administration</option>
                <option value="BSCRIM">Bachelor of Science in Criminology</option>
                <option value="BSCS">Bachelor of Science in Computer Science</option>
                <option value="BSED">Bachelor of Secondary Education</option>
                <option value="BPED">Bachelor in Primary Education</option>
                <option value="BSN">Bachelor of Science in Nursing</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="cellphone">Cellphone Number:</label>
              <input type="text" id="cellphone" name="cellphone" required>
            </div>

            <div class="form-group">
              <label for="gender">Gender:</label>
              <select id="gender" name="gender" required>
                <option value="">-- Select Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>
        `;
        // Show the file input for TOR
        fileInputDiv.style.display = 'block';
        fileInputLabel.innerText = 'Upload Any Valid ID:';
      } else if (selectedDocument === 'COR') {
        // Show fields specific to COR (Certificate of Registration)
        formFields.innerHTML = `
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="course">Course:</label>
              <select id="course" name="course" required>
                <option value="">-- Select Course --</option>
                <option value="ACT">Associative in Computer Technology</option>
                <option value="BACOMM">Bachelor of Arts in Communication</option>
                <option value="BSBA">Bachelor of Science in Business Administration</option>
                <option value="BSCRIM">Bachelor of Science in Criminology</option>
                <option value="BSCS">Bachelor of Science in Computer Science</option>
                <option value="BSED">Bachelor of Secondary Education</option>
                <option value="BPED">Bachelor in Primary Education</option>
                <option value="BSN">Bachelor of Science in Nursing</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="student">Student Number:</label>
              <input type="text" id="student" name="student" required>
            </div>
          </div>
        `;
        // Show the file input for COR
        fileInputDiv.style.display = 'block';
        fileInputLabel.innerText = 'Upload your 1st Semester Grades:';
        
        // Show the second file input for COR (2nd Semester)
        secondFileInputDiv.style.display = 'block';
        secondFileInputDiv.innerHTML = `
          <div class="form-group">
            <label for="second-semester-file">Upload your 2nd Semester Class Card/Grades:</label>
            <input type="file" id="second-semester-file" name="second-semester-file" />
          </div>
        `;
      } else if (selectedDocument === 'ID') {
        // Show fields specific to ID
        formFields.innerHTML = `
          <div class="form-row">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="student">Student Number:</label>
              <input type="text" id="student" name="student" required>
            </div>
          </div>
        `;
        // Show the file input for ID
        fileInputDiv.style.display = 'block';
        fileInputLabel.innerText = 'Upload your COR (Certificate of Registration):';
      } else {
        // If no document type is selected, hide the file input
        fileInputDiv.style.display = 'none';
        secondFileInputDiv.style.display = 'none';
      }
    }
  </script>
</head>

<body>
  <div class="sidebar">
    <a href="#" class="logo">
      <i class="bx bx-code-alt"></i>
      <div class="logo-name"><span>On_</span>A.ment</div>
    </a>
    <ul class="side-menu">
      <li><a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a></li>
      <li class="active"><a href="request.php"><i class="bx bx-store-alt"></i>Request</a></li>
      <li><a href="index.php"><i class="bx bx-analyse"></i>Appointment</a></li>
      <li><a href="#"><i class="bx bx-group"></i>Registrar</a> </li>
    </ul>
    <ul class="side-menu">
      <li><a href="#" class="logout"><i class="bx bx-log-out-circle"></i>Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <nav>
      <i class="bx bx-menu"></i>
      <input type="checkbox" id="theme-toggle" hidden />
      <label for="theme-toggle" class="theme-toggle"></label>
    </nav>

    <div class="content">
      <main>
        <div class="header">
          <h1>Request Appointment</h1>
        </div>
        <div class="request-form">
          <form>
            <!-- Document Selection -->
            <div class="form-row">
              <div class="form-group">
                <label for="document">Select Document:</label>
                <select id="document" name="document" onchange="showFileInput()" required>
                  <option value="">-- Select Document --</option>
                  <option value="TOR">TOR (Transcript of Records) / GWA (General Weighted Average)</option>
                  <option value="COR">COR (Certificate of Registration)</option>
                  <option value="ID">ID</option>
                </select>
              </div>
            </div>

            <!-- Dynamically generated form fields -->
            <div id="form-fields"></div>

            <!-- File Upload Input (Initially Hidden) -->
            <div id="file-input-div" class="form-row" style="display: none;">
              <div class="form-group">
                <label id="file-input-label" for="document-file"></label>
                <input type="file" id="document-file" name="document-file" required />
              </div>
            </div>

            <!-- Second File Upload Input (Initially Hidden for COR) -->
            <div id="second-file-input-div" class="form-row" style="display: none;"></div>
 
            
            <button type="submit" class="submit-btn">Request Appointment</button>

          </form>
        </div>
      </main>
    </div>
  </div>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap");

    :root {
      --light: #f6f6f9;
      --primary: #1976d2;
      --light-primary: #cfe8ff;
      --grey: #eee;
      --dark-grey: #aaaaaa;
      --dark: #363949;
      --danger: #d32f2f;
      --light-danger: #fecdd3;
      --warning: #fbc02d;
      --light-warning: #fff2c6;
      --success: #388e3c;
      --light-success: #bbf7d0;
    }

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

    .content {
      position: relative;
      width: calc(85% - 230px);
      left: 230px;
      transition: all 0.3s ease;
    }

    .content main {
      width: 100%;
      padding: 36px 24px;
      max-height: calc(100vh - 56px);
    }

    .content main .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      grid-gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 24px;
    }

    .content main .header h1 {
      font-size: 36px;
      font-weight: 600;
      color: var(--danger);
    }

    .request-form {
      background: var(--light);
      padding: 24px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-row {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-group {
      flex: 1;
    }

    .form-group.full-width {
      width: 100%;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: var(--dark);
      font-weight: 500;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid var(--grey);
      border-radius: 5px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--primary);
    }

    .input-icon {
      position: relative;
    }

    .input-icon i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      color: var(--dark-grey);
    }

    .form-group textarea {
      height: 100px;
      resize: vertical;
    }

    .submit-btn {
      background-color: var(--danger);
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: background-color 0.3s ease;
      width: 100%;
      margin-top: 20px;
    }

    .submit-btn:hover {
      background-color: #b71c1c;
    }

    @media screen and (max-width: 768px) {
      .content {
        width: 100%;
        left: 0;
      }

      .form-row {
        flex-direction: column;
        gap: 0;
      }
    }
  </style>

  <script src="script.js"></script>
</body>
</html>
