<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <script src="/js/jquery-3.6.0.min.js"></script> 
    <script src="/bootstrap/js/bootstrap.min.js"></script> 
    <script src="/js/main.js"></script>
    
    <title>Clients</title>
</head>
<body>
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Сообщение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-6 p-3 h2">Создание нового клиента</div>
            <form action="#" method="post" name="addclient">
                <div class="row p-3">
                    <div class="col-auto required">
                        <input type="text" class="form-control required" name="name"  placeholder="Имя" required="required">
                    </div>
                    <div class="col-auto required">
                        <input type="text" class="form-control" name="lastname" placeholder="Фамилия" required="required">
                    </div>
                    <div class="col-auto">
                        <div class="row px-3">
                            <div class="col-auto h2 px-0">
                                +
                            </div>
                            <div class="col-auto px-0 required">
                                <input type="text" class="form-control" name="phone" placeholder="Мобильный телефон" required="required">
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="input p-3">
                    <textarea  class="form-control" name="comment" placeholder="Комментарий"></textarea>
                </div>   
                <div class=" p-3">
                    <input type="submit" class="btn btn-primary" name = "submit" value = "Создать">
                </div>   
            </form>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <th class="col-1">ID</th>
                    <th class="col-1">Имя</th>
                    <th class="col-2">Фамилия</th>
                    <th class="col-2">Телефон</th>
                    <th class="col-4">Комментарий</th>
                    <th class="col-1">Дата создания</th>
                </thead>
                <?php 
                    require_once(__DIR__ . "/components/show_table.php");

                ?>
            </table>
        </div>
    </div>

</body>


