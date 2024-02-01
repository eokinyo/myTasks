<footer class="row">
    <h1>Also check out our socials</h1>
    <div class="col-md-9">
        <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter(X)</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="#">LinkedIn</a></li>
        </ul>
    </div>
    <div class="col-md-3">
        <p>&copy; 2024 All rights reserved.</p>
        <?php
        $open_page = basename($_SERVER['PHP_SELF']);
        $timeLastModified = filemtime($open_page);
        $dateModified = date('F j, Y H:i:s', $timeLastModified);
        echo "<p>Last modified: $dateModified</p>";
        ?>
    </div>
           

</footer>
</div><!--Container-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>