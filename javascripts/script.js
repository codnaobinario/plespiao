'use strict';

$(function() {
  var accounts = $('#accounts');

  // filters
  $('#filters').on('click', 'a', function(e) {
    e.preventDefault();

    var status = $(this).data('status');

    accounts.find('li').hide();
    accounts.find('li.' + status).show();
  })
})
