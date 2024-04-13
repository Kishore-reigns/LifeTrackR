<?php
include('../config.php');
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Finance</title>
    <link rel="stylesheet" href="cssfinance.css?v=<?php echo time(); ?>" />
    <script src="js_finance.js"></script>
  </head>
  <body>
    <div class="left-menu">
      <div class="hello-user">
        <img src="images_finance/LogoDark-no back.png" class="userimg" alt="" />
        <h3 style="margin-top: 55px; margin-left: 30px"><?php echo $username;?></h3>
      </div>
      <hr style="width: 220px; margin-top: 15px" />
      <div class="verticalflex">
        <button
          id="element"
          style="margin-top: 20px"
          onclick="disp_div('skeleton_expense')"
        >
          Expenses
        </button>
        <button id="element" onclick="disp_div('skeleton_income')">
          Income
        </button>
        
        <button id="element" onclick="opengraph();">Graph</button>
        <button id="element" onclick="disp_div('skeleton_recommendations')">
          Recommendations
        </button>
        <button id="element" onclick="window.location.href = '../home page/homeIndex.php'">Hub</button>
      </div>
    </div>
    <div class="headingtop">
      <h1>Finance Tracker</h1>
    </div>
    <!------------------------------------------------------------------------------->
    <div id="skeleton_expense">
      <div style="padding-left: 20px; padding-top: 20px; font-size: larger">
        <p style="display: inline">Expenses</p>
        <button
          class="plus"
          onclick="openpopup('skeleton_expense');"
          style="color: #2c63c1"
        >
          +
        </button>
      </div>
      
        
        <?php
          // Assuming you have a database connection established
          
          // Fetching values from the finance table with negative amount
          $query = "SELECT * FROM finance WHERE amount < 0 ORDER BY date DESC";
          $result = mysqli_query($conn, $query);

          // Checking if any rows are returned
          if (mysqli_num_rows($result) > 0) {
              // Displaying the fetched values
              while ($row = mysqli_fetch_assoc($result)) {
                  $title = $row['title'];
                  $date = $row['date'];
                  $place = $row['place'];
                  $amount =0- $row['amount'];

                  echo "<div class='expense'>";
                  echo "<div class='spend'>";
                  echo "<p style='font-size: 30px; margin-bottom: 0px'>₹</p>";
                  echo "<p class='num'>$amount</p>";
                  echo "</div>";
                  echo "<div class='moveright'>";
                  echo "<h3>Title: $title</h3>";
                  echo "<p>Date: $date</p>";
                  echo "<p>Place: $place</p>";
                  echo "</div>";
                  echo "</div>";
              }
          } else {
              echo "No records found.";
          }

          // Closing the database conn
          ?>

        </div>
    </div>
    <!------------------------------------------------------------------------------->
    <div id="skeleton_income">
      <div style="padding-left: 20px; padding-top: 20px; font-size: larger;">
        <p style="display: inline">Income</p>
        <button
          class="plus"
          onclick="openpopup('skeleton_income');"
          style="color: #89e156"
        >
          +
        </button>
      </div>

      <?php
          // Assuming you have a database connection established
          
          // Fetching values from the finance table with negative amount
          $query = "SELECT * FROM finance WHERE amount > 0 ORDER BY date DESC";
          $result = mysqli_query($conn, $query);

          // Checking if any rows are returned
          if (mysqli_num_rows($result) > 0) {
              // Displaying the fetched values
              while ($row = mysqli_fetch_assoc($result)) {
                  $title = $row['title'];
                  $date = $row['date'];
                  $place = $row['place'];
                  $amount =$row['amount'];

                  echo "<div class='expense'>";
                  echo "<div class='receive'>";
                  echo "<p style='font-size: 30px; margin-bottom: 0px'>₹</p>";
                  echo "<p class='num'>$amount</p>";
                  echo "</div>";
                  echo "<div class='moveright'>";
                  echo "<h3>Title: $title</h3>";
                  echo "<p>Date: $date</p>";
                  echo "<p>Place: $place</p>";
                  echo "</div>";
                  echo "</div>";
              }
          } 

          // Closing the database conn
          ?>

      <!-- <div class="expense">
        <div class="receive">
          <p style="font-size: 30px; margin-bottom: 0px">₹</p>
          <p class="num">24</p>
        </div>
        <div>
          <h2>Title</h2>
          <p>date dd/mm/yy</p>
          <p>Place</p>
        </div>
      </div> -->
    </div>
    <!------------------------------------------------------------------------------->
    <div id="skeleton_recommendations" style="display:none;">
      <h1>Crypto Price Display</h1>
      <div id="crypto-prices">
        <!------------------------------------------------------------------------------->
        <div class="flexcard" id="pdt1">
          <img
            class="im"
            src="images_finance/bitcoin.png"
            style="object-fit: contain;
            height:300px;
            width:300px;"
          />
          <div class="company_name">
            <h2 id="coin1" style="text-align:center;">abc</h2>
          </div>
          <div class="price">
            <span class="price_whole" id="price1" style="text-align:center"></span><br />
          </div>
          <div class="buttons">
            <a href="https://cryptospaniards.com/simulator/trade/usd/btc">
            <input class="github" type="button" value="Buy" />
            </a>
          </div>
        </div>
        <!------------------------------------------------------------------------------->
        <div class="flexcard" id="pdt2">
          <img
            class="im"
            src="images_finance/etherium.png"
            style="object-fit: contain;
            height:300px;
            width:300px;"
          />
          <div class="company_name">
            <h2 id="coin2" style="text-align:center;">abc</h2>
          </div>
          <div class="price">
            <span class="price_whole" id="price2" style="text-align:center"></span><br />
          </div>
          <div class="buttons">
            <a href="https://cryptospaniards.com/simulator/trade/usd/eth">
            <input class="github" type="button" value="Buy" />
          </a>
          </div>
        </div>
        <!------------------------------------------------------------------------------->
        <div class="flexcard" id="pdt3">
          <img
            class="im"
            src="images_finance/litecoin.png"
            style="object-fit: contain;
            height:300px;
            width:300px;"
          />
          <div class="company_name">
            <h2 id="coin3" style="text-align:center;">abc</h2>
          </div>
          <div class="price">
            <span class="price_whole" id="price3" style="text-align:center"></span><br />
          </div>
          <div class="buttons">
            <a href="https://cryptospaniards.com/simulator/trade/usd/ltc">
            <input class="github" type="button" value="Buy" />
            </a>
          </div>
        </div>
      </div>

      <script src="parama.js"></script>
    </div>
    <!------------------------------------------------------------------------------->
    <form id="exppopup" action="expensePHP.php" method="post">
      <h2 style="text-align: center" id="popuptitle">Add Expense</h2>
      <div class="inputbox">
        <input
        required
          type="number"
          class="amount"
          placeholder="Amount spent"
          required
          name="amount"
          id="amt"
        />
      </div>
      <div class="inputbox">
        <select
          class="amount"
          style="font-size: 20px"
          placeholder="Category"
          name="title"
          required
          id=""
        >
        <option value="" disabled selected>Category</option>
        <option value="Food & Clothing">Food & Clothing</option>
        <option value="Health Care">Health Care</option>
        <option value="Taxes">Taxes</option>
        <option value="Education">Education</option>
        <option value="Transport">Transport</option>
        <option value="Other">Other</option>
        </select>
      </div>
      <div class="inputbox">
        <input
          type="date"
          class="amount"
          style="font-size: 20px"
          placeholder="Date"
          name="date"
          id=""
        />
      </div>
      <div class="inputbox">
        <input
          type="text"
          class="amount"
          style="font-size: 20px"
          placeholder="Place"
          required
          name="place"
          id=""
        />
      </div>
      <input
        type="submit"
        onclick="closepopup_n_ADD('skeleton_expense')"
        class="submit-button"
        id="addbutton"
        value="Add"
      />
    </form>
    <!------------------------------------------------------------------------------->
    <form id="incpopup" action="incomePHP.php" method="post">
      <h2 style="text-align: center" id="popuptitle">Add Income</h2>
      <div class="inputbox">
        <input
          required
          type="number"
          class="amount"
          placeholder="Amount Received"
          name="incamount"
          required
          id="amt"
        />
      </div>
      <div class="inputbox">
        <select
          type="text"
          class="amount"
          style="font-size: 20px"
          placeholder="Title"
          required
          name="inctitle"
          id=""
        >
        <option value="" disabled selected>Category</option>
        <option value="Salary">Salary</option>
        <option value="Loans">Loans</option>
        <option value="Reimbursement">Reimbursement</option>
        <option value="Grants">Grants</option>
        <option value="Other">Other</option>
        </select>
      </div>
      <div class="inputbox">
        <input
          type="date"
          class="amount"
          style="font-size: 20px"
          placeholder="Date"
          required
          name="incdate"
          id=""
        />
      </div>
      <div class="inputbox">
        <input
          type="text"
          class="amount"
          style="font-size: 20px"
          placeholder="Place"
          required
          name="incplace"
          id=""
        />
      </div>
      <input
        type="submit"
        onclick="closepopup_n_ADD('skeleton_expense')"
        class="submit-button"
        id="addbutton"
        value="Add"
      />
    </form>
    <!------------------------------------------------------------------------------->
    <div id="blursheet" onclick="closepopups()"></div>
    <!------------------------------------------------------------------------------->
    <div id="skeleton_graph">
  
       <h2 style="text-align:center;">Expenses</h2>
      <?php
      // Assuming you have a database connection established
      $sql = "SELECT title, SUM(amount) AS total_amount FROM finance WHERE amount < 0 GROUP BY title";

      $result2 = mysqli_query($conn, $sql);
      $result = mysqli_query($conn, $sql);

      $smallestAmount = null;

  while ($row2 = mysqli_fetch_assoc($result2)) {
    $amount = $row2['total_amount'];

    if ($smallestAmount == null || $amount < $smallestAmount) {
      $smallestAmount = $amount;
    }
  }
  $largestAmount=0-$smallestAmount;

      while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['title'];
        $amount = $row['total_amount'];

        $amount= 0- $amount;
        // Calculate the bar width based on the maximum amount
         // Example maximum amount

        $barWidth = ($amount / $largestAmount) * 99;

        // if( $barWidth < 40  ){
        //   $barWidth *= 5 ; 
        // }

        // echo $largestAmount." ".$amount ;

        echo $category.'<div class="bar" style="width: ' . ($barWidth-4) . '%;"></div>';
      }

      // Close the database conn
    ?>

  </div>

    <div id="skeleton_graph_inc">
  
       <h2 style="text-align:center;">Income</h2>
      <?php
     
      // Assuming you have a database connection established
      // $sql = "SELECT title, amount FROM finance";
      // $sql = "SELECT title, SUM(amount) AS total_amount FROM finance GROUP BY title where amount<0";
      $sql = "SELECT title, SUM(amount) AS total_amount FROM finance WHERE amount > 0 GROUP BY title";

      $result4 = mysqli_query($conn, $sql);
      $result3 = mysqli_query($conn, $sql);


      // fetching the minimum element from the table 
      // $sql2 = "SELECT MIN(amount) AS max_amount FROM finance GROUP BY title  where amount<0;";
      // $result4 = mysqli_query($conn, $sql2);
      //$maxAmount = 0 ; 
      // Check if the query was executed successfully
      // if ($result4) {
      //     $row2 = mysqli_fetch_assoc($result4);
      //     $maxAmount = $row2['max_amount'];
      // } 
      
      // $smallestAmount = null;
      // while ($row2 = mysqli_fetch_assoc($result4)) {
      //   if ($smallestAmount == null || $amount < $smallestAmount) {
      //     $smallestAmount = $amount;
      //   }
      // }

              $largestAmount = null;

          while ($row4 = mysqli_fetch_assoc($result4)) {
            $amount = $row4['total_amount'];

            if ($largestAmount == null || $amount > $largestAmount) {
              $largestAmount = $amount;
            }
          }
          //$largestAmount=0-$largestAmount;

//      $largestAmount = 0 - $largestAmount;


      while ($row3 = mysqli_fetch_assoc($result3)) {
        $category = $row3['title'];
        $amount = $row3['total_amount'];

        // Calculate the bar width based on the maximum amount
         // Example maximum amount

        $barWidth = ($amount / $largestAmount) * 99;

        // if( $barWidth < 40  ){
        //   $barWidth *= 5 ; 
        // }

        // echo $largestAmount." ".$amount ;

        // Output the bar graph
        echo $category.'<div class="bar_inc" style="width: ' . ($barWidth-4) . '%;"></div>';
      }


    ?>

    </div>
  </body>
</html>
<?php 
mysqli_close($conn);
?>