<div>



    @php
        $images = [
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-2 '],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-2 row-span-2'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-3 row-span-4'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-2 '],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-4 row-span-3'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-3'],
            ['src' =>  '/images/362203938_717630203706652_3259959972436561142_n 2.jpg', 'classes' => 'col-span-7'],
    ];
    @endphp

    <div class="grid grid-cols-7 gap-[10px] p-[10px]">
        @foreach($images as $key => $image)
            <div class="{{$image['classes']}} ">
                <img class="h-full object-cover rounded-[15px]" src="{{$image['src']}}" alt="">
            </div>
        @endforeach
    </div>
</div>
