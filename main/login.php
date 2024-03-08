<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet" />



</head>



<body>




    <section id="login" class="w-full top-0 left-0 z-40 h-[100vh] py-24 px-80 backdrop-blur-md hidden text-primary">
        <div class="loginboxes h-full rounded-lg flex justify-evenly">
            <div class="img w-1/2 h-full px-12 py-16">

                <h1 class="text-5xl font-heading font-bold text-third capitalize leading-tight"><span class="text-7xl ">Create</span><br> new account</h1>
                <h4 class="text-lg capitalize font-normal">Already registered? login</h4>

                <hr class="w-16 mt-8 ">

                <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>

                <button class="bg-extra px-8 py-2 font-bold text-sm rounded-3xl">Login</button>

            </div>

            <div class="details w-1/2 h-full flex justify-center items-center">

                <div class="form w-[80%] bg-yellow-50 text-secondary rounded-lg px-8 py-6">
                    <h1 class="text-3xl font-heading text-center underline mb-4">Sign In</h1>
                    <form action="./dbh.inc.php" method="post">
                        <label class="block ml-1 font-heading font-normal" for="User_name">Name</label>
                        <input required id="User_name" type="text" name="User_name" placeholder="Please enter your name...." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_email">Email Id</label>
                        <input required type="email" id="User_email" name="User_email" placeholder="Enter your email..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_password">Password</label>
                        <input required type="password" id="User_password" name="User_password" placeholder="Enter your Password..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_Dob">Date-Of-Birth</label>
                        <input required type="date" name="User_Dob" id="User_dob" class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">

                        <button type="submit" class="border-extra px-6 py-1 my-2 rounded-3xl font-heading text-md">Sign up</button>

                    </form>
                </div>
            </div>
        </div>


        <!-- <div class="loginboxes h-full rounded-lg flex justify-evenly">
            <div class="img w-1/2 h-full px-12 py-16">

                <h1 class="text-5xl font-heading font-bold text-third capitalize leading-tight"><span class="text-7xl ">Welcome Back!</span><br> </h1>
                <h4 class="text-lg capitalize font-normal">Create new account?</h4>

                <hr class="w-16 mt-8 ">

                <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>

                <button class="bg-extra px-8 py-2 font-bold text-sm rounded-3xl">Sign In</button>

            </div>

            <div class="details w-1/2 h-full flex justify-center items-center">

                <div class="form w-[80%] bg-pink-300 text-secondary rounded-lg px-8 py-6">
                    <h1 class="text-3xl font-heading text-center underline mb-4">Log In</h1>
                    <form action="">
                        
                        <label class="block ml-1 font-heading font-normal" for="User_email">Email Id</label>
                        <input type="email" id="User_email" name="User_email" placeholder="Enter your email..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_password">Password</label>
                        <input type="password" id="User_password" name="User_password" placeholder="Enter your Password..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                      
                        <button type="submit" class="border-extra px-6 py-1 my-2 rounded-3xl font-heading text-md">Sign up</button>

                    </form>
                </div>

            </div>

        </div>


        <div class="loginboxes h-full rounded-lg flex justify-evenly">
            <div class="img w-1/2 h-full px-12 py-16">

                <h1 class="text-5xl font-heading font-bold text-third capitalize leading-tight"><span class="text-7xl ">Create</span><br> new account</h1>
                <h4 class="text-lg capitalize font-normal">Already registered? login</h4>

                <hr class="w-16 mt-8 ">

                <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>

                <button class="bg-extra px-8 py-2 font-bold text-sm rounded-3xl">Login</button>

            </div>

            <div class="details w-1/2 h-full flex justify-center items-center">

                <div class="form w-[80%] bg-pink-300 text-secondary rounded-lg px-8 py-6">
                    <h1 class="text-3xl font-heading text-center underline mb-4">Sign In</h1>
                    <form action="">
                        <label class="block ml-1 font-heading font-normal" for="User_name">Name</label>
                        <input id="User_name" type="text" name="user_name" placeholder="Please enter your name...." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_email">Email Id</label>
                        <input type="email" id="User_email" name="User_email" placeholder="Enter your email..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_password">Password</label>
                        <input type="password" id="User_password" name="User_password" placeholder="Enter your Password..." class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">
                        <br>

                        <label class="block ml-1 font-heading font-normal" for="User_Dob">Date-Of-Birth</label>
                        <input type="date" name="User_Dob" id="User_dob" class="text-sm opacity-80 h-8 mb-3 px-2 rounded-md py-2">

                        <button type="submit" class="border-extra px-6 py-1 my-2 rounded-3xl font-heading text-md">Sign up</button>

                    </form>
                </div>

            </div>

        </div> -->
    </section>


    <script src="page.js"></script>


</body>

</html>