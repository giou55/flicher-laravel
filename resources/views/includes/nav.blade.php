<nav class="bg-white">
    <div class="container">

        <div  class="d-flex justify-content-center align-items-center" id="navbar1">

            @if(Route::is('home') )
                <div class="arrow-svg d-none d-xl-block" aria-hidden="true">
                    <a href="/blog">
                        <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="latest-feed-title-arrow-desc">
                            <title id="latest-feed-title-arrow-desc">The Feed</title>
                            <path class="desktop-feed-arrow-background-fill" d="M331.9 223.7s39.7-1.2 64.7-1.2c4.7 0 3.9 3.9 1 7.1-7.8 8.5-170.6 151.2-190.8 169.6-1.2 1.1-2.2 1.1-3.6-.2-18-16.7-184.5-161.9-192.2-170.4-2.3-2.5-.3-6.3 3.3-6.3 42.1 0 65.1-.1 65.1-.1v-98.6C79.3 35.5 123 6.3 180 6.3h179.1c21.7 0 24.6 19.7 24.6 19.7h-17.2c-20.2 0-34.5 31.1-34.5 82.3-.1 12.4-.1 115.4-.1 115.4z" fill="#231f20"></path>
                            <path class="desktop-feed-arrow-main-fill" d="M322 216.2h64.7c4.7 0 4 3.7 1.2 6.5-7.8 8.5-170.8 152-191 170.5-1.2 1.1-2.2 1.1-3.6-.2C175.2 376.3 8.8 231.1 1 222.7c-2.3-2.5-.3-6.3 3.3-6.3 42.1 0 65.1-.1 65.1-.1v-98.6C69.4 29.5 113.1.4 170 .4h188.8c21.7 0 24.8 21.9 24.8 25.7h-2.2c-.4-4.4-9.4-5.8-17.6-5.8-25.3 0-41.9 30.9-41.9 82.2.1 12.3.1 113.7.1 113.7z" fill="#00bff3"></path>
                            <path class="desktop-feed-arrow-text-fill" d="M143.1 165.6h-12.9c-1.7 0-3.1 1.3-3.1 3v31.3c0 1.7 1.5 3.1 3.1 3.1h9.3c1.7 0 3 1.3 3 3v6.1c0 1.7-1.3 3.1-3 3.1h-9.3c-1.7 0-3.1 1.5-3.1 3.1v49.8c0 1.7-1.3 3.1-3 3.1h-6.8c-1.7 0-3.1-1.5-3.1-3.1V156.4c0-1.7 1.5-3.1 3.1-3.1h25.8c1.7 0 3.1 1.5 3.1 3.1v6.1c.1 1.7-1.4 3.1-3.1 3.1zM184.6 271.3h-25.8c-1.7 0-3-1.5-3-3.1v-112c0-1.7 1.3-3 3-3h25.3c1.7 0 3 1.3 3 3v6.1c0 1.7-1.3 3.1-3 3.1h-12.4c-1.7 0-3 1.5-3 3.1v31.3c0 1.7 1.3 3.1 3 3.1h8.6c1.7 0 3.1 1.5 3.1 3.1v6.1c0 1.7-1.5 3-3.1 3h-8.6c-1.7 0-3 1.5-3 3.1V256c0 1.7 1.3 3 3 3h12.9c1.7 0 3.1 1.5 3.1 3.1v6.1c.1 1.7-1.4 3.1-3.1 3.1zM227.3 271.3h-25.8c-1.7 0-3-1.5-3-3.1v-112c0-1.7 1.3-3 3-3h25.3c1.7 0 3 1.3 3 3v6.1c0 1.7-1.3 3.1-3 3.1h-12.4c-1.7 0-3 1.5-3 3.1v31.3c0 1.7 1.3 3.1 3 3.1h8.6c1.7 0 3.1 1.5 3.1 3.1v6.1c0 1.7-1.5 3-3.1 3h-8.6c-1.7 0-3 1.5-3 3.1V256c0 1.7 1.3 3 3 3h12.9c1.7 0 3.1 1.5 3.1 3.1v6.1c.1 1.7-1.4 3.1-3.1 3.1zM259.7 271.3h-15.4c-1.8 0-3.1-1.3-3.1-3.1v-112c0-1.8 1.3-3 3.1-3h15.4c10.4 0 18.4 7.9 18.4 18.4v81.2c0 10.4-8 18.5-18.4 18.5zm5.5-99.7c0-3.1-1.8-6.1-5.5-6.1h-2.5c-1.8 0-3.1 1.3-3.1 3.1V256c0 1.8 1.3 3.1 3.1 3.1h2.5c3.6 0 5.5-3.1 5.5-6.3v-81.2zM178.4 107.2h-3.1c-.7 0-1.2.6-1.2 1.2v27c0 .7-.6 1.2-1.2 1.2h-2.7c-.7 0-1.2-.6-1.2-1.2v-27c0-.7-.6-1.2-1.2-1.2h-3.1c-.7 0-1.2-.5-1.2-1.2v-2.2c0-.7.5-1.2 1.2-1.2h13.7c.7 0 1.2.5 1.2 1.2v2.2c0 .7-.5 1.2-1.2 1.2zM201.2 136.7h-2.7c-.7 0-1.2-.6-1.2-1.2v-12.6c0-.7-.6-1.2-1.2-1.2h-3.2c-.7 0-1.2.5-1.2 1.2v12.6c0 .7-.6 1.2-1.2 1.2h-2.7c-.7 0-1.2-.6-1.2-1.2v-31.6c0-.7.6-1.2 1.2-1.2h2.7c.7 0 1.2.5 1.2 1.2v11.9c0 .7.5 1.2 1.2 1.2h3.2c.7 0 1.2-.6 1.2-1.2v-11.9c0-.7.5-1.2 1.2-1.2h2.7c.7 0 1.2.5 1.2 1.2v31.6c.1.6-.5 1.2-1.2 1.2zM224.1 136.7h-11.4c-.7 0-1.2-.6-1.2-1.2v-31.6c0-.7.5-1.2 1.2-1.2h11.1c.7 0 1.2.5 1.2 1.2v2.2c0 .7-.5 1.2-1.2 1.2h-5.9c-.7 0-1.2.6-1.2 1.2v6.6c0 .7.5 1.2 1.2 1.2h4.1c.7 0 1.2.6 1.2 1.2v2.1c0 .7-.5 1.2-1.2 1.2h-4.1c-.7 0-1.2.6-1.2 1.2v8.7c0 .7.5 1.2 1.2 1.2h6.2c.7 0 1.2.6 1.2 1.2v2.1c.1.9-.5 1.5-1.2 1.5z"></path>
                        </svg>
                    </a>
                </div>
            @endif

            <a href="/">TV</a>

            <div class="nav-divider"></div>
            
            <a href="/cinema">ΣΙΝΕΜΑ</a>

            <div class="nav-divider"></div>

            <a href="{{ route('posts', 'theater') }}">ΘΕΑΤΡΟ</a>

            <div class="nav-divider"></div>

            <a href="{{ route('posts', 'music') }}">ΜΟΥΣΙΚΗ</a>

            <div class="nav-divider"></div>

            <a href="{{ route('posts', 'youtube') }}">YOUTUBE</a>

            <div class="nav-divider"></div>

            <a href="{{ route('posts', 'books') }}">ΒΙΒΛΙΑ</a>

            <div class="nav-divider"></div>
            
            <a href="{{ route('posts', 'podcasts') }}">PODCASTS</a>
        </div>
    </div>
</nav>