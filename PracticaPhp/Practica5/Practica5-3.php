<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
         textarea {
            resize: none;
            border-radius:10px;
            border: 2px solid white;
            max-width:100%
         }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
          <div class="col" style="background-color: rgb(174, 214, 173);">
            <form method="post">
                <div class="form-group">
                    <label>Tu email</label>
                    <input type="email" name="Email-1" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email de tu amigo</label>
                    <input type="email" name="Email-2" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Sitio</label>
                  <input type="url" name="url" class="form-control" placeholder="https://example.com" pattern="https://.*"required>
                </div>
                
                <div class="form-group my-2">
                    <label>Mensaje:</label> <br>
                    <textarea name="body" maxlength="200" cols="174" required>
                    </textarea>
                </div>

                <button type="submit" name='send_recommendation' class="btn btn-primary mb-2">Enviar Formulario</button>
              </form>
            </div>
        </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

              $email1 = $_POST['Email-1'];
              $email2 = $_POST['Email-2'];
              $subject = 'Tu amigo te recomendo este sitio';
              $body = $_POST['body'];
              $sitio = $_POST['url'];

              $message = $sitio . "\n" . $body;

              $to = $email2;
              $headers = "From: $email1" . "\r\n";
              $outcome = mail($to, $subject, $message, $headers);

              if ($outcome) {
                echo "<script>alert('Mensaje enviado correctamente');</script>";
              } else {
                echo "<script>alert('Error al enviar el mensaje');</script>";
              }
            }
        ?>

</body>
</html>