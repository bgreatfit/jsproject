<!doctype html>
<html lang="en">


<head>


    <title>

    </title>

</head>
<body>
<html>

<h1>Demo: Get Started Debugging JavaScript with Chrome DevTools</h1>
<label for="num1">Number 1</label>
<input placeholder="Number 1" id="num1">
<label for="num2">Number 2</label>
<input placeholder="Number 2" id="num2">
<button>Add Number 1 and Number 2</button>
<p></p>
<script>

   var age = Number('1')+Number('1');
   alert(age);
   window.color='ttt';
//  alert(window.color);
//alert(window.screenLeft=="number");
//var leftPos = (typeof window.screenLeft === "number")?window.screenLeft:window.screenX;
//alert(leftPos);
    window.moveBy(0,100);
    alert(document.documentElement.clientWidth);
    alert(document.documentElement.clientHeight);
    alert(window.innerHeight);
   var pageWidth = window.innerWidth,
       pageHeight = window.innerHeight;
   alert(typeof pageWidth);
   alert(document.compatMode);


    window.addEventListener("resize",resize,false);
    function resize(e){
        var clientWidth = document.documentElement.clientWidth;
        var clientHeight = document.documentElement.clientHeight;
        alert(clientWidth);
    }









   /* Copyright 2016 Google Inc.
    *
    * Licensed under the Apache License, Version 2.0 (the "License");
    * you may not use this file except in compliance with the License.
    * You may obtain a copy of the License at
    *
    * http://www.apache.org/licenses/LICENSE-2.0
    *
    * Unless required by applicable law or agreed to in writing, software
    * distributed under the License is distributed on an "AS IS" BASIS,
    * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    * See the License for the specific language governing permissions and
    * limitations under the License. */
   function onClick() {
       if (inputsAreEmpty()) {
           label.textContent = 'Error: one or both inputs are empty.';
           return;
       }
       updateLabel();
   }
   function inputsAreEmpty() {
       if (getNumber1() === '' || getNumber2() === '') {
           return true;
       } else {
           return false;
       }
   }
   function updateLabel() {
       var addend1 = getNumber1();
       var addend2 = getNumber2();
       var sum = addend1 + addend2;
       alert(typeof sum);
       label.textContent = addend1 + ' + ' + addend2 + ' = ' + sum;
   }
   function getNumber1() {
       return inputs[0].value;
   }
   function getNumber2() {
       return inputs[1].value;
   }
   var inputs = document.querySelectorAll('input');
    inputs[1].value = 7;
   var label = document.querySelector('p');
   var button = document.querySelector('button');
   button.addEventListener('click', onClick);
   alert(window.screen.width+'ff');
   alert(window.screen.availWidth+'avil');
   window.open("http://www.hcom/");
   window.open("http://www.wrox.com/","wroxWindow",
       "height=400,width=400,top=100,left=10,resizable=yes");
</script>



</body>
</html>
















