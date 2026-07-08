<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Menu Admin
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('user.admin') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data User</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('index.category') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Category</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('index.complains') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Aduan</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('index.response') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Respon Aduan
        </p>
    </a>
</li>