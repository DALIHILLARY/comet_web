<div>
    <hr>
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Date</th>
            </tr>
            <tbody>
                @foreach ($locationList as $location )
                <tr>
                    <td>{{$location->latitude }}</td>
                    <td>{{ $location->longitude }}</td>
                    <td>{{ $location->date }}</td>
                </tr>
                    
                @endforeach
            </tbody>
    </table>
</div>