<!doctype HTML>
<html lang="en">
<head>
    <title>BOM</title>
    <style>

    </style>
    <script></script>
</head>
<body>
<div id="move" style="width: 0px;background-color: aqua;text-align: center" > 0%</div>
<p>one</p>
<p>two</p>
<p>three</p>
<p>four</p>
<p>five</p>
<a  id="frame" >Topframe</a>
<script>
    alert(Object.getOwnPropertyNames(navigator.plugins[0]));
//    //assume starting at http://www.wrox.com/WileyCDA/
//    //changes URL to “http://www.wrox.com/WileyCDA/#section1”
//    location.hash = "#section1";
//    //changes URL to “http://www.wrox.com/WileyCDA/?q=javascript”
//    location.search = "?q=javascript";
//    //changes URL to “http://www.yahoo.com/WileyCDA/”
//    location.hostname = "www.yahoo.com";
//    //changes URL to “http://www.yahoo.com/mydir/”
//    location.pathname = "mydir";
//    //changes URL to “http://www.yahoo.com:8080/WileyCDA/
   var para = document.querySelector('p');
para.innerHTML ="twowo" ;
    var frame =document.getElementById('frame').addEventListener('click',function () {
        var res =confirm('are you sure u wan to delete');
        if (res){
            document.getElementById('frame').remove();
        }

    });
//    function topFrame() {
//        document.getElementById('frame').onclick=confirm('are you sure u wan to delete');
//    }
//    topFrame();
        var move =parseInt(document.getElementById('move').style.width);
    var intervalID = null;
    function run()
    {

        move ++;
        document.getElementById('move').style.width = move+'px';
        document.getElementById('move').innerHTML = move+'%';
        document.getElementById('move').style.marginRight = move+'px';


        if (move ===5000){
            clearInterval(intervalID);

        }
    }
     intervalID =setInterval(run ,50);
//    function open9(){
//        return window.open("http://wrox.com",undefined,"height=400,width=900,resizable=yes");
//    }
//   var winID = window.open("http://wrox.com",undefined,"height=400,width=900,resizable=yes");
//    winID.resizeTo(500,500);
//    winID.moveBy(500,500);
//
//    document.getElementById('frame').onclick =open9;


</script>
</body>

</html>