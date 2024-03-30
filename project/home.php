<?php

include 'components/connect.php';

if (isset ($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>


   <!-- home section starts  -->

   <div class="home">
      <section class="center">
         <form action="search.php" method="post">

            <h3>FIND YOU PERFECT HOME</h3>
            <div class="box">
               <p>Enter location <span>*</span></p>
               <input type="text" name="h_location" required maxlength="100" placeholder="Enter property's city"
                  class="input">
            </div>
            <div class="flex">
               <div class="box">
                  <p>Property type <span>*</span></p>
                  <select name="h_type" class="input" required>
                     <option value="flat">Flat</option>
                     <option value="house">House</option>
                     <option value="villa">Villa</option>
                     <option value="shop">Shop</option>
                  </select>
               </div>
               <div class="box">
                  <p>Offer type <span>*</span></p>
                  <select name="h_offer" class="input" required>
                     <option value="sale">Sale</option>
                     <option value="resale">Resale</option>
                     <option value="rent">Rent</option>
                  </select>
               </div>
               <div class="box">
                  <p>Minimum budget <span>*</span></p>
                  <select name="h_min" class="input" required>
                     <option value="5000">500MAD</option>
                     <option value="10000">1000MAD</option>
                     <option value="15000">1500MAD</option>
                     <option value="20000">2000MAD</option>
                     <option value="2500">2500MAD</option>
                     <option value="3000">3000MAD</option>
                     <option value="3500">3500MAD</option>
                     <option value="4000">4000MAD</option>
                     <option value="4500">4500MAD</option>
                     <option value="5000">5000MAD</option>
                     <option value="6000">6000MAD</option>
                     <option value="7000">7000MAD</option>
                     <option value="8000">8000MAD</option>
                     <option value="9000">9000MAD</option>
                     <option value="1000 0">1000 0MAD</option>
                     <option value="15 000">15 000 MAD</option>
                     <option value="20 00000">20 000 MAD</option>
                     <option value="25 000">25 000 MAD</option>
                     <option value="30 000">30 000 MAD</option>
                     <option value="35 000">35 000 MAD</option>
                     <option value="40 000">40 000 MAD</option>
                     <option value="45 000">45 000 MAD</option>
                     <option value="50 000">50 000 MAD</option>
                     <option value="60 000">60 000 MAD</option>
                     <option value="65 000">65 000 MAD</option>
                     <option value="70 000">70 000MAD</option>
                     <option value="75 000">75 000MAD</option>
                     <option value="80 000">80 000MAD</option>
                     <option value="85 000">85 000MAD</option>
                     <option value="90 000">90 000MAD</option>
                     <option value="95 000">95 000MAD</option>
                     <option value="100 000">100 000MAD</option>
                     <option value="110 000">110 000MAD</option>
                     <option value="120 000">120 000MAD</option>
                     <option value="130 000">130 000MAD</option>
                     <option value="140 000">140 000MAD</option>
                     <option value="150 000">150 000MAD</option>
                     <option value="160 000">160 000MAD</option>
                     <option value="170 000">170 000MAD</option>
                     <option value="180 000">180 000MAD</option>
                     <option value="190 000">190 000MAD</option>
                     <option value="200 000">200 000MAD</option>
                     <option value="300 000">300 000MAD</option>
                     <option value="400 000">400 000MAD</option>
                     <option value="500 000">500 000MAD</option>
                     <option value="600 000">600 000MAD</option>
                     <option value="700 000">700 000MAD</option>
                     <option value="700 000">700 000MAD</option>
                     <option value="800 000">800 000MAD</option>
                     <option value="900 000">900 000MAD</option>
                     <option value="1 000 000">1 000 000MAD</option>
                     <option value="more">--more--</option>
                  </select>
               </div>
               <div class="box">
                  <p>Maximum budget <span>*</span></p>
                  <select name="h_max" class="input" required>
                     <option value="5000">500MAD</option>
                     <option value="10000">1000MAD</option>
                     <option value="15000">1500MAD</option>
                     <option value="20000">2000MAD</option>
                     <option value="2500">2500MAD</option>
                     <option value="3000">3000MAD</option>
                     <option value="3500">3500MAD</option>
                     <option value="4000">4000MAD</option>
                     <option value="4500">4500MAD</option>
                     <option value="5000">5000MAD</option>
                     <option value="6000">6000MAD</option>
                     <option value="7000">7000MAD</option>
                     <option value="8000">8000MAD</option>
                     <option value="9000">9000MAD</option>
                     <option value="1000 0">1000 0MAD</option>
                     <option value="15 000">15 000 MAD</option>
                     <option value="20 00000">20 000 MAD</option>
                     <option value="25 000">25 000 MAD</option>
                     <option value="30 000">30 000 MAD</option>
                     <option value="35 000">35 000 MAD</option>
                     <option value="40 000">40 000 MAD</option>
                     <option value="45 000">45 000 MAD</option>
                     <option value="50 000">50 000 MAD</option>
                     <option value="60 000">60 000 MAD</option>
                     <option value="65 000">65 000 MAD</option>
                     <option value="70 000">70 000MAD</option>
                     <option value="75 000">75 000MAD</option>
                     <option value="80 000">80 000MAD</option>
                     <option value="85 000">85 000MAD</option>
                     <option value="90 000">90 000MAD</option>
                     <option value="95 000">95 000MAD</option>
                     <option value="100 000">100 000MAD</option>
                     <option value="110 000">110 000MAD</option>
                     <option value="120 000">120 000MAD</option>
                     <option value="130 000">130 000MAD</option>
                     <option value="140 000">140 000MAD</option>
                     <option value="150 000">150 000MAD</option>
                     <option value="160 000">160 000MAD</option>
                     <option value="170 000">170 000MAD</option>
                     <option value="180 000">180 000MAD</option>
                     <option value="190 000">190 000MAD</option>
                     <option value="200 000">200 000MAD</option>
                     <option value="300 000">300 000MAD</option>
                     <option value="400 000">400 000MAD</option>
                     <option value="500 000">500 000MAD</option>
                     <option value="600 000">600 000MAD</option>
                     <option value="700 000">700 000MAD</option>
                     <option value="700 000">700 000MAD</option>
                     <option value="800 000">800 000MAD</option>
                     <option value="900 000">900 000MAD</option>
                     <option value="1 000 000">1 000 000MAD</option>
                     <option value="more">--more--</option>
                  </select>
               </div>
            </div>
            <input type="submit" value="Search property" name="h_search" class="btn">
         </form>

      </section>

   </div>

   <!-- home section ends -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading">our services</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Buy location</h3>
            <p>Stop searching endlessly and browse a wide selection of properties on Your Site Name: link to your site!
               We offer
               user-friendly tools and a comprehensive search function to help you find the perfect place. From cozy
               bungalows to
               spacious estates.</p>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>rent house</h3>
            <p>Consider the area you'd like to live in and your budget.
               Research different rental agencies and their offerings.
               Read reviews before choosing a rental agency.
               Be prepared with documents like ID and proof of income when applying for a rental..</p>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>sell house</h3>
            <p>Get the best exposure for your location on Your Site Name: link to your site! We connect serious buyers
               with exceptional
               properties. Our user-friendly platform makes listing your location simple and efficient. Reach a wide
               audience and
               achieve a smooth sale </p>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>flats and buildings</h3>
            <p>We offer a comprehensive selection of properties, from cozy
               flats to spacious buildings, catering to all needs and budgets. Whether you're a first-time buyer,
               seasoned investor, or
               renter seeking the perfect place, our dedicated team is here to guide you through the process. </p>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>locations and malls</h3>
            <p>We specialize in properties near
               popular malls,
               offering easy access to shopping, dining, and entertainment. Whether you're looking to buy or rent, we
               have a variety of
               options to suit your needs. Browse our listings and discover the perfect place to call home, steps away
               from all the
               action!</p>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>24/7 service</h3>
            <p>We have a variety of options to suit your needs. Plus, enjoy the peace of mind that comes with our 24/7
               services. Browse
               our listings and discover the perfect place to call home, with both location and support at your
               fingertips! <br><br><br></p>
         </div>
      </div>

   </section>

   <!-- services section ends -->

   <!-- listings section starts  -->

   <section class="listings">

      <h1 class="heading">latest listings</h1>
      <div class="box-container">
         <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 10");
         $select_properties->execute();
         if ($select_properties->rowCount() > 0) {
            while ($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)) {

               $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_user->execute([$fetch_property['user_id']]);
               $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

               if (!empty ($fetch_property['image_02'])) {
                  $image_coutn_02 = 1;
               } else {
                  $image_coutn_02 = 0;
               }
               if (!empty ($fetch_property['image_03'])) {
                  $image_coutn_03 = 1;
               } else {
                  $image_coutn_03 = 0;
               }
               if (!empty ($fetch_property['image_04'])) {
                  $image_coutn_04 = 1;
               } else {
                  $image_coutn_04 = 0;
               }
               if (!empty ($fetch_property['image_05'])) {
                  $image_coutn_05 = 1;
               } else {
                  $image_coutn_05 = 0;
               }

               $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

               $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
               $select_saved->execute([$fetch_property['id'], $user_id]);

               ?>
               <form action="" method="POST">
                  <div class="box">
                     <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
                     <?php
                     if ($select_saved->rowCount() > 0) {
                        ?>
                        <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Saved</span></button>
                        <?php
                     } else {
                        ?>
                        <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Save</span></button>
                        <?php
                     }
                     ?>
                     <div class="thumb">
                        <p class="total-images"><i class="far fa-image"></i><span>
                              <?= $total_images; ?>
                           </span></p>
                        <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
                     </div>
                     <div class="admin">
                        <h3>
                           <?= substr($fetch_user['name'], 0, 1); ?>
                        </h3>
                        <div>
                           <p>
                              <?= $fetch_user['name']; ?>
                           </p>
                           <span>
                              <?= $fetch_property['date']; ?>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="price"><i class=MAD></i><span>
                           <?= $fetch_property['price']; ?>
                        </span></div>
                     <h3 class="name">
                        <?= $fetch_property['property_name']; ?>
                     </h3>
                     <p class="location"><i class="fas fa-map-marker-alt"></i><span>
                           <?= $fetch_property['address']; ?>
                        </span></p>
                     <div class="flex">
                        <p><i class="fas fa-house"></i><span>
                              <?= $fetch_property['type']; ?>
                           </span></p>
                        <p><i class="fas fa-tag"></i><span>
                              <?= $fetch_property['offer']; ?>
                           </span></p>
                        <p><i class="fas fa-bed"></i><span>
                              <?= $fetch_property['bhk']; ?> BHK
                           </span></p>
                        <p><i class="fas fa-trowel"></i><span>
                              <?= $fetch_property['status']; ?>
                           </span></p>
                        <p><i class="fas fa-couch"></i><span>
                              <?= $fetch_property['furnished']; ?>
                           </span></p>
                        <p><i class="fas fa-maximize"></i><span>
                              <?= $fetch_property['carpet']; ?>sqft
                           </span></p>
                     </div>
                     <div class="flex-btn">
                        <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">View property</a>
                        <input type="submit" value="send enquiry" name="send" class="btn">
                     </div>
                  </div>
               </form>
               <?php
            }
         } else {
            echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
         }
         ?>

      </div>

      <div style="margin-top: 2rem; text-align:center;">
         <a href="listings.php" class="inline-btn">View all</a>
      </div>

   </section>

   <!-- listings section ends -->


   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <?php include 'components/message.php'; ?>

   <script>

      let range = document.querySelector("#range");
      range.oninput = () => {
         document.querySelector('#output').innerHTML = range.value;
      }

   </script>

</body>

</html>