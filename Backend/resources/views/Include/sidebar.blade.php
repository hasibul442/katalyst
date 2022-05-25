<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                {{-- <li class="menu-title">Navigation</li> --}}

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fad fa-dice-d20"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @if (  Auth::user()->user_type  == 'Super_Admin' )
                <li>
                    <a href="{{ route('users') }}">
                        <i class="fas fa-users"></i>
                        <span> User </span>
                    </a>
                </li>
                @endif


                {{-- <li>
                    <a href="{{ route('profile') }}">
                        <i class="fas fa-info-circle"></i>
                        <span> Company Profile </span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('banner') }}">
                        <i class="fad fa-icons"></i>
                        <span> Banner </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('basicchemicals') }}">
                        <i class="fas fa-chart-network"></i>
                        <span> Basic Chemicals </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('auxiliarychemicals') }}">
                        <i class="fas fa-bezier-curve"></i>
                        <span> Auxiliary Chemicals </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dyestuffs') }}">
                        <i class="fas fa-ball-pile"></i>
                        <span> Dyestuffs </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('jobportal') }}">
                        <i class="fab fa-artstation"></i>
                        <span> Job Post </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('messages') }}">
                        <i class="fas fa-mailbox"></i>
                        <span> Messages </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="dripicons-meter"></i>
                        <span>Web Site</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
