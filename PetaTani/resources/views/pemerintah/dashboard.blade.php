@extends('baseLayout.navbarPemerintah')
@section('konten')
<style>
    #map {
        width: 100%;
        height: 500px;
    }
</style>
<script src="{{ asset('js/mapdata.js') }}"></script>
<script src="{{ asset('js/countrymap.js') }}"></script>
<script>
    // Function to fetch and update color for all regions
    function updateAllRegionsColors() {
        // Fetch the color data for all regions from the backend (Laravel)
        fetch('/regions-colors')
        .then(response => response.json())  // Parse the response as JSON
        .then(data => {
            // Loop through all regions data and update the descriptions
            data.forEach(regionData => {
                const regionCode = regionData.regionCode;  // The unique region code
                const regionjumlah = regionData.jumlah;    // Description (or any other data you want to update)

                console.log(regionCode);    
                console.log(regionjumlah);  
                const regionColorHex = getColorHexFromJumlah(regionjumlah);  // Get the color in Hex format

                console.log(regionColorHex);
                // Update the region's description dynamically in SimpleMaps data
                // if (simplemaps_countrymap_mapdata.state_specific[regionCode]) {
                //     simplemaps_countrymap_mapdata.state_specific[regionCode].description = regionjumlah;
                // }
                if (simplemaps_countrymap_mapdata.state_specific[regionCode]) {
                    simplemaps_countrymap_mapdata.state_specific[regionCode].description = regionjumlah + " ton";
                    simplemaps_countrymap_mapdata.state_specific[regionCode].color = regionColorHex;
                    simplemaps_countrymap_mapdata.state_specific[regionCode].hover_color = regionColorHex;
                }
            });

            // Refresh the map to reflect the updated data
            simplemaps_countrymap.refresh();  // Assuming `refresh()` method redraws the map

        })
        .catch(error => {
            console.error('Error fetching region colors:', error);  // Handle any errors that occur during the fetch
        });

    }

    function getColorHexFromJumlah(jumlah) {
        // Define the max and min values for jumlah
        const max = 155108;  // Max value
        const min = 963;       // Min value

        // Normalize the jumlah value to a range between 0 and 1
        const normalizedValue = Math.min(Math.max((jumlah - min) / (max - min), 0), 1);

        // Start color: rgb(244, 107, 69) (#f46b45)
        // End color: rgb(238, 168, 73) (#eea849)

        const redStart = 244;   // Start value for red (from #f46b45)
        const redEnd = 238;     // End value for red (from #eea849)
        
        const greenStart = 107; // Start value for green (from #f46b45)
        const greenEnd = 168;   // End value for green (from #eea849)

        const blueStart = 69;   // Start value for blue (from #f46b45)
        const blueEnd = 73;     // End value for blue (from #eea849)

        // Interpolate between the start and end values based on 'jumlah'
        const red = Math.floor(redStart + (redEnd - redStart) * normalizedValue);
        const green = Math.floor(greenStart + (greenEnd - greenStart) * normalizedValue);
        const blue = Math.floor(blueStart + (blueEnd - blueStart) * normalizedValue);

        // Convert RGB to Hex
        return rgbToHex(red, green, blue);
    }

    // Function to convert RGB to Hex
    function rgbToHex(r, g, b) {
        return '#' + (1 << 24 | r << 16 | g << 8 | b).toString(16).slice(1).toUpperCase();
    }
    // Call the function to update all regions' colors
    updateAllRegionsColors();

</script>


    <h4>Cabai Merah</h4>

    <div id="map"></div>
@endsection
