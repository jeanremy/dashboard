// Autocomplete 
$('#flyd_dashboardbundle_projecttaskuser_mini_task_name').autocomplete({
    source : tasks,
    select: function( event, ui ) {
        $('#task_id').val(ui.item.id);
        $('#flyd_dashboardbundle_projecttaskuser_mini_task_step').val(ui.item.step).prop('disabled', true);
    }
    // faire un submit direct, puis remis à zéro

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

// Update
$('.task input, .task select, .task checkbox').on('change', function(e) {
    e.preventDefault();
    var form = $(this).parents('form');
    console.log(form.serialize());
    $sort.sortable("disable");

    $.ajax({
      url:            form.attr('action'),
      type:           form.attr('method'),
      data: form.serialize(),
      beforeSend: function(data) {
      },
      success: function(data) { 
        $sort.sortable("enable");
        updateProjectStatus();
        if(data.code == 200) {
          console.log(data.response);

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
        ptu_id: $this.parent().parent().attr('id')
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
        sendTasksOrder();
    },
    placeholder: "ui-sortable-placeholder",
    axis: "y"
});

function sendTasksOrder() {
    $sort.sortable("disable");
    var $forms = $('.taskcontainer').find('form');
    var $data = [];
    for (var i = 0, l = $forms.length; i<l; i++) {
      $($forms[i]).parent().parent().attr('id');
      $data.push($($forms[i]).parent().parent().attr('id'));
      // utiliser update ptu

    }
    $.ajax({
      url:            updateOrderUrl,
      type:           'POST',
      data: {
        ptu: $data
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
            console.log(data.response);
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


function updateProjectStatus() {
  $.ajax({
      url:            updateStatusUrl,
      type:           'POST',
      data: {
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        // on edit page, status__name will be diffrent
        statusCont.html(data.response.name);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
}