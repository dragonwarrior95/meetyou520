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
    .el-header, .el-footer {
        background-color: #B3C0D1;
        color: #333;
        text-align: center;
        line-height: 60px;
    }

    .el-aside {
        background-color: #D3DCE6;
        color: #333;
        text-align: center;
        line-height: 200px;
    }

    .el-main {
        background-color: #E9EEF3;
        color: #333;
        text-align: center;
        line-height: 160px;
    }

    body > .el-container {
        margin-bottom: 40px;
    }

    .el-container:nth-child(5) .el-aside,
    .el-container:nth-child(6) .el-aside {
        line-height: 260px;
    }

    .el-container:nth-child(7) .el-aside {
        line-height: 320px;
    }

    .index-main {
        height: {{height}};
    }
</style>

<div id="index-index">
    <el-container class="index-main">
        <el-aside width="200px">Aside</el-aside>
        <el-main>Main</el-main>
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
                    height: 300px;
                }
            },
            created: function() {
                this.height = 800px;
            },
        })
    </script>

</div>