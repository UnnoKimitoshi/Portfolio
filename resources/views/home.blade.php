@extends("layouts.layout")
@section("content")
<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Unity魂</div>
        <img src="images/UnityDamacy.png" alt="" style="width:100%">
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
                球を操作してオブジェクトを吸収して大きくするゲームです。
                プレイヤーが操作する球をBlenderで作成し、
                ランキング機能のサーバーをlaravelで作成しました。
            </div>
            <br>
            <div><a href="{{route('Unity_Damacy')}}">>>ゲームページ</a></div>
            <div>
                <a href="https://github.com/UnnoKimitoshi/UnityDamacy">
                    >>ソースコード(github)
                </a>
            </div>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Web作成</div>
        <img src="https://placeimg.com/900/500/any" alt="" style="width:100%">
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
                この頃より本格的にプログラマーとしての就職を考えるようになり求人が多く、
                また、ポートフォリオの提示場所も兼ねてWeb系の勉強を始めました。<br>
                &emsp;このサイトはLaravelで作成しAmazon EC2インスタンスにデプロイしています。
            </div>
            <br>
            <div>
                <a href="https://github.com/UnnoKimitoshi/Portfolio">
                    >>このページのソースコード(github)
                </a>
            </div>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・Otaku Database（画面右上）</div>
        <img src="images/otakuDatabase.gif" alt="" style="width:100%">
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
                作品フォルダをドラッグ＆ドロップするとデータベースに登録され、
                そこに作品情報のリンクをドラッグ＆ドロップすると
                作成サークル、声優、ジャンルがタグとしてデータベースに登録されます。
                タグはウィンドウ左部で作品を絞り込むのに使えます。<br>
                &emsp;ゲーム以外のソフトを作りたいと思い作成しました。
            </div>
            <br>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">・BlenderでのCG作成</div>
        <img src="images/CG.png" alt="" style="width:100%">
        <video class="box-video" controls src="videos/CGmatome.mp4" width="100%"></video>
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
                CG作成もゲーム作成に役に立つのではないかと思い、BlenderでCGの作成を始めました。
                好きな自然や風景と当時見ていたVtuberのCGをフルスクラッチで作成しました。
                CGだけどアニメっぽいという所にこだわりました。
            </div>
        </div>
    </div>
</div>

<div class="box row">
    <div class="col-lg-6">
        <div class="box-title">Unityでのゲーム作成</div>
        <img src="images/games.png" alt="" style="width:100%">
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
                オリジナルのゲームを作りたいと思い、Unityでゲーム作成を始めました。
                チュートリアルレベルのものばかりですが、画像右の
                「数独」と「マインスイパー」とを組み合わせそこに「お絵かきロジック」式の
                ヒントを加えたパズルはオリジナリティのあるものだったと思います。
                しかしながら問題を解いていく中で途中から作業感が出てしまい、オリジナリティがありかつ、
                面白いゲームを作ることの難しさを実感しました。
            </div>
        </div>
    </div>
</div>
@endsection