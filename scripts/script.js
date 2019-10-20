$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

$(function() {
  $(".click").click(function(e) {
    e.preventDefault();
    $("#addnew").modal("show");
    var id = $(this).data("id");
    getRow(id);
  });
});

$(document).ready(function() {
  $("#table").DataTable();
});

$(function() {
  $(".user-card").hover(
    function() {
      $(".user-card").css("display", "block");
    },
    function() {
      $(".user-card").css("display", "none");
    }
  );
});
$(function() {
  $(".user-functions").hover(
    function() {
      $(".user-card").css("display", "block");
    },
    function() {
      $(".user-card").css("display", "none");
    }
  );
});
