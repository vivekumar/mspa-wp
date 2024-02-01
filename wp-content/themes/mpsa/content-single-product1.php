<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
   echo get_the_password_form(); // WPCS: XSS ok.
   return;
}
?>
<?php
// Assuming $product is your WooCommerce product object
$product_id = $product->get_id();
$product_gallery_ids = $product->get_gallery_image_ids();
?>
<!-- Breadcrumb End -->
<!-- Product Section Start -->
<section class="product-page product-style5">
   <div class="container-lg">
      <?php
      /**
       * Hook: woocommerce_before_single_product_summary.
       *
       * @hooked woocommerce_show_product_sale_flash - 10
       * @hooked woocommerce_show_product_images - 20
       */
      do_action('woocommerce_before_single_product_summary');
      ?>
      <div class="row g-3 g-xl-4 view-product ratio_asos">
         <div class="col-md-6 grid-img">
            <div class="slider-box sticky off-50 position-sticky">
               <div class="row g-2">
                  <div class="col-12 ratio_square">
                     <div class="swiper mainslider4">
                        <div class="swiper-wrapper">

                           <?php
                           // Display the main product image
                           $image_url = wp_get_attachment_image_url(get_post_thumbnail_id($product_id), 'full');
                           ?>
                           <div class="swiper-slide">
                              <img src="<?php echo esc_url($image_url); ?>" alt="feature img" class="bg-img">
                           </div>

                           <?php
                           // Display product gallery images
                           foreach ($product_gallery_ids as $gallery_image_id) {
                              $gallery_image_url = wp_get_attachment_image_url($gallery_image_id, 'full');
                           ?>
                              <div class="swiper-slide">
                                 <img src="<?php echo esc_url($gallery_image_url); ?>" alt="feature img" class="bg-img">
                              </div>
                           <?php } ?>

                        </div>
                     </div>
                  </div>

                  <div class="col-12">
                     <div class="thumbnail-box">
                        <div class="swiper thumbnail-img-box thumbnailSlider4">
                           <div class="swiper-wrapper">
                              <?php
                              // Display product gallery thumbnails
                              foreach ($product_gallery_ids as $gallery_image_id) {
                                 $gallery_image_url = wp_get_attachment_image_url($gallery_image_id, 'thumbnail');
                              ?>
                                 <div class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_image_url); ?>" alt="thumbnail" class="img-fluid">
                                 </div>
                              <?php } ?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="product-detail-box sticky off-88">
               <div class="product-option">
                  <h2><?php the_title() ?></h2>
                  <?php
                  /**
                   * Hook: woocommerce_single_product_summary.
                   *
                   * @hooked woocommerce_template_single_title - 5
                   * @hooked woocommerce_template_single_rating - 10
                   * @hooked woocommerce_template_single_price - 10
                   * @hooked woocommerce_template_single_excerpt - 20
                   * @hooked woocommerce_template_single_add_to_cart - 30
                   * @hooked woocommerce_template_single_meta - 40
                   * @hooked woocommerce_template_single_sharing - 50
                   * @hooked WC_Structured_Data::generate_product_data() - 60
                   */
                  do_action('woocommerce_single_product_summary');
                  ?>
               </div>

            </div>
            <div class="product-option">
               <h2><?php the_title() ?></h2>
               <div class="option rating-option">

                  <ul class="rating p-0">
                     <li>
                        <i class="fill" data-feather="star"></i>
                     </li>
                     <li>
                        <i class="fill" data-feather="star"></i>
                     </li>
                     <li>
                        <i class="fill" data-feather="star"></i>
                     </li>
                     <li>
                        <i class="fill" data-feather="star"></i>
                     </li>
                     <li>
                        <i data-feather="star"></i>
                     </li>
                  </ul>
                  <span>120 Rating</span>
               </div>
               <div class="option price">
                  <span> 13995,00 kr </span>
                  <del>17995,00 kr</del>
               </div>
               <div class="option">
                  <p class="content-color">Vill du njuta av lyxen att ha ditt eget spa hemma? Vi har precis
                     lanserat vår nya Mono Frame, en revolutionerande uppblåsbar spabadsmodell med plats för upp
                     till 8 personer.</p>

               </div>
               <div class="option-side color-side">

                  <div class="option">
                     <div class="title-box4">
                        <h4 class="heading">Quantity: <span class="bg-theme-blue"></span>
                        </h4>
                     </div>
                     <div class="plus-minus">
                        <i class="sub" data-feather="minus"></i>
                        <input type="number" value="1" min="1" max="10" />
                        <i class="add" data-feather="plus"></i>
                     </div>
                  </div>
               </div>
               <div class="option sale-details">
                  <div class="title-box4">
                     <h4 class="heading">Sale End In <span class="bg-theme-blue"></span>
                     </h4>
                  </div>
                  <ul class="timer">
                     <li>
                        <span class="days time-value"></span>
                        <span class="timer-label">Days</span>
                     </li>
                     <li>
                        <span class="hours time-value"></span>
                        <span class="timer-label">Hours</span>
                     </li>
                     <li>
                        <span class="minutes time-value"></span>
                        <span class="timer-label">Minute</span>
                     </li>
                     <li>
                        <span class="seconds time-value"></span>
                        <span class="timer-label">Seconds</span>
                     </li>
                  </ul>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="option shipping-info">
                        <div class="title-box1">
                           <h4 class="heading">Fraktfri leverans! <span class="bg-theme-blue"></span></h4>
                           <h4 class="heading">Finns i lager - Leveranstid ca 2-5 dagar <span class="bg-theme-blue"></span></h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="btn-group">
                  <a href="javascript:void(0)" class="btn-solid btn-sm addtocart-btn">Lägg i varukorgen </a>
                  <a href="javascript:void(0)" class="btn-outline btn-sm wishlist-btn">Add To Wishlist</a>
               </div>
            </div>
         </div>
      </div>
      
      <!-- Tabs Start -->
      <div class="description-box">
         <div class="row gy-4">
            <div class="col-12">
               <!-- Tabs Filter Start -->
               <ul class="nav nav-pills nav-tabs3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="description-tab" data-bs-toggle="pill" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> Description </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="specification-tab" data-bs-toggle="pill" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false"> Specifikationer </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="seller-tab" data-bs-toggle="pill" data-bs-target="#seller" type="button" role="tab" aria-controls="seller" aria-selected="false">Beskrivning</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="review-tab" data-bs-toggle="pill" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> Review <span>3</span>
                     </button>
                  </li>
               </ul>
               <!-- Tabs Filter End -->
            </div>
            <div class="col-12">
               <!-- Tab Content Start -->
               <div class="tab-content" id="pills-tabContent">
                  <!-- Description Tab Content Start -->
                  <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                     <div class="details-product">
                        <p>Vill du njuta av lyxen att ha ditt eget spa hemma? Vi har precis lanserat vår nya Mono
                           Frame, en revolutionerande uppblåsbar spabadsmodell med plats för upp till 8 personer.</p>
                        <p>Mono Frame är utrustad med en ny, allt-i-ett kontrollbox med mobilapp för enkel styrning.
                           Nu kan du njuta av alla funktionerna i ditt spabad från din mobiltelefon och styra
                           temperaturen för bästa driftsekonomi. Med en kraftfull 2200 W värmare är uppvärmningen
                           effektivare och mer ekonomisk.</p>
                        <p>Med 144 Airjets kan du uppleva en avkopplande vattenmassage som kommer att lindra stress
                           och muskelspänningar.</p>
                        <p>Den nya utformningen erbjuder också komforthöjande sittkuddar och nödvändiga isoleringar
                           för att hålla dig bekväm och varm.
                           Mono Frame filterreningssystemet erbjuder reningssystem för att du ska kunna bada i
                           kristallklart vatten; smart filtration system, UV-lampa och ozonrengöring för att döda
                           bakterier, mikroorganismer med mera.</p>
                        <p>Denna uppblåsbara spabad kan rymma upp till 1120 liter och även användas året runt vid
                           temperaturer ned till -30 grader.
                           Modellen är lätt att installera och ansluts bara till vanligt eluttag på 230V/10A.</p>
                        <p>Beställ din Mono Frame redan idag och upplev det ultimata spaupplevelsen hemma!</p>


                        <div class="row g-3 g-lg-4 ratio_landscape mb-3">
                           <div class="col-md-4">
                              <div class="frame-wrap">
                                 <img class="bg-img" src="assets/images/product/7-5.jpg" alt="product-img" />
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="speciation-summery">
                                 <ul class="general-summery">
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Fraktfri leverans!</span>
                                    </li>
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Finns i lager - Leveranstid ca 2-5 dagar</span>
                                    </li>
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                                    </li>
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                                    </li>
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                                    </li>
                                    <li>
                                       <i data-feather="check-circle"></i>
                                       <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- Description Tab Content End -->
                  <!-- Specification Tab Content Start -->
                  <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                     <div class="specification-wrap">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam unde impedit magnam
                           suscipit quis incidunt voluptas minima dolore iste quae explicabo saepe accusamus, vero,
                           sed architecto, velit inventore itaque ea. </p>
                        <div class="table-responsive">
                           <table class="specification-table table striped d-none">
                              <tr>
                                 <th>Product Dimensions</th>
                                 <td>15 x 15 x 3 cm; 250 Grams</td>
                              </tr>
                              <tr>
                                 <th>Date First Available</th>
                                 <td>5 April 2021</td>
                              </tr>
                              <tr>
                                 <th>Manufacturer</th>
                                 <td>Aditya Birla and Retail Limited</td>
                              </tr>
                              <tr>
                                 <th>ASIN</th>
                                 <td>B06Y28LCDN</td>
                              </tr>
                              <tr>
                                 <th>Item model number</th>
                                 <td>AMKP317G04244</td>
                              </tr>
                              <tr>
                                 <th>Department</th>
                                 <td>Men</td>
                              </tr>
                              <tr>
                                 <th>Item Weight</th>
                                 <td>250 G</td>
                              </tr>
                              <tr>
                                 <th>Item Dimensions LxWxH</th>
                                 <td>15 x 15 x 3 Centimeters</td>
                              </tr>
                              <tr>
                                 <th>Net Quantity</th>
                                 <td>1 U</td>
                              </tr>
                              <tr>
                                 <th>Included Components</th>
                                 <td>1-T-shirt</td>
                              </tr>
                              <tr>
                                 <th>Generic Name</th>
                                 <td>T-shirt</td>
                              </tr>
                           </table>
                           <ul class="ul_list">
                              <li>Plats för 8 personer</li>
                              <li>App-funktion via Wifi.</li>
                              <li>Rymmer 1600 liter</li>
                              <li>Värmer till 42°</li>
                              <li>144 st airjets</li>
                              <li>Värmare 2200W (värmer 1,2 - 1,8 grader/tim)</li>
                              <li>Lock i syntetiskt läder med säkerhetslås, integrerat isolerlock & smarta
                                 klickfästen</li>
                              <li>Integrerad tömningsventil för enkelt vattenbyte</li>
                              <li>Förstärkt PVC-golv / Isoleringsmatta</li>
                              <li>Bubbelpump 720W/1HP</li>
                              <li>Filterpump 1800L/h, 60W, 12V</li>
                              <li>Timerinställning</li>
                              <li>Barnlås</li>
                              <li>Allt-i-ett kontrollbox</li>
                              <li>Integrerad ozonrening</li>
                              <li>UV-lampa för optimal vattenkvalité</li>
                              <li>Innermått 181 cm</li>
                              <li>Yttermått 192 cm</li>
                              <li>Höjd 65 cm</li>
                              <li>Vikt 39,5 kg</li>
                              <li>Lätt installation (ansluts till vanligt eluttag 230V/10A)</li>
                           </ul>

                           <h3>Ladda ner</h3>
                           <a href="#" class="btn-style2">Bruksanvisning</a>
                        </div>
                     </div>
                  </div>
                  <!-- Specification Tab Content End -->
                  <!-- Seller Tab Content Start -->
                  <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                     <div class="seller-info">
                        <div class="seller-details">
                           <div class="seller-logo-wrap">
                              <div class="img-box">
                                 <img src="assets/icons/png/seller.png" alt="seller" />
                              </div>
                              <div class="seller-content">
                                 <h5>Vår största nyhet 2023!</h5>
                              </div>
                           </div>
                        </div>
                        <div class="addres-box">
                           <p><span>Vår största nyhet 2023!</span></p>
                           <p class="info">Detta spabad rymmer hela 1120 liter och här badar man upp till 8 personer
                              året
                              runt dessutom ner till 30 minusgrader. Nu kan du styra Spabadet via mobil app där du
                              övervakar alla
                              funktioner och även kan styra värmen för bästa driftsekonomi. Den nya värmaren är på
                              hela 2200 W och
                              gör uppvärmningen effektivare och mer ekonomisk. Som i alla ”Top of the line” modeller
                              från M-spa så
                              erbjuder Mono hela tre olika reningssystem för att du skall kunna bada i kristallklart
                              vatten. Filterrening
                              genom smart filtration system, UV-lampa samt Ozonrengöring för att döda bakterier,
                              mikroorganismer
                              m fl. Njut av 144 st kraftfulla micro airjets som du enkelt justerar efter eget behov i
                              tre olika steg.
                              Modellen har också komforthöjande sittkuddar i botten samt integrerat isolerlock för
                              att spara energi.
                              Bottenmattan är isolerad och i nytt halkfritt material. Alla funktioner som finns i
                              appen kan även styras
                              på den diskreta motorboxen. Mono Frame installerar ni helt själva på ca 30 minuter,
                              sedan väntar
                              många timmars njutning i varmt rogivande vatten.</p>

                           <ul class="ul_list mt-5">
                              <li><a href="#">Ladda ner appen M-Spa Link till iOS enhet </a></li>
                              <li><a href="#">Ladda ner appen M-Spa Link till Android</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- Seller Tab Content End -->
                  <!-- Review Tab Content Start -->
                  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                     <div class="review-section">
                        <div class="row gy-4 gy-md-5 g-4 g-xxl-5">
                           <div class="col-md-8 col-xxl-7 order-2 order-md-1">
                              <div class="review-left">
                                 <div class="title-box4">
                                    <h4 class="heading">Customers Q & A <span class="bg-theme-blue"></span>
                                    </h4>
                                 </div>
                                 <div class="question-wrap">
                                    <div class="comment-box">
                                       <div class="img-box">
                                          <img src="assets/images/avatar/avatar.jpg" alt="avatar" />
                                       </div>
                                       <div class="avatar-content">
                                          <div class="name-box">
                                             <div class="user-info">
                                                <h5>
                                                   <i data-feather="user"></i> Anne R. Allen
                                                </h5>
                                                <span>
                                                   <i data-feather="clock"></i> Aug 29, 2022 </span>
                                             </div>
                                             <div class="action-box ms-auto">
                                                <ul class="rating p-0 mb d-none d-xl-flex">
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                </ul>
                                                <a href="#replaySection" class="replay-btn">
                                                   <i data-feather="corner-up-left"></i> Replay </a>
                                             </div>
                                          </div>
                                          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio
                                             eum, facilis sit cum, quisquam voluptatum laborum dolorem molestias
                                             accusantium aut quos, aliquam necessitatibus aliquid officia ea incidunt
                                             molestiae ad?</p>
                                       </div>
                                    </div>
                                    <div class="comment-box replay-comment">
                                       <div class="img-box">
                                          <img src="assets/images/avatar/avatar2.jpg" alt="avatar" />
                                       </div>
                                       <div class="avatar-content">
                                          <div class="name-box">
                                             <div class="user-info">
                                                <h5>
                                                   <i data-feather="user"></i> Francisco M. Clifton
                                                </h5>
                                                <span>
                                                   <i data-feather="clock"></i> July 15, 2022 </span>
                                             </div>
                                             <div class="action-box ms-auto">
                                                <ul class="rating p-0 mb d-none d-xl-flex">
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i data-feather="star"></i>
                                                   </li>
                                                </ul>
                                                <a href="#replaySection" class="replay-btn">
                                                   <i data-feather="corner-up-left"></i> Replay </a>
                                             </div>
                                          </div>
                                          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deleniti
                                             veritatis hic. Sapiente, impedit! Vitae dicta beatae aut nemo voluptas,
                                             obcaecati aspernatur explicabo magnam id dolorum accusamus impedit
                                             eligendi ad!</p>
                                       </div>
                                    </div>
                                    <div class="comment-box">
                                       <div class="img-box">
                                          <img src="assets/images/avatar/avatar4.jpg" alt="avatar" />
                                       </div>
                                       <div class="avatar-content">
                                          <div class="name-box">
                                             <div class="user-info">
                                                <h5>
                                                   <i data-feather="user"></i> Jacquelyn R. Planet
                                                </h5>
                                                <span>
                                                   <i data-feather="clock"></i> August 20, 2022 </span>
                                             </div>
                                             <div class="action-box ms-auto">
                                                <ul class="rating p-0 mb d-none d-xl-flex">
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i class="fill" data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i data-feather="star"></i>
                                                   </li>
                                                   <li>
                                                      <i data-feather="star"></i>
                                                   </li>
                                                </ul>
                                                <a href="#replaySection" class="replay-btn">
                                                   <i data-feather="corner-up-left"></i> Replay </a>
                                             </div>
                                          </div>
                                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi minima,
                                             commodi non doloremque autem inventore porro cum fuga nisi id.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Reply From Section Start -->
                              <div class="replay-form round-wrap-content top-space" id="replaySection">
                                 <div class="title-box4">
                                    <h4 class="heading">Leave a Comment <span class="bg-theme-blue"></span>
                                    </h4>
                                 </div>
                                 <form action="javascript:void(0)" class="custom-form form-pill">
                                    <div class="row g-3 g-sm-4">
                                       <div class="col-sm-6">
                                          <div class="input-box">
                                             <label for="name">Full Name</label>
                                             <input name="name" id="name" type="text" class="form-control" />
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="input-box">
                                             <label for="email">Email Address</label>
                                             <input name="email" id="email" type="email" class="form-control" />
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="input-box">
                                             <label for="comment">Comments</label>
                                             <textarea class="form-control" id="comment" cols="30" rows="5"></textarea>
                                          </div>
                                       </div>
                                       <div class="col-12 text-end">
                                          <button class="post-button btn btn-solid btn-sm mb-line">Post Comment <i class="arrow"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <!-- Reply From Section End -->
                           </div>
                           <div class="col-md-4 col-xxl-5 order-1 order-md-2">
                              <div class="review-right sticky">
                                 <div class="customer-rating">
                                    <div class="title-box4">
                                       <h4 class="heading">Customers Review <span class="bg-theme-blue"></span>
                                       </h4>
                                    </div>
                                    <div class="global-rating">
                                       <div>
                                          <h5>4.5</h5>
                                       </div>
                                       <div>
                                          <h6>Average Ratings</h6>
                                          <ul class="rating p-0 mb">
                                             <li>
                                                <i class="fill" data-feather="star"></i>
                                             </li>
                                             <li>
                                                <i class="fill" data-feather="star"></i>
                                             </li>
                                             <li>
                                                <i class="fill" data-feather="star"></i>
                                             </li>
                                             <li>
                                                <i class="fill" data-feather="star"></i>
                                             </li>
                                             <li>
                                                <i data-feather="star"></i>
                                             </li>
                                             <li>
                                                <span>(12)</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <ul class="rating-progess">
                                       <li>
                                          <h5>5 Star</h5>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h5>78%</h5>
                                       </li>
                                       <li>
                                          <h5>4 Star</h5>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h5>62%</h5>
                                       </li>
                                       <li>
                                          <h5>3 Star</h5>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h5>44%</h5>
                                       </li>
                                       <li>
                                          <h5>2 Star</h5>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h5>30%</h5>
                                       </li>
                                       <li>
                                          <h5>1 Star</h5>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h5>18%</h5>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Review Tab Content End -->
               </div>
               <!-- Tab Content End -->
            </div>
         </div>
      </div>
      <!-- Tabs End -->
   </div>
</section>
<!-- Product Section End -->
<?php
      /**
       * Hook: woocommerce_after_single_product_summary.
       *
       * @hooked woocommerce_output_product_data_tabs - 10
       * @hooked woocommerce_upsell_display - 15
       * @hooked woocommerce_output_related_products - 20
       */
      do_action('woocommerce_after_single_product_summary');
      ?>
<!-- New Arrived Section Start -->
<section class="pt-0 ratio_asos">
   <div class="container-lg">
      <div class="title-box4">
         <h4 class="heading font-2xl">Vi rekommenderar/- köp till <span class="bg-theme-blue"></span>
         </h4>
      </div>
      <div class="swiper product-slider">
         <div class="swiper-wrapper">
            <?php

            $args =  array(
               'post_type'            => 'product',
               'post__not_in'         => array($product->id)
            );

            $products = new WP_Query($args);


            if ($products->have_posts()) : ?>
               <?php while ($products->have_posts()) : $products->the_post(); ?>
                  <?php wc_get_template_part('content', 'product'); ?>
               <?php endwhile; // end of the loop. 
               ?>
            <?php endif;
            wp_reset_postdata();
            ?>
         </div>
      </div>
   </div>
</section>
<!-- New Arrived Section End -->


<?php do_action('woocommerce_after_single_product'); ?>