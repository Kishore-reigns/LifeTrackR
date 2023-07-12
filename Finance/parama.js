// Get the reference to the element where the prices will be displayed
const cryptoPricesElement = document.getElementById('crypto-prices');

// Function to fetch cryptocurrency prices
const fetchCryptoPrices = async () => {
  try {
    const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,litecoin&vs_currencies=usd');
    const data = await response.json();
    displayCryptoPrices(data);
  } catch (error) {
    console.log('Error fetching data:', error);
  }
};

// Function to display cryptocurrency prices
const displayCryptoPrices = (prices) => {
  // Clear the previous prices
  cryptoPricesElement.innerHTML = '';

  // Iterate over the price data and create HTML elements to display the prices
  for (const currency in prices) {
    const priceElement = document.createElement('p');
    priceElement.innerText = `${currency.toUpperCase()}:: $${prices[currency].usd}`;
    cryptoPricesElement.appendChild(priceElement);
    document.getElementById("test")= `${currency.toUpperCase()}:: $${prices[currency].usd}`
  }
};

// Call the fetchCryptoPrices function initially to display the prices
fetchCryptoPrices();

// Fetch the prices every 10 seconds (adjust the interval as needed)
setInterval(fetchCryptoPrices, 10000);
