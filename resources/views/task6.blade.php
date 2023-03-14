@extends('app.layout')

@section('content')
<div class="container">
    <label for="city-input">Введите называния города:</label>
    <input type="text" id="city-input">
    <button id="weather-btn">Показат погоду</button>

    <div id="weather-info"></div>
        <form style="margin-top: 30px">
            <label for="city-input">Введите называния города:</label>
            <input type="text" id="city-input-information" name="city">
            <button type="button" id="show-btn">Показат насиления</button>
        </form>
        <br>
        <div id="result-container"></div>
</div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#show-btn").on("click", function() {
                    var cityName = $("#city-input-information").val();

                    // Make a request to the Wikipedia API to get the population of the city
                    $.ajax({
                        url: "https://en.wikipedia.org/w/api.php",
                        data: {
                            action: "query",
                            format: "json",
                            prop: "extracts",
                            exintro: "",
                            explaintext: "",
                            titles: cityName,
                            redirects: 1,
                            formatversion: 2,
                        },
                        dataType: "jsonp",
                        success: function(data) {
                            // Check if there is an error in the API response
                            if (data.hasOwnProperty("error")) {
                                $("#result-container").html("Error: " + data.error.info);
                            } else {
                                var population = null;
                                var pages = data.query.pages;

                                console.log(pages)
                                // Loop through the pages in the response and look for the one with the population information
                                for (var i = 0; i < pages.length; i++) {
                                    if (pages[i].extract.includes("Population")) {
                                        var populationMatch = pages[i].extract.match(/Population[^.]*\d+/);
                                        if (populationMatch) {
                                            population = populationMatch[0];
                                        }
                                        break;
                                    }
                                }
                            }
                        },
                        error: function() {
                            $("#result-container").html("Error getting population data.");
                        }
                    });
                });
            });








            const API_KEY = '3da3ee6d20624ef5866101016231103';

            const BASE_URL = 'https://api.weatherapi.com/v1/current.json';

            const cityInput = document.getElementById('city-input');
            const weatherBtn = document.getElementById('weather-btn');
            const weatherInfo = document.getElementById('weather-info');

            weatherBtn.addEventListener('click', fetchWeather);

            function fetchWeather() {
                const city = cityInput.value;
                if (city === '') {
                    alert('Please enter a city name');
                    return;
                }

                const url = `${BASE_URL}?key=${API_KEY}&q=${city}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        const { location, current } = data;
                        const { name, region, country } = location;
                        const { temp_c, condition, wind_kph, humidity } = current;

                        weatherInfo.innerHTML = `
        <h2>Current Weather in ${name}, ${region}, ${country}</h2>
        <p>Temperature: ${temp_c}°C</p>
        <p>Condition: ${condition.text}</p>
        <p>Wind Speed: ${wind_kph} km/h</p>
        <p>Humidity: ${humidity}%</p>
      `;
                    })
                    .catch(error => {
                        console.error(error);
                        weatherInfo.innerHTML = '<p>Sorry, an error occurred while fetching weather data.</p>';
                    });
            }

        </script>
    @endpush
@endsection
