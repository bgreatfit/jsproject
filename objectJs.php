<!doctype html>
<html lang="en">


<head>


    <title>

    </title>

</head>
<body>

<?php $var  ='hhh0';  ?>
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
<?php $array = ['book','pen'];

?>
<script>
    window.onload=function () {
        return alert('mike')
    };
    var car = {type:"Fiat", model:"500", color:"white",name:"Nicholas",job:"Software Engineer",age:39,
        sayName:function(boy)
        {
            alert(this.type+' concatenating'+boy)
        }
    };
car.sayName('yyy');
    var person = {name:"ken",houde:"hhh"};
    var person ={};
   person.name=function () {
       return alert('ken')
   };

   for (var thing in car)
   {
       if(car.hasOwnProperty(thing)){
           alert(car[thing]);

       }
   }
   Object.defineProperty(car,"type",{
       writable:false

   });
   car.type='benz';
    alert(car.type);

   // var book={_year:2004,edition;1};
    function createPerson(name, age, job) {
        var o = {};
        o.name = name;
        o.age = age;
        o.job = job;
        o.sayName = function () {
            alert(this.name);
        };
        return o;
    } function createPerson1(name, age, job) {

        this.name = name;
        this.age = age;
        this.job = job;
        this.sayName = function () {
            alert(this.name);
        };
    }
    var person1 = createPerson1("Nicholas", 29, "Software Engineer");
    var person2 = createPerson1("Nicholas", 29, "Software Engineer");
alert('fff');
alert(person1.sayName == person2.sayName);
function Person(name,age,course){
}
Person.prototype={constructor:Person;sayName:function () {
        return this.name;
    }};

var person = new Person('mike');


alert(person.name);
//alert()

</script>



</body>
</html>
















