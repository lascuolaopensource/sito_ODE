import $ from "jquery";
import styleMappa from "./styleMap.js";
import MarkerClusterer from '@google/markerclusterer';

export default function initMap() {
          const myLatLng = {lat: 41.5875209, lng: 13};

          // Create a map object and specify the DOM element
          // for display.
          const map = new google.maps.Map(document.getElementById('map_dovesiamo'), {
            center: myLatLng,
            zoom: 6,
            styles: styleMappa
          });

          window.dovesiamomap = map;
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

          $.ajax({
            url: "/relazioni/?q=all",
          }).done(function(data) {
            addMarkers(data);
            stampaRisultatiQueryDoveSiamo(data);
          });

          let markers = [];

          const clusterer = new MarkerClusterer(map, markers,
                {styles: 
                  [
                    {
                      textColor: 'white',
                      url: 'assets/images/m1.png',
                      height: 35,
                      width: 35
                    }
                  ]
            });

          const addMarkers = function(data){
            if (Array.isArray(data)){
              data.forEach(function(sede){
                if(sede.lat && sede.lng){
                    markers.push(new google.maps.Marker({
                      map: map,
                      position: {lat: +sede.lat , lng: +sede.lng},
                      title: sede.nome,
                      spi_id: sede.id
                    }));                  
                }
              });
            }else{
              if(data.lat && data.lng){
                    markers.push(new google.maps.Marker({
                      map: map,
                      position: {lat: +data.lat , lng: +data.lng},
                      title: data.nome,
                      spi_id: sede.id
                    }));                  
                }
            }

            clusterer.addMarkers(markers);

            markers.forEach(function(marker){
              marker.addListener('click', function() {
               map.setZoom(17);
               map.setCenter(marker.getPosition());
               makeRisultatoActive(marker.spi_id);
             });
            })
            
          }

          $('#risultati_dovesiamo').on('nuovi_risultati',function(e,data){
            console.log(e,data)
            clearMarkers();
            addMarkers(data);
            map.setOptions({zoom:12})
            map.setOptions({center:{lat: +data[0].lat, lng: +data[0].lng}})
          })

         

          // Sets the map on all markers in the array.
          const setMapOnAll = function(map) {
            for (var i = 0; i < markers.length; i++) {
              markers[i].setMap(map);
            }
          }

          const clearMarkers = function() {
            setMapOnAll(null);
            clusterer.clearMarkers();
            markers = [];
          }



        }  

        const makeRisultatoActive = function(id){
          const el = $('#lista_risultati_dove .risultato_sede').filter(function(){
            return $(this).data("id") == id
          });
          el.detach();
          $('#lista_risultati_dove').prepend(el);
          $('#risultati_dovesiamo').scrollTop('0');
          $('.risultato_sede').removeClass('active');
          el.addClass('active');
        };

        const stampaRisultatiQueryDoveSiamo = function(relazioni){
          let risultati = '<div id="lista_risultati_dove">';
            relazioni.forEach(function(rel, i){
              if(i<10){
                risultati += '<div class="risultato_rel" data-id="'+ rel.id +'" data-lat="'+ rel.lat + '" data-lng="'+ rel.lng +'" >' 
                risultati += '<span class="titolo">' + rel.nome + '</span><br>'; 
                risultati += '<div class="details">'; 
                if(rel.indirizzo){
                  risultati += '<span class="dato">' + rel.indirizzo + '<br>';                   
                }
                if(rel.tel){
                  risultati += 'tel: <span class="dato">' + rel.tel + '</span><br>'; 
                }
                if(rel.email){
                  risultati += 'email: <span class="dato">' + rel.email + '</span><br>'; 
                }
                if(rel.apertura){
                risultati += 'orari: <span class="dato orari">' + rel.apertura + '</span><br><br>';                   
                }
                if(rel.note){
                risultati += 'note: <span class="dato note">' + rel.note + '</span><br><br>';                   
                }
                risultati += '</div>';
                risultati += '</div>';
              }
            })
            risultati += '</div>';

            $('#risultati_dovesiamo').html(risultati);

            $('.risultato_sede').click(function(e){
              const dataset = $(e.target).closest('.risultato_sede').data();
              const position = {lat: +dataset['lat'],
                                lng: +dataset['lng']};
              console.log(position);
              window.dovesiamomap.setOptions({zoom:17})
              window.dovesiamomap.setOptions({center:position})
              makeRisultatoActive(dataset.id);
            })
        };

        $('#input_search_dovesiamo').on('keyup',function(e){
          const query= this.value;
          $.ajax({
            url: query == "" ? "/relazioni" : "/relazioni/?q="+query,
          }).done(function(data) {
            stampaRisultatiQueryDoveSiamo(data);
            $('#risultati_dovesiamo').trigger('nuovi_risultati',[data]);
          });
        });
