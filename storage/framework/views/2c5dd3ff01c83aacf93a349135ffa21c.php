<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Campus Buddy | Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EXISTING -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/topbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/includes/footer.css')); ?>">

    <!-- COMMUNITY -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/community.css')); ?>">
</head>

<body>

    <?php echo $__env->make('includes.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="layout">
        <main class="main">

            <!-- HEADER -->
            <div class="community-header">
                <h1>Community</h1>
                <a href="<?php echo e(url('create-post.php')); ?>" class="create-btn">Create Post</a>
            </div>

            <!-- SEARCH -->
            <div class="search-box">
                <input type="text" placeholder="Search discussions, topics, or people">
            </div>

            <!-- BODY -->
            <div class="content">

                <!-- FEATURED SECTION -->
                <section class="featured-section">
                    <div class="featured-header">
                        <h2>🌟 Featured</h2>
                        <div class="featured-nav">
                            <button class="active">Trending</button>
                            <button>Popular</button>
                            <button>New</button>
                        </div>
                    </div>
                    <div class="featured-content" id="featuredContent">
                        <div class="featured-item">
                            <div class="featured-icon">📚</div>
                            <h4>Study Groups</h4>
                            <p>Join active study sessions</p>
                            <div class="featured-stats">
                                <span>👥 234</span>
                                <span>📈 12</span>
                            </div>
                        </div>
                        <div class="featured-item">
                            <div class="featured-icon">🎯</div>
                            <h4>Upcoming Events</h4>
                            <p>Don't miss campus activities</p>
                            <div class="featured-stats">
                                <span>📅 8</span>
                                <span>🔥 45</span>
                            </div>
                        </div>
                        <div class="featured-item">
                            <div class="featured-icon">💡</div>
                            <h4>Resource Hub</h4>
                            <p>Shared notes & materials</p>
                            <div class="featured-stats">
                                <span>📄 567</span>
                                <span>⭐ 89</span>
                            </div>
                        </div>
                        <div class="featured-item">
                            <div class="featured-icon">🤝</div>
                            <h4>Collaboration</h4>
                            <p>Find project partners</p>
                            <div class="featured-stats">
                                <span>🔗 45</span>
                                <span>💬 23</span>
                            </div>
                        </div>
                    </div>
                </section>

                <script src="<?php echo e(asset('assets/community.js')); ?>"></script>

                <!-- QUICK ACTIONS -->
                <div class="quick-actions">
                    <div class="talent">Meet With Talents</div>
                    <div class="box">District Association</div>
                    <div class="box">Sports Association</div>
                </div>

                <!-- RECENT POSTS HEADING -->
                <div class="recent-posts-heading">
                    <h2>📝 Recent Posts</h2>
                    <a href="#">View All Posts</a>
                </div>

                <!-- POSTS -->
                <section class="posts">

                    <!-- POST 1 -->
                    <div class="post">
                        <div class="post-top">
                            <div class="avatar">🎓</div>
                            <div>
                                <h4>Adnan Hossain <span>3rd Year SWE</span></h4>
                                <p>Shared updated Software Engineering for Week 6.</p>
                            </div>
                        </div>

                        <a class="file" href="#">software_eng_notes.pdf</a>

                        <div class="meta">
                            <span>👍 78</span>
                            <span>💬 25</span>
                        </div>
                    </div>

                    <!-- POST 2 -->
                    <div class="post">
                        <div class="post-top">
                            <div class="avatar">👨‍💻</div>
                            <div>
                                <h4>Mazharul Islam <span>3rd Year CSE</span></h4>
                                <p>Creating a study group for Quizzes in Data structures.</p>
                            </div>
                        </div>

                        <a class="join">Join Study Group</a>

                        <div class="meta">
                            <span>👍 55</span>
                            <span>💬 16</span>
                        </div>
                    </div>

                    <!-- POST 3 -->
                    <div class="post">
                        <div class="post-top">
                            <div class="avatar">🤖</div>
                            <div>
                                <h4>Robotics Club <span>Friday</span></h4>
                                <p>Robotics Workshop This week</p>
                            </div>
                        </div>

                        <div class="event">Friday, 5PM – Lab 301</div>

                        <div class="meta">
                            <span>👍 27</span>
                            <span>💬 12</span>
                        </div>
                    </div>

                    <button class="view-more">View More</button>
                </section>

                <!-- TRENDING TOPICS -->
                <section class="trending-section">
                    <h3>🔥 Trending Topics</h3>
                    <p class="tags">
                        #Assignment &nbsp; #TechFest2025 &nbsp; #Campus <br>
                        #MachineLearning &nbsp; #CodeTrap2025
                    </p>
                </section>

            </div>
        </main>
    </div>

    <?php echo $__env->make('includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\CampusBuddy(Mayaz)\resources\views/community/index.blade.php ENDPATH**/ ?>