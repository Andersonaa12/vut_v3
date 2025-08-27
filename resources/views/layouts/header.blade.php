 <!-- Navbar -->
 <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Dashboard</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Buscar Radicados...">
          </div>
        </div>

        <ul class="navbar-nav justify-content-end">
         
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- Icono de campana -->
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                <path d="M11 20.8889C11.5344 21.4827 12.4656 21.4827 13 20.8889M18.5 11C18.7288 12.7551 19.3461 14.4441 20.3146 15.9409L21 17H3L3.68539 15.9408C4.93512 14.0096 5.6 11.7583 5.6 9.45798V8.4C5.6 5.03364 8.19907 2.27432 11.5 2.01924M20 5C20 6.65685 18.6569 8 17 8C15.3431 8 14 6.65685 14 5C14 3.34315 15.3431 2 17 2C18.6569 2 20 3.34315 20 5Z"
                      stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>

              <!-- Badge dinámico -->
              <span id="notification-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $notifications->count() }}
              </span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              
              <!-- Notificaciones dinámicas -->
              @foreach ($notifications as $notification)
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      
                      <!-- Avatar con iniciales -->
                      <div class="my-auto">
                        <div 
                          class="user-initials rounded-circle text-center text-white fw-bold d-flex align-items-center justify-content-center"
                          style="background-color: rgba(0, 159, 189, 1); width: 40px; height: 40px; font-size: 16px;">
                          @php
                            $name = $notification->data['sender_name'] ?? 'User';
                            $parts = explode(' ', trim($name));
                            echo strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
                          @endphp
                        </div>
                      </div>

                      <!-- Contenido -->
                      <div class="d-flex flex-column justify-content-center ms-2">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">{{ $notification->data['sender_name'] ?? 'Usuario' }}</span>: 
                          {{ $notification->data['title'] ?? '' }}
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          {{ $notification->data['description'] }}
                        </p>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          {{ $notification->created_at->diffForHumans() }}
                        </p>
                      </div>

                    </div>
                  </a>
                </li>
              @endforeach
            </ul>
          </li>

          <li class="nav-item dropdown d-flex align-items-center">
            <a href="javascript:;" class="nav-link d-flex align-items-center" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div 
                  class="user-initials rounded-circle text-center text-white fw-bold d-flex align-items-center justify-content-center"
                  style="background-color: rgba(0, 159, 189, 1); width: 40px; height: 40px; font-size: 16px;">
                  {{ strtoupper(substr(Auth::user()->first_name, 0, 1)) }}{{ strtoupper(substr(Auth::user()->middle_name ?? '', 0, 1)) }}
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li>
                <a class="dropdown-item" {{-- href="{{ route('admin.user.profile.show') }}" --}}>
                  <i class="fas fa-user-circle me-2"></i> Ver Perfil
                </a>
              </li>
              <li>
                <form action="{{ brand_route('admin.logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button class="dropdown-item" type="submit">
                    <i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión
                  </button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <!-- End Navbar -->