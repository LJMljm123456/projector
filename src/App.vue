<template>
    <div id="app">
        <Layout>
            <Header :style="{width: '100%',height: '35px',background: '#ebf0f0'}">
                <Row>
                    <Col span="5" offset="5" style="line-height: 35px; font-size: medium">
                        <Breadcrumb separator=">">
                            <BreadcrumbItem to="/">首页</BreadcrumbItem>
                            <BreadcrumbItem to="/components/breadcrumb">主页</BreadcrumbItem>
                        </Breadcrumb>
                    </Col>

                    <Col span="1" offset="7" style="line-height: 35px; font-size: medium"><Icon type="ios-contact" style="font-size: 20px" /><a href="http://localhost:63342/%E6%96%B0%E5%BB%BA%E6%96%87%E4%BB%B6%E5%A4%B9/login/view/login/index.html">登录</a></Col>
                    <Col span="1" style="line-height: 35px; font-size: medium"><Icon type="md-finger-print" style="font-size: 20px"/><a href="http://localhost:63342/%E6%96%B0%E5%BB%BA%E6%96%87%E4%BB%B6%E5%A4%B9/%E6%B3%A8%E5%86%8C/register/registers.html?_ijt=1ng0h7uruc8aehfesl8fl9q43u">注册</a></Col>
                    <Col span="1"  style="line-height: 35px; font-size: medium"><Dropdown>
                        <a href="javascript:void(0)" style="color: black">
                            中文
                            <Icon type="ios-arrow-down"></Icon>
                        </a>
                        <DropdownMenu slot="list">
                            <DropdownItem >中文</DropdownItem>
                            <DropdownItem>English</DropdownItem>

                        </DropdownMenu>
                    </Dropdown></Col>
                </Row>

            </Header>
            <Content style="opacity: 1">
                <Row style="opacity: 1">
                    <Col span="24" class-name="hengfu">
                        <Row>
                            <Col span="5" offset="5" class-name="logo">
                               <img src="../public/images/logo.png">
                            </Col>
                            <Col span="5" offset="4" class-name="search">
                                <Input search enter-button placeholder="Enter something..." size="large" style="margin-top: 12%"/>
                            </Col>
                        </Row>

                    </Col>
                </Row>

                <Row class-name="main-nav" style="height: 35px">
                    <Col span="3" offset="5" class-name="nav nav-first">首页</Col>
                    <Col span="3" offset="0" class-name="nav">区域资源赋能场</Col>
                    <Col span="3" offset="0" class-name="nav">中国便车快通道</Col>
                    <Col span="3" offset="0" class-name="nav">国家元首议程表</Col>
                    <Col span="3" offset="0" class-name="nav">更多资料</Col>
                </Row>
                <Row>
                    <Col span="8" offset="5" class-name="lunbotu">
                        <Carousel autoplay v-model="value2" loop arrow="always">
                            <CarouselItem>
                                <div class="demo-carousel"><img src="../public/images/lunbotu-1.jpg" class="lunbo-img">
                                </div>
                            </CarouselItem>
                            <CarouselItem>
                                <div class="demo-carousel"><img src="../public/images/lunbotu-2.jpg" class="lunbo-img">
                                </div>
                            </CarouselItem>
                            <CarouselItem>
                                <div class="demo-carousel"><img src="../public/images/lunbotu-3.jpg" class="lunbo-img">
                                </div>
                            </CarouselItem>
                            <CarouselItem>
                                <div class="demo-carousel"><img src="../public/images/lunbotu-4.jpg" class="lunbo-img">
                                </div>
                            </CarouselItem>
                        </Carousel>
                    </Col>
                    <Col span="6" style="margin-top: 10px">
                        <Tabs type="card">
                            <TabPane label="新闻">新闻</TabPane>
                            <TabPane label="推荐">推荐</TabPane>
                        </Tabs>

                    </Col>

                </Row>
                <Row>
                    <Col span="15" offset="5" style="background-color: #ddddd9;height: 2px"></Col>
                </Row>
                <Row style="margin-top: 10px">
                    <Col span="3" offset="5" class="main-mod-1" style="margin-left:22%">
                        <div style="font-size: 18px;margin-top: 35%;margin-left: 22%;font-weight: bold"><a href="">中介推荐</a></div>
                        <div style="font-size: 15px;margin-left: 10%">基于快速中介推荐</div>
                    </Col>
                    <Col span="3" class="main-mod-2">
                        <div style="font-size: 18px;margin-top: 35%;margin-left: 22%;font-weight: bold">专题报告</div>
                        <div style="font-size: 15px;margin-left: 10%">根据专题写的报告</div>
                    </Col>
                    <Col span="3" class="main-mod-3">
                        <div style="font-size: 18px;margin-top: 35%;margin-left: 13%;font-weight: bold">市场服务类型</div>
                        <div style="font-size: 15px;margin-left: 10%">市场服务类型介绍</div>
                    </Col>
                    <Col span="3" class="main-mod-4">
                        <div style="font-size: 18px;margin-top: 35%;margin-left: 22%;font-weight: bold">专业领域</div>
                        <div style="font-size: 15px;margin-left: 10%">专业领域信息展示</div>
                    </Col>
                    <Col span="3" class="main-mod-5">
                        <div style="font-size: 18px;margin-top: 35%;margin-left: 22%;font-weight: bold">合作互赢</div>
                        <div style="font-size: 15px;margin-left: 15%">让我们合作互赢</div>
                    </Col>
                </Row>
                <Row>
                    <Col span="15" offset="5" style="background-color: #eaeae6;height: 2px;margin-top: 10px"></Col>
                </Row>
                <Row type="flex" justify="center">
                    <Col span="3" style="height: 50px;line-height: 50px;font-size: 30px;text-align: center">热门服务</Col>
                </Row>
                <Row style="margin-top: 10px">
                    <Col span="3" offset="5" class="main-mod-1-1" style="margin-left:25%">
                        <Card style="border-radius: 25px">
                            <div style="text-align:center">
                                <img src="../public/images/111.png" width="60%" height="60%">
                                <h3>区域资源赋能场</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class="main-mod-1-2">
                        <Card style="border-radius: 25px">
                            <div style="text-align:center">
                                <img src="../public/images/112.png" width="60%" height="60%">
                                <h3>中国便车快通道</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class="main-mod-1-3">
                        <Card style="border-radius: 25px">
                            <div style="text-align:center">
                                <img src="../public/images/113.png" width="60%" height="60%">
                                <h3>国家元首议程表</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class="main-mod-1-4">
                        <Card style="border-radius: 25px">
                            <div style="text-align:center">
                                <img src="../public/images/114.png" width="60%" height="60%">
                                <h3>资料</h3>
                            </div>
                        </Card>
                    </Col>
                </Row>

                <Row style="margin-top: 10px">
                    <Col span="15" offset="5" style="background-color: #ddddd9;height: 3px"></Col>
                </Row>

                <Row style="margin-top: 10px">
                    <Col span="3" class-name="nav-2" offset="5">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/模块.png" width="60%" height="60%">
                                <h3>模块选择</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/地区.png" width="60%" height="60%">
                                <h3>地图展示</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/招商管理.png" width="60%" height="60%">
                                <h3>招商引资</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/企业 产业.png" width="60%" height="60%">
                                <h3>产业类型</h3>
                            </div>
                        </Card>
                    </Col>
                </Row>
                <Row style="margin-top: 10px">
                    <Col span="3" class-name="nav-2" offset="5">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/投资.png" width="60%" height="60%">
                                <h3>投资服务</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/优惠.png" width="60%" height="60%">
                                <h3>政策优惠</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/地区.png" width="60%" height="60%">
                                <h3>地区详情</h3>
                            </div>
                        </Card>
                    </Col>
                    <Col span="3" class-name="nav-2">
                        <Card >
                            <div style="text-align:center">
                                <img src="../public/images/导航.png" width="60%" height="60%">
                                <h3>导航栏目</h3>
                            </div>
                        </Card>
                    </Col>
                </Row>

                <Row style="margin-top: 20px">
                    <Col span="3" class-name="nav-3" offset="5" style="text-align: center">
                        <Icon type="ios-chatbubbles" style="font-size: 32px"/>
                        我要咨询

                    </Col>
                    <Col span="3" class-name="nav-3" style="text-align: center">
                        <Icon type="md-home" style="font-size: 32px"/>
                        我要求助

                    </Col>
                    <Col span="3" class-name="nav-3" style="text-align: center">
                        <Icon type="md-key" style="font-size: 32px"/>
                        我要建议

                    </Col>
                    <Col span="3" class-name="nav-3" style="text-align: center">
                        <Icon type="ios-ribbon"  style="font-size: 32px"/>
                        我要表扬

                    </Col>
                </Row>

            </Content>
            <Footer style="margin-top: 50px;text-align: center;background-color: #d9d9d9" >
                <Row>
                    <Col span="4" offset="5"><img src="../public/images/图像 8.png"></Col>
                    <Col span="10">
                        <div>关于我们|法律声明|网站动态|便民电话|网站地图</div>
                        <div>主办：成都市人民政府承办：成都市政务服务管理和网络理政办公室维护：成都市经济信息中心 电话：028-61887231</div>
                        <div>©2001-2019 网站标识码5101000028 蜀ICP备05003365号川公网安备 51019002000387 号</div>

                    </Col>
                </Row>


            </Footer>
        </Layout>


    </div>
</template>

<script>


    export default {
        name: 'app',
        components: {}

    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;


    }




    .hengfu {
        height: 100px;
        background-color: white;
    }

    .logo {
        margin-top: 10px;
        height: 80px;
        width: 100%;
        background-color: rgba(87, 86, 93, 0.6);

    }

    .search {
        line-height: 100px;
        margin-top: 10px;
        height: 80px;
        width: 100%;


    }

    .main-nav {
        background-color: #dc3a3a;
    }

    .nav {
        border-right: 1px #ed9898 solid;
        line-height: 35px;
        display: inline-block;
        color: #fff;
        font-size: 15px;
        font-family: "微软雅黑";
        font-weight: bold;
        padding: 0 40px;
        text-align: center;
        height: 35px;
    }

    .nav-first {
        border-left: 1px #ed9898 solid;
    }

    .nav:hover {
        background-color: #9d3030;
    }

    .lunbotu {
        border: 10px #fff solid;
    }

    .lunbo-img {
        display: block;
        max-width: 100%;
        height: auto;
    }
    .main-mod-nav{
        background-color: #a6adb4;
        height: 200px;
    }
    .main-mod-1-1{
        border-radius: 50px;
        margin-left: 20px;

    }
    .main-mod-1-2{
        margin-left: 20px;

    }
    .main-mod-1-3{
        margin-left: 20px;

    }
    .main-mod-1-4{
        margin-left: 20px;

    }
    .main-mod-1{
        background: url("../public/images/11.png" ) no-repeat;
        height: 140px;

    }
    .main-mod-2{
        background: url("../public/images/12.png" ) no-repeat;
        height: 140px;

    }
    .main-mod-3{
        background: url("../public/images/13.png" ) no-repeat;
        height: 140px;

    }
    .main-mod-4{
        background: url("../public/images/14.png" ) no-repeat;
        height: 140px;

    }
    .main-mod-5{
        background: url("../public/images/15.png" ) no-repeat;
        height: 140px;

    }
    .nav-2{
        margin-left: 4%;
        box-shadow: 10px 10px 5px #888888
    }
    .nav-3{
        color: white;
        font-size: 20px;
        line-height: 50px;
        margin-left: 4%;
        background-color: #dc3a3a;
        height: 50px;
        border-radius: 25px;
    }
    .nav-3:hover{
        background-color: #a93838;

    }

</style>
