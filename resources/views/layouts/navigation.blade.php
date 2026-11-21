<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-4 py-4">
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('home') }}">Today</a>
                <a href="{{ route('tasks.index') }}">All Tasks</a>
                <a href="{{ route('public.profile') }}">Profile</a>
                <a href="{{ route('about') }}">About</a>
            </div>

            <div class="flex items-center gap-4">
                @guest
                    <a href="{{ route('login') }}">Log In</a>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <span>{{ Auth::user()->full_name }}</span>
                    <a href="{{ route('profile.edit') }}">Account Settings</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>