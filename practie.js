/**
 * Created by pearlstack on 16-Jun-17.
 */
if (localStorage) {
    // LocalStorage is supported!
    alert('book');

} else {
    // No support. Use a fallback such as browser cookies or store on the server.
}

function hello() {
    var name = prompt("What is your name", "");
    alert("Hello " + name + "! Welcome to my forum.");
}