<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center w-full py-2 bg-blue-600 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
