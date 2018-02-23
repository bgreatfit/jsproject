<!doctype html>
<html lang="en">


<head>


    <title>

    </title>
<style>
    body{
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }
    h1{
        font-size: 4em;
    }
    p{
        font-size: 2.4em;
    }
</style>
</head>
<body>
<h1>HOW WELL DO YOU CODE</h1>
<p>
    when you solve a problem you cant find out the solution to that problem
    when you solve a problem you cant find out the solution to that problem
    when you solve a problem you cant find out the solution to that problem
    when you solve a problem you cant find out the solution to that problem
</p>
<a href="#" id="size-12">12</a>
<a href="#" id="size-16">16</a>
<a href="#" id="size-18">18</a>
<br>
<br>
<br>
<br>
<br>
<?php

$route['GET']['url'] = 'controller';

var_dump($route);


?>
<br>
<br>
<br>
<br>
<br>









<form id="contactForm" action="" method="POST">
    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="field">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
    </div>
    <div class="field">
        <input type="submit" value="send">
    </div>
</form>

<p id="help">Helpful notes will appear here</p>
<p>E-mail: <input type="text" id="email" name="email"></p>
<p>Name: <input type="text" id="name" name="name"></p>
<p>Age: <input type="text" id="age" name="age"></p>
<script>
function changeSize(size){
    return function(){
        document.body.style.fontSize = size+'px';
    }
}
var size12 = changeSize(12);
var size16 = changeSize(16);
var size18 = changeSize(18);
document.getElementById('size-12').onclick = size12;
document.getElementById('size-16').onclick = size16;
document.getElementById('size-18').onclick = size18;
function msg(){
    return alert('eeee');
}
var closure = msg();
    //alert(closure());

var counter = (function() {
    var privateCounter = 0;
    function changeBy(val) {
        privateCounter += val;
    }
    return {
        increment: function() {
            changeBy(1);
        },
        decrement: function() {
            changeBy(-1);
        },
        value: function() {
            return privateCounter;
        }
    };
})();
    function showHelp(help) {
        document.getElementById('help').innerHTML = help;
    }

function setupHelp() {
    var helpText = [
        {'id': 'email', 'help': 'Your e-mail address'},
        {'id': 'name', 'help': 'Your full name'},
        {'id': 'age', 'help': 'Your age (you must be over 16)'}
    ];

    for (var i = 0; i < helpText.length; i++) {
        var item = helpText[i];
        document.getElementById(item.id).onfocus = function() {
            showHelp(item.help);
        }
    }
}

setupHelp();
    function count(){
        var result =[];
        for (var i=0; i <10; i++){
            result[i] = (function () {
                return i;
            })()



        }
        return result;
    }
    //var msg =count()[0]();
    alert(Object.getOwnPropertyNames(count()));
    document.write(count())
</script>
</body>
</html>
















