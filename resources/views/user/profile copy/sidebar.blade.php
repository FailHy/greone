<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ Auth::user()->foto ? asset('storage/photos/' . Auth::user()->foto) : 'https://via.placeholder.com/100' }}" width="100" style="border-radius: 50%;">
    <p>Hello! {{ Auth::user()->name }}</p>
    <p style="font-size: small;">{{ Auth::user()->email }}</p>
</div>

<ul>
    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
    <li><a href="#">Address</a></li>
    <li><a href="#">Orders</a></li>
</ul>
