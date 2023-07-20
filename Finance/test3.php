<?php
// Alpha Vantage API endpoint and your API key
$apiEndpoint = 'https://www.alphavantage.co/query';
$apiKey = 'YOUR_API_KEY';

// Array of stock or cryptocurrency symbols
$symbols = ['AMZN', 'TSLA'];

// Shuffle the symbols array and select the first 9
shuffle($symbols);
$selectedSymbols = array_slice($symbols, 0, 9);

// Fetch data for each selected symbol
foreach ($selectedSymbols as $symbol) {
    $function = 'GLOBAL_QUOTE'; // You can change this function based on your specific requirements

    // Construct the API URL
    $url = $apiEndpoint . '?function=' . $function . '&symbol=' . $symbol . '&apikey=' . $apiKey;

    // Make the API request
    $response = file_get_contents($url);

    // Parse the JSON response
    $data = json_decode($response, true);

    // Check if the response contains the expected data structure
    if (isset($data['Global Quote'])) {
        $symbol = $data['Global Quote']['01. symbol'];
        $price = $data['Global Quote']['05. price'];
        $change = $data['Global Quote']['09. change'];
        $percentChange = $data['Global Quote']['10. change percent'];

        // Display the data
        echo "<div class='recommendation-item'>";
        echo "<h3>$symbol</h3>";
        echo "<p>Price: $price</p>";
        echo "<p>Change: $change</p>";
        echo "<p>Percent Change: $percentChange</p>";
        echo "</div>";
    } else {
        echo "<div class='recommendation-item'>";
        echo "<p>Error fetching data for $symbol</p>";
        echo "</div>";
    }
}
?>
