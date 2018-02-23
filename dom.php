<html>
<head>
    <title>DOM</title>
    <script type="text/babel" src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.js"></script>
</head>
<body>
<?=   "boy"; ?>
<?php
$name ='mike';
$name ='ken';



?>
<div id="mydiv" style="text-align: center" dir="ltr" class="name" my_special_attribute="hey u" ></div>
<p><strong>tttt</strong>k</p>
<!--<ul>-->
<!--    <li style="text-align: center">item1</li>-->
<!--    <li name="first">item1</li>-->
<!--    <li>item1</li>-->
<!--    <li>item1</li>-->
<!--</ul>-->
<ul id=”myList”>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>
<script>
    let ul = document.getElementsByTagName('ul')[0][0];

    alert(ul);
    let shops = (title) =>({title});
    let names = [];
    names.slice();
    const add = (x=5, y=10) => console.log(x+y);
//    alert(add());
    let getName = (name)=>name;
    alert(getName('jesus'));
    let name = "mike";
    let desc = `My name is  ${name}`;
    alert(desc);
    //Destrucing create a variable out of an object or array;
    //Restructuring creates a global variable into an object property with its variable as key and value as the object value
 name = 'elevation';

//    var ul = document.getElementById('myList');
////    alert(ul.childNodes.length);
//    var div= document.createElement('div');
//    div.id='mydiv';
//    div.className='mydiv';
//    div.innerHTML='i llove u';
////    document.body.(div);
//
//    var i=1,ebe,tolu;
//    ebe=7;
//    alert(ebe);
////    var div =  document.getElementById('mydiv');
//    alert(div.attributes.getNamedItem('my_special_attribute').nodeName);
//
//    alert(div.getAttribute('my_special_attribute'));
////    alert(div.id);
////    alert(div.id);
////    alert(div.style);
////    alert(div.className);
//
//
//    document.domain="localhost";
    var li= document.getElementsByTagName('li');
    alert(li.namedItem('first').innerHTML);
//    alert(li.item(0).style.textAlign);
//
//    var node =document.querySelector('ul').cloneNode(true);
//    var html = document.documentElement;
//    document.title="tes";
//    alert(document.URL);
//    alert(document.domain);
//    alert(document.referrer);
//    alert(document.firstChild);
//   alert(node.childNodes.length);

</script>
</body>
</html>