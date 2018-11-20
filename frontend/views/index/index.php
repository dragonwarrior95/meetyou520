<?php

/* @var $this yii\web\View */

$this->title = '美化图片';
?>

<style>
    #webgl-app {
        padding: 10px 10px 10px 290px;
        background-color: darkolivegreen;
        position: fixed;
        left: 0px;
        top: 50px;
        bottom: 60px;
        right: 0px;
    }

    .nav-collapse #index-index {
        padding: 10px 10px 10px 70px;
        background-color: darkseagreen;
    }
    .nav-left {
        position: fixed;
        top: 50px;
        left: 0px;
        height: 100%;
        width: 280px;
        padding: 0px 0 0px 0;
        background-color: #273238;
        border-right: solid 1px #e6e6e6;
    }
    .nav-collapse .nav-left {
        width: 60px;
    }
    .LeftPanel {
        padding: 20px;
    }

    /*.el-main {*/
        /*background-color: #E9EEF3;*/
        /*color: #333;*/
        /*text-align: center;*/
        /*min-height: 700px;*/
        /*height: auto;*/
        /*padding: 0;*/
        /*margin: auto;*/
    /*}*/
</style>

<style>
    .viewport {
        /* cursor:-webkit-grab; */
        cursor: -moz-grab;
    }

    .viewport>canvas {
        width: 100%;
        height: 100%;
        -ms-interpolation-mode: nearest-neighbor;
        image-rendering: -moz-crisp-edges;
        image-rendering: pixelated;
        image-rendering: optimizeSpeed
    }

    .viewport .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: default;
        opacity: 0;
        pointer-events: none;
        display: none;
        transition: opacity .2s ease-out;
        z-index: 1;
        overflow: hidden
    }

    .toolbar.left {
        left: 0;
    }
    .toolbar {
        position: absolute;
        width: 50px;
        top: 0;
        bottom: 0;
        font-size: 13px;
        cursor: default;
        z-index: 3;
        pointer-events: all;
        background-clip: padding-box;
    }
    .left {
        float: left;
    }
    .right {
        float: right;
    }
</style>


<div id="webgl-app" style="border: 1px solid red;">
    <div class="viewport">
        <div id="console" style="height: 60px; border: 1px solid red; background-color: ghostwhite"></div>
        <canvas id="canvas" v-bind:width="canvasWidth" v-bind:height="canvasHeight" style="border: 1px solid red;" v-on:onmousemove='onMouseMove(ev)'>你的浏览器不支持webGL</canvas>
    </div>
    <div class="toolbars">
        <div class="toolbar left" style="pointer-events: all; opacity: 1;">
            <i class="icon active" data-name="looks" style="touch-action: manipulation; transform: translate(0px, 47px);">
                <span class="icon-inner"><span>è</span></span>
            </i>
            <i class="icon" data-name="overlays" style="touch-action: manipulation; transform: translate(0px, 95px);">
                <span class="icon-inner"><span>j</span></span>
            </i><i class="icon" data-name="retouch" style="touch-action: manipulation; transform: translate(0px, 143px);">
                <span class="icon-inner"><span>1</span></span>
            </i>
            <i class="icon" data-name="crop" style="touch-action: manipulation; transform: translate(0px, 191px);">
                <span class="icon-inner"><span>Ç</span></span>
            </i>
            <i class="icon" data-name="layers" style="touch-action: manipulation; transform: translate(0px, 239px);">
                <span class="icon-inner"><span>ċ</span></span>
            </i>
        </div>
        <div class="toolbar right" style="pointer-events: all; opacity: 1;">
            <i class="icon" data-name="adjustments" style="touch-action: manipulation; transform: translate(0px, 68px);">
                <span class="icon-inner"><span>í</span></span>
            </i>
            <i class="icon" data-name="local_adjustments" style="touch-action: manipulation; transform: translate(0px, 118px);">
                <span class="icon-inner"><span>Þ</span></span>
            </i>
            <i class="icon" data-name="history" style="touch-action: manipulation; transform: translate(0px, 168px);">
                <span class="icon-inner"><span>
                        <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                <g transform="translate(16.000000, 16.500000) scale(-1, 1) translate(-16.000000, -16.500000) translate(5.000000, 4.000000)" stroke="currentColor"><g transform="translate(6.000000, 10.000000)" stroke-linejoin="round" stroke-width="2"><path d="M0,4 L5,4"></path><path d="M5,4 L11,0"></path></g>
                                    <g transform="translate(11.000000, 12.500000) scale(-1, 1) rotate(-90.000000) translate(-11.000000, -12.500000) translate(-1.000000, 2.000000)"><path d="M10.5,0.5 C4.9771525,0.5 0.5,4.9771525 0.5,10.5 C0.5,16.0228475 4.9771525,20.5 10.5,20.5 C16.0228475,20.5 20.5,16.0228475 20.5,10.5" stroke-width="2"></path><polygon fill="currentColor" stroke-linejoin="round" points="17.2000003 10.5 23.8000002 10.5 20.5000002 5.5"></polygon></g></g></g></svg></span></span>
            </i>
            <i class="icon" data-name="undo" style="touch-action: manipulation; transform: translate(0px, 218px);">
                <span class="icon-inner"><span>J</span></span>
            </i>
        </div>
    </div>
    <el-container class="index-main">
        <div class="nav-left">
            <div class="LeftPanel">
                <p><input type="file" id="browsefile" style="display: none;" v-on:change="onEditChange(this)"></p>
                <p><input type="button" id="filebutton" value="打开图片" v-on:click='onBtnOpen()'></p>
                <p><input type="textfield" id="filepath"></p>

                <p><label>半径：</label><input id="PointSize" type="range" min="0" max="255" value="5" oninput="onChange(value)" onchange="onChange(value)"></p>
                <p><label>Red：</label><input id="red" type="range" min="0" max="255" value="255" oninput="onRValue(value)" onchange="onRValue(value)"></p>
                <p><label>Green：</label><input id="green" type="range" min="0" max="255" value="0" oninput="onGValue(value)" onchange="onGValue(value)"></p>
                <p><label>Blue：</label><input id="blue" type="range" min="0" max="255" value="0" oninput="onBValue(value)" onchange="onBValue(value)"></p>
                <p><label>Alpha：</label><input id="alpha" type="range" min="0" max="255" value="255" oninput="onAValue(value)" onchange="onAValue(value)"></p>
                <p><label>放大：</label><input id="scale" type="range" min="10" max="400" value="100" oninput="onScaleValue(value)" onchange="onScaleValue(value)"></p>
                <p><label>旋转：</label><input id="rotate" type="range" min="0" max="360" value="0" oninput="onRotateValue(value)" onchange="onRotateValue(value)"></p>
            </div>
        </div>
        <div class="nav-left1">
        </div>
    </el-container>
</div>




<script src="/frontend/web/js/webgl/webgl-debug.js"></script>
<script src="/frontend/web/js/webgl/webgl-utils.js"></script>
<script src="/frontend/web/js/webgl/cuon-utils.js"></script>
<script src="/frontend/web/js/webgl/cuon-matrix.js"></script><!--矩阵变换库-->
<script src="/frontend/web/js/webgl/jquery-3.2.1.js"></script>
<!--<script src="/frontend/web/js/WebGL.js"></script>-->
<!--<script src="/frontend/web/js/WebGLTransfor.js"></script>-->
<!--<script src="/frontend/web/js/WebGLColor.js"></script>-->
<!--<script src="/frontend/web/js/WebGLImage.js"></script>-->
<!--<script src="/frontend/web/js/webgl/FilterBase.js"></script>-->
<script src="/frontend/web/js/webgl/JFilterBase.js"></script>
<!--<script src="/frontend/web/js/test.js"></script>-->

<script id="vs" type="x-shader/x-vertex">
    attribute vec4 a_Position;
    attribute vec2 a_TexCoord;
    varying vec2 v_TexCoord;
    uniform mat4 u_ModelMatrix;
    void main()
    {
        gl_Position = u_ModelMatrix * a_Position;
        v_TexCoord = a_TexCoord;
    }
</script>
<script id="fs" type="x-shader/x-fragment">
    precision mediump float;// 要添加这行不然初始化会失败
    uniform sampler2D u_Sampler;
    varying vec2 v_TexCoord;
    void main()
    {
        gl_FragColor = texture2D(u_Sampler, v_TexCoord);
        gl_FragColor = vec4(1.0, 0, 0, 1.0);\n' +
    }
</script>
<script>
    var vm = new Vue({
        el: '#webgl-app',
        data: function() {
            return {
                visible: false,

                canvasWidth: '800px',
                canvasHeight: '600px',

                startX: '0',
                stratY: '0',

                canvas: $("#canvas")[0],
                console: $("#console")[0],
                webGL: null,
                filterBase: null,
                bLButtonDown: false,
                glTexture: 0,
            }
        },
        created: function() {
            if ($(".main-container").hasClass("nav-hide"))
                $(".main-container").removeClass("nav-hide");
        },
        mounted: function() {
            this.canvas = $("#canvas")[0];// document.getElementById("canvas");
            this.console = $("#console")[0];


            // key event - use DOM element as object
            // this.canvas.addEventListener('keydown', doKeyDown, true);
            this.canvas.focus();
            // key event - use window as object
            // window.addEventListener('keydown', doKeyDown, true);

            // mouse event
            this.canvas.addEventListener("mousedown", this.onMouseDown, false);
            this.canvas.addEventListener('mousemove', this.onMouseMove, false);
            this.canvas.addEventListener('mouseup',   this.onMouseUp, false);
            this.canvas.addEventListener('mousewheel',this.onMouseWheel, false);
            this.canvas.addEventListener("touchstart", this.onTouchStart);
            this.canvas.addEventListener("touchend", this.onTouchEnd);
            this.canvas.addEventListener("touchmove", this.onTouchMove);

            this.webGL = getWebGLContext(this.canvas, true);
            // this.canvasWidth = this.innerWidth() + 'px';
            // this.canvasHeight = this.innerHeight() + 'px';
            if (this.webGL == null) {
                return;
            }

            this.filterBase = new JFilterBase(this.webGL);
            this.filterBase.initlize();
            this.filterBase.setFrameSize(this.canvas.clientWidth, this.canvas.clientHeight);

            this.onLoadImage("/img/1.jpg");
        },
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            },

            onBtnOpen() {
                $("#browsefile").click();
            },
            // 获取图片完整地址打开图片
            onEditChange(input) {
                input = $("#browsefile")[0];
                var imgURL = "";
                try{
                    var file = null;
                    if(input.files && input.files[0] ){
                        file = input.files[0];
                    }else if(input.files && input.files.item(0)) {
                        file = input.files.item(0);
                    }
                    //Firefox 因安全性问题已无法直接通过input[file].value 获取完整的文件路径
                    try{
                        imgURL =  file.getAsDataURL();
                    }catch(e){
                        imgURL = window.URL.createObjectURL(file);
                    }
                }catch(e){
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            imgURL = e.target.result;
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                if (imgURL != "") {
                    this.onLoadImage(imgURL);
                }
            },
            onLoadImage(fileName) {
                var image = new Image();
                var self = this;
                image.onload = function () {
                    // setAutoShow(gl, image.width, image.height);// 图片加载为设置自适应
                    if (self.filterBase) {
                        self.filterBase.init();
                        self.glTexture = self.filterBase.loadTexture(image);
                        self.filterBase.drawScene();
                    }
                };
                image.src = fileName;
            },

            onMouseDown(ev) {
                let gl = this.webGL;
                let canvas = this.canvas;

                this.bLButtonDown = true;

                this.startX = ev.x;
                this.startY = ev.y;
            },
            onMouseUp(ev) {
                this.startX = 0;
                this.startY = 0;

                this.bLButtonDown = false;

            },
             onMouseMove(ev) {
                 let gl = this.webGL;
                 let canvas = this.canvas;

                 if (this.bLButtonDown === true) {
                    var x = ev.x - this.startX;
                    var y = ev.y - this.startY;

                    if (this.filterBase) {
                        this.filterBase.setTranslate(x, -y);
                        this.filterBase.update();
                    }
                    this.startX = ev.x;
                    this.startY = ev.y;

                    this.console.innerHTML = "point(" + ev.clientX + "," + ev.clientY + ")<br/>gl(" +
                        x.toFixed(2) + "," + y.toFixed(2) + ")";
                }
                else {
                     this.console.innerHTML = "&emsp;x: " + ev.x + "<br/>&emsp;y: " + ev.y;
                }
            },
            onMouseWheel(ev) {
                if (this.filterBase) {
                    this.filterBase.scale(ev.wheelDelta);
                    this.filterBase.update();
                }
            },
            onTouchStart(ev) {
                let gl = this.webGL;
                let canvas = this.canvas;

                this.bLButtonDown = true;
            },
            onTouchEnd(ev) {
                let gl = this.webGL;
                let canvas = this.canvas;

                this.bLButtonDown = false;
            },
            onTouchMove(ev) {
                let gl = this.webGL;
                let canvas = this.canvas;

                if (this.bLButtonDown === true) {
                    var x = ev.x - canvas.offsetLeft;
                    var y = ev.y - canvas.offsetTop;
                    var rect = ev.target.getBoundingClientRect();

                    var width = canvas.width / 2;
                    var height = canvas.height / 2;

                    x = (x - width) / width;
                    y = (height - y) / height;

                    this.console.innerHTML = "point(" + ev.touches[0].pageX + "," + ev.touches[0].pageY + ")<br/>gl(" +
                        x.toFixed(2) + "," + y.toFixed(2) + ")";
                }
            }
        }
    });
</script>
