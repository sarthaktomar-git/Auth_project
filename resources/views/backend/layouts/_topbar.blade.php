<nav class="navbar">
    <a href="#" class="sidebar-toggler">
      <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img class="wd-30 ht-30 rounded-circle"src="<?= DEFAULT_ASSETS ?>images/logo.png" alt="">
          </a>
          <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
            <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
              <div class="mb-3">
                <img class="wd-80 ht-80 rounded-circle"src="<?= DEFAULT_ASSETS ?>images/logo.png" alt="">
              </div>
              <div class="text-center">
                <p class="tx-16 fw-bolder"><?= $this->session->userdata('npyad_ngo_email'); ?></p>
                <p class="tx-12 text-muted"><?= $this->session->userdata('npyad_ngo_name'); ?></p>
              </div>
            </div>
            <ul class="list-unstyled p-1">
              <li class="dropdown-item py-2">
                <a href="<?= BASE_URL ?>my-profile" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li class="dropdown-item py-2">
                <a href="<?= BASE_URL ?>change-password" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="lock"></i>
                  <span>Change Password</span>
                </a>
              </li>
              <li class="dropdown-item py-2">
                <a href="<?= BASE_URL ?>logout" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>