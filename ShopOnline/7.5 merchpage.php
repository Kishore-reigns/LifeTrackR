<!DOCTYPE html>
<html>
  <head>
    <title>BuyMerch_LifeTrackR</title>
    <link rel="stylesheet" href="lobby_style.css" />
    <script link src="lobby_js.js"></script>
  </head>
  <body>
    <div class="out">
      <a class="cart" href="Cart.php">
        <input
          type="button"
          class="nike2"
          value="Go to Cart"
          onclick="passover()"
        />
      </a>
      <a href="../home page/homeIndex.php" class="gobacktohomeheadinglink">
        <h1 class="heading">LifeTrackR Merchandise</h1></a
      >

      <div class="flexbox_container">
        <div class="c1" id="pdt1">
          <img
            class="im"
            src="images_shop/bracelet_2 resized.jpg"
            style="object-fit: contain"
          />
          <div class="company_name">
            <p>
              <b>Leather Bracelet</b> <br />
              Men's Leather Bracelet
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">1,199</span><br />
            <span class="og_price"
              >M.R.P: <strike> ₹1,499 </strike> <br />
              (16% off)</span
            >
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(1)"
            />
          </div>
        </div>

        <div class="c2">
          <img class="im" src="images_shop/watch.jpg" />
          <div class="company_name">
            <p>
              <b>Fitness Watch </b> <br />
              Unisex Fitness Watch
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">3,999</span><br />
            <span class="og_price"
              >M.R.P: <strike> ₹4,499 </strike> <br />
              (9% off)</span
            >
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(2)"
            />
          </div>
        </div>

        <div class="c3">
          <img class="im" src="images_shop/shoes.webp" />
          <div class="company_name">
            <p>
              <b>NIKE</b> <br />
              Men's Running Shoe
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">10,999</span><br />
            <span class="og_price"
              >M.R.P: <strike> ₹22,000 </strike> <br />
              (50% off)</span
            >
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(3)"
            />
          </div>
        </div>
      </div>
      <div class="flexbox_container">
        <div class="c4">
          <img class="im" src="images_shop/backpack.jpg" />
          <div class="company_name">
            <p>
              <b>Arctic Fox</b> <br />
              Compact Backpack
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">1,999</span><br />
            <span class="og_price"
              >M.R.P: <strike> ₹3,000 </strike> <br />
              (30% off)</span
            >
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(4)"
            />
          </div>
        </div>
        <div class="c5">
          <img class="im" src="images_shop/sunglasses.jpg" />
          <div class="company_name">
            <p>
              <b>RAYBAN</b> <br />
              BlackShade Sunglass
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">7,999</span><br />
            <span class="og_price">
              M.R.P: <strike> ₹10,000 </strike> <br />
              (23% off)
            </span>
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(5)"
            />
          </div>
        </div>
        <div class="c6">
          <img class="im" src="images_shop/bottle.jpg" />
          <div class="company_name">
            <p>
              <b>Water Bottle</b> <br />
              1L Steel Water Bottle
            </p>
          </div>
          <div class="star_container">
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
            <img
              class="star"
              src="images_shop/star.png"
            />
          </div>
          <div class="price">
            <span class="price_symbol">₹</span>
            <span class="price_whole">1,099</span><br />
            <span class="og_price"
              >M.R.P: <strike> ₹1,999 </strike> <br />
              (45% off)
            </span>
          </div>
          <div class="buttons">
            <input
              class="nike"
              type="button"
              value="Add To Cart"
              onclick="pdtclick(6)"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- <input type="button" onclick="chec()" value="call chec" /> -->
  </body>
</html>
