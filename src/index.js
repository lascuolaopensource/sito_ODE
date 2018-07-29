import $ from 'jquery';
window.jQuery = $;

import initMap from "./modules/mappa.js";
import { loadScriptAsync } from "./modules/utility.js";
import {tns} from '../node_modules/tiny-slider/src/tiny-slider';
import './modules/sticky-kit.js';

$(document).ready(function(){
  
  const window_width = $( window ).width();
  if (window_width > 900) {
    $('.sticky_info').stick_in_parent();
  };
  
  $( window ).resize(function() {
    const window_width = $( window ).width();
    if (window_width < 900) {
      $(".sticky_info").trigger("sticky_kit:detach");
    } else {
      $('.sticky_info').stick_in_parent();
    }
  });

  tns({
    container: '.gallery',
    slideBy: 'page',
    nav: false,
    fixedWidth: false,
    controls: false,
    autoplay: true
  });

  loadScriptAsync("https://maps.googleapis.com/maps/api/js?key=AIzaSyCm8q0HlWOcPQ_iwUEwAPmQPIlqIZK0pBk").then(function(){
    if(document.getElementById('map_dovesiamo')){
      initMap();      
    }
  });
  
   $(".btn-responsive-menu").click(function() {
    console.log('click');
     $("#mainmenu").toggleClass("show");
   });

    $('.post_list_view_filter').click(function(e){
        e.preventDefault();
        const viewStyle = $(e.target).data('view-style');
        if(viewStyle == 'box'){
            $('.post_box').removeClass('full');
        }else{
            $('.post_box').addClass('full');
        }
    });

    $('#search').keydown(ajaxSearch);


    
});

const ajaxSearch = function(e){
    console.log('avvio la ricerca');
    e.stopPropagation();

    if(e.type == "keydown" && e.which == 13){
      e.preventDefault();
    }

    if(e.type == "keydown" &&  e.which != 13){
      return e;
    }

    const q = $('#search').val();
  
    $.ajax({
      headers: {'Access-Control-Allow-Origin': '*'},
      url: '/search/?q=' + q,
      dataType: 'json'
    }).done(function(data){
      let risultati = "";
      console.log(data);
      if(data.length > 0){
        data.forEach((d)=>{
          risultati += '<li><a id="search_result" href="'+d.url+'"><h2 class="title">'+d.title+'</h2><p class="info">'+d.testo+'</p></a></li>'
        })
      } else {
        
        risultati = '<h3 class="noresults">Non abbiamo trovato nulla che corrispondesse a ciò che cercavi.</h3>'

      }                                 
      $('.post_list').html(risultati);
      //$('#risultati').fadeIn();


    })
  }