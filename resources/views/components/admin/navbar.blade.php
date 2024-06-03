<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button  class="dropdown-item dropdown-footer"> <i class="fas fa-sign-out-alt"></i>
                Logout</button>
          </form>
      </li>
    </ul>
  </nav>
