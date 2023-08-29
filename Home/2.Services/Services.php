<style media="screen">
  .services{
    position: relative;
    padding: 2vw;
    width: 100vw;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    background-color: #FDF6F8;

  }
  .services a{
     all: unset;
  }
  .box-services{
    position: relative;
    width: 34vw;
    height: 20vw;
    min-width: 300px;
    min-height: 200px;
    margin: 10px;

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;

    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
  }
  .pictureServicesHome1 {
    background-image: url("../Home/2.Services/Image/Cruising.jpg"); /* The image used */
  }
  .pictureServicesHome2 {
    background-image: url("../Home/2.Services/Image/Racing.jpg"); /* The image used */
  }


  .wrap-box-services{
    position: relative;
    padding: 7px 14px;
    background-color: rgba(197, 35, 74, .1);
    height: 70%;
    width: 70%;
    top: 50%;
    transform: translateY(-50%);
  }

  .wrap-box-services:hover{
    background-color: rgba(197, 35, 74, .3);
  }

  .wrap-box-services h3{
    position: relative;
    top: calc(2.7vw + 2.7em);
    transform: translateY(-200%);
    text-align: center;
    color: white;
    font-weight: 500;
    font-size: 1.9em;
    text-shadow: 1px 1px 1px black;
    cursor: pointer;

  }
  .wrap-box-services h4{
    position: relative;
    top: calc(3.6vw + 3.6em);
    transform: translateY(-200%);
    text-align: center;
    font-weight: 200;
    font-size: 1.1em;
    color: white;
    text-shadow: 1px 1px 1px black;
    opacity: 0;
    transition: .4s;
  cursor: pointer;
  }
  .wrap-box-services:hover h4{
    text-decoration: underline;
    opacity: 1;

  }
</style>

<section class="services">
  <a href="../Cruising/index.php">
    <div class="box-services pictureServicesHome1">
      <div class="wrap-box-services">
        <h3>Cruising Sails</h3>
        <h4>See more</h4>
      </div>
    </div>
  </a>
  <a href="../Racing/index.php">
    <div class="box-services pictureServicesHome2">
      <div class="wrap-box-services ">
        <h3>Racing Sails</h3>
        <h4>See more</h4>
      </div>
    </div>
  </a>




</section>

<script type="text/javascript">

</script>
