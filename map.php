 <!--ここからmap-->
  <section id="map">
    <div class="map-line">
      <img src="<?php echo get_template_directory_uri();?>/img/line3.png" alt="">
    </div>



    <div class="map-mark-wrap">
      <div class="map-mark">
        <img src="<?php echo get_template_directory_uri();?>/img/left-mark.png" alt="">
      </div>
      <p class="map-index">　お気軽にご来院ください　</p>
      <div class="map-mark">
        <img src="<?php echo get_template_directory_uri();?>/img/right-mark.png" alt="">
      </div>
    </div>

    <div class="map-container">
      <div class="map-hours-wrap">
        <div class="map-left-wrapper">
          <p class="map-road">JR「秋葉原駅」より徒歩1分</p>
          <div class="map-adress">
            〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F
          </div>
          <div class="map-tel-wrapper">
            <p class="map-tel">tel:</p>
            <h2 class="map-number">03-1234-5678</h2>
          </div>
          <div class="map-table">
            <table class="map-border">
              <tr>
                <th scope="col" class="boader-radius1">営業時間</th>
                <th scope="col">月</th>
                <th scope="col">火</th>
                <th scope="col">水</th>
                <th scope="col">木</th>
                <th scope="col">金</th>
                <th scope="col">土</th>
                <th scope="col" class="boader-radius2">日</th>
              </tr>
              <tr>
                <th scope="row">9:00〜12:30</th>
                <td>●</td><td>●</td><td>-</td><td>●</td><td>●</td><td>●</td><td>●</td>
              </tr>
              <tr>
                <th scope="row" class="boader-radius4">15:30〜20:00</th><td>●</td><td>●</td><td>-</td><td>●</td><td>●</td><td>●</td><td class="boader-radius3">●</td>
              </tr>
            </table>
          </div>
          <div class="map-reserve">
            <a href="" class="map-reserve-text">ご予約・お問い合わせはこちらから</a>
          </div>
        </div>
        <div class="map-right-wrapper">
          <div class="map-map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0603948868707!2d139.77213797545738!3d35.70013137258106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea7ba1a054d%3A0x81605e8b12064e47!2z44CSMTAxLTAwMjIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw57e05aGA55S6MzAw55Wq5Zyw!5e0!3m2!1sja!2sjp!4v1692083137214!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    <div class="map-arrow-img">
      <a href="#" id="smooth-scroll-link">
        <img src="<?php echo get_template_directory_uri();?>/img/ar.svg" alt="">
      </a>
    </div>

  <script>
        // スムーズスクロールを実行するJavaScript(チャットGPTで検索した)
        document.getElementById('smooth-scroll-link').addEventListener('click', function(e) {
            e.preventDefault(); // リンクのデフォルトの挙動を無効にする
            // const targetElement = document.getElementById(<?php body_class(); ?>);
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

/*
$('#smooth-scroll-link').on("click", function () {
  $("body,html").stop().animate({
            scrollTop: 0,
        	});
          });
*/
    </script>

  </section>