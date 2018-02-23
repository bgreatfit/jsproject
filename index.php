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
function factorial(num){

    if (num <=1){
        return 1;
    }else{
        return num *  arguments.callee(num-1)
    }
}
function callFact(num){
    return factorial(num)
}
alert(callFact(5));
//alert(factorial.caller);

var book ={story:"yamm",fiction:function () {
    return alert('home');
}};
function loop() {
    return alert('loop');
}
alert(book.fiction());




    window.onload = function() {
        // Check for LocalStorage support.
        if (localStorage) {

            // Add an event listener for form submissions
            document.getElementById('contactForm').addEventListener('submit', function() {
                // Get the value of the name field.
                var name = document.getElementById('name').value;

                // Save the name in localStorage.
                localStorage.setItem('name', name);
            });

        }

    }
    function createComparisonFunction(propertyName) {
        return function(object1, object2){
            var value1 = object1[propertyName];
            var value2 = object2[propertyName];
            if (value1 < value2){
                return -1;
            } else if (value1 > value2){
                return 1;
            } else {
                return 0;
            }
        };
    }
    var data = [{name:'boy'},{name:'ate'}];
    data.sort(createComparisonFunction(data));
    alert(data[0].name); //Nicholas


    var book ="<?php echo $var ?>";


</script>
<script src="practie.js"></script>

</body>
</html>
















