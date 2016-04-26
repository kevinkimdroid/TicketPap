function startTime(id)
{
var today = new Date()
var h = today.getHours()
if(h<10)
{
h="0"+h;
}
var m = today.getMinutes()
if(m<10)
{
m="0"+m;
}
var s = today.getSeconds()
if(s<10)
{
s="0"+s;
}
document.getElementById('timenow').innerHTML = "TIME: "+h+":"+m+":"+s;
document.getElementById('timenow').style.fontSize="30";
var t = setTimeout(startTime, 500);
}

function setStyle(id,style,value)
{
id.style[style] = value;	
}

function opacity(el,opacity)
{
setStyle(el,"filter:","alpha(opacity="+opacity+")")
setStyle(el,"-moz-opacity",opacity/100)
setStyle(el,"-khtml-opacity",opacity/100)
setStyle(el,"opacity",opacity/100)
}

function calendar()
{
var today = new Date();
var d = today.getDate();
var m = today.getMonth();
var y = today.getYear();
if(y<=200)
{
y += 1900;
}
months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
monthdays = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
if(y%4 == 0 && y!=1900)
{
monthdays[1] = 29;
}
total = monthdays[m];
var todaydate = d+' '+months[m]+', '+y;
beg_j = today;
beg_j.setDate(1);
if(beg_j.getDate()==2)
{
beg_j.setDate(0);
}
beg_j = beg_j.getDay();
document.write('<table class="normal" border="1" onload="opacity(document.getElementById(\'calbody\'),20);"><tbody id="calbody"><tr><th colspan="7">'+todaydate+'</th></tr>');
document.write('<tr style="background-color:brown" ><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr><tr>');
week=0;
for(i=1;i<=beg_j;i++)
{
document.write('<td>'+(monthdays[m-1]-beg_j+i)+'</td>');
week++;
}
for(i=1;i<=total;i++)
{
if(week==0)
{
document.write('<tr>');
}
if(d==i)
{
document.write('<td>'+i+'</td>');
}
else
{
document.write('<td>'+i+'</td>');
}
week++
if(week==7)
{
document.write('</tr>');
week=0;
}
}
for(i=1;week!=0;i++)
{
document.write('<td>'+i+'</td>');
week++;
if(week==7)
{
document.write('</tr>');
week=0;
}
}
document.write('</tbody></table>');
opacity(document.getElementById('calbody'),70);
return true;
}

function goBack()
{
window.history.back();
}