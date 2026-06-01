<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy - 管理画面</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        header {
            background-color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
        }
        header h1 {
            color: #d63384;
            margin: 0;
            font-family: 'Georgia', serif;
            font-size: 28px;
        }
        .header-buttons {
            display: flex;
            gap: 15px;
        }
        .btn-header {
            padding: 8px 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            font-size: 14px;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        /* ダッシュボードカード */
        .dashboard {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            flex: 1;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            text-align: center;
        }
        .card-title {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .card-value {
            font-size: 32px;
            font-weight: bold;
            color: #333;
        }
        .card-value span {
            font-size: 16px;
            font-weight: normal;
            margin-left: 5px;
        }
        /* 検索とデータ追加ボタン */
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-add {
            background: linear-gradient(to right, #8a4fff, #ff76be);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
        }
        /* テーブルスタイル */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #fafafa;
            color: #666;
            font-weight: normal;
        }
    </style>
</head>
<body>

    <header>
        <h1>PiGLy</h1>
        <div class="header-buttons">
            <button class="btn-header">⚙️ 目標体重設定</button>
            <form action="/logout" method="POST" style="margin:0;">
                @csrf
                <button type="submit" class="btn-header">🚪 ログアウト</button>
            </form>
        </div>
    </header>

    <div class="container">
        <div class="dashboard">
            <div class="card">
                <div class="card-title">目標体重</div>
                <div class="card-value">45.0<span>kg</span></div>
            </div>
            <div class="card">
                <div class="card-title">目標まで</div>
                <div class="card-value">-1.5<span>kg</span></div>
            </div>
            <div class="card">
                <div class="card-title">最新の体重</div>
                <div class="card-value">46.5<span>kg</span></div>
            </div>
        </div>

        <div class="actions">
            <div>
                <input type="date" style="padding: 8px; border: 1px solid #ddd; border-radius: 6px;"> 〜 
                <input type="date" style="padding: 8px; border: 1px solid #ddd; border-radius: 6px;">
                <button style="padding: 8px 16px; background-color: #666; color: white; border: none; border-radius: 6px; margin-left: 10px;">検索</button>
            </div>
            <button class="btn-add">データ追加</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2026/06/01</td>
                    <td>46.5kg</td>
                    <td>1200kcal</td>
                    <td>00:15</td>
                    <td>✏️</td>
                </tr>
                <tr>
                    <td>2026/05/31</td>
                    <td>46.8kg</td>
                    <td>1350kcal</td>
                    <td>00:30</td>
                    <td>✏️</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>