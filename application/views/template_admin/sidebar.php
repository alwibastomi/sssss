<div class="br-logo"><a href="<?= site_url('Dashboard') ?>"><img src="<?= site_url('assets/images/Logo-03.png') ?>" alt="" width="200"></a></div>
<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
  <div class="br-sideleft-menu">
    <a href="<?= site_url('Dashboard') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="Dashboard"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Tool1') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Tool1"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
        <span class="menu-item-label">Tool 1</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('Tool/Tool2') ?>" class="br-menu-link <?php if($this->uri->segment(2)=="Tool2"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
        <span class="menu-item-label">Tool 2</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

  </div><!-- br-sideleft-menu -->

  <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Lainnya</label>
  <div class="info-list">
    <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-person tx-24"></i>
        <span class="menu-item-label">Profile</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="<?= site_url('Tool/Tool1') ?>" class="nav-link">Lihat Profile</a></li>
      <li class="nav-item"><a href="<?= site_url('Tool/Tool2') ?>" class="nav-link">Ubah Profile</a></li>
    </ul>
    <?php if ($level == 1) { ?>
      <a href="<?= site_url('User') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="User"){echo "active";}?>">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
          <span class="menu-item-label">User</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
    <?php } ?>
    <a href="<?= site_url('Chat') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="Chat"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-chatbubble-working tx-24"></i>
        <span class="menu-item-label">Chat CS</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <a href="<?= site_url('About') ?>" class="br-menu-link <?php if($this->uri->segment(1)=="About"){echo "active";}?>">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
        <span class="menu-item-label">About</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    <div class="bd mt-3"></div>
    <a href="<?= site_url('Login/logout') ?>" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-power tx-24"></i>
        <span class="menu-item-label">Logout</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
  </div>

  <br>
</div><!-- br-sideleft -->
