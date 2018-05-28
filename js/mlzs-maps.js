var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 26.173778,
        lng: 85.483500,
    });
    map.addMarker({
        lat: 26.173778,
        lng: 85.483500,
        title: 'Address',      
        infoWindow: {
            content: '<h5 class="title">Mount Litera Zee School, Muzzaffarpur</h5><p><span class="region">Address line goes here</span><br><span class="postal-code">Postcode</span><br><span class="country-name">Country</span></p>'
        }
        
    });

});