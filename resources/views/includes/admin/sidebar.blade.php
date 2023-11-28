<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">ADMIN PANEL</li>

        <li class="nav-item">
            <a href="{{route('admin.post.create')}}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                    Create
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.post.index')}}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                    My Post
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        @can('view-admin', auth()->user())
        <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                    Users
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        @endcan
    </ul>
</nav>


