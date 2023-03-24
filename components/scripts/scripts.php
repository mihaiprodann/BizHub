    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <script type="text/javascript">
            document.getElementById("floatingText").value = getSavedValue("floatingText");    // set the value to this input
            document.getElementById("floatingInput").value = getSavedValue("floatingInput");   // set the value to this input
            document.getElementById("floatingPassword").value = getSavedValue("floatingPassword");   // set the value to this input
            document.getElementById("exampleCheck1").value = getSavedValue("exampleCheck1");   // set the value to this input
            /* Here you can add more inputs to set value. if it's saved */

            //Save the value function - save it to localStorage as (ID, VALUE)
            function saveValue(e){
                var id = e.id;  // get the sender's id to save it . 
                var val = e.value; // get the value. 
                localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
            }

            //get the saved value function - return the value of "v" from localStorage. 
            function getSavedValue  (v){
                if (!localStorage.getItem(v)) {
                    return "";// You can change this to your defualt value. 
                }
                return localStorage.getItem(v);
            }
    </script>