<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Lista libri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Aggiungi libro</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
