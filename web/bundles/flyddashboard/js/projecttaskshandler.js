// Autocomplete 
$('#flyd_dashboardbundle_projecttaskuser_mini_task_name').autocomplete({
    source : tasks,
    select: function( event, ui ) {
        $('#task_id').val(ui.item.id);
        $('#flyd_dashboardbundle_projecttaskuser_mini_task_step').val(ui.item.step).prop('disabled', true);
    }
    // voir quand on vide le champ à remettre le select en enbale, et a vider l'id task

});


// Ajout auto 
$('#flyd_dashboardbundle_projecttaskuser').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url:            $(this).attr('action'),
      type:           $(this).attr('method'),
      data: $(this).serialize(),
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
            $('.tbody').append(data.response);
            $('#flyd_dashboardbundle_projecttaskuser_mini_position').val(parseInt($('#flyd_dashboardbundle_projecttaskuser_mini_position').val()) + 1);
        } 
        else {
          console.log(data.response);

        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
    return false;
});

// remove
$(document).on('click', '.remove-task', function(e) {
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      url:            removeUrl,
      type:           'POST',
      data: {
        pct_id: $this.parent().parent().attr('id')
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
            $this.parent().parent().fadeIn(400).remove();
            $('#flyd_dashboardbundle_projectcanvastask_position').val(parseInt($('#flyd_dashboardbundle_projectcanvastask_position').val()) - 1);
        } else {
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
    return false;
});


// Sortable
$sort = $('.tbody').sortable({
    update: function( event, ui ) {
        sendTasksOrder(ui.item);
    },
    placeholder: "ui-sortable-placeholder",
    axis: "y"
});

function sendTasksOrder(item) {
    $sort.sortable("disable");
    $forms = $('.tbody').find('form');
    $.ajax({
      url:            updateOrderUrl,
      type:           'POST',
      data: {
        ptu: $forms
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
            $sort.sortable("enable");
        } else {
            console.log(data.response);
            $sort.sortable("enable");

        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
}