<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand " href="/" >CarSteer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home')? "active" : " "  }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Schedules')? "active" : " "  }}" href="/schedules">Schedules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Packages')? "active" : " "  }}" href="/packages">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Trainers')? "active" : " "  }}" href="/trainers">Trainers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Car Types')? "active" : " "  }}" href="/car-types">Car Types</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>