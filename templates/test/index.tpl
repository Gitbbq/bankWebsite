<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" media="screen" href="./public/css/managementRight.css">
        <script src="./public/js/jquery.js"></script>
        <script src="./public/js/errorMessage.js"></script>
    </head>
    <body>
        <div>
            <div id="top" class="titleStyle">
                <div class="headBackgroud">
                    <div style="margin-left: 15px;">
                        <span id="nowPosition">当前位置：系统参数配置管理</span> > 凭证交叉对比配置规则表
                    </div>
                </div>
            </div>
            <menu class="menuStyle">
                <div class="divFloat menuLine"  >&nbsp;</div>
                <div class="divFloat" style="margin-left: 15px;">
                    <div id="uploadImage" class="menuImageStyle"></div>
                    <span class="menuFont">上传</span>
                    <span id="downloadImage" class="menuImageStyle"></span>
                    <span class="menuFont">下载</span>
                    <span id="editImage" class="menuImageStyle"></span>
                    <span class="menuFont">修改</span>
                    <span id="refreshImage" class="menuImageStyle"></span>
                    <span class="menuFont">刷新</span>
                    <span class="lineStyle divFloat" style="margin-right: 5px;">|</span>
                    <span id="saveImage" style="" class="menuImageStyle"></span>
                    <span class="menuFont">保存</span>
                </div>
            </menu>
            <div id="context" class="contextStyle">
                <div style="background-color:white;float: left; width:100% ">
                    <div style="height: 50px;margin-left:45px; ">
                        <div class="divFloat selectBorder" >
                            <div class="divFloat selectFont">凭证交叉对比配置规则表</div>
                            <div class="listPointer divFloat"></div>
                        </div>
                        <div class="divFloat selectBorder" >
                            <div class="divFloat selectFont">凭证交叉对比配置规则表</div>
                            <div class="listPointer divFloat"></div>
                        </div>
                        <div class="divFloat selectBorder" >
                            <div class="divFloat selectFont">凭证交叉对比配置规则表</div>
                            <div class="listPointer divFloat"></div>
                        </div>
                    </div>
                    <div style="height: 420px; ">
                        <table style="width: 100%; border-collapse:collapse;">
                            <tr class="tableTitle">
                                <th style="width: 10%;" class="borderRight"><input type="checkbox"></th><th style="width: 8%;" class="borderRight">ID</th><th style="width: 38%;">内容</th><th style="width: 15%;"><span class="lineStyle">|</span><span>分类</span></th><th style="width: 12%;"><span class="lineStyle">|</span><span>发布时间</span></th><th style="width: 16%;"><span class="lineStyle">|</span><span>操作</span></th>
                            </tr>
                            <tr>
                                <td class="borderRight"><input type="checkbox"></td>
                                <td class="borderRight">01</td>
                                <td class="noCenter">今日完成了管理系统登录页面设计</td>
                                <td class="leftPadding">完成</td>
                                <td class="leftPadding">2013-12-10</td>
                                <td class="leftPadding iconList">
                                    <div class="managementIconStyle divFloat icon1"></div> 
                                    <div class="managementIconStyle divFloat icon2"></div>
                                    <div class="managementIconStyle divFloat icon3"></div>
                                    <div class="managementIconStyle divFloat icon4"></div>
                                    <div class="managementIconStyle divFloat icon5"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="borderRight"><input type="checkbox"></td>
                                <td class="borderRight">01</td>
                                <td class="noCenter">今日完成了管理系统登录页面设计</td>
                                <td class="leftPadding">完成</td>
                                <td class="leftPadding">2013-12-10</td>
                                <td class="leftPadding iconList">
                                    <div class="managementIconStyle divFloat icon1"></div> 
                                    <div class="managementIconStyle divFloat icon2"></div>
                                    <div class="managementIconStyle divFloat icon3"></div>
                                    <div class="managementIconStyle divFloat icon4"></div>
                                    <div class="managementIconStyle divFloat icon5"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="borderRight"><input type="checkbox"></td>
                                <td class="borderRight">01</td>
                                <td class="noCenter">今日完成了管理系统登录页面设计</td>
                                <td class="leftPadding">完成</td>
                                <td class="leftPadding">2013-12-10</td>
                                <td class="leftPadding iconList">
                                    <div class="managementIconStyle divFloat icon1"></div> 
                                    <div class="managementIconStyle divFloat icon2"></div>
                                    <div class="managementIconStyle divFloat icon3"></div>
                                    <div class="managementIconStyle divFloat icon4"></div>
                                    <div class="managementIconStyle divFloat icon5"></div>
                                </td>
                            </tr>
                        </table>
                        <div id="errorWindow" style="position: absolute; left:330px; ;top:230px; width:350px;height: 152px;display: none; ">
                            <div id="errorMessage">对不起，你没有权限访问！</div>
                            <div id="closeErrorWindow">确定</div>
                        </div>
                        <div id="butGroup">
                        <button id="notPower">没有权限</button>
                        <button id="sysError">系统错误</button>
                        <button id="hiddenBut">隐藏按钮</button>
                        </div>
                    </div>
                    <div id="taskbar">
                        <div class="divFloat" style="width: 80%;">
                            <div class="divFloat taskBotton"  id="firstPageButton"></div>
                            <div class="divFloat taskBotton" id="prevPageButton"></div>
                            <div class="divFloat " id="pageNumText" style=" ">页码<input type="text"style="width: 20px;" value="1">&nbsp;of 6</div>
                            <div class="divFloat taskBotton" id="nextPageButton"></div>
                            <div class="divFloat taskBotton" id="lastPageButton"></div>
                            <div class="divFloat taskBotton" id="taskLine"></div>
                            <div class="divFloat taskBotton" id="taskRefresh"></div>
                        </div>
                        <div  id="taskMessage" style=" ">当前1---5条数据，共五条</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
