<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-cols">
            <ul>
                <li>Shop & Learn</li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
            </ul>

            <ul>
                <li>Nice Store</li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
            </ul>

            <ul>
                <li>Business</li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
            </ul>

            <ul>
                <li>About Store</li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
                <li>
                    <a href="#">Lorem Ipsun</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom text-center">
        Aqkly Hermawan &copy; <?= date('Y') ?>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>	
<script type="text/javascript">
	$(document).ready(function(){

	    $('#cari').autocomplete({
            source: "<?php echo site_url('home/get_autocomplete');?>",
 
            select: function (event, ui) {
                $(this).val(ui.item.label);
                $("#form_search").submit();
            }
        });

	});
</script>
</body>

</html>