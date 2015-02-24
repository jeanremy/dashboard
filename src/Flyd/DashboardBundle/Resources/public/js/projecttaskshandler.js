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
            $('.tasks').append(data.response);
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
$(document).on('change', '.task input, .task select, .task checkbox',function(e) {
    e.preventDefault();
    var form = $(this).parents('form'),
        statusRaw = form.find('#flyd_dashboardbundle_projecttaskuser_status option:selected').text(),
        status = statusRaw.trim().toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
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
          form.parent().attr('data-status', status);
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
    var $this = $(this),
        parentTask = $this.parents('.task');
    $.ajax({
      url:            removeUrl,
      type:           'POST',
      data: {
        ptu_id: parentTask.attr('id')
      },
      beforeSend: function(data) {
      },
      success: function(data) { 
        if(data.code == 200) {
           parentTask.fadeIn(400).remove();
          parentTask.find('#flyd_dashboardbundle_projectcanvastask_position').val(parseInt(parentTask.find('#flyd_dashboardbundle_projectcanvastask_position').val()) - 1);
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
$sort = $('.tasks').sortable({
    update: function( event, ui ) {
        sendTasksOrder();
    },
    placeholder: "ui-sortable-placeholder",
    axis: "y"
});

function sendTasksOrder() {
    $sort.sortable("disable");
    var $forms = $('.tasks').find('form');
    var $data = [];
    for (var i = 0, l = $forms.length; i<l; i++) {
      $($forms[i]).parent().attr('id');
      $data.push($($forms[i]).parent().attr('id'));
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