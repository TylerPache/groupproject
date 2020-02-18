<!--    generates footer-->
<footer>
    <div class="footer">
        <br>
        <p>General Information about lessons, activities and other things on the website</p>
        <p>All boxes beneath the welcome box are a showcase of what is on the website, it is indended to be a sample of the website.</p>
        <br>
        <div id="dateStamp">

            <?php
            $filename = ''; //ENTER THE NAME OF YOUR FILENAME OF MAIN BODY SECTION BETWEEN QUOTATION MARKS
            
            //date stamp
            if (file_exists($filename)) {
            echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
            }
        ?>
        </div>
    </div>
    <br>
    <!--appendix-->
    <div class="appendix">
        <p>Cool apendix stuff goes here</p>
        <p>This is just a template page no real information has been decided upon yet</p>
    </div>
</footer>
</body>

</html>
