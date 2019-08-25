<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('home') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @can('admin')
            <li class="nav-item ">
                <a class=" nav-link {{ (request()->is('*parents*')) ? 'active' : '' }}"
                    href="{{ route('parents.index') }}">
                    <i class="fas fa-user-friends"></i>
                    <span>Parents</span></a>
            </li>
            @endcan

            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('*students*')) ? 'active' : '' }}"
                    href="{{ route('students.index') }}">
                    <i class="fas fa-user-graduate"></i>
                    <span>Students</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('*attendances*')) ? 'active' : '' }}"
                    href="{{ route('attendances.index') }}">
                    <i class="far fa-list-alt"></i>
                    <span>Attendances</span>
                </a>
            </li>

            @can('admin')
            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('*classes*')) ? 'active' : '' }}"
                    href="{{ route('classes.index') }}">
                    <i class="fas fa-university"></i>
                    <span>Classes</span>
                </a>
            </li>
            @endcan

            @can('admin')
            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('*subjects*')) ? 'active' : '' }}"
                    href="{{ route('subjects.index') }}">
                    <i class="fas fa-book-open"></i>
                    <span>Subjects</span>
                </a>
            </li>

            <hr>

            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('*users*')) ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            @endcan



        </ul>
    </div>
</nav>