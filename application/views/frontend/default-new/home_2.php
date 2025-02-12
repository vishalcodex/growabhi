<style>

  /* Hide div on mobile (max-width 768px, covers most tablets and smaller screens) */
@media (max-width: 768px) {
    .hide-on-mobile {
        display: none !important;
    }
}

@media (min-width: 769px) {
    .hide-on-desktop {
        display: none;
    }
}


    .ellipsis-line-1 {
        display: -webkit-box!important; 
        -webkit-line-clamp: 1; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: normal
    }
    .course-item-one .content .title:has(~ .info) {
        padding-bottom: 5px;
    }



    /* Custome CSS*/

     /* .grid-view, .courses-list-view, .grid-view-body, .courses, .pagenation-items, .course-decription
  {
    background-color: #10141a !important;
  }*/

  .checkPropagation, .courses-card-body
  {
    /*background-color: #2f3136 !important; */
  }

 .bg_custom1
  {
    /*background-color: #0b0e13 !important;*/
    /*color: white !important;*/
  }

    
     .bg_custom2, .course-all-category
  {
    /*background-color: #10141a !important;*/
    /*color: white !important;*/
  }

/**/
   .bg_custom3
  {
    /*background-color: #2f3136 !important;*/
    /*color: white !important;*/
  }



/*
   p, a, i, h1, h2, h3, h4, h5, h6,
  {
      color: white !important;
  }
*/
  h1, h2, h3, h4, h5, h6, p{ 
    /*color: white !important;*/
    
  }
/*
  p{
    color: black !important;
  }*/

  .notify-details 
  {
    color:black !important;
  }
/*
  .menu_pro_tgl_bg  h1, h2, h3, h4, h5, h6, p{ 
    color: black !important;
    
  }
*/

  /*Button Join now*/

  /* Button style */
.btn-zoom {
    background-color: #ff5c5c; /* Matches the button color from your image */
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 20px;
    padding: 10px 28px;
    font-size: 1.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.btn-zoom:hover {
    transform: scale(1.1); /* Zooms the button */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Adds shadow */
        background-color: #ff5c5c; /* Matches the button color from your image */
          color: white;
}


</style>
<!---------- Banner Section Start ---------------->
<section class="h-1-banner h-2-banner">
  <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                    <source src="<?= base_url();?>assets/frontend/bgvideo.mp4" type="video/mp4">
                    </video>
                </div>
    <div class="container" style="position: relative; z-index: 1; color: white; text-align: center; padding-top: 10%;">
        <div class="h-2-banner-text">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <?php
                        $banner_title = site_phrase(get_frontend_settings('banner_title'));
                        $banner_title_arr = explode(' ', $banner_title);
                    ?>
                    <h1>
                        <?php
                        foreach($banner_title_arr as $key => $value){
                            if($key == count($banner_title_arr) - 1){
                                echo '<span>'.$value.'</span>';
                            }else{
                                echo $value.' ';
                            }
                        }
                        ?>
                    </h1>
                    <h3 class="text-white mb-3 mt-2"><?php echo site_phrase(get_frontend_settings('banner_sub_title')); ?></h3>
                    <div class="h-2-search-bar">
                         <form action="<?php echo site_url('home/search'); ?>" method="get">
                            <input class="form-control" type="text" placeholder="<?php echo get_phrase('What do you want to learn'); ?>" name="query">
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i><?php echo get_phrase('Search') ?></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>

              <div class=" justify-content-center align-items-center">
                    <button class="btn btn-zoom"> <a href="<?= base_url();?>sign_up" style="color: white !important"> <i class="fas fa-arrow-right me-2"></i> JOIN NOW <i class="fas fa-arrow-left me-2"></i> </a></button>
                </div>

           <!--  <div class="banner-image">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="image-1">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/banner-man-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="image-1 image-bottom">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/banner-man-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="image-3 image-bottom">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/banner-man-3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="image-3">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/banner-man-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>  
    </div>
</section>
 
<section class="world-class mb-0">
    <div class="container">
        <div class="world-class-content">
            <div class="row">
                <div class="col-lg-3">
                    <h1>
                        <?php
                        $we_provides = explode(' ', get_phrase('We Provides you World Class Performance'));
                        foreach($we_provides as $key => $value){
                            if($key == 0){
                                echo '<span>'.$value.'</span>';
                            }else{
                                echo ' '.$value;
                            }
                        }
                        ?>
                        <span>.</span>
                    </h1>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                    <div class="world-cls-card">
                        <div class="image-1">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/1.png" alt="">
                        </div>
                        <?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses_front();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                        ?>
                        <h4><?php echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h4>
                        <h6><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></h6>
                    </div>  
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                    <div class="world-cls-card">
                        <div class="image-2">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/2.png" alt="">
                        </div>
                        <h4><?php echo site_phrase('expert_instruction'); ?></h4>
                        <h6><?php echo site_phrase('find_the_right_course_for_you'); ?></h6>
                    </div>                        
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                    <div class="world-cls-card">
                        <div class="image-3">
                            <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/'); ?>image/3.png" alt="">
                        </div>
                        <h4><?php echo site_phrase('Smart solution'); ?></h4>
                        <h6><?php echo site_phrase('learn_on_your_schedule'); ?></h6>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Banner Section End ---------------->
 
<div class="row  justify-content-center text-center text-dark mt-5">
  <h1> How GrowAbhi <span style="color:#ffbe17"> Network </span> Work </h1>
  <div class="col-md-8 mt-3">
      <p> We bridge the gap between learners and expert instructors through our extensive networks, creating a platform for meaningful knowledge exchange. Be a part of our community to embrace the power of accessible education, expert guidance, and collective growth. </p>
  </div>
</div>


<div
  class="container-fluid py-5  text-dark hide-on-mobile"
  style="
    background-image: url('<?= base_url();?>assets/frontend/img/home/how_work1.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  "
>

  <div class="container text-center">
    <!-- Top Section: We Grow -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-4 mt-4">
        <h3 class="fw-bold">We Grow</h3>
        <p>
          Your growth is our priority. Together, we aim to achieve excellence by providing exceptional education and unwavering support.

        </p>
      </div>
    </div>

    <!-- Bottom Section: You Grow and World Grow -->
    <div class="row align-items-start">
      <!-- Left Section: You Grow -->
      <div class="col-md-4 mt-4 text-center">
        <h3 class="fw-bold">You Grow</h3>
        <p>
           Our mission is to support your journey of personal and professional development. We provide the knowledge, skills, and tools you need to succeed and evolve continuously.

        </p>
      </div>

      <!-- Spacer -->
      <div class="col-md-4"></div>

      <!-- Right Section: World Grow -->
      <div class="col-md-4 mt-4 text-center">
        <h3 class="fw-bold">World Grow</h3>
        <p>
             Education has the power to transform lives, communities, and the world. Our vision is to create a ripple effect of knowledge that inspires collective growth and progress.

        </p>
      </div>
    </div>
  </div>
</div>

<!-- Mobile View  -->


<div class="container text-center hide-on-desktop">
    <!-- Top Section: We Grow -->
    <div class="row text-dark">

       <!-- Left Section: You Grow -->
      <div class="col-md-4 mt-4 text-center">
        <img src="<?= base_url();?>assets/frontend/img/home/1.png" class=" p-2" style="width: 30%">
        <h3 class="fw-bold">You Grow</h3>
        <p>
           Our mission is to support your journey of personal and professional development. We provide the knowledge, skills, and tools you need to succeed and evolve continuously.

        </p>
      </div>



      <div class="col-md-4 mt-4">
         <img src="<?= base_url();?>assets/frontend/img/home/2.png" class=" p-2" style="width: 30%">
        <h3 class="fw-bold">We Grow</h3>
        <p>
          Your growth is our priority. Together, we aim to achieve excellence by providing exceptional education and unwavering support.

        </p>
      </div>
   
     

      <!-- Right Section: World Grow -->
      <div class="col-md-4 mt-4 text-center">
         <img src="<?= base_url();?>assets/frontend/img/home/3.png" class=" p-2" style="width: 30%">
        <h3 class="fw-bold">World Grow</h3>
        <p>
             Education has the power to transform lives, communities, and the world. Our vision is to create a ripple effect of knowledge that inspires collective growth and progress.

        </p>
      </div>
    </div>
  </div>

  <!-- Mobile View end -->
<!-- <div
  class="container-fluid pt-5 mt-5 pb-5"
  style="
    background-image: url('http://localhost/growabhi/assets/frontend/img/home/how_work1.png');
    
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
   
    width: 100%;

   
  "
>
  <div class="container h-100 d-flex align-items-center mt-5 mb-5">
    <div class="row text-center w-100">
          <div class="col-md-4 ">
        <div class="mb-4">
        
          <h3 style="margin-top: 200px">You Grow</h3>
          <p>
            Our primary motive is to contribute to your personal and
            professional growth. We aim to empower you with knowledge, skills,
            and resources that foster continuous development.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="mb-4">
         
          <h3>We Grow</h3>
          <p>
            As you thrive, so do we. Our success is intertwined with yours. By
            delivering high-quality education and support.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="mb-4">
         
          <h3>World Grow</h3>
          <p>
            We believe in the transformative power of education to impact not
            only individuals but also the broader community and the world. Our
            vision extends beyond personal and platform growth.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
 -->

<!-- <div class="container" 
  style="
    background-image: url('http://localhost/growabhi/assets/frontend/img/home/how_work.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 400px;
    width: 100%;
  "
>
</div> -->



<?php if(get_frontend_settings('upcoming_course_section') == 1): ?>
<!-- Start Upcoming Courses -->
<?php $upcoming_courses = $this->db->order_by('id', 'desc')->limit(6)->get_where('course', ['status' => 'upcoming']); ?>
<?php if($upcoming_courses->num_rows() > 0): ?>
    <section class="pt-100 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="title-one pb-20">
              <p class="subtitle text-uppercase"><?php echo get_phrase('Upcoming'); ?></p>
              <h4 class="title"><?php echo get_phrase('Upcoming courses'); ?></h4>
              <div class="bar"></div>
            </div>
            <p class="fz_15_m_24"><?php echo get_phrase('Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.') ?></p>
          </div>
          <div class="col-lg-8">
            <!-- Items -->
            <div class="row g-3">
              <?php
                foreach($upcoming_courses->result_array() as $upcoming_course):
                ?>
                <div class="col-lg-4">
                  <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($upcoming_course['title'])) . '/' . $upcoming_course['id']); ?>" class="course-item-one">
                    <div class="img-rating">
                      <div class="img"><img loading="lazy" src="<?php echo $this->crud_model->get_course_thumbnail_url($upcoming_course['id']); ?>" alt="" /></div>
                      <!-- <p class="date">Sep<span>12</span></p> -->
                    </div>
                    <div class="content">
                      <h4 class="title ellipsis-line-1"><?php echo $upcoming_course['title']; ?></h4>
                      <p class="info"><?php  
                            if($upcoming_course['publish_date']){
                                echo get_phrase('Release On').' : '. date('j F Y', strtotime($upcoming_course['publish_date']));
                            } 
                            ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>
<!-- End Upcoming Courses -->
<?php endif; ?>

<?php if(get_frontend_settings('top_category_section') == 1): ?>
<!---------- Top Categories Start ------------->
<!-- <section class="courses h-2-courses pb-2 pt-2 bg_custom1">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center mt-4"><?php echo site_phrase('top_categories'); ?></h1>
                <p class="text-center mt-4 mb-4"><?php echo site_phrase('These_are_the_most_popular_courses_among_Listen_Courses_learners_worldwide')?></p>
            </div>
            <div class="col-lg-3"></div>  
        </div>
        <div class="h-2-top-full">
            <div class="row justify-content-center">
                <?php $top_10_categories = $this->crud_model->get_top_categories(12, 'sub_category_id'); ?>
                <?php foreach($top_10_categories as $top_10_category): ?>
                <?php $category_details = $this->crud_model->get_category_details_by_id($top_10_category['sub_category_id'])->row_array(); ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-4 mb-3 ">
                        <div class="h-2-top-body bg_custom3 p-2 rounded text-white" onclick="redirectTo('<?php echo site_url('home/courses?category='.$category_details['slug']); ?>')">
                            <div class="h-2-top text-white">
                                <a href="<?php echo site_url('home/courses?category='.$category_details['slug']); ?>" style="color: #<?php echo rand(100000, 999999); ?>">
                                    <i class="<?php echo $category_details['font_awesome_class']; ?>"></i>
                                </a>
                             </div>
                             <a href="<?php echo site_url('home/courses?category='.$category_details['slug']); ?>"><?php echo $category_details['name']; ?></a>
                             <p style="color:black !important"><?php echo $top_10_category['course_number'].' '.site_phrase('Courses'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        
    </div>
</section> -->
<!---------- Top Categories end ------------->
<?php endif; ?>

<?php if(get_frontend_settings('top_course_section') == 1): ?> 
<!---------- Top courses Section start --------------->
<!-- <section class="courses grid-view-body pt-50 pb-4 bg_custom3">
    <div class="container">
        <h1><span><?php echo site_phrase('top_courses'); ?></span></h1>
        <p><?php echo site_phrase('These_are_the_most_popular_courses_among_Listen_Courses_learners_worldwide')?></p>
        <div class="courses-card">
            <div class="course-group-slider">
                <?php
                $top_courses = $this->crud_model->get_top_courses()->result_array();
                foreach ($top_courses as $top_course) :
                    $lessons = $this->crud_model->get_lessons('course', $top_course['id']);
                    $instructor_details = $this->user_model->get_all_user($top_course['creator'])->row_array();
                    $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($top_course['id']);
                    $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                    $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                    if ($number_of_ratings > 0) {
                        $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                    } else {
                        $average_ceil_rating = 0;
                    }
                    ?>
                    <div class="single-popup-course">
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>" id="top_course_<?php echo $top_course['id']; ?>" class="checkPropagation courses-card-body">
                            <div class="courses-card-image">
                                <img loading="lazy" src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>">
                                <div class="courses-icon <?php if(in_array($top_course['id'], $my_wishlist_items)) echo 'red-heart'; ?>" id="coursesWishlistIconTopCourse<?php echo $top_course['id']; ?>">
                                    <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('<?php echo site_url('home/toggleWishlistItems/'.$top_course['id'].'/TopCourse'); ?>')"></i>
                                </div>
                                <div class="courses-card-image-text">
                                    <h3><?php echo get_phrase($top_course['level']); ?></h3>
                                </div> 
                            </div>
                            <div class="courses-text">
                                <h5 class="mb-2"><?php echo $top_course['title']; ?></h5>
                                <div class="review-icon">
                                    <div class="review-icon-star align-items-center">
                                        <p><?php echo $average_ceil_rating; ?></p>
                                        <p><i class="fa-solid fa-star <?php if($number_of_ratings > 0) echo 'filled'; ?>"></i></p>
                                        <p>(<?php echo $number_of_ratings; ?> <?php echo get_phrase('Reviews') ?>)</p>
                                    </div>
                                    <div class="review-btn d-flex align-items-center">
                                       <span class="compare-img checkPropagation" onclick="redirectTo('<?php echo base_url('home/compare?course-1='.slugify($top_course['title']).'&course-id-1='.$top_course['id']); ?>');">
                                            <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/compare.png') ?>">
                                            <?php echo get_phrase('Compare'); ?>
                                        </span>
                                    </div>
                                </div>
                                <p class="ellipsis-line-2"><?php echo $top_course['short_description'] ?></p>
                                <div class="courses-price-border">
                                    <div class="courses-price">
                                        <div class="courses-price-left">
                                            <?php if($top_course['is_free_course']): ?>
                                                <h5><?php echo get_phrase('Free'); ?></h5>
                                            <?php elseif($top_course['discount_flag']): ?>
                                                <h5><?php echo currency($top_course['discounted_price']); ?></h5>
                                                <p class="mt-1"><del><?php echo currency($top_course['price']); ?></del></p>
                                            <?php else: ?>
                                                <h5><?php echo currency($top_course['price']); ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <div class="courses-price-right ">
                                            <p class="m-0"> <i class="fa-regular fa-clock p-0 text-15px"></i> <?php echo $course_duration; ?></p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </a>




                        <div id="top_course_feature_<?php echo $top_course['id']; ?>" class="course-popover-content">
                            <?php if ($top_course['last_modified'] == "") : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?></p>
                            <?php else : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?></p>
                            <?php endif; ?>
                            <div class="course-title">
                                 <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                            </div>
                            <div class="course-meta">
                                <?php if ($top_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php echo $course_duration; ?>
                                    </span>
                                <?php elseif ($top_course['course_type'] == 'h5p') : ?>
                                    <span class="badge bg-light"><?= site_phrase('h5p_course'); ?></span>
                                <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                <?php endif; ?>
                                <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                             </div>
                            <div class="course-subtitle">
                                 <?php echo $top_course['short_description']; ?>
                            </div>
                            <h6 class="text-black text-14px mb-1"><?php echo get_phrase('Outcomes') ?>:</h6>
                            <ul class="will-learn">
                                <?php $outcomes = json_decode($top_course['outcomes']);
                                foreach ($outcomes as $outcome) : ?>
                                    <li><?php echo $outcome; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="popover-btns">
                                <?php $cart_items = $this->session->userdata('cart_items'); ?>
                                <?php if(is_purchased($top_course['id'])): ?>
                                    <a href="<?php echo site_url('home/lesson/'.slugify($top_course['title']).'/'.$top_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('Start Now'); ?></a>
                                    <?php if ($top_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $top_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($top_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $top_course['id']); ?>"><?php echo get_phrase('Enroll Now'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('Remove from cart'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> <?php echo get_phrase('Add to cart'); ?>
                                        </a>
                                        <!-- Cart button ended-->
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#top_course_<?php echo $top_course['id']; ?>').webuiPopover({
                                        url:'#top_course_feature_<?php echo $top_course['id']; ?>',
                                        trigger:'hover',
                                        animation:'pop',
                                        cache:false,
                                        multi:true,
                                        direction:'rtl', 
                                        placement:'horizontal',
                                    });
                                });
                            </script>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section> -->
<!---------- Top courses Section End --------------->
<?php endif; ?>


<?php if(get_frontend_settings('latest_course_section') == 1): ?>
<!---------- Latest courses Section start --------------->
<section class="courses grid-view-body pb-4 bg_custom2" >
    <div class="container">
        <h1 class="text-center"><span><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></span></h1>
        <p class="text-center"><?php echo site_phrase('These_are_the_most_latest_courses_among_Listen_Courses_learners_worldwide')?></p>
        <div class="courses-card" >
            <div class="course-group-slider ">
                <?php
                $latest_courses = $this->crud_model->get_latest_10_course();
                foreach ($latest_courses as $latest_course) :
                    $lessons = $this->crud_model->get_lessons('course', $latest_course['id']);
                    $instructor_details = $this->user_model->get_all_user($latest_course['creator'])->row_array();
                    $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($latest_course['id']);
                    $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                    $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                    if ($number_of_ratings > 0) {
                        $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                    } else {
                        $average_ceil_rating = 0;
                    }
                    ?>
                    <div class="single-popup-course " >
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>" id="latest_course_<?php echo $latest_course['id']; ?>" class="checkPropagation courses-card-body" style="border: 2px dashed #ec6d9c !important;">
                            <div class="courses-card-image " >
                                <img loading="lazy" src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>">
                                <div class="courses-icon <?php if(in_array($latest_course['id'], $my_wishlist_items)) echo 'red-heart'; ?>" id="coursesWishlistIconLatestCourse<?php echo $latest_course['id']; ?>">
                                    <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('<?php echo site_url('home/toggleWishlistItems/'.$latest_course['id'].'/LatestCourse'); ?>')"></i>
                                </div>
                                <div class="courses-card-image-text">
                                    <h3><?php echo get_phrase($latest_course['level']); ?></h3>
                                </div> 
                            </div>
                            <div class="courses-text bg_custom3" >
                                <h5 class="mb-2"><?php echo $latest_course['title']; ?></h5>
                                <div class="review-icon">
                                    <div class="review-icon-star align-items-center">
                                        <p><?php echo $average_ceil_rating; ?></p>
                                        <p><i class="fa-solid fa-star <?php if($number_of_ratings > 0) echo 'filled'; ?>"></i></p>
                                        <p>(<?php echo $number_of_ratings; ?> <?php echo get_phrase('Reviews') ?>)</p>
                                    </div>
                                    <div class="review-btn d-flex align-items-center">
                                       <span class="compare-img checkPropagation" onclick="redirectTo('<?php echo base_url('home/compare?course-1='.slugify($latest_course['title']).'&course-id-1='.$latest_course['id']); ?>');">
                                            <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/compare.png') ?>">
                                            <?php echo get_phrase('Compare'); ?>
                                        </span>
                                    </div>
                                </div>
                                <p class="ellipsis-line-2"  ><?php echo $latest_course['short_description'] ?></p>
                                <div class="courses-price-border" >
                                    <div class="courses-price">
                                        <div class="courses-price-left">
                                            <?php if($latest_course['is_free_course']): ?>
                                                <h5><?php echo get_phrase('Free'); ?></h5>
                                            <?php elseif($latest_course['discount_flag']): ?>
                                                <h5  ><?php echo currency($latest_course['discounted_price']); ?></h5>
                                                <p class="mt-1"  ><del><?php echo currency($latest_course['price']); ?></del></p>
                                            <?php else: ?>
                                                <h5  ><?php echo currency($latest_course['price']); ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <div class="courses-price-right ">
                                            <p class="m-0"  ><i class="fa-regular fa-clock p-0 text-15px"></i> <?php echo $course_duration; ?></p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </a>




                        <div id="latest_course_feature_<?php echo $latest_course['id']; ?>" class="course-popover-content">
                            <?php if ($latest_course['last_modified'] == "") : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['date_added']); ?></p>
                            <?php else : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['last_modified']); ?></p>
                            <?php endif; ?>
                            <div class="course-title">
                                 <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"><?php echo $latest_course['title']; ?></a>
                            </div>
                            <div class="course-meta">
                                <?php if ($latest_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php echo $course_duration; ?>
                                    </span>
                                <?php elseif ($latest_course['course_type'] == 'h5p') : ?>
                                    <span class="badge bg-light"><?= site_phrase('h5p_course'); ?></span>
                                <?php elseif ($latest_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                <?php endif; ?>
                                <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($latest_course['language']); ?></span>
                             </div>
                            <div class="course-subtitle">
                                 <?php echo $latest_course['short_description']; ?>
                            </div>
                            <h6 class="text-black text-14px mb-1"><?php echo get_phrase('Outcomes') ?>:</h6>
                            <ul class="will-learn">
                                <?php $outcomes = json_decode($latest_course['outcomes']);
                                foreach ($outcomes as $outcome) : ?>
                                    <li><?php echo $outcome; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="popover-btns">
                                <?php $cart_items = $this->session->userdata('cart_items'); ?>
                                <?php if(is_purchased($latest_course['id'])): ?>
                                    <a href="<?php echo site_url('home/lesson/'.slugify($latest_course['title']).'/'.$latest_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('Start Now'); ?></a>
                                    <?php if ($latest_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $latest_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($latest_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $latest_course['id']); ?>"><?php echo get_phrase('Enroll Now'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('Remove from cart'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> <?php echo get_phrase('Add to cart'); ?>
                                        </a>
                                        <!-- Cart button ended-->
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#latest_course_<?php echo $latest_course['id']; ?>').webuiPopover({
                                        url:'#latest_course_feature_<?php echo $latest_course['id']; ?>',
                                        trigger:'hover',
                                        animation:'pop',
                                        cache:false,
                                        multi:true,
                                        direction:'rtl', 
                                        placement:'horizontal',
                                    });
                                });
                            </script>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
       <center>
            <div class=" justify-content-center align-items-center">
                    <button class="btn btn-zoom"> <a href="<?= base_url();?>sign_up" style="color: white !important"> <i class="fas fa-arrow-right me-2"></i> JOIN NOW <i class="fas fa-arrow-left me-2"></i> </a></button>
                </div>

            </center>
</section>
<!---------- Latest courses Section End --------------->
<?php endif; ?>


<div style="
    background-image: url('<?= basE_url();?>assets/frontend/img/home/map.png');
    background-size: cover;
    background-repeat: no-repeat;">

 <div class="container py-5" >
     
        <div class="row  justify-content-center ">
            <!-- Statistics Section -->
             <div class="col-lg-10 text-dark  mb-4">
        <h1 class="text-center"><span>World's Most Loved <span style="color:#ffbe17">Educational </span> Platform</span></h1>
        <p class="text-center mt-3">Choose us for a transformative learning experience tailored to your unique goals. Elevate your journey with expert guidance, innovative resources, and a community committed to your success.</p>

          </div>

            <div class="col-lg-6 mt-4">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                            <img src="<?= base_url();?>assets/frontend/img/home/cap.png" class="img-fluid" style="width: 30%;height: 80px">
                            <h1>25,000<span style="color:#45bcff">+</span></h1>
                            <p class="text-dark mt-2 mb-4" style="font-size: 16px">Students Enrolled</p>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                             <img src="<?= base_url();?>assets/frontend/img/home/education.png" class="img-fluid" style="width: 30%;height: 80px">
                            <h1>4<span style="color:#ed4883">+</span></h1>
                            <p  class="text-dark mt-2 mb-4" style="font-size: 16px">Years of Educational</p>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                            <img src="<?= base_url();?>assets/frontend/img/home/faculty.png" class="img-fluid" style="width: 30%;height: 80px">
                            <h1>25<span style="color:#ffb906">+</span></h1>
                            <p  class="text-dark mt-2 mb-4" style="font-size: 16px">Expert Faculties</p>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="stat-card">
                             <img src="<?= base_url();?>assets/frontend/img/home/country.png" class="img-fluid" style="width: 20%;height: 80px">
                            <h1>15<span style="color:#9747ff">+</span></h1>
                            <p  class="text-dark mt-2 mb-4" style="font-size: 16px">Number of Countries</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Globe Image Section -->
            <div class="col-lg-6">
                <img src="<?= base_url();?>assets/frontend/img/home/earthImg.png" width="90%" alt="Globe with locations" class="globe-img">
            </div>
        </div>
    </div>

</div>


<?php if(get_frontend_settings('top_instructor_section') == 1): ?>
<!---------  Expert Instructor Start ---------------->
<?php $top_instructor_ids = $this->crud_model->get_top_instructor(10); ?>
<?php if(count($top_instructor_ids) > 0): ?>
<section class="courses h-2-courses bg_custom2">
    <div class="conntainer">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-center mt-5"><?php echo get_phrase('Top Instructors') ?></h1>
                <p class="text-center mt-4 mb-4"><?php echo get_phrase('They efficiently serve large number of students on our platform') ?></p>
            </div>
        </div>
        <div class="container">
            <div class="h-2-instructor eInstructor2">
                <div class="row justify-content-center">
                    <?php foreach($top_instructor_ids as $top_instructor_id):
                    $top_instructor = $this->user_model->get_all_user($top_instructor_id['creator'])->row_array();
                    $social_links  = json_decode($top_instructor['social_links'], true); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="h-2-instructor-full">
                                <div class="h-2-instructor-image">
                                    <img loading="lazy" src="<?php echo $this->user_model->get_user_image_url($top_instructor['id']); ?>" alt="">
                                    <div class="icon">
                                       <?php if($social_links['facebook']): ?>
                                            <a class="" href="<?php echo $social_links['facebook']; ?>" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($social_links['twitter']): ?>
                                            <a class="" href="<?php echo $social_links['twitter']; ?>" target="_blank">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($social_links['linkedin']): ?>
                                            <a class="" href="<?php echo $social_links['linkedin']; ?>" target="_blank">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="h-2-instructor-text">
                                    <a class="text-muted" href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                                        <h3><?php echo $top_instructor['first_name'].' '.$top_instructor['last_name']; ?></h3>
                                        <p class="ellipsis-line-2 px-3"><?php echo $top_instructor['title']; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>   
    </div>
</section>
<?php endif; ?>
<!---------  Expert Instructor end ---------------->
<?php endif; ?>

<?php if(get_frontend_settings('motivational_speech_section') == 1): ?>
<!---------  Motivetional Speech Start ---------------->
<?php $motivational_speechs = json_decode(get_frontend_settings('motivational_speech'), true); ?>
<?php if(count($motivational_speechs) > 0): ?>
<section class="expert-instructor top-categories pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <h1 class="text-center mt-4"><?php echo get_phrase('Think more clearly'); ?></h1>
        <p class="text-center mt-4 mb-4"><?php echo get_phrase('Gather your thoughts, and make your decisions clearly') ?></p>
      </div>
      <div class="col-lg-3"></div>
    </div>
    <ul class="speech-items">
        <?php foreach($motivational_speechs as $key => $motivational_speech): ?>
        <li>
            <div class="speech-item">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="speech-item-img">
                            <img loading="lazy" src="<?php echo site_url('uploads/system/motivations/'.$motivational_speech['image']) ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="speech-item-content">
                            <p class="no"><?php echo ++$key; ?></p>
                            <div class="inner">
                                <h4 class="title">
                                    <?php echo $motivational_speech['title']; ?>
                                </h4>
                                <p class="info">
                                    <?php echo nl2br($motivational_speech['description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
<!---------  Motivetional Speech end ---------------->
<?php endif; ?>

<?php if(get_frontend_settings('faq_section') == 1): ?>
<?php $website_faqs = json_decode(get_frontend_settings('website_faqs'), true); ?>
<?php if(count($website_faqs) > 0): ?>
<!---------- Questions Section Start  -------------->
<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h1 class="text-center mt-4"><?php echo get_phrase('Frequently Asked Questions') ?></h1>
                <p class="text-center mt-4 mb-5"><?php echo get_phrase('Have something to know?') ?> <?php echo get_phrase('Check here if you have any questions about us.') ?></p>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center pb-5">
                <img loading="lazy" width="80%" src="<?php echo site_url('assets/frontend/default-new/image/faq2.jpg') ?>">
            </div>
            <div class="col-md-6">
                <div class="faq-accrodion mb-0">
                    <div class="accordion" id="accordionFaq">
                        <?php foreach($website_faqs as $key => $faq): ?>
                            <?php if($key > 4) break; ?>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="<?php echo 'faqItemHeading'.$key; ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'faqItempanel'.$key; ?>" aria-expanded="true" aria-controls="<?php echo 'faqItempanel'.$key; ?>">
                                    <?php echo $faq['question']; ?>
                                </button>
                              </h2>
                              <div id="<?php echo 'faqItempanel'.$key; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo 'faqItemHeading'.$key; ?>"  data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p><?php echo nl2br($faq['answer']); ?></p>
                                </div>
                              </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if(count($website_faqs) > 5): ?>
                        <a href="<?php echo site_url('home/faq') ?>" class="btn btn-primary mt-5"><?php echo get_phrase('See More'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Questions Section End  -------------->
<?php endif; ?>
<?php endif; ?>


<?php if(get_frontend_settings('blog_visibility_on_the_home_page') == 1): ?>
<!------------- Blog Section Start ------------>
<?php $latest_blogs = $this->crud_model->get_latest_blogs(3); ?>
<?php if($latest_blogs->num_rows() > 0): ?>
<section class="courses blog bg_custom1">
    <div class="container">
        <h1 class="text-center"><span><?php echo site_phrase('Visit our latest blogs')?></span></h1>
        <p class="text-center"><?php echo site_phrase('Visit our valuable articles to get more information.')?>
        <div class="courses-card">
            <div class="row">
               <?php foreach($latest_blogs->result_array() as $latest_blog):
                $user_details = $this->user_model->get_all_user($latest_blog['user_id'])->row_array();
                $blog_category = $this->crud_model->get_blog_categories($latest_blog['blog_category_id'])->row_array(); ?>  
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="<?php echo site_url('blog/details/'.slugify($latest_blog['title']).'/'.$latest_blog['blog_id']); ?>" class="courses-card-body">
                        <div class="courses-card-image bg_custom3"> 
                            <?php $blog_thumbnail = 'uploads/blog/thumbnail/'.$latest_blog['thumbnail'];
                               if(!file_exists($blog_thumbnail) || !is_file($blog_thumbnail)):
                                   $blog_thumbnail = base_url('uploads/blog/thumbnail/placeholder.png');
                              endif; ?>
                            <div class="courses-card-image">
                             <img loading="lazy" src="<?php echo $blog_thumbnail; ?>">
                            </div>
                            <div class="courses-card-image-text bg_custom1">
                                <h3><?php echo $blog_category['title']; ?></h3>
                            </div> 
                        </div>
                        <div class="courses-text bg_custom3">
                            <h5><?php echo $latest_blog['title']; ?></h5>
                            <p class="ellipsis-line-2"  ><?php echo ellipsis(strip_tags(htmlspecialchars_decode_($latest_blog['description'])), 150); ?></p>
                            <div class="courses-price-border">
                                <div class="courses-price">
                                    <div class="courses-price-left">
                                        <img loading="lazy" class="rounded-circle" src="<?php echo $this->user_model->get_user_image_url($user_details['id']); ?>">
                                        <h5><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></h5>
                                    </div>
                                    <div class="courses-price-right ">
                                        <p  ><?php echo get_past_time($latest_blog['added_date']); ?></p>
                                    </div>
                                </div>
                            </div>
                           </div>
                     </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php if(get_frontend_settings('promotional_section') == 1): ?>
<!------------- Become Students Section start --------->
<section class="student eStudent estudent2 bg_custom2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  <?php if (get_settings('allow_instructor') != 1) echo 'w-100'; ?>">
                <div class="student-body-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="student-body-text">
                                <!-- <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/2.png')?>"> -->
                                <h1><?php echo site_phrase('Learn from our quality instructors!'); ?></h1>
                                <p><?php echo site_phrase('Teach_thousands_of_students_and_earn_money!')?> </p>
                                <a href="<?php echo site_url('sign_up'); ?>"><?php echo site_phrase('get_started'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <!-- <img loading="lazy" class="man" src="<?php echo base_url('assets/frontend/default-new/image/student-1.png')?>"> -->
                        </div>
                     </div>
                </div>      
            </div>
            <?php if (get_settings('allow_instructor') == 1) : ?>
                <div class="col-lg-6 ">
                    <div class="student-body-2">
                    <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
                                <div class="student-body-text">
                                  <!-- <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/2.png')?>"> -->
                                    <h1><?php echo site_phrase('become_a_new_instructor'); ?></h1>
                                    <p><?php echo site_phrase('Teach_thousands_of_students_and_earn_money!')?> </p>
                                    <?php if($this->session->userdata('user_id')): ?>
                                       <a  href="<?php echo site_url('user/become_an_instructor'); ?>"><?php echo site_phrase('join_now'); ?></a>
                                      <?php else: ?>
                                        <a  href="<?php echo site_url('sign_up?instructor=yes'); ?>"><?php echo site_phrase('join_now'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                               <!-- <img loading="lazy" class="man" src="<?php echo base_url('assets/frontend/default-new/image/student-2.png')?>"> -->
                            </div>
                        </div>  
                    </div> 
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!------------- Become Students Section End --------->


<style>
    .testimonial-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .testimonial-img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .testimonial-name {
      font-weight: bold;
      margin-bottom: 5px;
    }
    .testimonial-role {
      color: #777;
      font-size: 0.9rem;
    }
  </style>

   <div class="container mt-5 mb-5">
    <h1 class="text-center mb-4"><span>Testimonials </span> </h1>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- First slide -->
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">John Doe</h5>
                <p class="testimonial-role">Web Developer</p>
                <p>"Bootstrap makes web development so much easier and faster!"</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">Jane Smith</h5>
                <p class="testimonial-role">UI/UX Designer</p>
                <p>"I love the flexibility and the built-in responsive design in Bootstrap!"</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">Mike Johnson</h5>
                <p class="testimonial-role">Project Manager</p>
                <p>"Using Bootstrap saves so much development time. It's a game-changer!"</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Second slide -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">Emily Davis</h5>
                <p class="testimonial-role">Software Engineer</p>
                <p>"Bootstrap is my go-to framework for every project. It's so reliable."</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">Chris Wilson</h5>
                <p class="testimonial-role">Freelancer</p>
                <p>"With Bootstrap, I can deliver professional websites much faster."</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="testimonial-card">
                <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" alt="User" class="testimonial-img">
                <h5 class="testimonial-name">Sarah Brown</h5>
                <p class="testimonial-role">Digital Marketer</p>
                <p>"It's easy to use and offers great results, even for non-developers like me!"</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
             <center>
            <div class=" justify-content-center align-items-center">
                    <button class="btn btn-zoom"> <a href="<?= base_url();?>sign_up" style="color: white !important"> <i class="fas fa-arrow-right me-2"></i> JOIN NOW <i class="fas fa-arrow-left me-2"></i> </a></button>
                </div>

            </center>


  </div>


 <div class="container mt-5 mb-4">
    <h1 class="text-center mb-4"> <span> Our Clients </span></h1>
    <div class="row g-4  justify-content-center align-items-center">
      <!-- Client 1 -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="client-logo-card">
          <img src="<?= base_url();?>assets/frontend/img/client/client1.jpeg" alt="Client 1 Logo" class="client-logo rounded">
          <p class="client-name text-white">Biryani Bar</p>
        </div>
      </div>
      <!-- Client 2 -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="client-logo-card">
           <img src="<?= base_url();?>assets/frontend/img/client/client2.jpeg" alt="Client 1 Logo" class="client-logo rounded">
          <p class="client-name  text-white">Ginger & Honey Cafe</p>
        </div>
      </div>
     
    </div>
  </div>

   <style>
    .client-logo-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    .client-logo-card:hover {
      transform: scale(1.05);
    }
    .client-logo {
      width: 100px;
      height: auto;
      margin-bottom: 10px;
    }
    .client-name {
      font-weight: bold;
      margin-top: 10px;
    }
  </style>