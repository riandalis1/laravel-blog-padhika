<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow py-3 fixed-top py-lg-4">
    <div class="container">
        <a class="navbar-brand text-danger fw-bold" href="/">RianKZL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-lg-2">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item px-lg-2">
                    <a class="nav-link {{ Request::is('/about*') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item px-lg-2">
                    <a class="nav-link {{ Request::is('/posts*') ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item px-lg-2">
                    <a class="nav-link {{ Request::is('/categories*') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-house"></i> My
                                    Dashboard</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i
                                            class="fa-solid fa-right-from-bracket"></i>
                                        Logout!
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item px-lg-2">
                        <a class="btn btn-outline-success rounded-0 px-4" href="/login"><i
                                class="fa-solid fa-right-to-bracket"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
