<nav id="navbar" class="">
    <div class="nav-wrapper">
      <!-- Navbar Logo -->
      <div class="logo">
        <img src="{{ asset('assets/image/logo.png') }}" width="70" >
      </div>
  
      <!-- Navbar Links -->
      <ul id="menu">
        @auth
          <li><a href="{{ url('home') }}">Home</a></li>
          <li>
            <?php
             $cart_utama = \App\Models\Cart::where('user_id', Auth::user()->id)->where('status',0)->first();
             if(!empty($cart_utama))
                {
                 $notif = \App\Models\CartDetail::where('cart_id', $cart_utama->id)->count(); 
                }
            ?>
            <a class="nav-link" href="{{ url('check-out') }}">
                <i class="fa fa-shopping-cart"></i>
                @if(!empty($notif))
                <span class="badge badge-danger">{{ $notif }}</span>
                @endif
            </a>
        </li>
          <li><a href="{{ url('/dashbord') }}">Welcome, {{ auth()->user()->name }}</a></li>
        @endauth
      </ul>
    </div>
</nav>