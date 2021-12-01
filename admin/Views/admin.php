<?php

use Controllers\AdminController;
use Controllers\HomeController;

$categories = HomeController::indexCategories();

// New Post

if (!empty($_POST["title"]) && !empty($_POST["categoryId"]) && !empty($_POST["image"]) && !empty($_POST["description"]) && !empty($_POST["content"])) {
  $authorId = $_SESSION["id"];
  $postData = [
    "title" => $_POST["title"],
    "categoryId" => intval($_POST["categoryId"]),
    "image" => $_POST["image"],
    "description" => $_POST["description"],
    "content" => $_POST["content"],
  ];

  AdminController::createPost($authorId, $postData);
  header("Location: index.php");
}
?>

<div class="base-container" id="post-container">
  <nav id="post-nav">
    <strong>Novo artigo</strong>
    <button onclick="handleSave()">Salvar</button>
  </nav>
  
  <form id="post-card">
    <input required name="title" placeholder="Título" max="255" />
    <select required name="categoryId">
      <?php
        foreach ($categories as $c) {
          ?>
            <option value="<?= $c["id"] ?>"><?= $c["title"] ?></option>
          <?php
        }
      ?>
    </select>
    <input required name="image" placeholder="Image link" />
    <textarea required name="description" placeholder="Descrição" max="255"></textarea>
    <div id="editor"></div>
  </form>

  <script>
    const editor = new RichTextEditor("#editor", { toolbar: "basic" });

    function getFormData() {
      const formData = new FormData(document.getElementById('post-card'));
      formData.append('content', editor.getHTMLCode());
      return formData;
    }

    function handleSave() {
      const formData = getFormData();

      let invalid = false;

      for (let val of formData.entries()) {
        if (!val[1]) invalid = true;
      }

      if (invalid) {
        alert("Insira todos os campos");
      } else {
        submit()
      }
    }

    function submit() {
      const formData = getFormData();
      const form = document.createElement('form');

      form.setAttribute('method', "POST");

      for (let val of formData.entries()) {
        const hiddenField = document.createElement('input');
        hiddenField.setAttribute('type', 'hidden');
        hiddenField.setAttribute('name', val[0]);
        hiddenField.setAttribute('value', val[1]);
        form.appendChild(hiddenField);
      }

      document.body.appendChild(form);
      form.submit();
    }
  </script>
</div>