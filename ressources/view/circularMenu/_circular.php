<div id="circular-menu" class="circular-menu">
            <a class="floating-btn" onclick="document.getElementById('circular-menu').classList.toggle('active');">
                <i aria-hidden="true" class="fas fa-bars"></i>
                <i aria-hidden="true" class="fas fa-times"></i>
            </a>

            <div class="items-wrapper">
                <div class="menu-item is-flex">
                    <label class="dark-mode">
                        <input type="checkbox" checked />
                        <span></span>
                    </label>
                </div>
                <a class="menu-item is-flex right-panel-trigger" data-panel="languages-panel">
                    <img src="assets/img/icons/flags/united-states-of-america.svg" alt="" />
                </a>
                <a href="admin-profile-notifications.html" class="menu-item is-flex">
                    <i data-feather="bell"></i>
                </a>
                <a class="menu-item is-flex right-panel-trigger" data-panel="activity-panel">
                    <i data-feather="grid"></i>
                </a>
            </div>
        </div>