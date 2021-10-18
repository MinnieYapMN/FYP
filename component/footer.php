<style>
    .footerContainer{
        display: flex;
        flex-direction: row;
        padding: 10px 60px;
        justify-content: space-between;
        background-color: #fff;
        box-shadow: 0px 0px 10px #cccccc;
    }
    
    /*container*/
    .footerBox-logo{
        width: 24%;
        text-align: justify;
    }
    
    .footerBox-aboutUs{
        width: 24%;
        display: flex;
        flex-direction: column;
        padding: 0px 50px;
        text-align: justify;
    }
    
    .footerBox-getInTouch{
        width: 24%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .footerBox-address{
        width: 24%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    /*logo side*/
    #logo-slogan{
        display: flex;
        flex-direction: column;
        color: #414356;
        font-family: Gabriola;
        font-size: 35px;
    }
    
    .logoFooter{
        width: 50%; 
        border: 1px solid white;
    }
    
    .footerNav{
        height: 30px;
        display: flex;
        flex-direction: row;
        font-family: Bodoni MT;
        font-weight: bold;
        font-size: 15px;
        align-items: center;
    }
    
    .footerBtn{
        background-color: transparent;
        color: #414356;
        padding: 0px 5px;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        font-weight: 100;
    }
    
    .footerBtn:hover, .footerBtn:active{
        color: #6f849e;
        text-decoration: underline;
    }
    
    .footerLine{
        height: 25px;
        background-color: #414356;
        width: 1px;
        margin: 0px 5px;
    }
    
    .footer-copyright{
        font-family: Candara;
        font-size: 14px;
        color: #7d7d7d;
        margin-top: 3px;
    }
    
    /*separator*/
    .footer-separator{
        background-color: #8b9eb5;
        width: 1px;
        margin: 0px 10px;
    }
    
    /*footer about us, get in touch, location*/
    #getInTouch{
        color: #414356;
        font-size: 25px;
        font-family: Bodoni MT;
        text-transform: uppercase;
    }
    
    #footer-email{
        font-weight: bold;
        color: #6f849e;
        font-family: Candara;
    }
    
    #footer-phoneNo{
        color: #62646f;
        font-family: Candara;
    }
    
    .footer-location-container{
        border: 5px solid #414356;
        border-radius: 50px;
        margin-bottom: 15px;    
    }
    
    .footer-location-icon{
        font-size: 35px;
        margin: 10px 8px 8px;
        color: #414356;
    }
    
    .footer-address{
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #62646f;
        font-family: Candara;
    }
    
    .footer-aboutUs-text{
        font-family: Candara;
        color: #62646f;
    }
    
    .mediaBtn{
        width: 120px;
        margin: auto;
        display: flex;
        justify-content: space-around;
        padding: 10px 0px;
    }
    
    .mediaIcon-container{
        border: 2px solid #8d8d8d;
        border-radius: 50px;
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 4px 5px;
        color: #8d8d8d;
    }
    
    #footer-fb{
        width: 14px;
        text-align: center;
        color: #8d8d8d;
        font-size: 15px;
        background: transparent;
    }
    
    #footer-twitter{
        font-size: 14px;
        color: #8d8d8d;
        background: transparent;
    }
    
    #footer-insta{
        font-size: 17px;
        color: #8d8d8d;
        text-align: center;
        background: transparent;
    }
    
    #mediaIcon-fb:hover, #mediaIcon-fb:focus{
        background-color: #3b5998;
        border: 2px solid white;
    }
    
    #footer-fb:hover{
        color: white;
    }
    
    #mediaIcon-twitter:hover, #mediaIcon-twitter:focus{
        background-color: #00acee;
        border: 2px solid white;      
    }
    
    #footer-twitter:hover{
        color: white;
    }
    
    #mediaIcon-insta:hover, #mediaIcon-insta:focus{
        border: 2px solid white;
        background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
    }
    
    #footer-insta:hover{
        color: white;       
    }
</style>

<footer>
    <div class="footerContainer my-5">
        <div class="footerBox-logo" id="logo-slogan">
            <div>
                <img src="pictures/Logo2.png" class="logoFooter"/>
            </div>
            <div>
                A Treat For Your Senses
            </div>
            <div class="footerNav">
                <div class="footerBtn" style="padding-left: 0px;" onclick="window.location.href='homepage.php'">
                    Home
                </div>            
                
                <div class="footerLine"></div>
                
                <div class="footerBtn" onclick="window.location.href='profile.php'">
                    Profile
                </div>
            </div>
            <div class="footer-copyright">
                © 2021 Copyright GO Uniform Trading SDN BHD
            </div>
        </div>
        
        <div class="footer-separator"></div>
        
        <div class="footerBox-aboutUs">
            <div id="getInTouch" style="text-align: center;">
                About Us
            </div>
            <div class="footer-aboutUs-text">
                We provide you with great suits that befit you & your lifestyle. 
                Our suits are made from the highest quality fabrics & guaranteed to give you functionality, durability & comfort.
            </div>
        </div>
        
        <div class="footerBox-getInTouch">
            <div id="getInTouch">
                Get In Touch With Us
            </div>
            
            <div id="footer-email">
                <a href="mailto:ff@gmail.com/">sales@oguniform.com.my</a>
            </div>
            
            <div id="footer-phoneNo">(+60) 12-3456789</div>
            <div id="footer-phoneNo">(+60) 04-399 5326</div>
           
            
            <div class="mediaBtn">
                <div onclick="window.open('https://www.facebook.com/oguniform')" class="mediaIcon-container" id="mediaIcon-fb">    
                    <i class='fab fa-facebook-f' id="footer-fb"></i>
                </div>
                
                <div onclick="window.open('https://twitter.com/oguniform')" class="mediaIcon-container" id="mediaIcon-twitter" target="_blank">
                    <i class='fab fa-twitter' id="footer-twitter"></i>
                </div>
                <div onclick="window.open('https://www.instagram.com/og/')" class="mediaIcon-container" id="mediaIcon-insta" target="_blank">
                    <i class="fab fa-instagram" id="footer-insta"></i>
                </div>     
            </div>
        </div>
        
        <div class="footerBox-address">
            <div class="footer-location-container">
                <i class="material-icons footer-location-icon">location_on</i>
            </div>
            <div class="footer-address">
                <span>41, Jalan Perai Jaya 5,</span>
                <span> Bandar Perai Jaya, </span>
                <span>13700 Perai, Pulau Pinang.</span>
            </div>
        </div>
    </div>
</footer>