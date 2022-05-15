let regbtn = document.getElementById("reg-btn");
  regbtn.addEventListener("click", function(){
    swal({
        title: "Ви успішно зареєструвались",
        text: "Через декілька секунд Вас перекине в меню для авторизації",
        icon: "success",
        button: "ОК",
        timer: 2000
      });
});