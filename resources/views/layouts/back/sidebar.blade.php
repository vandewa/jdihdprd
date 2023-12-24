  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="{{ asset('jdihpemda.png') }}" alt="MPP" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">JDIH DPRD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="pb-3 mt-3 mb-3 user-panel d-flex">
              <div class="image">
                  <img src="{{ asset('soul.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name ?? '-' }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}"
                          class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('profil.index') }}"
                          class="nav-link {{ Request::segment(1) == 'profil' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-laptop"></i>
                          <p>
                              Profil
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('produk-hukum.index') }}"
                          class="nav-link {{ Request::segment(1) == 'produk-hukum' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-list"></i>
                          <p>
                              Produk Hukum
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('monografi.index') }}"
                          class="nav-link {{ Request::segment(1) == 'monografi' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-gavel"></i>
                          <p>
                              Monografi Hukum
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('kategori.index') }}"
                          class="nav-link {{ Request::segment(1) == 'kategori' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-th-large"></i>
                          <p>
                              Kategori Hukum
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('link-terkait.index') }}"
                          class="nav-link {{ Request::segment(1) == 'link-terkait' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-link"></i>
                          <p>
                              Link Terkait
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('polling.index') }}"
                          class="nav-link {{ Request::segment(1) == 'polling' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-vote-yea"></i>
                          <p>
                              Polling
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('sosmed') }}"
                          class="nav-link {{ Request::segment(1) == 'sosial-media' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-instagram"></i>
                          <p>
                              Sosial Media
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('kontak') }}"
                          class="nav-link {{ Request::segment(1) == 'kontak' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-phone"></i>
                          <p>
                              Kontak Kami
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('sampul.index') }}"
                          class="nav-link {{ Request::segment(1) == 'sampul' ? 'active' : '' }}">
                          <i class="nav-icon fa fa-solid fa-images"></i>
                          <p>
                              Sampul Gambar
                          </p>
                      </a>
                  </li>
                  <li class="nav-item mt-3">
                      <a href="{{ route('password') }}"
                          class="nav-link {{ Request::segment(1) == 'ganti-password' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-key"></i>
                          <p>
                              Ganti Password
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
