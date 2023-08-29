<style media="screen">
/* Footer */
  footer {
    position: relative;
    display: flex;
    justify-content: space-around;
    background-color:  #005598;
    color: #F2F2F2;
    font-size: 0.8em;
    padding: 50px 0;
    width: 100vw;
    min-width: 100vw;
    flex-wrap: wrap;
    justify-content: center;
  }
  footer > div {
    margin: 15px 40px;
  }
  footer li{
    font-size: 1.5em;
    font-weight: 300;
  }

  footer img {
    width: 40px;
  }
  footer a {
    text-decoration: none;
    color: white;
    font-size: 0.9em;
  }
  footer a:hover {
    color: #2645A2;
  }
  footer h3{
    font-size: 1.8em;
  }
  .footer__headline {
    font-weight: bold;
    font-family: 'Helvetica';
  }

  .footer__list {
    font-family: 'Helvetica';
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .TermsAndConditions{
    position: absolute;
    right: 30px;
    bottom: 15px;
    font-size: 1.2em;
    font-weight: 400;
    cursor: pointer;
    margin: 0px;
    padding: 0px;
  }
  @media(max-width: 850px){

      footer {
        max-width: 600px;
        margin: 0 auto;
      }

  }

</style>
<footer>

        <div>
          <h3 class="footer__headline"> Contact </h3>
          <ul class="footer__list">
          <!--  <img src="assets/imgs/Logo.png" alt=""> -->
            <li>England</li><br>
            <li>Hamble : 15 Compass Point, Ensign Way,</li>
            <li>Hamble, Southampton, Hampshire SO31 4RA</li><br>
            <li>Plymouth : 10 Bell Close, Plympton, Devon  PL7 4FD</li>



          </ul>
        </div>
        <div>
          <h3 class="footer__headline"> Ullman sails: </h3>
          <ul class="footer__list">
            <li> <a href="../Home/index.php">Home</a> </li>
            <li> <a href="../SailCare/index.php">Sail care</a> </li>
            <li> <a href="../Services/index.php">Services</a> </li>
            <li> <a href="../AboutUs/index.php">About us</a> </li>
            <li> <a href="../News/News.php">News</a> </li>
            <li> <a href="../ContactUs/index.php">Contact us</a> </li>
          </ul>
        </div>

        <div>
          <h3 class="footer__headline"> Sail Types: </h3>
          <ul class="footer__list">
            <li> <a href="../Racing/index.php">Racing sails</a> </li>
            <li> <a href="../Cruising/index.php">Cruising sails</a> </li>
          </ul>
        </div>
        <div>
          <h3 class="footer__headline"> Social Media: </h3>
          <ul class="footer__list">
            <li> <a href="https://www.facebook.com/ullmansails.co.uk/?_rdc=2&_rdr" "_black">Facebook</a> </li>
            <li> <a href="https://www.instagram.com/ullmansailsuk/" "_black">Instagram</a> </li>
            <li> <a href="https://twitter.com/ullmansailsuk" "_black">Twitter</a> </li>
            <li> <a href="https://www.youtube.com/user/UllmanSailsTV" "_black">Youtube</a> </li>
          <!--  <li> <a href="#">Terms & Conditions</a> </li> -->
          </ul>
        </div>
        <h3 id="TermsAndConditions" class="TermsAndConditions">Terms & Conditions</h3>
        <script type="text/javascript">

           var TermsAndConditions = document.getElementById('TermsAndConditions');

           TermsAndConditions.addEventListener("click", function(){
             var url = "../General/TermsAndConditions/TermsAndConditions.php";
             var ventanaNueva = window.open(url, "_blank");
           })
        </script>
</footer>
