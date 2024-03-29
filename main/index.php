<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" "width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d5d3cf2fd3.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary text-secondary">
  <!-- ------------------ navbar ------------------------------------- -->

  <nav class="w-full h-[8rem] transition-all duration-75 ease-in-out lg:h-20 z-20 lg:px-12 px-10 top-0 absolute left-0">
    <div class="navbox w-full h-full flex items-center justify-between">
      <div class="box-1 lg:w-2/3 w-1/2 flex items-center gap-20">
        <h1 class="logo mr-10 lg:text-4xl text-6xl font-bold">GG</h1>
        <div class="page-links">
          <ul id="pages" class="hidden text-lg lg:flex gap-12 font-normal">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Shop</a>
            </li>
            <li>
              <a href="#">About us</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
            <li>
              <a href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="box-2 lg:w-1/3 w-1/2 mr-6">
        <ul class="icons w-full flex justify-end lg:text-lg text-3xl font-bolder cursor-pointer">
          <li id="loginbtn" class="lg:ml-8 ml-12 hidden lg:inline"><span>Sign Up / Log in</span></li>
          <li class="lg:ml-8 ml-12"><i class="fa-solid fa-store"></i></li>
          <li class="lg:ml-8 ml-12">
            <i class="fa-solid fa-magnifying-glass"></i>
          </li>
          <li class="lg:ml-8 ml-12 lg:hidden" onclick="Rnavbar()">
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
      </div>
    </div>

    <!-- --------------------- side nav bar -------------------- -->

    <div id="menubar" class="lg:hidden py-[20%] h-screen w-[72%] text-center bg-lightblack fixed top-0 left-0 translate-x-[-110%] transition-[transform] duration-300 ease-in-out">
      <ul class="gap-16 flex flex-col text-5xl lg:text-3xl font-bold">
        <li class="pb-4 inline">
          <a href="#" class="border-b-[5px]">Home</a>
        </li>
        <li class="pb-4 inline">
          <a href="#" class="border-b-[5px]">Shop</a>
        </li>
        <li class="pb-4 inline">
          <a href="#" class="border-b-[5px]">About us</a>
        </li>
        <li class="pb-4 inline">
          <a href="#" class="border-b-[5px]">Blog</a>
        </li>
        <li class="pb-4 inline">
          <a href="#" class="border-b-[5px]">Contact us</a>
        </li>
      </ul>

      <h6 class="mt-32 cursor-pointer" onclick="Rnavbar()">
        <i class="fa-solid fa-xmark text-8xl lg:text-6xl"></i>
      </h6>
    </div>
  </nav>

  <!-- -------------------------- header banner ------------------------------- -->

  <header id="header" class="w-full relative lg:pt-24 pt-36 pb-20 lg:min-h-[36rem] min-h-[35vh]">
    <div class="homeexchange-container min-h-fit lg:max-h-[35rem] px-4 lg:px-12">
      <!-- ------------- left side icons ------------------------ -->

      <div class="leftbar h-[90%] lg:grid hidden absolute left-0 bottom-[2%] text-center">
        <h5 class="text-lg">Feel the fashion now</h5>
        <div class="icons flex flex-col mx-auto my-0 text-lg">
          <ul class="example-2">
            <li class="icon-content">
              <a href="https://">
                <div class="filled"></div>
                <i class="fa-regular fa-envelope"></i>
              </a>
              <div class="tooltip">Gmail</div>
            </li>
            <li class="icon-content">
              <a href="https://">
                <div class="filled"></div>
                <i class="fa-brands fa-twitter"></i>
              </a>
              <div class="tooltip">Twitter</div>
            </li>
            <li class="icon-content">
              <a href="https://">
                <div class="filled"></div>
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
              <div class="tooltip">Linked In</div>
            </li>
          </ul>
        </div>
      </div>

      <!-- ------------------- right side icons -------------------------- -->

      <div class="rightbar z-10 absolute right-20 top-[39%] text-6xl cursor-pointer hidden lg:flex flex-col-reverse gap-8">
        <i id="leftbtn" class="fa-solid fa-chevron-left"></i>
        <i id="rightbtn" class="fa-solid fa-chevron-right"></i>
      </div>

      <!-- -------------------- main content -------------------------- -->

      <div class="homeexchange-box w-full grid mx-auto">
        <!-- ----------------- banner content ----------------- -->

        <div class="content pt-14 pl-6 mx-auto capitalize">
          <h1 class="text-4xl md:text-[4.5rem] md:tracking-wider md:leading-[5rem] font-bold font-heading">
            <span class="text-third">Mouse- </span><br />steelseries
            <br />sensei 310
          </h1>
          <h3 class="text-2xl md:text-4xl font-bold mt-3">
            <span class="text-extra line-through">$ 199 ,</span> $100
          </h3>
          <button>
            Add to cart
          </button>
        </div>

        <!-- --------------- img changer boxes --------------------- -->

        <div class="imgsection lg:block hidden overflow-hidden h-full py-20">
          <div class="imgbox h-full background-slider flex">
            <div class="box">
              <div class="image activeimg w-[280px]">
                <img src="../assets//download.jpg" alt="" />
              </div>
            </div>
            <div class="box">
              <div class="image w-[280px]">
                <img src="../assets//pexels-andrea-piacquadio-845434.jpg" alt="" />
              </div>
            </div>
            <div class="box">
              <div class="image w-[280px]">
                <img src="../assets//this-is-same-shoes.jpg" alt="" />
              </div>
            </div>
            <div class="box">
              <div class="image w-[280px]">
                <img src="../assets//pexels-andrea-piacquadio-974911.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ----------------- whole body sections ------------------------------------- -->

  <main class="w-full">
    <!-- ------------------- product type section ------------------------------------- -->

    <section id="product-type" class="grid lg:min-h-[44rem]">
      <!-- --------------- men section ----------------- -->

      <div class="boxes h-full w-full relative border-[1px] border-l-lightblack overflow-hidden transition-all ease-in-out duration-1000">
        <!-- ---------- background-text ------------- -->

        <div class="back absolute opacity-10 text-[10rem] tracking-wide font-bold top-[22%] left-[-32px] -z-10">
          Men's
        </div>

        <!-- ------------- content section ------------- -->

        <div class="content h-full px-8">
          <div class="text p-8 lg:pl-16">
            <h5 class="lg:text-2xl text-lg leading-10 underline font-bold text-extra">
              Starting From <br />
              <span class="lg:text-4xl text-2xl text-third no-underline">$29,-</span>
            </h5>
            <h3 class="lg:mt-16 mt-12 lg:text-4xl text-3xl font-bold">
              Men's <br />
              Clothing
            </h3>
            <button class="rounded-md px-4 py-[6px] text-sm border-extra mt-4 border-[1.5px]">
              Browse
            </button>
          </div>

          <div class="image w-full h-full pt-8 overflow-hidden">
            <img class="w-full object-contain scale-[1.1] aspect-square" src="../assets/men.png" alt="" />
          </div>
        </div>
      </div>

      <!-- --------------- Women section ------------------ -->

      <div class="boxes h-full w-full relative border-[1px] border-l-lightblack overflow-hidden transition-all ease-in-out duration-1000">
        <!-- ---------- background-text ------------- -->

        <div class="back absolute opacity-10 text-[10rem] tracking-wide font-bold top-[22%] left-[-32px] -z-10">
          Women's
        </div>

        <!-- ------------- content section ------------- -->

        <div class="content h-full px-8">
          <div class="text p-8 lg:pl-16">
            <h5 class="lg:text-2xl text-lg leading-10 underline font-bold text-extra">
              Starting From <br />
              <span class="lg:text-4xl text-2xl text-third no-underline">$29,-</span>
            </h5>
            <h3 class="lg:mt-16 mt-12 lg:text-4xl text-3xl font-bold">
              Women's Clothing
            </h3>
            <button class="rounded-md px-4 py-[6px] text-sm border-extra mt-4 border-[1.5px]">
              Browse
            </button>
          </div>

          <div class="image w-full h-full pt-8 overflow-hidden">
            <img class="w-full object-contain scale-[1.1] aspect-square" src="../assets/woman.png" alt="" />
          </div>
        </div>
      </div>

      <!-- ------------------- jewellery section ------------------- -->

      <div class="boxes h-full w-full relative border-[1px] border-l-lightblack overflow-hidden transition-all ease-in-out duration-1000">
        <!-- ---------- background-text ------------- -->

        <div class="back absolute opacity-10 text-[10rem] tracking-wide font-bold top-[22%] left-[-32px] -z-10">
          Jewelery
        </div>

        <!-- ------------- content section ------------- -->

        <div class="content h-full px-8">
          <div class="text p-8 lg:pl-16">
            <h5 class="lg:text-2xl text-lg leading-10 underline font-bold text-extra">
              Starting From <br />
              <span class="lg:text-4xl text-2xl text-third no-underline">$49,-</span>
            </h5>
            <h3 class="lg:mt-16 mt-12 lg:text-4xl text-3xl font-bold">
              Jewelery
            </h3>
            <button class="rounded-md px-4 py-[6px] text-sm border-extra mt-4 border-[1.5px]">
              Browse
            </button>
          </div>

          <div class="image w-full h-full pt-10 overflow-hidden">
            <img class="w-full object-contain aspect-video" src="../assets//jewellery.png" alt="" />
          </div>
        </div>
      </div>

      <!-- ----------------- gadgets section ------------------------ -->

      <div class="boxes h-full w-full relative border-[1px] border-l-lightblack overflow-hidden transition-all ease-in-out duration-1000">
        <!-- ---------- background-text ------------- -->

        <div class="back absolute opacity-10 text-[10rem] tracking-wide font-bold top-[22%] left-[-32px] -z-10">
          Gadgets
        </div>

        <!-- ------------- content section ------------- -->

        <div class="content h-full px-8">
          <div class="text p-8 lg:pl-16">
            <h5 class="lg:text-2xl text-lg leading-10 underline font-bold text-extra">
              Starting From <br />
              <span class="lg:text-4xl text-2xl text-third no-underline">$29,-</span>
            </h5>
            <h3 class="lg:mt-16 mt-12 lg:text-4xl text-3xl font-bold">
              Gadgets
            </h3>
            <button class="rounded-md px-4 py-[6px] text-sm border-extra mt-4 border-[1.5px]">
              Browse
            </button>
          </div>

          <div class="image w-full h-full pt-10 overflow-hidden">
            <img class="w-full object-contain aspect-video" src="../assets//gadgets.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="features" class="products-2 w-full min-h-[28vh] lg:min-h-[30rem] relative p-12">
      <h2 class="text-3xl font-heading border-b-2 pb-1 mb-8 border-secondary inline-block">
        Feartured Gears
      </h2>

      <div class="product-box lg:overflow-hidden overflow-visible overflow-y-hidden">
        <div class="items h-full lg:px-10 flex gap-10 lg:gap-16 text-center"></div>
      </div>

      <div class="icons-2 hidden lg:block text-5xl text-lightblack">
        <i class="fa-solid fa-angle-left absolute top-[50%] left-10"></i>
        <i class="fa-solid fa-angle-right absolute top-[50%] right-14"></i>
      </div>
    </section>

    <section id="features" class="products-1 w-full min-h-[28vh] lg:min-h-[30rem] relative p-12">
      <h2 class="text-5xl lg:text-3xl font-heading border-b-2 pb-1 mb-12 lg:mb-8 border-secondary inline-block">
        Feartured Gears
      </h2>

      <div class="product-box lg:overflow-hidden overflow-visible overflow-y-hidden">
        <div class="items h-full lg:px-10 flex gap-10 lg:gap-16 text-center"></div>
      </div>

      <div class="icons-1 hidden lg:block text-5xl text-lightblack">
        <i class="fa-solid fa-angle-left absolute top-[50%] left-10"></i>
        <i class="fa-solid fa-angle-right absolute top-[50%] right-14"></i>
      </div>
    </section>

    <section id="sale" class="h-[28rem] w-full bg-pink-400">
      <div class="salebox grid h-full">
        <div class="box box-1 my-16 bg-slate-50 relative">
          <ul class="z-10 text-left absolute cursor-pointer top-12 right-[-45%]">
            <li class="saleactive text-3xl border-b-2 border-pink-500 text-pink-500 font-semibold mb-12">
              Clothes hot
            </li>
            <li class="text-3xl border-b-2 border-pink-500 text-pink-500 font-semibold mb-12">
              Winter collections
            </li>
            <li class="text-3xl border-b-2 border-pink-500 text-pink-500 font-semibold mb-12">
              Accessories
            </li>
          </ul>
        </div>
        <div class="box box-2 overflow-hidden text-left">
          <div class="item pr-20 py-12 h-[26rem] flex flex-row align-middle transition-all duration-300 ease-in-out">
            <div class="image ml-20 mr-8 w-[35%] relative">
              <img class="object-contain w-[100%] aspect-square" src="../assets//sale-1.png" alt="" />

              <div class="offertag bg-secondary rounded-[50%] inline-block py-5 text-center px-4 text-sm capitalize absolute right-0 top-[-5%]">
                <h5 class="text-primary">
                  sale of <br />
                  <span class="text-lg text-extra font-bold">$25.20</span>
                </h5>
              </div>
            </div>
            <div class="content pl-8 py-6">
              <h4 class="text-extra text-2xl font-heading tracking-wider">
                Deals of the week
              </h4>
              <h2 class="text-4xl font-normal my-2">
                Opna Woman Short's Sleeve Moisture
              </h2>
              <div class="time"></div>
              <button>shop now</button>
            </div>
          </div>
          <div class="item pr-20 py-12 h-[26rem] flex flex-row align-middle transition-all duration-300 ease-in-out">
            <div class="image ml-20 mr-8 w-[35%] relative">
              <img class="object-contain w-[100%] aspect-square" src="../assets//sale-2.png" alt="" />

              <div class="offertag bg-secondary rounded-[50%] inline-block py-5 text-center px-4 text-sm capitalize absolute right-0 top-[-5%]">
                <h5 class="text-primary">
                  sale of <br />
                  <span class="text-lg text-extra font-bold">$25.20</span>
                </h5>
              </div>
            </div>
            <div class="content pl-8 py-6">
              <h4 class="text-extra text-2xl font-heading tracking-wider">
                Best seasional deal
              </h4>
              <h2 class="text-4xl font-normal my-2">
                Jacket Women Windbreaker Striped Climbing Coat
              </h2>
              <div class="time"></div>
              <button>shop now</button>
            </div>
          </div>
          <div class="item pr-20 py-12 h-[26rem] flex flex-row align-middle transition-all duration-300 ease-in-out">
            <div class="image ml-20 mr-8 w-[35%] relative">
              <img class="object-contain w-[100%] aspect-square" src="../assets//sale-3.png" alt="" />

              <div class="offertag bg-secondary rounded-[50%] inline-block py-5 text-center px-4 text-sm capitalize absolute right-0 top-[-5%]">
                <h5 class="text-primary">
                  sale of <br />
                  <span class="text-lg text-extra font-bold">$25.20</span>
                </h5>
              </div>
            </div>
            <div class="content pl-8 py-6">
              <h4 class="text-extra text-2xl font-heading tracking-wider">
                Most sold jewellery
              </h4>
              <h2 class="text-4xl font-normal my-2">
                White Gold Plated Princess
              </h2>
              <div class="time"></div>
              <button>shop now</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="user" class="max-h-[37rem] p-22 flex py-20 px-44">
      <div class="services">
        <div class="servicebox text-lightblack bg-purple-200 flex align-middle justify-center p-4">
          <i class="fa-solid fa-truck-fast text-5xl p-3 mr-3"></i>
          <div class="detail pr-1">
            <h3 class="font-bold underline capitalize text-secondary text-lg">
              free shipping
            </h3>
            <p class="text-sm">
              Separated they live in. A small river named Duden flows
            </p>
          </div>
        </div>
        <div class="servicebox text-lightblack bg-sky-300 flex align-middle justify-center p-4">
          <i class="fa-solid fa-gifts text-5xl p-3 mr-3"></i>
          <div class="detail pr-1">
            <h3 class="font-bold underline capitalize text-secondary text-lg">
              Valuable Gifts
            </h3>
            <p class="text-sm">
              Separated they live in. A small river named Duden flows
            </p>
          </div>
        </div>
        <div class="servicebox bg-green-600 text-primary flex align-middle justify-center p-4">
          <i class="fa-solid fa-headset text-5xl p-3 mr-3"></i>
          <div class="detail pr-1">
            <h3 class="font-bold underline capitalize text-secondary text-lg">
              All Day Support
            </h3>
            <p class="text-sm">
              Separated they live in. A small river named Duden flows
            </p>
          </div>
        </div>
        <div class="servicebox bg-black text-primary flex align-middle justify-center p-4">
          <i class="fa-solid fa-user-shield text-5xl p-3 mr-3"></i>
          <div class="detail pr-1">
            <h3 class="font-bold underline capitalize text-lg">
              Secure payment
            </h3>
            <p class="text-sm">
              Separated they live in. A small river named Duden flows
            </p>
          </div>
        </div>
      </div>

      <div class="clients pl-8 overflow-hidden">
        <h1 class="text-4xl text-bold font-heading">
          Our satisfied customer says
        </h1>
        <p class="my-4 text-md font-normal text-lightblack">
          Far far away, behind the word mountains, far from the countries
          Vokalia and Consonantia, there live the blind texts. Separated they
          live in
        </p>

        <div class="imgslider relative mt-8 transition-all ease-in-out duration-300">
          <div class="clientbox absolute">
            <div class="image w-28 h-28 overflow-hidden rounded-full border-2">
              <img class="w-full h-full object-cover" src="../assets/user1.jpg" alt="" />
            </div>
            <h5 class="text-lg font-normal text-lightblack border-l-2 border-lightblack px-4 my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint
              illo aliquam alias debitis, eveniet voluptate consequatur iusto
              optio. Repellat?
            </h5>
            <h4 class="text-extra mt-6 text-xl font-medium">
              Garrenth Smith
            </h4>
            <p class="capitalize text-lightblack font-thin text-sm">
              marketing and manager
            </p>
          </div>
          <div class="clientbox absolute">
            <div class="image w-28 h-28 overflow-hidden rounded-full border-2">
              <img class="w-full h-full object-cover" src="../assets/user2.jpg" alt="" />
            </div>
            <h5 class="text-lg font-normal text-lightblack border-l-2 border-lightblack px-4 my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint
              illo aliquam alias debitis, eveniet voluptate consequatur iusto
              optio. Repellat?
            </h5>
            <h4 class="text-extra mt-6 text-xl font-medium">
              Garrenth Smith
            </h4>
            <p class="capitalize text-lightblack font-thin text-sm">
              marketing and manager
            </p>
          </div>
          <div class="clientbox absolute">
            <div class="image w-28 h-28 overflow-hidden rounded-full border-2">
              <img class="w-full h-full object-cover" src="../assets/user4.jpg" alt="" />
            </div>
            <h5 class="text-lg font-normal text-lightblack border-l-2 border-lightblack px-4 my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint
              illo aliquam alias debitis, eveniet voluptate consequatur iusto
              optio. Repellat?
            </h5>
            <h4 class="text-extra mt-6 text-xl font-medium">
              Garrenth Smith
            </h4>
            <p class="capitalize text-lightblack font-thin text-sm">
              marketing and manager
            </p>
          </div>
          <div class="clientbox absolute">
            <div class="image w-28 h-28 overflow-hidden rounded-full border-2">
              <img class="w-full h-full object-cover" src="../assets/user3.jpg" alt="" />
            </div>
            <h5 class="text-lg font-normal text-lightblack border-l-2 border-lightblack px-4 my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint
              illo aliquam alias debitis, eveniet voluptate consequatur iusto
              optio. Repellat?
            </h5>
            <h4 class="text-extra mt-6 text-xl font-medium">
              Garrenth Smith
            </h4>
            <p class="capitalize text-lightblack font-thin text-sm">
              marketing and manager
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="w-full h-60 p-12">
      <h2 class="text-3xl font-bold font-heading border-b-2 border-secondary inline-block">
        Newsletter
      </h2>
    </section>
  </main>

  <footer>
    <section id="footer-detail" class="grid p-12">
      <div class="links">
        <a href="http://"><i class="fa-regular fa-envelope"></i></a>
        <a href="http://"><i class="fa-brands fa-twitter"></i></a>
        <a href="http://"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="pages">
        <ul>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
          <li><a href="http://">keyboard</a></li>
        </ul>
      </div>
      <div class="details">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
          minima earum quis, adipisci delectus accusamus animi laborum unde
          magni cum! Aut totam labore error dolorum sunt necessitatibus omnis
          ducimus porro. Itaque unde rerum neque nisi temporibus, dolore
          aspernatur, dignissimos ex ullam esse sapiente velit? Ducimus
          quaerat praesentium, assumenda quisquam dolor quis qui ipsam
          placeat, nesciunt veniam ipsum. Minus, non doloremque.
        </p>

        <h5>Customer support : <span>+1-234-566-8902</span></h5>
      </div>
    </section>
  </footer>

  <?php

  include("./login.php");
  include("./dbh.inc.php")
  ?>


  <?php foreach($Result as $item){

    ?>

    <img src="<?php echo ($item['FRONT_IMG']);?> " alt="">

<?php
  } ?>


  <script src="./page.js"></script>
</body>

</html>