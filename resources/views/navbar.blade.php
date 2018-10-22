
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
          <li class="active"><a href="create">Create Task</a></li>
          <li class="active"><a href="tasklist">Tasklist</a></li>
          <li class="active"> <a href="edit">Edit Task</a></li>
          <li class="active"><a href="create_status">Create Status</a></li>
          <li class="active"> <a href="edit_status">Edit Status</a></li>
          <li class="active"> <a href="statuslist">Statuslist</a></li>
    </div>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>
      </li>
    </ul>
  </div>
</nav>
