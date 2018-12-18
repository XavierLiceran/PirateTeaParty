
        var timeoutInMiliseconds = 120000;
        var timeoutId; 

        function startCaducidad() { 
            timeoutId = window.setTimeout(doInactive, timeoutInMiliseconds)
        }
        
        function doInactive() {
            window.location.replace('./sessionDestroy.php');
            //alert("cierra");
        }
        
        function setupTimers () {
            document.addEventListener("mousemove", resetTimer, false);
            document.addEventListener("mousedown", resetTimer, false);
            document.addEventListener("keypress", resetTimer, false);
            document.addEventListener("touchmove", resetTimer, false);
            
            startCaducidad();
        }
        
        function resetTimer() { 
            window.clearTimeout(timeoutId)
            startCaducidad();
        }

        function initTimer () {
            setupTimers();
        }    
 