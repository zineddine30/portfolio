<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<button
    {{
        $attributes->class([
            'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
            'hover:bg-primary hover:border-primary hover:text-white' => $variant == 'outline-primary',
            'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant == 'outline-red',
            'hover:bg-red-700 hover:border-red-700 hover:text-white hover:bg-red-800' => $variant == 'red',
            'hover:bg-gray-900 hover:border-gray-700 hover:text-white hover:bg-gray-800' => $variant == 'dark',
            'bg-primary border-primary text-white hover:bg-opacity-80' => $variant == 'primary',
            ])
     }}
    >
     {{ $slot }}
</button>
