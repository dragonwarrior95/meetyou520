<?php

/* @var $this yii\web\View */

$this->title = '美化图片';
?>

<style>
    #index-index {
        padding: 10px 10px 10px 290px;
        background-color: darkseagreen;
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

    /*.el-main {*/
        /*background-color: #E9EEF3;*/
        /*color: #333;*/
        /*text-align: center;*/
        /*min-height: 700px;*/
        /*height: auto;*/
        /*padding: 0;*/
    /*}*/
</style>


<div id="index-index">
    <el-container class="index-main">
        <!--左侧菜单-->
<!--        <el-aside style="width: 100%;">-->
<!--            <el-col>-->
        <div class="nav-left">
<!--            <el-menu style="border: none;"-->
<!--                        default-active="2"-->
<!--                        class="el-menu-vertical-demo"-->
<!--                        @open="handleOpen"-->
<!--                        @close="handleClose"-->
<!--                        background-color="#273238"-->
<!--                        text-color="#fff"-->
<!--                        active-text-color="#ffd04b">-->
<!--                    <el-submenu index="1">-->
<!--                        <template slot="title">-->
<!--                            <i class="el-icon-location"></i>-->
<!--                            <span>导航一</span>-->
<!--                        </template>-->
<!--                        <el-menu-item-group>-->
<!--                            <template slot="title">分组一</template>-->
<!--                            <el-menu-item index="1-1">选项1</el-menu-item>-->
<!--                            <el-menu-item index="1-2">选项2</el-menu-item>-->
<!--                        </el-menu-item-group>-->
<!--                        <el-menu-item-group title="分组2">-->
<!--                            <el-menu-item index="1-3">选项3</el-menu-item>-->
<!--                        </el-menu-item-group>-->
<!--                        <el-submenu index="1-4">-->
<!--                            <template slot="title">选项4</template>-->
<!--                            <el-menu-item index="1-4-1">选项1</el-menu-item>-->
<!--                        </el-submenu>-->
<!--                    </el-submenu>-->
<!--                    <el-menu-item index="2">-->
<!--                        <i class="el-icon-menu"></i>-->
<!--                        <span slot="title">导航二</span>-->
<!--                    </el-menu-item>-->
<!--                    <el-menu-item index="3" disabled>-->
<!--                        <i class="el-icon-document"></i>-->
<!--                        <span slot="title">导航三</span>-->
<!--                    </el-menu-item>-->
<!--                    <el-menu-item index="4">-->
<!--                        <i class="el-icon-setting"></i>-->
<!--                        <span slot="title">导航四</span>-->
<!--                    </el-menu-item>-->
<!--                    <el-submenu index="6">-->
<!--                        <template slot="title">-->
<!--                            <i class="el-icon-location"></i>-->
<!--                            <span>导航六</span>-->
<!--                        </template>-->
<!--                        <el-menu-item index="6-1">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航六</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="6-2">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航7</span>-->
<!--                        </el-menu-item>-->
<!--                    </el-submenu>-->
<!--                    <el-submenu index="5">-->
<!--                        <template slot="title">-->
<!--                            <i class="el-icon-location"></i>-->
<!--                            <span>导航五</span>-->
<!--                        </template>-->
<!--                        <el-menu-item index="5-1">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航六</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="5-2">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="5-3">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="5-4">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                    </el-submenu>-->
<!--                    <el-submenu index="7">-->
<!--                        <template slot="title">-->
<!--                            <i class="el-icon-location"></i>-->
<!--                            <span>导航五</span>-->
<!--                        </template>-->
<!--                        <el-menu-item index="7-1">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航六</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="7-2">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="7-3">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                        <el-menu-item index="7-4">-->
<!--                            <i class="el-icon-setting"></i>-->
<!--                            <span slot="title">导航5</span>-->
<!--                        </el-menu-item>-->
<!--                    </el-submenu>-->
<!--                </el-menu>-->
        </div>
<!--            </el-col>-->
<!--        </el-aside>-->
        <!--中间内容-->
        <el-main>
            <canvas id="canvas" v-bind:width="canvasWidth" v-bind:height="canvasHeight" style="border: 1px solid red;">你的浏览器不支持webGL</canvas>
        </el-main>
    </el-container>

</div>


<script src="/js/webgl/webgl-debug.js"></script>
<script src="/js/webgl/webgl-utils.js"></script>
<script src="/js/webgl/cuon-utils.js"></script>
<script src="/js/webgl/cuon-matrix.js"></script><!--矩阵变换库-->
<script src="/js/webgl/jquery-3.2.1.js"></script>

<!--<script src="/js/WebGL.js"></script>-->
<!--<script src="/js/WebGLTransfor.js"></script>-->
<!--<script src="/js/WebGLColor.js"></script>-->
<script src="/js/WebGLImage.js"></script>
<!--<script src="/js/webgl/FilterBase.js"></script>-->
<script src="/js/webgl/JFilterBase.js"></script>
<!--<script src="/js/test.js"></script>-->

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
        el: '#index-index',
        data: function() {
            return {
                visible: false,

                canvasWidth: '1024',
                canvasHeight: '768px',

                canvas: $("#canvas"),
                filterBase: null,
                bLButtonDown: false,
                glTexture: 0,
            }
        },
        created: function() {
            $(".main-container").removeClass("nav-hide");
            this.canvas = $("canvas");
            // this.canvasWidth = this.innerWidth() + 'px';
            // this.canvasHeight = this.innerHeight() + 'px';

            this.filterBase = new JFilterBase(getWebGLContext(this.canvas, true));
            this.filterBase.initlize();
            this.filterBase.setFrameSize(this.canvas.clientWidth, this.canvas.clientHeight);
            var gl = this.filterBase.getWebGL();
            // this.canvas.onmousedown = function (ev) { this.onMouseDown(ev, gl, this.canvas);};
            // this.canvas.onmouseup = function (ev) { this.onMouseUp(ev, gl, this.canvas);};
            // this.canvas.onmousemove = function (ev) { this.onMouseMove(ev, gl, this.canvas);};
            //
            // this.canvas.addEventListener("touchstart", function (ev) { this.onTouchStart(ev, gl, this.canvas);});
            // this.canvas.addEventListener("touchend", function (ev) { this.onTouchEnd(ev, gl, this.canvas);});
            // this.canvas.addEventListener("touchmove", function (ev) { this.onTouchMove(ev, gl, this.canvas);});

            this.onLoadImage("/image/37.jpg");
        },
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            },
            $(id) {
                return typeof id == "string" ? document.getElementById(id) : id;
            },

            onLoadImage(fileName) {
                var image = new Image();
                _this = this;
                image.onload = function () {
                    // setAutoShow(gl, image.width, image.height);// 图片加载为设置自适应
                    print("Image(" + image.width +", " + image.height+")");
                    _this.glTexture = _this.filterBase.loadTexture(image);
                    _this.filterBase.draw();
                };
                image.src = fileName;
            },

            onMouseDown(ev, gl, canvas) {
                bLButtonDown = true;

                var x = ev.x - canvas.offsetLeft;
                var y = ev.y - canvas.offsetTop;
                var rect = ev.target.getBoundingClientRect();

                var width = canvas.width / 2;
                var height= canvas.height/2;

                x = (x - width) / width;
                y = (height - y) / height;
            },
            onMouseUp(ev, gl, canvas) {
                bLButtonDown = false;

                var x = ev.x - canvas.offsetLeft;
                var y = ev.y - canvas.offsetTop;
                var rect = ev.target.getBoundingClientRect();

                var width = canvas.width / 2;
                var height= canvas.height/2;
            },
             onMouseMove(ev, gl, canvas) {
                if (bLButtonDown === true) {
                    var x = ev.x - canvas.offsetLeft;
                    var y = ev.y - canvas.offsetTop;
                    var rect = ev.target.getBoundingClientRect();

                    var width = canvas.width / 2;
                    var height= canvas.height/2;

                    x = (x - width) / width;
                    y = (height - y) / height;

                    var div = $("console");
                    div.innerHTML = "point(" + ev.clientX + "," + ev.clientY + ")<br/>gl(" +
                        x.toFixed(2) + "," + y.toFixed(2) + ")";
                }
            },
            onTouchStart(ev, gl, canvas) {
                bLButtonDown = true;
            },
            onTouchMove(ev, gl, canvas) {
                bLButtonDown = false;
            },
            onTouchMove(ev, gl, canvas) {
                if (bLButtonDown === true) {
                    var x = ev.x - canvas.offsetLeft;
                    var y = ev.y - canvas.offsetTop;
                    var rect = ev.target.getBoundingClientRect();

                    var width = canvas.width / 2;
                    var height = canvas.height / 2;

                    x = (x - width) / width;
                    y = (height - y) / height;

                    var div = $("console");
                    div.innerHTML = "point(" + ev.touches[0].pageX + "," + ev.touches[0].pageY + ")<br/>gl(" +
                        x.toFixed(2) + "," + y.toFixed(2) + ")";
                }
            }
        }
    });
</script>
