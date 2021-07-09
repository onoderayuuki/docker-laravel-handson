<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>Moonlight</title>

  <script src="https://unpkg.com/konva@8.0.2/konva.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/edit.css">
  </head>
  <body>
    <header class="header">
      <h1 class="site-title"><a href="edit_list.php">Moonlight 🌒</a></h1>
      <a href="./edit_list.php?type=myfavorits&order=desc">⚫︎favorit</a>
      <!--form-->
      <!-- <form action="" method="get" class="search-form">
        <div>
          <input type="text" placeholder="Serch" class="search-box" />
          <input type="submit" value="送信" class="search-submit" />
        </div>
      </form> -->
      <!--end form-->
      <a href="./edit_list.php?type=myedits&order=desc">⚪︎myEdits</a>
      <a href="logout.php">Logout</a>
      
    </header>
    @yield('content')
</body>
</html>