<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="/src/img/myfoodico.png">
    <link rel="icon" href="/public/src/img/my-food-bag-npv--600.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <title>@yield('titulo')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap');
        *{
            font-family: 'Roboto', sans-serif;
        }

/* Start animation display menu  */
        .menu-links-visible{
            animation: display 0.75s forwards;
        }

        @keyframes display {
            0% {
                top: 0;
                
            }
            100% {
                top: 60px;
            }
        }
/* End animation display menu  */

/* Start animation typing text  */
        .typing-animation{
            animation: 
            blinkCursor 500ms infinite normal, 
            typing 4s steps(40) 1s normal both;
        }

        @keyframes typing {
           from {
            width: 0;
           }
           to{
            width: 100%;
           }
        }
    
        @keyframes blinkCursor {
           from {
            border-right-color: rgba(255,255,255,0.75);
           }
           to{
            border-right-color: transparent;
           }
        }
        /* .pulse{
            animation: pulse 1s linear infinite;
            
        }
       @keyframes pulse {
        0%{
            box-shadow: 0 0 0 50px rgba(163,230,53,1)
        }
        100%{
            box-shadow: 0 0 0 50px rgba(163,230,53,0)
        }
       } */
/* End animation typing text  */
    
    </style>
</head>
<body class="Corpo w-full h-screen border border-lime-300 flex flex-col relative bg-zinc-800  ">
<!-- Start menu small screen -->
    <!-- Start abrir menu -->
        <header class="cabecalho min-[640px]:hidden flex fixed w-full z-10 h-16 justify-between pl-5 pr-5 items-center bg-gradient-to-b from-lime-500 to-lime-300 drop-shadow-xl">
        <a href="" id="Logo_text" class="font-mono"><p>Front_<span class="= font-extrabold">JoabsonNogueira</span></p></a>
            <button class="btnMenuAbrir " id="btnMenuAbrir" onclick="AbrirMenu()">☰</button>
            <div id="menu-links-hidden" class="menu flex hidden w-full justify-around">
                <ul class="menu-links-hidden flex gap-3">
                    <a href="" class="links"><li>Sobre</li></a>
                    <a href="" class="links"><li>Projetos</li></a>
                    <a href="" class="links"><li>Contato</li></a>  
                </ul>
            </div>
    <!-- End abrir menu -->

    <!-- Start fechar menu -->
            <!-- <div class="menu-links-visible hidden  h-auto" id='menu-links-visible'> -->
                <!-- <button  id="btnMenuFechar" class="btnMenuFechar" onclick="FecharMenu()"> X</button> -->
                <!-- <div id="menu-links-visible" class="menu-links-visible flex absolute w-full right-0 top-16 bg-lime-300">
                    <ul class="menu-links-visible w-full h-12 items-center flex justify-around gap-10 font-medium">
                        <a href="" class="links"><li>Sobre</li></a>
                        <a href="" class="links"><li>Projetos</li></a>
                        <a href="" class="links"><li>Contato</li></a>  
                    </ul>
                </div>
            </div> -->
        </header>
    <!-- End fechar menu -->
<!-- End menu small screen -->

<!-- Start Menu large screen -->
    <header class="cabecalho max-[350px]:hidden min-[640px]:flex w-full h-16 items-center bg-gradient-to-b from-lime-500 to-lime-300 drop-shadow-xl ">
        <div class="menu flex w-full justify-around">
        <a href="" id="Logo_text" class="font-mono"><p>Front_<span class="= font-extrabold">JoabsonNogueira</span></p></a>
            <ul class="menu_links-viewLarge flex gap-6">
                <a href="#" class="links hover:font-bold delay-150"><li>Sobre</li></a>
                <a href="#" class="links hover:font-bold delay-150"><li>Projetos</li></a>
                <a href="#" class="links hover:font-bold delay-150  "><li>Contato</li></a>  
            </ul>
        </div>
    </header>
<!-- End menu large screen -->

<!-- Start section yieldScreen -->
    <section>
        @yield('conteudo')
    </section>
<!-- End section yieldScreen -->   

<!-- Start Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Start AbrirMenu
        function AbrirMenu() {
            document.getElementById("menu-links-visible").style.display = "block";
            document.getElementById("btnMenuAbrir").style.display = "none";
            document.getElementById("menu-links-hidden").style.display="none";
            }
        // End AbrirMenu
        // Start FecharMenu
        function FecharMenu() {
            document.getElementById("menu-links-visible").style.display = "none";
            document.getElementById("btnMenuAbrir").style.display = "block";
            document.getElementById("Logo_text").style.display="block";
        }
        // End FecharMenu

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
<!-- End Scripts -->
</body>
</html>