<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link active" href="{{url('/yoda')}}">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li>
          <a class="nav-link active" href="{{url('/yoda/messages')}}">
              <span data-feather="home"></span>
              Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/yoda/new-article')}}">
              <span data-feather="file"></span>
              Creer un Article!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/yoda/articles')}}">
              <span data-feather="shopping-cart"></span>
              Liste des Articles
            </a>
          </li>
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Gestion Utilisateurs</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/yoda/users')}}">
              <span data-feather="file-text"></span>
               Liste des Utilisateurs
            </a>
          </li>
         
        </ul>
      </div>
    </nav>

  