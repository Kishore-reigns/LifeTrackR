<!DOCTYPE html>
<html>
  <head>
    <!-- <link rel="stylesheet" href="lobby_style.css" /> -->
    <style>
      h1 {
        text-align: center;
      }
      body {
        /* background-color: #f5af9362; */
        background-image: url("images_shop/black\ back2.jpg");
        overflow-x: hidden;
        background-repeat: no-repeat;
        background-size: fill;
      }
      .flex_container2 {
        display: flex;
        flex-direction: column;
        /* background-color: #f5af9362; */
      }
      .c1,
      .c2,
      .c3,
      .c4,
      .c5,
      .c6 {
        width: 1000px;
        background-color: rgba(238, 209, 93, 0.773);
        height: 200px;
        margin: auto;
        margin-bottom: 10px;
        display: none;
      }
      button.github {
        height: 36px;
        margin: auto;
        width: 95px;
        background-color: rgb(46, 164, 79);
        border-radius: 6px;
        color: white;
        border: none;
        transition: opacity 0.15s;
        cursor: pointer;
        font-weight: bold;
        position: absolute;
        right: 400px;
      }
      button.github:hover {
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.15);
      }
      .c1 {
        margin-top: 10px;
      }
      .im {
        margin-top: 20px;
        height: 150px;
        width: 260px;
        object-fit: cover;
        display: block;
        float: left;
        padding-right: 20px;
        padding-left: 20px;
      }

      .price_symbol {
        height: 15px;
        width: 15px;
        vertical-align: middle;
      }
      .price_whole {
        font-size: 200%;
      }
      .og_price {
        color: #565959;
      }
      .company_name {
        padding-top: 15px;
        font-size: 120%;
        margin-bottom: 0px;
      }
      .price {
        padding-top: 20px;
      }
      .quantity {
        display: block;
        position: relative;
        left: 570px;
        bottom: 75px;
      }
      .num {
        border: solid;
        border-color: rgba(122, 120, 120, 0.93);
        border-width: 2px;
        width: 20px;
        text-align: center;
        vertical-align: middle;
        border-radius: 5px;
        position: relative;
        left: 320px;
        bottom: 10px;
        padding: 3px;
        background-color: white;
      }
      .gobacktohomeheadinglink {
        text-decoration: none;
        color: white;
        cursor: pointer;
      }
      .heading {
        color: whitesmoke;
        text-align: center;
        font-family: Garamond, serif;
        font-weight: 10;
        /* font-style: italic; */
        font-size: 50px;
        padding: 20px;
        margin: 0px;
      }
    </style>
  </head>
  <body>
    <a href="../home page/homeIndex.php" class="gobacktohomeheadinglink">
      <h1 class="heading">LifeTrackR Merchandise</h1></a
    >
    <h1 class="heading">Cart</h1>
    <div class="flex_container2">
      <div class="c1" id="child1">
        <img class="im" src="" id="img1" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card1" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol1"></span>
          <span class="price_whole" id="price1"></span><br />
          <span class="og_price" id="ogprice1"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant1"
          ></p>
          <p class="num" id="quantnum1"></p>
        </div>
      </div>
      <div class="c2" id="child2">
        <img class="im" src="" id="img2" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card2" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol2"></span>
          <span class="price_whole" id="price2"></span><br />
          <span class="og_price" id="ogprice2"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant2"
          ></p>
          <p class="num" id="quantnum2"></p>
        </div>
      </div>
      <div class="c3" id="child3">
        <img class="im" src="" id="img3" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card3" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol3"></span>
          <span class="price_whole" id="price3"></span><br />
          <span class="og_price" id="ogprice3"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant3"
          ></p>
          <p class="num" id="quantnum3"></p>
        </div>
      </div>
      <div class="c4" id="child4">
        <img class="im" src="" id="img4" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card4" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol4"></span>
          <span class="price_whole" id="price4"></span><br />
          <span class="og_price" id="ogprice4"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant4"
          ></p>
          <p class="num" id="quantnum4"></p>
        </div>
      </div>
      <div class="c5" id="child5">
        <img class="im" src="" id="img5" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card5" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol5"></span>
          <span class="price_whole" id="price5"></span><br />
          <span class="og_price" id="ogprice5"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant5"
          ></p>
          <p class="num" id="quantnum5"></p>
        </div>
      </div>
      <div class="c6" id="child6">
        <img class="im" src="" id="img6" />
        <div class="company_name">
          <p style="margin-bottom: 0px">
            <b id="title_card6" style="font-size: larger"></b>
          </p>
        </div>
        <div class="price">
          <span class="price_symbol" id="symbol6"></span>
          <span class="price_whole" id="price6"></span><br />
          <span class="og_price" id="ogprice6"><strike> </strike> </span>
        </div>
        <div class="quantity">
          <p
            style="margin-top: 6px; font-size: larger; display: block"
            id="quant6"
          ></p>
          <p class="num" id="quantnum6"></p>
        </div>
      </div>
    </div>
    <h1 id="summ"></h1>
    <a href="https://www.bankofamerica.com/" target="_blank">
      <button class="github">Pay</button>
    </a>
    <!-- <input type="button" onclick="chec()" value="call chec" /> -->
  </body>

  <script>
    var pdt = JSON.parse(localStorage.getItem("items")); // its a fucking string . covert it to a fucking arrray
    function chec() {
      document.write(pdt);
    }
    var rupee = "₹",
      j = 0;
    let i = 0;
    var sum = 0,
      temp;
    var toys = [
      {
        name: "Leather Bracelet",
        price: "1,199",
        ogprice: "₹1,499",
        img: "images_shop/bracelet_2 resized.jpg",
      },

      {
        name: "Fitness Watch",
        price: " 3,999",
        ogprice: "₹4,499",
        img: "images_shop/watch.jpg",
      },

      {
        name: "NIKE",
        price: " 10,999",
        ogprice: "₹22,000 ",
        img: "images_shop/shoes.webp",
      },

      {
        name: "Arctic Fox",
        price: " 1,999",
        ogprice: "₹3,000",
        img: "images_shop/backpack.jpg",
      },

      {
        name: "RAYBAN",
        price: " 7,999",
        ogprice: "₹10,000",
        img: "images_shop/sunglasses.jpg",
      },

      {
        name: "Water Bottle",
        price: "1,099",
        ogprice: "₹1,999",
        img: "images_shop/bottle.jpg",
      },
    ];
    for (i; i < 6; i++) {
      if (pdt[i] != 0) {
        document.getElementById("title_card" + (j + 1)).innerHTML =
          toys[i].name;
        document.getElementById("img" + (j + 1)).src = toys[i].img;
        document.getElementById("symbol" + (j + 1)).innerHTML = rupee;
        document.getElementById("price" + (j + 1)).innerHTML = toys[i].price;
        document.getElementById("ogprice" + (j + 1)).innerHTML =
          "M.R.P: <strike>" + toys[i].ogprice + " </strike>";
        document.getElementById("quant" + (j + 1)).innerHTML = "Quantity ";
        document.getElementById("quantnum" + (j + 1)).innerHTML = pdt[i];
        temp = toys[i].price.replace(/,/g, "");
        sum += parseInt(temp) * pdt[i];
        j++;
        document.getElementById("child" + j).style.display = "block";
      }
      document.getElementById("summ").innerHTML = "Total= " + sum;
      document.getElementById("summ").className = "num";
      document.getElementById("summ").style.cssText =
        "width:200px; height:40px; padding: 20px; margin:auto; margin-top:40px;";
      if (!sum) {
        document.getElementById("summ").innerHTML =
          "Your Cart is Empty &#128522;";
        document.getElementById("summ").style.cssText =
          "background-color:aliceblue ; width:500px; margin:auto;";
      }
    }
  </script>
</html>
