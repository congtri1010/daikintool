<!DOCTYPE html>
<html lang="en"></html>
<head>
    <title>Daikin Design Tool By Pure Electric</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
    
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
</head>

<body>
    <div class="wrapper">
        <div class="b-page__header">
            <header class="b-header">
                <div class="b-header__left">
                    <div class="b-header__item b-header__undo" id="" title="UNDO" mode="undo" onclick="undo()"  data-modes="editor noauth">
                        <span class="b-icon b-header__icon">
                            <img src="icon/undo.png" height="100%" alt="">
                        </span>
                    </div>
                    <!-- is-disabled -->
                    <div class="b-header__item b-header__redo" id="" title="REDO" mode="redo" onclick="redo()" data-modes="editor noauth">
                        <span class="b-icon b-header__icon">
                            <img src="icon/redo.png" height="100%" alt="">
                        </span>
                    </div>
                    <div class="b-header__item b-header__clear" id="clear" title="CLEAR" mode="clear" onclick="" data-modes="editor noauth">
                        <span class="b-icon b-header__icon">
                            <img src="icon/clear.png" height="100%" alt="">
                        </span>
                    </div>
                </div>
                <div class="b-header__center">
                    <div class="b-header__switch">
                        <div class="b-switch js-switch">
                            <div class="b-switch__item js-switch-item" mode="view3d">
                                <img src="icon/logoPure.png" height="100%" alt=""><span style="margin-left: 10px">Pure
                                    Electric</span>
                            </div>
                            <div class="b-switch__item js-switch-item" mode="view3d">
                                <img src="icon/Daikin_logo_white_background.png" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-header__right">
                    <div class="b-header__item has-dropdown dropdown is-hover-open is-default is-top-right"  
                        data-modes="editor">
                        <span class="b-icon b-header__icon">
                            <img src="icon/download.png" height="100%" alt="">
                        </span>
                        <div class="dropdown__content">
                            <div class="dropdown__menu">
                                <a class="dropdown__item" id="save" mode="print">Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="b-page__editor" id="editor">
            <div class="workArea" id="wrapCanvas" style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <canvas id="c"></canvas>
            </div>
        </div>
        <div id="editorControls"  >
            <div class="pane-point">
                <button class="pane-point__button pane-point__button--enhance" mode="zoomIn" id="zoomIn">
                    <span class="b-icon is-24">
                        <img src="icon/plus.png" alt="">
                    </span>
                </button>
                <button class="pane-point__button pane-point__button--reduce" mode="zoomOut" id="zoomOut">
                    <span class="b-icon is-24">
                        <img src="icon/minus.png" alt="">
                    </span>
                </button>
            </div>
            <div class="pane-nav js-pane-nav" id="leftPanel"   data-modes="editor|noauth">
                <div class="pane-nav__item js-pane-nav-item is-selected" data-href="floor-plan-option" content="1" data-id="1"
                    data-type="floor-plan-option">
                    <span class="pane-nav__item-icon">
                        <img src="icon/floor-plan.png" alt="">
                    </span>
                </div>
                <div class="pane-nav__item js-pane-nav-item" data-href="daikin-option" content="4" data-id="0"
                    data-type="daikin-option">
                    <span class="pane-nav__item-icon">
                        <img src="icon/air.png" alt="">
                    </span>
                </div>                
            </div>
            <div id="floor-plan-option" class="pane-affix pane-affix--catalog js-pane-affix is-active" data-target="floor-plan">
                <div class="pane-affix__container">
                    <div class="pane-affix__header">
                        <div class="pane-affix__header-title js-pane-affix-link" data-href="construction">
                            <div class="pane-affix__header-title-label">Floor Plan</div>
                        </div>
                        <div class="pane-affix__header-close js-pane-affix-close"><span class="b-icon is-24">
                            <img style="width: 25px;" src="icon/close.png" alt="">
                        </div>
                    </div>
                    <div class="pane-affix__content pane-affix__content--type-catalog">
                        <div class="pane-affix__catalog" id="roomsItems">
                            <div class="pane-affix__catalog-column is-2">
                                <a class="pane-affix__catalog-item item-texture is-shrink" id="freeRoomBtn">
                                    <div class="item-texture__image">
                                        <img src="../images/Draft_layout_daikin_US7_x6.png" alt="" onclick="setBgImage(this)">                                        
                                    </div>
                                </a>
                                <span><strong>Floor Plan</strong></span>
                            </div>
                            <div class="pane-affix__catalog-column is-2">
                                <a class="pane-affix__catalog-item item-texture is-shrink" data-link="room1">
                                    <div class="item-texture__image">
                                        <img src="../images/Draft_layout_daikin_US7_x6-90.png" alt="" onclick="setBgImage(this)">
                                        <!--  -->
                                    </div>
                                </a>
                                <span><strong>Floor Plan 90 Degree</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="daikin-option" class="pane-affix pane-affix--catalog js-pane-affix" data-target="daikin">
                <div class="pane-affix__container">
                    <div class="pane-affix__header">
                        <div class="pane-affix__header-title js-pane-affix-link" data-href="construction">
                            <div class="pane-affix__header-title-label">Daikin Type</div>
                        </div>
                        <div class="pane-affix__header-close js-pane-affix-close"><span class="b-icon is-24">
                                <img style="width: 25px;" src="icon/close.png" alt="">
                        </div>
                    </div>
                    <div class="pane-affix__content pane-affix__content--type-catalog">
                        <div class="pane-affix__catalog" id="roomsItems">
                            <div class="pane-affix__catalog-column is-2">
                                <a class="pane-affix__catalog-item item-texture is-shrink" id="freeRoomBtn">
                                    <div class="item-texture__image">
                                        <img src="icon/daikin-us7.png" id="daikin-us7">
                                        <!--  onclick="daikin_Us7.addImg(this)"-->
                                    </div>
                                </a>
                                <span><strong>Daikin US7 (2X)</strong></span>
                            </div>
                            <div class="pane-affix__catalog-column is-2">
                                <a class="pane-affix__catalog-item item-texture is-shrink" data-link="room1">
                                    <div class="item-texture__image">
                                        <img src="icon/daikin-nexura.png" id="daikin-nexura">
                                        <!--  onclick="daikin_Nexura.addImg(this)" -->
                                    </div>
                                </a>
                                <span><strong>Daikin Nexura (2X)</strong></span>
                            </div>
                            <div class="pane-affix__catalog-column is-2">
                                <a class="pane-affix__catalog-item item-texture is-shrink" data-link="room1">
                                    <div class="item-texture__image">
                                        <img src="icon/daikin-temp.png" id="daikin-temp">
                                        <!-- onclick="daikin_Temp.addImg(this)" -->
                                    </div>
                                </a>
                                <span><strong>Daikin Temp (2X)</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <script src="js/jquery-3-5-1.js"></script>    
    <script src="js/FileSaver.js" type="text/javascript"></script>
    <script src="js/fabric.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>