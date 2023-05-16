<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="nav-level">--- Navigation</li>
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="{{ route('home') }}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{ route('home') }}">
                    <i class="icon-list"></i><span> Profile</span>
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

        </ul>

    </section>
</aside>
