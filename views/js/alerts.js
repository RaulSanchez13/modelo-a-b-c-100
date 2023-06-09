setTimeout(function() { 
    document.getElementById('alert_Error').remove();
    var urlWithoutParam = location.href.replace('?error=1','');
    window.location.href = urlWithoutParam;
}, 3000);

setTimeout(function() { 
    document.getElementById('alert_Success').remove();
    var urlWithoutParam = location.href.replace('success=1&','');
    window.location.href = urlWithoutParam;
}, 3000);