<!DOCTYPE html>
<html>
<title>Related Keyword Generator</title>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta property="og:site_name" content="semanticarticle.com"/>
  <meta property="og:title" content="semanticarticle.com"/>
  <meta property="og:url" content="https://www.semanticarticle.com"/>
  <meta property="og:type" content="website"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css"/> -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/fixedheader/3.1.0/css/fixedHeader.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/keytable/2.1.0/css/keyTable.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/scroller/1.4.0/css/scroller.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progressjs.min.css"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <link rel="stylesheet" href="<?= base_url();?>assets/style.css">

  <style type="text/css">
    .cardku{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .progress-done {
        background: #7cf564;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 0;
        opacity: 0;
        transition: 1s ease 0.3s;
      }
      .progress {
        background-color: #d8d8d8;
        position: relative;
        margin: 15px 0;
        height: 30px;
        width: 420px;
      }
      .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
}
#collapseUtilities::-webkit-scrollbar {
    
  width: 8px;
}


#collapseUtilities::-webkit-scrollbar-track {
   
  
}
 

#collapseUtilities::-webkit-scrollbar-thumb {
  background: #888; 
 /* border-radius: 10px;*/
}


#collapseUtilities::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
</head>

<body style="padding: ;">

  <!-- <meta http-equiv="CACHE-CONTROL" content="NO-CACHE"> -->
  <nav class="navbar navbar-light " style="background-color: #556B2F;">

    <a class="navbar-brand" href="#" style="color: white;margin:  10px;font-size: 30px;font-family: 'Roboto', sans-serif;">semanticarticle.com</a>

</nav>

<center><h1><b>Related Keyword Generator</b></h1></center>
<center><p>Google, Youtube, Bing, Playstore, etc.</p></center>
<div class="container" style="margin-top: 5%;">


    <div class="row">

      <div class="col-sm-6">
        <div id="numofkeywords"></div>
        <div class="form-group">
          <label for="input" ><h3>Input:</h3></label>
          <textarea id="input" autocomplete="off" autocorrect="off" style="resize: none; height: 400px; width: 400px;" autocapitalize="off" spellcheck="false" rows="8" title="queue" class="form-control"  placeholder="Isi Keyword"></textarea>
      </div>

      <a class="btn btn-info primary btn-md" id="startjob" type="button" value="Shit Keywords!" style="color: white;">Generate Keyword</a>

<!-- 
      <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#advanced" aria-expanded="false" aria-controls="advanced">
        Advanced
    </button> -->



    <a class="btn btn-danger" id="reset" title="Empty all input and results" type="button" value="Reset">Reset</a>
</div>
<div class="col-sm-5">

    <div class="form-group lala">
      <label for="service" style="margin-top: 20px;">Service:</label>
      <select class="form-control" name="service" id="service" >
                        <!-- <option>google</option>
                        <option>twitter</option>
                        <option>yahoo</option>
                        <option>bing</option>
                        <option>ebay</option>
                        <option>amazon</option>
                        <option>google images</option>
                        <option>youtube</option>
                        <option>google videos</option>
                        <option>google books</option>
                        <option>google news</option>
                        <option>google shopping</option>
                        <option>yandex</option>
                        <option>baidu</option>
                        <option>linkedin</option> -->
                        <!-- <option>yelp</option> -->
                    </select>
                </div>
                <div class="checkbox">
                  <label for="keep-running">
                    <input type="checkbox" id="keep-running" name="keep-running" title="Keep running forever"></input>Continuous running:
                </label>
            </div>

            <div class="form-group">
              <label for="country">Country code (google):</label>
              <!-- ISO-3366-1: Alpha-2 Codes -->
              <select value="id"  class="form-control" name="country" id="country" title="Country code. Two letters. Only works for google for now" disabled="">
                <option value=""></option>
                <option value="us">United States (us)</option>
                <option value="af">Afghanistan (af)</option>
                <option value="ax">Åland Islands (ax)</option>
                <option value="al">Albania (al)</option>
                <option value="dz">Algeria (dz)</option>
                <option value="as">American Samoa (as)</option>
                <option value="ad">Andorra (ad)</option>
                <option value="ao">Angola (ao)</option>
                <option value="ai">Anguilla (ai)</option>
                <option value="aq">Antarctica (aq)</option>
                <option value="ag">Antigua and Barbuda (ag)</option>
                <option value="ar">Argentina (ar)</option>
                <option value="am">Armenia (am)</option>
                <option value="aw">Aruba (aw)</option>
                <option value="au">Australia (au)</option>
                <option value="at">Austria (at)</option>
                <option value="az">Azerbaijan (az)</option>
                <option value="bs">Bahamas (bs)</option>
                <option value="bh">Bahrain (bh)</option>
                <option value="bd">Bangladesh (bd)</option>
                <option value="bb">Barbados (bb)</option>
                <option value="by">Belarus (by)</option>
                <option value="be">Belgium (be)</option>
                <option value="bz">Belize (bz)</option>
                <option value="bj">Benin (bj)</option>
                <option value="bm">Bermuda (bm)</option>
                <option value="bt">Bhutan (bt)</option>
                <option value="bo">Bolivia, Plurinational State of (bo)</option>
                <option value="bq">Bonaire, Sint Eustatius and Saba (bq)</option>
                <option value="ba">Bosnia and Herzegovina (ba)</option>
                <option value="bw">Botswana (bw)</option>
                <option value="bv">Bouvet Island (bv)</option>
                <option value="br">Brazil (br)</option>
                <option value="io">British Indian Ocean Territory (io)</option>
                <option value="bn">Brunei Darussalam (bn)</option>
                <option value="bg">Bulgaria (bg)</option>
                <option value="bf">Burkina Faso (bf)</option>
                <option value="bi">Burundi (bi)</option>
                <option value="kh">Cambodia (kh)</option>
                <option value="cm">Cameroon (cm)</option>
                <option value="ca">Canada (ca)</option>
                <option value="cv">Cape Verde (cv)</option>
                <option value="ky">Cayman Islands (ky)</option>
                <option value="cf">Central African Republic (cf)</option>
                <option value="td">Chad (td)</option>
                <option value="cl">Chile (cl)</option>
                <option value="cn">China (cn)</option>
                <option value="cx">Christmas Island (cx)</option>
                <option value="cc">Cocos (Keeling) Islands (cc)</option>
                <option value="co">Colombia (co)</option>
                <option value="km">Comoros (km)</option>
                <option value="cg">Congo (cg)</option>
                <option value="cd">Congo, the Democratic Republic of the (cd)</option>
                <option value="ck">Cook Islands (ck)</option>
                <option value="cr">Costa Rica (cr)</option>
                <option value="ci">Côte d'Ivoire (ci)</option>
                <option value="hr">Croatia (hr)</option>
                <option value="cu">Cuba (cu)</option>
                <option value="cw">Curaçao (cw)</option>
                <option value="cy">Cyprus (cy)</option>
                <option value="cz">Czech Republic (cz)</option>
                <option value="dk">Denmark (dk)</option>
                <option value="dj">Djibouti (dj)</option>
                <option value="dm">Dominica (dm)</option>
                <option value="do">Dominican Republic (do)</option>
                <option value="ec">Ecuador (ec)</option>
                <option value="eg">Egypt (eg)</option>
                <option value="sv">El Salvador (sv)</option>
                <option value="gq">Equatorial Guinea (gq)</option>
                <option value="er">Eritrea (er)</option>
                <option value="ee">Estonia (ee)</option>
                <option value="et">Ethiopia (et)</option>
                <option value="fk">Falkland Islands (Malvinas) (fk)</option>
                <option value="fo">Faroe Islands (fo)</option>
                <option value="fj">Fiji (fj)</option>
                <option value="fi">Finland (fi)</option>
                <option value="fr">France (fr)</option>
                <option value="gf">French Guiana (gf)</option>
                <option value="pf">French Polynesia (pf)</option>
                <option value="tf">French Southern Territories (tf)</option>
                <option value="ga">Gabon (ga)</option>
                <option value="gm">Gambia (gm)</option>
                <option value="ge">Georgia (ge)</option>
                <option value="de">Germany (de)</option>
                <option value="gh">Ghana (gh)</option>
                <option value="gi">Gibraltar (gi)</option>
                <option value="gr">Greece (gr)</option>
                <option value="gl">Greenland (gl)</option>
                <option value="gd">Grenada (gd)</option>
                <option value="gp">Guadeloupe (gp)</option>
                <option value="gu">Guam (gu)</option>
                <option value="gt">Guatemala (gt)</option>
                <option value="gg">Guernsey (gg)</option>
                <option value="gn">Guinea (gn)</option>
                <option value="gw">Guinea-Bissau (gw)</option>
                <option value="gy">Guyana (gy)</option>
                <option value="ht">Haiti (ht)</option>
                <option value="hm">Heard Island and McDonald Islands (hm)</option>
                <option value="va">Holy See (Vatican City State) (va)</option>
                <option value="hn">Honduras (hn)</option>
                <option value="hk">Hong Kong (hk)</option>
                <option value="hu">Hungary (hu)</option>
                <option value="is">Iceland (is)</option>
                <option value="in">India (in)</option>
                <option value="id">Indonesia (id)</option>
                <option value="ir">Iran, Islamic Republic of (ir)</option>
                <option value="iq">Iraq (iq)</option>
                <option value="ie">Ireland (ie)</option>
                <option value="im">Isle of Man (im)</option>
                <option value="il">Israel (il)</option>
                <option value="it">Italy (it)</option>
                <option value="jm">Jamaica (jm)</option>
                <option value="jp">Japan (jp)</option>
                <option value="je">Jersey (je)</option>
                <option value="jo">Jordan (jo)</option>
                <option value="kz">Kazakhstan (kz)</option>
                <option value="ke">Kenya (ke)</option>
                <option value="ki">Kiribati (ki)</option>
                <option value="kp">Korea, Democratic People's Republic of (kp)</option>
                <option value="kr">Korea, Republic of (kr)</option>
                <option value="kw">Kuwait (kw)</option>
                <option value="kg">Kyrgyzstan (kg)</option>
                <option value="la">Lao People's Democratic Republic (la)</option>
                <option value="lv">Latvia (lv)</option>
                <option value="lb">Lebanon (lb)</option>
                <option value="ls">Lesotho (ls)</option>
                <option value="lr">Liberia (lr)</option>
                <option value="ly">Libya (ly)</option>
                <option value="li">Liechtenstein (li)</option>
                <option value="lt">Lithuania (lt)</option>
                <option value="lu">Luxembourg (lu)</option>
                <option value="mo">Macao (mo)</option>
                <option value="mk">Macedonia, the former Yugoslav Republic of (mk)</option>
                <option value="mg">Madagascar (mg)</option>
                <option value="mw">Malawi (mw)</option>
                <option value="my">Malaysia (my)</option>
                <option value="mv">Maldives (mv)</option>
                <option value="ml">Mali (ml)</option>
                <option value="mt">Malta (mt)</option>
                <option value="mh">Marshall Islands (mh)</option>
                <option value="mq">Martinique (mq)</option>
                <option value="mr">Mauritania (mr)</option>
                <option value="mu">Mauritius (mu)</option>
                <option value="yt">Mayotte (yt)</option>
                <option value="mx">Mexico (mx)</option>
                <option value="fm">Micronesia, Federated States of (fm)</option>
                <option value="md">Moldova, Republic of (md)</option>
                <option value="mc">Monaco (mc)</option>
                <option value="mn">Mongolia (mn)</option>
                <option value="me">Montenegro (me)</option>
                <option value="ms">Montserrat (ms)</option>
                <option value="ma">Morocco (ma)</option>
                <option value="mz">Mozambique (mz)</option>
                <option value="mm">Myanmar (mm)</option>
                <option value="na">Namibia (na)</option>
                <option value="nr">Nauru (nr)</option>
                <option value="np">Nepal (np)</option>
                <option value="nl">Netherlands (nl)</option>
                <option value="nc">New Caledonia (nc)</option>
                <option value="nz">New Zealand (nz)</option>
                <option value="ni">Nicaragua (ni)</option>
                <option value="ne">Niger (ne)</option>
                <option value="ng">Nigeria (ng)</option>
                <option value="nu">Niue (nu)</option>
                <option value="nf">Norfolk Island (nf)</option>
                <option value="mp">Northern Mariana Islands (mp)</option>
                <option value="no">Norway (no)</option>
                <option value="om">Oman (om)</option>
                <option value="pk">Pakistan (pk)</option>
                <option value="pw">Palau (pw)</option>
                <option value="ps">Palestinian Territory, Occupied (ps)</option>
                <option value="pa">Panama (pa)</option>
                <option value="pg">Papua New Guinea (pg)</option>
                <option value="py">Paraguay (py)</option>
                <option value="pe">Peru (pe)</option>
                <option value="ph">Philippines (ph)</option>
                <option value="pn">Pitcairn (pn)</option>
                <option value="pl">Poland (pl)</option>
                <option value="pt">Portugal (pt)</option>
                <option value="pr">Puerto Rico (pr)</option>
                <option value="qa">Qatar (qa)</option>
                <option value="re">Réunion (re)</option>
                <option value="ro">Romania (ro)</option>
                <option value="ru">Russian Federation (ru)</option>
                <option value="rw">Rwanda (rw)</option>
                <option value="bl">Saint Barthélemy (bl)</option>
                <option value="sh">Saint Helena, Ascension and Tristan da Cunha (sh)</option>
                <option value="kn">Saint Kitts and Nevis (kn)</option>
                <option value="lc">Saint Lucia (lc)</option>
                <option value="mf">Saint Martin (French part) (mf)</option>
                <option value="pm">Saint Pierre and Miquelon (pm)</option>
                <option value="vc">Saint Vincent and the Grenadines (vc)</option>
                <option value="ws">Samoa (ws)</option>
                <option value="sm">San Marino (sm)</option>
                <option value="st">Sao Tome and Principe (st)</option>
                <option value="sa">Saudi Arabia (sa)</option>
                <option value="sn">Senegal (sn)</option>
                <option value="rs">Serbia (rs)</option>
                <option value="sc">Seychelles (sc)</option>
                <option value="sl">Sierra Leone (sl)</option>
                <option value="sg">Singapore (sg)</option>
                <option value="sx">Sint Maarten (Dutch part) (sx)</option>
                <option value="sk">Slovakia (sk)</option>
                <option value="si">Slovenia (si)</option>
                <option value="sb">Solomon Islands (sb)</option>
                <option value="so">Somalia (so)</option>
                <option value="za">South Africa (za)</option>
                <option value="gs">South Georgia and the South Sandwich Islands (gs)</option>
                <option value="ss">South Sudan (ss)</option>
                <option value="es">Spain (es)</option>
                <option value="lk">Sri Lanka (lk)</option>
                <option value="sd">Sudan (sd)</option>
                <option value="sr">Suriname (sr)</option>
                <option value="sj">Svalbard and Jan Mayen (sj)</option>
                <option value="sz">Swaziland (sz)</option>
                <option value="se">Sweden (se)</option>
                <option value="ch">Switzerland (ch)</option>
                <option value="sy">Syrian Arab Republic (sy)</option>
                <option value="tw">Taiwan, Province of China (tw)</option>
                <option value="tj">Tajikistan (tj)</option>
                <option value="tz">Tanzania, United Republic of (tz)</option>
                <option value="th">Thailand (th)</option>
                <option value="tl">Timor-Leste (tl)</option>
                <option value="tg">Togo (tg)</option>
                <option value="tk">Tokelau (tk)</option>
                <option value="to">Tonga (to)</option>
                <option value="tt">Trinidad and Tobago (tt)</option>
                <option value="tn">Tunisia (tn)</option>
                <option value="tr">Turkey (tr)</option>
                <option value="tm">Turkmenistan (tm)</option>
                <option value="tc">Turks and Caicos Islands (tc)</option>
                <option value="tv">Tuvalu (tv)</option>
                <option value="ug">Uganda (ug)</option>
                <option value="ua">Ukraine (ua)</option>
                <option value="ae">United Arab Emirates (ae)</option>
                <option value="gb">United Kingdom (gb)</option>
                <option value="um">United States Minor Outlying Islands (um)</option>
                <option value="uy">Uruguay (uy)</option>
                <option value="uz">Uzbekistan (uz)</option>
                <option value="vu">Vanuatu (vu)</option>
                <option value="ve">Venezuela, Bolivarian Republic of (ve)</option>
                <option value="vn">Viet Nam (vn)</option>
                <option value="vg">Virgin Islands, British (vg)</option>
                <option value="vi">Virgin Islands, U.S. (vi)</option>
                <option value="wf">Wallis and Futuna (wf)</option>
                <option value="eh">Western Sahara (eh)</option>
                <option value="ye">Yemen (ye)</option>
                <option value="zm">Zambia (zm)</option>
                <option value="zw">Zimbabwe (zw)</option>
            </select>
        </div>
        <br>
        <div class="card cardku">
          <div class="card-header" style="background-color: darkgreen; color: white;">
            <b>Pengumuman</b>
        </div>
        <div class="card-body">
            <div class="form-group" >
               <p>Ini adalah fitur free dari semanticarticle.com akan ada launching tool premium untuk optimasi artikel agar bisa merangking puluhan/ratusan keyword sekaligus pakai 1 artikel saja, akan di launching insyaAlloh ahir maret
               </p>
           </div>
       </div>
   </div>
   <br>
   <div class="card cardku">
      <div class="card-header" style="background-color: darkgreen; color: white;">
        <b>Persen</b>
    </div>

    <div class="card-body">
        <div class="form-group" >
            <!-- 
            <div class="progress">
                    <div class="progress-done" data-done="60">
                      60%
                    </div>
                  </div> -->
                  <script type="text/javascript">
                      const progress = document.querySelector('.progress-done');

                      progress.style.width = progress.getAttribute('data-done') + '%';
                      progress.style.opacity = 1;
                  </script>
                  
           
            <div class="card">
                <a  class="nav-link"  data-toggle="collapse" data-target="#collapseUtilities" style="background-color: #e3ffeb; text-decoration: none;cursor: pointer;padding: 16px;border-left: 4px solid darkgreen;">
                    <i class="fas fa-caret-down" style="color: darkgreen;font-size: 20px;"></i>
                    <span  style="padding-left: 20px!important;color: darkgreen;font-weight: 800;margin-top: -6px;">Keyword Penting</span>
                </a>
                <div id="collapseUtilities" class="collapse scrollable-menu" >

                    <div  id="persen" style="border-left: 4px solid darkgreen;padding-top: 16px;margin-bottom: -20px;" >

                        
                    </div>
                </div>
           </div>
           <!-- <div class="col-lg-12">
            <h2 class="bold">Scrollable Menu</h2>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Scrollable Menu <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu" id="persen">
                    
                </ul>
            </div> -->
              
           <p id="persen"></p>
           
       </div>
   </div>
</div>


<form id="advanced" class="collapse">
    <br>


    <div class="form-group">
      <label for="prefixes">Prefixes</label>
      <textarea type="text" title="These values are added before words to prompt the search suggestions" class="form-control" name="prefixes" id="prefixes"  ></textarea>
  </div>
  <div class="form-group">
      <label for="suffixes">Suffixes:</label>
      <textarea type="text" rows="2" title="These values are added after words to prompt the search suggestions" class="form-control" id="suffixes"></textarea>
  </div>

  <div class="form-group" style="display: none">
      <label for="rate-limit">Rate limit (for experts):</label>
      <input type="text"  class="form-control" id="rate-limit" value="750" name="rate-limit" title="Value between searches in milliseconds only change if you know what you are doing. This could get your ip banned, or place an unfair burden on the suggest servers." disabled>
  </div>



  <div class="form-group">
      <label for="lang">Lang code (google & yandex):</label>
      <select class="form-control" title="Lang code. Two letters. Only works for google for now" class="form-control" id="lang" value="en" >
        <option value=""></option>
        <option value="en" >English (default) (en)</option>
        <option value="ar" >Arabic (ar)</option>
        <option value="bg" >Bulgarian (bg)</option>
        <option value="ca" >Catalan (ca)</option>
        <option value="hr" >Croatian (hr)</option>
        <option value="zh-hans" >Chinese (Simplified) (zh-hans)</option>
        <option value="zh-hant" >Chinese (Traditional) (zh-hant)</option>
        <option value="cs" >Czech (cs)</option>
        <option value="da" >Danish (da)</option>
        <option value="nl" >Dutch (nl)</option>
        <option value="fi" >Filipino (fi)</option>l
        <option value="fi" >Finnish (fi)</option>
        <option value="fr" >French (fr)</option>
        <option value="de" >German (de)</option>
        <option value="el" >Greek (el)</option>
        <option value="he" >Hebrew (he)</option>
        <option value="hi" >Hindi (hi)</option>
        <option value="hu" >Hungarian (hu)</option>
        <option value="id" >Indonesian (id)</option>
        <option value="it" >Italian (it)</option>
        <option value="ja" >Japanese (ja)</option>
        <option value="ko" >Korean (ko)</option>
        <option value="lv" >Latvian (lv)</option>
        <option value="lt" >Lithuanian (lt)</option>
        <option value="no" >Norwegian (no)</option>
        <option value="pl" >Polish (pl)</option>
        <option value="pt" >Portuguese (pt)</option>
        <option value="ro" >Romanian (ro)</option>
        <option value="ru" >Russian (ru)</option>
        <option value="sr" >Serbian (sr)</option>
        <option value="sk" >Slovak (sk)</option>
        <option value="sl" >Slovenian (sl)</option>
        <option value="es" >Spanish (es)</option>
        <option value="sv" >Swedish (sv)</option>
        <option value="th" >Thai (th)</option>
        <option value="tr" >Turkish (tr)</option>
        <option value="uk" >Ukrainian (uk)</option>
        <option value="vi" >Vietnamese (vi)</option>
    </select>
</div>


</form>


</div>

</div>


<div class="row">
    <div class="col-sm-12">
      <hr id="progress1">
      <br id="progress2">
  </div>
</div>
<div class="row">
    <div class="col-sm-12">
     <div id="txt"></div>
 </div>
</div>


<div class="row">
    <div id="results" class="col-sm-12">
      <h2>Results</h2>
      <!-- <div class="table-responsive"> -->
        <table id="outtable" class=" table table-condensed compact dt-responsive" cellspacing="0" width="100%">
          <thead>
            <tr>
                            <!-- <th>id</th>
                            <th title="A suggested search">Keyword</th>
                            <th title="Keyword length">Length</th>
                            <th title="Searches per month">Volume</th>
                            <th title="Cost per click ($US)">CPC</th>
                            <th title="Search that prompted the keyword suggestion">Search</th>
                            <th title="Source">Source</th>
                            <th title="Number of words">Words</th> -->
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <!-- </div> -->
            </div>
        </div>
        <p style="padding: 20px; text-decoration: bold;"><b>Tool By :</b> Aqil Da Fortress
        </p>
        <style type="text/css">

            #persen b{

                margin-left: 10px;
               /* margin-right: 50%;*/
               
            }
            #persen span{
                
                float:right;
            }
            #persen hr{
                height: 4px;
                color: #f3f5f0
            }
            #persen i{
                padding-left: 20px;
                color:darkgreen;
            }
            
        </style>

    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/s/bs/jszip-2.5.0,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,fh-3.1.0,kt-2.1.0,r-2.0.0,se-1.1.0/datatables.min.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.2.0/lodash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/localforage/1.3.3/localforage.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progress.min.js"></script>



    <!-- <script type="text/javascript" src="<?= base_url();?>assets/suggestions.js"></script> -->
    <script type="text/javascript">
        var suggestions = function(){
            return {
                defaultOptions:{
                    deferTableUpdatesAtRows: 5000,
                    keepRunning: false,
                    maxQueueDisplay: 5000,
                    country: "",
                    filterNegative: "",
                    filterPositive: "",
                    lang: "",
                    prefixes: [],
                    rateLimit: 750,
                    service: "google",
                    suffixes: []
                },

                services:{
                    "google":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&gl=${country}&callback=?&q=",
                    "google news":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=n&gl=${country}&callback=?&q=",
                    "google shopping":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=sh&gl=${country}&callback=?&q=",
                    "google books":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=bo&gl=${country}&callback=?&q=",
                    "youtube":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=yt&gl=${country}&callback=?&q=",
                    "google videos":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=v&gl=${country}&callback=?&q=",
                    "google images":
                    "//suggestqueries.google.com/complete/search?client=chrome&hl=${lang}&ds=i&gl=${country}&callback=?&q=",
                    "yahoo":
                    "//search.yahoo.com/sugg/ff?output=jsonp&appid=ffd&callback=?&command=",
                    "bing": "//api.bing.com/osjson.aspx?JsonType=callback&JsonCallback=?&query=",
                    "ebay":
                    "//autosug.ebay.com/autosug?_jgr=1&sId=0&_ch=0&callback=?&kwd=",
                    "amazon":
                    "//completion.amazon.co.uk/search/complete?method=completion&search-alias=aps&mkt=3&callback=?&q=",
                    "twitter":
                    "//twitter.com/i/search/typeahead.json?count=30&result_type=topics&src=SEARCH_BOX&callback=?&q=",
                    "baidu": "//suggestion.baidu.com/su?cb=?&wd=",
                    "yandex": "//yandex.com/suggest/suggest-ya.cgi?callback=?&q=?&n=30&v=4&uil={lang}&part=",
            "google play": "//market.android.com/suggest/SuggRequest?json=1&c=0&hl=${lang}&gl=${country}&callback=?&query=", //
            "google play apps": "//market.android.com/suggest/SuggRequest?json=1&c=3&hl=${lang}&gl=${country}&callback=?&query=",
            "google play movies": "//market.android.com/suggest/SuggRequest?json=1&c=4&hl=${lang}&gl=${country}&callback=?&query=",
            "google play books": "//market.android.com/suggest/SuggRequest?json=1&c=1&hl=${lang}&gl=${country}&callback=?&query=",
            // "kickasstorrents": "//kat.cr/get_queries.php?query=", // not jsonp
        },
        /**
         * Get the service url based on options set in the dom.
         * @return {String} A jsonp url for search suggestions with query missing from the end.
         */
         getUrl :function(service, options){
            // Ref: https://github.com/estivo/Instantfox/blob/master/firefox/c1hrome/content/defaultPluginList.js
            // Ref: https://github.com/bnoordhuis/mozilla-central/tree/master/browser/locales/en-US/searchplugins
            // Ref: https://developers.google.com/custom-search/json-api/v1/reference/cse/list
            // https://developers.google.com/custom-search/docs/ref_languages
            options = _.defaults({},this.defaultOptions, this.getOptions(), options)
            return _.template(this.services[(service||this.options.service)])(options);
        },


        /** Parse response per service **/
        parseServiceResponse: function(res, service){
            // Each take a json response tand return a keyword array
            RESPONSE_TEMPLATES = {
                // opensearch default
                "default": function (res) {
                    return res[1];
                },
                "yahoo": function (res) {
                    return _.map(res.gossip.results, 'key');
                },
                "ebay": function (res) {
                    return res.res ? res.res.sug : [];
                },
                "twitter": function (res) {
                    return _.concat(res.users, _.map(res.topics, 'topic'), res.hashtags, res.oneclick);
                },
                "baidu": function (res) {
                    return res.s;
                },
                "yandex": function(res){
                    return _.map(res[1], function(r){
                        return typeof r === 'string' ? r : r[1];
                    });
                },
                "linkedin": function(res){
                    return _.map(res.resultList,'displayName');
                },
                "google play": function(res){return _.map(res,'s')},
                "google play apps": function(res){return _.map(res,'s')},
                "google play movies": function(res){return _.map(res,'s')},
                "google play books": function(res){return _.map(res,'s')},
            };
            var parser = RESPONSE_TEMPLATES[(service||this.options.service)] || RESPONSE_TEMPLATES["default"];
            return parser(res);
        }
    }
}()

function sum( obj ) {
  var sum = 0;
  for( var el in obj ) {
    if( obj.hasOwnProperty( el ) ) {
      sum += parseFloat( obj[el] );
  }
}
return sum;
}
function reverseObject(object) {
    var newObject = {};
    var keys = [];

    for (var key in object) {
        keys.push(key);
    }

    for (var i = keys.length - 1; i >= 0; i--) {
      var value = object[keys[i]];
      newObject[keys[i]]= value;
  }       

  return newObject;
}
function roundNumber(num, scale) {
  if(!("" + num).includes("e")) {
    return +(Math.round(num + "e+" + scale)  + "e-" + scale);
} else {
    var arr = ("" + num).split("e");
    var sig = ""
    if(+arr[1] + scale > 0) {
      sig = "+";
  }
  return +(Math.round(+arr[0] + "e" + sig + (+arr[1] + scale)) + "e-" + scale);
}
}
var KWS = function(){
    var haha=[];
    var arr=[];

    var lol=[];
    return {
        table: undefined,
        myIp: undefined,
        options: {},
        // flags
        queryLock: false,
        doWork: false,
        // keeping track of queue
        hashMapInputs: {},
        keywordsToQuery: [],
        keywordsToQueryIndex: 0,
        numOfInitialKeywords: 0,

        services:suggestions.services,
        getUrl :suggestions.getUrl,
        parseServiceResponse: suggestions.parseServiceResponse,

        toggleWork: function(){
            if (this.doWork === false)
                this.StartWork();
            else
                this.StopWork();
        },

        StartWork: function() {
            if (this.doWork === false) {
                // reset these
                this.saveSettings();
                $('#startjob').val('Stop Job').text('Stop Generate').addClass('btn-danger');
                this.hashMapInputs = {};
                this.keywordsToQuery = [];
                this.keywordsToQueryIndex = 0;

                this.hashMapInputs[""] = true;
                this.hashMapInputs[" "] = true;
                this.hashMapInputs["  "] = true;

                // update config
                this.options = this.getOptions();

                // get queries from the input
                var ks = $('#input').val().split("\n");
                this.keywordsToQuery=_.map(ks,this.CleanVal);


                // add variations of the initial terms
                // (before we start adding variations of the results)
                if (!this.keywordsToQuery.length)
                    this.permuteResultsToQueue([' ']);
                else {
                    var untickedInputs = this.keywordsToQuery.filter(function(k){
                        return k.slice(-1)!=='  ' && k.slice(-1)!=='  ';
                    });
                    this.permuteResultsToQueue(untickedInputs);
                }

                this.numOfInitialKeywords = this.keywordsToQuery.length;
                // show the extended queue
                this.FilterAndDisplay();

                this.doWork = true;
                this.progress1.start();

                // $('#input').hide();
                // $('#advanced').collapse("hide");

            } else {

            }
        },

        StopWork: function(){
            if (this.doWork){
                $('#startjob').val('Start Job').text('Generate Keyword').removeClass('btn-danger');
                this.doWork = false;
                // $('#input').show();
                this.table.draw();
                this.table.columns.adjust();
                this.saveSettings();
                this.FilterAndDisplay();
                this.progress1.end();

                document.getElementById("txt").innerHTML = "<textarea style='height:200px; width:100%;'>"+lol+"</textarea>";
                var map = haha.reduce(function(prev, cur) {
                  prev[cur] = (prev[cur] || 0) + 1;
                  return prev;
              }, {});
                a = sum(map);
                const sortable = Object.fromEntries(
                    Object.entries(map).sort(([,a],[,b]) => a-b)
                    );
                ob = reverseObject(sortable);
                Object.keys(ob).forEach(function(key) {
                    b = ob[key]/a * 100;
                    b = roundNumber(b, 2)
                    // console.log(key, b+"%");
                    // var a="<div>"
                    // var a+="<br><b>" +key+"</b>"
                    // var a+="<p>"+b+"%, </p>"
                    // var a+="</div>"

                    $('#persen').append("<i class='fas fa-circle'></i><b>"+key+"</b> "+"<span>"+b+"% , </span><br><hr>");
                });
                console.log (a)
            }
        },

        DoJob: function() {
            if (this.doWork === true && this.queryLock === false) {
                if (this.keywordsToQueryIndex < this.numOfInitialKeywords) {
                    var currentKw = this.keywordsToQuery[this.keywordsToQueryIndex];
                    if (currentKw.slice(-2)!=='  ' && currentKw.slice(-2)!=='  ') {
                        this.QueryKeyword(currentKw);
                        this.keywordsToQueryIndex++;
                    } else {
                        // we didn't do a query immediatly go to next query
                        this.keywordsToQueryIndex++;
                        this.DoJob();
                    }

                    var prog = parseInt(this.keywordsToQueryIndex/this.numOfInitialKeywords*100);
                    this.progress1.set(prog);
                    this.FilterAndDisplay();

                } else {
                    if (this.options.keepRunning) {
                        console.log('finish initial queue');
                        this.StopWork();
                        this.StartWork();
                    } else {
                        console.log('finish initial queue');
                        this.StopWork();
                    }
                }
            }
        },

        addResultsToQueue: function(retList, search){
            retList=_.map(retList,this.CleanVal);

            // add each result to list first before permutations
            for (var j = 0; j < retList.length; j++) {
                cleanKw = retList[j];
                // add base suggestion to queue if it's not already done and isn't empty
                if (cleanKw && cleanKw.length && !this.hashMapInputs[cleanKw] && this.keywordsToQuery.indexOf(cleanKw)===-1)
                    this.keywordsToQuery.push(cleanKw);
                this.hashMapInputs[cleanKw] = true;
            }

        },

        /** Make permutations of results and add to queue **/
        permuteResultsToQueue: function(retList, search){
            var chr, currentx, currentKw;
            var self = this;
            var options = this.getOptions()

            this.hashMapInputs[search] = true;

            // sort so the shortest is first in the queue TODO add option?
            // retList.sort(function (a, b) {
            //   return a.length - b.length;
            // });

            function addPrefix(s,prefix){
                return prefix+' '+s;
            }
            function addSuffix(s,suffix){
                return s+' '+suffix;
            }
            // clean
            retList=_.map(retList,this.CleanVal);

            // get permutations
            var newInputs = retList.reduce(function(result, keyword){
                return _.concat(
                    result,
                    _.map(options.prefixes,addPrefix.bind(self,keyword)),
                    _.map(options.suffixes,addSuffix.bind(self,keyword))
                    );
            }, []);

            // add to queue
            this.keywordsToQuery=_.concat(this.keywordsToQuery,newInputs);

            return newInputs;
        },


        /** Display results **/
        displayResults: function(retList, search, dontDisplay, url,data){

            var rows=[];
            retList=_.map(retList,this.CleanVal);

            for (var i = 0; i < retList.length; i++) {
                var  cleanKw = retList[i];

                // url might be in retlist
                if (url===undefined) url=data[i].url;
                // haha.push(cleanKw);

                arr = cleanKw.split(" ");
                for (var y = 0; y < arr.length; y++) {
                    if (lol.indexOf(arr[y]) < 0) {
                        lol.push(arr[y]);
                    }
                    haha.push(arr[y]);
                }


                var da = {
                    id: this.table.rows()[0].length+i,
                    keyword: cleanKw,
                    length: cleanKw.length,
                    words: cleanKw.trim().split(/ +/).length,
                    search: search,
                    domain: this.extractDomain(url)
                };

                // remove undefined values to avoid datatable alerts
                da = _.mapValues(da, function(v){return v===undefined ? null: v;});

                // TODO Check if suggestion is already displayed before adding
                // var matches = table.data().filter(function(v){return v[1]===cleanKw && v[5]==search;}).count();
                // if (!matches)
                rows.push(da);
            }

            
           // haha.join(' ');


           
           this.table.rows.add(rows);


           if (!dontDisplay && this.table.data().length<this.options.deferTableUpdatesAtRows) this.table.draw(false);






       },

        /** Takes url string and returns domain e.g. www.google.com or google.com
          * and some extra params to identify is
          **/
          extractDomain: function(url) {
            if (url===undefined) return null;
            var domain;
            //find & remove protocol (http, ftp, etc.) and get domain
            if (url.indexOf("://") > -1) {
                domain = url.split('/')[2];
            }
            else {
                domain = url.split('/')[0];
            }

            //find & remove port number
            domain = domain.split(':')[0];

            // custom, add ds= param to distinguish googles etc diff searchs
            var mr = url.match('ds=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&ds='+mr[1];

            var mr = url.match('gl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&gl='+mr[1];

            var mr = url.match('hl=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&hl='+mr[1];

            // lang code for yandex
            var mr = url.match('uil=(..?)&');
            if (mr && mr[1] && mr[1].length) domain+='&uil='+mr[1];

            return domain;
        },

        /** mark a search as done in the queue **/
        markAsDone: function(search){
            // mark as done in queue
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
                this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
                this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
                console.warn('Cant find ',search,'in keywordsToQuery');
        },

        /** mark a search as done in the queue **/
        markAsNone: function(search){
            // mark as done in queue
            if (this.keywordsToQuery[this.keywordsToQueryIndex]===search)
                this.keywordsToQuery[this.keywordsToQueryIndex]+='   ';
            else if (this.keywordsToQuery[this.keywordsToQueryIndex-1]===search)
                this.keywordsToQuery[this.keywordsToQueryIndex-1]+='   ';
            else
                console.warn('Cant find ',search,'in keywordsToQuery');
        },

        /** Get search suggestions for a keyword **/
        QueryKeyword: function(search) {
            var self = this;
            this.queryLock = true;

            // search not done, lets do the query
            url = self.getUrl()+search;
            var promise = $.ajax({
                url: url,
                // jsonp: "jsonp",
                dataType: "jsonp",
                success: function (res, statusText, jqXHR) {
                    var retList = self.parseServiceResponse(res);
                    if (retList && retList.length){
                        // self.storeResults(retList, search, this.url);
                        self.displayResults(retList, search, undefined, this.url);
                        self.addResultsToQueue(retList);
                        if (self.options.keepRunning) self.permuteResultsToQueue(retList);
                        self.markAsDone(search);
                    } else {
                        // console.debug('No suggestions for query: "',search,'"');
                        self.markAsNone(search);
                    }
                    self.queryLock = false;
                    return;

                },
                error: function(jqXHR,errorText,error){
                    console.error(errorText,this.url,this,jqXHR,error);
                    self.queryLock = false;
                    return;
                },
                callback: function(){
                    console.log(this,arguments);
                }
            });
            return promise;
        },

        /** Clean input, may not all be needed **/
        CleanVal: function(input) {
            // We want to clean search terms but it's not possible to do this perfectly
            // as differen't search engines strip differen't amounts from the term
            // so we will keep as much details as possible

            // Search engines are sensitive to whitespace so we do not want to trim
            // Some return html or escaped html, so we do want to convert to text

            // removed escaped html and html tags
            // e.g. '<b>A&amp;M</b>' => 'A&M'
            input=$('<div />').html(input).text();

            // I don't know of any search engines sentitive or case so make all lowercase
            input = input.toLowerCase();

            // this removes navigation suggestions, perhaps we need to move this to result parser
            if (input.length > 4 && input.substring(0, 4) == "http") input = "";

            return input;
        },

        /** TODO get this working **/
        Filter: function(listToFilter) {
            var retList = listToFilter;

            if ($("#filter-positive").val().length > 0) {
                var filteredList = [];
                var filterContains = $("#filter-positive").val().split("\n");
                for (var i = 0; i < retList.length; i++) {
                    var currentKeyword = retList[i];
                    var boolContainsKeyword = false;
                    for (var j = 0; j < filterContains.length; j++) {
                        if (filterContains[j].length > 0) {
                            if (currentKeyword.indexOf(filterContains[j]) != -1) {
                                boolContainsKeyword = true;
                                break;
                            }
                        }
                    }

                    if (boolContainsKeyword) {
                        filteredList[filteredList.length] = currentKeyword;
                    }
                }

                retList = filteredList;
            }

            if ($("#filter-negative").val().length > 0) {
                var filteredList = [];
                var filterContains = $("#filter-negative").val().split("\n");
                for (var l = 0; l < retList.length; l++) {
                    var currentKeyword = retList[l];
                    var boolCleanKeyword = true;
                    for (var k = 0; k < filterContains.length; k++) {
                        if (filterContains[k].length > 0) {
                            if (currentKeyword.indexOf(filterContains[k]) >= 0) {
                                boolCleanKeyword = false;
                                break;
                            }
                        }
                    }

                    if (boolCleanKeyword) {
                        filteredList[filteredList.length] = currentKeyword;
                    }
                }

                retList = filteredList;
            }

            return retList;
        },

        /** display the queue, and update description of it **/
        FilterAndDisplay: function() {
            var i = 0;
            var sb = '';

            var outputKeywords = this.keywordsToQuery;
            for (i = 0; i < Math.min(outputKeywords.length,this.options.maxQueueDisplay); i++) {
                sb += outputKeywords[i];
                sb += '\n';
            }
            if (outputKeywords.length>this.options.maxQueueDisplay) sb+='...\n';
            $("#input").val(sb);
            $("#numofkeywords").html('Queue:' + outputKeywords.length);
        },


        /** overrides default with dom options with arguments options **/
        getOptions: function(argOptions){
            var defaultOptions={
                deferTableUpdatesAtRows: 5000,
                keepRunning: false,
                maxQueueDisplay: 5000,
                country: "",
                filterNegative: "",
                filterPositive: "",
                lang: "",
                prefixes: [],
                rateLimit: 750,
                service: "google",
                suffixes: []
            }; // for now defaults are set in html
            if (argOptions===undefined) argOptions={};
            return _.defaults(argOptions,this.getDomOptions(),defaultOptions);
        },

        /** read settings from webpage **/
        getDomOptions: function(){

            var service= $('#service').val(),
            filterNegative = $('#filter-negative').val(),
            filterPositive = $('#filter-positive').val(),
            rateLimit = parseInt($('#rate-limit').val()),
                // input: $('#input').val(),
                prefixes = $('#prefixes').val(),
                suffixes = $('#suffixes').val(),
                country = $('#country').val(),
                lang = $('#lang').val(),
                keepRunning = $('#keep-running').prop('checked');
                if (prefixes && prefixes.length)
                    prefixes=prefixes.split(',');
                else
                    prefixes="";
                if (suffixes && suffixes.length)
                    suffixes=suffixes.split(',');
                else
                    suffixes="";

                var options={};
                if (service) options.service=service;
                if (filterNegative) options.filterNegative=filterNegative;
                if (filterPositive) ooptions.filterPositive=filterPositive;
                if (rateLimit) options.rateLimit=rateLimit;
                if (prefixes) options.prefixes=prefixes;
                if (suffixes) options.suffixes=suffixes;
                if (country) options.country=country;
                if (lang) options.lang=lang;
                if (keepRunning) options.keepRunning=keepRunning;
                return options;
            },

            /** load settings from localStorage **/
            loadSettings: function(){
            // Tabe settings are auto handles by datatables
            if (localStorage.service) $("#service").val( localStorage.service );
            if (localStorage.country) $('#country').val(localStorage.country);
            if (localStorage.lang) $('#lang').val(localStorage.lang);
            if (localStorage.filterNegative) $("#filter-negative").val( localStorage.filterNegative );
            if (localStorage.filterPositive) $("#filter-positive").val( localStorage.filterPositive );
            if (localStorage.rateLimit) $("#rate-limit").val( localStorage.rateLimit );
            if (localStorage.input) $("#input").val( localStorage.input );
            if (localStorage.prefixes) $("#prefixes").val( localStorage.prefixes );
            if (localStorage.suffixes) $("#suffixes").val( localStorage.suffixes );
            if (localStorage.keepRunning) $('#keep-running').prop('checked',localStorage.keepRunning=="true");

        },
        /** save settings to localStorage. **/
        saveSettings: function(){
            localStorage.service = $('#service').val();
            localStorage.country = $('#country').val();
            localStorage.lang = $('#lang').val();
            localStorage.filterNegative = $('#filter-negative').val();
            localStorage.filterPositive = $('#filter-positive').val();
            localStorage.rateLimit = $('#rate-limit').val();
            localStorage.input = $('#input').val();
            localStorage.prefixes = $('#prefixes').val();
            localStorage.suffixes = $('#suffixes').val();
            localStorage.keepRunning = $('#keep-running').prop('checked');
        },

        /** reset inputs and results, but not settings **/
        reset: function(){
            this.table.clear();
            this.table.draw();
            $('#input').val('');
            this.saveSettings();
        },

        init: function(){
            // this.setUpDb();

            // add this.servicess to search engine settings
            for (var service in this.services) {
                if (this.services.hasOwnProperty(service)) {
                    $('#service').append('<option>'+service+'</option>')
                }
            }


            this.loadSettings();
            this.options = this.getOptions();

            window.setInterval(this.DoJob.bind(this), this.options.rateLimit);

            $('#progress1').addClass('progressjs-progress');
            this.progress1 = progressJs("#progress1");

            // bind buttons
            $('#startjob').on('click',this.toggleWork.bind(this));
            $('#reset').on('click',this.reset.bind(this));

            // setup table
            this.table = $('#outtable').DataTable({
                pageLength: 10,
                "lengthMenu": [ 10, 25, 50, 75, 100,800],
                dom:
                "<'row'<'col-sm-5'B><'col-sm-7'<'pull-right'p>>>" +
                "<'row'<'col-sm-8'i><'col-sm-4'<'pull-right'f>>>" +
                "<'row'<'col-sm-12'tr>>",
                buttons: [
                'colvis',
                'pageLength',
                {
                 extend: 'collection',
                 text: 'Export',
                 buttons: [
                 'csvHtml5',
                 {
                     extend: 'csvHtml5',
                     fieldBoundary: "",
                     text: 'Copy keywords',
                                //  'customize': function(data,options){
                                //      console.log(data,options);return data.split('\n').join(',');
                                //  },
                                header: false,
                                exportOptions: {
                                 stripNewlines: true,
                                 stripHtml: true,
                                 decodeEntities: true,
                                 columns: 1,
                                    //  format:{
                                    //      body: function(html,i){
                                    //          console.log(html);return html
                                    //      }
                                    //  }
                                }
                            },
                            {
                             extend: 'csvHtml5',
                             fieldBoundary: "",
                             text: 'Copy visible columns',
                             header: false,
                             exportOptions: {
                                 columns: ':visible',
                                 stripNewlines: true,
                                 stripHtml: true,
                                 decodeEntities: true,
                             }
                         },
                         ]
                     },

                     ],
                     "columnDefs": [
                     {
                        "title": "id",
                        "data": "id",
                        "targets": 0,
                        "visible": false,
                    }, {
                        "name": "keyword",
                        "title": "Related Keyword",
                        "data": "keyword",
                        "responsivePriority": 1,
                        "targets": 1,
                    }, {
                        "title": "Length",
                        "data": "length",
                        "targets": 2,
                        "visible": false,
                        "type": "num"
                    }, {
                        "title": "Root Keyword",
                        "data": "search",
                        "responsivePriority": 3,
                        "targets": 3,
                        "visible": true,
                    },  {
                        "title": "Words",
                        "data": "words",
                        "targets": 4,
                        "visible": false,
                        "type": "num"
                    },
                    ],
                    order: [[ 0, 'desc' ]],
                // colReorder: {},
                stateSave: true,
                "bDeferRender": true,
                // fixedHeader: true,
                //  responsive: {
                //     details: {
                //         type: 'column',
                //         target: 'tr'
                //     },
                // },
                // scrollY:        500,
                // deferRender:    true,
                // scroller:       true
            });

            // get user ip
            $.getJSON('https://api.ipify.org?format=json', function (data) {
                this.myIp = data.ip;
            });

        }
    };
}();

</script>


<!-- Lets see if anyone ever uses this  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-51809277-6', 'auto');
ga('send', 'pageview');

</script>
<script>
  $(document).ready(function () {
    KWS.init();
});
</script>

</body>

</html>
