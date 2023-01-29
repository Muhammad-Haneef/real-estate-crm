<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
  <div>
    <div class="logo-wrapper">
      <a href="/">
        <img class="img-fluid for-light" src="<?= ADMIN_IMG ?>logo.png" alt="<?= TITLE ?>">
        <img class="img-fluid for-dark" src="<?= ADMIN_IMG ?>logo.png" alt="<?= TITLE ?>">
      </a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper">
      <a href="/">
        <img class="img-fluid" src="<?= ADMIN_IMG ?>logo-icon.png" alt="<?= TITLE ?>">
      </a>
    </div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">

        <ul class="sidebar-links" id="simple-bar">

          <li class="back-btn">
            <a href="/">
              <img class="img-fluid" src="<?= ADMIN_IMG ?>logo-icon.png" alt="">
            </a>
            <div class="mobile-back text-end">
              <span>Back</span>
              <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
          </li>


          <li class="sidebar-main-title">
            <div>
              <h6 class="">System Settings</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#">
              System Users
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?= ADMIN ?>departments">Departments</a></li>
              <li><a href="<?= ADMIN ?>designations">Designations</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>