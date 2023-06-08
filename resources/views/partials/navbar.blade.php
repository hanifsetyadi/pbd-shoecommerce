<nav class="navbar navbar-expand-lg" style="background-color: #efcf78;">
        <div class="container" >
          <a class="navbar-brand" href="home"><img src="https://cdn3.emoji.gg/emojis/6757_Sadge.png" alt="logo" style="width: 50px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if (Auth::check() && Auth::user()->isAdmin)
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="edit">Edit</a>
              </li>           
              @else
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home">Home</a>
              </li>
              @endif
            </ul>
            </form>
          </div>
        </div>
      </nav>