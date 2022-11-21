@extends("layouts.layout")
@section("title", "ポートフォリオ一覧")
@section("content")
<div class="box row">
    <div class="content">
        <div class="box-headline">・まえがき</div>
        <div class="box-text">
            ご覧いただきありがとうございます。<br>
            &emsp;これまでに作成したモノ、勉強したことを逆時系列順でまとめました。
        </div>
    </div>
</div>
<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Unity魂</div>
        <img class="box-image" src="images/UnityDamacy.png" alt="" width="100%">
        <video class="box-video" controls src="videos/katamari_demo.mp4" width="100%"></video>
    </div>
    <div class="box-body col-lg-6">
        <div class="box-content">
            <div class="box-headline">作成日</div>
            <div class="box-text">2022年秋頃～</div>
        </div>
        <div class="box-content">
            <div class="box-headline">使用技術</div>
            <div class="box-text">Unity, Laravel, Blender</div>
        </div>
        <div class="box-content">
            <div class="box-headline">説明</div>
            <div class="box-text">
                塊魂を参考にしてUnityでゲームを作りました。
                プレイヤーが操作する球をBlenderで作成し、
                ランキングのサーバーをlaravelで作成しました。
            </div>
        </div>
        <div class="box-content">
            <div class="box-headline">ゲーム内容、操作説明</div>
            <div class="box-text">
                モノを巻き込んで球を大きくしていくゲームです。巻き込めないモノも自身が大きくなれば巻き込めるようになります。<br>
                &emsp;キーボードのA,W,S,Dで球の操作、マウスでカメラの操作が行なえます。
                画面左下の歯車ボタンで音量調節、リロードボタンでリトライができます。<br>
                &emsp;右上のタイマーが0になる前に、左上のサイズが目標である5m以上になればゲームクリアです。<br>
                &emsp;ランキングで10位以内にランクイン出来れば、名前と共にスコアを保存することができます。
            </div>
        </div>
        <div><a href="{{route('Unity_Damacy')}}">>>ゲームページ（PC専用）</a></div>
        <div>
            <a href="https://github.com/UnnoKimitoshi/Unity_Damacy">
                >>自作したスクリプト(github)
            </a>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Webアプリ作成</div>
        <img class="box-image" src="images/web.jpg" alt="" style="width:100%">
    </div>
    <div class="box-body col-lg-6">
        <div class="box-content">
            <div class="box-headline">作成日</div>
            <div class="box-text">2022年夏頃～</div>
        </div>
        <div class="box-content">
            <div class="box-headline">使用技術</div>
            <div class="box-text">ASP.NET, Laravel, EC2</div>
        </div>
        <div class="box-content">
            <div class="box-headline">説明</div>
            <div class="box-text">
                幅広く活躍し需要の高いWebアプリを勉強したいと思い、作成しました。
                初めはASP.NETを勉強していたのですが、色々な面でコストが高いと思い
                Laravelを学び始めました。<br>
                &emsp;画像はASP.NETでECサイトのようなものを作成したときのものです。<br>
                &emsp;このサイトはLaravelで作成しAWS EC2インスタンスにデプロイしています。<br>
            </div>
            <div>
                <a href="https://github.com/UnnoKimitoshi/Portfolio">
                    >>このWebのソースコード(github)
                </a>
            </div>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Otaku Database（画像右上）</div>
        <img class="box-image" src="images/otakuDatabase.gif" alt="" style="width:100%">
    </div>
    <div class="box-body col-lg-6">
        <div class="box-content">
            <div class="box-headline">作成日</div>
            <div class="box-text">2022年頃～</div>
        </div>
        <div class="box-content">
            <div class="box-headline">使用技術</div>
            <div class="box-text">WPF</div>
        </div>
        <div class="box-content">
            <div class="box-headline">説明</div>
            <div class="box-text">
                同人作品を扱うサイト「DLsite」の商品をローカルで管理しやすくするアプリです。
                作品フォルダをドラッグ＆ドロップすると、データベースにファイル情報が登録され、
                そこに作品情報のリンクをドラッグ＆ドロップすると、スクレイピングが開始が始まり、
                制作サークル、声優、ジャンルがタグとしてデータベースに登録されます。
                タグはウィンドウ左部で作品を絞り込むのに使用します。<br>
            </div>
            <a href="https://github.com/UnnoKimitoshi/OtakuDatabase">
                >>ソースコード(github)
            </a>
            <br>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・BlenderでのCG作成</div>
        <video class="box-video" controls src="videos/CGmatome.mp4" poster="images/CG.png" width="100%"></video>
    </div>
    <div class="box-body col-lg-6">
        <div class="box-content">
            <div class="box-headline">作成日</div>
            <div class="box-text">2021年頃～</div>
        </div>
        <div class="box-content">
            <div class="box-headline">使用技術</div>
            <div class="box-text">Blender</div>
        </div>
        <div class="box-content">
            <div class="box-headline">説明</div>
            <div class="box-text">
                ゲーム表現が広がるのではないかと思い、BlenderでCGの作成を始めました。
                好きな自然や風景と当時見ていたVtuberのCGをフルスクラッチで作成しました。
                アニメっぽさにこだわりました。
            </div>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">Unityでのゲーム作成</div>
        <img class="box-image" src="images/games.png" alt="" style="width:100%">
    </div>
    <div class="box-body col-lg-6">
        <div class="box-content">
            <div class="box-headline">作成日</div>
            <div class="box-text">2020年頃～</div>
        </div>
        <div class="box-content">
            <div class="box-headline">使用技術</div>
            <div class="box-text">Unity</div>
        </div>
        <div class="box-content">
            <div class="box-headline">説明</div>
            <div class="box-text">
                オリジナルのゲームを作りたいと思い、Unityでゲーム作成を始めました。<br>
                &emsp;チュートリアルレベルのものばかりですが、画像右の
                数独とマインスイーパとを組み合わせた問題出題され、
                お絵かきロジック式のヒントをもとに解いていくパズルが一番印象に残っています。<br>
                &emsp;オリジナリティは出せたもののものの、問題を解いていく中で途中から作業感が出てしまい、
                オリジナリティがあり、かつ面白いゲームを作ることの難しさを実感しました。
            </div>
        </div>
    </div>
</div>
@endsection