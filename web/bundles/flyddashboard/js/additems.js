$(document).ready(function() {


    // more buttons
    $('.btn--add').next().hide();
    $('.btn--add').on('click', function(e){
        e.preventDefault();
        var $this = $(this);
        $this.next().toggle();
    });

    $(document).on('submit', '#flyd_dashboardbundle_address, #flyd_dashboardbundle_contact', function(e){
        e.preventDefault();
        var $this = $(this);
            loadItem($this);
    });

    function loadItem($this) {
        var $parentBloc = $this.parent();

        $.ajax({
          url:            $this.attr('action'),
          type:           $this.attr('method'),
          data: $this.serialize(),
          beforeSend: function(data) {
            console.log('beforsend');
          },
          success: function(data) {
            console.log(data);
            if(data['code'] == 200) {
                $parentBloc.parent().find('.bloc > h2 + .row').append(data['response']);
                $parentBloc.find('input, select').val('');
            }
            else {

              $('#addresses').prepend('erreur');
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log('error');
          }
        });

    }

});
