$(document).ready(function() {
  $('.btn-remove-item').click(function() {
    let id = $(this).data('itemId');
    let route = $(this).data('routeRemove');
    let token = $('meta[name="csrf-token"]').attr('content');

    console.log(`${route}/${id}`);
    $('.remove-item').click(function() {
      $.ajax({
        url: `${route}/${id}`,
        type: 'DELETE',
        data: {
          "_token": token
        },
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            alert(response.message);
            $(`.row-item[data-item-id="${id}"]`).remove();
          } else {
            console.error('Error deleting item:', response.error);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error('Error deleting item:', textStatus, errorThrown);
        }
      });
    });
  });
});
