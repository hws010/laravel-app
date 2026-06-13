<div class="navbar bg-base-100 shadow-sm">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
      </div>
    </div>
    <a href="{{ route('ideasIndex') }}" class="btn btn-ghost text-xl">Laravel-APP</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('ideasIndex') }}">Ideas</a></li>
      @can('view-admin')
        <li><a href="/admin">admin</a></li>
      @endcan
    </ul>
  </div>
  <div class="navbar-end">
    @guest
      <a class="btn" href="{{ route('create-account') }}">Register</a>
      <a class="btn" href="{{ route('login') }}">Login</a>
    @endguest
    @auth
      <form action="{{ route('logout') }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error">Logout</button>
      </form>
    @endauth
  </div>
</div>