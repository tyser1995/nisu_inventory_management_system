  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="{{ asset('images')}}/logo/no_logo.jpg " alt="No logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">{{env('APP_TITLE','TITLE')}}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <i class="fa fa-user-alt img-circle elevation-2"></i>
                  {{-- <img src="{{ asset('images')}}/logo/gbi.png " class="img-circle elevation-2"
                      alt="User Image"> --}}
              </div>
              <div class="info">
                  <a href="#" class="d-block"><?php
                                    echo Auth::user()->name;
                                ?></a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline d-none">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    @if (Auth::user()->can('dashboard-list'))
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link {{ $elementActive == 'dashboard' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                    @endif
                  
                    @if (Auth::user()->can('user-list') || Auth::user()->can('role-list'))
                        <li class="nav-item {{ $elementActive == 'user' || $elementActive == 'roles' ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ $elementActive == 'user' || $elementActive == 'roles' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    User Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('user-list')
                                <li class="nav-item">
                                    <a href="{{ route('users') }}"
                                        class="nav-link {{ $elementActive == 'user' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Account</p>
                                    </a>
                                </li>
                                @endcan
                                @can('role-list')
                                <li class="nav-item">
                                    <a href="{{ route('roles') }}"
                                        class="nav-link {{ $elementActive == 'roles' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    <li class="d-none nav-item {{ $elementActive == 'user' || $elementActive == 'roles' ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ $elementActive == 'user' || $elementActive == 'roles' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Business Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user-list')
                            <li class="nav-item">
                                <a href="{{ route('users') }}"
                                    class="nav-link {{ $elementActive == 'user' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Owner</p>
                                </a>
                            </li>
                            @endcan
                            @can('role-list')
                            <li class="nav-item">
                                <a href="{{ route('roles') }}"
                                    class="nav-link {{ $elementActive == 'roles' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Store</p>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                   
                  <li class="nav-item d-none">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-people-carry"></i>
                          <p>
                              Community Service
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Community</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                 
                  <li class="nav-item">
                      <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST"
                          style="display: none;">
                          @csrf
                      </form>
                      <a href="#logout" class="nav-link" onclick="document.getElementById('formLogOut').submit();">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
