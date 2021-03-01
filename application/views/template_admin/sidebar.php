<div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
  <div class="br-sideleft-menu">
    <a href="<?= site_url('Dashboard') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="Dashboard"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('User') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="User"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
        <span class="menu-item-label">User</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-book-outline tx-24"></i>
        <span class="menu-item-label">Tool</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="<?= site_url('Tool/Tool1') ?>" class="nav-link">Tool 1</a></li>
      <li class="nav-item"><a href="<?= site_url('Tool/Tool2') ?>" class="nav-link">Tool 1 part 2</a></li>
      <li class="nav-item"><a href="<?= site_url('Tool2/Tool_2') ?>" class="nav-link">Tool 2 part 1</a></li>
      <li class="nav-item"><a href="buttons.html" class="nav-link">Tool 3</a></li>
    </ul>
    <a href="<?= site_url('User') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="User"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
        <span class="menu-item-label">About</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
  </div><!-- br-sideleft-menu -->

  <br>
</div><!-- br-sideleft -->
