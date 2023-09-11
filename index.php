<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css<? echo '?ver='.time().'' ?>">
   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="modal_market_detail">
        <img src="" alt="" class="market_item_img">
        <div class="market_item_desc">
            <span id="desc_name">ddddd</span><br>
            <span id="desc_equip">daasdasdasdasda</span><br>
            <span id="desc2">asdsadas</span><br>
            <span id="cost">Цена:</span><br>
            <span id="cost2">saxass <br>jkdks <br> sadasd </span>
        </div>

    </div>
    <div id="modal_screen_back">
    <!-- <div id="modal_screenshot_frame"></div> -->
        <img src="assets/img/arrow_left.png" alt="" id="slide_left">
        <img src="assets/img/arrow_right.png" alt="" id="slide_right">
        <img src="assets/img/close.png" alt="" id="screen_close">
        <div class="" id="modal_screenshot"></div>
        
    </div>
    
    <div class="logo"></div>
    <div class="header">
        <table class="menu">
            <tr>
                <td>Главная<img src="assets/img/menu_separator.png" alt=""></td>
                <td>Новости<img src="assets/img/menu_separator.png" alt=""></td>
                <td>FAQ<img src="assets/img/menu_separator.png" alt=""></td>
                <td>Рейтинг<img src="assets/img/menu_separator.png" alt=""></td>
                <td>Регистация<img src="assets/img/menu_separator.png" alt=""></td>
                <td>Скачать</td>
            </tr>
        </table>
    </div>
    <div class="wrapper">
       <div style="display: table;"> 
        <div class="body">
        <div class="banner">
            <img src=""  id="bannerImg">
            <div class="banner_top">EVENT<br>DEVIL SQUARE</div>
            <img class="btn left" id="bleft" src="assets/img/button-left.png" alt="">
            <img class="btn right" id="bright" src="assets/img/button-right.png"  alt="">

            <div class="event_start">EVENT START <span id="startTime" data-timeto=""> 00:00:00:41</span></div>

        </div>
        <img src="assets/img/perehod.png" alt="" class="perehod">
        <div class="news_head" style="margin-top:-1.5vw;">Скриншоты</div>
        <div class="screen_slider">
            <div class="btn_container">
                <img src="assets/img/button-left.png" alt=""  id="left2" class="btn2">    
                <img src="assets/img/button-right.png" alt="" id="right2"  class="btn2">
            </div>
            <div class="screen_container">
                <div class="screen"><div class="screenshot"><img src="assets/img/screen.png" class="screen_img"></div></div>
                <div class="screen"><div class="screenshot"><img src="assets/img/screen2.png" class="screen_img"></div></div>
                <div class="screen"><div class="screenshot"><img src="assets/img/screen3.png" class="screen_img"></div></div>
                <div class="screen"><div class="screenshot"><img src="assets/img/screen4.png" class="screen_img"></div></div>
                <div class="screen"><div class="screenshot"><img src="assets/img/screen.png" class="screen_img"></div></div>
            </div>
        </div>
        
        
        <div class="news_head">Новости</div>
        <div class="news">
            <div class="news_inner">
                <div class="news_header">Мини обновление</div>
                <div class="news_video">
                    <iframe id="youtube" width="560" height="315" src="https://www.youtube.com/embed/LUY5_dyBCII?si=ijijWmFRkZUXko-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <img src="assets/img/frame-top-left.png" alt="" class="frame leftTop">
                    <img src="assets/img/frame-top-right.png" alt="" class="frame rightTop">
                    <img src="assets/img/frame-bottom-right.png" alt="" class="frame rightBottom">
                    <img src="assets/img/frame-bottom-left.png" alt="" class="frame leftBottom">
                </div>
                <div class="news_text">Открыт доступ в локацию <b>Elbeland</b> - это новая фарм зона по аналогии с <b>Ruined Lorencia</b>. Там вы сможете найти стандартных мобов фарм зоны, нового босса для <b>Condor Shard</b> и несколько новых монстров. 
                    В дальнейшем локация продолжит пополняться новыми боссами и будет использоваться для прохождения квестов.
                     Вход в <b>Elbeland</b> вы сможете найти в Snowstorm <b>Devias</b>.</div>
                <div class="news_text">Пополнился список боссов с которых выпадает Shard of Condor, 
                    теперь он выглядит так: <b>Ruined Lorencia - Death Dealer, Rusthand
                     - Jungle Noria, Ice Warrior - Snowstorm Devias, Pharaoh - Elbeland,
                      Elder Dragon - Crywolf</b> и <b>Condor Beast</b> в <b>Swamp of Peace</b>. 
                      Время респауна боссов плавающее. Shards of Condor также 
                      можно получить выполняя 
                      <a style="color:#FFB247" href="https://forum.bless.gs/index.php?/topic/47429-%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F-%D0%B3%D0%B8%D0%BB%D1%8C%D0%B4%D0%B8%D0%B9/">
                        задания</a> гильдий.</div>
                <div class="news_text">На <b>Castle Siege</b> теперь будет три призовых места:
                     владельцы замка будут получать 60% от казны замка, второе место 30%, 
                     третье место 10% от казны. Помимо казны на сервере <b>Avalon</b> мы назначаем 
                     призовой фонд от администрации на сумму 5000$. Каждую осаду, до тех пор
                      пока призовой фонд не иссякнет, победитель будет получать 3000 бонусов, 
                      гильдия занявшая второе место 2000 бонусов, третье место 1000 бонусов. 
                      Также мы хотим внести ряд изменений, которые позволят большему количество 
                      игроков участвовать в осадах, 
                    поспособствую более регулярной смене владельцев замка и сделают само 
                    мероприятие более интересным и зрелищным.</div>
                    <div class="views"><span class="views_name">Просмотров:</span><span class="views_count">30020</span><span class="views_date">30.03.2023</span></div>
            </div>
        </div>
        <div class="news2">
            <div class="news2_inner">
                <span class="news_header">
                    Быстрый старт новичков
                </span>
                <p class="news_body">Наш сервер неуклонно развивается. 
                    Online с каждым днем растет, а сражения все 
                    приобретают большие масштабы. 
                    Вы только присоединились? А кому то нужны сильные
                     ребята в союзники?</p>
                <p class="news_body">
                    Помощь для новичков! 
                    Повышение опыта до 15 ресетов (0 гранд ресетов) = 
                    +500%Все новые созданные персонажи получат Seal of 
                    Ascension на 7 дней.
                </p>
                <p class="news_body">
                    Врывайся! Участвуй в событиях и охоте за boss, 
                    прояви себя создав свою команду или присоединись к существующей. Увеличь скорость достижения своих целей за счет x-shop. 
                    Окунись в по настоящему тот самый мир MuOnline 
                    который тебе понравился многие годы назад! 
                    Mukeeper - лучший выбор для Old Скул любителей 
                    MuOnline.
                </p>
                <div class="views"><span class="views_name">Просмотров:</span><span class="views_count">69383</span><span class="views_date">25.03.2023</span></div>
            </div>
        </div>
        
    </div>
    <div class="right_panel">
        <div class="profile">
            <div class="profile_header">Личный кабинет</div>
            <form action="">
            <input type="text" class="input" placeholder="Логин" name="login">
            <input type="password" class="input" placeholder="Пароль" name="password">
            <div class="bot_check">Решите пример: <br>2*3</div>
            <input type="text" class="input" placeholder="Ответ" name="answer">
            <input type="text" class="input" placeholder="Выберите сервер" name="server">
             <button type="submit" class="login_button">Войти</button>
            </form>
        </div>
        <div class="server_stat" id="servers">
            <div class="server_header">Статус сервера</div>
            <img src="assets/img/server_perehod.png" alt="" class="server_perehod" id="razdel">
            <div class="online_count" >Общий онлайн: <span class="online_count_value" id="online_sum">1268</span></div>
            <div class="online_count_today">Онлайн сегодня: <span class="online_count_value" id="online_tod">3347</span></div>
        </div>
        <div class="market">
            <div class="market_header">Рынок</div>
            <div  class="market_item" id="market_item1" 
            data-equip="Can be equipment by DW/DK/FE/MG/DL"
            data-desc="Maximum Life Increase 6%"
            data-cost="Камни:0<br>Decay Points: 42<br>Zen coins:0"
            data-name="Speed Sphere (Wind) +1">Speed Sphere (Wind) +1</div>
            <div  class="market_item" id="market_item2" >Speed Sphere (Water) +4</div>
            <div  class="market_item" id="market_item3" >Evis Bone Armeor +12</div>
            <div  class="market_item" id="market_item4" >Gywen Guardian Armor +13</div>
            <div  class="market_item" id="market_item5" >Agnis Adamantine Pants +13</div>
            <button class="market_button">Войти на рынок</button>
        </div>
        <div class="top" id="top">
            <div class="top_header">Топ 5 игроков</div>
            <table id="table_top">
                <tr style="background: none;"><th></th><th>Имя</th><th>Сбрасываний</th><th>Уровень</th></tr>
                <tr id="n1"><td style="position:relative;"><img src="assets/img/top_line.png" alt="" class="frame_td"></td><td class="name">dsd</td><td class="reset">34</td><td class="level">31</td></tr>
                <tr id="n2"><td style="position:relative;"><img src="assets/img/top_line.png" alt="" class="frame_td"></td><td class="name">fsdf</td><td class="reset">43</td><td class="level">31</td></tr>
                <tr id="n3"><td style="position:relative;"><img src="assets/img/top_line.png" alt="" class="frame_td"></td><td class="name">fsdffsd</td><td class="reset">221</td><td class="level">31</td></tr>
                <tr id="n4"><td style="position:relative;"><img src="assets/img/top_line.png" alt="" class="frame_td"></td><td class="name">fsdf</td><td class="reset">221</td><td class="level">31</td></tr>
                <tr id="n5"><td style="position:relative;"><img src="assets/img/top_line.png" alt="" class="frame_td"></td><td class="name">fs</td><td class="reset">221</td><td class="level">31</td></tr>
            </table>
            <select id="server_choose" >
                
               </select>
        </div>
        <div class="events" id="events">
            <div class="events_header">Ивенты</div>
            <table id="table_events">
                </table>
            
        </div>
    </div>
       </div>
    <div class="footer_cont" ></div>
    </div>
   
</body>
<script>
//     window.onload = function() {
    
//     let iframeName = document.getElementById("youtube");
//     let iframeContent = iframeName.contentWindow.document;
//     console.log(iframeContent);
//    // iframeName.contentWindow.document.body.innerHTML = iframeName.contentWindow.document.body.innerHTML + "<style>.ytp-button{width: 10vw!important;left: 0!important;right: 0!important;top: 0!important;bottom: 0!important;margin: auto!important;}</style>";
// }
    ///////////////////////////////////////////////////скроллинг скриншотов
    let right2Btn = document.getElementById('right2');
    let left2Btn = document.getElementById('left2');
    let screen_container = document.querySelector('.screen_container');
    let screen_cont_width = screen_container.offsetWidth;

    right2.addEventListener('click', function(){
        screen_container.scrollLeft+=screen_cont_width;
    })
    left2.addEventListener('click', function(){
        screen_container.scrollLeft+=(-screen_cont_width);
    })
    //////////////////////////////////////закрыть скриншоот
    var close = document.getElementById('screen_close');
    var modalB = document.getElementById('modal_screen_back');
    close.addEventListener('click', function(){
        modalB.style.display='none';
    });
        //////////////////////////////////////открыть скриншоот
        
     var screen = document.getElementsByClassName('screen_img');
     for(let i=0; i<screen.length; i++){
        
     screen[i].addEventListener('click', function(){
        next(i)
     });

}
////////////////////////////////функция кнопки слайда влево
var leftBtn = document.getElementById('slide_left');

leftBtn.addEventListener('click', function(){
     var leftBtnData = leftBtn.getAttribute('data-next');
     switch (true) {
        case leftBtnData==0: next(screen.length); break;
        default: next(leftBtnData*1); break;
    }
})
////////////////////////////////функция кнопки слайда вправо
var rightBtn = document.getElementById('slide_right');

rightBtn.addEventListener('click', function(){
    var rightBtnData = rightBtn.getAttribute('data-next');
    switch (true) {
        case rightBtnData==screen.length: next(0); break;
        default: next(rightBtnData*1); break;
    }
    });
////////////////////функция открытия
function next(ss){
        //alert(ss);
        let screens = document.getElementsByClassName('screen_img');
        let right = document.getElementById('slide_right');
        right.setAttribute('data-next', ss+1+'');
        let left = document.getElementById('slide_left');
        left.setAttribute('data-next', ss-1+'');
        let close = document.getElementById('screen_close');
        let src = screens[ss].getAttribute('src');
        modal_state=true;
        let modal = document.getElementById('modal_screenshot');
        let modalBack = document.getElementById('modal_screen_back');
        modalBack.style.display = 'block';
        modal.style.backgroundImage = 'url(\''+src+'\')';
        if(window.innerHeight>window.innerWidth){
        left.style.left = '2vw';
        right.style.right = '2vw';
        close.style.bottom = '20vh';
        modal.style.height = '50vw';
        modal.style.width = '68.5vw';
            }else{
                modal.style.height = '60vh';
                modal.style.width = '82.2vh';
            }
     }
    ////////////////////////////////////////
    var proshlo = 0;
    var timelist = Math.round(Date.now()/1000);;
    ////////////////////////////////////////// подсказка по рынку
    var elements = document.querySelectorAll(".market_item");
for (let i = 0; i < elements.length; i++) {
    
  elements[i].onmousemove = function(event){
    const wi = window.innerWidth;
    const hi = window.innerHeight;
    const x = event.clientX; 
  const y = event.clientY;
  
  var modal = document.getElementById('modal_market_detail');
   let data_name=this.getAttribute('data-name');
   let data_equip=this.getAttribute('data-equip');
   let data_desc=this.getAttribute('data-desc');
   let data_cost=this.getAttribute('data-cost');
   document.getElementById('desc_name').textContent=data_name;
   document.getElementById('desc_equip').textContent=data_equip;
   document.getElementById('desc2').textContent=data_desc;
   document.getElementById('cost2').innerHTML=data_cost;
   modal.style.display ='block';
   if((hi-y)<modal.offsetHeight){
    modal.style.bottom = (hi-y)+'px';
    modal.style.removeProperty('top');
}else{
    modal.style.top =y+'px';
    modal.style.removeProperty('bottom');
}
//    if(x<modal.offsetWidth){alert('1'); modal.style.left =x+'px';}else{modal.style.right =(wi-x)+'px';}
   
   modal.style.right =(wi-x)+'px';

  };
  elements[i].onmouseout = function(e){
    document.getElementById('modal_market_detail').style.display ='none';
  }

}
//////////////
    ///////////////////////////////////запрос статистики
let xhr = new XMLHttpRequest();
xhr.open('GET', 'server.php');
xhr.send();
xhr.onload = function() {
    
  if (xhr.status != 200) { 
    alert(`Ошибка`); 
  } else { 
    let resp = JSON.parse(xhr.response);
    let servers = resp.servers;
    // console.log(servers);
    let server_count = servers.length;
    // console.log(resp);
    var onlineSum=0;
    for(i=0; i<server_count; i++){
        ///////////////////////////// Добавляем сервера в статистику нагрузки
        var parent = document.getElementById('servers');
        var el = document.createElement('div');
         el.className = 'server';
         el.innerHTML =servers[i].langs.name+'<span class="value">'+servers[i].online+'</span><div class="scale"><div class="scale_back"></div></div><img src="assets/img/frame_server_left.png" alt="" class="frame_left"><img src="assets/img/frame_server_right.png" alt="" class="frame_right">';
         let proc = servers[i].online*100/servers[i].onlineMax;
         if(proc>100){proc=100;}
         onlineSum+=servers[i].online;
         let elBefore = document.getElementById('razdel');
         parent.insertBefore(el, elBefore);
         let scale = el.querySelector('.scale_back');
          scale.style.width = proc+'%';
          ///////////////////добавляем сервера в список выбора Топа
          let parent2 = document.getElementById('server_choose');
          var el2 = document.createElement('option');
          el2.className="top_option";
          el2.value=i;
          el2.textContent=servers[i].langs.name;
          el2.setAttribute('data-num', i);
          parent2.appendChild(el2);
         }
         ////////////////////////////функция выбора сервера для топа и вставка данных
         let servChoose = document.getElementById('server_choose');
         
         
         function choose(){
           
            let val= servChoose.value;
            let arTop = servers[val].top;
            let tabl = document.getElementById('table_top');
            for(j=0; j<=4; j++){
            let tr = tabl.querySelector('#n'+(j+1));
            let name = tr.querySelector('.name');
            let reset = tr.querySelector('.reset');
            let level = tr.querySelector('.level');
            name.textContent= arTop[j].name;    
            reset.textContent= arTop[j].resets;
            level.textContent= arTop[j].level;
            }
        }
        choose();/////////вызов функции при загрузке
        servChoose.onchange= choose;////////////при выборе
    document.getElementById('online_sum').textContent=onlineSum;
  }
};

/////////////////формат времеи
function pad2(num) {
    var s = num.toString();
    return (s.length < 2)? "0" + s : s;
}
/////////////////////////////////// запрос ивентов
var arrSort = [];
function event(){
timelist = Math.round(Date.now()/1000);
let xhr3 = new XMLHttpRequest();
xhr3.open('GET', 'https://xmu.md/ru/api/eventTime');
xhr3.send();
xhr3.onload = function() {
    
  if (xhr3.status != 200) { 
    alert(`Ошибка`); 
  } else { 
    let resp3 = JSON.parse(xhr3.response);
    
    let arEvents = resp3.allEvents;
    
    let parent3 = document.getElementById('table_events');
    parent3.innerHTML='';
    // console.log(arEvents);
    var mintime=9999999999;
    var mintimename = '';
    for(ev in arEvents){
        if(arEvents[ev].startSeconds*1<mintime){mintimename=ev; mintime=arEvents[ev].startSeconds*1;}
        
        let startTime = new Date(arEvents[ev].date);
        var hour;
        var min;
        if(startTime.getHours()*1<10){hour = '0'+startTime.getHours()}else{var hour = startTime.getHours()}
        if(startTime.getMinutes()<10){min = '0'+startTime.getMinutes()}else{var min = startTime.getMinutes()}
        startTime=hour+':'+min;
        
        var el3 = document.createElement('tr');
          el3.innerHTML='<td ><img src="assets/img/top_line.png" alt="" class="frame_td"><span class="name">'+ev+'</span><br><span >начнется через</span></td><td class="time1">'+startTime+'<p class="time"></p><p class="timeto" data-timeto="'+arEvents[ev].startSeconds+'">'+arEvents[ev].startSeconds+'</p></td>';
          parent3.appendChild(el3);
        
    }
     //////////////////////////////  сортировка ивентов
    
    var arEvents1 = {}; // новый пустой объект

for (let key in arEvents) {
    arEvents1[key] = arEvents[key];
}

    arrLength = Object.keys(arEvents1).length;
     arrSort = [];
    for(k=0; k<arrLength; k++){
        var mint = 999999999;
        var minname='';
        for(ev in arEvents1){
           
        if(arEvents1[ev].startSeconds*1<mint){
        minname=ev;
        mint=arEvents1[ev].startSeconds*1;
        
        }
        
    }
    arrSort.push(minname);
    delete arEvents1[minname];
       
    }
    //console.log(arEvents1);
    //  console.log(arEvents); 
    ////////////////////////// Вставляем первое событие в баннер
    var bannerfn = function(num){
        // let timer = localStorage.getItem('timer')*1;
    var banner = document.getElementsByClassName('banner')[0];
    var bannertop = banner.querySelector('.banner_top');
    var bannerstart = banner.querySelector('#startTime');
    bannertop.innerHTML="EVENT<br>"+arEvents[arrSort[num]].data.name;
    let seconds = arEvents[arrSort[num]].startSeconds-proshlo;
    var day = Math.floor(seconds/84600);
    var m = Math.floor(seconds / 60);
    var s = seconds % 60;
    var h = Math.floor(m / 60);
    m = m % 60;
    var result = pad2(day)+':'+pad2(h)+':'+pad2(m)+':'+pad2(s);
    // banner.style.backgroundImage = 'url(\'assets/img/'+arEvents[arrSort[num]].data.name+'.png\')';
    banner.style.backgroundSize = 'cover';
    banner.setAttribute('data-num', num);
    banImg = document.getElementById('bannerImg');
    banImg.setAttribute('src', 'assets/img/'+arEvents[arrSort[num]].data.name+'.png');
    bannerstart.textContent= result;   
    bannerstart.setAttribute('data-timeto', seconds);
    }
    bannerfn(0);
  

    var lbtn = document.getElementById('bleft');
    var rbtn = document.getElementById('bright');
    lbtn.addEventListener('click', function (){
        var banner = document.getElementsByClassName('banner')[0];
        var num = banner.getAttribute('data-num')*1;
        bannerfn(num-1);
    });
    rbtn.addEventListener('click', function (){
        var banner = document.getElementsByClassName('banner')[0];
        var num = banner.getAttribute('data-num')*1;
        bannerfn(num+1);
    });
  }
};
}  
    event();


////////////////////////////счетчик времени

// localStorage.setItem('timer','0');
function countdown(){
    // let timer = localStorage.getItem('timer')*1;
    let curTime = Math.round(Date.now()/1000);
    proshlo = curTime - timelist;
    // localStorage.setItem('timer', timer);
    let timetoar = document.querySelectorAll('.timeto,#startTime');
    for(i=0; i<timetoar.length; i++){
        let elem = timetoar[i];
        timeost = ((elem.getAttribute('data-timeto'))*1)-proshlo;
        if(timeost<=0||elem.textContent=='началось'){elem.textContent='началось'; event()}else{
            var m = Math.floor(timeost / 60);
            var day = Math.floor(timeost/84600);

var s = timeost % 60;
var h = Math.floor(m / 60);
m = m % 60;
var result = pad2(day)+':'+ pad2(h)+':'+pad2(m)+':'+pad2(s);
            //elem.setAttribute('data-timeto', timeost);
            elem.textContent=result;
        }
    }
}
setInterval(countdown, 1000);
</script>
</html>