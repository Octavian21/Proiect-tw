<script>
        var modal1 = document.getElementById('login');
        var modal2 = document.getElementById('crtaccount');
        var qa = document.getElementById('qa');

        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = 'none';
            }

            if (event.target == modal2) {
                modal2.style.display = 'none';
            }

            if (event.target == qa) {
                var submeniu = document.getElementById('qa-submeniu');
                if (submeniu.style.display == 'none')
                    submeniu.style.display = 'block';
                else
                    submeniu.style.display = 'none';
            }
        }
        </script>