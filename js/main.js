$( document ).ready(function(){
    //Обработка формы и отправка данных на сервер
    $(":submit").click(function(event){
        event.preventDefault();
      let formData = $( "form" ).serialize(); 
        
      $.post( "/components/form_handler.php", formData, function( data ) { 
          if (data == "Данные из формы отправлены."){
              //Вывод модального окна с сообщением об успехе

                $(".modal-body").text(data);
                $(".modal").show(200);
                $(".modal button").click(function () {
                    $(".modal").hide(200);
                });

                //перезагрузка страницы для обновления таблицы
                window.location.reload();
                
          } else {
              //Вывод модального окна с предупреждениями
              
              $(".modal-body").text(data);
              $(".modal").show(200);
              $(".modal button").click(function () {
                  $(".modal").hide(200);
              });
            
          }
         
      });
    });
  });