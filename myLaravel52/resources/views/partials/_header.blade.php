<div class="header-cointainer">
<div class="top-menu">
    <div id="logo">
        <img src="http://gogojungle.co.jp/wp-content/uploads/2016/04/logo_ggj1.png" alt="Logo View">
    </div>
    <div id="account">
        <ul>
            <li><a id="user-guide" href="url">会員登録(無料)</a></li>
            <li><a id="user-guide" href="url">ログイン</a></li>
            <li><a>|</a></li>
            <li><a id="user-guide" href="url">ご利用ガイド</a></li>
        </ul>
    </div>
</div>
<div class="middle-menu">
    <form class="common-search">
        <div class="search-form">
            <input type="text" class="search-input" placeholder="キーワードや商品番号から探す"/>
        </div>
    </form>
</div>
<div class="main-menu">
    <ul id = "menu_list">
        <li id="menu_1"><a href="url">シストレ</a></li>
        <li id="menu_2"><a href="url">インジケーター・電子書籍</a></li>
        <li id="menu_3"><a href="url">投資教育</a></li>
        <li id="menu_4"><a href="url">口座解説</a></li>
        <li id="menu_5"><a href="url">クラウドソーシング</a></li>
        <li id="menu_6"><a href="url">レビュー</a></li>
        <li id="menu_7"><a href="url">新着商品</a></li>
    </ul>
    <script>
        ul_width = document.getElementById("menu_list").offsetWidth;
        total_li_width = 0;
        
        var li_width = [];
        for (i=1; i<8; i++) {
            li_width[i] = document.getElementById("menu_" + i).offsetWidth;
            total_li_width = total_li_width + li_width[i];
        }
        scale = 1;
        if ( ul_width > total_li_width * scale) {
            diff = (ul_width - total_li_width * scale)/7;
        
            for (i=1; i<8; i++) {
                x = li_width[i] + diff;
                document.getElementById("menu_" + i).style.width = x.toString().concat("px");
            }
        }
    </script>
</div>
</div>