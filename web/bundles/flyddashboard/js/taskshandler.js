// Autocomplete
$('#flyd_dashboardbundle_projectcanvastask_task_name').autocomplete({
    source : tasks,
    select: function( event, ui ) {
        $('#task_id').val(ui.item.id);
        $('#flyd_dashboardbundle_projectcanvastask_task_step').val(ui.item.step);
    }
});


// Ajout auto
$('#flyd_dashboardbundle_projectcanvastask').on('submit', function(e) {
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
            $('#flyd_dashboardbundle_projectcanvastask_position').val(parseInt($('#flyd_dashboardbundle_projectcanvastask_position').val()) + 1);
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
        // faire un disable
        // ouis envoie en ajax
        sendTasksOrder();
        console.log('updated');
    },
    placeholder: "ui-sortable-placeholder",
    axis: "y"
});

function sendTasksOrder() {
    $sort.sortable("disable");
    $.ajax({
      url:            updateOrderUrl,
      type:           'POST',
      data: {
        pct: $sort.sortable('toArray')
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
            $sort.sortable("enable");
        } else {
            console.log(data.response);
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
}