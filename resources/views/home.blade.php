<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - Home</title>
    <link rel="stylesheet" href="{{ asset('homestyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">AI <span>Frontier</span></a>
                <div class="nav-links">
                    <a href="{{ route('home') }}" class="active">Trang chủ</a>
                    <a href="">Bài viết</a>
                    <a href="">Giới thiệu</a>
                    <a href="">Liên hệ</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to AI Frontier</h1>
            <p>“Chia sẻ kiến thức, xu hướng và góc nhìn về AI.”</p>
            <a href="/blog" class="btn btn-primary">Browse Articles</a>
        </div>
    </section>

    <!-- Featured Posts -->

    <div class="container">
        <h2 class="section-title">Bài Viết Nổi Bật</h2>
        @foreach ($post as $postItem)
            <div class="featured-posts">
                <!-- Post 1 -->
                <div class="post-card">
                    <div class="post-image">
                        <img src="img/{{ $postItem->image }}" alt="Trí tuệ nhân tạo">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span> {{ $postItem->created_at }} </span>
                        </div>
                        <h3 class="post-title"> {{ $postItem->title }} </h3>
                        <p class="post-excerpt">{{ Str::limit($postItem->description, 100) }}...
                        </p>
                        <a href="{{ route('fullpost', $postItem->id) }}" class="read-more">Đọc tiếp →</a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-card">
                    <div class="post-image">
                        <img src="img/{{ $postItem->image }}" alt="Trí tuệ nhân tạo">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span> {{ $postItem->created_at }} </span>
                        </div>
                        <h3 class="post-title"> {{ $postItem->title }} </h3>
                        <p class="post-excerpt">{{ Str::limit($postItem->description, 100) }}...
                        </p>
                        <a href="{{ route('fullpost', $postItem->id) }}" class="read-more">Đọc tiếp →</a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post-card">
                    <div class="post-image">
                        <img src="img/{{ $postItem->image }}" alt="Trí tuệ nhân tạo">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span> {{ $postItem->created_at }} </span>
                        </div>
                        <h3 class="post-title"> {{ $postItem->title }} </h3>
                        <p class="post-excerpt">{{ Str::limit($postItem->description, 100) }}...
                        </p>
                        <a href="{{ route('fullpost', $postItem->id) }}" class="read-more">Đọc tiếp →</a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Categories -->
        <h2 class="section-title">Danh mục</h2>
        <div class="categories">
            <a href="/category/laravel" class="category-tag">Trí tuệ nhân tạo</a>
            <a href="/category/php" class="category-tag">Machine learning</a>
            <a href="/category/javascript" class="category-tag">Deep Learning</a>
            <a href="/category/vue" class="category-tag">Xử lý ngôn ngữ tự nhiên NLP</a>
            <a href="/category/tailwind" class="category-tag">Khoa học dữ liệu</a>
            <a href="/category/testing" class="category-tag">Ứng dụng AI</a>
            <a href="/category/deployment" class="category-tag">Đạo đức trong AI</a>
            <a href="/category/performance" class="category-tag">Xu hướng công nghệ</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About AI Frontier</h3>
                    <p>Một blog dành riêng cho trí tuệ nhân tạo và công nghệ hiện đại.
                        Chúng tôi chia sẻ kiến thức, hướng dẫn và góc nhìn về AI,
                        từ học máy, học sâu đến các ứng dụng thực tế trong đời sống.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Liên kết nhanh</h3>
                    <ul class="footer-links">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/blog">Bài viết</a></li>
                        <li><a href="/about">Về chung tôi</a></li>
                        <li><a href="/contact">Liên hệ</a></li>
                        <li><a href="/privacy">Chính sách bảo mật</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Danh mục</h3>
                    <ul class="footer-links">
                        <li><a href="/category/laravel">Trí tuệ nhân tạo</a></li>
                        <li><a href="/category/php">Học máy(Machine Learning)</a></li>
                        <li><a href="/category/javascript">Học sâu(Deep Learning)</a></li>
                        <li><a href="/category/vue">Ứng dụng AI</a></li>
                        <li><a href="/category/testing">Đạo đức trong AI</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 AI Frontier. All rights reserved. Built with Laravel.</p>
            </div>
        </div>
    </footer>
</body>

</html>
