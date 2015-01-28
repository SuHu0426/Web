function lastModified() {
    var modiDate = new Date(document.lastModified);
    var showAs = modiDate.getFullYear() + "/" + (modiDate.getMonth() + 1) + "/" + modiDate.getDate()  ;
    return showAs
}

function GetTime() {
    var modiDate = new Date();
    var Seconds

    if (modiDate.getHours() < 10) {
	Hours = "0" + modiDate.getHours();
    } else {
	Hours = modiDate.getHours();
    }

    if (modiDate.getMinutes() < 10) {
	Minutes = "0" + modiDate.getMinutes();
    } else {
	Minutes = modiDate.getMinutes();
    }

    if (modiDate.getSeconds() < 10) {
        Seconds = "0" + modiDate.getSeconds();
    } else {
        Seconds = modiDate.getSeconds();
    }

    var modiDate = new Date();
    var CurTime = Hours + ":" + Minutes + ":" + Seconds
    return CurTime
}

document.write("Last updated on ")
document.write(lastModified() + " @ " + GetTime());
document.write("");
