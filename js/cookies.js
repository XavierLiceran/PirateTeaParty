function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
} 

function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}
function comprobarCookie(name) {
    var myCookie = getCookie(name);

    if (myCookie == null) {
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