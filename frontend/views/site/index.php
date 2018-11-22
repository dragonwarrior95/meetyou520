<?php

/* @var $this yii\web\View */

$this->title = 'meetyou520.cn';
?>

<style>
    .border_red {
        border: 1px solid red;
    }
    .border_green {
        border: 1px solid green;
    }
    .box-card {
        margin-bottom: 30px;
    }
</style>

<div id="app" class="site-index">
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider">
            <el-card class="serach_banner container box-card" style="background-color: darkseagreen; opacity: 0.8; margin: 118px auto 30px auto;border-radius: 5px;overflow: hidden; width: 980px;height: 360px;">
                <div class="search_banner_main" style="width: 640px; height: 100px; border-radius: 5px;background: #000; opacity: 0.6;position: absolute; left: 0; right: 0; bottom: 65px; margin: auto; text-align: center;">
                    <el-autocomplete placeholder="百度一下你就知道~" style="position: absolute; border-radius: 5px;background-color: #fff; width: 600px; height: 40px; top: 40px;left: 0;right: 0;margin: auto;"
                                     v-model="sql" class="input-with-select"
                                     :fetch-suggestions="querySearch"
                                     :trigger-on-focus="false"
                                     @select="handleSelect"
                                     @keyup.enter.native="sqlSearch"
                                     @keyup.enter="sqlSearch">
                        <el-button slot="append" type="primary" style="width: 100px; height: 40px;" icon="el-icon-search" @click="btnSearch">搜索</el-button>
                    </el-autocomplete>
                </div>
            </el-card>
        </div>

        <div class="container" style="opacity: 0.8;">
<!--            <div>-->
<!--                <span>常用功能</span>-->
<!--                <el-button style="float: right; padding: 3px 0" type="text">更多</el-button>-->
<!--            </div>-->
<!--            <div>-->
<!--                -->
<!--            </div>-->
            <el-card class="box-card">
                <div slot="header" class="clearfix">
                    <span>常用功能</span>
                    <el-button style="float: right; padding: 3px 0" type="text">更多</el-button>
                </div>
                <div style="text-align: center;">
                    <el-card v-for="item in cardType" class="box-card" style="margin: 0 20px 20px 20px;">
                        <div slot="header" class="clearfix" style="height: 30px;">
                            <span>{{item}}</span>
                        </div>
                        <div>
                            具体类型
                        </div>
                    </el-card>
                </div>
            </el-card>
        </div>
    </section>
    <!--================End Slider Area =================-->
</div>
<script>
    function setCookie(c_name, value, expiredays){
        let exdate=new Date();
        exdate.setDate(exdate.getDate() + expiredays);
        document.cookie=c_name+ "=" + value + ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+";path=/;"
    }

    //读取cookie
    function getCookie(name){
        let arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr = document.cookie.match(reg)){
            return (arr[2]);
        }else{
            return null;
        }
    }


    function delCookie(name){
        let exp = new Date();
        exp.setTime(exp.getTime() - 1);
        let cval = getCookie(name);
        if(cval != null){
            document.cookie= name + "="+cval+";expires=" + exp.toGMTString()+";path=/;"
        }
    }

    var app = new Vue({
        el: '#app',
        data: function () {
            return {
                sql: '',
                result: '',
                restaurants: [], // 下拉列表的数据

                cardType: ['视频','直播','购物','常用工具'],
            }
        },
        created: function() {
            this.restaurants = this.getQuerySearch('sql');
        },
        methods: {
            querySearch(queryString, cb) {
                let restaurants=[];
                for (let i = 0, len = this.restaurants.length; i<len; i++) {
                    restaurants.push( {value: this.restaurants[i]} );
                }
                cb(restaurants);// 调用 callback 返回建议列表的数据
            },
            getQuerySearch: function(key){
                let a = getCookie('search_' + key)
                if(a){
                    a = JSON.parse(a)
                    let res = []
                    for(let i = 0; i < a.length; i++){
                        res.push(a[i])
                    }
                    return res
                }else{
                    return []
                }
            },
            // 获取选中项
            handleSelect: function(item) {
                if (item && item.value) {
                    this.sql = item.value;
                    this.sqlSearch();
                }
            },
            btnSearch: function(){
                var _this = this

                // 查询语句
            },
            repeat: function(s, count) {
                return new Array(count + 1).join(s);
            }
        }
    })
</script>
