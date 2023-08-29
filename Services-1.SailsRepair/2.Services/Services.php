<style media="screen">

.text{
  position: relative;
  background-color: #FDF6F8;
  padding: 4vw 6vw  4vw 6vw;

}
.text h1{
  color: #005598;
  padding: 0vw 0 2vw 0;
  font-size: 2.3em;
  text-align: center;

}
.text h2{
  color: #202E52;
  text-align: left;
  width: 100%;
  padding: 2vw 0 0vw 0;
  margin-bottom: 10px;
  font-weight: 400;
  color: #005598;
}
.text p{
  position: relative;
  text-align:;justify;
  padding-left: 1vw;
  font-size: 1.2em;
  left: 0px;
  margin: 1vw 0 1vw 0;
}
.text  ul{
  width: 100%;
  padding-left: 35px;
  padding-bottom: 10px;
  font-size: 1.2em;
}
.comeBack {
  all: unset !important;
  color: #202E52 !important;
  font-weight: 600 !important;
  font-size: 1.1em !important;
  cursor: pointer !important;
  text-align: left !important;
  width: 100vw !important;
}
.comeBack:hover{
  text-decoration: underline !important;
}


</style>
<section class="services">

  <div class="text">
    <a class="comeBack"href="../Services/index.php">&lt; Services</a>
    <h1>Expert Sail Repair Services for Optimal Performance</h1>
    <p>Welcome, your trusted destination for comprehensive sail repair solutions. Our team of skilled sailmakers and technicians is dedicated to breathing new life into your sails, ensuring they perform at their peak on every voyage. From minor fixes to major overhauls, we specialize in addressing a wide range of sail issues, including tears, stitching, UV damage, and more. With a commitment to quality craftsmanship and attention to detail, we take pride in extending the lifespan of your sails and maximizing your sailing experiences. Choose us for reliable, expert sail repairs that keep you sailing confidently, no matter the conditions.</p>

</div>

</section>

<script type="text/javascript">
const buttonTitle = document.querySelectorAll(".OpenContactUs");

for (let i = 0; i < buttonTitle.length; i++) {
 buttonTitle[i].addEventListener("click", function(){
    window.open("../ContactUs/index.php", "_self");
 })
}




</script>
