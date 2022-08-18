<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- <h1 style="">食形態から選ぶ</h1>
    <p style="color:red">おはようございます</p> -->
        <section class="title_section">
            <h1>あてはまる項目を入れていこう！</h1>
        </section>

        <select name="foodform" required>
            <option value="">▼食形態について</option>
            <option>ペースト</option>
            <option>マッシュ</option>
            <option>きざみ</option>
            <option>ポタージュ</option>
        </select>

        <select name="category" required>
            <option value="">▼カテゴリを選んでください</option>
            <option>肉料理</option>
            <option>魚料理</option>
            <option>大豆・豆腐</option>
            <option>めん類</option>
            <option>ごはんもの</option>
            <option>サラダ</option>
            <option>スープ・汁物</option>
            <option>スイーツ</option>
        </select>
    </main>

</body>

</html>