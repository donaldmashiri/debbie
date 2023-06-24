<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="nav-level text-center">
                <h4>{{ Auth::user()->name }}</h4>
            </li>
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="{{ route('home') }}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="profile">
                    <i class="icon-user"></i><span> Profile</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{ route('students.index') }}">
                    <i class="icon-settings"></i><span> Students</span>
                </a>
            </li>


            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{ route('grades.index') }}">
                    <i class="icon-magnet"></i><span> Record Grades</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{ route('passrates.index') }}">
                    <i class="icon-compass"></i><span> Pass Rates</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{ route('ratetrends.index') }}">
                    <i class="icon-trophy"></i><span>Rate Trends</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="/chat">
                    <i class="icon-trophy"></i><span>Chat</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="/line">
                    <i class="icon-trophy"></i><span>Line</span>
                </a>
            </li>

        </ul>

    </section>
</aside>
