import $ from 'jquery';

$(document).ready(function(){


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
    //e.stopPropagation();
//
    //if(e.type == "keydown" && e.which == 13){
    //  e.preventDefault();
    //}
//
//
    //if(e.type == "keydown" &&  e.which != 13){
    //  return e;
    //}

    const q = $('#search').val();
  
    $.ajax({
      headers: {'Access-Control-Allow-Origin': '*'},
      url: 'http://localhost:8080/search/?q=' + q,
      dataType: 'json'
    }).done(function(data){
      let risultati = "";
      console.log(data);
      if(data.length > 0){
        data.forEach((d)=>{
          risultati += '<li><a id="search_result" href="'+d.url+'"><h2 class="title">↳ '+d.titolo+'</h2><p class="info">'+d.testo+'</p></a></li>'
        })
      } else {
        
        risultati = '<h3 class="noresults">Non abbiamo trovato nulla che corrispondesse a ciò che cercavi.</h3>'

      }                                 
      $('.post_list').html(risultati);
      //$('#risultati').fadeIn();


    })
  }