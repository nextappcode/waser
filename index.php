<!DOCTYPE html>
<html lang="es">
    <head>
        <title>waser</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="logo/ico_from_logo.ico"> <!-- icono from waser -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
<header>
    <div class="title">
        <div class="item0">
            <a href="index.php"><img src="img/logo.png" alt=""><h1>WASER</h1></a>
        </div>
    </div>
</header>

<div class="container">
    <div class="item1">
        
        <form action="admin/soft.php" method="$_GET">
            <h4>Envia mensajes a cualquier numero <img src="img/Bandera_de_Bolivia_(Estado).svg.png" alt=""> </h2>
            <br>
            <label for="number">Numero</label>
             <br>
            <input class="sms_number" type="number" name="number" required placeholder="N. de telefono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                <br><br>
            <label for="message">Mensaje</label>
            <br>
            <input class="sms_text" type="text" name="message" placeholder="Escribe tu mensaje aquí.">
                <br><br>
            <input class="btn_restar" type="reset" value="borrar">
            <input class="btn_send" type="submit" value="Enviar">
        </form>
        
        <br><br>
        <label>Escucha BBN</label>
        <br>
        <audio src="https://audio-edge-es6pf.mia.g.radiomast.io/475ebed1-595e-4717-b888-64fe8fc6b09f" autoplay controls preload="auto"></audio>

    </div>

</div>

<footer>

    <a href="https://api.whatsapp.com/send/?phone=%2B59174417645&text&app_absent=0">From mc_codigopiter</a><p></p>
</footer>

    </body>
</html>