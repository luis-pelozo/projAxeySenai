$(document).ready(function(){
    $('.star').on('click', function(){
      var rating = $(this).data('rating');
      $('.result-value').text(rating);
      $('.star').removeClass('selected');
      $(this).addClass('selected');
    });
  });