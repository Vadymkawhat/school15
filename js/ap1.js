let logbtn = document.getElementById("btn");
logbtn.addEventListener("click", function(){
    swal({
        title: "Ви успішно ввійшли",
        text: "Через декілька секунд Вас перекине на сайт школи",
        icon: "success",
        button: "ОК",
        timer: 2000
      });
});

