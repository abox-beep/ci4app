<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Sultonir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= ($title == 'Home | Sultoni Rahman') ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
                    <a class="nav-link <?= ($title == 'About | Sultoni Rahman') ? 'active' : '' ?>" href="/pages/about">About</a>
                    <a class="nav-link <?= ($title == 'Contact Us') ? 'active' : '' ?>" href="/pages/contact">Contact</a>
                    <a class="nav-link <?= ($title == 'Daftar Komik') ? 'active' : '' ?>" href="/komik">Komik</a>
                    <a class="nav-link <?= ($title == 'Daftar Orang') ? 'active' : '' ?>" href="/orang">Orang</a>
                </div>
                <?php if (logged_in()) : ?>
                    <a class="nav-link" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link" href="/login">Login</a>
                <?php endif ?>
            </div>
        </div>
    </div>
</nav>