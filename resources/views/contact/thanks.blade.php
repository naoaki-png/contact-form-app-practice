<x-guest-layout>
    <div class="relative min-h-screen flex items-center justify-center overflow-x-hidden bg-white">
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" {{--
                上から降ってくるアニメーション --}} x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-500" {{-- フワッと消える --}} x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute top-6 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-sm px-4">
                <div
                    class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-md shadow-lg text-sm text-center font-medium backdrop-blur-sm bg-opacity-95">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <!-- 背景の大きな "Thank you" テキスト -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none px-4">
            <h1
                class="text-[clamp(80px,15vw,250px)] font-serif text-amber-300 opacity-30 select-none whitespace-nowrap text-center max-w-full">
                Thank you
            </h1>
        </div>

        <!-- メインコンテンツ -->
        <div class="relative z-10 text-center py-12">
            <h2 class="text-2xl md:text-3xl font-serif text-amber-900 mb-12">
                お問い合わせありがとうございました
            </h2>
            <div class="flex justify-center">
                <a href="/"
                    class="px-8 py-3 bg-amber-900 text-white rounded-md hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-colors uppercase tracking-wide">
                    HOME
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
