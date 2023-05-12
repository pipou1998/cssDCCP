
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>E-Learning</title>
</head>
<style>
body { font-family: sans-serif; }

.scene {
  width: 500px;
  height: 400px;
  /* border: 1px solid #CCC; */
  /* margin: 80px; */
  perspective: 400px;
}

.box {
    top:50px;
  width: 500px;
  height: 400px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-50px);
  transition: transform 1s;
}

.box.show-front  { transform: translateZ( -50px) rotateY(   0deg); }
.box.show-back   { transform: translateZ( -50px) rotateY(-180deg); }
.box.show-right  { transform: translateZ(-150px) rotateY( -90deg); }
.box.show-left   { transform: translateZ(-150px) rotateY(  90deg); }
.box.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.box.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }

.box__face {
  position: absolute;
  /* border: 5px solid black; */
  font-size: 20px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.box__face--front
{
    width: 300px;
    height: 300px;
    line-height: 200px;
    background: url("/images/system-unit-parts/side1.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 300px 300px;
    background-position: center;
}
.box__face--back {
    width: 300px;
    height: 300px;
    line-height: 200px;
    background: url("/images/system-unit-parts/side2.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 300px 300px;
    background-position: center;
}

.box__face--right{
    width: 100px;
    height: 300px;
    left: 100px;
    line-height: 200px;
    background: url("/images/system-unit-parts/front.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 100px 300px;
    background-position: center;
}
.box__face--left {
    width: 100px;
    height: 300px;
    left: 100px;
    line-height: 200px;
    background: url("/images/system-unit-parts/back.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 100px 300px;
    background-position: center;
}
.box__face--bottom {
    width: 300px;
    height: 100px;
    top: 50px;
    line-height: 100px;
    background: url("/images/system-unit-parts/bottom.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-size: 296px 100px;
    
}
.box__face--top{   
    width: 300px;
    height: 100px;
    top: 50px;
    line-height: 100px;
    background: url("/images/system-unit-parts/top.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 300px 130px;
    background-position: center;
}

/* .box__face--front  { background-image: url("paper.gif");}
.box__face--right  { background: hsla( 60, 100%, 50%, 0.7); }
.box__face--back   { background: hsla(120, 100%, 50%, 0.7); }
.box__face--left   { background: hsla(180, 100%, 50%, 0.7); }
.box__face--top    { background: hsla(240, 100%, 50%, 0.7); }
.box__face--bottom { background: hsla(300, 100%, 50%, 0.7); } */

.box__face--front  { transform: rotateY(  0deg) translateZ( 50px); }
.box__face--back   { transform: rotateY(180deg) translateZ( 50px); }
/* .box__face--front  { transform: rotateY(  0deg) translateZ( 50px); }
.box__face--back   { transform: rotateY(180deg) translateZ( 50px); } DEFAULT */ 

.box__face--right  { transform: rotateY( 90deg) translateZ(150px); }
.box__face--left   { transform: rotateY(-90deg) translateZ(150px); }

.box__face--top    { transform: rotateX( 90deg) translateZ(100px); }
.box__face--bottom { transform: rotateX(-90deg) translateZ(200px); }

label { margin-right: 10px; }
</style>
<body>

    <div class="container default-container">
        <div class="left-col left-col-edit default-height">
            <h1 class="title">E-Learning</h1>
            <img src="./images/banner/banner.jpg" class="banner" alt="banner">
            
            <div class="category">
                <div class="module">Select Learning Modules</div>
                <div class="learning-outcome"> 
                    <div  class="module-one module-edit" id="module-one"><i class="fa fa-check"></i>&nbsp;&nbsp;System Unit</div>
                    <div  class="module-two module-edit" id="module-two"><i class="fa fa-check"></i>&nbsp;&nbsp;Motherboard</div>
                    <div class="control" id="control">
                        <div class="control-button">
                            <div id="answer"></div>
                            <div class="reset control-edit" id="reset">Reset</div>
                        </div>
                        <div class="summary" id="summary">Summary</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-col">
            <div class="cover default-cover">
                <img class="cover-image" src="/images/cover/cover.jpg" alt="cover">
                <div class="get-start get-start-edit">
                    <b>The COMPUTER SYSTEMS SERVICING NC II </b> consists of competencies
                    that must possess to enable to install and configure computers systems, set-up computer
                    networks and servers and to maintain and repair computer systems and networks.
                </div>
            </div>
            <!-- System Unite -->
                <div class="system-unit-container module-one-lesson">
                    <div class="system-unit-cover-container">
                    <!-- COPY FROM WEB   
                    <div class="system-unit-cover">
                            <div disabled class="drop-power-supply edit drop-image" id="power-supply"><span class="caption caption-power-supply">Power Supply</span></div>
                            <div class="drop-hard-disk edit drop-image" id="hard-disk"><span class="caption caption-hard-disk">Hard Disk</span></div>
                            <div class="drop-cd-rom edit drop-image" id="cd-rom"><span class="caption caption-cd-rom">CD-ROM</span></div>
                            <div class="drop-mother-board edit drop-image" id="mother-board"><span class="caption caption-mother-board">Mother Board</span></div>
                        </div> 
                         -->
                        <!-- COPY FROM WEB -->
                        <table>
                            <tr>
                                <td>
                                    <center>
                                        <div class="scene">
                                            <div class="box">
                                                <div class="box__face box__face--front">
                                                    <div class="drop-mother-board edit drop-image" id="mother-board">
                                                        <span class="caption caption-mother-board">
                                                            Mother Board
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="box__face box__face--back">
                                                    <div class="drop-hard-disk edit drop-image" id="hard-disk">
                                                        <span class="caption caption-hard-disk">
                                                            Hard Disk
                                                        </span>
                                                    </div>
                                                    <div disabled class="drop-power-supply edit drop-image" id="power-supply">
                                                        <span class="caption caption-power-supply">
                                                            PSU
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="box__face box__face--right">FRONT</div>
                                                <div class="box__face box__face--left">
                                                    <div class="drop-IO edit drop-image" id="IO">
                                                        <span class="caption caption-IO">
                                                            IO
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="box__face box__face--top">TOP</div>
                                                <div class="box__face box__face--bottom">BOTTOM</div>
                                            </div>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                    <p class="radio-group">
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="front" checked /> SIDE PANEL
                                        </label>
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="right" /> FRONT PANEL
                                        </label>
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="back" /> SIDE PANEL
                                        </label>
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="left" /> BACK PANEL
                                        </label>
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="top" /> TOP PANEL
                                        </label>
                                        <label>
                                            <input type="radio" name="rotate-cube-side" value="bottom" /> BOTTOM PANEL
                                        </label>
                                    </p>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Parts -->
                                    <div class="system-unit-parts-container">
                                        <div class="system-unit-parts">
                                            <!-- <img src="" draggable="true" class="drag-image" id="drag-IO" data-info="IO" alt="IO"> -->
                                            <!-- <img src="/images/system-unit-parts/cd-rom.jpeg" draggable="true" class="drag-image" id="drag-cd-rom" data-info="cd-rom"  alt="cd-rom"> -->
                                            <img src="/images/system-unit-parts/io.jpg" height="170px" draggable="true" class="drag-image" id="drag-IO" data-info="IO"  alt="IO">
                                            <img src="/images/system-unit-parts/hard-disk.jpeg" draggable="true" class="drag-image" id="drag-hard-disk" data-info="hard-disk" alt="hard-disk">
                                            <img src="/images/system-unit-parts/mother-board.png" draggable="true" class="drag-image" id="drag-mother-board" data-info="mother-board" alt="mother-board">
                                            <img src="/images/system-unit-parts/powerSupply.jpeg" draggable="true" class="drag-image" id="drag-power-supply" data-info="power-supply" alt="power-supply">
                                        </div>
                                    </div>
                                    <!-- Parts -->
                                </td>
                            </tr>
                        </table>
                     <!-- COPY FROM WEB -->
                    </div>

                </div>
            <!-- System Unite -->

            <!-- Motherboard -->
                
                <div class="mother-board-container module-two-lesson">
                    <div class="mother-board-cover-container">
                        <div class="mother-board-cover">
                            <!-- Mother Board Cover -->
                            <div class="drop-ram edit drop-image-mother-board" id="ram"><span class="caption caption-edit caption-ram">Ram Memory</span></div>
                            <div class="drop-video-card edit drop-image-mother-board" id="pci-xpress"></i><span class="caption caption-edit caption-vertical caption-pci-xpress">PCI Express</span></div>
                            <div class="drop-pci edit drop-image-mother-board" id="pci"><span class="caption caption-edit caption-pci">PCI</span></div>
                            <div class="drop-cpu edit drop-image-mother-board" id="cpu"><span class="caption caption-edit caption-cpu">CPU</span></div>
                            <div class="drop-24-pin-atx edit drop-image-mother-board" id="pin-atx-24"><span class="caption caption-edit  caption-pin-atx-24">24 PIN ATX</span></div>
                            <div class="drop-cmos edit drop-image-mother-board" id="cmos"><span class="caption caption-edit caption-cmos">CMOS</span></div>
                            <div class="drop-internal-usb edit drop-image-mother-board" id="internal-usb"><span class="caption caption-edit caption-vertical caption-internal-usb">USB</span></div>
                            <div class="drop-ide edit drop-image-mother-board" id="ide"><span class="caption caption-edit caption-vertical caption-ide">IDE</span></div>
                            <div class="drop-4-pin-atx edit drop-image-mother-board" id="pin-atx-4"><span class="caption caption-edit caption-pin-atx-4">4 PIN ATX</span></div>
                            <div class="drop-sata edit drop-image-mother-board" id="sata"><span class="caption caption-edit caption-sata">SATA</span></div>
                        </div>
                    </div>
                    <div class="mother-board-parts-container">
                        <div class="mother-board-parts">
                            <img class="drag-pin-24-atx drag-image-mother-board" draggable="true" id="drag-pin-24-atx-123" data-info="pin-atx-24" src="/images/motherboard/pin-atx-24.jpg" alt="24 pin">
                            <img class="drag-pin-4-atx drag-image-mother-board" draggable="true" id="drag-pin-4-atx" data-info="pin-atx-4" src="/images/motherboard/pin-atx-4.jpg" alt="4 pin">
                            <img class="drag-cmos drag-image-mother-board" draggable="true" id="drag-cmos" data-info="cmos" src="/images/motherboard/cmos.jpg" alt="CMOS">
                            <img class="drag-cpu drag-image-mother-board" draggable="true" id="drag-cpu" data-info="cpu" src="/images/motherboard/cpu.jpg" alt="CPU">
                            <img class="drag-ide drag-image-mother-board" draggable="true" id="drag-ide" data-info="ide" src="/images/motherboard/ide.jpg" alt="IDE">
                            <img class="drag-pci drag-image-mother-board" draggable="true" id="drag-pci" data-info="pci" src="/images/motherboard/pci.jpg" alt="PCI">
                            <img class="drag-ram drag-image-mother-board" draggable="true" id="drag-ram" data-info="ram" src="/images/motherboard/ram.jpg" alt="Ram">
                            <img class="drag-sata drag-image-mother-board" draggable="true" id="drag-sata" data-info="sata" src="/images/motherboard/sata.jpg" alt="SATA">
                            <img class="drag-usb drag-image-mother-board" draggable="true" id="drag-usb" data-info="internal-usb" src="/images/motherboard/internal-usb.jpg" alt="usb">
                            <img class="drag-pci-express drag-image-mother-board" draggable="true" id="drag-pci-express" data-info="pci-xpress" src="/images/motherboard/pci-xpress.jpg" alt="Video Card">
                        </div>
                    </div>

                </div>

            <!-- Motherboard -->

            <!-- Summary Report -->
                <div class="summary-container">
                    <div class="summary-content">
                        <h1 class="summary-header">Summary Report</h1>
                        <div class="summary-list">

                            <table>
                                <tr>
                                    <th style="width: 80%;text-align: left;">Learning Modules</th>
                                    <th style="width: 20%;">Score</th>
                                </tr>
                                <tr>
                                    <td class="module-title">Module one System Unit</td>
                                    <td class="module-score"><span id="system-unit-score">4</span></td>
                                </tr>
                                <tr>

                                    <td class="module-title">Module two Motherboard</td>
                                    <td class="module-score"><span id="mother-board-score">10</span></td>
            
                                </tr>
                            </table>

                            <form method="POST" action="{{ route('sys.unit') }}" id="myFormId">
                                @csrf
                                
                                <input type="hidden" name="score" id="score"/>
                                <input type="hidden" name="pf" id="pf"/>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-info text-white" id="myButtonID">
                                        <i class="fas fa-arrow-circle-right"></i>
                                        SUBMIT
                                    </button>
                                </div>

                            </form>

                        </div>
                        
                    </div>
                </div>

            <!-- Summary Report -->

        </div>
        

    </div>
    <script src="{{ asset('js/apps.js') }}"></script>
    <script>
            var box = document.querySelector('.box');
            var radioGroup = document.querySelector('.radio-group');
            var currentClass = '';

            function changeSide() {
            var checkedRadio = radioGroup.querySelector(':checked');
            var showClass = 'show-' + checkedRadio.value;
            if ( currentClass ) {
                box.classList.remove( currentClass );
            }
            box.classList.add( showClass );
            currentClass = showClass;
            }
            // set initial side
            changeSide();

            radioGroup.addEventListener( 'change', changeSide );        
    </script>
</body>
</html>