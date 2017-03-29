
<?php
include 'header.php';
?>
</head>
<?php
include 'navbar.php';
?>

<body>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
    <div class="container">
                    <div class=row">
                             <div class="col-sm-4">
                                    <div class="bio thumbnail">
                                        <img src="images/events/7.jpg" class="img-responsive" alt="photo de l'artiste" style="width:100%; height:100%">
                                    </div>
                                      <div class="web bio thumbnail"> <a href ="#" target ="_blank"><h3>Site de l'artiste</h3></a>
                                      </div>
                                     <div class="videoWrapper hidden-xs"><iframe src="https://www.youtube.com/embed/nOCmdZNgbQA" frameborder="0" allowfullscreen></iframe>
                                     </div>

                                     <div class="col-xs-offset-2">
                                        <div> <a href="https://twitter.com/search?q=aboulouafa&src=typd&lang=fr" target="_blank" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-twitter"></i>
                                        </a>
                                        </div>
                                        <div>
                                             <a href="https://www.facebook.com/meryemaboulouafa/" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                                <i class="icon-facebook"></i>
                                            </a>
                                        </div>
                                        <div>
                                             <a href="https://soundcloud.com/meryemaboulouafa" target="_blank" class="social-icon si-dark si-colored si-soundcloud nobottommargin" style="margin-right: 10px;">
                                                 <i class="icon-soundcloud"></i>
                                             </a>
                                        </div>
                                     </div>
                                     <div class="bio thumbnail"><h3>Bloc Soundcloud</h3>

                                     </div>
                             </div>

                                <div class="col-sm-8">
                                        <h1>Meryem Aboulouafa</h1>
                                        <div class="bio thumbnail"><h3>Biographie</h3>
                                        <p>Auteure, compositeur et interprète vivant à Casablanca où elle est née en 1988, Meryem Aboulouafa participe, depuis plusieurs années, à de nombreux projets musicaux au Maroc et à l’étranger et initie diverses collaborations artistiques. Elle puise son inspiration au gré de ces rencontres, s’aguerrit sur scène en réalisant des performances en public, et enrichit petit à petit son univers artistique, jusqu’à décider de se consacrer au développement de son propre projet. Parmi ces différentes rencontres, celle avec Francesco Santalucia, compositeur et pianiste Italien, l’amènera à Rome, au sein du studio OMO. C’est là, qu’ils démarrent ensemble, en 2015, la réalisation d’un premier projet en commun.</p>
                                        </div>
                                        <div class="bio thumbnail"><h3>Dossier de presse</h3>
                                            <p>Merci de cliquer ici pour téléchager mon dossier de presse</p>
                                        </div>

                                        <div class="bio thumbnail"><h3>Discographie</h3>
                                        <p>Illud autem non dubitatur quod cum esset aliquando virtutum
                                            omnium domicilium Roma, ingenuos advenas pleriqu nobilium,
                                            ut Homerici bacarum suavitate Lotophagi, humanitatis
                                            multiformibus officiis retentabant.Illud autem non dubitatur quod cum esset aliquando virtutum
                                            omnium domicilium Roma, ingenuos advenas pleriqu nobilium,
                                            ut Homerici bacarum suavitate Lotophagi, humanitatis
                                            multiformibus officiis retentabant.Illud autem non dubitatur quod cum esset aliquando virtutum
                                            omnium domicilium Roma, ingenuos advenas pleriqu nobilium,
                                            ut Homerici bacarum suavitate Lotophagi, humanitatis
                                            multiformibus officiis retentabant.Illud autem non dubitatur quod cum esset aliquando virtutum
                                            omnium domicilium Roma, ingenuos advenas pleriqu nobilium,
                                            ut Homerici bacarum suavitate Lotophagi, humanitatis
                                            multiformibus officiis retentabant.</p>
                                        </div>
                                        <div class="bio thumbnail"><h3>Dates à retenir</h3>
                                        <p>Un projet à retrouver sur scène pour la première fois en tournée, à partir du printemps 2017</p>
                                        </div>


                                        <div class="bio thumbnail"><h3>Actualités</h3>
                                        <p>Illud autem non dubitatur quod cum esset aliquando virtutum
                                            omnium domicilium Roma, ingenuos advenas pleriqu nobilium,
                                            ut Homerici bacarum suavitate Lotophagi, humanitatis
                                            multiformibus officiis retentabant.</p>
                                        </div>

                                    <!--Gallerie image

                                    <div class="bio thumbnail"><h3>Gallerie</h3>

                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/F94T0300.JPG">
                                                <img src="images/Laklak/Meryem/F94T0300.JPG" alt="Meryem Aboulouafa" width="300" height="200">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa
                                            </div>
                                        </div>
                                    </div>


                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/JohnFPeters_BDMOROC_5828.jpg">
                                                <img src="images/Laklak/Meryem/JohnFPeters_BDMOROC_5828.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>

                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem%20Aboulouafa.jpg">
                                                <img src="images/Laklak/Meryem/Meryem%20Aboulouafa.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>

                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-12.jpg">
                                                <img src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-12.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>
                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-13.jpg">
                                                <img src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-13.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>
                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-18.jpg">
                                                <img src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-18.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>
                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-19.jpg">
                                                <img src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-19.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>
                                    <div class="responsive">
                                        <div class="gallery">
                                            <a target="_blank" href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-20.jpg">
                                                <img src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-20.jpg" alt="Meryem Aboulouafa" width="600" height="400">
                                            </a>
                                            <div class="desc">Meryem Aboulouafa</div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                             </div>
                        <!--fin gallerie image-->
                          <div class="col_full clearfix">
                            <h3>Gallerie</h3>

                            <div class="masonry-thumbs col-4" data-big="3" data-lightbox="gallery">
                                <a href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-18.jpg" alt="Gallery Thumb 1"></a>
                                <a href="images/Laklak/Meryem/F94T0300.JPG" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/F94T0300.JPG" alt="Gallery Thumb 2"></a>
                                <a href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-20.jpg" alt="Gallery Thumb 3"></a>
                                <a href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-19.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-19.jpg" alt="Gallery Thumb 4"></a>
                                <a href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-13.jpg" alt="Gallery Thumb 5"></a>
                                <a href="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem_Aboulouafa©BaptisteDVA-12.jpg" alt="Gallery Thumb 6"></a>
                                <a href="images/Laklak/Meryem/Meryem%20Aboulouafa.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/Meryem%20Aboulouafa.jpg" alt="Gallery Thumb 7"></a>
                                <a href="images/Laklak/Meryem/JohnFPeters_BDMOROC_5828.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/Laklak/Meryem/JohnFPeters_BDMOROC_5828.jpg" alt="Gallery Thumb 9"></a>
                            </div>

                              <div class="divider"><i class="icon-circle"></i></div>
                          </div>
                    </div>


             </div>
    </div>



    <?php
    include  'footer.php';
    ?>
