<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1F2F4D">
    <div class="container">
        <a class="navbar-brand" href="#">BeritaKini</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Post' ? 'active' : '' }}" href="/">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Category' ? 'active' : '' }}" href="/categories">Category</a>
                </li>
                @auth
                
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                 @else   
                 <li class="nav-item">
                     <a class="nav-link {{ $title == 'Login' ? 'active' : '' }}" href="/login">Login</a>
                 </li>
                @endauth
            </ul>
        </div>

    </div>
</nav>
