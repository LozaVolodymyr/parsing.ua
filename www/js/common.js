$(document).ready(function() {
  toastr.options = {"positionClass": "toast-bottom-right"};
});

function query (command, callback, params) {
  $.ajax({
    type: "POST",
    async : true,
    url: "./query/" + command,
    dataType: "json",
    data: params,
    error: function(xhr, status, error) {},
    success: function(response, status, xhr) {
      if(callback && typeof callback == "function")
        callback(response);
    }
  });
};

// query("test", function(response) {
//   toastr.info(response.data.message)

// });

function addToCart(id) {
  $('.price-developer-add .preloader').toggleClass('visible');
  query("add", function(response) {

    $('.price-developer-add .preloader').toggleClass('visible');
      alert(response.data.message);

  }, {id: id});
} 
