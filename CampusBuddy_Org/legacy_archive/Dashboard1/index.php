<?php



declare(strict_types=1);







session_start();







// Check if user is logged in



if (!isset($_SESSION['user'])) {



  header('Location: /CampusBuddy/login');



  exit;



}







$user = $_SESSION['user'];



?>







<!DOCTYPE html>



<html lang="en">



<head>



  <meta charset="UTF-8">



  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <title>Campus Buddy Dashboard</title>



  <link rel="stylesheet" href="../includes/topbar.css?v=<?php echo time(); ?>">



  <link rel="stylesheet" href="../includes/menu.css?v=<?php echo time(); ?>">



  <link rel="stylesheet" href="../includes/footer.css?v=<?php echo time(); ?>">



  <link rel="stylesheet" href="Dashboard1.css?v=<?php echo time(); ?>">



</head>



<body>







  <?php include '../includes/menu.php'; ?>







  <div class="layout">







    <!-- MAIN -->



    <main class="main">







      <div class="header-row">



        <h1>Hello <?php echo htmlspecialchars($user['full_name'] ?? 'User'); ?>!</h1>



        <?php if ($user['user_type'] === 'cr'): ?>



          <a href="../cr_dashboard/" class="cr-btn">CR Panel</a>



        <?php endif; ?>



      </div>







      <div class="grid">



        <div class="card">



          <h3>Today's Study Plan</h3>



          <div class="card-box">



            <b>9:00 AM</b><br>Data Structure<br>Room 713



          </div>



          <button>AI Schedule Tips</button>



        </div>







        <div class="card">



          <h3>Upcoming Tasks</h3>



          <div class="card-box">



            <b>Machine Learning</b><br>Quiz-1<br>11:00 AM



          </div>



          <button>AI Reminder</button>



        </div>







        <div class="card">



          <h3>Question Bank</h3>



          <div class="card-box">



            <b>OOP - Fall25</b><br>Mid-term



          </div>



          <button onclick="window.location.href='../QuestionBank/'">More Questions</button>



        </div>







        <div class="card">



          <h3>Notes</h3>



          <div class="card-box">



            <b>AI</b><br>Lecture-1



          </div>



          <button onclick="window.location.href='../pdf & Notes/'">View Notes</button>



        </div>







        <div class="card hide-mobile">



          <h3>Campus News</h3>



          <div class="card-box">AI Hackathon this week</div>



          <button>Read More</button>



        </div>







        <div class="card hide-mobile">



          <h3>Community</h3>



          <div class="card-box">Meet Seniors & Alumni</div>



          <button>Explore</button>



        </div>



      </div>







      <!-- EVENT IMAGES SLIDER -->



      <div class="event-slider-section">



        <h2>Recent Events</h2>



        <div class="slider-container">



          <div class="slider-track">



            <?php



            $imageDir = '../eventImage/';



            if (is_dir($imageDir)) {



              $images = glob($imageDir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);







              // Duplicate images to create seamless infinite scroll effect
            


              if (!empty($images)) {



                // Display at least 10 images for smooth scrolling, duplicate if needed
            


                $displayImages = $images;



                while (count($displayImages) < 10) {



                  $displayImages = array_merge($displayImages, $images);



                }



                // Limit max duplication to avoid too much DOM
            


                if (count($displayImages) > 20) {



                  $displayImages = array_slice($displayImages, 0, 20);



                }







                foreach ($displayImages as $image) {



                  $filename = basename($image);



                  echo '<div class="slide">';



                  echo '<img src="../eventImage/' . htmlspecialchars($filename) . '" alt="Event Image">';



                  echo '</div>';



                }



              } else {



                echo '<p class="no-events">No event images found.</p>';



              }



            }



            ?>



          </div>



        </div>



      </div>







    </main>



  </div>







  <!-- FULL SCREEN IMAGE VIEWER -->



  <div class="image-viewer" id="imageViewer">



    <span class="close-btn">&times;</span>



    <span class="nav-btn nav-prev">&#8249;</span>



    <span class="nav-btn nav-next">&#8250;</span>



    <img src="" alt="Full size event image">



  </div>







  <script src="dashboard.js"></script>







  <!-- ================= ANIMATED AI BUDDY ================= -->



  <div class="ai-buddy-container">



    <div class="ai-buddy" id="aiBuddy">



      <img src="../includes/menuicons/Buddy.png" alt="AI Buddy" class="buddy-image">



      <div class="speech-bubble" id="speechBubble">



        <p>Hi
          <?php echo htmlspecialchars($user['full_name'] ?? 'Buddy'); ?> 👋 Ready to study?
        </p>



      </div>



    </div>



  </div>







  <?php include '../includes/footer.php'; ?>







</body>



</html>