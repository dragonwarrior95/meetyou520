<?php

/* @var $this yii\web\View */

$this->title = '美化图片';
?>



<style>
    #media-index {
        margin: 0 200px;
        background-color: darkseagreen;
        min-height: 748px;
        height: 100%;
        top: 0;
    }
    .search {
        /*margin-top: 10px;*/
        text-align: center;
    }
</style>


<div id="media-index">
    <div>
        <h3 class="caption" style="margin-bottom: 0; border: 1px solid red;">{{title}}</h3>
<!--        <video class="video" style="width: 100%; border: 1px solid red;"></video>-->
        <iframe id="video" style="width: 100%; border: 1px solid red;" v-bind:src="target_url" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>

    </div>
    <div class="search">
        <span>
            <el-autocomplete style="width: 500px; "
                             class="inline-input"
                             v-model="video_url"
                             :fetch-suggestions="querySearch"
                             placeholder="请输入内容"
                             @select="handleSelect"
            ></el-autocomplete>
        </span>
        <span>
            <el-select v-model="value" placeholder="请选择">
                <el-option
                        v-for="item in api"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                </el-option>
            </el-select>
        </span>
        <span>
            <el-button type="primary" v-on:click="onPlay()">解析播放</el-button>
        </span>
    </div>
</div>


<script>
    var vm = new Vue({
        el: '#media-index',
        data: function() {
            return {
                restaurants: [],
                api: [{
                    label: '默认一',
                    value: 'http://api.baiyug.cn/vip/index.php?url='
                }, {
                    label: '线路二',
                    value: 'http://api.47ks.com/webcloud/?v='
                }, {
                    label: '线路三',
                    value: 'http://api.lilaile.cn/index.php?url='
                }, {
                    label: '线路四',
                    value: 'http://jiexi.071811.cc/jx2.php?url='
                }, {
                    label: '线路五',
                    value: 'http://api.xfsub.com/index.php?url='
                }, {
                    label: '线路六',
                    value: 'http://api.baiyug.cn/vip/?url='
                }, {
                    label: '磁力一',
                    value: 'https://apiv.ga/magnet/'
                }, {
                    label: '磁力二',
                    value: 'http://api.kltvv.top/api/ap.php?u='
                }, {
                    label: '测试一',
                    value: 'http://api.662820.com/xnflv/index.php?url='
                }, {
                    label: '测试二',
                    value: 'yun.baiyug.cn/vip/index.php?url='// http://yun.baiyug.cn/
                }],
                video_url: 'https://www.iqiyi.com/v_19rqzez984.html#curid=1301876200_762c06344bc9d2c37ae896897b67bc58',// 视频链接
                target_url: '',
                value: '',
                title: ''
            }
        },
        created: function() {
            $(".main-container").addClass("nav-hide");
            this.value = 'http://api.baiyug.cn/vip/index.php?url=';
        },
        methods: {
            onPlay() {
                if (this.video_url == "") {
                    alert('请输入链接！！！');
                }
                else {
                    var self = this;
                    this.target_url = this.value + this.video_url;
                    $("video").src = this.target_url;
                    console.log("==================");

                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: '../api/ajax/index.html',
                        data: {
                            titurl: self.video_url
                        },
                        success: function(res){
                            console.log(res.readyState)
                            console.log(res.status)
                            if(res.readyState == 4 && res.status == 200) {
                                self.title = res.responseText; //获取服务器响应数据
                            }
                        },
                        error: function (res) {
                            console.log("error===========");
                            self.title = res.responseText;
                        }
                    })

                    // 1,create ajax核心对象：
                    // var xhr = getxhr();
                    // //2,以post的方式与服务器建立连接；
                    // xhr.open("post", "../api/ajax/index.html", true);
                    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    // //3,发送一个http请求:
                    // xhr.send("titurl=" + self.video_url);
                    // console.log(xhr.readyState);
                    // //获取服务器状态码
                    // xhr.onreadystatechange = function() {
                    //     console.log(xhr.readyState)
                    //     console.log(xhr.status)
                    //     if(xhr.readyState == 4 && xhr.status == 200) {
                    //         self.title = xhr.responseText; //获取服务器响应数据
                    //     }
                    // }
                    //
                    // function getxhr() {
                    //     var xhr = null;
                    //     if(window.XMLHttpRequest) {
                    //         xhr = new XMLHttpRequest();
                    //     } else {
                    //         xhr = new ActiveXObject("Microsoft.XMLHttp");
                    //     }
                    //     return xhr;
                    // }
                }
            },
            querySearch(queryString, cb) {
                var restaurants = this.restaurants;
                var results = queryString ? restaurants.filter(this.createFilter(queryString)) : restaurants;
                // 调用 callback 返回建议列表的数据
                cb(results);
            },
            createFilter(queryString) {
                return (restaurant) => {
                    return (restaurant.value.toLowerCase().indexOf(queryString.toLowerCase()) === 0);
                };
            },
            loadAll() {
                return [
                ];
            },
            handleSelect(item) {
                console.log(item);
            }
        },
        mounted() {
            this.restaurants = this.loadAll();
        }
    });
</script>
