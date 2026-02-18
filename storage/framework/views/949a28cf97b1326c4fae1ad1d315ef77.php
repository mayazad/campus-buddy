<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Buddy Dashboard</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/topbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/Dashboard1.css')); ?>">
</head>

<body>

    <?php echo $__env->make('includes.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="layout">

        <!-- MAIN -->
        <main class="main">

            <div class="header-row">
                <h1>Hello <?php echo e($user['full_name'] ?? 'User'); ?>!</h1>

                <?php if(isset($user['user_type']) && $user['user_type'] === 'cr'): ?>
                    <a href="<?php echo e(url('cr_dashboard')); ?>" class="cr-btn">CR Panel</a>
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
                    <button onclick="window.location.href='<?php echo e(route('question-bank')); ?>'">More Questions</button>
                </div>

                <div class="card">
                    <h3>Notes</h3>
                    <div class="card-box">
                        <b>AI</b><br>Lecture-1
                    </div>
                    <button onclick="window.location.href='<?php echo e(url('pdf & Notes')); ?>'">View Notes</button>
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

                <!-- NEW FEATURES -->
                <div class="card">
                    <h3>GPA Calculator</h3>
                    <div class="card-box">
                        <b>CGPA: 3.82</b><br>Keep it up!
                    </div>
                    <button>Calculate</button>
                </div>

                <div class="card">
                    <h3>Library</h3>
                    <div class="card-box">
                        <b>Books: 2</b><br>Due: 25th Aug
                    </div>
                    <button>My Books</button>
                </div>

                <div class="card">
                    <h3>Assignments</h3>
                    <div class="card-box">
                        <b>3 Pending</b><br>Next: Math (Tomorrow)
                    </div>
                    <button>View All</button>
                </div>

            </div>

            <!-- EVENT IMAGES SLIDER -->
            <div class="event-slider-section">
                <h2>Recent Events</h2>
                <div class="slider-container">
                    <div class="slider-track">
                        <?php if(!empty($displayImages)): ?>
                            <?php $__currentLoopData = $displayImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="slide">
                                    <img src="<?php echo e(asset('assets/eventImage/' . $image)); ?>" alt="Event Image">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p class="no-events">No event images found.</p>
                        <?php endif; ?>
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

    <script src="<?php echo e(asset('assets/dashboard.js')); ?>"></script>

    <!-- ================= ANIMATED AI BUDDY ================= -->
    <div class="ai-buddy-container">
        <div class="ai-buddy" id="aiBuddy">
            <img src="<?php echo e(asset('assets/includes/menuicons/Buddy.png')); ?>" alt="AI Buddy" class="buddy-image">
            <div class="speech-bubble" id="speechBubble">
                <p>Hi <?php echo e($user['full_name'] ?? 'Buddy'); ?> 👋 Ready to study?</p>
            </div>
        </div>
    </div>

    <?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\CampusBuddy_Org\resources\views/dashboard/index.blade.php ENDPATH**/ ?>