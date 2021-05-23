<div class="container d-flex justify-content-between align-items-center">

    @include('includes.menu_popup')

    <div class="links d-none d-xl-block">
        <div><a href="{{ route('posts', 'san-simera') }}">Σαν σήμερα</a></div>
        <div class="separator"></div>
        <div><a href="{{ route('posts', 'skitso-tis-imeras') }}">Το σκίτσο της ημέρας</a></div>
        <div class="separator"></div>
        <div><a href="{{ route('posts', 'apopseis') }}">Απόψεις</a></div>
    </div>

    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo-title.png') }}" alt=""></a>
        <div class="caption">
            <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 739.2 115.8" xml:space="preserve">
                <path d="M693.6,61.6c0,0,6.9-4,17.2-7.4c13.7-4.5,28.6-6.9,28.6-6.9S710.7,29.7,676.2,28c-23.2-1.1-37.8,3.1-55.5,6.9 c-0.6-3.7-1.2-7-1.8-9.5c-2-9.4-8.2-14.4-22-12.6c-14.4,1.9-35.2,10.1-104,8.1c-81.1-2.4-141-18-221.8-20.2 c-82.8-2.3-140.7,13.4-140.7,13.4c-10.8,3.2-17.6,9.9-14.8,21.3c0.3,1.1,0.6,2.3,0.9,3.6c-10,4-20.3,7.6-37.6,9.1 c-33.8,2.9-55.2-11.1-55.2-11.1s5.4,13.3,10.6,22.9c5.3,9.6,11.3,18.8,11.3,18.8S41.1,86.1,28,91.1c-14,5.3-28,6.4-28,6.4 s28.9,20.8,69,18c40.4-2.8,50.7-14.7,87.4-21.7c37.4-7.1,44.8,6.5,57.4,1.3c10.5-4.4,7.9-15.6,1.8-25.6c-1.2-1.9-2.6-4.3-4.2-6.8 c17.9-1.4,39.3-2.2,64.7-1.6c91,1.8,135.5,19.5,212.6,21.4c16.1,0.4,30.6,0.3,43.4-0.2c0.9,4.8,1.8,8.9,2.6,11.5 c3,9.8,27.9,16.4,48,13.8c26.6-3.5,41.1-19.6,73.7-18.8c31.7,0.8,54.7,19.7,54.7,19.7s-3.9-12.8-7.7-23.2 C699.6,74.9,693.6,61.6,693.6,61.6z" fill="#231f20"></path><path d="M510.3,78.2c-6.6,0-13.4-0.1-20.2-0.3c-36.3-0.9-65.4-5.1-96.2-9.5c-34.2-4.9-69.5-10-117.6-11 c-5.4-0.1-10.7-0.2-15.7-0.2c-68.7,0-96,7.2-105.1,9.3c-8.9,2-14,4-15.5,9.8c-1,3.9,1.1,7.8,3.4,8.8c-2.2,0.2-5.3-1.4-8-4.7 c-2.6-3.2-4.2-6.5-6.8-14.3c-2.6-7.8-6.8-21.8-9.2-31.5c-0.8-3.1-3.1-12.4,12.3-17c0.4-0.1,51.5-12.8,123.8-12.8 c5.7,0,11.4,0.1,17.1,0.2c40.1,1.1,75.3,5.5,109.4,9.8c34.5,4.3,70.2,8.8,111.1,9.9c6.6,0.2,13.1,0.3,19.3,0.3 c52.4,0,74.6-6.5,82.7-7.8c12.1-2,18.5,0.3,20.4,9.4c2.1,9.7,5.2,27.6,6.6,36.8c1.1,7.3,1.2,13.9-1.7,19c-2.8,4.9-6.1,7.1-9.2,7.9 c1.6-1,3.5-2.3,5.2-5c1.7-2.7,2.4-7.8-1.4-10.7c-4.4-3.3-10.7-3-21.3-1.8C581.1,74.1,550,78.2,510.3,78.2z" fill="#1ebaed"></path><path d="M162.2 68.5c-.4.1-.7.1-1.1.2l6.6 12.6c.3-.1.7-.2 1-.3L162.2 68.5zM167 67.7c-.4.1-.7.1-1.1.2l6.2 11.9c.3-.1.7-.3 1-.4L167 67.7zM152.6 70.7c-.4.1-.7.2-1 .3l6.5 12.3c.4 0 .7-.1 1.1-.2L152.6 70.7zM148.3 72.5c-.5.3-.9.6-1.3 1l5.3 10.2c.6 0 1.2 0 1.8 0L148.3 72.5zM210.4 71.4c1.9.8 2.9 1.5 2.9 1.5s-5.4-8.2-6.8-10.2c0 0-.2 0-.6.1L210.4 71.4zM157.3 69.5c-.4.1-.7.2-1.1.2l6.7 12.8c.3 0 .5-.1.8-.1.1 0 .2-.1.3-.1L157.3 69.5zM144.9 77.4c0 .3-.1.5-.1.8.1 2.3 1.1 3.7 2.9 4.6L144.9 77.4zM191.8 64.2c-.4 0-.8.1-1.1.1l3.7 7c.4-.1.7-.2 1.1-.3L191.8 64.2zM196.9 63.7c-.4 0-.8.1-1.1.1l3.5 6.6c.4-.1.8-.1 1.1-.1L196.9 63.7zM171.9 66.9c-.4.1-.7.1-1.1.2l5.7 10.9c.3-.1.7-.3 1-.4L171.9 66.9zM201.9 63.2c-.4 0-.7.1-1.1.1l3.6 6.9c.5 0 .9.1 1.3.1L201.9 63.2zM176.9 66.1c-.4.1-.8.1-1.1.2l5.2 9.9c.3-.1.7-.3 1-.4L176.9 66.1zM181.8 65.4c-.4 0-.8.1-1.1.2l4.6 8.8c.3-.1.7-.3 1-.4L181.8 65.4zM186.8 64.8c-.4 0-.8.1-1.1.1l4.1 7.8c.3-.1.7-.2 1-.3L186.8 64.8zM164 86.3c-.7.2-1.5.5-2.2.7l.9 2.4c.8-.1 1.6-.2 2.3-.3L164 86.3zM150.2 89.6c-.8.1-1.6.1-2.4.2l.7 2c.7-.2 1.5-.3 2.3-.5L150.2 89.6zM154.9 88.9c-.8.2-1.5.3-2.3.4l.6 1.5c.8-.1 1.5-.3 2.3-.4L154.9 88.9zM159.5 87.7c-.7.2-1.5.4-2.2.6l.6 1.7c.8-.1 1.5-.2 2.3-.3L159.5 87.7zM139.2 88.7c-1.1-.4-2.2-.9-3.2-1.5l2.5 6.9c.8-.2 1.6-.4 2.4-.6L139.2 88.7zM145.2 89.7c-.2 0-.4 0-.6 0-.9-.1-1.7-.2-2.6-.3l1.3 3.5c.9-.2 1.8-.4 2.8-.6L145.2 89.7zM132.3 83.8c-3-3.5-5.3-8.5-7.7-15.5-1-2.9-4.6-15.6-7.3-25.1l-.1-.3c-1.3.5-2.6 1-3.9 1.5l18.9 51.4c1.3-.4 2.7-.8 4-1.2L132.3 83.8zM111.6 45.1c-1.3.5-2.6.9-3.9 1.4l18.9 51.3c1.3-.4 2.6-.9 4-1.3L111.6 45.1zM216.6 85.5c0-.1.1-.2.1-.4.2-2.9-.8-5.6-3-7.5L216.6 85.5zM120.7 99.7c1.3-.5 2.7-.9 4.1-1.4L105.9 47c-1.3.4-2.7.8-4.1 1.2L120.7 99.7zM210.3 75.6c-.8-.3-1.7-.6-2.7-.8l5.8 15.8c.7-.5 1.3-1 1.8-1.7L210.3 75.6zM204.9 74.5c-.1 0-.1 0-.2 0-.8 0-1.5 0-2.2 0l6.5 17.8c.7-.1 1.5-.3 2.2-.6L204.9 74.5zM199.9 74.7c-.8.1-1.5.2-2.3.4l6.3 17c.9.1 1.7.2 2.5.2L199.9 74.7zM168.5 84.7c-.7.3-1.4.5-2.1.8l1.3 3.4c.8-.1 1.6-.1 2.4-.2L168.5 84.7zM195.2 75.6c-.7.2-1.5.4-2.2.6l5.5 15c.9.2 1.8.3 2.6.5L195.2 75.6zM100.6 48.5c-1.3.3-2.7.7-4.2 1l19.1 52c.5-.2 1-.4 1.5-.5.8-.3 1.6-.6 2.5-.9L100.6 48.5zM95.6 49.7c-4.8 1-10.3 1.9-16.6 2.4-3.5.3-7.1.5-10.5.5-16.7 0-29.4-3.5-37.1-6.5 1.6 3.8 3.7 8.3 5.9 12.4 5.1 9.2 12 18.6 12.1 18.6l1.7 2.3-1.8 2.2c-.3.3-6.5 7.9-20.3 13.2-6.2 2.4-12 3.9-16.5 4.9 9.8 4.9 27.6 11.8 49.9 11.8 2.5 0 5-.1 7.5-.3 21.5-1.5 32.9-5.2 45-9.5L95.6 49.7zM172.9 83.1c-.7.3-1.4.5-2.2.8l1.7 4.7c.8 0 1.6-.1 2.4-.1L172.9 83.1zM177.4 81.6c-.7.2-1.4.5-2.2.7l2.3 6.2c.8 0 1.7 0 2.5.1L177.4 81.6zM186.3 78.4c-.7.2-1.4.5-2.1.8l3.7 10.1c.9.1 1.7.2 2.6.4L186.3 78.4zM190.7 76.9c-.7.2-1.4.5-2.2.7l4.6 12.5c.9.2 1.8.3 2.6.5L190.7 76.9zM181.8 80c-.7.3-1.4.5-2.1.8l2.9 8c.9.1 1.7.1 2.5.2L181.8 80zM550.2 88.1c-.8-.1-1.5-.2-2.3-.3l.8 12c.7.3 1.5.6 2.3.8L550.2 88.1zM555 88.9c-.7-.2-1.5-.3-2.3-.4l.9 12.9c.8.2 1.5.5 2.3.7L555 88.9zM569.4 92.4c-.8-.2-1.6-.4-2.3-.6l.8 12.1c.8.1 1.5.1 2.3.1L569.4 92.4zM559.8 90c-.8-.2-1.6-.4-2.3-.6 0 0 0 0 0 0l.9 13.1c.8.2 1.5.3 2.3.5L559.8 90zM543.9 97.6c.7.4 1.5.8 2.4 1.1l-.7-11.1c-.8 0-1.6 0-2.3.1L543.9 97.6zM564.6 91.2c-.8-.2-1.6-.4-2.3-.6l.9 12.8c.8.1 1.5.2 2.3.3L564.6 91.2zM623.4 84c-1.1 1.8-2.4 3.3-3.9 4.5l.2 3.3c1.4-.5 2.7-1 4.1-1.5L623.4 84zM615 93.7c.8-.3 1.6-.6 2.4-.9l-.2-2.5c-.8.5-1.6.9-2.3 1.3L615 93.7zM637.7 35.5c-1.4.3-2.8.6-4.2.9l3.4 50.4c1.4-.3 2.8-.5 4.2-.7L637.7 35.5zM626.3 38c-1.7.4-3.3.7-4.1.8l.3 4.6c1.2 6.8 2.9 16.4 3.2 18.5.9 5.8 1.7 12.9-.7 18.9l.6 8.9c1.3-.4 2.7-.9 4.1-1.3L626.3 38zM632.4 36.7c-1.4.3-2.8.6-4.2 1l3.4 50.4c1.4-.4 2.8-.7 4.2-1L632.4 36.7zM593.2 95.2c-.8 0-1.5 0-2.3 0l.5 6.9c.7-.2 1.5-.4 2.2-.6L593.2 95.2zM574.2 93.4c-.8-.2-1.6-.3-2.3-.5l.8 11.3c.8 0 1.5 0 2.3 0L574.2 93.4zM607.3 94c-.7.1-1.5.3-2.3.4l.2 3.1c.7-.3 1.5-.6 2.2-.8L607.3 94zM540.8 88.2c-1.2.4-2 1.1-2.2 2.1-.4 2.2.5 4 2.8 5.7L540.8 88.2zM597.9 95c-.8 0-1.5.1-2.3.1l.4 5.5c.7-.2 1.5-.5 2.2-.7L597.9 95zM612.5 92.7c-.5.2-1.1.4-1.6.5-.4.1-.8.2-1.2.3l.1 2.2c.5-.2.9-.3 1.4-.5.5-.2.9-.4 1.4-.5L612.5 92.7zM602.6 94.6c-.7.1-1.5.1-2.3.2l.3 4.2c.7-.3 1.5-.5 2.2-.8L602.6 94.6zM579 94.3c-.8-.1-1.6-.2-2.3-.4l.7 10.3c.8 0 1.5-.1 2.3-.1L579 94.3zM583.7 94.8c-.1 0-.1 0-.2 0-.7-.1-1.4-.2-2.1-.2l.6 9.3c.8-.1 1.5-.2 2.3-.3L583.7 94.8zM588.5 95.1c-.8 0-1.5-.1-2.3-.1l.6 8.2c.7-.2 1.5-.3 2.3-.5L588.5 95.1zM726.7 46.1c-9.9-5.3-28-13.1-49.8-14.2-2.3-.1-4.6-.2-6.9-.2-11.4 0-21.8 1.6-31.5 3.5l3.4 50.6c3.7-.5 7.6-.8 11.9-.8.9 0 1.8 0 2.7 0 20.6.5 37.5 7.8 47.2 13.2-1.3-3.6-2.8-7.7-4.3-11.7-3.8-10.2-11.5-27.3-11.5-27.3s11-5.1 21.6-8.6C716 48.7 722 47.2 726.7 46.1zM556.1 81c-.4 0-.7.1-1.1.1l.5 3.8c.4.1.7.2 1.1.2L556.1 81zM560.8 80.6c-.4 0-.7.1-1.1.1l.7 5.3c.4.1.7.2 1.1.3L560.8 80.6zM565.5 80.1c-.4 0-.7.1-1.1.1l.9 6.9c.4.1.7.2 1.1.2L565.5 80.1zM541.1 84c.3-.1.7-.2 1-.2l-.2-1.8c-.4 0-.7 0-1.1.1L541.1 84zM551.4 81.4c-.4 0-.7.1-1.1.1l.3 2.5c.4.1.7.1 1.1.2L551.4 81.4zM603 76.2c-.4 0-.7 0-1.1 0l1.8 13.8c.2-.1.4-.1.5-.1.2-.1.3-.1.5-.2L603 76.2zM570.1 79.6c-.4 0-.7.1-1.1.1l1.1 8.5c.4.1.7.1 1.1.2L570.1 79.6zM546.7 81.7c-.4 0-.7 0-1.1.1l.2 1.8c.4 0 .7 0 1.1 0L546.7 81.7zM584.2 78c-.4 0-.7.1-1.1.1l1.7 12.4c.4 0 .7.1 1.1.1L584.2 78zM612.5 84.2c.8-1.3 1.1-2.7.8-4.2-.2-1-.8-1.8-1.7-2.3L612.5 84.2zM607.8 76.4c-.4 0-.7-.1-1.1-.1l1.6 11.8c.4-.2.7-.4 1-.6L607.8 76.4zM598.3 76.5c-.3 0-.6.1-.9.1 0 0-.1 0-.1 0l1.9 14.4c.4 0 .7-.1 1.1-.2L598.3 76.5zM537.2 82.2c-.5 0-.8 0-.8 0l.6 3.9c0 0 .2-.2.6-.6L537.2 82.2zM574.8 79c-.4 0-.7.1-1.1.1l1.3 9.9c.4.1.7.1 1.1.2L574.8 79zM593.6 76.9c-.3 0-.7.1-1.1.1l1.9 14.1c.4 0 .7 0 1.1 0L593.6 76.9zM579.5 78.5c-.4 0-.7.1-1.1.1l1.5 11.2c.4.1.7.1 1.1.2L579.5 78.5zM588.9 77.5c-.4 0-.7.1-1.1.1l1.8 13.4c.4 0 .7 0 1.1.1L588.9 77.5z" fill="#1ebaed"></path><path d="M165.8 27.9c-1-4.8-3.8-7.6-7.6-7.6-.6 0-1.2.1-1.8.2l-5.7 1.2c-.3.1-.5.2-.7.4-.1.2-.2.5-.1.7l7.3 35c.1.4.5.8 1 .8l.2 0 5.7-1.2c2.4-.5 4.2-1.8 5.1-3.8.9-1.8 1-4.1.5-6.7L165.8 27.9zM160.4 54.8L154 24.4l3.2-.7c.3-.1.6-.1.9-.1 2.3 0 3.6 2.2 4 4.2l4.3 20.5c.5 2.4 0 5.2-2.8 5.8L160.4 54.8zM195.6 49.3c0 0-8.3 1-8.3 1l-1.7-14.6 6.2-.7c.5-.1.9-.6.8-1.1l-.2-1.3c-.1-.5-.5-.8-1.1-.8 0 0-6.3.7-6.3.7l-1.5-12.9 8.1-.9c.3 0 .5-.2.7-.4.1-.2.2-.5.2-.7l-.2-1.3c-.1-.5-.5-.8-1.1-.8 0 0-10.8 1.3-10.8 1.3-.2 0-.5.1-.6.3-.2.2-.3.5-.3.8l4.2 35.5c.1.5.5.8 1 .8l.1 0 10.9-1.3c.2 0 .5-.1.6-.3.2-.2.3-.5.3-.8l-.2-1.4C196.6 49.7 196.2 49.3 195.6 49.3zM220.2 13.5c-.2-.2-.4-.3-.8-.3 0 0-1.5.1-1.5.1-.5 0-.9.4-1 .9L214.5 43l-6.1-28.3c-.1-.5-.5-.7-1-.7 0 0-1.5.1-1.5.1-.3 0-.6.2-.8.4l-.2.4 8.2 35.6c.1.5.5.8 1 .8l2-.1c.5 0 .8-.4.9-.9l3.5-36 0-.5L220.2 13.5zM240.9 11.8l-.2 0c-4.8.1-7.5 3.6-7.4 9.4l.5 20.5c.1 5.6 3 9 7.6 9l.2 0c4.8-.1 7.6-3.6 7.4-9.4l-.5-20.5C248.3 15.1 245.5 11.8 240.9 11.8zM237.4 42.3l-.6-22c-.1-2.5.9-5.1 3.8-5.2l.1-.6c0 0 0 0 0 0v.6c2.9 0 3.9 2.7 4 5l.6 22c.1 2.4-.9 5.1-4 5.2C238.6 47.3 237.5 44.7 237.4 42.3zM277.2 12.3l-1.8 0c-.5 0-.9.4-1 .9l-.5 28.9c0 1.2-.4 5-3.9 5-1.2 0-2.2-.5-2.8-1.5-.6-.9-.9-2.2-.8-3.7l.5-28.9c0-.5-.4-1-.9-1l-1.8 0c-.5 0-1 .4-1 .9l-.5 28.1c-.1 2.7.5 4.9 1.6 6.5 1.3 1.8 3.1 2.7 5.6 2.8l.2 0c4.6 0 7.3-3.3 7.4-9l.5-28.1c0-.3-.1-.5-.3-.7C277.7 12.4 277.4 12.3 277.2 12.3zM299.6 13.3l-5.2-.3c-.5 0-.9.4-1 .9l-2.2 35.7c0 .3.1.5.2.7.2.2.4.3.7.3l1.7.1c.5 0 1-.4 1-.9l1-16.3 2 .2c1.3.1 2.3.6 3 1.5.9 1.1 1.3 2.7 1.1 4.8 0 0-.1.7-.2 1.9-.1 1.9-.4 5.8.3 8.5.1.5.6 1.2 1.9 1.3l.2 0c.7 0 1.3-.3 1.5-.7.2-.3.2-.7.1-1-.7-1.3-.4-4.8-.3-7.6l.1-2.3c.2-3.3-.8-5.8-3-7.6 2.8-1.6 4.5-4.7 4.7-8.7.2-3.2-.4-5.7-1.7-7.4C304.5 14.5 302.4 13.5 299.6 13.3zM297 16.5l2.4.2c1.8.1 2.9.7 3.7 1.8.7 1.1 1 2.8.8 5.1-.3 4.6-1.9 6.9-4.9 6.9-.1 0-.3 0-.4 0l-2.4-.2L297 16.5zM325.3 15.3l-1.8-.2c-.5 0-.9.4-1 .9l-3.2 35.6c0 .5.3 1 .9 1.1l1.8.2c.5 0 1-.4 1-.9l3.2-35.6C326.2 15.8 325.8 15.4 325.3 15.3zM356.2 18.6l-1.8-.2c-.5 0-.9.4-1 .9l-3.1 27.5-4.2-28.5c-.1-.5-.5-.9-.9-.9l-2.8-.3c-.5 0-.9.4-1 .9l-4 35.5c0 .3 0 .5.2.7.2.2.4.3.7.4l1.8.2c.5 0 .9-.4 1-.9l3.1-27.3 4.3 28.3c.1.5.5.9 1 .9l2.7.3c.5 0 .9-.4 1-.9l4-35.5c0-.3 0-.5-.2-.7C356.7 18.8 356.5 18.6 356.2 18.6zM378.7 20.9c-.4-.1-.8-.1-1.2-.1-4.1 0-6.9 3-7.6 8.2l-2.6 20.3c-.4 2.8 0 5.2 1.1 6.9 1 1.7 2.7 2.8 4.8 3.1.3 0 .5.1.8.1 1.6 0 3-.6 4.2-1.9 0 .3-.1.5-.1.8 0 .3 0 .6.2.8.2.2.4.3.6.4l1.3.2c.5 0 .9-.4 1-.9l2.3-17.7c0-.3 0-.5-.2-.7-.2-.2-.4-.3-.6-.4l-6.9-.9c-.5 0-.9.4-1 .8l-.2 1.3c0 .3 0 .5.2.7.2.2.4.4.7.4l4.3.5-.8 6.4c-.4 3.4-2 6.7-4.6 6.7-.1 0-.3 0-.4 0-1.2-.1-2-.7-2.5-1.7-.5-1-.6-2.3-.4-3.8l2.8-21.8c.3-2.2 1.5-4.6 4-4.6.2 0 .4 0 .6 0 1.2.2 2.1.8 2.6 1.8.5 1 .6 2.3.4 3.8l-.7 5.8c-.1.5.3 1 .9 1.1l1.7.2c.5 0 .9-.4 1-.8l.7-5.1c.3-2.7.1-4.9-.9-6.6C382.9 22.3 381.2 21.2 378.7 20.9zM427 27.1c-.4 0-.7-.1-1.1-.1-4.1 0-7 3.1-7.6 8.3l-2.5 20.4c-.7 5.7 1.7 9.4 6.5 10 .4 0 .7.1 1 .1 4 0 6.7-3 7.3-8.2l.7-5.5c0-.2 0-.5-.2-.7-.2-.2-.4-.4-.7-.4l-1.7-.2c-.5 0-.9.4-1 .9l-.8 6.2c-.1 1.1-.8 4.6-3.9 4.6-.2 0-.3 0-.5 0-1.2-.1-2.2-.8-2.7-1.8-.5-1-.7-2.3-.6-3.7l2.7-21.8c.3-2.2 1.5-4.6 4-4.6.2 0 .3 0 .5 0 3.5.4 3.3 4.3 3.1 5.5l-.8 6.3c-.1.5.3 1 .8 1.1l1.7.2c.5 0 .9-.4 1-.8l.7-5.5c.3-2.7 0-4.9-.9-6.7C431.3 28.5 429.5 27.4 427 27.1zM460.4 31.2l-1.8-.2c-.5 0-.9.4-1 .9l-2.7 28.8c-.1 1.1-.7 4.8-3.8 4.8-.1 0-.3 0-.4 0-1.2-.1-2.1-.7-2.7-1.7-.5-.9-.7-2.2-.6-3.7l2.7-28.8c0-.3-.1-.5-.2-.7-.2-.2-.4-.3-.7-.3l-1.8-.2c-.5 0-.9.4-1 .9l-2.6 28c-.5 5.8 1.8 9.3 6.5 9.8.3 0 .6 0 .9 0 4.2 0 6.9-3.1 7.4-8.4l2.6-28C461.3 31.7 460.9 31.2 460.4 31.2zM483.3 67l-6.4-.3 1.6-33.3c0-.3-.1-.5-.2-.7-.2-.2-.4-.3-.7-.3l-1.8-.1c-.5 0-1 .4-1 .9L473 68.8c0 .3.1.5.3.7.2.2.4.3.7.3l9.2.4c.5 0 1-.4 1-.9l.1-1.4c0-.3-.1-.5-.3-.7C483.8 67.1 483.5 67 483.3 67zM507 32.9l-13.1-.1c-.5 0-1 .4-1 1l0 1.4c0 .5.4 1 1 1l4.8 0-.1 33.4c0 .5.4 1 1 1l1.7 0c.5 0 1-.4 1-1l.1-33.4 4.7 0c.6 0 1-.4 1-1l0-1.4C508 33.4 507.5 33 507 32.9zM533.1 32.3l-1.7.1c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7l1 28.9c.1 1.5-.2 2.8-.8 3.7-.6 1-1.6 1.5-2.9 1.5-3.2 0-3.7-3.5-3.7-5l-1-28.9c0-.5-.4-.9-1-.9l-1.7.1c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7l1 28.1c.2 5.6 2.9 8.9 7.4 8.9l.3 0c2.4-.1 4.4-1.1 5.6-2.8 1.1-1.6 1.6-3.9 1.5-6.5l-1-28.1C534.1 32.7 533.7 32.3 533.1 32.3zM563.7 58.9l-.2-2.3c-.3-3.3-1.6-5.6-4-7.1 2.5-2 3.8-5.3 3.5-9.2-.6-7.6-4.9-9.2-8.4-9.2-.3 0-.6 0-1 0l-5.1.4c-.3 0-.5.1-.7.3-.2.2-.2.4-.2.7l2.8 35.6c0 .5.5.9 1 .9l1.8-.1c.6 0 1-.5.9-1l-1.3-16.3 2-.1.3 0c2.8 0 4.5 2.1 4.7 5.6 0 0 0 .7.1 2 .1 1.9.5 5.8 1.5 8.3.1.4.6 1 1.7 1l.3 0c.7-.1 1.3-.4 1.6-.9.2-.3.1-.7-.1-1C564.1 65.1 563.9 61.8 563.7 58.9zM554.5 34.3c3 0 4.5 1.9 4.8 6.2.2 2.3-.1 4.1-.8 5.4-.7 1.3-1.9 2-3.6 2.2l-2.4.2-1.1-13.7 2.4-.2C554.1 34.3 554.3 34.3 554.5 34.3zM592.2 62.5c-.1-.5-.5-.8-1.1-.8 0 0-8.3 1-8.3 1L581 48.1l6.2-.8c.5-.1.9-.6.8-1.1l-.2-1.3c-.1-.5-.5-.8-1.1-.8 0 0-6.3.8-6.3.8L579 31.9l8.1-1c.5-.1.9-.6.8-1.1l-.2-1.3c-.1-.5-.5-.8-1.1-.8 0 0-10.8 1.3-10.8 1.3-.6.1-1 .6-.9 1.1l4.4 35.5c.1.5.5.8 1 .8l.1 0 10.9-1.4c.3 0 .5-.2.7-.4.2-.2.2-.4.2-.7L592.2 62.5z" fill="#231f20"></path></svg>
        </div>
    </div>

    <div class="links d-none d-xl-block">
        <div><a href="{{ route('posts', 'photo-of-the-day') }}">Photo of the day</a></div>
        <div class="separator"></div>
        <div><a href="{{ route('posts', 'best-of-2021') }}">Τα καλύτερα του 2021</a></div>
        <div class="separator"></div>
        <div><a href="{{ route('posts', 'prosopa') }}">Πρόσωπα</a></div>
    </div>

    {{-- <div class="search">
        <img class="active" src="{{ asset('images/search-icon-active.jpg') }}" alt="">
        <img src="{{ asset('images/search-icon-inactive.jpg') }}" alt="">

        <form class="d-flex" method="GET" action="{{ route('search') }}">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div> --}}

    @include('includes.search_popup')
    
</div>