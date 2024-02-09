<?php 
$title = "Intro to JS";
include 'header.php'; ?>

<h2>Intro to JavaScript</h2>
<script>
    document.write("Hello World")

    //Triggering an alert
    //window.alert("This is an alert box")
</script>

<noscript>
    You do not have js and so, you cannot see this content
</noscript>

<script>
    //document.write after loading the page
    function hello(){
        document.write("This is after the page has loaded")
    }
    
</script>
<button onclick="document.write('This is something')">Click Me</button>
<?php include 'footer.php'; ?>