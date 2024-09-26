<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('admin/assets/img/LOGO3.png')}}" height="75px" width="55px" class="header-logo" /> <span
                class="logo-name">KOBIBOX</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown  @if($table == 'dachboard')  active @endif">
              <a href="/dachboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @if($table == 'familles')  active @endif">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Categories</span></a>
              <ul class="dropdown-menu">
                <li class="@if($table == 'familles')  active @endif"><a class="nav-link" href="/familles">All Categories</a></li>
                <li><a class="nav-link" href="/familles/create">Add Categorie</a></li>
              </ul>
            </li>
            <li class="dropdown @if($table == 'sousFamilles')  active @endif">
              
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="list"></i><span>Sub Categories</span></a>
              <ul class="dropdown-menu">
                <li class="@if($table == 'sousFamilles')  active @endif"><a class="nav-link" href="/sous-famille">ALL subCategorie</a></li>
                <li><a class="nav-link" href="/sous-famille/create" >ADD new subCategorie</a></li>             
              </ul>
            </li>

            <li class="dropdown  @if($table == 'Produits')  active @endif">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="box"></i><span>Products</span></a>
              <ul class="dropdown-menu">
                <li class="@if($table == 'Produits')  active @endif"><a class="nav-link" href="/Produits">All products</a></li>
                <li><a class="nav-link" href="/Produits/create">Create new one</a></li>                
              </ul>
            </li>
            <li class="dropdown  @if($table == 'Marques')  active @endif">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Brands  </span></a>
              <ul class="dropdown-menu">
                <li class="@if($table == 'Marques')  active @endif"><a class="nav-link" href="/marques">All Brands</a></li>
                <li><a class="nav-link" href="/marques/create">Create new brand</a></li>               
              </ul>
            </li>
            <li class="  @if($table == 'clients')  active @endif">
              <a href="{{route('clients.index')}}" class=" nav-link"><i data-feather="users"></i><span>Clients  </span></a>
              <!-- <ul class="dropdown-menu">
                <li class="@if($table == 'Marques')  active @endif"><a class="nav-link" href="/marques">All Clients</a></li>
                <li><a class="nav-link" href="/marques/create">Create new brand</a></li>               
              </ul> -->
            </li>
            <li class="menu-header">UI Elements</li>
                    <li><a href="#"> Child Menu 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>