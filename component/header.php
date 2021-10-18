<style>
    #headerStyle{
        height: 80px;
        width: 100%;
    }

    .header-container{
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 1;
        right: 0px;
    }

    /*logo*/
    .header-logo{
        width: 100%;
        height: 95px;
        background-color: white;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px 30px;
    }

    #header-logo{
        width: 300px;
        height: 100px;
    }

    .header-logo-container{
        width: 100%;
        display: flex;
        justify-content: center;
    }

    /*icon*/
    .header-icon-container{
        width: 40%;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .header-icon-box{
        width: 100px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 30px;
    }

    .header-icon:hover{
        color: #6f849e;
    }

    #header-profile-icon{
        font-size: 36px; 
        cursor: pointer;
        margin-right: 40px;
    }
    .tops-bottom-link{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    /* Profile Dropdown */
    .header-profile-btn{
        border: none;
        background: transparent;
        outline: none;
    }

    .header-profile-btn:focus, .header-profile-btn:hover{
        color: #6f849e;
        outline: none;
    }

    .dropdown-content-profile {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        margin-top: 110px;
    }

    .dropdown-content-profile #dropdown-profile-link {
        color: black;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
        background-color: white;
        font-family: Candara;
        font-size: 18px;        
    }

    #dropdown-profile-link:hover {
        color: #6f849e;
        background-color: #ebebeb;
    }
    #overlay {
        /*margin-top: 160px;*/
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        margin-top: 150px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.4);
        z-index: 1;
    }


</style>

<header id="headerStyle">
    <div class="header-container">
        <div class="header-logo">
            <div style="width: 40%;"></div>

            <div class="header-logo-container">
                <a href="homepage.php"><img src="pictures/Logo3.png" id="header-logo"/> </a>
            </div>
            <div class="header-icon-container">
                <?php if (isset($_SESSION['position'])): ?>
                    <div class="col customercol justify-content-center d-flex">
                        <p style="color:black; margin-bottom: 0px; margin-top: 30px;font-family: Bodoni MT;font-size:20px;" >Welcome, <?php echo $_SESSION['staff_name']; ?>!! &nbsp;</p>
                    </div>
                <?php endif ?>
                <br>
                <!--Profile-->
                <button class="header-profile-btn">
                    <i class="material-icons" id="header-profile-icon">person</i>
                </button>
                <div class="dropdown-content-profile">
                    <?php if (isset($_SESSION['position'])): ?>

                        <div id="dropdown-profile-link">
                            <a href="logout.php">Logout</a>
                        </div>

                        <div id="dropdown-profile-link">
                            <a href="change_password.php">Change Password</a>
                        </div>

                        <div id="dropdown-profile-link">
                            <a href="profile.php">Profile</a>
                        </div>


                    <?php endif ?>

                    <?php if (!isset($_SESSION['position'])): ?>
                        <div id="dropdown-profile-link">
                            <a href="login.php">Login</a>
                        </div>
                        <div id="dropdown-profile-link">
                            <a href="forget_pass.php">Forget Password</a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // active class
    $(function (e) {
        $('.header-nav a, .header-icon a').filter(function () {
            return this.href === location.href;
        }).parent().addClass('active').siblings().removeClass('active');
        $('.header-nav, .header-icon').click(function () {
            $(this).parent().addClass('active').siblings().removeClass('active');
        });
        e.preventDefault();
    });

    // dropdown
    let dropdownBtn = document.querySelector('.header-profile-btn');
    let menuContent = document.querySelector('.dropdown-content-profile');
    dropdownBtn.addEventListener('click', () => {
        if (menuContent.style.display === "") {
            menuContent.style.display = "block";
            dropdownBtn.style.color = "#6f849e";
        } else {
            menuContent.style.display = "";
            dropdownBtn.style.color = "black";
        }
    });

    // overlay 
    function on() {
        document.getElementById("overlay").style.display = "block";
    }
    function off() {
        document.getElementById("overlay").style.display = "none";
    }
</script>