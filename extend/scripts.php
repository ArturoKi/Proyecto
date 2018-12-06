        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
        <script>
    $(document).ready(function () {
      $('.dropdown-button').dropdown({
        constrainWidth: false,
        hover: true,
        belowOrigin: true,
        alignment: 'left'
      });

      // JAVASCRIPT START HERE //

      //Side-nav//
      $('.button-collapse').sideNav();

      $('.carousel').carousel();

      //Modal de inicio//
      $('.modal').modal({
        dismissible: true,
        inDuration: 300,
        outDuration: 200,
        ready: function (modal, trigger) {
          console.log('Modal Opened', modal, trigger);
        }
      });

      // Se inica el select de inicio //
      $('select').material_select();
      
      //Se hanilitan los tabs//
      $('#tabs-swipe-demo').tabs({
        swipeable: true
      });

      $('.slider').slider({
        indicators: true,
        height: 400,
        transition: 500,
        interval: 6000
      });

    });

  </script>