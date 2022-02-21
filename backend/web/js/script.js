$(document).ready(function (){
    $("#addBtn").on('click',function(e) {
          e.preventDefault();
          $("#category_blok").load($(this).attr("href"));
          $("#category_modal").modal("show")
    })
})