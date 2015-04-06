// jQuery get url search query params
jQuery.extend({
  getQueryParams : function(str) {
    return (str || document.location.search).replace(/(^\?)/,'').split("&").map(function(n){return n = n.split("="),this[n[0]] = n[1],this}.bind({}))[0];
  }
});

$(document).ready(function(){
  console.log('mauro.js loaded');

  var posts_order = [7,];

  //Question Module
  if ( $.getQueryParams()['page_id'] == '31' ) {
    var qc = $('.question_container');
    qc.append( $('.question') );

    // Choices
    qc.append('<hr>').append( $('.choices') );

    $('a.choice').click(function(e){
      console.log('pretending that i sent info to server');

      // change next question
      var posts_order = [7];


      if ($('.question_conatiner .solution').length == 0) { 
        qc.append('<hr>').append( $('.solution') );
      }
      $('html, body').animate({
        scrollTop: $(".question_container .solution").offset().top
      }, 1000);
    });
  }

  // Side content
  $('.left-side-box');
});
