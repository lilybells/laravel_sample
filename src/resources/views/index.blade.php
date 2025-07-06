@extends('layouts.app')

@section('title', 'ホーム - Laravel Docker アプリケーション')

@section('content')
<div class="container">
    <div class="card text-center">
        <h1 class="mb-3">🚀 Laravel Docker アプリケーション</h1>
        <p class="mb-3" style="font-size: 1.2em; color: #666;">
            Docker環境で動作するLaravelアプリケーションへようこそ！
        </p>
        
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin: 20px 0; border: 1px solid #c3e6cb;">
            ✅ アプリケーションが正常に動作しています
        </div>
    </div>

    <div class="card">
        <h2 class="text-center mb-3">技術スタック</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #667eea;">
                <h3>🐳 Docker</h3>
                <p>コンテナ化された開発環境で、一貫性のある開発体験を提供します。</p>
            </div>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #667eea;">
                <h3>⚡ Laravel</h3>
                <p>PHPの最高峰フレームワークで、高速で安全なWebアプリケーションを構築できます。</p>
            </div>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #667eea;">
                <h3>🗄️ MySQL</h3>
                <p>信頼性の高いリレーショナルデータベースで、データの永続化を実現します。</p>
            </div>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #667eea;">
                <h3>🌐 Nginx</h3>
                <p>高性能なWebサーバーで、高速なレスポンスを提供します。</p>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <h2 class="mb-3">クイックアクセス</h2>
        <div>
            <a href="http://localhost:8080" class="btn" target="_blank">phpMyAdmin を開く</a>
            <a href="/welcome" class="btn btn-secondary">元のWelcomeページ</a>
        </div>
    </div>
</div>
@endsection 