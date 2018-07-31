

<script>
    var menuKlik = false;
    function myFunction(x) {
        $("#navigasi").css("display", "block");
        if (x.matches) { // If media query matches
            if (!menuKlik) {
                $("#navigasi").css("display", "none");
            }
        } else {

        }
    }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
    function toggeMenu() {
        alert('click');
        if (menuKlik) {
            menuKlik = false;
        } else {
            menuKlik = true;
        }
        $("#navigasi").css("display", "block");
        if (!menuKlik) {
            $("#navigasi").css("display", "none");
        }
    }
    $("#menu").click(function () {

        if (menuKlik) {
            menuKlik = false;
        } else {
            menuKlik = true;
        }
        $("#navigasi").css("display", "block");
        if (!menuKlik) {
            $("#navigasi").css("display", "none");
        }

    });
</script>




</body>
</html>
