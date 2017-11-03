import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "---------Protection--------": {},
    "ug-gallery-wrapper": {
        "transition": "all !important",
        "OTransition": "all !important",
        "WebkitTransition": "all",
        "MozTransition": "all !important",
        "MsTransition": "all !important",
        "maxWidth": "none",
        "zIndex": 0,
        "overflow": "hidden",
        "position": "relative",
        "fontFamily": "Arial, Helvetica, sans-serif"
    },
    "ug-gallery-wrapper *": {
        "transition": "all !important",
        "OTransition": "all !important",
        "WebkitTransition": "all",
        "MozTransition": "all !important",
        "MsTransition": "all !important",
        "maxWidth": "none"
    },
    "ug-item-wrapper img": {
        "width": "auto",
        "maxWidth": "none !important",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "boxSizing": "border-box"
    },
    "ug-videoplayer-wrapper video": {
        "height": "100%",
        "width": "100%",
        "visibility": "visible !important"
    },
    "---------General_Styles--------": {},
    "ug-rtl": {
        "direction": "rtl"
    },
    "ug-error-message": {
        "textAlign": "center",
        "paddingTop": 30,
        "paddingBottom": 30,
        "fontSize": 20,
        "color": "#F30D0D"
    },
    "ug-error-message-wrapper": {
        "width": "100%",
        "height": "100%",
        "border": "1px solid black"
    },
    "ug-gallery-wrapper ug-canvas-pie": {
        "position": "absolute",
        "zIndex": 4
    },
    "ug-gallery-wrapper ug-progress-bar": {
        "position": "absolute",
        "overflow": "hidden",
        "zIndex": 4
    },
    "ug-gallery-wrapper ug-progress-bar-inner": {
        "xposition": "absolute"
    },
    "ug-gallery-wrapperug-fullscreen": {
        "height": "100% !important",
        "width": "100% !important",
        "maxWidth": "none !important",
        "maxHeight": "none !important"
    },
    "ug-gallery-wrapperug-fake-fullscreen": {
        "position": "fixed !important",
        "height": "auto !important",
        "width": "auto !important",
        "maxWidth": "none !important",
        "maxHeight": "none !important",
        "marginTop": 0,
        "marginRight": "!important",
        "marginBottom": 0,
        "marginLeft": "!important",
        "paddingTop": 0,
        "paddingRight": "!important",
        "paddingBottom": 0,
        "paddingLeft": "!important",
        "top": "0px !important",
        "left": "0px !important",
        "bottom": "0px !important",
        "right": "0px !important",
        "zIndex": "999999 !important"
    },
    "ug-body-fullscreen": {
        "overflow": "hidden !important",
        "height": "100% !important",
        "width": "100% !important",
        "marginTop": 0,
        "marginRight": "!important",
        "marginBottom": 0,
        "marginLeft": "!important",
        "paddingTop": 0,
        "paddingRight": "!important",
        "paddingBottom": 0,
        "paddingLeft": "!important"
    },
    "ug-gallery-wrapper ug-preloader-trans": {
        "display": "block",
        "height": 32,
        "width": 32,
        "backgroundImage": "url('../images/loader_skype_trans.gif')",
        "backgroundRepeat": "no-repeat"
    },
    "--------------SLIDER------------------": {},
    "ug-gallery-wrapper ug-slider-wrapper": {
        "position": "absolute",
        "overflow": "hidden",
        "zIndex": 1,
        "backgroundColor": "#000000"
    },
    "ug-slider-wrapper ug-slide-wrapper": {
        "position": "absolute"
    },
    "ug-slide-wrapperug-slide-clickable": {
        "cursor": "pointer"
    },
    "ug-slider-wrapper ug-slider-inner": {
        "position": "absolute",
        "zIndex": 0
    },
    "ug-slider-wrapper ug-item-wrapper": {
        "position": "absolute",
        "overflow": "hidden"
    },
    "ug-slider-wrapper": {
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "maxWidth": "none !important",
        "boxSizing": "border-box"
    },
    "ug-slider-wrapper ug-slider-preloader": {
        "position": "absolute",
        "zIndex": 1,
        "border": "2px solid #ffffff",
        "borderRadius": 6,
        "backgroundColor": "#ffffff",
        "backgroundPosition": "center center",
        "backgroundRepeat": "no-repeat"
    },
    "ug-slider-preloaderug-loader1": {
        "width": 30,
        "height": 30,
        "backgroundImage": "url('../images/loader-white1.gif')"
    },
    "ug-slider-preloaderug-loader1ug-loader-black": {
        "backgroundImage": "url('../images/loader-black1.gif')"
    },
    "ug-slider-preloaderug-loader2": {
        "width": 32,
        "height": 32,
        "backgroundImage": "url('../images/loader-white2.gif')"
    },
    "ug-slider-preloaderug-loader2ug-loader-black": {
        "backgroundImage": "url('../images/loader-black2.gif')"
    },
    "ug-slider-preloaderug-loader3": {
        "width": 38,
        "height": 38,
        "backgroundImage": "url('../images/loader-white3.gif')"
    },
    "ug-slider-preloaderug-loader3ug-loader-black": {
        "backgroundImage": "url('../images/loader-black3.gif')"
    },
    "ug-slider-preloaderug-loader4": {
        "width": 32,
        "height": 32,
        "backgroundImage": "url('../images/loader-white4.gif')",
        "backgroundColor": "white"
    },
    "ug-slider-preloaderug-loader4ug-loader-black": {
        "backgroundImage": "url('../images/loader-black4.gif')"
    },
    "ug-slider-preloaderug-loader5": {
        "width": 60,
        "height": 8,
        "backgroundImage": "url('../images/loader-white5.gif')",
        "backgroundColor": "white",
        "border": "none",
        "borderRadius": 0
    },
    "ug-slider-preloaderug-loader5ug-loader-black": {
        "backgroundImage": "url('../images/loader-black5.gif')",
        "border": "2px solid #000000"
    },
    "ug-slider-preloaderug-loader6": {
        "width": 32,
        "height": 32,
        "backgroundImage": "url('../images/loader-white6.gif')"
    },
    "ug-slider-preloaderug-loader6ug-loader-black": {
        "backgroundImage": "url('../images/loader-black6.gif')"
    },
    "ug-slider-preloaderug-loader7": {
        "width": 32,
        "height": 10,
        "backgroundImage": "url('../images/loader-white7.gif')",
        "borderWidth": 3,
        "borderRadius": 3
    },
    "ug-slider-preloaderug-loader7ug-loader-black": {
        "backgroundImage": "url('../images/loader-black7.gif')"
    },
    "ug-slider-preloaderug-loader-black": {
        "borderColor": "#000000",
        "backgroundColor": "#000000"
    },
    "ug-slider-preloaderug-loader-nobg": {
        "backgroundColor": "transparent"
    },
    "ug-slider-wrapper ug-button-videoplay": {
        "position": "absolute",
        "zIndex": 2,
        "cursor": "pointer"
    },
    "ug-slider-wrapper ug-button-videoplayug-type-square": {
        "width": 86,
        "height": 66,
        "backgroundImage": "url('../images/play-button-square.png')",
        "backgroundPosition": "0px -66px"
    },
    "ug-slider-wrapper ug-button-videoplayug-type-squareug-button-hover": {
        "backgroundPosition": "0px 0px"
    },
    "ug-slider-wrapper ug-button-videoplayug-type-round": {
        "width": 76,
        "height": 76,
        "backgroundImage": "url('../images/play-button-round.png')",
        "opacity": 0.9,
        "filter": "alpha(opacity = 90)",
        "transition": "all 0.3s ease 0s !important"
    },
    "ug-slider-wrapper ug-button-videoplayug-type-roundug-button-hover": {
        "opacity": 1,
        "filter": "alpha(opacity = 100)",
        "transition": "all 0.3s ease 0s !important"
    },
    "--------------VIDEO_PLAYER------------------": {},
    "ug-gallery-wrapper ug-videoplayer": {
        "position": "absolute",
        "zIndex": 100,
        "backgroundColor": "#000000",
        "backgroundImage": "url('../images/loader-black1.gif')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "center center",
        "boxSizing": "border-box",
        "MozBoxSizing": "border-box"
    },
    "ug-videoplayer ug-videoplayer-wrapper": {
        "width": "100%",
        "height": "100%",
        "backgroundColor": "#000000",
        "backgroundImage": "url('../images/loader-black1.gif')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "center center"
    },
    "ug-videoplayer ug-videoplayer-button-close": {
        "position": "absolute",
        "height": 64,
        "width": 64,
        "backgroundImage": "url('../images/button-close.png')",
        "cursor": "pointer",
        "zIndex": 1000
    },
    "ug-videoplayer ug-videoplayer-button-close:hover": {
        "backgroundPosition": "0px -64px"
    },
    "--------------THUMBS_STRIP------------------": {},
    "ug-gallery-wrapper ug-thumbs-strip": {
        "position": "absolute",
        "overflow": "hidden",
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "xbackgroundColor": "green",
        "zIndex": 10
    },
    "ug-gallery-wrapper ug-thumbs-grid": {
        "position": "absolute",
        "overflow": "hidden",
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "xbackgroundColor": "green",
        "zIndex": 10
    },
    "ug-thumbs-stripug-dragging": {
        "xcursor": "-moz-grab"
    },
    "ug-gallery-wrapper ug-thumbs-strip-inner": {
        "position": "absolute"
    },
    "ug-gallery-wrapper ug-thumbs-grid-inner": {
        "position": "absolute"
    },
    "ug-thumb-wrapperug-thumb-generated": {
        "position": "absolute",
        "overflow": "hidden",
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "boxSizing": "border-box",
        "MozBoxSizing": "border-box"
    },
    "ug-thumb-wrapperug-thumb-generated ug-thumb-loader": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "center center"
    },
    "ug-thumb-wrapperug-thumb-generated ug-thumb-error": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "center center",
        "backgroundImage": "url('../images/not_loaded.png')"
    },
    "ug-thumb-wrapper ug-thumb-border-overlay": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "zIndex": 4,
        "boxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "borderStyle": "solid"
    },
    "ug-thumb-wrapper ug-thumb-overlay": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "zIndex": 3
    },
    "ug-thumb-wrapperug-thumb-generated ug-thumb-loader-dark": {
        "backgroundImage": "url('../images/loader.gif')"
    },
    "ug-thumb-wrapperug-thumb-generated ug-thumb-loader-bright": {
        "backgroundImage": "url('../images/loader_bright.gif')"
    },
    "ug-thumb-wrapperug-thumb-generated img": {
        "position": "absolute",
        "zIndex": 1,
        "maxWidth": "none !important"
    },
    "ug-thumb-wrapperug-thumb-generated imgug-thumb-image-overlay": {
        "position": "absolute",
        "zIndex": 2,
        "maxWidth": "none !important"
    },
    "imgug-bw-effect": {
        "filter": "url(\"data:image/svg+xml;utf8,<svg xmlns=\\'http://www.w3.org/2000/svg\\'><filter id=\\'grayscale\\'><feColorMatrix type=\\'matrix\\' values=\\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\\'/></filter></svg>#grayscale\")",
        "MozFilter": "grayscale(100%)",
        "WebkitFilter": "grayscale(100%)"
    },
    "imgug-blur-effect": {
        "filter": "progid:DXImageTransform.Microsoft.Blur(PixelRadius='0.8')",
        "WebkitFilter": "blur(0.8px)",
        "MozFilter": "blur(0.8px)",
        "OFilter": "blur(0.8px)",
        "MsFilter": "blur(0.8px)"
    },
    "imgug-sepia-effect": {
        "WebkitFilter": "sepia(100%)",
        "MozFilter": "sepia(100%)",
        "MsFilter": "sepia(100%)",
        "OFilter": "sepia(100%)",
        "filter": "alpha(opacity = 50)",
        "backgroundColor": "#5E2612",
        "zoom": 1
    },
    "--------------BULLETS------------------": {},
    "ug-gallery-wrapper ug-bullets": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "ug-gallery-wrapper ug-bullets ug-bullet": {
        "backgroundRepeat": "no-repeat",
        "cursor": "pointer",
        "display": "block",
        "float": "left",
        "zIndex": 2
    },
    "ug-gallery-wrapper ug-bullets ug-bullet:first-child": {
        "marginLeft": 0
    },
    "--------------TEXT_PANEL------------------": {},
    "ug-gallery-wrapper ug-textpanel": {
        "position": "absolute",
        "overflow": "hidden"
    },
    "ug-slider-wrapper ug-textpanel": {
        "zIndex": 2
    },
    "ug-gallery-wrapper ug-textpanel-bg": {
        "display": "block",
        "position": "absolute",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "backgroundColor": "#000000",
        "opacity": 0.4,
        "filter": "alpha(opacity = 40)",
        "zIndex": 1
    },
    "ug-gallery-wrapper ug-textpanel-title": {
        "display": "block",
        "position": "absolute",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "fontSize": 16,
        "fontWeight": "bold",
        "color": "white",
        "textAlign": "left",
        "zIndex": 2
    },
    "ug-gallery-wrapper ug-textpanel-description": {
        "display": "block",
        "position": "absolute",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "fontSize": 14,
        "color": "white",
        "textAlign": "left",
        "zIndex": 3
    },
    "ug-textpanel-textwrapper": {
        "overflow": "hidden"
    },
    "--------------ZOOM_PANEL------------------": {},
    "ug-slider-wrapper ug-zoompanel": {
        "position": "absolute",
        "top": 200,
        "left": 100
    },
    "ug-zoompanel ug-zoompanel-button": {
        "backgroundRepeat": "no-repeat",
        "cursor": "pointer",
        "display": "block"
    },
    "--------------ZOOM_PANEL_BUTTONS------------------": {},
    "ug-gallery-wrapper ug-arrow-left": {
        "position": "absolute",
        "backgroundRepeat": "no-repeat",
        "display": "block",
        "cursor": "pointer"
    },
    "ug-gallery-wrapper ug-arrow-right": {
        "position": "absolute",
        "backgroundRepeat": "no-repeat",
        "cursor": "pointer"
    },
    "--------------GRID_PANEL_AND_ARROWS------------------": {},
    "ug-gallery-wrapper ug-grid-panel": {
        "position": "absolute",
        "backgroundColor": "#000000",
        "xbackgroundColor": "blue",
        "zIndex": 2
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow": {
        "position": "absolute",
        "backgroundRepeat": "no-repeat",
        "cursor": "pointer",
        "zIndex": 11
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrowug-button-disabled": {
        "cursor": "default"
    },
    "ug-gallery-wrapper ug-panel-handle-tip": {
        "position": "absolute",
        "zIndex": 13,
        "cursor": "pointer"
    },
    "ug-gallery-wrapper ug-overlay-disabled": {
        "position": "absolute",
        "zIndex": 100,
        "width": "100%",
        "height": "100%",
        "backgroundColor": "#000000",
        "opacity": 0.3,
        "filter": "alpha(opacity=30)",
        "backgroundImage": "url('../images/cover-grid.png')"
    },
    "--------------STRIP_PANEL------------------": {},
    "ug-gallery-wrapper ug-strip-panel": {
        "position": "absolute",
        "backgroundColor": "#000000",
        "zIndex": 2
    },
    "ug-strip-panel ug-strip-arrow": {
        "position": "absolute",
        "cursor": "pointer"
    },
    "ug-strip-panel ug-strip-arrowug-button-disabled": {
        "cursor": "default"
    },
    "ug-strip-panel ug-strip-arrow-tip": {
        "position": "absolute"
    },
    "--------------TILES------------------": {},
    "ug-thumb-wrapperug-tile": {
        "display": "block",
        "position": "absolute",
        "boxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "overflow": "hidden",
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0
    },
    "ug-tile ug-tile-cloneswrapper": {
        "position": "absolute",
        "width": 0,
        "height": 0,
        "top": 0,
        "left": 0,
        "overflow": "hidden",
        "opacity": 0,
        "filter": "alpha(opacity = 90)"
    },
    "ug-tiles-transitug-tiles-transition-active ug-thumb-wrapperug-tile": {
        "transition": "left 0.7s ease 0s, top 0.7s ease 0s, width 0.7s ease 0s, height 0.7s ease 0s !important"
    },
    "ug-tiles-transitug-tiles-transition-active ug-thumb-wrapperug-tile ug-trans-enabled": {
        "transition": "left 0.7s ease 0s, top 0.7s ease 0s, width 0.7s ease 0s, height 0.7s ease 0s !important"
    },
    "ug-thumb-wrapperug-tileug-tile-clickable": {
        "cursor": "pointer"
    },
    "ug-thumb-wrapperug-tile ug-image-container": {
        "position": "absolute",
        "overflow": "hidden",
        "zIndex": 1,
        "top": 0,
        "left": 0
    },
    "ug-thumb-wrapperug-tile imgug-thumb-image": {
        "WebkitUserSelect": "none",
        "MozUserSelect": "none",
        "MsUserSelect": "none",
        "maxWidth": "none !important",
        "maxHeight": "none !important",
        "display": "block",
        "border": "none",
        "paddingTop": 0,
        "paddingRight": "!important",
        "paddingBottom": 0,
        "paddingLeft": "!important",
        "marginTop": 0,
        "marginRight": "!important",
        "marginBottom": 0,
        "marginLeft": "!important",
        "width": "auto",
        "height": "auto",
        "position": "absolute"
    },
    "ug-thumb-wrapperug-tile ug-tile-image-overlay": {
        "position": "absolute",
        "overflow": "hidden",
        "zIndex": 2,
        "top": 0,
        "left": 0
    },
    "ug-thumb-wrapperug-tile ug-tile-image-overlay img": {
        "width": "100%",
        "maxWidth": "none !important"
    },
    "ug-tiletype-justified ug-thumb-wrapperug-tile ug-tile-image-overlay img": {
        "height": "100%",
        "maxWidth": "none !important"
    },
    "ug-thumb-wrapperug-tile ug-tile-icon": {
        "position": "absolute",
        "width": 38,
        "height": 38,
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "0 0",
        "xbackgroundColor": "green",
        "zIndex": 6,
        "top": 1,
        "left": 1,
        "cursor": "pointer"
    },
    "ug-thumb-wrapperug-tile ug-tile-iconug-icon-link": {
        "backgroundImage": "url('../images/icon-link32.png')"
    },
    "ug-thumb-wrapperug-tile ug-tile-iconug-icon-zoom": {
        "backgroundImage": "url('../images/icon-zoom32.png')"
    },
    "ug-thumb-wrapperug-tile ug-tile-iconug-icon-play": {
        "backgroundImage": "url('../images/icon-play32.png')"
    },
    "ug-thumb-wrapperug-tile ug-tile-icon:hover": {
        "backgroundPosition": "0 -38px"
    },
    "ug-thumbs-grid ug-tile-image-overlay img": {
        "width": "auto",
        "height": "auto",
        "position": "absolute",
        "maxWidth": "none !important"
    },
    "ug-tile ug-textpanel": {
        "zIndex": 5,
        "cursor": "default"
    },
    "ug-tileug-tile-clickable ug-textpanel": {
        "cursor": "pointer"
    },
    "ug-tile ug-textpanel-title": {
        "fontSize": 14,
        "fontWeight": "bold"
    },
    "--------------CAROUSEL------------------": {},
    "ug-gallery-wrapper ug-carousel-wrapper": {
        "position": "absolute",
        "overflow": "hidden"
    },
    "ug-gallery-wrapper ug-carousel-inner": {
        "position": "absolute"
    },
    "------------------LIGHTBOX---------------------": {},
    "ug-gallery-wrapperug-lightbox": {
        "display": "none",
        "position": "fixed",
        "border": "none",
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "outline": "invert none medium",
        "overflow": "hidden",
        "top": 0,
        "left": 0,
        "width": "100%",
        "height": "100%",
        "maxWidth": "none !important",
        "maxHeight": "none !important",
        "zIndex": 999999
    },
    "ug-lightbox ug-lightbox-top-panel": {
        "position": "absolute",
        "zIndex": 2
    },
    "ug-lightbox ug-lightbox-top-panel-overlay": {
        "width": "100%",
        "height": "100%",
        "position": "absolute",
        "backgroundColor": "#000000",
        "opacity": 0.4,
        "filter": "alpha(opacity=40)"
    },
    "ug-lightbox ug-lightbox-overlay": {
        "zIndex": 1,
        "width": "100%",
        "height": "100%",
        "backgroundColor": "#000000",
        "opacity": 1
    },
    "ug-lightbox ug-slider-wrapper": {
        "zIndex": 1,
        "xbackgroundColor": "green",
        "backgroundColor": "transparent !important"
    },
    "ug-lightbox ug-textpanel": {
        "zIndex": 2
    },
    "ug-lightbox ug-lightbox-arrow-left": {
        "position": "absolute",
        "width": 50,
        "height": 55,
        "backgroundRepeat": "no-repeat",
        "backgroundImage": "url('../images/lightbox-arrow-left.png')",
        "backgroundPosition": "0px 0px",
        "zIndex": 3,
        "cursor": "pointer"
    },
    "ug-lightbox ug-lightbox-arrow-right": {
        "position": "absolute",
        "width": 50,
        "height": 55,
        "backgroundRepeat": "no-repeat",
        "backgroundImage": "url('../images/lightbox-arrow-right.png')",
        "backgroundPosition": "0px 0px",
        "zIndex": 3,
        "cursor": "pointer"
    },
    "ug-lightbox ug-lightbox-button-close": {
        "position": "absolute",
        "width": 36,
        "height": 36,
        "backgroundRepeat": "no-repeat",
        "backgroundImage": "url('../images/lightbox-icon-close.png')",
        "backgroundPosition": "0px 0px",
        "zIndex": 4,
        "cursor": "pointer"
    },
    "ug-lightbox-compact ug-lightbox-button-close": {
        "width": 45,
        "height": 41,
        "backgroundImage": "url('../images/lightbox-icon-close-compact2.png')"
    },
    "ug-lightbox ug-lightbox-arrow-leftug-arrow-hover": {
        "backgroundPosition": "0px -55px"
    },
    "ug-lightbox ug-lightbox-arrow-rightug-arrow-hover": {
        "backgroundPosition": "0px -55px"
    },
    "ug-lightbox ug-lightbox-button-closeug-button-hover": {
        "backgroundPosition": "0px -35px"
    },
    "ug-lightbox-compact ug-lightbox-button-closeug-button-hover": {
        "backgroundPosition": "0px -40px"
    },
    "ug-lightbox ug-lightbox-numbers": {
        "position": "absolute",
        "color": "#e5e5e5",
        "fontSize": 12,
        "top": 14,
        "left": 8,
        "zIndex": 3
    },
    "ug-lightbox-compact ug-lightbox-numbers": {
        "fontSize": 14,
        "paddingRight": 5,
        "paddingTop": 7
    },
    "ug-lightbox ug-textpanel-title": {
        "fontSize": 14,
        "fontWeight": "normal",
        "color": "#e5e5e5"
    },
    "ug-lightbox ug-textpanel-description": {
        "fontSize": 14,
        "fontWeight": "normal",
        "color": "#e5e5e5"
    },
    "ug-lightbox-compact ug-textpanel-title": {
        "color": "#F3F3F3",
        "fontSize": 16
    },
    "ug-lightbox-compact ug-textpanel-description": {
        "color": "#F3F3F3",
        "fontSize": 16
    },
    "------------------LOADMORE_BUTTON---------------------": {},
    "ug-loadmore-wrapper": {
        "marginTop": 20,
        "textAlign": "center"
    },
    "ug-loadmore-wrapper ug-loadmore-button": {
        "display": "inline-block",
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "border": "1px solid #939393",
        "textDecoration": "none",
        "color": "#4F4F4F"
    },
    "ug-loadmore-wrapper ug-loadmore-error": {
        "color": "red"
    },
    "ug-loadmore-wrapper ug-loadmore-button:hover": {
        "backgroundColor": "#F0F0F0",
        "color": "#515151"
    },
    "ug-loadmore-wrapper ug-loadmore-loader": {
        "color": "#515151"
    },
    "------------------CATEGORY_TABS---------------------": {},
    "ug-tabs-wrapper": {
        "marginTop": 0,
        "marginBottom": 20,
        "textAlign": "center"
    },
    "ug-tabs-wrapper aug-tab": {
        "display": "inline-block",
        "cursor": "pointer",
        "textDecoration": "none",
        "color": "#ffffff",
        "paddingLeft": 8,
        "paddingRight": 8,
        "paddingTop": 6,
        "paddingBottom": 6,
        "marginLeft": 5,
        "backgroundColor": "#333333",
        "borderRadius": 3,
        "fontSize": 12,
        "fontWeight": "normal",
        "border": "1px solid #969696"
    },
    "ug-tabs-wrapper aug-tab:hover": {
        "backgroundColor": "#707070 !important"
    },
    "ug-tabs-wrapper aug-tabug-tab-selected": {
        "backgroundColor": "#2077A2 !important",
        "cursor": "default !important"
    },
    "ug-tabs-wrapper aug-tabug-tab-selected:hover": {
        "backgroundColor": "#2077A2 !important",
        "cursor": "default !important"
    },
    "ug-tabs-wrapper aug-tab:first-child": {
        "marginLeft": "0px !important"
    },
    "------------------DEFAULT_SKIN---------------------": {},
    "ug-arrow-leftug-skin-default": {
        "width": 15,
        "height": 30,
        "backgroundImage": "url('../skins/default/slider_arrow_left.png')",
        "backgroundPosition": "0px 0px"
    },
    "ug-arrow-rightug-skin-default": {
        "width": 15,
        "height": 30,
        "backgroundImage": "url('../skins/default/slider_arrow_right.png')",
        "backgroundPosition": "0px 0px"
    },
    "ug-arrow-leftug-skin-defaultug-arrow-hover": {
        "backgroundPosition": "0px -30px"
    },
    "ug-arrow-rightug-skin-defaultug-arrow-hover": {
        "backgroundPosition": "0px -30px"
    },
    "ug-arrow-leftug-skin-defaultug-arrow-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-arrow-rightug-skin-defaultug-arrow-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-bulletsug-skin-default ug-bullet": {
        "width": 15,
        "height": 15,
        "backgroundImage": "url('../skins/default/slider_bullets.png')",
        "backgroundPosition": "top left",
        "marginLeft": 5
    },
    "ug-bulletsug-skin-default ug-bulletug-bullet-active": {
        "backgroundPosition": "bottom left"
    },
    "ug-bulletsug-skin-defaultug-bullets-gray ug-bullet": {
        "backgroundImage": "url('../skins/default/tile_bullets_gray.png')"
    },
    "ug-bulletsug-skin-defaultug-bullets-blue ug-bullet": {
        "backgroundImage": "url('../skins/default/tile_bullets_blue.png')"
    },
    "ug-bulletsug-skin-defaultug-bullets-brown ug-bullet": {
        "backgroundImage": "url('../skins/default/tile_bullets_brown.png')"
    },
    "ug-bulletsug-skin-defaultug-bullets-green ug-bullet": {
        "backgroundImage": "url('../skins/default/tile_bullets_green.png')"
    },
    "ug-bulletsug-skin-defaultug-bullets-red ug-bullet": {
        "backgroundImage": "url('../skins/default/tile_bullets_red.png')"
    },
    "ug-button-tile-navigation": {
        "width": 36,
        "height": 36,
        "backgroundPosition": "top left",
        "cursor": "pointer",
        "float": "left"
    },
    "ug-button-tile-navigationug-button-tile-left": {
        "backgroundImage": "url('../skins/default/tile_button_left.png')"
    },
    "ug-button-tile-navigationug-button-tile-right": {
        "backgroundImage": "url('../skins/default/tile_button_right.png')"
    },
    "ug-button-tile-navigation:hover": {
        "backgroundPosition": "bottom left"
    },
    "ug-button-tile-navigationug-button-disabled": {
        "opacity": 0.6
    },
    "ug-button-tile-navigationug-button-disabled:hover": {
        "backgroundPosition": "top left"
    },
    "ug-button-tile-navigationug-button-tile-play": {
        "backgroundImage": "url('../skins/default/tile_button_play_pause.png')",
        "width": 35
    },
    "ug-button-tile-navigationug-button-tile-playug-pause-icon": {
        "backgroundPosition": "bottom left"
    },
    "ug-button-tile-navigationug-button-tile-play:hover": {
        "backgroundPosition": "top left"
    },
    "ug-button-tile-navigationug-button-tile-playug-pause-icon:hover": {
        "backgroundPosition": "bottom left"
    },
    "ug-button-playug-skin-default": {
        "position": "absolute",
        "backgroundImage": "url('../skins/default/button_playpause.png')",
        "width": 14,
        "height": 17,
        "cursor": "pointer",
        "backgroundPosition": "0px 0px"
    },
    "ug-button-playug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -17px"
    },
    "ug-button-playug-skin-defaultug-stop-mode": {
        "backgroundPosition": "0px -34px"
    },
    "ug-button-playug-skin-defaultug-stop-modeug-button-hover": {
        "backgroundPosition": "0px -51px"
    },
    "ug-button-fullscreenug-skin-default": {
        "position": "absolute",
        "backgroundImage": "url('../skins/default/button_fullscreen.png')",
        "width": 16,
        "height": 16,
        "cursor": "pointer",
        "backgroundPosition": "0px 0px"
    },
    "ug-button-fullscreenug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -16px"
    },
    "ug-button-fullscreenug-skin-defaultug-fullscreenmode": {
        "backgroundPosition": "0px -32px"
    },
    "ug-button-fullscreenug-skin-defaultug-fullscreenmodeug-button-hover": {
        "backgroundPosition": "0px -48px"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-button": {
        "backgroundRepeat": "no-repeat",
        "cursor": "pointer",
        "height": 23,
        "width": 23,
        "marginTop": 5,
        "backgroundPosition": "0px 0px"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-plus": {
        "marginTop": 0,
        "backgroundImage": "url('../skins/default/icon_zoom_plus.png')"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-minus": {
        "backgroundImage": "url('../skins/default/icon_zoom_minus.png')"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-return": {
        "backgroundImage": "url('../skins/default/icon_zoom_back.png')"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-buttonug-button-hover": {
        "backgroundPosition": "0px -23px"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-button-disabled": {
        "backgroundPosition": "0px -46px",
        "cursor": "default"
    },
    "ug-zoompanelug-skin-default ug-zoompanel-buttonug-button-hoverug-zoompanel-button-disabled": {
        "backgroundPosition": "0px -46px",
        "cursor": "default"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-downug-skin-default": {
        "width": 30,
        "height": 15,
        "backgroundPosition": "0px 0px",
        "backgroundImage": "url('../skins/default/arrow_grid_down.png')"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-downug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -15px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-downug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-downug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-upug-skin-default": {
        "width": 30,
        "height": 15,
        "backgroundPosition": "0px 0px",
        "backgroundImage": "url('../skins/default/arrow_grid_up.png')"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-upug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -15px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-upug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-upug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-leftug-skin-default": {
        "width": 40,
        "height": 40,
        "backgroundPosition": "0px -40px",
        "backgroundImage": "url('../skins/default/grid_arrow_left.png')"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-leftug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -0px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-leftug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -80px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-leftug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -80px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-rightug-skin-default": {
        "width": 40,
        "height": 40,
        "backgroundPosition": "0px -40px",
        "backgroundImage": "url('../skins/default/grid_arrow_right.png')"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-rightug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -0px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-rightug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -80px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-rightug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -80px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-left-hortypeug-skin-default": {
        "width": 15,
        "height": 30,
        "backgroundImage": "url('../skins/default/slider_arrow_left.png')",
        "backgroundPosition": "0px 0px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-left-hortypeug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-left-hortypeug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-left-hortypeug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-right-hortypeug-skin-default": {
        "width": 15,
        "height": 30,
        "backgroundImage": "url('../skins/default/slider_arrow_right.png')",
        "backgroundPosition": "0px 0px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-right-hortypeug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px -30px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-right-hortypeug-skin-defaultug-button-hoverug-button-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-gallery-wrapper ug-grid-panel grid-arrow-right-hortypeug-skin-defaultug-button-disabled": {
        "backgroundPosition": "0px -60px"
    },
    "ug-strip-panel ug-strip-arrow-leftug-skin-default": {
        "width": 25,
        "height": 50
    },
    "ug-strip-panel ug-strip-arrow-rightug-skin-default": {
        "width": 25,
        "height": 50
    },
    "ug-strip-panel ug-strip-arrow-leftug-skin-default ug-strip-arrow-tip": {
        "backgroundPosition": "0px 0px",
        "backgroundRepeat": "no-repeat",
        "width": 4,
        "height": 7,
        "backgroundImage": "url('../skins/default/arrows_strip_left.png')"
    },
    "ug-strip-panel ug-strip-arrow-rightug-skin-default ug-strip-arrow-tip": {
        "backgroundPosition": "0px 0px",
        "backgroundRepeat": "no-repeat",
        "width": 4,
        "height": 7,
        "backgroundImage": "url('../skins/default/arrows_strip_right.png')"
    },
    "ug-strip-panel ug-strip-arrow-leftug-skin-defaultug-button-hover ug-strip-arrow-tip": {
        "backgroundPosition": "0px -7px"
    },
    "ug-strip-panel ug-strip-arrow-rightug-skin-defaultug-button-hover ug-strip-arrow-tip": {
        "backgroundPosition": "0px -7px"
    },
    "ug-strip-panel ug-strip-arrow-upug-skin-default": {
        "height": 25,
        "width": 50
    },
    "ug-strip-panel ug-strip-arrow-downug-skin-default": {
        "height": 25,
        "width": 50
    },
    "ug-strip-panel ug-strip-arrow-upug-skin-default ug-strip-arrow-tip": {
        "backgroundPosition": "0px 0px",
        "backgroundRepeat": "no-repeat",
        "width": 7,
        "height": 4,
        "backgroundImage": "url('../skins/default/arrows_strip_up.png')"
    },
    "ug-strip-panel ug-strip-arrow-downug-skin-default ug-strip-arrow-tip": {
        "backgroundPosition": "0px 0px",
        "backgroundRepeat": "no-repeat",
        "width": 7,
        "height": 4,
        "backgroundImage": "url('../skins/default/arrows_strip_down.png')"
    },
    "ug-strip-panel ug-strip-arrow-upug-skin-defaultug-button-hover ug-strip-arrow-tip": {
        "backgroundPosition": "-7px 0px"
    },
    "ug-strip-panel ug-strip-arrow-downug-skin-defaultug-button-hover ug-strip-arrow-tip": {
        "backgroundPosition": "-7px 0px"
    },
    "ug-strip-panel ug-strip-arrowug-skin-defaultug-button-disabled ug-strip-arrow-tip": {
        "backgroundPosition": "0px 0px",
        "opacity": 0.5,
        "filter": "alpha(opacity = 50)"
    },
    "ug-gallery-wrapper ug-handle-tip-leftug-skin-default": {
        "width": 22,
        "height": 36,
        "backgroundImage": "url('../skins/default/grid_handle_black_left.png')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "0px -36px"
    },
    "ug-gallery-wrapper ug-handle-tip-rightug-skin-default": {
        "width": 22,
        "height": 36,
        "backgroundImage": "url('../skins/default/grid_handle_black_right.png')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "0px -36px"
    },
    "ug-gallery-wrapper ug-handle-tip-leftug-button-hoverug-skin-default": {
        "backgroundPosition": "0px -0px"
    },
    "ug-gallery-wrapper ug-handle-tip-rightug-button-hoverug-skin-default": {
        "backgroundPosition": "0px -0px"
    },
    "ug-gallery-wrapper ug-handle-tip-leftug-skin-defaultug-button-closed": {
        "backgroundPosition": "0px -108px"
    },
    "ug-gallery-wrapper ug-handle-tip-rightug-skin-defaultug-button-closed": {
        "backgroundPosition": "0px -108px"
    },
    "ug-gallery-wrapper ug-handle-tip-leftug-skin-defaultug-button-closedug-button-hover": {
        "backgroundPosition": "0px -72px"
    },
    "ug-gallery-wrapper ug-handle-tip-rightug-skin-defaultug-button-closedug-button-hover": {
        "backgroundPosition": "0px -72px"
    },
    "ug-gallery-wrapper ug-handle-tip-topug-skin-default": {
        "width": 36,
        "height": 22,
        "backgroundImage": "url('../skins/default/grid_handle_black_top.png')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "-36px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-bottomug-skin-default": {
        "width": 36,
        "height": 22,
        "backgroundImage": "url('../skins/default/grid_handle_black_bottom.png')",
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "-36px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-topug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-bottomug-skin-defaultug-button-hover": {
        "backgroundPosition": "0px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-topug-skin-defaultug-button-closed": {
        "backgroundPosition": "-108px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-bottomug-skin-defaultug-button-closed": {
        "backgroundPosition": "-108px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-topug-skin-defaultug-button-closedug-button-hover": {
        "backgroundPosition": "-72px 0px"
    },
    "ug-gallery-wrapper ug-handle-tip-bottomug-skin-defaultug-button-closedug-button-hover": {
        "backgroundPosition": "-72px 0px"
    }
});