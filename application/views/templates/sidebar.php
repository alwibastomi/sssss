<!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index.html" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="<?= site_url('User') ?>" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Management User</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
       </div>

     <a href="<?= site_url('Tool1') ?>" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Tool1</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="background.html" class="nav-link">Tool1</a></li>
          <li class="nav-item"><a href="border.html" class="nav-link">Tool2</a></li>
          <li class="nav-item"><a href="height.html" class="nav-link">Tool3</a></li>
        </ul>

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
