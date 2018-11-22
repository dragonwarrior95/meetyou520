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
</style>

<div id="app" class="site-index">
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div class="rev_slider">
            <div class="serach_banner" style="background-color: darkseagreen; opacity: 0.8; margin: 118px auto 30px auto;border-radius: 5px;overflow: hidden; width: 980px;height: 360px;">
                <div class="search_banner_main" style="width: 640px; height: 100px; border-radius: 5px;background: #000; opacity: 0.6;position: absolute; left: 0; right: 0; bottom: 65px; margin: auto; text-align: center;">
                    <el-autocomplete placeholder="百度一下你就知道~" style="position: absolute; border-radius: 5px;background-color: #fff; width: 600px; height: 40px; top: 40px;left: 0;right: 0;margin: auto;"
                                     v-model="sql" class="input-with-select"
                                     :fetch-suggestions="querySearch"
                                     :trigger-on-focus="false"
                                     @select="handleSelect"
                                     @keyup.enter.native="sqlSearch"
                                     @keyup.enter="sqlSearch">
                        <el-button slot="append" type="primary" style="width: 100px; height: 40px;" icon="el-icon-search" @click="sqlSearch"></el-button>
                    </el-autocomplete>
                </div>
            </div>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area">
        <div class="container">
<!--            <div class="c_title">-->
<!--                <img src="img/icon/title-icon.png" alt="">-->
<!--                <h6>Discover the features</h6>-->
<!--                <h2>We are young but bold</h2>-->
<!--            </div>-->
<!--            <div class="row feature_inner">-->
<!--                <div class="col-lg-4 col-sm-6">-->
<!--                    <div class="feature_item">-->
<!--                        <div class="f_icon">-->
<!--                            <img src="img/icon/f-icon-1.png" alt="">-->
<!--                        </div>-->
<!--                        <h4>Brand Identity</h4>-->
<!--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>-->
<!--                        <a class="more_btn" href="#">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6">-->
<!--                    <div class="feature_item">-->
<!--                        <div class="f_icon">-->
<!--                            <img src="img/icon/f-icon-2.png" alt="">-->
<!--                        </div>-->
<!--                        <h4>Online Marketing</h4>-->
<!--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>-->
<!--                        <a class="more_btn" href="#">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-6">-->
<!--                    <div class="feature_item">-->
<!--                        <div class="f_icon">-->
<!--                            <img src="img/icon/f-icon-3.png" alt="">-->
<!--                        </div>-->
<!--                        <h4>Social Media</h4>-->
<!--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>-->
<!--                        <a class="more_btn" href="#">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </section>
    <!--================End Feature Area =================-->


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
            sqlSearch: function(){
                var _this = this
                if (this.sql == null || this.sql == '') {
                    alert('查询语句不能为空');
                }
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '/api/debug/sql_search',
                    data: {
                        sql: _this.sql
                    },
                    success: function(res){
                        if(res.status == 'success'){
                            // _this.result = res.data;
                            let Json = JSON.stringify(res.data);
                            _this.result = _this.formatJson(Json);

                            if (-1 === _this.restaurants.indexOf(_this.sql)) {
                                let sql = _this.sql.substr(0, _this.sql.lastIndexOf(';'));
                                _this.restaurants.push(sql);
                                setCookie('search_sql', JSON.stringify(_this.restaurants))// 保存到cookie
                            }
                        }
                        else {
                            _this.result = res.msg;
                        }
                    }
                });
            },
            repeat: function(s, count) {
                return new Array(count + 1).join(s);
            }
        }
    })
</script>
