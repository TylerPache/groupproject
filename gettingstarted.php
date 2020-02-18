<!DOCTYPE html>
<html>
<?php
    $path = './';
    $page = 'Getting Started';
    require $path.'assets/inc/header.php';
?>
<style>
    .start {
        display: revert;
        padding-top: 5px;
        padding-bottom: 5px;
    }

</style>

<body>

    <h1 style="text-align: center;">Getting Started</h1>

    <p>So you’ve started learning how to program in java. Here are a few things you’ll need to get yourself started: </p>

    <ol>
        <li class="start">Install the java development kit from <a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk12-downloads-5295953.html">https://www.oracle.com/technetwork/java/javase/downloads/jdk12-downloads-5295953.html</a> the jdk is what allows you to be able to compile and run your programs</li>


        <li class="start">For convenience sake you should also download a java ide of your choosing. Programs such as JGrasp, BlueJ, Eclipse and IntelliJ are a few of the better known ide’s. </li>


        <li class="start">You’ll most likely want to <span style="font-weight: bold;">familiarize yourself with the ide of your choosing</span> to know where the compile and run buttons are or the hotkeys for compiling and running.</li>


        <li class="start">The purpose of the compile function is to go through your code and make sure there aren’t any errors in the code that will prevent the program from running, such as a missing letter or semi-colon.</li>


        <li class="start">The run method of the program is what actually executes the program.</li>

    </ol>

    <p>Another method of compiling and running your program is in either the terminal(mac) or command prompt(windows). To first make sure the environment variable path is set correctly you’ll want to type “javac -version” or “java -version” both of these will make sure your path is set properly.</p>
    <p> If you receive an error follow this link to find how to set the variable path: <a href="https://www.java.com/en/download/help/path.xml">https://www.java.com/en/download/help/path.xml</a>. If the variable path is correct simply type “javac “ followed by your program name ending in “.java” to compile and then “java “ followed by your program name only. </p>


    <?php
    $path = './';
    $filename = 'gettingstarted.php';
    require $path.'assets/inc/footer.php';
    ?>
</body>

</html>
