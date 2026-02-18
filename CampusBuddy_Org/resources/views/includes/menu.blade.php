@include('includes.topbar')

<!-- ================= MOBILE MENU ================= -->
<nav class="mobile-menu">
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/home.png') }}" alt="Home" width="20" height="20"
            style="vertical-align: middle;">
        <span>Home</span>
    </a>
    <a href="{{ url('legacy/routine') }}" class="{{ request()->is('legacy/routine*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/routine.png') }}" alt="Routine" width="20" height="20"
            style="vertical-align: middle;">
        <span>Routine</span>
    </a>
    <a href="{{ url('legacy/Class') }}" class="{{ request()->is('legacy/Class*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/Classtask.png') }}" alt="ClassTask" width="20" height="20"
            style="vertical-align: middle;">
        <span>ClassTask</span>
    </a>
    <a href="{{ url('legacy/clubs') }}" class="{{ request()->is('legacy/clubs*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/clubs.png') }}" alt="Clubs" width="20" height="20"
            style="vertical-align: middle;">
        <span>Clubs</span>
    </a>
    <a href="{{ url('legacy/pdf & Notes') }}" class="{{ request()->is('legacy/pdf & Notes*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/pdf&Notes.png') }}" alt="Notes & Pdf" width="20" height="20"
            style="vertical-align: middle;">
        <span>Notes & Pdf</span>
    </a>
    <a href="{{ route('community') }}" class="{{ request()->routeIs('community') ? 'active' : '' }}">
    {{-- <a href="{{ route('community') }}" class="{{ request()->routeIs('community') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/community.png') }}" alt="Community" width="20" height="20"
            style="vertical-align: middle;">
        <span>Community</span>
    </a>
    <a href="{{ url('legacy/Alumni') }}" class="{{ request()->is('legacy/Alumni*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/alumni.png') }}" alt="Alumni" width="20" height="20"
            style="vertical-align: middle;">
        <span>Alumni</span>
    </a>
    <a href="{{ route('question-bank') }}" class="{{ request()->routeIs('question-bank') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/questionBank.png') }}" alt="Q Bank" width="20" height="20"
            style="vertical-align: middle;">
        <span>Q Bank</span>
    </a>
    </a> --}}
</nav>

<!-- ================= DESKTOP SIDEBAR ================= -->
<nav class="sidebar">
    @if(request()->routeIs('dashboard'))
        <div class="buddy-box">
            <img src="{{ asset('assets/includes/menuicons/Buddy.png') }}" alt="Buddy">
            <button>Chat With Buddy</button>
        </div>
    @endif

    <a href="{{ route('dashboard') }}" class="menu {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/home.png') }}" alt="Home" width="20" height="20"
            style="vertical-align: middle;">
        <p>Home</p>
    </a>
    <a href="{{ url('legacy/routine') }}" class="menu {{ request()->is('legacy/routine*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/routine.png') }}" alt="Routine" width="20" height="20"
            style="vertical-align: middle;">
        <p>Routine</p>
    </a>
    <a href="{{ url('legacy/Class') }}" class="menu {{ request()->is('legacy/Class*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/Classtask.png') }}" alt="ClassTask" width="20" height="20"
            style="vertical-align: middle;">
        <p>ClassTask</p>
    </a>
    <a href="{{ url('legacy/clubs') }}" class="menu {{ request()->is('legacy/clubs*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/clubs.png') }}" alt="Clubs" width="20" height="20"
            style="vertical-align: middle;">
        <p>Clubs</p>
    </a>
    <a href="{{ url('legacy/pdf & Notes') }}" class="menu {{ request()->is('legacy/pdf & Notes*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/pdf&Notes.png') }}" alt="Notes & Pdf" width="20" height="20"
            style="vertical-align: middle;">
        <p>Notes & Pdf</p>
    </a>
    <a href="{{ route('community') }}" class="menu {{ request()->routeIs('community') ? 'active' : '' }}">
    {{-- <a href="{{ route('community') }}" class="menu {{ request()->routeIs('community') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/community.png') }}" alt="Community" width="20" height="20"
            style="vertical-align: middle;">
        <p>Community</p>
    </a>
    <a href="{{ url('legacy/Alumni') }}" class="menu {{ request()->is('legacy/Alumni*') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/alumni.png') }}" alt="Alumni" width="20" height="20"
            style="vertical-align: middle;">
        <p>Alumni</p>
    </a>
    <a href="{{ route('question-bank') }}" class="menu {{ request()->routeIs('question-bank') ? 'active' : '' }}">
        <img src="{{ asset('assets/includes/menuicons/questionBank.png') }}" alt="Q Bank" width="20" height="20"
            style="vertical-align: middle;">
        <p>Q Bank</p>
    </a>
    </a> --}}
</nav>

<!-- ================= SOCIAL MEDIA FOOTER ================= -->
<div class="social-footer">
    <a href="https://www.facebook.com" target="_blank" class="social-icon" title="Facebook">
        <img src="{{ asset('assets/includes/Topbaricons/facebook.png') }}" alt="Facebook" width="20" height="20">
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon" title="Twitter">
        <img src="{{ asset('assets/includes/Topbaricons/twitter.png') }}" alt="Twitter" width="20" height="20">
    </a>
    <a href="mailto:contact@campusbuddy.com" class="social-icon" title="Email">
        <img src="{{ asset('assets/includes/Topbaricons/mail.png') }}" alt="Email" width="20" height="20">
    </a>
</div>