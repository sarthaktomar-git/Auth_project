<nav class="sidebar">
    <div class="sidebar-header">
      <a href="<?= BASE_URL ?>dashboard" class="sidebar-brand" style="font-size: 22px;">
        <?= $site_name; ?>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">

        <li class="nav-item">
          <a href="<?= BASE_URL ?>dashboard" class="nav-link">
            <i class="fa fa-dashboard"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>service" class="nav-link">
            <i class="fa fa-star"></i>
            <span class="link-title">Service</span>
          </a>
        </li> 

        <li class="nav-item">
          <a href="<?= BASE_URL ?>team" class="nav-link">
            <i class="fa fa-star"></i>
            <span class="link-title">Team</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>cause" class="nav-link">
            <i class="fa fa-star"></i>
            <span class="link-title">Cause</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>news" class="nav-link">
            <i class="fa fa-star"></i>
            <span class="link-title">News</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>event" class="nav-link">
            <i class="fa fa-star"></i>
            <span class="link-title">Event</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>slide" class="nav-link">
            <i class="fa fa-sliders"></i>
            <span class="link-title">Slider</span>
          </a>
        </li>
         

        <li class="nav-item">
          <a href="<?= BASE_URL ?>my-profile" class="nav-link">
            <i class="fa fa-user"></i>
            <span class="link-title">My Profile</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>change-password" class="nav-link">
            <i class="fa fa-lock"></i>
            <span class="link-title">Change Password</span>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?= BASE_URL ?>general-settings" class="nav-link">
            <i class="fa fa-cog"></i>
            <span class="link-title">Settings</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= BASE_URL ?>logout" class="nav-link">
            <i class="fa fa-sign-out"></i>
            <span class="link-title">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>