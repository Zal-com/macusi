<div>
    <div class="d-flex flex-wrap justify-content-center" id="accordion">
        @foreach($mots as $mot)
            <x-card :mot="$mot" :count="$count"/>
            @php
                $count++;
            @endphp
        @endforeach
        <script>
            function rotate(id){
                if(id.style.rotate == '270deg'){
                    id.style.rotate = '90deg';
                }
                else{
                    id.style.rotate = "270deg"
                }

            }
        </script>
        <div class="d-flex justify-content-end mt-4">
            {{ $mots->onEachSide(1)->links() }}
        </div>
    </div>

</div>

