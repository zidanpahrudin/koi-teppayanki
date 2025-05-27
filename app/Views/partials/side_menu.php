<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
        <img class="img-circle img-fluid w-50 d-block mx-auto" src="<?= base_url('assets/dist/img/home_service_logo.webp') ?>" />
    </a>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <?php
            $currentUrl = uri_string(); // Hasil: 'master/role'
            $menuGroups = [];

            foreach (session()->get('user_menus') as $menu) {
                $menuGroups[$menu['menu_group']][] = $menu;
            }

            foreach ($menuGroups as $group => $menus):
                $groupId = "group-" . strtolower(str_replace(' ', '-', $group));
                $isCollapsible = count($menus) > 1;
                $groupIcon = $menus[0]['menu_icon'];

                // Cek apakah salah satu menu di grup ini sedang aktif
                $isActiveGroup = false;
                foreach ($menus as $menu) {
                    if ($currentUrl === trim($menu['menu_url'], '/')) {
                        $isActiveGroup = true;
                        break;
                    }
                }
            ?>
                <li class="nav-item <?= $isCollapsible && $isActiveGroup ? 'menu-open' : '' ?>">
                    <?php if ($isCollapsible): ?>
                        <a href="#" class="nav-link <?= $isActiveGroup ? 'active' : '' ?>">
                            <i class="nav-icon <?= $groupIcon ?>"></i>
                            <p>
                                <?= ucfirst($group) ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview <?= $isActiveGroup ? 'show' : '' ?>">
                            <?php foreach ($menus as $menu): ?>
                                <li class="nav-item">
                                    <a href="<?= base_url($menu['menu_url']) ?>" class="nav-link <?= $currentUrl === trim($menu['menu_url'], '/') ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?= $menu['menu_name'] ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <?php $menu = $menus[0]; ?>
                        <a href="<?= base_url($menu['menu_url']) ?>" class="nav-link <?= $currentUrl === trim($menu['menu_url'], '/') ? 'active' : '' ?>">
                            <i class="nav-icon <?= $groupIcon ?>"></i>
                            <p><?= ucfirst($menu['menu_name']) ?></p>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</aside>
