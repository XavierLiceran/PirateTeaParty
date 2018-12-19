<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>

<?php startblock('titulo')?>
    Enigma nº3
<?php endblock()?>

<?php startblock('principal')?>
<link rel="stylesheet" href="css/enigma/enigma3.css">
<div class="container-fluid">
    <div id = "UI" class="container col-6 float-left">
        <div id = "lepanto" class="card ">
            <img  class="card-img-top " src="/PirateTeaParty/img/enigma/enigma3/batalladelepanto2.jpg" alt="">
            <div id="card1" class="card-body">
                
                <h4 class="card-title">Batalla de Lepanto</h4>
                <div id = "instrucciones" class = "row">
                    <img id = "imagen"  class = ""   src="" alt="">
                    <p id ="text" class="">
                    Nos informan que una gran flota infiel se acerca a nuestas costas, se hacen llamar corsarios y estan al servicio del Imperio Otomano, pero no son mas que piratas que saquean nuestras rutas comerciales. 
                    <br/>
                    Hemos reunido toda la flota cristiana y hoy, en el glorioso santo de la Virgen del Rosario, saldremos victoriosos en nuestra santa empresa.
                    </p>
                </div>



                
            </div>

            <div id = "botones" class="card-footer">
                <form id="path" action="controllers/pathController.php" method ="post">
                    <input type="hidden" name="path" value="3">
                    <button type="button" onclick="nextCard()" style="float: right" class="btn btn-sm col-3 boton" id="btn1">Siguiente</button>
                </form>
            </div>

    </div>
    </div>
    

    <div id="board" class = "float-right col-6">
        
        <table class = "">
        <thead>
            <tr>
            <th ></th>
            <th >a</th>
            <th >b</th>
            <th >c</th>
            <th >d</th>
            <th >e</th>
            <th >f</th>
            <th >g</th>
            <th >h</th>
            <th ></th>  
            </tr>

        </thead>
        <tbody>
            <tr>
            <th>8 </th>
            <td><div id="81" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Light"></div></td>
            <td><div id="82" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Dark"></div></td>
            <td><div id="83" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Light"></div></td>
            <td><div id="84" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Dark"></div></td>
            <td><div id="85" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Light"></div></td>
            <td><div id="86" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Dark"></div></td>
            <td><div id="87" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <td><div id="88" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <th> 8</th>
            </tr>
            <tr>
            <th>7 </th>
            <td><div id="71" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Dark"></div></td>
            <td><div id="72" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Light"></div></td>
            <td><div id="73" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Dark"></div></td>
            <td><div id="74" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Light"></div></td>
            <td><div id="75" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Dark"></div></td>
            <td><div id="76" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Light"></div></td>
            <td><div id="77" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <td><div id="78" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <th> 7</th>
            </tr>
            <tr>
            <th>6 </th>
            <td><div id="61" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Light"></div></td>
            <td><div id="62" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Dark"></div></td>
            <td><div id="63" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Light"></div></td>
            <td><div id="64" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Dark"></div></td>
            <td><div id="65" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Light"></div></td>
            <td><div id="66" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Dark"></div></td>
            <td><div id="67" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <td><div id="68" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <th> 6</th>
            </tr>
            <tr>
            <th>5 </th>
            <td><div id="51" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Dark"></div></td>
            <td><div id="52" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Light"></div></td>
            <td><div id="53" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Dark"></div></td>
            <td><div id="54" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Light"></div></td>
            <td><div id="55" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Dark"></div></td>
            <td><div id="56" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Light"></div></td>
            <td><div id="57" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <td><div id="58" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <th> 5</th>
            </tr>
            <tr>
            <th>4 </th>
            <td><div id="41" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Light"></div></td>
            <td><div id="42" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Dark"></div></td>
            <td><div id="43" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Light"></div></td>
            <td><div id="44" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Dark"></div></td>
            <td><div id="45" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Light"></div></td>
            <td><div id="46" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Dark"></div></td>
            <td><div id="47" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <td><div id="48" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <th> 4</th>
            </tr>
            <tr>
            <th>3 </th>
            <td><div id="31" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Dark"></div></td>
            <td><div id="32" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Light"></div></td>
            <td><div id="33" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Dark"></div></td>
            <td><div id="34" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Light"></div></td>
            <td><div id="35" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Dark"></div></td>
            <td><div id="36" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Light"></div></td>
            <td><div id="37" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <td><div id="38" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <th> 3</th>
            </tr>
            <tr>
            <th>2 </th>
            <td><div id="21" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file1 Light"></div></td>
            <td><div id="22" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file2 Dark"></div></td>
            <td><div id="23" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file3 Light"></div></td>
            <td><div id="24" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file4 Dark"></div></td>
            <td><div id="25" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file5 Light"></div></td>
            <td><div id="26" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file6 Dark"></div></td>
            <td><div id="27" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Light"></div></td>
            <td><div id="28" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank8 file7 Dark"></div></td>
            <th> 2</th>
            </tr>
            <tr>
                <th>1 </th>
                <td><div id="11" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file1 Dark"></div></td>
                <td><div id="12" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file2 Light"></div></td>
                <td><div id="13" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file3 Dark"></div></td>
                <td><div id="14" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file4 Light"></div></td>
                <td><div id="15" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file5 Dark"></div></td>
                <td><div id="16" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file6 Light"></div></td>
                <td><div id="17" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file7 Dark"></div></td>
                <td><div id="18" ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file8 Light"></div></td>
                <th> 1</th>             
            </tr>
        
            
        </tbody>
        <tfoot>    
            <tr>
            <th ></th>
            <th >a</th>
            <th >b</th>
            <th >c</th>
            <th >d</th>
            <th >e</th>
            <th >f</th>
            <th >g</th>
            <th >h</th>
            <th ></th>  
            </tr>
            <tr>
                <th></th>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file1 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag1"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file2 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag2"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file3 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag3"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file4 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag4"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file5 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag5"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file6 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag6"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file7 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag7"  class="piece" ondragstart="drag(event)" ></div></td>
                <td><div ondrop="drop(event)" ondragover="allowDrop(event)" class="Square rank1 file8 Dark"><img src="img/enigma/enigma3/boat.png" draggable="true" id="drag8"  class="piece" ondragstart="drag(event)" ></div></td>
                <th></th>             
            </tr>
        </tfoot>
        </table>

    </div>
</div>


       
<?php endblock()?>

<?php startblock('scripts')?>
<script src="js/enigma/enigma3/definitions.js">     </script>
<script src="js/enigma/enigma3/UI.js">              </script>
<script src="js/enigma/enigma3/enigmaFunctions.js"> </script>



<?php endblock()?>