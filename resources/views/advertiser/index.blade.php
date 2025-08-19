<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Advertiser - Kangru</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f8fafc; }
        .dashboard { display: flex; min-height: 100vh; }
        .sidebar { width: 280px; background: white; border-right: 1px solid #e2e8f0; display: flex; flex-direction: column; }
        .logo { padding: 24px; border-bottom: 1px solid #f1f5f9; }
        .logo h2 { color: #1a202c; font-size: 20px; font-weight: 600; display: flex; align-items: center; }
        .logo span { background: #10b981; color: white; padding: 4px 8px; border-radius: 6px; font-size: 12px; margin-left: 8px; }
        .nav-menu { flex: 1; padding: 16px 0; }
        .nav-item { padding: 12px 24px; color: #64748b; cursor: pointer; display: flex; align-items: center; transition: all 0.2s; }
        .nav-item.active { background: #eff6ff; color: #2563eb; border-right: 3px solid #2563eb; }
        .nav-item:hover { background: #f1f5f9; }
        .nav-icon { margin-right: 12px; font-size: 16px; }
        .logout { padding: 24px; border-top: 1px solid #f1f5f9; }
        .logout a { color: #ef4444; text-decoration: none; display: flex; align-items: center; transition: color 0.2s; }
        .logout a:hover { color: #dc2626; }
        .main-content { flex: 1; padding: 32px; overflow-y: auto; }
        .header { margin-bottom: 32px; }
        .header h1 { color: #1a202c; font-size: 28px; font-weight: 600; margin-bottom: 8px; }
        .header p { color: #64748b; font-size: 16px; }
        .alert { background: #dcfce7; color: #16a34a; padding: 12px 16px; border-radius: 8px; margin-bottom: 24px; border: 1px solid #bbf7d0; }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 32px; }
        .stat-card { background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .stat-header { display: flex; justify-content: space-between; align-items: flex-start; }
        .stat-info h3 { color: #64748b; font-size: 14px; font-weight: 500; margin-bottom: 8px; }
        .stat-info .value { color: #1a202c; font-size: 32px; font-weight: 700; }
        .stat-icon { width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 18px; }
        .icon-blue { background: #dbeafe; color: #2563eb; }
        .icon-green { background: #dcfce7; color: #16a34a; }
        .icon-purple { background: #f3e8ff; color: #9333ea; }
        .icon-orange { background: #fed7aa; color: #ea580c; }
        .content-grid { display: grid; grid-template-columns: 1fr 400px; gap: 32px; margin-bottom: 32px; }
        .card { background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .card-title { color: #1a202c; font-size: 18px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; }
        .metric { display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9; }
        .metric:last-child { border-bottom: none; }
        .metric-label { color: #64748b; font-size: 14px; }
        .metric-value { color: #1a202c; font-weight: 600; font-size: 16px; }
        .action-btn { width: 100%; padding: 16px; background: #06b6d4; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; margin-bottom: 16px; transition: background 0.2s; }
        .action-btn:hover { background: #0891b2; }
        .action-link { display: block; padding: 12px 16px; color: #64748b; text-decoration: none; border-radius: 6px; margin-bottom: 8px; transition: background 0.2s; }
        .action-link:hover { background: #f1f5f9; color: #1a202c; }
        .table-container { background: white; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .table-title { color: #1a202c; font-size: 18px; font-weight: 600; margin-bottom: 16px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th { padding: 12px; text-align: left; border-bottom: 2px solid #e2e8f0; background: #f8fafc; color: #374151; font-weight: 600; }
        .table td { padding: 12px; border-bottom: 1px solid #f1f5f9; }
        .table tr:hover { background: #f8fafc; }
        .table img { width: 60px; height: 60px; object-fit: cover; border-radius: 6px; }
        .action-links a { color: #2563eb; text-decoration: none; margin-right: 12px; font-size: 14px; }
        .action-links a:hover { text-decoration: underline; }
        .action-links a.edit { color: #16a34a; }
        .action-links a.delete { color: #dc2626; }
        .empty-state { padding: 48px 24px; text-align: center; color: #64748b; }
        .empty-state a { color: #2563eb; text-decoration: none; }
        .empty-state a:hover { text-decoration: underline; }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">
                <h2>📊 Dashboard <span>Advertiser</span></h2>
            </div>
            <div class="nav-menu">
                <div class="nav-item active">
                    <span class="nav-icon">📊</span> Overview
                </div>
                <div class="nav-item">
                    <span class="nav-icon">📋</span> Kelola Iklan
                </div>
                <div class="nav-item">
                    <span class="nav-icon">➕</span> Buat Iklan
                </div>
                <div class="nav-item">
                    <span class="nav-icon">📈</span> Analytics
                </div>
                <div class="nav-item">
                    <span class="nav-icon">⚙️</span> Pengaturan
                </div>
            </div>
            <div class="logout">
                <a href="{{ route('auth.logout') }}">🚪 Logout</a>
            </div>
        </div>
        
        <div class="main-content">
            <div class="header">
                <h1>Dashboard Advertiser</h1>
                <p>Kelola iklan Anda dan pantau performansy di platform Kangru</p>
            </div>
            
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-info">
                            <h3>Total Iklan</h3>
                            <div class="value">{{ $advertisements->count() }}</div>
                        </div>
                        <div class="stat-icon icon-blue">📢</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-info">
                            <h3>Iklan Aktif</h3>
                            <div class="value">{{ $advertisements->count() }}</div>
                        </div>
                        <div class="stat-icon icon-green">📈</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-info">
                            <h3>Total Views</h3>
                            <div class="value">3,550</div>
                        </div>
                        <div class="stat-icon icon-purple">👁️</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-info">
                            <h3>Total Clicks</h3>
                            <div class="value">232</div>
                        </div>
                        <div class="stat-icon icon-orange">🖱️</div>
                    </div>
                </div>
            </div>
            
            <div class="content-grid">
                <div class="card">
                    <h2 class="card-title">📊 Performance Overview</h2>
                    <div class="metric">
                        <span class="metric-label">Click-through Rate</span>
                        <span class="metric-value">6.54%</span>
                    </div>
                    <div class="metric">
                        <span class="metric-label">Avg. Views per Ad</span>
                        <span class="metric-value">888</span>
                    </div>
                    <div class="metric">
                        <span class="metric-label">Avg. Clicks per Ad</span>
                        <span class="metric-value">58</span>
                    </div>
                </div>
                
                <div class="card">
                    <h2 class="card-title">⚡ Quick Actions</h2>
                    <button class="action-btn" onclick="window.location.href='{{ route('ad.create') }}'">
                        ➕ Buat Iklan Baru
                    </button>
                    <a href="#" class="action-link">Kelola Iklan</a>
                    <a href="#" class="action-link">Lihat Analytics</a>
                </div>
            </div>
            
            <div class="table-container">
                <h3 class="table-title">Your Advertisements</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($advertisements as $advertisement)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $advertisement->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/advertisement/' . $advertisement->hashid . '_' . $advertisement->image) }}"
                                        alt="{{ $advertisement->title }}">
                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($advertisement->description, 60, '...') }}</td>
                                <td>{{ $advertisement->category->category_name }}</td>
                                <td class="action-links">
                                    <a href="{{ route('ad.view', ['ad_id' => $advertisement->hashid]) }}">View</a>
                                    <a href="{{ route('ad.edit', ['ad_id' => $advertisement->hashid]) }}" class="edit">Edit</a>
                                    <a href="{{ route('ad.destroy', ['ad_id' => $advertisement->hashid]) }}" class="delete">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty-state">
                                    Anda belum membuat iklan! 
                                    <a href="{{ route('ad.create') }}">Buat iklan sekarang!</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>