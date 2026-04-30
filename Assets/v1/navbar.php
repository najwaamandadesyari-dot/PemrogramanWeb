    <nav class="navbar-top">
        <div class="navbar-left">
            <span class="navbar-brand">Navbar</span>
        </div>
        
        <div class="navbar-center">
            <input type="text" class="search-box" placeholder="Search...">
        </div>
        
        <div class="navbar-right">
            <span class="date-display"><?php echo date("d/m/Y"); ?></span>
            <div class="menu-hamburger" id="hamburgerMenu">
                <span class="hamburger-icon">☰</span>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#home" class="dropdown-item">
                        <span class="menu-icon">🏠</span> Home
                    </a>
                    <a href="#link" class="dropdown-item">
                        <span class="menu-icon">🔗</span> Link
                    </a>
                    <a href="#" class="dropdown-item disabled">
                        <span class="menu-icon">🚫</span> Disabled
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#profil" class="dropdown-item">
                        <span class="menu-icon">👤</span> Profil
                    </a>
                    <a href="#logout" class="dropdown-item logout-item">
                        <span class="menu-icon">🚪</span> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('hamburgerMenu').addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('dropdownMenu');
            if (dropdown && dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            }
        });

        // Close dropdown when clicking on menu items
        document.querySelectorAll('.dropdown-item:not(.disabled)').forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('dropdownMenu').classList.remove('active');
            });
        });
    </script>
