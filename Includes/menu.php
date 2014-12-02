<?php
define('SITE_URL', 'http://dotalizer.dota/');
?>
<div id="nav">
    <div id="nav_wrapper">
        <?php
        if(isset($_SESSION['dotalyzer'])){

        } else {
        ?>
        <ul class="nav_right">
            <li><a href="<?= SITE_URL ?>login">Login</a>
            </li>
            <li><a href="<?= SITE_URL ?>sign">Sign-Up</a>
            </li>
        </ul>
        <?php
        }
        ?>
        <ul>
            <li><a href="<?= SITE_URL ?>" class="nav_anchor"><img src="<?php echo isset($navfolder) ? $navfolder : '' ?>pics/Home.png" class="nav_img"> </a>
            </li>
            <li><a href="<?= SITE_URL ?>heroes">Heroes</a>
            </li>

            <li><a href="#">Teams</a>

                <ul>
                    <li><a href="<?= SITE_URL ?>myteams">My Teams</a>
                    </li>
                    <li><a href="<?= SITE_URL ?>createTeam">Create Team</a>
                    </li>


                    <li><a href="<?= SITE_URL ?>ratedTeams">Highest Rated Teams</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?= SITE_URL ?>matcher">Dota Matcher</a>
            </li>
            <li><a href="<?= SITE_URL ?>about">About DotaLyzer</a>
            </li>

        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
<div class="dotalogo"></div>
