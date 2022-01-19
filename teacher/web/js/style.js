$( function () {
   $("#narx").change(function()  {
       let num = $(this).val();
       var result = "";
       var space_size = 3;

       while (num.length > 0) // Loop through string
       {
           result = result + " " + num.substring(0,space_size);
           num = num.substring(space_size);
       }
       $(this).val(result)
   })
})

