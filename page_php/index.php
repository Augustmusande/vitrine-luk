<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/style_tailwind.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
  </head>
  <style>
      .bg-img {
        background-image: url('../asset/IMG BANIERE 14.jpg');
        background-repeat: no-repeat;
        background-position: center ;
        background-size: auto ;
        
        
      }
     
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

#btn_v a{
  margin-right: 25%;
  float: right;
  margin-top: -40px;
  text-decoration: none;
  border-radius: 15px;
  background-color: rgb(0, 162, 232);
  color: white;
  font-family: Arial;
  padding: 10px;
}
#btn_v a:hover{
  background-color: white;
  border : 1px solid black;
  color: black;
}

.slider-cont{
  height: 280px;
  width:100%;
  overflow: hidden;
  margin-right: 2%;
  margin-left: 2%;
  margin-top: -105px;
  display:flex;
  justify-content: center;

}
.banner{
  /* border: 2px solid red; */
  display: flex;
  width: 1000px;
  height: 300px;
  transition: transform 0.8s ease-in-out;
  background-size:contain;
}
.banner img{
  width: 100%;
  height: 500px;
  margin-top: -80px;
}
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">
    
    <!--division de l'image baniere--> 

    <div class="pt-24 bg-img">
      <div class="container  px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
       
           
        <div class="flex flex-col w-full  items-center justify-center items-start text-center md:text-left">
         
          <h1 class="my-4 text-5xl font-bold leading-tight">
            UNILUK, ISTM-L,ISTA-L
          </h1>
          <p class="text-center text-3xl mb-8">
             Bienvenu sur la plateforme des services académique
          </p>
          
           
        </div>
        
         
      </div>
      <!--svg pour la forme de l'iamge baniere--> 
      <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <path
                d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
              ></path>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <div    class="">
        <div id="btn_v" class="w-full text-right pb-12  ">
            <a href="../page_php/faculte.php" class="rounded-full text-white font-bold bg-blue-500 p-4 cursor-pointer inline-block transition duration-300 ease-in-out transform hover:scale-105 hover-gray-300" >
              Voir les facultés
            </a>
          
          </div>
    </div>
    
    <section class="bg-white  py-8">
      <div class="container max-w-5xl mx-auto m-8">
         
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div  class="flex flex-col gap-8 ">
            <!--division de la vision--> 
 
            
          <div class="slider-cont rounded-lg shadow-md bg-white  rounded-lg relative overflow-hidden h-40">  
            <div id="banner" class="banner  h-40 object-cover ">
              <img  src="../asset/mission UNILUK.jpg" alt="Image 1 class="w-full h-40  mb-4 rounded-lg">
              <img  src="../asset/Vision UNILUK.jpg" alt="Image 2 class="w-full h-40  rounded-lg mb-4 ">
            
            </div>
        
    </div>


          
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const slider = document.querySelector('.banner');
        let slideIndex = 0;
        function showSlide(index) {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
        function slideNext() {
            slideIndex++;
            if (slideIndex > slider.children.length - 1) {
                slideIndex = 0;
            }
            showSlide(slideIndex);
        }
        setInterval(slideNext, 10000);
   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>   
    </body>
</html>
