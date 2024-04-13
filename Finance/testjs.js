// Make sure to replace YOUR_API_KEY with your actual Alpha Vantage API key
const API_KEY = "B33WAR0XQM31G8DM";


// Fetch crypto and stock recommendations
fetchRecommendations();

async function fetchRecommendations() {
    const cryptoResponse = await fetch(`https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_INTRADAY&symbol=BTC&market=USD&apikey=${API_KEY}`);
    const cryptoData = await cryptoResponse.json();

    const stockResponse = await fetch(`https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=MSFT&interval=5min&apikey=${API_KEY}`);
    const stockData = await stockResponse.json();

    displayRecommendations(cryptoData, stockData);
}

function displayRecommendations(cryptoData, stockData) {
    const recommendationsContainer = document.getElementById("recommendationsContainer");

    const cryptoRecommendation = {
        title: "Crypto Recommendation",
        recommendation: getLimitedDataPoints(cryptoData["Time Series Crypto (5min)"]),
    };

    const stockRecommendation = {
        title: "Stock Recommendation",
        recommendation: getLimitedDataPoints(stockData["Time Series (5min)"]),
    };

    const recommendations = [cryptoRecommendation, stockRecommendation];

    recommendations.forEach((recommendation) => {
        const card = document.createElement("div");
        card.classList.add("recommendation-card");

        const title = document.createElement("h3");
        title.textContent = recommendation.title;

        const recommendationText = document.createElement("p");
        recommendationText.textContent = recommendation.recommendation;

        card.appendChild(title);
        card.appendChild(recommendationText);

        recommendationsContainer.appendChild(card);
    });
}

function getLimitedDataPoints(data) {
    const limitedData = Object.keys(data).slice(0, 5); // Limiting to the first 5 data points
    return JSON.stringify(limitedData);
}
