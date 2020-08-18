
    <div id="map"  style="width: auto; height: 600px;border:2px solid #cecece;"></div>
        <script>
    window.onload = function(){
    			console.log("page charger");
    	var planes = [<?php include 'data.php'?>];

            var map = L.map('map', { zoomControl:false }).setView([33.589886,-5.6081000], 6);
            mapLink =  '<a href="http://openstreetmap.org">OpenStreetMap</a>';
            map.scrollWheelZoom.disable();
            L.tileLayer(
                'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; ' + mapLink + ' Contributors',
                maxZoom: 18,
                }).addTo(map);

    		for (var i = 0; i < planes.length; i++) {
    			marker = new L.marker([planes[i][1],planes[i][2]])
    				.bindPopup(planes[i][0])
    				.addTo(map);
    		}
        }           
        </script>
