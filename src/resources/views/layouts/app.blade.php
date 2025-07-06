<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'アプリケーション')</title>
    
    <!-- 共通CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }
        
        /* ヘッダースタイル */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        
        .nav {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .nav a:hover {
            background-color: rgba(255,255,255,0.1);
        }
        
        /* メインコンテンツエリア */
        .main-content {
            min-height: calc(100vh - 140px);
            padding: 2rem 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* フッタースタイル */
        .footer {
            background: #333;
            color: white;
            padding: 2rem 0;
            margin-top: auto;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            color: #667eea;
        }
        
        .footer-section p, .footer-section a {
            color: #ccc;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .footer-section a:hover {
            color: #667eea;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #555;
            margin-top: 2rem;
        }
        
        /* ユーティリティクラス */
        .btn {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin: 10px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background: #6c757d;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .text-center {
            text-align: center;
        }
        
        .mb-2 {
            margin-bottom: 1rem;
        }
        
        .mb-3 {
            margin-bottom: 1.5rem;
        }
        
        /* レスポンシブデザイン */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- ヘッダー -->
    @include('layouts.header')
    
    <!-- メインコンテンツ -->
    <main class="main-content">
        @yield('content')
    </main>
    
    <!-- フッター -->
    @include('layouts.footer')
    
    <!-- 共通JavaScript -->
    <script>
        // CSRFトークンをAjaxリクエストに含める
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html> 