<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */

?>
<div class="clearfix"></div>
<footer id="footer">
    <div class="container ">
        <div class="one-half pull-right ">
            <div class="search-box-container">
                <div class="searchbar">

                    <form class="clearfix" action="#" method="get">

                        <div class="left four-fifths">

                            <input type="text" placeholder="Search" >

                        </div>

                        <div class="left one-fifth">

                            <a href="#" class="search_stuff">

                                <div class="btn">

                                    <i class="fa fa-search"></i>

                                </div>

                            </a>

                        </div>

                    </form>

                </div>
            </div>
            <div class="footer-icons pull-right">
                <h4>Connect With Us</h4>

                <a href="https://www.twitter.com/amolokaleb">
                    <i class="fa fa-twitter-square fa-3x"></i>
                </a>

                <a href="https://www.fb.com/amolocaleb">
                    <i class="fa fa-facebook-square fa-3x"></i>
                </a>

            </div>
        </div>
        <div class="second-half pull-left">

        </div>
    </div>
</footer>
<link href="/assets/css/style-main.css" rel="stylesheet" type="text/css">
</div>
<script type="text/javascript">
    $(document).ready(
            $(".search_stuff").on("click", function (e) {
        e.preventDefault();
        var q = $(".search_item").val();
        alert(q);
    }););
</script>


</body>

</html>