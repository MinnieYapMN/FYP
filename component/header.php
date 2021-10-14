<style>
    #headerStyle{
        height: 150px;
        background-color: white;
    }

    .header-container{
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 1;
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
        width: 50%;
        display: flex;
        justify-content: center;
    }

    /*icon*/
    .header-icon-container{
        width: 40%;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .header-icon-box{
        width: 166px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 30px;
    }

    .header-icon:hover{
        color: #6f849e;
    }

    #header-search-icon{
        font-size: 40px;
        cursor: pointer;
    }

    #header-profile-icon{
        font-size: 36px; 
        cursor: pointer;
        margin-right: 40px;
    }

    /*#header-shopping-icon{
        width: 33px;
        height: 28px;
        margin-top: 3px;
        cursor: pointer;
    }*/

    /*navigation*/
    .header-nav-container{
        width: 100%;
        height: 55px;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px 30px;
        justify-content: center;
        background-color: white;
        border-bottom: 1px solid #cfcaca;
    }

    .header-nav{
        height: 100%;
        text-transform: uppercase;
        font-family: Bodoni MT;
        margin-right: 60px;
        font-size: 21px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .header-nav:hover{
        color: #6f849e;
    }

    /*    .active{
            color: #6f849e;
        }*/

    .tops-bottom-link{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    /* Dropwdown */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content #dropdown-link {
        color: black;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
        background-color: white;
        font-family: Candara;
        font-size: 18px;
        text-transform: capitalize;
    }

    #dropdown-link:hover {
        color: #6f849e;
        background-color: #ebebeb;
    }
    .dropdown:hover .dropdown-content {
        margin-top: 195px;
        display: block;
    }

    /* Tops Dropdown */
    .dropdown-content-tops {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content-tops #dropdown-link2 {
        color: black;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
        background-color: white;
        font-family: Candara;
        font-size: 18px;
        text-transform: capitalize;
    }

    #dropdown-link2:hover {
        color: #6f849e;
        background-color: #ebebeb;
    }

    .dropdown2:hover .dropdown-content-tops {
        margin-left: 145px;
        display: block;
        top: 0px;
    }

    /* Bottom Dropdown */
    .dropdown-content-bottom {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content-bottom #dropdown-link3 {
        color: black;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
        background-color: white;
        font-family: Candara;
        font-size: 18px;
        text-transform: capitalize;
    }

    #dropdown-link3:hover {
        color: #6f849e;
        background-color: #ebebeb;
    }

    .dropdown3:hover .dropdown-content-bottom{
        margin-left: 145px;
        display: block;
        top: 46px;
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

    /*Search*/
    .header-search-btn{
        border: none;
        background: transparent;
        outline: none;
    }

    .header-search-btn:focus, .header-search-btn:hover{
        color: #6f849e;
        outline: none;
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

    .search-container{
        position: absolute;
        background-color: #6f849e;;
        font-size: 50px;
        color: white;
        width: 100%;
        height: 200px;
        padding: 20px 130px;
    }

    .search-close-btn{
        position: absolute;
        top: 5px;
        right: 34px;
        color: white;
        cursor: pointer;
    }

    .search-input-container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120%;
    }

    #search-input{
        height: 45%;
        background: none;
        border: none;
        width: 900px;
        border-bottom: 1px solid white;
        color: white;
        font-family: Bodoni MT;
    }

    #search-input::placeholder{
        color: white;
        text-indent: 20px;
    }

    #search-input:focus{
        outline: none;
    }
</style>

<header id="headerStyle">
    <div class="header-container">
        <div class="header-logo">
            <div style="width: 40%;"></div>

            <div class="header-logo-container">
                <a href="index.php"><img src="pictures/Logo3.png" id="header-logo"/> </a>
            </div>

            <div class="header-icon-container">
                <?php if (isset($_SESSION['id'])): ?>
                    <div class="col customercol justify-content-center d-flex">
                        <p style="color:black; margin-bottom: 0px; margin-top: 30px;font-family: Bodoni MT;font-size:20px;" >Welcome, <?php echo $_SESSION['first_name']; ?>!! &nbsp;</p>
                    </div>
                <?php endif ?>
                <br>
                <div class="header-icon-box">
                    <!--Search-->
                    <button class="header-search-btn" onclick="on()">
                        <i class="material-icons" id="header-search-icon">search</i>
                    </button>
                    <div id="overlay">
                        <div class="search-container">
                            <div class="search-close-btn"  onclick="off()">
                                <i class="material-icons">close</i>
                            </div>

                            <div class="search-input-container">
                                <form action="productPage.php?category_id=7" method="post" onkeypress="if (event.keyCode === 13) {
                                            this.submit();
                                        }">
                                    <input type="text" placeholder="Search" id="search-input" name="search-input" />
                                    <!--<input type="submit" name="search"/>-->
                                </form>
                            </div>

                        </div>
                    </div>

                    <!--Profile-->
                    <button class="header-profile-btn">
                        <i class="material-icons" id="header-profile-icon">person</i>
                    </button>
                    <div class="dropdown-content-profile">
                        <?php if (isset($_SESSION['id'])): ?>

                            <div id="dropdown-profile-link">
                                <a href="logout.php">Logout</a>
                            </div>

                            <div id="dropdown-profile-link">
                                <a href="change_password.php">Change Password</a>
                            </div>

                            <div id="dropdown-profile-link">
                                <a href="profile.php">Profile</a>
                            </div>
                            <div id="dropdown-profile-link">
                                <a href="purchaseHistory.php">History</a>
                            </div>

                        <?php endif ?>

                        <?php if (!isset($_SESSION['id'])): ?>
                            <div id="dropdown-profile-link">
                                <a href="login.php">Login</a>
                            </div>
                            <div id="dropdown-profile-link">
                                <a href="register.php">Register</a>
                            </div>
                            <div id="dropdown-profile-link">
                                <a href="forget_pass.php">Forget Password</a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-container">
            <div class="header-nav">
                <a href="index.php" class="active">Home</a>
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

                // search
                $("#search-input").keyup(function (event) {
                    if (event.keyCode == 13) {
                        window.location.replace('productPage.php?category_id=7');
                    }
                });
            </script>