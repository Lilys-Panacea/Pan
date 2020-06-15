<?php
session_start();
?>
      <header class="page-header">

      <a href="https://vk.com/dmitriy_o_0">Вк</a>
      <a href="mailto:dimontssuper@mail.ru" class="header-email">Mail</a>
      <a href="tel:+666" class="header-phone">+666</a>
      <a href="menu" class="header-menu"></a>
      
       <div id="auth_block">
          <?php
            if(!isset($_SESSION['email'])&&!isset($_SESSION['password'])){
           ?>
           <div id="link_register">
               <a href="form_register.php">Регистрация</a>
           </div>
           <div id="link_auth">
               <a href="form_auth.php">Авторизация</a>
           </div>
            <?php
           }else{
            ?>
                <div id="link_logout">
                    <a href="logout.php">Выход</a>
                </div>
            <?php   
            }
           ?>
       </div> 
    </header>