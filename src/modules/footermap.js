import styleMappa from "./styleMap.js";

export default function initFooterMap() {
      const uluru = {lat: 41.9005697, lng: 12.5069037};
      const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        scrollwheel: false,
        styles: styleMappa
        
    

      });
      const marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
      
      // Enable scrolling on click event on the map
      map.addListener('click', function() {
        this.setOptions({scrollwheel:true});
      });
        

      // Enable scrolling on drag event on the map
      map.addListener('drag', function() {
        this.setOptions({scrollwheel:true});
      });

      // Disable scrolling on mouseout from the map
      map.addListener('mouseout', function() {
        this.setOptions({scrollwheel:false});
      });
      
      map.addListener('center_changed', function() {
              // 3 seconds after the center of the map has changed, pan back to the
              // marker.
              window.setTimeout(function() {
                map.panTo(marker.getPosition());
              }, 3000);
            });
    }