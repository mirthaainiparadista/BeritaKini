<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1F2F4D">
    <div class="container">
        <a class="navbar-brand" href="#">BeritaKini</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Category' ? 'active' : '' }}" href="/category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
