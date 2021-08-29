@if (count($locationList) == 0)
    @include('livewire.client.location.404')
@else
    <div id="locationMap" style="width: 100%;height: 400px;"></div>

    @include('livewire.client.location.table')
    <script>
        var jsLocationList = <?php echo json_encode($locationList); ?> 
        for(let long in jsLocationList){
            var mymap  = L.map(locationMap).setView([jsLocationList[long], long], 10);
            break;
        }
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        accessToken: 'pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA'
        }).addTo(mymap);

        var markers =  L.markerClusterGroup();
        for(let long in jsLocationList) {
           markers.addLayer(L.marker([jsLocationList[long],long]));
        }
        mymap.addLayer(markers);
    </script>
@endif