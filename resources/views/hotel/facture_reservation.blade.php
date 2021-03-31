<!DOCTYPE html>
<html class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"7e5b706196","applicationID":"2818502","transactionName":"IF1cFUBaDQ8ASh5HRRFXV05TUQwKCxdeRlEGQEFOQkcIDRE=","queueTime":0,"applicationTime":355,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"7e5b706196",applicationID:"2818502"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(7),c=e(8),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(9);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e){return!(!e||!e.protocol||"file:"===e.protocol)}t.exports=r},{}],4:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(6),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],5:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],6:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],7:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],8:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],9:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(7),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=x.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=l.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+x.offset],null,"api")}var a=e(2),c=e("handle"),f=e(7),u=e("ee"),s=e(5),d=e(3),p=window,l=p.document,m="addEventListener",v="attachEvent",g=p.XMLHttpRequest,w=g&&g.prototype;if(d(p.location)){NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:g,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:b,userAgent:s};e(1),e(4),l[m]?(l[m]("DOMContentLoaded",o,!1),p[m]("load",r,!1)):(l[v]("onreadystatechange",i),p[v]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(8),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
  <title>Détails de la réservation</title>

  <link href="//cdn1.hotelrunner.com/assets/order/reservation-0d84da6962f8dc00ce69ecabed977a96.css" media="all" rel="stylesheet" type="text/css" />
  <script src="//cdn0.hotelrunner.com/assets/jquery-2ce4706f8f7193defaa9e7df2b641e9a.js" type="text/javascript"></script>
  <script src="//cdn2.hotelrunner.com/assets/jquery_ujs-6fb06b32c6a70375ef647a144d7bcbab.js" type="text/javascript"></script>

  <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>

  <style>
    .reservation_table_detail .print_title {
      margin: 5px 0 5px 10px;
    }
    #reservation-wrap h3 {
      margin: 15px 0 5px 0;
    }
  </style>
</head>
<body>


<section id="reservation-wrap">
  <button id="printer" class="printer hidden-print" onClick="window.print();"></button>
  <h1>Perfitcom</h1>

  <!-- reservation detail -->
<h3>Réservation #R873184606(Walk-in)
  </h3>
<section class="detail">
  <section class="box">
    <p><label>Numéro de confirmation:</label>
      <span>
#R873184606(Walk-in)
    </span></p>

    <p><label>Date d´arrivée:</label><span>13 Janv. 2021</span></p>

    <p><label>Date de départ:</label><span>02 Févr. 2021</span></p>
  </section>
  <section class="box">


    <p><label>Sous-total
      :</label><span>2.000 XAF</span>
    </p>


    <p><label>Total Extra(s)
      :</label><span>0 XAF</span>
    </p>



    <p><label>Montant total
      :</label><span>2.000 XAF </span>
    </p>


    <p><label>Statut
      :</label><span>Réservé</span>
    </p>

        <p><label>Réservation faite le
          :</label><span>Mercredi 06 Janvier 2021 13:17</span></p>


  </section>
  <section class="clearfix"></section>
</section>
<!-- reservation detail end -->


  <!-- info -->
<h3>Détails du client</h3>
<section class="detail">
  <section class="box">

    <p><label>Nom:</label><span>ww ww</span></p>

            <p><label>Téléphone:</label><span>000000</span></p>

  </section>


  <section class="clearfix"></section>
</section>
<!-- end of info -->

  <!-- info -->
<h3>Adresse de Facturation</h3>
<section class="detail">
      <section class="box">
        <p>
          <label>
                ww ww
          </label>
        </p>
        <p>  </p>
      </section>
      <section class="box">
        <p><label>Téléphone:</label><span>000000</span></p>
      </section>
      <section class="box">
        <p><label>Fax:</label><span></span></p>
      </section>
  <section class="clearfix"></section>
</section>
<!-- end of info -->

    <!-- info -->
  <h3>Informations de facturation</h3>
  <section class="detail">
    <section class="box">
      <p><label>Mode de paiement:</label><span>Cash</span></p>
    </section>
    <section class="box">
    </section>

    <section class="clearfix"></section>
  </section>
  <!-- end of info -->


          <!-- room name note -->
<h3>Appartement </h3>
<section class="detail">
  <section class="box">
    <p><label>Nombre de clients:</label><span>
      2
    </span></p>

    <p><label>Arrangement (Meal Plan)
      :</label><span>Indisponible</span>
    </p>

    <p><label>Extras:</label><span>
      Indisponible
    </span>
      <!-- extras table-->
    </p>
    <section class="clearfix"></section>
  </section>
  <section class="box">
    <p><label>Date d´arrivée:</label><span>13 Janv. 2021</span></p>

    <p><label>Date de départ:</label><span>02 Févr. 2021</span></p>

    <p><label>Total
      :</label><span>2.000 XAF</span>
    </p>
  </section>
  <section class="clearfix"></section>



  <section class="clearfix"></section>
  
    <div class="reservation_table_detail">
      <h4 class="print_title">Tarifs Journaliers</h4>
      <table class="table variant_table" border="0" cellspacing="0">
        <tr class="first">
          <td><strong>Date</strong></td>
          <td><strong>Prix</strong></td>
        </tr>
            <tr>
              <td>13 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>14 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>15 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>16 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>17 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>18 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>19 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>20 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>21 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>22 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>23 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>24 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>25 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>26 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>27 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>28 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>29 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>30 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>31 Janv. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
            <tr>
              <td>01 Févr. 2021</td>
                  <td>

                        Prix de la chambre
                        
                        100 XAF
                  </td>
            </tr>
      </table>
    </div>

</section>
<!-- room name end -->


  

  <style>
  .guest-info-box {
    padding: 0 5px !important;
  }
  .guest-info-box table {
    width: 100%;
  }
  .guest-info-box td {
    background-color: #ffffff;
    border-bottom: 1px solid #d9d9d9;
    height: 30px;
  }
  .guest-info-box tr:last-child td {
     border-bottom: none;
   }
</style>
    <!-- info -->
    <h3>Clients</h3>
    <section class="detail guest-info-box">
      <table class="table">
        <tbody>
        </tbody>
      </table>
      <section class="clearfix"></section>
    </section>
    <!-- end of info -->


  
<!-- policies -->
<h3>Politiques</h3>
<section class="detail">
  <section class="box">


        <p>
          <label>Annulation:</label>
          <span>
                Annulation gratuite.

          </span>
        </p>
    <p><label>Heure d´arrivée:</label><span>Après 15:00 jour d&#x27;arrivée.</span></p>
    <p><label>Heure de départ:</label><span>11:00 le jour du départ.</span></p>
  </section>
  <section class="box">
    <p><label>Fumeur:</label><span>Fumer est autorisé.</span></p>
    <p><label>Animaux domestiques:</label><span>Les animaux domestiques ne sont autorisés</span></p>
  </section>
  <section class="clearfix"></section>
</section>
<!-- policies end -->
  <section class="pushFooter"></section>
</section>
<footer>
  Powered by <a href="http://hotelrunner.com" target="_blank">HotelRunner</a>
</footer>

<script type="text/javascript">
  $(document).ready(function(){
      window.print();
  });
</script>
</body>
</html>