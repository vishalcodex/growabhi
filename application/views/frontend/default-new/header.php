<!---------- Header Section start  ---------->
<?php $cart_items = $this->session->userdata('cart_items'); ?>
<?php $user_id = $this->session->userdata('user_id'); ?>
<?php $user_login = $this->session->userdata('user_login'); ?>
<?php $admin_login = $this->session->userdata('admin_login'); ?>
<?php if($user_id > 0){$user_details = $this->user_model->get_all_user($user_id)->row_array();} ?>
<style type="text/css">
  .bg_custom1
  {
    background-color: #0b0e13 !important;
    /*color: white !important;*/
  }

    
     .bg_custom2
  {
    background-color: #10141a !important;
    /*color: white !important;*/
  }

/**/
   .bg_custom3
  {
    background-color: #2f3136 !important;
    /*color: white !important;*/
  }




  .bg_custom p, a, i, h1, h2
  {
      /*color: white !important;*/
  }

  h1, h2, h3, h4, h5, h6{
    color: white !important;
  }

/*   body, section
   {
     background-color: black !important;
    color: white !important;
   } */


   .icon
   {
    color: white !important;
   }
</style>

<header class="bg_custom1">
  <!-- Sub Header Start -->
  <div class="sub-header bg_custom2" >
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="icon icon-left">
            <ul class="nav text">
              <li class="nav-item px-2">
                <a href="tel:<?php echo get_settings('phone'); ?>" class="text-white"><i class="fa-solid fa-phone"></i> <?php echo get_settings('phone'); ?></a>
              </li>
              <div class="vartical"></div>
              <li class="nav-item px-2">
                <a href="mailto:<?php echo get_settings('system_email'); ?>" class="text-white"><i class="fas fa-envelope"></i> <?php echo get_settings('system_email'); ?></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="icon right-icon">
            <?php $facebook = get_frontend_settings('facebook'); ?>
            <?php $twitter = get_frontend_settings('twitter'); ?>
            <?php $linkedin = get_frontend_settings('linkedin'); ?>
            <ul class="nav justify-content-end">
              <?php if($facebook): ?>
                <li class="nav-item">
                  <a target="_blank" href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f  text-white"></i></a>
                </li>
              <?php endif; ?>
              <?php if($twitter): ?>
                <li class="nav-item">
                  <a target="_blank" href="<?php echo $twitter; ?>"><i class="fa-brands fa-twitter text-white"></i></a>
                </li>
              <?php endif; ?>
              <?php if($linkedin): ?>
                <li class="nav-item">
                  <a target="_blank" href="<?php echo $linkedin; ?>"><i class="fa-brands fa-linkedin  text-white"></i></a>
                </li>
              <?php endif; ?>

              <a href="#" class="invisible d-none" onclick="actionTo('<?php echo site_url('home/dark_and_light_mode') ?>')"><i class="fas fa-moon"></i></a>

              <li class="nav-item align-items-center d-flex ms-3">
                <form action="#" method="POST" class="language-control select-box">
                  <select onchange="actionTo(`<?php echo site_url('home/switch_language/') ?>${$(this).val()}`)" class="select-control form-select nice-select">
                    <?php
                    $languages = $this->crud_model->get_all_languages();
                    $selected_language = $this->session->userdata('language');
                    foreach ($languages as $language): ?>
                      <?php if (trim($language) != ""): ?>
                        <option value="<?php echo strtolower($language); ?>" <?php if ($selected_language == $language): ?>selected<?php endif; ?>><?php echo ucwords($language);?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---- Sub Header End ------>
  
  <section class="menubar">
    <?php include "header_lg_device.php"; ?>
    <!-- Offcanves Menu  -->
    <?php include "header_sm_device.php"; ?>
  </section>
</header>
<!---------- Header Section End  ---------->

