{{-- @php
  dump($card);
@endphp --}}

<!DOCTYPE html>
<html>

<head>
  <script src="https://unpkg.com/konva@8.0.2/konva.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/edit.css">
  <meta charset="utf-8" />
  <title>yourEdit</title>

</head>

<body>
  <header class="header">
    <h1 class="site-title"><a href="edit_list.php">Moonlight 🌒</a></h1>
    <a href="edit_list.php">⚫︎favorit</a>
    <a href="edit_list.php">…myedits</a>
    <a href="logout.php">Logout</a>
  </header>
  <main>
    <div id="editor-wrapper" class="editor-wrapper">
      <div id="editor-container" class="editor-container">
        <span>
          くれなゐの二尺伸びたる薔薇の芽の針やはらかに春雨のふる
        </span>
      </div>
    </div>
    <!-- メインキャンバス -->
    <div id="container" class="container"></div>
    <!-- 保存と送信 -->
    <div class="button-wrapper">
      <button id="delete" onclick="location.href='#'">🗑delete</button>
      <button id="download">download</button>
      <button id="save">Save</button>
    </div>
  </main>
  <!-- 送信フォーム -->
  <form action="edit_add.php" method="POST" name="saveForm">
    <p>id<input id="cardID" name="cardID" value="{{ $card->cardID }} ?>" /></p>
    <p>
      imageX<input id="textX" name="textX" value="" />
      imageY<input id="textY" name="textY" value="" />
    </p>
    <p>
      imageSrc<input type="json" id="imageSrc" name="imageSrc" value="" />
    </p>
    <textarea id="textJSON" name="textJSON" value=""></textarea>
    <textarea id="imageBase64" name="imageBase64" value=""></textarea>
    <!-- <input type="submit" class="" value="表示" /> -->
  </form>


  <script>
    
    // const PHOTOS = $photos_json;
    // console.log(PHOTOS);

    // quill:editor ********************************************************
    const quill = new Quill("#editor-container", {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          [{
            font: []
          }],
          ["bold", "italic", "underline"],
          //文字色
          [{
            color: []
          }, {
            background: []
          }],
        ],
      },
      placeholder: "Compose an epic...",
      theme: "snow", // or 'bubble'
    });



  </script>
</body>

</html>