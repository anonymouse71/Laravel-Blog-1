<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('blog.index') }}">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('about')}}">Posts</a></li>
        <li><a href="{{ route('contact')}}">Categories</a></li>
        <li><a href="{{ route('contact')}}">Contact Messages</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('admin.logout')}}">Logout</a></li>
      </ul>
    </div>
  </div>

</nav>
