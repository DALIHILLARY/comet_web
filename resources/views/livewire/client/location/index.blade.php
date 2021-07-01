<div id="locationMap" style="width: 100%;height: 300px;"></div>


<script>
    var mymap  = L.map(locationMap).setView([51.505, -0.09], 13);

         L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        accessToken: 'pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA'
    }).addTo(mymap);
    var jsLocationList = <?php echo json_encode($locationList); ?> 
    for(let long in jsLocationList) {
        L.marker([jsLocationList[long],long]).addTo(mymap);
    }

    // var array = @this.locationList

    // console.log(array);
</script>
