function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function eraseCookie(name) {   
    document.cookie = name+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
function comprobarCookie(name) {
    var myCookie = getCookie(name);

    if (myCookie == "" || myCookie == null) {
        return false;
    }
    else {
        return true;
    }
}

/* https://stackoverflow.com/questions/14573223/set-cookie-and-get-cookie-with-javascript
https://www.youtube.com/watch?v=tOuym4a7XjY
https://stackoverflow.com/questions/5968196/check-cookie-if-cookie-exists

*/