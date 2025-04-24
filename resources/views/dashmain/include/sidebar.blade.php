<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
               <h4> <b style="color: white">Pages</b></h4>
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="{{ route('emp.add') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Add User</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="{{ route('emp.show') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Stored Data</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('emp.trash') }}">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Trash Bin</span>
                </a>
            </li>











        </ul>


    </div>
</nav>
