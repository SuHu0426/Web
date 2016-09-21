var canvas = document.getElementById('canvas');
if (canvas.getContext) {
    var ctx = canvas.getContext('2d');
    
    ctx.lineWidth = 1;
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = 0;
    ctx.font = '16px monospace';
    var startAngle = 0 * Math.PI;

    function drawClock() {
        var time = new Date();
        var hours = time.getHours();

        var minutes = time.getMinutes();
        var seconds = time.getSeconds();
		//var day = time.getDay();
		
        ctx.clearRect(0, 0, 200, 130);
		
		//===== 時
        var Red=ctx.createLinearGradient(0,130,0,0);
        Red.addColorStop(0,"rgba(255, 128, 128, 0.5)");
		Red.addColorStop(1,"#FF0000");
        ctx.fillStyle = "#FF0000";
        ctx.strokeStyle = "#000000";
        ctx.shadowColor = "rgba(255, 128, 128, 0.5)";
		ctx.beginPath();
		ctx.arc(100, 100, 100, startAngle, (hours/24) * -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

        ctx.fillStyle = "#DEB887";
        ctx.strokeStyle = "#000000";
		ctx.beginPath();
		ctx.arc(100, 100, 70, startAngle, -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

        ctx.fillStyle = "#DEB887";
        ctx.strokeStyle = "#000000";
		ctx.beginPath();
		ctx.arc(100, 100, 40, startAngle,  -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

		ctx.strokeStyle = "#000000";
		ctx.beginPath();
		ctx.arc(100, 100, 100, startAngle, -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.stroke();
        
        time =[];
        if (hours < 10) {
            time.push('0');
        }
        time.push(hours);

		ctx.fillStyle = "#FFFFFF";
		ctx.fillText(time.join(''), 90, 20);
		//===== 分
		var Green=ctx.createLinearGradient(0,130,0,0);
        Green.addColorStop(0,"rgba(128, 255, 128, 0.5)");
		Green.addColorStop(1,"#00FF00");
        ctx.fillStyle = "#00FF00";
		ctx.strokeStyle = "#000000";
        ctx.shadowColor = "rgba(128, 255, 128, 0.5)";
        ctx.beginPath();
		ctx.arc(100, 100, 70, startAngle, (minutes/60) * -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();
        
        ctx.fillStyle = "#DEB887";
		ctx.strokeStyle = "#000000";
        ctx.beginPath();
		ctx.arc(100, 100, 40, startAngle, -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();
        
        ctx.strokeStyle = "#000000";
		ctx.beginPath();
		ctx.arc(100, 100, 70, startAngle, -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.stroke();
        
        time = [];
        if (minutes < 10) {
            time.push('0');
        }
        time.push(minutes);
        ctx.fillStyle = "#FFFFFF";
		ctx.fillText(time.join(''), 90, 50);

        //===== 秒
		var Blue=ctx.createLinearGradient(0,130,0,0);
        Blue.addColorStop(0,"rgba(128, 128, 255, 0.5)");
		Blue.addColorStop(1,"#0000FF");
        ctx.fillStyle = "#0000FF";
        ctx.strokeStyle = "#000000";
        ctx.shadowColor = "rgba(128, 128, 255, 0.5)";
        ctx.beginPath();
		ctx.arc(100, 100, 40, startAngle, (seconds/60) * -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

        ctx.strokeStyle = "#000000";
		ctx.beginPath();
		ctx.arc(100, 100, 40, startAngle, -Math.PI , true);
		ctx.lineTo(100,100); 
        ctx.closePath();
        ctx.stroke();

		time = [];
        if (seconds < 10) {
            time.push('0');
        }
        time.push(seconds);
        ctx.fillStyle = "#FFFFFF";
		ctx.fillText(time.join(''), 90, 80);



		ctx.fillStyle="#000000";
		ctx.shadowColor = "rgba(64, 64, 64, 0.5)";
        time = [];
        if (hours < 10) {
            time.push('0');
        }
        time.push(hours);
        time.push(':');

        if (minutes < 10) {
            time.push('0');
        }
        time.push(minutes);
        time.push(':');

        if (seconds < 10) {
            time.push('0');
        }
        time.push(seconds);
        var Day = ' 星期'+'日一二三四五六'.charAt(new Date().getDay());
		time.push(Day);
		
        ctx.fillText(time.join(''), 30, 125);
    }

    drawClock();
    setInterval(drawClock, 1000);
    //setInterval("aa.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
}