document.addEventListener("DOMContentLoaded",function(e){var t={min:0,max:200,donut:!0,gaugeWidthScale:.6,counter:!0,hideInnerShadow:!0,valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#fbb624"]},o=(new JustGage({id:"gg1",value:125,title:"javascript call",defaults:t}),new JustGage({id:"gg2",title:"data-attributes",defaults:t}),new JustGage({id:"Counter",value:40960,min:1024,max:1e6,gaugeWidthScale:.6,counter:!0,formatNumber:!0,valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#dc3545"]}));document.getElementById("Counter_refresh").addEventListener("click",function(){o.refresh(getRandomInt(1024,1e6))});var n=new JustGage({id:"Animation_Events",value:45,min:0,max:100,symbol:"%",pointer:!0,pointerOptions:{toplength:-15,bottomlength:10,bottomwidth:12,color:"#8e8e93",stroke:"#ffffff",stroke_width:3,stroke_linecap:"round"},valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#7da747"],gaugeWidthScale:.6,counter:!0,onAnimationEnd:function(){console.log("animation ended");var e=document.getElementById("log");e.innerHTML=e.innerHTML+"Animation just ended.<br/>"}});document.getElementById("Animation_Events_refresh").addEventListener("click",function(){n.refresh(getRandomInt(0,100))}),Counter_2=new JustGage({id:"Counter_2",value:72,min:0,max:100,donut:!0,gaugeWidthScale:.6,counter:!0,hideInnerShadow:!0,valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#76b8de"]}),document.getElementById("Counter_2_refresh").addEventListener("click",function(){Counter_2.refresh(getRandomInt(0,100))});var a=new JustGage({id:"Custom_wether",value:50,min:0,max:100,title:"Target",label:"temperature",pointer:!0,pointerOptions:{color:"#8e8e93"},textRenderer:function(e){return e<50?"Cold":50<e?"Hot":50===e?"OK":void 0},valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#7043c1"],onAnimationEnd:function(){console.log("f: onAnimationEnd()")}});document.getElementById("Custom_wether_refresh").addEventListener("click",function(){return a.refresh(getRandomInt(0,100)),!1}),font_option=new JustGage({id:"font_option",title:"Font Options",value:72,min:0,minTxt:"min",max:100,maxTxt:"max",gaugeWidthScale:.6,counter:!0,titleFontColor:"red",titleFontFamily:"Georgia",titlePosition:"below",valueFontColor:"blue",valueFontFamily:"Georgia",valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#c1437d"]}),document.getElementById("font_option_refresh").addEventListener("click",function(){font_option.refresh(getRandomInt(0,100))});var l={label:"label",value:65,min:0,max:100,decimals:0,gaugeWidthScale:.6,pointer:!0,pointerOptions:{toplength:10,bottomlength:10,bottomwidth:2,color:"#8e8e93"},valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#1ecab8"],counter:!0},r={label:"label",value:35,min:0,max:100,decimals:0,gaugeWidthScale:.6,pointer:!0,pointerOptions:{toplength:5,bottomlength:15,bottomwidth:2,color:"#8e8e93"},valueFontColor:["#a8a8b1"],gaugeColor:["#363b58"],levelColors:["#dc3545"],counter:!0,donut:!0};new JustGage({id:"jg1",defaults:l}),new JustGage({id:"jg2",defaults:l}),new JustGage({id:"jg3",defaults:l}),new JustGage({id:"jg4",defaults:r}),new JustGage({id:"jg5",defaults:r}),new JustGage({id:"jg6",defaults:r})});