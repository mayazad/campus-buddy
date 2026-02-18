<?php echo $__env->make('includes.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- ================= MOBILE MENU ================= -->
<nav class="mobile-menu">
    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/home.png')); ?>" alt="Home" width="20" height="20"
            style="vertical-align: middle;">
        <span>Home</span>
    </a>
    <a href="<?php echo e(url('legacy/routine')); ?>" class="<?php echo e(request()->is('legacy/routine*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/routine.png')); ?>" alt="Routine" width="20" height="20"
            style="vertical-align: middle;">
        <span>Routine</span>
    </a>
    <a href="<?php echo e(url('legacy/Class')); ?>" class="<?php echo e(request()->is('legacy/Class*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/Classtask.png')); ?>" alt="ClassTask" width="20" height="20"
            style="vertical-align: middle;">
        <span>ClassTask</span>
    </a>
    <a href="<?php echo e(url('legacy/clubs')); ?>" class="<?php echo e(request()->is('legacy/clubs*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/clubs.png')); ?>" alt="Clubs" width="20" height="20"
            style="vertical-align: middle;">
        <span>Clubs</span>
    </a>
    <a href="<?php echo e(url('legacy/pdf & Notes')); ?>" class="<?php echo e(request()->is('legacy/pdf & Notes*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/pdf&Notes.png')); ?>" alt="Notes & Pdf" width="20" height="20"
            style="vertical-align: middle;">
        <span>Notes & Pdf</span>
    </a>
    <a href="<?php echo e(route('community')); ?>" class="<?php echo e(request()->routeIs('community') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/community.png')); ?>" alt="Community" width="20" height="20"
            style="vertical-align: middle;">
        <span>Community</span>
    </a>
    <a href="<?php echo e(url('legacy/Alumni')); ?>" class="<?php echo e(request()->is('legacy/Alumni*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/alumni.png')); ?>" alt="Alumni" width="20" height="20"
            style="vertical-align: middle;">
        <span>Alumni</span>
    </a>
    <a href="<?php echo e(route('question-bank')); ?>" class="<?php echo e(request()->routeIs('question-bank') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/questionBank.png')); ?>" alt="Q Bank" width="20" height="20"
            style="vertical-align: middle;">
        <span>Q Bank</span>
    </a>
</nav>

<!-- ================= DESKTOP SIDEBAR ================= -->
<nav class="sidebar">
    <?php if(request()->routeIs('dashboard')): ?>
        <div class="buddy-box">
            <img src="<?php echo e(asset('assets/includes/menuicons/Buddy.png')); ?>" alt="Buddy">
            <button>Chat With Buddy</button>
        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('dashboard')); ?>" class="menu <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/home.png')); ?>" alt="Home" width="20" height="20"
            style="vertical-align: middle;">
        <p>Home</p>
    </a>
    <a href="<?php echo e(url('legacy/routine')); ?>" class="menu <?php echo e(request()->is('legacy/routine*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/routine.png')); ?>" alt="Routine" width="20" height="20"
            style="vertical-align: middle;">
        <p>Routine</p>
    </a>
    <a href="<?php echo e(url('legacy/Class')); ?>" class="menu <?php echo e(request()->is('legacy/Class*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/Classtask.png')); ?>" alt="ClassTask" width="20" height="20"
            style="vertical-align: middle;">
        <p>ClassTask</p>
    </a>
    <a href="<?php echo e(url('legacy/clubs')); ?>" class="menu <?php echo e(request()->is('legacy/clubs*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/clubs.png')); ?>" alt="Clubs" width="20" height="20"
            style="vertical-align: middle;">
        <p>Clubs</p>
    </a>
    <a href="<?php echo e(url('legacy/pdf & Notes')); ?>" class="menu <?php echo e(request()->is('legacy/pdf & Notes*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/pdf&Notes.png')); ?>" alt="Notes & Pdf" width="20" height="20"
            style="vertical-align: middle;">
        <p>Notes & Pdf</p>
    </a>
    <a href="<?php echo e(route('community')); ?>" class="menu <?php echo e(request()->routeIs('community') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/community.png')); ?>" alt="Community" width="20" height="20"
            style="vertical-align: middle;">
        <p>Community</p>
    </a>
    <a href="<?php echo e(url('legacy/Alumni')); ?>" class="menu <?php echo e(request()->is('legacy/Alumni*') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/alumni.png')); ?>" alt="Alumni" width="20" height="20"
            style="vertical-align: middle;">
        <p>Alumni</p>
    </a>
    <a href="<?php echo e(route('question-bank')); ?>" class="menu <?php echo e(request()->routeIs('question-bank') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/includes/menuicons/questionBank.png')); ?>" alt="Q Bank" width="20" height="20"
            style="vertical-align: middle;">
        <p>Q Bank</p>
    </a>
</nav>

<!-- ================= SOCIAL MEDIA FOOTER ================= -->
<div class="social-footer">
    <a href="https://www.facebook.com" target="_blank" class="social-icon" title="Facebook">
        <img src="<?php echo e(asset('assets/includes/Topbaricons/facebook.png')); ?>" alt="Facebook" width="20" height="20">
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon" title="Twitter">
        <img src="<?php echo e(asset('assets/includes/Topbaricons/twitter.png')); ?>" alt="Twitter" width="20" height="20">
    </a>
    <a href="mailto:contact@campusbuddy.com" class="social-icon" title="Email">
        <img src="<?php echo e(asset('assets/includes/Topbaricons/mail.png')); ?>" alt="Email" width="20" height="20">
    </a>
</div><?php /**PATH C:\xampp\htdocs\CampusBuddy_Org\resources\views/includes/menu.blade.php ENDPATH**/ ?>