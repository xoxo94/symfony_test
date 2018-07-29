$(function () {

  $(".outway").click(function () {
           var status=$(".outway").val();
            console.log(status)
           if(status==1){
               console.log(status)
               $(".account").css("display","block")
               $("#balance").css("display","none")

           }else {
               console.log(status)
               $(".account").css("display","none")
               $("#balance").css("display","block")
           }
  })


})