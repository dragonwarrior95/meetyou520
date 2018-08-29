<?php

/* @var $this yii\web\View */

$this->title = '美化图片';
?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

<!-- 引入样式 -->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<!-- 引入组件库 -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>

<style>
    #index-index {
        padding: 10px 10px 10px 290px;
        background-color: darkseagreen;
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

    .el-main {
        background-color: #E9EEF3;
        color: #333;
        text-align: center;
        min-height: 700px;
        height: auto;
        padding: 0;
    }
</style>

<div id="index-index">
    <el-container class="index-main">
        <!--左侧菜单-->
<!--        <el-aside style="width: 100%;">-->
<!--            <el-col>-->
        <div class="nav-left">
                <el-menu style="border: none;"
                        default-active="2"
                        class="el-menu-vertical-demo"
                        @open="handleOpen"
                        @close="handleClose"
                        background-color="#273238"
                        text-color="#fff"
                        active-text-color="#ffd04b">
                    <el-submenu index="1">
                        <template slot="title">
                            <i class="el-icon-location"></i>
                            <span>导航一</span>
                        </template>
                        <el-menu-item-group>
                            <template slot="title">分组一</template>
                            <el-menu-item index="1-1">选项1</el-menu-item>
                            <el-menu-item index="1-2">选项2</el-menu-item>
                        </el-menu-item-group>
                        <el-menu-item-group title="分组2">
                            <el-menu-item index="1-3">选项3</el-menu-item>
                        </el-menu-item-group>
                        <el-submenu index="1-4">
                            <template slot="title">选项4</template>
                            <el-menu-item index="1-4-1">选项1</el-menu-item>
                        </el-submenu>
                    </el-submenu>
                    <el-menu-item index="2">
                        <i class="el-icon-menu"></i>
                        <span slot="title">导航二</span>
                    </el-menu-item>
                    <el-menu-item index="3" disabled>
                        <i class="el-icon-document"></i>
                        <span slot="title">导航三</span>
                    </el-menu-item>
                    <el-menu-item index="4">
                        <i class="el-icon-setting"></i>
                        <span slot="title">导航四</span>
                    </el-menu-item>
                    <el-submenu index="6">
                        <template slot="title">
                            <i class="el-icon-location"></i>
                            <span>导航六</span>
                        </template>
                        <el-menu-item index="6-1">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航六</span>
                        </el-menu-item>
                        <el-menu-item index="6-2">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航7</span>
                        </el-menu-item>
                    </el-submenu>
                    <el-submenu index="5">
                        <template slot="title">
                            <i class="el-icon-location"></i>
                            <span>导航五</span>
                        </template>
                        <el-menu-item index="5-1">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航六</span>
                        </el-menu-item>
                        <el-menu-item index="5-2">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                        <el-menu-item index="5-3">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                        <el-menu-item index="5-4">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                    </el-submenu>
                    <el-submenu index="7">
                        <template slot="title">
                            <i class="el-icon-location"></i>
                            <span>导航五</span>
                        </template>
                        <el-menu-item index="7-1">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航六</span>
                        </el-menu-item>
                        <el-menu-item index="7-2">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                        <el-menu-item index="7-3">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                        <el-menu-item index="7-4">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航5</span>
                        </el-menu-item>
                    </el-submenu>
                </el-menu>
        </div>
<!--            </el-col>-->
<!--        </el-aside>-->
        <!--中间内容-->
        <el-main>
        </el-main>
    </el-container>

    <!-- import Vue before Element -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script>
        var vm = new Vue({
            el: '#index-index',
            data: function() {
                return {
                    visible: false,
                    height: '300px'
                }
            },
            created: function() {
                this.height = '800px'
            },
        })
    </script>

</div>