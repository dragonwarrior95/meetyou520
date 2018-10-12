<?php

/* @var $this yii\web\View */

$this->title = '媒体影音';
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
    #video {
        width: 100%;
        height: 100%;
        min-height: 768px;
    }
</style>


<div id="media-index">
    <div>
        <h3 class="caption" style="margin-bottom: 0; border: 1px solid red;">{{title}}</h3>
<!--        <video class="video" style="width: 100%; border: 1px solid red;"></video>-->
        <iframe id="video" v-bind:src="target_url" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>

    </div>
    <div class="search">
        <span>
            <el-autocomplete style="width: 500px; "
                             clearable
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
                video_url: '',// 视频链接
                target_url: '',
                value: '',
                title: ''
            }
        },
        created: function() {
            this.value = 'http://api.baiyug.cn/vip/index.php?url=';
            this.video_url = 'https://www.iqiyi.com/v_19rqzez984.html#curid=1301876200_762c06344bc9d2c37ae896897b67bc58';
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
                            video_url: self.video_url
                        },
                        success: function(res){
                            console.log(res.readyState)
                            console.log(res.status)
                            if(res.readyState == 4 && res.status == 200) {
                                self.title = res.responseText; //获取服务器响应数据
                            }
                        },
                        onreadystatechange: function(res) {
                            console.log(res.readyState)
                            console.log(res.status)
                            if(res.readyState == 4 && res.status == 200) {
                                self.title = res.responseText; //获取服务器响应数据
                            }
                        },
                        error: function (res) {
                            console.log("error===========");
                            console.log(res.readyState)
                            console.log(res.status)
                            if(res.readyState == 4 && res.status == 200) {
                                self.title = res.responseText; //获取服务器响应数据
                                $("title").html(self.title);
                                self.restaurants.push( { 'value': self.video_url } );
                            }
                        }
                    })
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
            // this.restaurants = this.loadAll();
        }
    });
</script>
