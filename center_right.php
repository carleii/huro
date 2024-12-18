<div class="center">
    <div id="webapp-navbar-menu" class="centered-links">
        <a href="./personnal-home.php" id="dashboards-navbar-menu" class="centered-link centered-link-toggle">
            <i data-feather="activity"></i>
            <span>Dashboards</span>
        </a>
        <a href="./stock.php" class="centered-link centered-link-toggle">
            <i data-feather="grid"></i>
            <span>Stock</span>
        </a>
        <!-- <a id="layouts-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="layouts-webapp-menu">
            <i data-feather="grid"></i>
            <span>Stock</span>
        </a> -->
        <a href="./produit.php" class="centered-link centered-link-toggle">
            <i data-feather="box"></i>
            <span>Produits</span>
        </a>
        <!-- <a id="elements-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="elements-webapp-menu">
            <i data-feather="box"></i>
            <span>Produits</span>
        </a> -->
        <a href="./users.php?kjfhae" class="centered-link centered-link-toggle">
            <i data-feather="cpu"></i>
            <span>Employers</span>
        </a>
       
        <a href="#" class="centered-link">
            <i data-feather="message-circle"></i>
            <span>Chat</span>
        </a>
        <a class="centered-link centered-link-search">
            <i data-feather="search"></i>
            <span>Search</span>
        </a>
    </div>
    <div id="webapp-navbar-search" class="centered-search is-hidden">
        <div class="field">
            <div class="control has-icon">
                <input type="text" class="input is-rounded search-input" placeholder="Search records..." />
                <div class="form-icon">
                    <i data-feather="search"></i>
                </div>
                <div id="webapp-navbar-search-close" class="form-icon is-right">
                    <i data-feather="x"></i>
                </div>
                <div class="search-results has-slimscroll"></div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <form action="" method="post">
            <button type="submit" name="new_sell" class="button h-button is-success is-outlined">
                <span class="icon">
                <i data-feather="shopping-cart"></i>                            </span>
            </button>
        </form>
    </div>
</div>
<div class="right">
    <div class="toolbar ml-auto">
        <div class="toolbar-link">
            <label class="dark-mode ml-auto">
                <input type="checkbox" checked />
                <span></span>
            </label>
        </div>

        <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
            <img src="assets/img/icons/flags/france.svg" alt="" />
        </a>

        <div class="toolbar-notifications is-hidden-mobile">
            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                <div class="is-trigger" aria-haspopup="true">
                    <i data-feather="bell"></i>
                    <span class="new-indicator pulsate"></span>
                </div>
                
            </div>
        </div>

        <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
            <i data-feather="grid"></i>
        </a>
    </div>
    <div class="dropdown profile-dropdown dropdown-trigger is-spaced is-right">
        <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="" />
        <span class="status-indicator"></span>

        <div class="dropdown-menu" role="menu">
            <div class="dropdown-content">
                <div class="dropdown-head">
                    <div class="h-avatar is-large">
                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="" />
                    </div>
                    <div class="meta">
                        <span><?php echo $utilisateur->nom ?></span>
                        <span><?php echo $utilisateur->telephone ?></span>
                    </div>
                </div>
                <a href="#" class="dropdown-item is-media">
                    <div class="icon">
                        <i class="lnil lnil-user-alt"></i>
                    </div>
                    <div class="meta">
                        <span>Profile</span>
                        <span>View your profile</span>
                    </div>
                </a>
                <a href="#" class="dropdown-item is-media layout-switcher">
                    <div class="icon">
                        <i class="lnil lnil-layout"></i>
                    </div>
                    <div class="meta">
                        <span>Layout</span>
                        <span>Switch to admin/webapp</span>
                    </div>
                </a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item is-media">
                    <div class="icon">
                        <i class="lnil lnil-briefcase"></i>
                    </div>
                    <div class="meta">
                        <span>Projects</span>
                        <span>All my projects</span>
                    </div>
                </a>
                <a href="#" class="dropdown-item is-media">
                    <div class="icon">
                        <i class="lnil lnil-users-alt"></i>
                    </div>
                    <div class="meta">
                        <span>Team</span>
                        <span>Manage your team</span>
                    </div>
                </a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item is-media">
                    <div class="icon">
                        <i class="lnil lnil-cog"></i>
                    </div>
                    <div class="meta">
                        <span>Settings</span>
                        <span>Account settings</span>
                    </div>
                </a>
                <hr class="dropdown-divider" />
                <div class="dropdown-item is-button">
                    <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                        <span class="icon is-small">
                            <i data-feather="log-out"></i>
                        </span>
                        <span>Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>