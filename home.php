<?php
session_start();
$username = $_SESSION['username'] ?? 'User';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Codeverse Student Organization</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #1E1E3F;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 5%;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .logo {
      font-weight: bold;
      font-size: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 30px;
      height: 30px;
    }

    nav {
      display: flex;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #1E1E3F;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 6px;
      transition: background-color 0.3s, color 0.3s;
    }

    nav a:hover {
      background-color: #E5E7EB;
      color: #1E1E3F;
    }

    nav a.active {
      background-color: #1E1E3F;
      color: white;
    }

    .userMenu {
      position: relative;
      cursor: pointer;
      font-weight: bold;
    }

    .dropdown {
      display: none;
      position: absolute;
      top: 130%;
      right: 0;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 8px 16px;
      font-size: 14px;
      z-index: 999;
    }

    .header {
      text-align: center;
      background: #1E1E3F;
      padding: 100px 20px;
      color: white;
    }

    .header h1 {
      font-size: 3.2em;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .header p {
      font-size: 1.25em;
      font-weight: 400;
      line-height: 1.6;
      margin-bottom: 30px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .header .buttons a {
      text-decoration: none;
      display: inline-block;
      padding: 12px 24px;
      margin: 5px;
      border-radius: 5px;
      font-weight: bold;
    }

    .header .buttons .learn {
      background-color: #1E1E3F;
      color: white;
    }

    .header .buttons .join {
      background-color: white;
      color: #1E1E3F;
      border: 2px solid #1E1E3F;
    }

    .features {
      display: flex;
      justify-content: space-around;
      padding: 60px 10%;
      background-color: #E5E7EB;
    }

    .feature {
      text-align: center;
      max-width: 250px;
    }

    .feature h3 {
      color: #1E1E3F;
      margin-bottom: 10px;
      font-size: 1.3em;
      font-weight: 600;
    }

    .feature p {
      font-size: 1em;
      line-height: 1.5;
      color: #555;
    }

    .bottom-section {
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 60px 10%;
      background-color: #ffffff;
    }

    .bottom-section img {
      max-width: 400px;
      width: 100%;
      border-radius: 8px;
    }

    .bottom-section .text {
      max-width: 400px;
    }

    .bottom-section h2 {
      color: #1E1E3F;
      font-size: 1.75em;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .bottom-section p {
      font-size: 1.05em;
      line-height: 1.6;
      color: #555;
    }

    @media (max-width: 768px) {
      .features {
        flex-direction: column;
        align-items: center;
      }

      .bottom-section {
        flex-direction: column;
        text-align: center;
      }

      .bottom-section img {
        margin-bottom: 20px;
      }
    }
  </style>

</head>

<body>
  <header>
    <div class="logo">
      <img src="logo_.png" alt="Logo">
      <span>CODEVERSE</span>
    </div>

    <nav>
      <a href="home.php" class="active">Home</a>
      <a href="lists.php">Members</a>
      <a href="addMember.php">Add</a>
      <a href="aboutUs.php">About Us</a>
    </nav>

    <div class="userMenu" onclick="toggleDropdown()">
      <?= htmlspecialchars($username) ?>
      <div class="dropdown" id="logoutDropdown">
        <form action="logout.php" method="post">
          <button type="submit" style="background: none; border: none; color: red; cursor: pointer;">Logout</button>
        </form>
      </div>
    </div>
  </header>


  <section class="header">
    <h1>Welcome to Codeverse</h1>
    <p>A Student Organization Shaping the Future Through Code.</p>
    <div class="buttons">
      <a href="addMember.php" class="join">Join Us</a>
    </div>
  </section>

  <section class="features">
    <div class="feature">
      <h3>Student-led Projects</h3>
      <p>Build real-world tech solutions with your peers and mentors.</p>
    </div>
    <div class="feature">
      <h3>Collaborate & Grow</h3>
      <p>Work in teams and expand your skillset in coding, design, and leadership.</p>
    </div>
    <div class="feature">
      <h3>Hackathons & Events</h3>
      <p>Participate in exciting tech events hosted by the organization.</p>
    </div>
  </section>

  <section class="bottom-section">
    <img src="1.jpg" alt="Students coding" />
    <div class="text">
      <h2>What We Do</h2>
      <p>At Codeverse, we empower students through collaborative learning, hands-on development, and opportunities to
        lead and innovate in tech. Whether you’re a beginner or an expert, there’s a place for you in our community.</p>
    </div>
  </section>

  <section class="bottom-section">
    <div class="text">
      <h2>Tech Talks & Mentorship</h2>
      <p>We organize regular tech talks and mentorship sessions featuring professionals from the industry, giving our
        members insights into real-world development and career paths.</p>
    </div>
    <img src="2.jpg" alt="Tech talk event" />
  </section>

  <section class="bottom-section">
    <img src="https://images.unsplash.com/photo-1580894908361-967195033215?auto=format&fit=crop&w=800&q=80"
      alt="Coding workshop" />
    <div class="text">
      <h2>Hands-On Workshops</h2>
      <p>Join our workshops to learn practical skills in web development, data science, and more. These sessions are
        beginner-friendly and guided by experienced mentors.</p>
    </div>
  </section>
  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('logoutDropdown');
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    window.addEventListener('click', function (e) {
      if (!e.target.closest('.userMenu')) {
        document.getElementById('logoutDropdown').style.display = 'none';
      }
    });
  </script>

  <footer style="text-align: center; padding: 20px; background-color: #1E1E3F; color: white; font-size: 14px;">
    &copy; <?php echo date("Y"); ?> Codeverse Student Organization. All rights reserved.
  </footer>

</body>

</html>