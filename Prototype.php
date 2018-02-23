<!doctype html>
<html lang="en">


<head>


    <title>

    </title>

</head>
<body>

<?php
//function displayName($name){
//    func_get_arg()
//    $dname = $name;
//    return $dname;
//}
//$name = $dname;
//displayName('name');
//?>
<button onclick="runfunc()">Counter</button>
<p id="demo">0</p>
<script>
    function sayHello() {
        console.log('hello');
    }
    var func = sayHello;

window.onload =setInterval(runfunc,300);
    var counter =0;
    function myfunc(){
        return counter =counter + 1;
    }
    function runfunc(){
        document.getElementById('demo').innerHTML=myfunc();
    }

    function makeAdder(x) {
        return function(y) {
            return x + y;
        };
    }
add5 = makeAdder(5);
    alert(add5(10));
    function Person() {

    }
//    Person.prototype.name;
var person1 = new Person();
var people = [];
    alert(Object.getOwnPropertyNames(Person.prototype))


    function add() {
        var counter = 0;
        function plus() {counter += 1;}
        plus();
        return counter;
    }
    console.log(add());
add = (function () {
    var counter=0;
    return function(){
        return counter+=1;
    }
})();
add();
add();
console.log(add());
var obj;
if (  typeof obj === "undefined" ||  obj === null ){
    alert('correct');
}
function compare (value1,value2) {
    var counter = 0;
   return function(){
        counter+=1;
        return counter;

    }
//    if(value1 < value2){
//        return -1
//    }else if(value1 > value2 ){
//        return 1;
//    }else{
//        return 0;
//    }
}
var count =compare();
    count();
    alert(count());
//var result =compare(10,5);
    function createFunction() {
        var result = [];
        for (var i = 0; i < 10; i++) {
            result[i] = function () {
                return i ;
            }
        }
        return result;

    }

   alert(createFunction()[1]);
    var name = function(){
                   return 'mike'
               };
               alert(name.valueOf());
function sum( val1, val2) {
    add= val1 + val2;
    return add;
}
//alert(sum());
function person (val1, val2){
       return sum(val1,val2);
    }
  alert(person(5,5))  ;
//    (function(){
//        alert('This will execute immediately');
//    })();
    var person = {
        firstName:"John",
        lastName: "Doe",
        fullName: function() {
            return this.firstName + " " + this.lastName;
        }
    }
    var myObject = {
        firstName:"Mary",
        lastName: "Doe",
    }
    person.fullName.call(myObject);  // Will return "Mary Doe"
    function makeAdder(x) {
        return function(y) {
            return x + y;
        };
    }
//    alert(makeAdder(5));
    var add5 = makeAdder(5);
//    alert(add(5));
    var add10 = makeAdder(10);
    var  school = function(){
                     return 5999;
                  };
     alert(school());
     var admin = (function(){
         alert('hello');
     })();
    alert(admin())
</script>

<!--A closure is a function having access to the parent scope, even after the parent function has closed.-->



</body>
</html>
















