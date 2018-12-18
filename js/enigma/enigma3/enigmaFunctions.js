
    init();

    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {

        if(empezado){
            ev.dataTransfer.setData("text", ev.target.id);
        }
        else{
            alert(msg[msgCounter]);
            msgCounter++;
            if(msgCounter === 3){
                startGame();
            }
        }
        
    }

    function drop(ev) {
        if (ev.currentTarget.children.length == 0){
            ev.preventDefault();
            var target = ev.target;
            var piece = document.getElementById(ev.dataTransfer.getData("text"));
            target.appendChild(piece);
    
            init();
            resultat();
            if (!amenazado && victoria()){
                pintarVictoria();
            }
            else{
                piece = document.getElementById(ev.dataTransfer.getData("text"));
                ayuda(piece);
            }

            console.log(document.getElementsByClassName("Square"));
            console.log(document.getElementsByClassName("piece"));
        }
    }

    function ayuda(piece){
        queensPath(piece, squareAlcance);
        pintarAmenazados();
    }


    function victoria(){
        var victoria = false;
        var objectPieces = document.getElementsByClassName("piece");

        Array.prototype.forEach.call(objectPieces,function(piece) {
            if (piece.getAttribute("position") != ""){
                setVictoria(piece);
            }

        });  
        if(document.getElementsByClassName("piece victoria")[7]){
            victoria = true;
        }             
        return victoria;

    }


    function init(){
        amenazado = false;
        readyPieces();
        readySquares();
    }



    function resultat(){
        var objectPieces = document.getElementsByClassName("piece");
        Array.prototype.forEach.call(objectPieces,function(piece) {

            if(!getAmenaza(piece)){
                queensPath(piece, pieceAmenaza);
            }        

        });    


    }

    function showMeTheWay(){
        var objectPieces = document.getElementsByClassName("piece amenazado");
        Array.prototype.forEach.call(objectPieces,function(piece) {
            //solo se ejecutara para las piezas amenazadas
            if(getAmenaza(piece)){
                queensPath(piece, squareAmenaza);
            } 
            
            
        }); 

    }




    function queensPath(piece, callback){

        var self = piece.getAttribute("position");
        var position = getRankFile(self);   
        var x;
        var y;
        var pieceFound = false;
        
        
        x = position[0];
        y = position[1];
        while (!pieceFound && x<9 ){
            target = "" + x + y;
            pieceFound = callback(piece, self, target);                
            x++;
        }

        pieceFound = false
        x = position[0];
        while (!pieceFound  && x>0){
            target = "" + x + y;
            pieceFound = callback(piece, self, target); 
            x--;
        }

        pieceFound = false
        x = position[0];
        y = position[1];
        while (!pieceFound  && y<9){
            target = "" + x + y;
            pieceFound = callback(piece, self, target); 
            y++;
        }

        pieceFound = false
        y = position[1];
        while (!pieceFound  && y>0 ){
            target = "" + x + y;
            pieceFound = callback(piece, self, target);
            y--;
        }
        pieceFound = false
        x = position[0];
        y = position[1];
        while (!pieceFound  && x<9 && y<9){
            target = "" + x + y;
            pieceFound = callback(piece, self, target);  
            x++;
            y++;
        }
        pieceFound = false
        x = position[0];
        y = position[1];
        while (!pieceFound  && x>0 && y>0){
            target = "" + x + y;
            pieceFound = callback(piece, self, target);  
            x--;
            y--;
        }

        pieceFound = false
        pieceFound = false;
        x = position[0];
        y = position[1];
        while (!pieceFound && x<9 && y>0){
            target = "" + x + y;
            targetElement = document.getElementById(target);
            pieceFound = callback(piece, self, target);  
            x++;
            y--;
        }

        pieceFound = false
        pieceFound = false;
        x = position[0];
        y = position[1];
        while (!pieceFound && x>0  && y<9){
            target = "" + x + y;
            pieceFound = callback(piece, self, target); 
            x--;
            y++;

        }   
    }


    function getAmenaza(element){
        var amenazado = false;
        if(element.classList.contains("amenazado")){
            amenazado = true;
        }
        return amenazado;
    }
    function getAlcance(element){
        var alcance = false;
        if(element.classList.contains("alcance")){
            var alcance = true;
        }
        return alcance;
    }

    function setAmenaza(element){
        element.classList.add("amenazado");
    }

    function setAlcance(element){
        element.classList.add("alcance");
    }

    function setVictoria(element){
        element.classList.add("victoria");
    }

    function readyPieces(){

        var objectPieces = document.getElementsByClassName("piece");

        Array.prototype.forEach.call(objectPieces,function(piece) {
            setPiecePosition(piece);
            resetearAmenaza(piece);
            resetearVictoria(piece);
        });
    }
    function readySquares(){
        var objectSquares = document.getElementsByClassName("Square");

        Array.prototype.forEach.call(objectSquares,function(square) {
            resetearAmenaza(square);
            resetearAlcance(square);
            resetearVictoria(square);
        });

    }



    function resetearAmenaza(element){    
        element.classList.remove("amenazado");

    }
    function resetearAlcance(element){    
        element.classList.remove("alcance");

    }
    function resetearVictoria(element){    
        element.classList.remove("victoria");

    }

    function setPiecePosition(piece){
        piece.setAttribute("position", piece.parentElement.id);
    }

    function pieceAmenaza(piece, self, target){
        var targetElement = document.getElementById(target);
        var pieceFound = false;
        if (self != target && targetElement.firstChild ){        
            setAmenaza(piece);            
            setAmenaza(targetElement.children[0]);
            amenazado = true;
            pieceFound = true;
        }

        return pieceFound;
    }

    function pintarAmenazados(){
        var objectPieces = document.getElementsByClassName("piece amenazado");

        Array.prototype.forEach.call(objectPieces,function(piece) {
            setAmenaza(piece.parentElement);
        });

        // var targetElement = document.getElementById(target);
        //  if (!getAmenaza(targetElement)){
        //      setAmenaza(targetElement);
        //  }
        //  return false;
     }

     function pintarVictoria(){
        var objectPieces = document.getElementsByClassName("piece victoria");

        Array.prototype.forEach.call(objectPieces,function(piece) {
            setVictoria(piece.parentElement);
        });

     }

    function squareAmenaza(piece, self, target){
        var targetElement = document.getElementById(target);
        if (!getAmenaza(targetElement)){
            setAmenaza(targetElement);
        }
        return false;
    }
    function squareAlcance(piece, self, target){
        var targetElement = document.getElementById(target);
        if (!getAlcance(targetElement)){
            setAlcance(targetElement);
        }
        return false;
    }

    function getRankFile(p){

        var position = p.split("");
        position[0] = parseInt(position[0]);
        position[1] = parseInt(position[1]);

        return position;    
    }
