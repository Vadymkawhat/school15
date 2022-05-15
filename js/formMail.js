// подія на натиснення кнопки з id sendMail
$("#sendMail").on("click", function(){
    var email = $("#email").val().trim();
    var title = $("#title").val().trim();
    var message = $("#message").val().trim();
    // trim - видаляє всі лишні пробіли в строці
    if(email == ""){
        swal({
            title: "Введіть коректну пошту",
            icon: "error",
            button: "ОК",
            timer: 2000
          });
        return false;
    }else if(title == ""){
        swal({
            title: "Введіть коректний заголовок",
            icon: "error",
            button: "ОК",
            timer: 2000
          });
          return false;
    }else if(message == ""){
        swal({
            title: "Введіть повідомлення",
            icon: "error",
            button: "ОК",
            timer: 2000
          });
          return false;
    }


    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'email': email, 'title': title, 'message': message },
        dataType: 'html',
        beforeSend: function(){
            $("#sendMail").prop("disabled", true);
        },
        success: function(data){
            if(!data){
                alert("Сталася помилка, повідомлення не віправлено!");
            }
            else
                $("#mailForm").trigger("reset");
            
            $("#sendMail").prop("disabled", false);
        }
    });


});