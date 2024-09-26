<div class="main-sidebar sidebar-style-3">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index-2.html">E-Commerce</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index-2.html">CP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Aceuil</li>
            <li class="dropdown @if($table == 'dachboard')  active @endif">
                <a href="/dachboard" class="nav-link "><i class="fas fa-fire"></i><span>Accueil</span></a>
            </li>
            <li class="menu-header">User Order</li>
            <li class="dropdown @if($table == 'Produits')  active @endif">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i> <span>Commands</span></a>
                <ul class="dropdown-menu">
                    <li class="@if($table == 'Produits')  active @endif"><a class="nav-link" href="/Produits">List du Commands</a></li>
                </ul>
            </li>
            <!-- <li class="dropdown @if($table == 'Marques')  active @endif">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-brands fa-bandcamp"></i> <span>Marque</span></a>
                <ul class="dropdown-menu">
                    <li class="@if($table == 'Marques')  active @endif"><a class="nav-link" href="/marques">list du Marque</a></li>
                </ul>
            </li> -->
         
       
        </ul><br>
        <div class="  p-3 hide-sidebar-mini" style="margin-top: 60% !important;">
            <a href="{{route('user.logout')}}" class="btn btn-primary btn-lg btn-block btn-icon-split" style="margin-bottom: -420% !important;background-color: white ;border-color: #fff;color:#ff2727;"><i class="fas fa-power-off "></i>Logout</a>
        </div>
    </aside>
</div>