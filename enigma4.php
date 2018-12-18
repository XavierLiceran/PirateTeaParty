<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>

<?php startblock('titulo')?>
    Enigma nº4
<?php endblock()?>

<?php startblock('principal')?>
<link rel="stylesheet" href="css/enigma/enigma4.css">
<body onkeydown="mover(event);" onkeyup="parar(event);">
    <div align="center">
        <div class="juego">
            <img src="./img/mar.jpg" style="width:100%;">
            <div class="bola" id="bola"  >
                <img src="./img/prisionero.png" style="width:30px; "  >
            </div>
            <div class="barco" id="j1"> 
            </div>
            <div class="barco" id="j2">
            </div>
        </div>
        <table class="marcador">
            <tr>
                <td  align="center"><span class="textoestatico">Prisioneros recuperados J1</span></td>
                <td  align="center"><span class="textoestatico">Prisioneros recuperados J2</span></td>
            </tr>
            <tr>
                <td align="center"><span class="textoestatico" id="puntosj1">0</span></td>
                <td  align="center"><span class="textoestatico" id="puntosj2">0</span></td>
            </tr>
        </table>
    </div>
    <script src="funciones.js"></script>
</body>
       
<?php endblock()?>

<?php startblock('scripts')?>

<script src="js/enigma/enigma4.js">   </script>

<?php endblock()?>
