let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}
$(document).on('click', 'ul li', function(){
  $(this).addClass('active-sidebar').siblings().removeClass('active')
})

/*$(document).ready(function () {
  $('#example').DataTable();
});*/

// jquery data tables
$(document).ready(function () {
    $('#recent').DataTable()({
        columnDefs: [
            {
                targets: [0],
                orderData: [0, 1],
            },
            {
                targets: [1],
                orderData: [1, 0],
            },
            {
                targets: [4],
                orderData: [4, 0],
            },
        ],
    });
});
$(document).ready(function () {
    $('#winn').DataTable()({
        columnDefs: [
            {
                targets: [0],
                orderData: [0, 1],
            },
            {
                targets: [1],
                orderData: [1, 0],
            },
            {
                targets: [4],
                orderData: [4, 0],
            },
        ],
    });
});
$(document).ready(function () {
  $('#ongo').DataTable()({
      columnDefs: [
          {
              targets: [0],
              orderData: [0, 1],
          },
          {
              targets: [1],
              orderData: [1, 0],
          },
          {
              targets: [4],
              orderData: [4, 0],
          },
      ],
  });
});
(function($) {
    $.fn.currencyInput = function() {
      this.each(function() {
        var wrapper = $("<div class='currency-input' />");
        $(this).wrap(wrapper);
        $(this).before("<span class='currency-symbol'>₱</span>");
        $(this).change(function() {
          var min = parseFloat($(this).attr("min"));
          var max = parseFloat($(this).attr("max"));
          var value = this.valueAsNumber;
          if(value < min)
            value = min;
          else if(value > max)
            value = max;
          $(this).val(value.toFixed(2));
        });
      });
    };
  })(jQuery);

  $(document).ready(function() {
    $('input.currency').currencyInput();
  });

  $(document).ready(function(){

    var table = $('#example').DataTable({
      dom: 'Bfrtip',
        buttons:['copy', 'csv', 'excel', 'pdf', 'print']

    });


    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)');

});

$(document).ready(function(){
  $('.userinfo').click(function(){
      var userid = $(this).data('id');
      $.ajax({
          url: 'ajaxfile.php',
          type: 'post',
          data: {userid: userid},
          success: function(response){
              $('.modal-body').html(response);
              $('#empModal').modal('show');
          }
      });
  });
});