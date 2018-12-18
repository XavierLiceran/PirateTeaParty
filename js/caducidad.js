
        var timeoutInMiliseconds = 120000;
        var timeoutId; 

        function startTimer() { 
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
            
            startTimer();
        }
        
        function resetTimer() { 
            window.clearTimeout(timeoutId)
            startTimer();
        }

        function initTimer () {
            setupTimers();
        }    
 